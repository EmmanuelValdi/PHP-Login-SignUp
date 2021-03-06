<?php 
    require "processes/consultData.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!--index.css-->
    <link rel="stylesheet" href="assets/css/index.css">

    <title>Login</title>
  </head>
  <body>
    <a href="index.php"><img src="assets/img/logo.png" class="img img-responsive" alt="logo"></a>
    <div class="container">
      <?php if(!empty($message)): ?>
        <p class="message"> <?= $message ?></p>
      <?php endif; ?>
      <h1>Sign In</h1>
      <form action="index.php" method="post">
        <input type="text" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Sign In">
      </form>
      <span>New to Netflix?<a href="signup.php"> Sign up now</a></span>
      <p>This page is protected by Google reCAPTCHA to ensure you're not a bot.<a href="#">Learn more.</a> </p>
    </div>

    <footer class="foo">
        <p class="text-foo">Questions? Call 0-800-800-1301</p>
        <div class="row">
          <ul>
            <li><a href="#">Gift Card Terms</a></li>
            <li><a href="#">Terms of Use</a></li>
            <li><a href="#">Privacy Statement</a></li>
          </ul>
        </div>
    </footer>

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>