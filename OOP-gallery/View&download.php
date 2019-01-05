<?php

    require __DIR__.'/config.php';

    $downloadView = new Image($dbDsn, $dbUser, $dbPass);
    $downloadView->setId($_GET["id"]);
    $arrayD = $downloadView->getImageById();

    if($_GET["download"]){
        
        $downloadView->incrementDownload();
        $file_url = 'usersimgs/'.$arrayD["uploaded_image"];
        header('Content-Type: application/octet-stream');
        header("Content-Transfer-Encoding: Binary");
        header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");
        readfile($file_url);
    
    }else{
        
        $downloadView->incrementView();

?>
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>

        <a href="index.php"><div class="container">

        <div style="width: 50rem; padding-top: 10%; padding-left:5%;">

            <img id="default_image" class="card-img-top" src="usersimgs/<?php echo $arrayD['uploaded_image'];?>" alt="">

        </div>

        </div></a>

    </body>
    </html>

    <?php
    /*
    **end else
    */
    }

    ?>