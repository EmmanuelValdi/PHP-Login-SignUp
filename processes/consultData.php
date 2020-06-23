<?php 
  
  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: index.php');
  }

  require "database/database.php";

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conexion->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if ($results > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: app.php");
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }

?>