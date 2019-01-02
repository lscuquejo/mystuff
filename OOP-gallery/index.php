<?php

require __DIR__.'/config.php';

$shipLoader = new MyPDO(
  $configuration['db_dsn'],
  $configuration['db_user'],
  $configuration['db_pass']
);

$imageArray = new ImageLoader($dbDsn, $dbUser, $dbPass);

if (array_key_exists('name', $_POST) OR array_key_exists('uploaded_image', $_POST)) {

    $uploaded_image = mysqli_real_escape_string($link, $_FILES ['poggers_file']['name']);
    $uploaded_image = str_replace(' ','_', $uploaded_image);

    $name = mysqli_real_escape_string($link, $_POST['name']);

    $files_var = $_FILES['poggers_file']['type'];

    if ($_FILES['poggers_file']['name'] == '' or ($files_var != 'image/png' and $files_var != 'image/jpeg' and $files_var != 'image/jpg')) {

        $mesage = "<div class='alert alert-danger' role='alert'>the image is required. or this is not an valid format</div>";

    } else {

        $query = "SELECT `id` FROM `gallery_images` WHERE uploaded_image = '$uploaded_image'";

        $result = mysqli_query($link, $query);

        if (mysqli_num_rows($result) > 0) {

            $mesage = "<div class='alert alert-danger' role='alert'>That image name has already been taken.</div>";

        } else {

          $query = " INSERT INTO `gallery_images` (`name`, `uploaded_image`, `download_c`, `view_c`) VALUES ('$name','$uploaded_image',0,0)";

          echo $query;

            if (mysqli_query($link, $query)) {

               move_uploaded_file($_FILES['poggers_file']['tmp_name'], "usersimg/".$uploaded_image);

               $mesage = "<div class='alert alert-primary' role='alert'>Your image has been uploaded</div>";

            } else {

                $mesage ="<div class='alert alert-danger' role='alert'>There was a problem to upload your image - please try again later.</div>";

            }

        }

    }

}

if ($_POST['deleting']) {

  $id = mysqli_real_escape_string($link, $_POST['deleting']);

  $query = "SELECT * FROM gallery_images WHERE id = '$id'";

  $result = mysqli_query($link, $query);

  $gallery = mysqli_fetch_assoc($result);

  $poggers = "usersimg/".$gallery['uploaded_image'];

  unlink($poggers);

  $query = "DELETE FROM `gallery_images` WHERE `id` = '$id'";

  $result = mysqli_query($link, $query);

  $mesage ="<div class='alert alert-success' role='alert'>Your image has been deleted successfully.</div>";

}

$query = "SELECT COUNT(*) FROM gallery_images";

$result = mysqli_query($link, $query);

$lines = mysqli_fetch_assoc($result);

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
              <form enctype="multipart/form-data" method="post" action="Uploader.php">
                <fieldset class="form-group row">
                  <label for="image_name" class="col-sm-2">Image Name</label>
                  <div class="col-sm-10">
                    <input type="text" id="image_name" class="form-control" name="name">
                  </div>
                </fieldset>

                <fieldset class="form-group row">
                    <div class="custom-file col-sm-4" id="filebrowse">
                      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="poggers_file">
                    </div>

                </fieldset>

                <fieldset class="form-group row">
                  <button type="submit" class="btn btn-primary">Upload</button>
                </fieldset>
                <fieldset>
                  <?php echo "$mesage" ?>
                </fieldset>
              </form>

              <form method="post" id="hiddenform">
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

                if ($_GET['nextpage']) {

                  $next_page = mysqli_real_escape_string($link, $_GET['nextpage']);
                  $ini = $next_page +1;

                } else {

                  $next_page = 0;
                  $ini = $next_page;

                }

                $query = "SELECT * FROM `gallery_images` WHERE 1 ORDER BY `id` DESC LIMIT $ini,$pagenum";

                $result = mysqli_query($link, $query);

                $i = 0;

                foreach ($imageArray->queryForImages() as $gallery){

            ?>
              <div class="col-md-4">
                <div class="card md-4 box-shadow" style="width:20rem;" id="floated_card">
                  <img id="default_image" class="card-img-top" src="usersimg/<?php echo $gallery["uploaded_image"];?>" alt="">
                  <div class="card-body">
                    <p class="card-text"><h2><?php echo $gallery["name"];?></h2></p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a href="image.php?id=<?php echo $gallery["id"];?>"><button type="button" class="btn btn-sm btn-outline-secondary"><img src="websiteimg/eye.png" alt="" id="eye"><?php echo $gallery["view_c"];?> Views</button></a>
                        <button type="button" class="btn btn-sm btn-outline-secondary" onclick="del(<?php echo $gallery['id'] ?>) "><img src="websiteimg/deleteicon.png" alt="" id="eye">Delete</button>
                        <a href="download.php?id=<?php echo $gallery["id"];?>"><button type="button" class="btn btn-sm btn-outline-secondary"><img src="websiteimg/uploadicon.png" alt="" id="eye"><?php echo $gallery["download_c"];?> Donwloads</button></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php

              $last_id = $gallery["id"];
              print_r($gallery);
              die ();
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
          <?php if ($next_page != 0) {?>
          <a href="index.php?nextpage=<?php echo $next_page -$pagenum;?>"><button type="button" class="btn btn-primary">Previous Page</button></a>
          <?php  }  ?>
        </p>

        <ul class="pagination float-left">
          <?php

          $countlines = $lines['COUNT(*)']/$pagenum;

          $totalpages = 0;

          while ($totalpages <= $countlines) {

          ?>

            <li class="page-item"><a class="page-link" href="index.php?nextpage=<?php echo $totalpages *$pagenum; ?>"><?php echo $totalpages?></a></li></a>

          <?php

          $totalpages++;

          }
          ?>
        </ul>

        <p class="float-left">
          <?php if ($next_page <= $lines['COUNT(*)']) {    ?>
          <a href="index.php?nextpage=<?php echo $next_page +$pagenum;?>"><button type="button" class="btn btn-primary">Next Page</button></a>
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
