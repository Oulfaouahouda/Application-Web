<?php

// Récupération des catégories depuis l'API
$response_categories = file_get_contents('http://localhost/BackEnd/api/categorie/get.php');
$categories = json_decode($response_categories, true);

// Récupération des produits depuis l'API
$response_products = file_get_contents('http://localhost/BackEnd/api/product/get.php');
$products = json_decode($response_products, true);

function getDescriptionById($categories, $id) {
    foreach ($categories as $category) {
        if ($category['id'] == $id) {
            return $category['description'];
        }
    }
    return null;
}


function getCategoryNameById($categories, $id) {
    foreach ($categories as $category) {
        if ($category['id'] == $id) {
            return $category['name'];
        }
    }
    return null;
}
?>