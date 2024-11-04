<title><?=WEBSITE_NAME . " | " . $data['page_title']?></title>

<!DOCTYPE html>
<html>
    <?php include 'head.php'; ?>
    <body>
        <?php include 'header.php'; ?>

        <div class="responsiveness-upload">
            <form method="post" enctype="multipart/form-data" class="form-upload">
                <?php if(isset($_SESSION['upload_error'])): ?>
                    <div class="error-message">
                        <?php 
                        echo $_SESSION['upload_error'];
                        unset($_SESSION['upload_error']);
                        ?>
                    </div>
                <?php endif; ?>
                
                <input type="text" name="title" id="title" placeholder="Enter title" required>
                <input type="date" name="date" id="date" required>
                <textarea name="description" id="description" placeholder="Enter description" required></textarea>
                <div class="file">
                    <span>Image (Max 5MB - JPG, PNG, GIF)</span>
                    <input type="file" name="image" id="image" accept="image/jpeg,image/png,image/gif">
                </div>
                <input class="btn" type="submit" value="Submit">
            </form>
        </div>
        
        <?php include 'footer.php'; ?>
    </body>
</html>