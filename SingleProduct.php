<?php
if (isset($_GET['id'])) {
    $productId = $_GET['id'];
    $response = file_get_contents("http://localhost:8888/backend/api/product/getSingleProduct.php?id=$productId");
    $product = json_decode($response, true);
}

include "function.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traditional Crafts - Morocco</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>

    <?php include "header.php"; ?>

    <div class="row col-12 p-5 mt-4">
        <div class="card col-8 offset-2">
            <img src="images/<?php echo  $product['image']; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $product['name']; ?></h5>
                <p class="card-text"><?php echo  getDescriptionById( $categories,$product['category_id']) ; ?></p>
            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">categorie: <?php echo getCategoryNameById($categories, $product['category_id']); ?></li>
                <li class="list-group-item">prix: <?php echo $product['price']; ?> $</li>
            </ul>
        </div>
    </div>

    <?php include "footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>
