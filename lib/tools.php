<?php
require_once ('config.php');

//convert text in array separate by PHP_EOL
function linesToArray(string $string) {
    return explode(PHP_EOL, $string);
}

function getLevel() {
  if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    
    $host = host();
    $pdo = new PDO('mysql:dbname='.$host['dbName'].';host='.$host['host'].';charset=utf8mb4',''.$host['username'].'', ''.$host['password'].'');
   
    //return connected  username
    $userConnected = $_SESSION['username'];

    //return db user row
    $myquery = "SELECT * FROM users JOIN roles ON users.role_id = roles.id WHERE username = '" . $userConnected . "';";
    $query = $pdo->query($myquery);
    $result = $query->fetch();
    
    //return user's slug
    return (int) $result['slug'];

  } else {
    return 'user non connecté';;
  }

}

function slugify($text, string $divider = '.') {
 
  // replace non letter or digits by divider
  $text = preg_replace('~[^\pL\d]+~u', $divider, $text);
  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '.', $text);
  // trim
  $text = trim($text, $divider);
  // remove duplicate divider
  $text = preg_replace('~-+~', $divider, $text);
  // lowercase
  $text = strtolower($text);

  if (empty($text)) {
    return 'n-a';
  }
  return $text;
}


function ifUserExist($userTry){
  $host = host();
  $pdo = new PDO('mysql:dbname='.$host['dbName'].';host='.$host['host'].';charset=utf8mb4',''.$host['username'].'', ''.$host['password'].'');
  
  $myquery = "SELECT COUNT(*) FROM users WHERE  username = '" . $userTry ."';";
    $query = $pdo->query($myquery);
    $result = $query->fetchAll(PDO::FETCH_NUM);
    $result=$result[0][0];
    return $result;
}
