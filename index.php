<!-- I'm skipping services section for now
    also I need to change 'services in navbar to something else' -->


 
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--==================== UNICONS ====================-->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"> 
        <!--==================== SWIPER CSS ====================-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        
        <!--==================== CSS ====================-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Medweb</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <?php
        include('private/navbar.php');
        include('private/effects_main.php');

        // after moving ./private/ directory to ../../private/ do these:
        // include('../../private/navbar.php');
        // include('../../private/effects.php');
        ?>
        

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home section" id="home">
                <div class="home__container container grid">
                    <div class="home__content grid">
                        <div class="home__social">
                            <a href="https://www.linkedin.com/in/chirag-madaan-346673208/" target="_blank" class="home__social-icon">
                                <i class="uil uil-linkedin-alt"></i>
                            </a>

                            <a href="https://www.instagram.com/appleswiggy/" target="_blank" class="home__social-icon">
                                <i class="uil uil-instagram"></i>
                            </a>

                            <a href="https://github.com/chirag-madaan" target="_blank" class="home__social-icon">
                                <i class="uil uil-github-alt"></i>
                            </a>
                        </div>
                        <div class="home__img">
                            <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <mask id="mask0" mask-type="alpha">
                                    <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                    130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                    97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                    0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                                </mask>
                                <g mask="url(#mask0)">
                                    <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                    165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                    129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                    -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                                    <image class="home__blob-img" x='-20' y='10' href="assets/img/my_pic.png"/>
                                </g>
                            </svg>
                        </div>

                        <div class="home__data">
                            <h1 class="home__title">Medweb</h1>
                            <!-- <h3 class="home__subtitle">Student</h3> -->
                            <p class="home__description">
                                Something about the site. blah blah blah insure improve rub room dependent position enlighten yell squirrel station rub resemble forbid rotten sentence
                            </p>
                            <a href="#contact" class="button button--flex">
                                Contact Us <i class="uil uil-message button__icon"></i>
                            </a>
                        </div>
                    </div>
                    
                    <div class="home__scroll">
                        <a href="#about" class="home__scroll-button button--flex">
                            <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                            <span class="home__scroll-name">Scroll down</span>
                            <!-- <i class="uil uil-arrow-down home__scroll-arrow"></i> -->
                            <i class="uil uil-angle-down home__scroll-arrow"></i>
                        </a>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <h2 class="section__title">About Us</h2>
                <span class="section__subtitle">Our project features</span>
                <div class="about__container container grid">
                    <img src="assets/img/about_us.jpeg" alt="" class="about__img">

                    <div class="about__data">
                        <p class="about__description">
                            Insure improve rub room dependent position enlighten yell squirrel station rub resemble forbid rotten sentence woman terrific adjustment supreme kite swim rough cash weak cheap lick bears foolish close exotic rock
                        </p>
                        <div class="about__info">
                            <div>
                                <span class="about__info-title">01+</span>
                                <span class="about__info-name">Years <br> experience</span>
                            </div>

                            <div>
                                <span class="about__info-title">03+</span>
                                <span class="about__info-name">Completed <br> projects</span>
                            </div>

                            <div>
                                <span class="about__info-title">00+</span>
                                <span class="about__info-name">Companies <br> worked</span>
                            </div>
                        </div>
                        <div class="about__buttons">
                            <a download="" target="_blank" href="assets/pdf/Alexa-Cv.pdf" class="button button--flex">
                                Download CV <i class="uil uil-file-download button__icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== SKILLS ====================-->
            <section class="skills section" id="skills">
                <h2 class="section__title">Skills</h2>
                <span class="section__subtitle">My technical level</span>
                <div class="skills__container container grid">
                    <div>
                        <!-- skill 1 -->
                        <div class="skills__content skills__open">
                            <div class="skills__header">
                                <i class="uil uil-brackets-curly skills__icon"></i>

                                <div>
                                    <h1 class="skills__title">Frontend developer</h1>
                                    <span class="skills__subtitle">More than 4 years</span>
                                </div>

                                <i class="uil uil-angle-down skills__arrow"></i>
                            </div>

                            <div class="skills__list grid">
                                <div class="skills__data">
                                    <div class="skills_titles">
                                        <h3 class="skills__name">HTML</h3>
                                        <span class="skills__number">90%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__html"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills_titles">
                                        <h3 class="skills__name">CSS</h3>
                                        <span class="skills__number">70%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__css"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills_titles">
                                        <h3 class="skills__name">JavaScript</h3>
                                        <span class="skills__number">60%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__js"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills_titles">
                                        <h3 class="skills__name">React</h3>
                                        <span class="skills__number">80%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__react"></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- skill 2 -->
                        <div class="skills__content skills__close">
                            <div class="skills__header">
                                <i class="uil uil-server skills__icon"></i>
                                <div>
                                    <h1 class="skills__title">Backend developer</h1>
                                    <span class="skills__subtitle">More than 2 years</span>
                                </div>

                                <i class="uil uil-angle-down skills__arrow"></i>
                            </div>

                            <div class="skills__list grid">
                                <div class="skills__data">
                                    <div class="skills_titles">
                                        <h3 class="skills__name">PHP</h3>
                                        <span class="skills__number">90%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__php"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills_titles">
                                        <h3 class="skills__name">Node Js</h3>
                                        <span class="skills__number">70%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__node"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills_titles">
                                        <h3 class="skills__name">Firebase</h3>
                                        <span class="skills__number">60%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__firebase"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills_titles">
                                        <h3 class="skills__name">Python</h3>
                                        <span class="skills__number">80%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__python"></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div>
                        <!-- skill 3 -->
                        <div class="skills__content skills__close">
                            <div class="skills__header">
                                <i class="uil uil-android-alt skills__icon"></i>
                                <div>
                                    <h1 class="skills__title">Android developer</h1>
                                    <span class="skills__subtitle">More than 4 years</span>
                                </div>

                                <i class="uil uil-angle-down skills__arrow"></i>
                            </div>

                            <div class="skills__list grid">
                                <div class="skills__data">
                                    <div class="skills_titles">
                                        <h3 class="skills__name">Java</h3>
                                        <span class="skills__number">90%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__java"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills_titles">
                                        <h3 class="skills__name">XML</h3>
                                        <span class="skills__number">70%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__xml"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills_titles">
                                        <h3 class="skills__name">React Native</h3>
                                        <span class="skills__number">60%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__react-native"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills_titles">
                                        <h3 class="skills__name">Flutter</h3>
                                        <span class="skills__number">80%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__flutter"></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <!--==================== PORTFOLIO ====================-->
            <section class="portfolio section" id="portfolio">
                <h2 class="section__title">Portfolio</h2>
                <span class="section__subtitle">Most recent work</span>
                <div class="portfolio__container container swiper-container">
                    <div class="swiper-wrapper">
                        <!-- portfolio 1 -->
                        <div class="portfolio__content grid swiper-slide">
                            <img src="assets/img/portfolio1.jpg" alt="" class="portfolio__img">
                            <div class="portfolio__data">
                                <h3 class="portfolio__title">Modern Website</h3>
                                <p class="portfolio__description">Website adaptable to all devices, with ui components and animated interactions.</p>
                                <a href="#" class="button button--flex button--small portfolio__button">
                                    Demo
                                    <i class="uil uil-arrow-right button__icon"></i>
                                </a>
                            </div>
                        </div>

                        <!-- portfolio 2 -->
                        <div class="portfolio__content grid swiper-slide">
                            <img src="assets/img/portfolio2.jpg" alt="" class="portfolio__img">
                            <div class="portfolio__data">
                                <h3 class="portfolio__title">Brand design</h3>
                                <p class="portfolio__description">Website adaptable to all devices, with ui components and animated interactions.</p>
                                <a href="#" class="button button--flex button--small portfolio__button">
                                    Demo
                                    <i class="uil uil-arrow-right button__icon"></i>
                                </a>
                            </div>
                        </div>

                        <!-- portfolio 3 -->
                        <div class="portfolio__content grid swiper-slide">
                            <img src="assets/img/portfolio3.jpg" alt="" class="portfolio__img">
                            <div class="portfolio__data">
                                <h3 class="portfolio__title">Online store</h3>
                                <p class="portfolio__description">Website adaptable to all devices, with ui components and animated interactions.</p>
                                <a href="#" class="button button--flex button--small portfolio__button">
                                    Demo
                                    <i class="uil uil-arrow-right button__icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper-button-next">
                        <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
                    </div>

                    <div class="swiper-button-prev">
                        <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
                    </div>

                    <div class="swiper-pagination">
                        
                    </div>
                </div>
            </section>

            <!--==================== PROJECT IN MIND ====================-->
            <section class="project section">
                <div class="project__bg">
                    <div class="project__container container grid">
                        <div class="project__data">
                            <h2 class="project__title">Questions to ask a doctor?</h2>
                            <p class="project__description">Try our consultancy feature and request an appointment with a doctor and ask as many questions as you want.</p>
                            <a href="#contact" class="button button--flex button--white">
                                Consultancy
                                <i class="uil uil-message project__icon button__icon"></i>
                            </a>
                        </div>
                        <img src="assets/img/my_pic.png" alt="" class="project__img">
                    </div>
                </div> 
            </section>

            <!--==================== TESTIMONIAL ====================-->
            <section class="testimonial section">
                <h2 class="section__title">Testimonial</h2>
                <span class="section__subtitle">My client saying</span>
                <div class="testimonial__container container swiper-container">
                    <div class="swiper-wrapper">
                        <!-- testimonial 1 -->
                        <div class="testimonial__content swiper-slide">
                            <div class="testimonial__data">
                                <div class="testimonial__header">
                                    <img src="assets/img/testimonial1.jpg" alt="" class="testimonial__img">

                                    <div>
                                        <h3 class="testimonial__name">Sara Smith</h3>
                                        <span class="testimonial__client">Client</span>
                                    </div>
                                </div>

                                <div>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                </div>
                            </div>

                            <p class="testimonial__description">I get a good impression, 
                                I carry out my project with all the possible quality and
                                 attention and support 24 hours a day.
                            </p>
                            
                        </div>

                        <!-- testimonial 2 -->
                        <div class="testimonial__content swiper-slide">
                            <div class="testimonial__data">
                                <div class="testimonial__header">
                                    <img src="assets/img/testimonial2.jpg" alt="" class="testimonial__img">

                                    <div>
                                        <h3 class="testimonial__name">Matt Robinson</h3>
                                        <span class="testimonial__client">Client</span>
                                    </div>
                                </div>

                                <div>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                </div>
                            </div>

                            <p class="testimonial__description">I get a good impression, 
                                I carry out my project with all the possible quality and
                                 attention and support 24 hours a day.
                            </p>
                            
                        </div>

                        <!-- testimonial 3 -->
                        <div class="testimonial__content swiper-slide">
                            <div class="testimonial__data">
                                <div class="testimonial__header">
                                    <img src="assets/img/testimonial3.jpg" alt="" class="testimonial__img">

                                    <div>
                                        <h3 class="testimonial__name">Raul harrison</h3>
                                        <span class="testimonial__client">Client</span>
                                    </div>
                                </div>

                                <div>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                </div>
                            </div>

                            <p class="testimonial__description">I get a good impression, 
                                I carry out my project with all the possible quality and
                                 attention and support 24 hours a day.
                            </p>
                            
                        </div>
                    </div>

                    <div class="swiper-pagination swiper-pagination-testimonial"></div>
                </div>
            </section>

            <!--==================== CONTACT ME ====================-->
            <section class="contact section" id="contact">
                <h2 class="section__title">Contact Us</h2>
                <span class="section__subtitle">Get in touch</span>

                <div class="contact__container container grid">
                    <div>
                        <div class="contact__information">
                            <i class="uil uil-phone contact__icon"></i>
                            <div>
                                <h3 class="contact__title">Call us</h3>
                                <span class="contact__subtitle">+91 9999999999</span>
                            </div>
                        </div>

                        <div class="contact__information">
                            <i class="uil uil-envelope contact__icon"></i>
                            <div>
                                <h3 class="contact__title">Email</h3>
                                <span class="contact__subtitle">contact@medweb.com</span>
                            </div>
                        </div>

                        <div class="contact__information">
                            <i class="uil uil-phone contact__icon"></i>
                            <div>
                                <h3 class="contact__title">Call me</h3>
                                <span class="contact__subtitle">+91 9999999999</span>
                            </div>
                        </div>
                    </div>

                    <form action="" class="contact__form grid">
                        <div class="contact__inputs grid">
                            <div class="contact__content">
                                <label for="" class="contact__label">Name</label>
                                <input type="text" class="contact__input">
                            </div>
                            <div class="contact__content">
                                <label for="" class="contact__label">Email</label>
                                <input type="email" class="contact__input">
                            </div>
                        </div>
                        <div class="contact__content">
                            <label for="" class="contact__label">Subject</label>
                            <input type="text" class="contact__input">
                        </div>
                        <div class="contact__content">
                            <label for="" class="contact__label">Message</label>
                            <textarea class="contact__input" name="" id="" cols="0" rows="7"></textarea>
                        </div>

                        <div>
                            <a href="#" class="button button--flex">
                                Send message
                                <i class="uil uil-message button__icon"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </section>
        </main>

        <?php
        include('private/footer.php');
        ?>

        <script src="assets/js/swiper-bundle.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>