<div class="accordion-container">
    <button class="accordion"><i class="fa-solid fa-user icon-color icon-space"></i>About</button>
    <div class="panel">
        <p>I'm a software developer from the Netherlands with a passion for all things related to web, software and game development.</p>
    </div>

    <button class="accordion"><i class="fa-solid fa-book icon-color icon-space"></i>Skills</button>
    <div class="panel">
        <!-- Card html -->
        <div class="card-body"> 
            <div class="card-top">
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
                <p>Hypertext Markup Language is the standard markup language for documents designed to be displayed in a web browser. It defines the content and structure of web content.</p>
            </div>
        </div>

        <!-- Card css -->
        <div class="card-body">
            <div class="card-top">
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
                <p>Cascading Style Sheets is a style sheet language used for specifying the presentation and styling of a document written in a markup language such as HTML or XML.</p>
            </div>
        </div>

        <!-- Card PHP -->
        <div class="card-body">
            <div class="card-top">
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
                <p>PHP (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.</p>
            </div>
        </div>

        <!-- Card JS -->
        <div class="card-body">
            <div class="card-top">
                <div class="card-flex JSS"> <!-- Icon en title --> <!-- display flex so its next to each other --> 
                    <div class="card-icon"><i class="fa-brands fa-js"></i></div>
                    <span class="card-title">JavaScript</span>
                </div>
                <a class="card-flex JSE" href="https://www.javascript.com/" target="_blank">
                    <span>JavaScript</span> 
                    <i class="fa-solid fa-link"></i>
                </a>
            </div>
            <div>
                <p>JavaScript is a scripting language that enables you to create dynamically updating content, control multimedia, animate images, and pretty much everything else.</p>
            </div>
        </div>

        <!-- Card MySQL -->
        <div class="card-body">
            <div class="card-top">
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
                <p>MySQL is a popular and powerful database that powers many of the world's most accessed applications, including Facebook, Twitter, Netflix, and Airbnb.</p>
            </div>
        </div>

    </div>

    <button class="accordion"><i class="fa-solid fa-folder icon-color icon-space"></i>Projects</button>
    <div class="panel">
        <!-- Card html -->
        <div class="card-body"> 
            <div class="card-top">
                <div class="card-flex JSS"> <!-- Title --> 
                    <span class="card-title">Project Title</span>
                    <a class="card-flex JSE" href="x" target="_blank">
                        <span>Link</span> <!-- Link --> 
                    </a>
                </div>
                <div class="card-flex JSE">
                    <span class="code-boxes">00/00/2024</span> <!-- Date --> 
                </div>
            </div>
            <div class="card-top"> <!-- Code languages boxes -->
                <div class="card-flex JSS"> 
                    <span class="code-boxes">CSS</span>
                    <span class="code-boxes">HTML</span>
                    <span class="code-boxes">Javascript</span>
                    <span class="code-boxes">Java</span>
                </div>
            </div>
            <div>
                <p>echo tekst here</p>
                <p>echo tekst here</p>
            </div>
        </div>
    </div>
            
    <button class="accordion"><i class="fa-solid fa-address-card icon-color icon-space"></i>CV</button>
    <div class="panel">
        <div class="cv">
            <a href="<?= ASSETS ?>/portfolio/cv/cvNL.pdf" download="CVNL" class="btn">
                <i class="fa fa-download"></i> Dutch version
            </a>
            <a href="<?= ASSETS ?>/portfolio/cv/cvEN.pdf" download="CVEN" class="btn">
                <i class="fa fa-download"></i> English version
            </a>
        </div>
    </div>

    <button class="accordion"><i class="fa-solid fa-envelope icon-color icon-space"></i>Contacts</button>
    <div class="panel">
        <form action="/action_page.php"> <!-- Link naar waar de gegevens heen moeten -->
            <label class="form-title" for="fname">Full Name:</label><br>
            <input type="text" id="fname" name="fname" placeholder="John Doe"><br>
            <label class="form-title" for="email">E-Mail:</label><br>
            <input type="text" id="email" name="email" placeholder="JohnDoe@gmail.com"><br>
            <label class="form-title" for="messages">Message:</label><br>
            <textarea id="message" name="message" rows="4" cols="50" placeholder="Type message here!"></textarea>
            <br>
            <input class="btn" type="submit" value="Submit">
        </form>
    </div>
</div>
<script src="<?= ASSETS ?>/portfolio/js/accordion.js"></script>