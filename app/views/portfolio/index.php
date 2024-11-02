<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $data['page_title']?></title>
        <link rel="stylesheet" href="<?= ASSETS ?>/portfolio/css/index.css">
        <link rel="stylesheet" href="<?= ASSETS ?>/portfolio/css/accordion.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href='https://fonts.googleapis.com/css?family=Inter Tight' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    </head>
    <body>
        <header>
            <div class="center">
                <div class="image-container image-container:hover">
                    <img alt="icon" class="round " src="<?= ASSETS ?>/portfolio/img/avatar.jpg">
                </div>
                <div class="flex">
                    <h1 class="sizeName inter">Ngoc That Nguyen</h1>
                    <h2 class="sizeOccupation interTight">Software developer</h2>
                    <div class="sizeLocation interTight"><i class="fa-solid fa-location-dot fa-mar-lef icon-color"></i>The Netherlands</div>
                </div>
            </div>
        </header>

        <hr>

        <div class="accordion-container">
            <button class="accordion"><i class="fa-solid fa-user icon-color icon-space"></i>About</button>
            <div class="panel">
                <p>I'm a software developer from the Netherlands with a passion for all things related to web, software and game development.</p>
            </div>

            <button class="accordion"><i class="fa-solid fa-book icon-color icon-space"></i>Skills</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button class="accordion"><i class="fa-solid fa-folder icon-color icon-space"></i>Projects</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            
            <button class="accordion"><i class="fa-solid fa-address-card icon-color icon-space"></i>CV</button>
            <div class="panel">
                <a href="<?= ASSETS ?>/portfolio/cv/cv.pdf" download="CV" class="btn">
                    <i class="fa fa-download"></i> Dutch version
                </a>
            </div>

            <button class="accordion"><i class="fa-solid fa-envelope icon-color icon-space"></i>Contacts</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>

        <script src="<?= ASSETS ?>/portfolio/js/accordion.js"></script>
        
        <footer>
            
        </footer>
    </body>
</html>
