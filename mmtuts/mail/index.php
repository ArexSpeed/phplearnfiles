<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <main>
        <p>Send Email</p>
        <form action="contactform.php" class="contact-form" method="post">
            <input type="text" name="name" placeholder="Full Name"><br>
            <input type="text" name="mail" placeholder="Your e-mail"><br>
            <input type="text" name="subject" placeholder="Subject"><br>
            <textarea name="message" placeholder="Message"></textarea><br>
            <button type="submit" name="submit">Send Mail</button>
        </form>
    </main>
</body>
</html>