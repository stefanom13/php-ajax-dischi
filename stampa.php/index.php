<?php

include __DIR__ . '/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="app.css">
</head>

<body>
    <div id="app">
        <header class="headerLogo">
            <figure class="figureLogo">
                <img src="./Spotify_Logo.png" alt="">
            </figure>
        </header>
        <main class="mainContent">
            <section class="">
                <div class="container">
                    <ul class="albumWrap">

                        <?php

                        foreach ($discs as $value) :
                        ?>
                            <li class="card album">

                                <figure class="cardThumb">
                                    <img src="<?= $value['poster'] ?>" alt="">
                                </figure>

                                <div class="infoCard">
                                    <h3 class="titleCard"> <?= $value['title'] ?> </h3>
                                    <p class="authorCard"><?= $value['author'] ?> </p>
                                    <p class="yearCard"><?= $value['year'] ?>  </p>

                                </div>

                            </li>
                        <?php
                        endforeach;


                        ?>
                        <!-- ciclo php    -->

                    </ul>
                </div>
            </section>
        </main>
    </div>
</body>

</html>