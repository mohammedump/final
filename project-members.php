<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assetes/images/members.png" type="image/png">
    <link rel="stylesheet" href="assetes/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>members</title>
    <style>
        .card {
            width: 100%;
            border-radius: 15px;
            margin-right: 10px; 
            margin-bottom: 10px; 
        }
        .photos-container {
            margin-bottom: 50px; 
        }
    </style>
    </style>
</head>

<body class="page-members">
    <?php include "topnav.php" ?>
    <?php include "navbar.php" ?>
    <div class="container mt-5 photos-container">
        <div class="row justify-content-start">
        <?php
            $image_directory = 'assetes/images/image1/';

            // Tableau associatif pour spécifier l'ordre des images
            $image_order = array(
                'mazroui.jpg' => 1,
                'lakhouaja.jpg' => 2,
                'meziane.jpg' => 3,
                'boudlal.jpg' => 4,
                'belahbib.jpg' => 5,
                'ouldAbdellah.jpg' => 6,
                'boudchiche.jpg' => 7,
                'ababou.jpg' => 8,
                'chennoufi.jpg' => 10,
                'zeroual.jpg' => 11,
                'moataz.jpg' => 12,
                'reqqass.jpg' => 13,
                'nassiri.jpg' => 14,
                'elkah.jpg' => 15,
                'berrichi.jpg' => 16,
                'touahri.jpg' => 17,
                'belayachi.jpg' => 18,
                'masbah.jpg' => 19,
                'khlif.jpg' => 20,

                // Ajoutez d'autres images avec leur ordre respectif
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
    <div onclick="scrollToTop()" class="scrollTop">↑
    </div>
    <script src="assetes/js/main.js"></script>
    <?php include "footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>
