<?php
require 'config.inc.php';

session_start();

$message = '';

if(isset($_POST['name']) && isset($_POST['password'])) {
  $db = new mysqli(MYSQL_HOST,
  MYSQL_USER,
  MYSQL_PASSWORD,
  MYSQL_DATABASE);
  $sql = sprintf("SELECT * FROM users WHERE name='%s'",
    $db->real_escape_string($_POST['name'])
  );
  $result = $db->query($sql);
  $row = $result->fetch_object();

  if($row != null) {
    $hash = $row->hash;
    if(password_verify($_POST['password'], $hash)) {
      $message = 'Login success';
      $_SESSION['username'] = $row->name;
      $_SESSION['isAdmin'] = $row->isAdmin;
    } else {
      $message = 'Login failed';
    }
  } else {
    $message = 'Login failed. Row not existed.';
  }

  $db->close();
}

readfile('header.tmpl.html');
echo "<div>$message</div>"
?>

<form method="post" action="">
  <div>
    <label for="name">User name</label>
    <input 
      type="text" 
      name="name" 
      value=""
    ><br>
  </div>
  <div>
  <label for="password">Password</label>
  <input type="password" name="password"><br>
  </div>
  <input type="submit" value="Login">
</form>

<?php

readfile('footer.tmpl.html');
?>