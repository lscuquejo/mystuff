
  <?php

    include("project-1.php")

  ?>

  <!doctype html>

  <html lang="en">

    <head>

      <meta charset="utf-8">

      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <link rel="stylesheet"

      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous">

      <title>Hello, world!</title>

      <style>

      button{

        margin-left: 15px;


      }

      #button-submit{

        padding-top: 15px;

      }

      h1{

        padding-top: 5px;
        padding-bottom: 15px;
        color: black;


      }

      </style>

    </head>

    <body>

      <div class="container">

        <div id="contact">

          <a href="https://www.facebook.com/leonardo.soarescuquejo?ref=bookmarks"><h1><strong>Get in touch! with Leonardo</strong></h1></a>

        </div>

        <div id="error">

          <? echo $error.$successMessage; ?>

        </div>

        <form method="post">

          <fieldset class="form-group row">

            <label for="email" class="col-sm-2"> <h3>Email address</h3></label>

            <div class="col-sm-10">

              <input type="email" id="email" name="email" class="form-control">

              <small class="text-muted">

                We'll never share your email with outsiders!!!

              </small>

            </div>

          </fieldset>

          <fieldset class="form-group row">

            <label for="subject" class="col-sm-2">Subject</label>

            <div class="col-sm-10">

              <input type="text" id="subject" name="subject" class="form-control">

            </div>

          </fieldset>

          <fieldset class="form-group row">

            <label for="exampleFormControlTextarea1" class="col-sm-6">What would you like to ask us?</label>

            <div class="col-sm-10">

              <textarea class="form-control" id="content" name="content" rows="3"></textarea>

            </div>

          </fieldset>

          <fieldset id="button-submit" class="form-group row">

            <button type="submit" class="btn btn-primary">Submit</button>

          </fieldset>

        </form>

      </div>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

      <script type = "text/javascript">

        $("form").submit(function (e) {

            e.preventDefault();

            var error = "";

            if($("#email").val() == ""){

              error += "<p>The email fiel is requiered.</p>";

            }

            if($("#subject").val() == ""){

              error += "<p>The subject fiel is requiered.</p>";

            }

            if($("#content").val() == ""){

              error += "<p>The text box is not filled.</p>";

            }

            if (error != "") {

              $("#error").html('<div class="alert alert-danger" role="alert"><strong>There are some missing field:</strong><br>' + error + '</div>');

            } else {

              $("form").unbind('submit').submit();

            }

        });


      </script>

    </body>

  </html>
