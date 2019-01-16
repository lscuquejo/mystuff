  <?php

    if ($_GET['city']) {

      $forecastPage = file_get_contents("https://www.weather-forecast.com/locations/London/forecasts/latest");

      $pagearrey = explode('. London has a population of 7556900. Local time in London is <span class="current-local-time"></span>', $forecastPage);

      echo $pagearrey [1];

    }

  ?>

  <!doctype html>

  <html lang="en">

    <head>

      <title>Time and Population</title>

      <meta charset="utf-8">

      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <link rel="stylesheet"

      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous">

      <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">

      <style type="text/css">

      html{

          background: url(img/background.jpeg) no-repeat center center fixed;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;

      }

      body{

        background: none;

      }

      .container {

        text-align: center;
        margin-top: 100px;
        color: #A8D9E4;
        font-family: 'Varela Round', sans-serif;

      }

      #button{

        padding-top: 25px;

      }

      #citybar{

        padding-top: 10px;

      }



      </style>

    </head>

    <body>

      <div class="container">

        <h1>Time And Population</h1>

          <form>

            <fieldset id="citybar" class="form-group">

              <label for="city">Enter the name of a city</label>

              <input type="text" id="city" name="city" class="form-control" placeholder="Malaga, Dublin, New York ...">

              <br>

              <button type="submit" class="btn btn-info">Submit</button>

          </form>


      </div>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

      <script type = "text/javascript">

      </script>

    </body>

  </html>
