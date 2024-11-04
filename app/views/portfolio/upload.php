<title><?=WEBSITE_NAME . " | " . $data['page_title']?></title>

<!DOCTYPE html>
<html>
    <?php include 'head.php'; ?>
    <body>

        <?php include 'header.php'; ?>

        <div class="responsiveness-upload">
            <form class="form-upload">
                <input type="text" id="title" placeholder="Enter title" required>
                <input type="date" id="date" placeholder="DD/MM/YYYY" pattern="\d{2}/\d{2}/\d{4}" required>
                <textarea id="description" placeholder="Enter description" required></textarea>
                <div class="file">
                    <span>Image</span>
                    <input type="file" id="image" accept="image/*" >
                </div>
                <div class="file">
                    <span>Video</span>
                    <input type="file" id="video" accept="video/*">
                </div>
                <input class="btn" type="submit" value="Submit">
            </form>
        </div>
        
        <?php include 'footer.php'; ?>
    </body>
</html>
