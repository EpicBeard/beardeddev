<!doctype html>

<head xmlns="http://www.w3.org/1999/html">

    <!-- Meta -->
    <meta charset="utf-8">

    <title>Contact | Dev With A Beard</title>
    <meta name="Description" content="Contact the Dev with a Beard.">
    <meta name="Keywords" content="Contact Bearded One, Dev With A Beard, Web Developer, Responsive Web Design, iOS Developer, Android Developer">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

    <!-- Favicons -->
    <link rel="shortcut icon"  href="img/favicon.ico">
    <link rel="shortcut icon"  href="img/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <?php include 'apiscripts.php'; ?>

    <script type="text/javascript">
        $( document ).ready(function() {

            scaleVideoContainer();

            initBannerVideoSize('.video-container .poster img');
            initBannerVideoSize('.video-container .filter');
            initBannerVideoSize('.video-container video');

            $(window).on('resize', function() {
                scaleVideoContainer();
                scaleBannerVideoSize('.video-container .poster img');
                scaleBannerVideoSize('.video-container .filter');
                scaleBannerVideoSize('.video-container video');
            });

        });

        function scaleVideoContainer() {
            var height = $(window).height() + 5;
            var unitHeight = parseInt(height) + 'px';
            $('.homepage-hero-module').css('height',unitHeight);
        }

        function initBannerVideoSize(element){
            $(element).each(function(){
                $(this).data('height', $(this).height());
                $(this).data('width', $(this).width());
            });
            scaleBannerVideoSize(element);
        }

        function scaleBannerVideoSize(element){
            var windowWidth = $(window).width(),
                windowHeight = $(window).height() + 5,
                videoWidth,
                videoHeight;
            console.log(windowHeight);
            $(element).each(function(){
                var videoAspectRatio = $(this).data('height')/$(this).data('width');
                $(this).width(windowWidth);

                if(windowWidth < 1000){
                    videoHeight = windowHeight;
                    videoWidth = videoHeight / videoAspectRatio;
                    $(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - windowWidth) / 2 + 'px'});
                    $(this).width(videoWidth).height(videoHeight);
                }
                $('.homepage-hero-module .video-container video').addClass('fadeIn animated');
            });
        }
    </script>
</head>
<body class="black-back">
<?php include 'nav-bar.php'; ?>

<div class="container" id="contact-blurb">
    <div class="contact-info">
        <h1 class="bolbyH1">Contact The Beard</h1>
        <p class="revalia">Are you in need of some website work?<br> Then let The Beard solve your problems!!<br><br>Just touch the Beard!!</p>
        <!-- trigger modal -->
        <img id="contact-button" src="img/beardlogo.jpg" alt="Dev With A Beard logo" data-toggle="modal" data-target="#contactModal" onclick="pause()">
    </div>
</div>

<div class="contact-hero">
    <div class="video-container">
        <div class="filter"></div>
        <video autoplay loop class="fillWidth" id="myVideo">
            <?php
            $waves = '<source src="video/Infinity.mp4" type="video/mp4"/>Your browser doesn\'t support video. Please upgrade your browser.
            <source src="video/Infinity.webm" type="video/webm"/>Your browser doesn\'t support video. Please upgrade your browser.
            <source src="video/Infinity.ogv" type="video/ogv"/>Your browser doesn\'t support video. Please upgrade your browser.';

            $aurora = '<source src="video/aurora.mp4" type="video/mp4"/>Your browser doesn\'t support video. Please upgrade your browser.';

            $stars = '<source src="video/starrysky.mp4" type="video/mp4"/>Your browser doesn\'t support video. Please upgrade your browser.';

            $movie;

            $keyNumber = rand(1, 5);

            if ($keyNumber == 2 || $keyNumber == 4) {
                $movie = $stars;
            } else if ($keyNumber == 5 || $keyNumber == 1) {
                $movie = $aurora;
            } else if ($keyNumber == 3) {
                $movie = $waves;
            } else {
                $movie = $stars;
            }

            // change echo to $movie to randomly select a different video for the background feed
            echo $stars;

            ?>
        </video>
        <div class="poster hidden">
            <img src="img/Infinity.jpg" alt="ocean waves">
        </div>
    </div>
</div>

<!--<script type="text/javascript">-->
<!--    var video = document.getElementById('myVideo');-->
<!--    function pause() {-->
<!--        video.pause();-->
<!--    }-->
<!--    function play() {-->
<!--        video.play();-->
<!--    }-->
<!--</script>-->

<script type="text/javascript">
    var btn = document.getElementById('contact-button');

</script>

<!-- Modal -->
<div class="modal fade" id="contactModal" role="dialog">
    <div class="modal-dialog">

        <!-- modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h1 id="modalH1" class="modal-title">Contact The Beard</h1>
            </div>
            <div class="modal-body">
                <div class="main_form">
                    <form method="POST" action="send_email.php">
                        <input id="text-block" type="text" name="full_name" placeholder="   Full Name" required>
                        <input id="text-block" type="text" name="email" placeholder="   Email" required>
                        <input id="text-block" type="text" name="telephone" placeholder="   Telephone" required>
                        <br>
                        <input id="modal-button" type="submit" href="send_email.php" value="Submit" name="submit" onclick="play()">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
