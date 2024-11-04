<title><?=WEBSITE_NAME . " | " . $data['page_title']?></title>

<!DOCTYPE html>
<html>
    <?php include 'head.php'; ?>
    <body>

        <?php include 'header.php'; ?>

        <div class="responsiveness-upload">
            <form class="form-upload" method="post">
                <input type="text" name="username" id="title" placeholder="Username" required>
                <input type="password" name="password" id="title" placeholder="Password" required>
                <input class="btn" type="submit" value="Login">
            </form>
        </div>

        <?php include 'footer.php'; ?>
    </body>
</html>
