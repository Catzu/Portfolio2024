<div class="accordion-container">
    <button class="accordion"><i class="fa-solid fa-user icon-color icon-space"></i>About</button>
    <div class="panel">
        <p>I'm a software developer from the Netherlands with a passion for all things related to web, software and game development.</p>
    </div>

    <button class="accordion"><i class="fa-solid fa-book icon-color icon-space"></i>Skills</button>
    <div class="panel">
        <!-- Card html -->
        <div class="card-body"> 
            <div class="card-1">
                <div class="card-flex JSS"> <!-- Icon en title --> <!-- display flex so its next to each other --> 
                    <div class="card-icon"><i class="fa-brands fa-html5"></i></div>
                    <span class="card-title">HTML</span>
                </div>
                <a class="card-flex JSE" href="https://html.spec.whatwg.org/" target="_blank">
                    <span>HTML</span> 
                    <i class="fa-solid fa-link"></i>
                </a>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>

        <!-- Card css -->
        <div class="card-body">
            <div class="card-1">
                <div class="card-flex JSS"> <!-- Icon en title --> <!-- display flex so its next to each other --> 
                    <div class="card-icon"><i class="fa-brands fa-css3"></i></div>
                    <span class="card-title">CSS</span>
                </div>
                <a class="card-flex JSE" href="https://www.w3.org/TR/CSS/#css" target="_blank">
                    <span>CSS</span> 
                    <i class="fa-solid fa-link"></i>
                </a>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>

        <!-- Card PHP -->
        <div class="card-body">
            <div class="card-1">
                <div class="card-flex JSS"> <!-- Icon en title --> <!-- display flex so its next to each other --> 
                    <div class="card-icon"><i class="fa-brands fa-php"></i></div>
                    <span class="card-title">PHP</span>
                </div>
                <a class="card-flex JSE" href="https://www.php.net/" target="_blank">
                    <span>PHP</span> 
                    <i class="fa-solid fa-link"></i>
                </a>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>

        <!-- Card JS -->
        <div class="card-body">
            <div class="card-1">
                <div class="card-flex JSS"> <!-- Icon en title --> <!-- display flex so its next to each other --> 
                    <div class="card-icon"><i class="fa-brands fa-js"></i></div>
                    <span class="card-title">JS</span>
                </div>
                <a class="card-flex JSE" href="https://www.javascript.com/" target="_blank">
                    <span>JS</span> 
                    <i class="fa-solid fa-link"></i>
                </a>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>

        <!-- Card MySQL -->
        <div class="card-body">
            <div class="card-1">
                <div class="card-flex JSS"> <!-- Icon en title --> <!-- display flex so its next to each other --> 
                    <div class="card-icon"><i class="fa-solid fa-database"></i></div>
                    <span class="card-title">MySQL</span>
                </div>
                <a class="card-flex JSE" href="https://www.mysql.com/" target="_blank">
                    <span>MySQL</span> 
                    <i class="fa-solid fa-link"></i>
                </a>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>

    </div>

    <button class="accordion"><i class="fa-solid fa-folder icon-color icon-space"></i>Projects</button>
    <div class="panel">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
            
    <button class="accordion"><i class="fa-solid fa-address-card icon-color icon-space"></i>CV</button>
    <div class="panel">
        <a href="<?= ASSETS ?>/portfolio/cv/cvNL.pdf" download="CV" class="btn">
            <i class="fa fa-download"></i> Dutch version
        </a>
        <a href="<?= ASSETS ?>/portfolio/cv/cvEN.pdf" download="CV" class="btn">
            <i class="fa fa-download"></i> English version
        </a>
    </div>

    <button class="accordion"><i class="fa-solid fa-envelope icon-color icon-space"></i>Contacts</button>
    <div class="panel">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
</div>
<script src="<?= ASSETS ?>/portfolio/js/accordion.js"></script>