<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <title>La Pizza Uruguaya</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ url('html/css/bootstrap.css') }}" />
    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- font awesome style -->
    <link href="{{ url('html/css/font-awesome.min.css') }}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ url('html/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ url('html/css/responsive.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('html.header')
        <!-- end header section -->
        <!-- slider section -->
        <section class="slider_section ">
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-6 col-lg-5">
                                    <div class="detail-box">
                                        <h1>
                                            "...La Verdadera"
                                        </h1>
                                        <p>
                                            Desde 2018, a <b>La Pizza Uruguaya</b> vem conquistando clientes com seu incrível sabor. O segredo está  
                                            na combinação dos melhores ingredientes com uma pitada de amor. mostrando
                                        </p>
                                        <div class="btn-box">
                                            <a href="" class="btn1">
                                                Buy Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-7">
                                    <div class="img-box">
                                        <img src="{{ url('html/images/slider-img.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-6 col-lg-5">
                                    <div class="detail-box">
                                        <h1>
                                            Seja um representante
                                        </h1>
                                        <p>
                                            Entre em contato para saber como ter nossas pizzas 
                                            em seu comércio ou negócio. Nossas pizzas são um excelente opção
                                            não so para revenda para o cliente final, mas também como opção de entregar ela 
                                            pronta para o consumo.
                                        </p>
                                        <div class="btn-box">
                                            <a href="" class="btn1">
                                                Buy Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-7">
                                    <div class="img-box">
                                        <img src="{{ url('html/images/slider-img.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-6 col-lg-5">
                                    <div class="detail-box">
                                        <h1>
                                            Fresh Fruits
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio omnis fugit,
                                            sed tempora praesentium commodi error, hic recusandae repudiandae neque ad
                                            molestias, atque veritatis labore quae eveniet autem in
                                        </p>
                                        <div class="btn-box">
                                            <a href="" class="btn1">
                                                Buy Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-7">
                                    <div class="img-box">
                                        <img src="{{ url('html/images/slider-img.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel_btn-box container">
                    <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
                        <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>
        <!-- end slider section -->
    </div>

    <!-- about section -->

    <section class="about_section layout_padding">
        <div class="container">
            <div class="detail-box">
                <div class="heading_container heading_center">
                    <h2>
                        About Us
                    </h2>
                </div>
                <p>
                    Normal distribution of letters, as opposed to using 'Content here, content here', making it look
                    like
                    readable English. Many desktop publishing packages and web page editors has a more-or-less normal
                    distribution of letters, as opposed to using 'Content here, content here', making it look like
                    readable
                    English. Many desktop publishing packages and web page editors
                </p>
            </div>
            <div class="col-md-9 mx-auto px-0">
                <div class="img-box">
                    <img src="{{ url('html/images/about-img.jpg') }}" alt="">
                </div>
                <div class="btn-box">
                    <a href="">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->

    <!-- fruits section -->

    <section class="fruits_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center ">
                <h2 class="">
                    Nossas Pizzas
                </h2>
                <p class="col-lg-9 px-0">
                    If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                    believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                    anything
                </p>
            </div>
            <div class="fruits_owl-carousel owl-carousel owl-theme ">
                <div class="item">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ url('html/images/santo_antonio.jpg') }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h4>
                                Milagre de Santo Atônio
                            </h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quasi commodi totam soluta
                                harum, voluptatum exercitationem voluptatem sint nulla cumque quo dolore temporibus
                                necessitatibus nisi esse at numquam. Nemo, nesciunt!</h5>
                            <h6 class="price">
                                <span class="new_price">
                                    R$ 31,90
                                </span>
                                {{-- <span class="old_price">
                                    R$ 31,90
                                </span> --}}
                            </h6>
                            <a href="">
                                <i class="fa fa-shopping-basket" aria-hidden="true"></i> Add To Cart
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ url('html/images/f2.png') }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h4>
                                Banana
                            </h4>
                            <h6 class="price">
                                <span class="new_price">
                                    38$
                                </span>
                                <span class="old_price">
                                    43$
                                </span>
                            </h6>
                            <a href="">
                                <i class="fa fa-shopping-basket" aria-hidden="true"></i> Add To Cart
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ url('html/images/f3.png') }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h4>
                                Watermelon
                            </h4>
                            <h6 class="price">
                                <span class="new_price">
                                    44$
                                </span>
                                <span class="old_price">
                                    48$
                                </span>
                            </h6>
                            <a href="">
                                <i class="fa fa-shopping-basket" aria-hidden="true"></i> Add To Cart
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ url('html/images/f4.png') }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h4>
                                Orange
                            </h4>
                            <h6 class="price">
                                <span class="new_price">
                                    41$
                                </span>
                                <span class="old_price">
                                    47$
                                </span>
                            </h6>
                            <a href="">
                                <i class="fa fa-shopping-basket" aria-hidden="true"></i> Add To Cart
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-box">
                <a href="">
                    View More Fruits
                </a>
            </div>
        </div>
    </section>

    <!-- fruits section ends -->

    <!-- blog section -->

    <section class="blog_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Our Blog
                </h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mx-auto">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ url('html/images/b1.jpg') }}" alt="">
                            <h4 class="blog_date">
                                <span>
                                    11 Feb <br>
                                    2021
                                </span>
                            </h4>
                        </div>
                        <div class="detail-box">
                            <h5>
                                Nemo fugit corporis sitTenetur pariatur culpa harum
                            </h5>
                            <a href="">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mx-auto">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ url('html/images/b2.jpg') }}" alt="">
                            <h4 class="blog_date">
                                <span>
                                    11 Feb <br>
                                    2021
                                </span>
                            </h4>
                        </div>
                        <div class="detail-box">
                            <h5>
                                Ut facere necessitatibus modi eum architecto? Minima
                            </h5>
                            <a href="">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mx-auto">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ url('html/images/b3.jpg') }}" alt="">
                            <h4 class="blog_date">
                                <span>
                                    10 Feb <br>
                                    2021
                                </span>
                            </h4>
                        </div>
                        <div class="detail-box">
                            <h5>
                                Sapiente obcaecati cupiditate assumenda illum incidunt
                            </h5>
                            <a href="">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end blog section -->

    <!-- client section -->

    <section class="client_section layout_padding-bottom">
        <div class="container ">
            <div class="heading_container heading_center">
                <h2>
                    Testimonial
                </h2>
            </div>
            <div id="customCarousel2" class="carousel slide" data-ride="carousel">
                <div class="carousel_btn-container">
                    <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
                        <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ url('html/images/client.jpg') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Klara Mason
                                </h5>
                                <p>
                                    It is a long established fact that a reader will be distracted by the readable
                                    content of a page when
                                    looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                                    normal
                                    distribution of letters, as opposed to using 'Content here, content here', making it
                                    look
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ url('html/images/client.jpg') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Klara Mason
                                </h5>
                                <p>
                                    It is a long established fact that a reader will be distracted by the readable
                                    content of a page when
                                    looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                                    normal
                                    distribution of letters, as opposed to using 'Content here, content here', making it
                                    look
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ url('html/images/client.jpg') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Klara Mason
                                </h5>
                                <p>
                                    It is a long established fact that a reader will be distracted by the readable
                                    content of a page when
                                    looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                                    normal
                                    distribution of letters, as opposed to using 'Content here, content here', making it
                                    look
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end client section -->

    <!-- info section -->
    <section class="info_section ">
        <div class="info_container ">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <h6>
                            ABOUT US
                        </h6>
                        <p>
                            Nostrum praesentium, animi pariatur eaque harum amet necessitatibus unde aliquam molestias,
                            sapiente cumque aspernatur officia molestiae possimus atque
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h6>
                            CONTACT US
                        </h6>
                        <div class="info_link-box">
                            <a href="">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span> Location </span>
                            </a>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>+01 12345678901</span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span> demo@gmail.com</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h6>
                            Our Products
                        </h6>
                        <p>
                            Sapiente quidem fugit sed incidunt aut quia eos consectetur, iste eius nobis ullam
                            voluptatem esse mollitia amet. Quibusdam eos inventore neque explicabo aliquid quos
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="info_form ">
                            <h6>
                                Newsletter
                            </h6>
                            <form action="#">
                                <input type="email" placeholder="Enter your email">
                                <button>
                                    Subscribe
                                </button>
                            </form>
                        </div>
                        <div class="social_container">
                            <div class="social_box">
                                <a href="">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-youtube" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end info section -->

    <!-- footer section -->
    @include('html.footer')
    <!-- footer section -->

    <!-- jQery -->
    <script src="{{ url('html/js/jquery-3.4.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script src="{{ url('html/js/bootstrap.js') }}"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- custom js -->
    <script src="{{ url('html/js/custom.js') }}"></script>
</body>

</html>
