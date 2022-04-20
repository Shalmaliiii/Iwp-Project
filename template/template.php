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
        <main class="main">
        <section class="template section" id="news">
            <h2 class="section__title">Section title</h2>
            <span class="section__subtitle">Section subtitle</span>
            <div class="template__container container grid">

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