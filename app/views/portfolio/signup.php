<title><?=WEBSITE_NAME . " | " . $data['page_title']?></title>

<!DOCTYPE html>
<html>
    <?php include 'head.php'; ?>
    <body>

        <?php include 'header.php'; ?>

        <div class="responsiveness-upload">
        <form class="form-upload" method="post">
    <input type="text" name="username" placeholder="Username" required>
    <input type="email" name="email" placeholder="E-Mail" required>
    <input type="password" name="password" placeholder="Password" required>
    <input class="btn" type="submit" value="Sign up">
</form>
        </div>
        
        <?php include 'footer.php'; ?>
    </body>
</html>
