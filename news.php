<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"> 
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Medweb</title>
    </head>
    <body>
        <?php
        include('private/navbar.php');
        include('private/effects_rest.php');

        // after moving ./private/ directory to ../../private/ do these:
        // include('../../private/navbar.php');
        // include('../../private/effects.php');
        ?>

        <!--==================== MAIN CONTENT HERE ====================-->
        <?php
        function getNews() {
            // $url = "https://newsapi.org/v2/top-headlines?country=in&category=health&apiKey=7275abd16dee45f9a7e06176f47fac84";
            $url = "https://newsapi.org/v2/everything?q=covid%20india&apiKey=7275abd16dee45f9a7e06176f47fac84";
            $json = json_decode(file_get_contents($url), true);
            return $json;
        }
        $news = getNews();
        ?>

        <main class="main">
        <section class="news section" id="news">
            <h2 class="section__title">News at a glance</h2>
            <span class="section__subtitle">Latest COVID-19 news in India</span>
            <div class="news__container container grid">
                <div class="portfolio__content grid">
                    <!-- <div class="portfolio__content grid swiper-slide">
                            <img src="assets/img/portfolio1.jpg" alt="" class="portfolio__img">
                            <div class="portfolio__data">
                                <h3 class="portfolio__title">Modern Website</h3>
                                <p class="portfolio__description">Website adaptable to all devices, with ui components and animated interactions.</p>
                                <a href="#" class="button button--flex button--small portfolio__button">
                                    Demo
                                    <i class="uil uil-arrow-right button__icon"></i>
                                </a>
                            </div>
                    </div> -->
                    <?php

                    if ($news != null) {
                        for ($i = 0; $i < $news['totalResults']; $i++) {
                            if ($i == 10) {
                                break;
                            }
                            
                            // echo "<div class=\"news-box\">";

                            $title = $news['articles'][$i]['title'];
                            $content = $news['articles'][$i]['content'];
                            $publishedAt = $news['articles'][$i]['publishedAt'];
                            $url = $news['articles'][$i]['url'];
                            $img = $news['articles'][$i]['urlToImage'];

                            echo "<img src=\"$img\" alt=\"\" class=\"portfolio__img\">";
                            
                            echo "<h3>$title</h3>";
                            echo "<p>$content</p>";
                            echo "<p><b>$publishedAt</b></p>";
                            echo "<a href=\"$url\">$url</a>";
                            echo "<br>";

                            echo "</div><br><br>";
                        }
                    }

                    ?>
                </div>
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