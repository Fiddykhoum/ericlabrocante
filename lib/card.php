<?php

function getCardById(PDO $pdo, int $id) {
    $query = $pdo->prepare("SELECT * FROM cards WHERE id = :id");
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch();
}

function getCardImage(string|null $image) {
    if ($image === null) {
        return _ASSETS_IMG_PATH_.'card_default.jpg';
    } else {
        return _CARDS_IMG_PATH_.$image;
    }
}

function getCards(PDO $pdo, int $limit = null) {
    $sql = 'SELECT * FROM photos ORDER BY id DESC';

    if ($limit) {
        $sql .= ' LIMIT :limit';
    }

    $query = $pdo->prepare($sql);

    if ($limit) {
        $query->bindParam(':limit', $limit, PDO::PARAM_INT);
    }

    $query->execute();
    return $query->fetchAll();
}

 
?>