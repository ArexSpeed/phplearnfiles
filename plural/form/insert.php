<?php

  require 'config.inc.php';

  $name = '';
  $password = '';
  $gender = '';
  $color = '';

  if (isset($_POST['submit'])) {
    $ok = true;

    if (!isset($_POST['name']) || $_POST['name'] === '') {
      $ok = false;
    } else {
      $name = trim($_POST['name']);
    }
    if (!isset($_POST['password']) || $_POST['password'] === '') {
      $ok = false;
    } else {
      $password = $_POST['password'];
    }
    if (!isset($_POST['gender']) || $_POST['gender'] === '') {
      $ok = false;
    } else {
      $gender = $_POST['gender'];
    }
    if (!isset($_POST['color']) || $_POST['color'] === '') {
      $ok = false;
    } else {
      $color = $_POST['color'];
    }
    if ($ok) {
      $hash = password_hash($password, PASSWORD_DEFAULT);

      $db = new mysqli(
        MYSQL_HOST,
        MYSQL_USER,
        MYSQL_PASSWORD,
        MYSQL_DATABASE
      );
      $sql = sprintf(
        "INSERT INTO users(name, gender, color, hash) VALUES ('%s','%s','%s', '%s')",
        $db->real_escape_string($name),
        $db->real_escape_string($gender),
        $db->real_escape_string($color),
        $db->real_escape_string($hash)
      );
      $db->query($sql);
      echo '<p>User added.</p>';
      $db->close();
    }
  }

  readfile('header.tmpl.html');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <form
    action=""
    method="post"
  >
  User name: 
    <input 
      type="text" 
      name="name" 
      value="<?php
        echo htmlspecialchars($name, ENT_QUOTES);
      ?>
      "
    ><br>
  Password: <input type="password" name="password"><br>
  Gender: 
    <input type="radio" name="gender" value="f"<?php
    if ($gender === 'f') {
      echo ' checked';
    }
  ?>> female
    <input type="radio" name="gender" value="m"<?php
    if ($gender === 'm') {
      echo ' checked';
    }
  ?>> male
    <input type="radio" name="gender" value="o"<?php
    if ($gender === 'o') {
      echo ' checked';
    }
  ?>> other <br>
  Favorite color:
    <select name="color">
      <option value="">Plese select</option>
      <option value="#f00"<?php
        if ($color === '#f00') {
          echo ' selected';
        }
      ?>>red</option>
      <option value="#0f0"<?php
        if ($color === '#0f0') {
          echo ' selected';
        }
      ?>>green</option>
      <option value="#00f"<?php
        if ($color === '#00f') {
          echo ' selected';
        }
      ?>>blue</option>
    </select><br>

  <input type="submit" name="submit" value="Register">
  </form>

<?php
  readfile('footer.tmpl.html');
?>