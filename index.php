<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('inc_header.php'); ?>
</head>

<body>
    <?php include('inc_nav.php'); ?>
    <div class="container-lg my-3">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Carousel indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/slide1.jpg" alt="First Slide">
                </div>
                <div class="carousel-item">
                    <img src="img/slide2.jpg" alt="Second Slide">
                </div>
                <div class="carousel-item">
                    <img src="img/slide3.jpg" alt="Third Slide">
                </div>
            </div>
            <!-- Carousel controls -->
            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <div class="container">
        <div class="jumbotron">
            <h1>Highlight</h1>
            <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <p><a href="#" target="_blank" class="btn rounded-pill btn-lg bg-green text-white">Read More</a></p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h2>HTML</h2>
                <p>HTML is the standard markup language for describing the structure of the web pages. Our HTML
                    tutorials will help you to understand the basics of latest HTML5 language, so that you can create
                    your own web pages or website.</p>
                <p><a href="#/html-tutorial/" target="_blank"
                        class="btn rounded-pill bg-green text-white">Learn More »</a></p>
            </div>
            <div class="col-md-4">
                <h2>CSS</h2>
                <p>CSS is used for describing the presentation of web pages. CSS can save a lot of time and effort. Our
                    CSS tutorials will help you to learn the essentials of latest CSS3, so that you can control the
                    style and layout of your website.</p>
                <p><a href="#/css-tutorial/" target="_blank"
                        class="btn rounded-pill bg-green text-white">Learn More »</a></p>
            </div>
            <div class="col-md-4">
                <h2>Bootstrap</h2>
                <p>Bootstrap is a powerful front-end framework for faster and easier web development. Our Bootstrap
                    tutorials will help you to learn all the features of latest Bootstrap 4 framework so that you can
                    easily create responsive websites.</p>
                <p><a href="#/twitter-bootstrap-tutorial/" target="_blank"
                        class="btn rounded-pill bg-green text-white">Learn More »</a></p>
            </div>
        </div>
    </div>
</body>

</html>