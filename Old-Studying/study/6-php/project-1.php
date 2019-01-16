
  <?php

    $error =""; $successMessage ="";

    if ($_POST) {

      if (!$_POST["email"]) {

        $error .= "An email addres is requierd.<br>";

      }

      if (!$_POST["subject"]) {

        $error .= "A subject field is requierd.<br>";

      }

      if (!$_POST["content"]) {

        $error .= "A content requierd.<br>";

      }

      if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {

        $error .= "the email is not a valid email address.<br>";

      }

      if ($error != "") {

      $error = '<div class="alert alert-danger" role="alert"><strong>There are some missing field:</strong><br>' . $error . '</div>';

    }else {

      $emailTo = "me@mydomain.com";

      $subject = $_POST ['subject'];

      $content = $_POST ['content'];

      $headers = "From: ".$_POST['email'];

        if (mail($emailTo, $subject, $content, $headers)) {

          $successMessage = $error = '<div class="alert alert-success" role="alert">Your message was sent, we will get back to you ASAP!</div>';

        } else{

          $error = '<div class="alert alert-danger" role="alert">your message couldnt be sent -please try again</div>';

        }

      }

    }

  ?>
