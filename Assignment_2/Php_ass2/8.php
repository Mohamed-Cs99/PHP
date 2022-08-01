<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   
    <?php
    $instructors = [
        'kareem fouad' => [
            'job' => 'backend developer',
            'track' => 'php',
        ],
        'ahmed bahnasy' => [
            'job' => 'frontend developer',
            'track' => 'angular',
        ],
        'ahmed nasr' => [
            'job' => 'backend developer',
            'track' => '.net',
        ],
    
    ]  ;
    
   echo "<ul>" ;
   foreach ($instructors as $key => $data) {
    echo "<li>$key <ul>";
    
    foreach ($data as $key => $value) {
        echo "<li>$key : $value</li>" ;
    }
    
    echo "</ul></li>" ;
   }
    
   echo "</ul>";


    ?>
</body>
</html>