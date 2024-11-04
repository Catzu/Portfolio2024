<title><?=WEBSITE_NAME . " | " . $data['page_title']?></title>

<!DOCTYPE html>
<html>
    <?php include 'head.php'; ?>
    <body>
        <?php include 'header.php'; ?>

        <div class="responsiveness-upload">
            <?php if(isset($data['error']) && !empty($data['error'])): ?>
                <div class="error-message" style="color: red; margin-bottom: 10px; text-align: center;">
                    <?=$data['error']?>
                </div>
            <?php endif; ?>

            <form class="form-upload" method="post">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input class="btn" type="submit" value="Login">
            </form>
        </div>

        <?php include 'footer.php'; ?>
    </body>
</html>