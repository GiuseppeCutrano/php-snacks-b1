<?php

$posts = [

    '02/01/2021' => [
        [
            'title' => 'Post 1',
            'author' => 'Giuseppe Cutrano',
            'text' => 'Tanti auguri'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Giuseppe Cutrano',
            'text' => 'Tantissimi auguri'
        ],
    ],
    '03/01/2021' => [
        [
            'title' => 'Post 3',
            'author' => 'Giuseppe Cutrano',
            'text' => 'Anche a te'
        ]
    ],
    '04/01/2021' => [
        [
            'title' => 'Post 4',
            'author' => 'Giuseppe Cutrano',
            'text' => 'Ciao'
        ],
       
       
    ],
];
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PHP Snack3</title>
    </head>
    <body>
        <h1>Lista dei post</h1>
            <?php
                foreach ($posts as $date => $date_posts) {
            ?>

            <h2> <?php echo $date; ?> </h2>

                <?php
                    foreach ($date_posts as $post) {
                ?>

                <h3> <?php echo $post['title']; ?> </h3>
                <h3> <?php echo $post['text']; ?> </h3>
                <h3> <?php echo $post['author']; ?> </h3>

            <?php
            }
            }
            ?>
    </body>
</html>