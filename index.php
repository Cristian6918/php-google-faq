<?php
include("faq_db.php");







?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Radio+Canada:wght@600&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <title>Document</title>
</head>

<body>
    <header>
        <div class="header-top">
            <div class="header-container">
                <div class="img-container">
                    <img src="img/Google-logo.png" alt="Google logo">
                </div>
                <span>Privacy & Terms</span>
            </div>
            <div class="header-container header-container-right">
                <div class="circle-container">
                    <a href=""><i class="fa-solid fa-grip-vertical"></i></a>
                </div>
                <div class="circle-container">
                    <img src="img/profile.png" alt="profile picture">
                </div>
            </div>
        </div>
        </div>
        <div class="header-bottom">
            <div class="list-header">
                <span><a href="">Overview</a> </span>
                <span><a href="">Privacy Policy</a> </span>
                <span><a href="">Terms of Service</a> </span>
                <span><a href="">Technologies</a> </span>
                <span class="selected"><a href="">FAQ</a> </span>
            </div>
        </div>

    </header>
    <main>
        <div class="main-container">
            <div class="main-content">
                <?php foreach ($faq as $question) {
                    echo ("<h3>" . $question["question"] . "</h3>");
                    echo (" <div class='question'>" . $question["answear"] . "</div>");
                }; ?>
            </div>
        </div>
    </main>


</body>

</html>