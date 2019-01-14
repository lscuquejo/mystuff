<?php

require __DIR__.'/config.php';

$imagesArray = new ImageLoader($dbDsn, $dbUser, $dbPass);
$imagesArray->setNextPage($_GET["nextpage"]);
$imagesArray->setErrorMsg($_GET["errormsg"]);
$imagesArray->settingPages();
$queryForImages = $imagesArray->queryForImages();
$countLines = $imagesArray->countLines();

$getIni = $imagesArray->getIni();
$getNextPage = $imagesArray->getNextPage();
$getLines = $imagesArray->getLines();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Image Gallery</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet" type="text/css">

    <script type="text/javascript">

      function del(myId){

        if (confirm('Are you sure you want to Delete this photo')) {

          document.getElementById('submitdel').value = myId;
          document.getElementById('hiddenform').submit();

        }
      };

    </script>
  </head>

  <body>
    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container" >
          <div class="row">

            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">Image Gallery</h4>
              <p class="text-muted">Post Images and please be polite</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow me on Twitter</a></li>
                <li><a href="https://www.facebook.com/leonardo.soarescuquejo" class="text-white">Follow me on Facebook</a></li>
                <li><a href="https://twitter.com/" class="text-white">leonardo.s@cuquejo.org</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>Album</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Image Gallery</h1>
          <p class="lead text-muted">please be polite or your image <br>will be deleted!!!</p>
          <p>
            <div class="container" id="form-post">
              <form enctype="multipart/form-data" method="post" action="/Uploader.php">
                <fieldset class="form-group row">
                  <label for="image_name" class="col-sm-2">Image Name</label>
                  <div class="col-sm-10">
                    <input type="text" id="image_name" class="form-control" name="name" required>
                  </div>
                </fieldset>

                <fieldset class="form-group row">

                  <div class="custom-file col-sm-4">
                    <input type="file" class="custom-file-input" id="validatedCustomFile" name="poggers_file" required>
                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                  </div>

                </fieldset>

                <fieldset class="form-group row">
                  <button type="submit" class="btn btn-primary">Upload</button>
                </fieldset>

                <?php 
                
                if ($imagesArray->getErrorMsg() != "")
                {

                ?>

                <div class='alert alert-danger' role='alert'>That is not an image or is not suported format(Png, Jpg or Jpeg)</div>;


                <?php 

                }
                  
                ?>

              </form>

              <form method="post" id="hiddenform" action="deleter.php">
                <fieldset class="form-group row">
                  <div class="col-sm-10">
                    <input type="hidden" class="form-control" name="deleting" value="" id="submitdel">
                  </div>
                </fieldset>

              </form>

            </div>
          </p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container" id="album_html">
          <div class='row'>

            <?php

                foreach ($queryForImages as $gallery){

            ?>
              <div class="col-md-4">
                <div class="card md-4 box-shadow" style="width:20rem;" id="floated_card">
                <a href="ViewDownload.php?id=<?php echo $gallery["id"];?>&view=true"><img id="default_image" class="card-img-top" src="usersimgs/<?php echo $gallery["uploaded_image"];?>" alt=""></a>
                  <div class="card-body">
                    <p class="card-text"><h2><?php echo $gallery["name"];?></h2></p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a href="ViewDownload.php?id=<?php echo $gallery["id"];?>&view=true"><button type="button" class="btn btn-sm btn-outline-secondary"><img src="websiteimg/eye.png" alt="" id="eye"><?php echo $gallery["view_c"];?> Views</button></a>
                        <button type="button" class="btn btn-sm btn-outline-secondary" onclick="del(<?php echo $gallery['id'] ?>) "><img src="websiteimg/deleteicon.png" alt="" id="eye">Delete</button>
                        <a href="ViewDownload.php?id=<?php echo $gallery["id"];?>&download=true"><button type="button" class="btn btn-sm btn-outline-secondary"><img src="websiteimg/uploadicon.png" alt="" id="eye"><?php echo $gallery["download_c"];?> Donwloads</button></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php

              }
              ?>

            </div>
          </div>
        </div>
      </div>

    </main>

    <footer class="text-muted">
      <div class="container">


        <p class="float-left">
          <?php if ($getNextPage != 0) {?>
          <a href="index.php?nextpage=<?php echo $getNextPage -$this->$GLOBALS["pagenum"];?>"><button type="button" class="btn btn-primary">Previous Page</button></a>
          <?php  }  ?>
        </p>

        <ul class="pagination float-left">
          <?php

          $totalPages = 0;
 
          while ($totalPages < $countLines) {

          ?>

            <li class="page-item"><a class="page-link" href="index.php?nextpage=<?php echo $totalPages *$GLOBALS["pagenum"]; ?>"><?php echo $totalPages?></a></li></a>

          <?php

          $totalPages++;

          }
          ?>
        </ul>
          
        <p class="float-left">
          <?php if (($getNextPage + $GLOBALS["pagenum"])  <= $getLines["COUNT(*)"]) {    ?>
          <a href="index.php?nextpage=<?php echo $getNextPage +  $GLOBALS["pagenum"];?>"><button type="button" class="btn btn-primary">Next Page</button></a>
          <?php  }  ?>
        </p>

    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">

        </script>
    <script>window.jQuery || document.write('<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/jquery-slim.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.0/holder.js"></script>
  </body>
</html>
