<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include 'css/style.css';?></style>
    <title>Document</title>
</head>
<body>
    <div class="square teachers">
        <p>Teachers</p>
        <ul>
            <?php 
                foreach($db as $key => $person){
                    if($key === 'teachers'){
                        foreach( $person as $teachers){
                            echo '<li>' . $teachers['name'] . ' ' . $teachers['lastname'] . '</li>';
                        }
                    }
                }
            ?>
        </ul>
    </div>    
    <div class="square pm">
        <p>PM</p>
        <ul>
            <?php 
                foreach($db as $key => $person){
                    if($key === 'pm'){
                        foreach( $person as $pm){
                            echo '<li>' . $pm['name'] . ' ' . $pm['lastname'] . '</li>';
                        }
                    }
                }
            ?>
        </ul>
    </div>    
    
</body>
</html>