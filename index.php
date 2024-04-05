<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assetes/images/home.png" type="image/png">
    <link rel="stylesheet" href="assetes/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Home</title>
</head>

<body>
    <?php include "topnav.php" ?>
    <?php include "navbar.php" ?>
    <div class="container">
        <br /> <br />
        <p class="fs-5 text-center text-md-start">The Oujda-NLP team carried out the project of AlKhalil Platform for Arabic Language Processing, with the valuable support of the Arab League Educational, Cultural and Scientific Organization (ALECSO).
            The project aims to make available to researchers interested in Arabic processing a set of programs developed by the Oujda-NLP team.
            From the platform, researchers can download code sources and APIs, and test the following programs: </p>

        <div class="d-flex justify-content-center justify-content-md-start">
            <ul class="liens_p">
                <li>Alkhalil Morpho Sys</li>
                <li>Root extraction</li>
                <li>Lemmatizer</li>
                <li>Stemmer</li>
                <li>POS Tagger</li>
                <li>Parser</li>
            </ul>
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