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
    <section class="users"> 
      <header>
        <div class="content">
          <img src="img.png" alt="" />
          <div class="details">
            <span>Arex Speed</span>
            <p>Active Now</p>
          </div>
        </div>
        <a href="#" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select a user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
        <a href="#">
          <div class="content">
            <img src="img.png" alt="">
            <div class="details">
              <span>Nick Lokstar</span>
              <p>Last message</p>
            </div>
          </div>
          <div class="status-dot"><i class="fas fa-circle"></i></div>
        </a>
        <a href="#">
          <div class="content">
            <img src="img.png" alt="">
            <div class="details">
              <span>Rory Andre</span>
              <p>Last message</p>
            </div>
          </div>
          <div class="status-dot"><i class="fas fa-circle"></i></div>
        </a>
        <a href="#">
          <div class="content">
            <img src="img.png" alt="">
            <div class="details">
              <span>Gary Maximilian</span>
              <p>Last message</p>
            </div>
          </div>
          <div class="status-dot"><i class="fas fa-circle"></i></div>
        </a>
      </div>
    </section>
  </div>

  <script src="js/users.js"></script>
</body>
</html>