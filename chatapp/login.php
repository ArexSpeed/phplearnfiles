<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Realtime ChatApp</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="wrapper">
    <section class="form login"> 
      <header>Realtime Chat App</header>
      <form action="#">
        <div class="error-txt"></div>
        <div class="field input">
          <label for="">Email</label>
          <input type="text" name="email" placeholder="Enter your email">
        </div>
        <div class="field input">
          <label for="">Password</label>
          <input type="password" name="password" placeholder="Enter your password">
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Not yet signed up? <a href="signup.php">Signup now</a></div>
    </section>
  </div>

  <script src="js/pass-show-hide.js"></script>
  <script src="js/login.js"></script>
</body>
</html>