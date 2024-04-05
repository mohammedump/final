<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assetes/images/cordinator.png" type="image/png">
    <link rel="stylesheet" href="assetes/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>cordinator</title>
    <style>
        .card {
            width: 100%;
            border-radius: 15px;
            margin-right: 10px; /* Ajustez cet espacement selon vos préférences */
            margin-bottom: 10px; /* Ajustez cet espacement selon vos préférences */
        }
    </style>
</head>

<body>
<body class="page-members">
    <?php include "topnav.php" ?>
    <?php include "navbar.php" ?>
    <div class="container mt-5">
        <div class="row justify-content-start">
        <?php
            // Chemin du dossier contenant les images
            $image_directory = 'assetes/images/image2/';

            // Tableau associatif pour spécifier l'ordre des images
            $image_order = array(
                'mazroui.jpg' => 1,
                'Abu-Darwish.jpg' => 2,
                'Dahmani.jpg' => 3,
                'Alhakim.jpg' => 3,

            );

            // Récupère la liste des fichiers dans le dossier
            $files = scandir($image_directory);

            // Trie le tableau associatif en fonction des valeurs (ordre)
            asort($image_order);

            // Boucle à travers les fichiers
            foreach ($image_order as $file => $order) {
                // Vérifie si le fichier est une image (JPG ou PNG)
                if (pathinfo($file, PATHINFO_EXTENSION) == 'jpg' || pathinfo($file, PATHINFO_EXTENSION) == 'png') {
                    echo '<div class="col-md-3 mb-4">';
                    echo '<div class="card text-center">';
                    echo '<img src="' . $image_directory . $file . '" class="card-img-top img-fluid" style="max-width: 100%; height: auto; border-radius: 15px;" alt="' . $file . '">';
                    echo '</div>';
                    echo '</div>';
                }
            }
            ?>
        </div>
    </div>

    <div onclick="scrollToTop()" class="scrollTop">↑</div>
    <script src="assetes/js/main.js"></script>
    <?php include "footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>
