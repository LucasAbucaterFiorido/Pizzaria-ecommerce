<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- head -->
    <meta charset="utf-8">
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Basic usage demo">
    <meta name="author" content="David Deutsch">
    <title>
      Basic Demo | Owl Carousel | 2.3.4
    </title>

    <!-- Stylesheets -->
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,400italic,300italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/docs.theme.min.css">

    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">

    <!-- javascript -->
    <script src="assets/vendors/jquery.min.js"></script>
    <script src="assets/owlcarousel/owl.carousel.js"></script>
  </head>
  <body>


    <!-- title -->
    <section class="title">
      <div class="row">
        <div class="large-12 columns">
          <h1>Basic</h1>
        </div>
      </div>
    </section>

    <!--  Demos -->
    <section id="demos">
      <div class="row">
        <div class="large-12 columns">
            <div class="owl-carousel owl-theme">
                <div class="item">
                <h4>1</h4>
                </div>
                <div class="item">
                <h4>2</h4>
                </div>
                <div class="item">
                <h4>3</h4>
                </div>
                <div class="item">
                <h4>4</h4>
                </div>
                <div class="item">
                <h4>5</h4>
                </div>
                <div class="item">
                <h4>6</h4>
                </div>
            </div>
            <div class="owl-nav">
                <button class="owl-prev" type="button" role="presentation">
                    <span aria-label="Previous"><</span>
                </button>
                <button class="owl-next" type="button" role="presentation">
                    <span aria-label="Next">></span>
                </button>
            </div>
            <div class="owl-dots">
                <button class="owl-dot active" role="button">
                    <span></span>
                </button>
            </div>
            <div class="owl-dots">
                <button class="owl-dot active" role="button">
                    <span></span>
                </button>
            </div>
            <div class="owl-dots">
                <button class="owl-dot active" role="button">
                    <span></span>
                </button>
            </div>
    
            <script>
                $(document).ready(function() {
                var owl = $('.owl-carousel');
                owl.owlCarousel({
                    margin: 10,
                    nav: true,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout:5000,
                    autoplayHoverPause:true,
                    responsive: {
                    0: {
                        items: 1
                    }
                    }
                })
                })
            </script>
        </div>
      </div>
    </section>
  </body>
</html>