<?php
$_SESSION['username'] = 'Admin';
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <header>
    <a href="index.html" class="header-brand">artuts</a>
    <nav>
    <ul>
        <li><a href="portfolio.html">Portfolio</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>
    </header>
    <main>
        <section class="gallery-links">
            <div class="wrapper">
                <h2>Gallery</h2>
                <div class="gallery-container">
                <?php
                include_once 'includes/dbh.php';

                $sql = "SELECT * FROM gallery ORDER BY orderGallery DESC";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    echo "SQL statement failed";
                }else{
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);

                    while($row = mysqli_fetch_assoc($result)){
                        echo  '<a href="#">
                        <div style="background-image: url(img/gallery/'.$row["imgFullNameGallery"].')"></div>
                        <h3>'.$row["titleGallery"].'</h3>
                        <p>'.$row["descGallery"].'</p>
                         </a>';
                    }
                }
                ?>
                </div>
    <?php
    if(isset($_SESSION['username'])){
        echo  '<div class="gallery-upload">
        <form action="includes/gallery-upload.php" method="post" enctype="multipart/form-data">
            <input type="text" name="filename" placeholder="File name...">
            <input type="text" name="filetitle" placeholder="Image title...">
            <input type="text" name="filedesc" placeholder="Image description...">
            <input type="file" name="file">
            <button type="submit" name="submit">UPLOAD</button>
        </form>
        </div>';
    }
        
                ?>

            </div>
        </section>
    </main>

    <div class="wrapper">
        <footer>
        
            <ul class="footer-links-main">
            <li><a href="#">Home</a></li>
            <li><a href="#">Cases</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">contact</a></li>
            
            </ul>   
            <ul class="footer-links-cases">
            <li><a href="#">Lates Cases</a></li>
            <li><a href="#">MAILING SHAOLIN</a></li>
            <li><a href="#">STH</a></li>
            </ul> 
        </footer>
    </div>
</body>
</html>