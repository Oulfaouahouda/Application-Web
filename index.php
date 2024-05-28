<?php
session_start();

include "function.php"

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

<!-- Home -->
<section id="home">
    <div class="left">
        <h1>Discover affordable treasures at <span>TRADITIONAL CRAFTS MOROCCO</span></h1>
        <p>Our website offers a carefully selected range of traditional Moroccan handicrafts at competitive prices. We work directly with local artisans to provide authentic quality and a unique variety of choices to our customers.</p>
        <a href="#">Explorez MAINTENANT</a>
    </div>
    <div class="right">
        <img src="images/index.png" alt="">
    </div>
</section>

<!-- Display categories -->
<div class="container">
    <h2>Categories</h2>
    <ul>
        <?php foreach ($categories as $category): ?>
            <li><?= $category['name']; ?></li>
        <?php endforeach; ?>
    </ul>
</div>

<!-- Display products -->
<div class="container">
    <h2>Products</h2>
    <div class="row">
        <?php foreach ($products as $product): ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/<?= $product['image']; ?>" class="card-img-top" alt="<?= $product['name']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product['name']; ?></h5>
                        <p class="card-text"><?= $product['description']; ?></p>
                        <a href="SingleProduct.php?id=<?= $product['id']; ?>" class="btn btn-primary">More details</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include "footer.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>
