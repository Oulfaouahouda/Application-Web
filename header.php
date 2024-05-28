<!--The navbar or the header-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <nav class="navbar bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="images/traditional-crafts-logo-removebg-preview.png" alt="Traditional Crafts" width="100" height="84">
                </a>
            </div>
        </nav>        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Dropdown for Categories -->
                <li class="nav-item dropdown" none>
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu" >
                        <!-- Loop through categories and generate dropdown items -->
                        <?php
                        // Récupération des catégories depuis l'API
                        $response_categories = file_get_contents('http://localhost/BackEnd/api/categorie/get.php');
                        $categories = json_decode($response_categories, true);

                        // Affichage des catégories dans le dropdown
                        foreach ($categories as $categorie) {
                            echo '<li><a class="dropdown-item" href="#">' . $categorie['name'] . '</a></li>';
                        }
                        ?>
                    </ul>
                </li>

                <!-- Links for Profile, Login, Signup -->
                <?php if (isset($_SESSION['full_name'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Profile.php">Profile</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Login.php">LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Signup.php">SIGNUP</a>
                    </li>
                <?php endif; ?>

            </ul>
            <!-- Search form -->
            <form class="d-flex" role="search" action="index.php" method="POST">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            <!-- Logout button -->
            <?php if (isset($_SESSION['full_name'])) : ?>
                <a href="Logout.php" class="btn btn-primary"> Log Out </a>
            <?php endif; ?>
        </div>
    </div>
</nav>
