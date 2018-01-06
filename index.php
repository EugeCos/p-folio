<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Eugene Costov web-development portfolio.">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css" />
    <link rel="stylesheet" type="text/css" href="./resources/css/style.css">
    <link rel="stylesheet" type="text/css" href="./resources/css/queries.css">
    <link rel="stylesheet" type="text/css" href="./vendors/css/Grid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kalam: 100,300,400" rel="stylesheet">
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">

    <title>Eugene Costov</title>

    <link rel="apple-touch-icon" sizes="180x180" href=".resources/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./resources/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./resources/favicons/favicon-16x16.png">
    <link rel="manifest" href="./resources/favicons/manifest.json">
    <link rel="mask-icon" href="./resources/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

</head>

<body>
    <header id="header">
        <nav>
            <div class="row">
                <a href="http://www.eugeville.com" class="logo">Eugene Costov</a>
                <a href="http://www.eugeville.com">
                    <p class="black_logo">Eugene Costov</p>
                </a>
                <ul class="main-nav js--main-nav">
                    <li>
                        <a href="#header">home</a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#works">Portfolio</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
                <a class="mobile-nav-icon js--nav-icon">
                    <i class="ion-navicon-round"></i>
                </a>
            </div>
        </nav>

        <div class="dev-text-box">
            <h1>Full stack web developer</h1>
            <h3 class="quote">embrace uncertainty</h3>
            <a class="btn btn-full" href="#works">Projects</a>
            <br>
            <a href="#works" class="icon-big">
                <i class="ion-android-funnel"></i>
            </a>
        </div>
    </header>


    <section class="section-about picture-background js--section-features" id="about">
        <div class="row">
            <h2>About</h2>
        </div>
        <div class="row js--wp-1">
            <div class="col span-1-of-2 myImage">
                <img src="./resources/img/myPic.JPG" class="myPic">
            </div>
            <div class="col span-1-of-2 myBio">
                <h3 style="color: rgb(48, 48, 48)">eugene costov</h3>
                <p style="color: rgb(48, 48, 48)">Graduated from BrainStation Toronto web development 10-week bootcamp in December 2017. Prior to engaging in web development I spent 5 years working in interational logistics, coordinationg complex import and export projects. I opted for a career switch to webdev because I consider this path to be a fresh, fast-paced, challenging and rewarding working environment. I also love to try out the latest technologies. Good knowledge of HTML5, CSS3, React, Node.js, Express and MongoDB.</p><br>
                <p style="color: rgb(48, 48, 48)">I would describe myself as an avid road cyclist and skier, indie-film and indie-music lover, as well as long-term pizza enthusiast. I firmly believe the best days are the snowiest ones.</p>
                <ul class="social-icons">
                    <a href="https://ca.linkedin.com/in/eugenecostov" target="_blank" class="social-linked">
                        <li>
                            <i class="fab fa-linkedin linked"></i>
                            <span>&nbsp;&nbsp;/&nbsp;eugenecostov</span>
                    </a>
                    </li>
                    <a href="https://github.com/EugeCos" target="_blank" class="social-github">
                        <li>
                            <i class="fab fa-github-alt git"></i>
                            <span>&nbsp;&nbsp;/&nbsp;EugeCos</span>
                    </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section-features project-list picture-background js--section-features clearfix" id="works">
        <div class="row">
            <h2>projects</h2>
        </div>
        <div class="row js--wp-2">
            <div class="col span-1-of-3">
                <a href="#immigrate" style="text-decoration:none">
                    <figure class="project-box">
                        <img src="./resources/img/projects/imm.jpg" alt="immigrate.TO" />
                        <p class="text">immigrate.TO</p>
                    </figure>
                </a>
            </div>

            <div class="col span-1-of-3">
                <a href="#weather" style="text-decoration:none">
                    <figure class="project-box">
                        <img src="./resources/img/projects/weather.JPG" alt="weather" />
                        <p class="text">Weather App</p>
                    </figure>
                </a>
            </div>

            <div class="col span-1-of-3">
                <a href="#audio" style="text-decoration:none">
                    <figure class="project-box">
                        <img src="./resources/img/projects/audio_player.JPG" alt="Audio Player" />
                        <p class="text">Simple Audio Player</p>
                    </figure>
                </a>
            </div>

        </div>
        <div class="row js--wp-2">
            <div class="col span-1-of-3">
                <a href="#snowman" style="text-decoration:none">
                    <figure class="project-box">
                        <img src="./resources/img/projects/snowman.jpg" alt="snowman" />
                        <p class="text">Snowman Game</p>
                    </figure>
                </a>
            </div>
            <div class="col span-1-of-3">
                <a href="#todo" style="text-decoration:none">
                    <figure class="project-box">
                        <img src="./resources/img/projects/todo.jpg" alt="todo" />
                        <p class="text">To-do List</p>
                    </figure>
                </a>
            </div>
            <div class="col span-1-of-3">
                <a href="#imdb" style="text-decoration:none">
                    <figure class="project-box">
                        <img src="./resources/img/projects/imdb.jpg" alt="imdb" />
                        <p class="text">Movie Database</p>
                    </figure>
                </a>
            </div>
        </div>
    </section>

    <section class="section-features picture-background js--section-features" id="immigrate">
        <div class="row">
            <h2>immigrate.TO</h2>
        </div>
        <div class="row js--wp-1">
            <div class="col span-1-of-2">
                <img src="./resources/img/projects/imm.jpg" class="appImage">
            </div>
            <div class="col span-1-of-2 appDescription">
                <p><b>immigrate.TO</b> is a platform that allows users to pick a Canadian province and assess their eligibility to immigrate to that specific province. Assessment consists of simple generalized questionnaire (8 multiple choice questions). Answer to each question has certain amount of points. After user finishes the questionnaire, program generates a form which contains information on whether a user is eligible.</p>
                <br>
                <p><b>immigrate.TO</b> is a single page application made with React Router. It also uses Bing News API to generate 4 latest local news headlines (it filters negative news) on each province's page.</p>
                <div>
                    <i class="fab fa-react appFonts"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fab fa-node appFonts"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fab fa-js-square appFonts"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fab fa-html5 appFonts"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fab fa-css3-alt appFonts"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
                <div class="visit-project">
                    <a href="https://immigrate-to.herokuapp.com" target="_blank" class="btn btn-project">Visit Project</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section-features picture-background js--section-features" id="weather">
        <div class="row">
            <h2>Weather App</h2>
        </div>
        <div class="row js--wp-1">
        <div class="col span-1-of-2">
                <img src="./resources/img/projects/weather.JPG" class="appImage">
            </div>
            <div class="col span-1-of-2 appDescription">
            <h3 class="space-between-text">&nbsp;</h3>
                <p><b>Weather APP</b> is a simple weather forecast platform. It uses Open Weather Map API to display current temperature and weather condition based on user's input. It also updates the image of the city in the box on the right, also based on user's input. Finally, it updates the background image based on the weather condition (rain, snow, haze, fog, clear, clouds etc.).</p><br>
                <p><b>Weather APP</b> is a single page application made with React Router. It uses Axios to pull the data from API's. It uses React Lifecycle methods to avoid issues with asynchronicity.</p>
                <div>
                    <i class="fab fa-react appFonts"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fab fa-node appFonts"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fab fa-js-square appFonts"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fab fa-html5 appFonts"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fab fa-css3-alt appFonts"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
                <div class="visit-project">
                    <a href="https://euge-weather.herokuapp.com/" target="_blank" class="btn btn-project">Visit Project</a>
                </div>
            </div>
           
        </div>
    </section>

    <section class="section-features picture-background js--section-features" id="audio">
        <div class="row">
            <h2>Audio Player</h2>
        </div>
        <div class="row js--wp-1">
            <div class="col span-1-of-2">
                <img src="./resources/img/projects/audio_player.JPG" class="appImage">
            </div>
            <div class="col span-1-of-2 appDescription">
                <h3 class="space-between-text">&nbsp;</h3>
                <p>A simple old school Nintendo style audio player with 4 tracks. Functionality includes play/pause as well as previous/next buttons. Each song has its own description page. My favorite school project, because it includes an audio component.</p><br>
                <p>This audio player is a single page application made with React Router. Constructor function is used to store information for each song.</p>
                <div>
                    <i class="fab fa-react appFonts"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fab fa-node appFonts"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fab fa-js-square appFonts"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fab fa-html5 appFonts"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fab fa-css3-alt appFonts"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
                <div class="visit-project">
                    <a href="https://euge-audioplayer.herokuapp.com/" target="_blank" class="btn btn-project">Visit Project</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section-features picture-background js--section-features" id="snowman">
        <div class="row">
            <h2>Snowman</h2>
        </div>
        <div class="row js--wp-1">
        <div class="col span-1-of-2">
                <img src="./resources/img/projects/snowman.jpg" class="appImage">
            </div>
            <div class="col span-1-of-2 appDescription">
            <h3 class="space-between-text">&nbsp;</h3>
                <p><b>Snowman</b> is a less dire version of the famous paper and pencil Hangman game where player has to guess a word. With every wrong guess a part of a snowman gets melted, starting with the head. After 6 wrong guesses snowman is completely melted and game is lost. If user guesses the word, game is won.</p><br>
                <p><b>Snowman</b> is a single page application made with React Router.</p>
                <div>
                    <i class="fab fa-react appFonts"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fab fa-node appFonts"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fab fa-js-square appFonts"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fab fa-html5 appFonts"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fab fa-css3-alt appFonts"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
                <div class="visit-project">
                    <a href="https://euge-snowman.herokuapp.com/" target="_blank" class="btn btn-project">Visit Project</a>
                </div>
            </div>

        </div>
    </section>

    <section class="section-features picture-background js--section-features" id="todo">
        <div class="row">
            <h2>To-Do App</h2>
        </div>
        <div class="row js--wp-1">
            <div class="col span-1-of-2">
                <img src="./resources/img/projects/todo.jpg" class="appImage">
            </div>
            <div class="col span-1-of-2 appDescription">
            <h3 class="space-between-text">&nbsp;</h3>
                <p>A simple todo app with some CSS styling.</p><br>
                <p>MongoDB is used as database.</p>
                <h3>&nbsp;</h3>
                <div>
                    <i class="fab fa-react appFonts"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fab fa-node appFonts"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fab fa-js-square appFonts"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fab fa-html5 appFonts"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fab fa-css3-alt appFonts"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="./resources/img/mongoDB.png" class="mongo">
                </div>
                <div class="visit-project">
                    <a href="#" class="btn btn-project">Visit Project</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section-features picture-background js--section-features" id="imdb">
        <div class="row">
            <h2>Simple Movie Database</h2>
        </div>
        <div class="row js--wp-1">
        <div class="col span-1-of-2">
                <img src="./resources/img/projects/imdb.jpg" class="appImage">
            </div>
            <div class="col span-1-of-2 appDescription">
            <h3 class="space-between-text">&nbsp;</h3>
                <p>A simple movie database with dynamic URL's using Express.</p>
                <div>
                    <i class="fab fa-node appFonts"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fab fa-js-square appFonts"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fab fa-html5 appFonts"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fab fa-css3-alt appFonts"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
                <div class="visit-project">
                    <a href="https://euge-moviedb.herokuapp.com/" target="_blank" class="btn btn-project">Visit Project</a>
                </div>
            </div>

        </div>
    </section>

    <section class="section-contact picture-background" id="contact">
        <div class="row">
            <h2>Questions? Feel free to contact me</h2>
        </div>
        <div class="row js--wp-1">
            <div class="col span-1-of-2">
                <h3>Get in touch</h3>
                <p class="contact-text">I am very approachable and would love to speak to you. Feel free to send me an email, get in touch on LinkedIn
                    or simply complete the enquiry form.</p>
                <ul class="social-icons-contacts">
                    <a href="mailto:eugene.costov@ymail.com" class="social-email">
                        <li>
                            <i class="fas fa-envelope-square email"></i>
                            <span>&nbsp;&nbsp;/&nbsp;eugene.costov@yahoo.com</span>
                    </a>
                    </li>
                    <a href="https://ca.linkedin.com/in/eugenecostov" target="_blank" class="social-linked">
                        <li>
                            <i class="fab fa-linkedin linked"></i>
                            <span>&nbsp;&nbsp;/&nbsp;eugenecostov</span>
                    </a>
                    </li>
                    <a href="https://github.com/EugeCos" target="_blank" class="social-github">
                        <li>
                            <i class="fab fa-github-alt git"></i>
                            <span>&nbsp;&nbsp;/&nbsp;EugeCos</span>
                    </a>
                    </li>
                </ul>
            </div>
            <div class="col span-1-of-2">
                <h3>Old school way</h3>
                <div class="contact-box">
                    <div class="form-box">
                        <div class="row">
                            <form method="post" action="mailer.php" class="contact-form">
                                <?php
                                    if($_GET['success'] == 1) {
                                        echo "<div class=\"form-messages success\">
                                        Thank you! Your message was sent.
                                    </div>";
                                    }
                                    if($_GET['success'] == -1) {
                                        echo "<div class=\"form-messages error\">
                                        Something went wrong. Please try again.
                                    </div>";
                                    }
                                ?>
                                <div class="row">
                                    <div class="col span-1-of-3">
                                        <p for="name">Name</p>
                                    </div>
                                    <div class="col span-2-of-3">
                                        <input type="text" name="name" id="name" placeholder="Your name" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col span-1-of-3">
                                        <p for="email">E-mail</p>
                                    </div>
                                    <div class="col span-2-of-3">
                                        <input type="email" name="email" id="email" placeholder="Your e-mail" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col span-1-of-3">
                                        <p>Send me a line</p>
                                    </div>
                                    <div class="col span-2-of-3">
                                        <textarea name="message" placeholder="Your message here"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col span-1-of-3">
                                        <p>&nbsp;</p>
                                    </div>
                                    <div class="col span-2-of-3 " style="text-align: center">
                                        <input type="submit" value="Send">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="row">
            <div class="col span-1-of-2">
                <ul class="footer-nav">
                    <li>
                        <p>Photo credits: </p>
                    </li>
                    <br><br>
                    <li>
                        <a href="https://unsplash.com/@jeremyperkins" target="_blank">"Sea of Stars" by Jeremy Perkins</a>
                    </li>
                    <br>
                    <li>
                        <a href="https://unsplash.com/@jjying" target="_blank">"White Textures" by JJ Ying</a>
                    </li>
                </ul>
            </div>
            <div class="col span-1-of-2">
                <div class="row">
                        <p>&nbsp;</p>
                    <p>Copyright &copy; 2017 by Eugene Costov</p>
                </div>
            </div>
        </div>
        
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
    <script src="./resources/js/index.js"></script>
</body>
</html>