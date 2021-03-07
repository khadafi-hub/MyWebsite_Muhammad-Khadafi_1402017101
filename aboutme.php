<!DOCTYPE html>
<html>
    <head>
        <title>Muhammad Khadafi</title>
       
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="CSS/style.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="main.js"></script>

        <!-- JS, Popper.js, and jQuery -->
        <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <!-- Smooth scroll -->
        
        <!-- <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script> -->
        
        <script type="text/JavaScript">
            window.addEventListener("scroll", function(){
                var header = document.querySelector("header");
                header.classList.toggle("sticky", window.scrollY > 0);
            })
        </script>
        

    </head>
    <body>
        <div class="mycontainer">
            <header>
                <a href="#banner" class="logo">muhammad khadafi</a>
                <ul>
                    <li><a class="rounded main" href="index.php">Home</a></li>
                    <li class="active"><a class="rounded" href="#banner">About Me</a></li>
                    <li><a class="rounded main" href="myprojects.php">My Projects</a></li>
                    <li><a class="rounded" href="askme.php">Ask Me</a></li>
                </ul>
                
            </header>
                
            <section id="banner" class="banner banner_aboutme cover-bg">
                    <div class="headertitle">
                        <div class="row align-items-center">
                            <div class="col-12 caption text-center">
                            
                                <h2 class="mt-20">About Me</h2>
                                
                            </div>
                        </div>
                    </div>
            </section>
        
            <section class="about section-padding pb-0">
                    <div class="row align-item-center">
                        <div class="col-lg-12 section text-center">
                            <p>who am i</p>
                            <h3>about me</h3>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="part_photo">
                                <img class="img-fluid" src="images/hero-about.jpg">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="part_text">
                                <h4 class="mb-30">Hello</h4>
                                <p class="pb-35">I'm Muhammad Khadafi. I'm an IT student, and i'm very 
                                    passionate and dedicated about web design and APK design for android. 
                                    With my experience during my college as an IT student, 
                                    I have acquired the skills and knowledge necessary to make your project a success </p>
                                <span>Skills</span>
                                <ul>
                                    <li>
                                        MySQL
                                    </li>
                                    <li>
                                        Java
                                    </li>
                                    <li>
                                        HTML & CSS
                                    </li>
                                    <li>
                                        PHP
                                </ul>
                                <div class="info mt-35">
                                    <ul>
                                        <li>
                                            <span class="title"><strong>Name :</strong></span>
                                            <span class="value"><strong>Muhammad Khadafi</strong></span>
                                        </li>
                                        <li>
                                            <span class="title"><strong>Address :</strong></span>
                                            <span class="value"><strong>Indonesia</strong></span>
                                        </li>
                                        <li>
                                            <span class="title"><strong>Age :</strong></span>
                                            <span class="value"><strong>21</strong></span>
                                        </li>
                                        <li>
                                            <span class="title"><strong>Phone :</strong></span>
                                            <span class="value"><strong>+62 877 8858 8302</strong></span>
                                        </li>
                                    </ul>
                                </div>
                                <a href="https://drive.google.com/file/d/1cGy0D_p5rFxgG0Lgm_0OvDWzR92FRRMu/view?usp=sharing" class="btn mr-2">Download CV</a>
                                <a href="#" class="btn">Hire Me</a>
                            </div>
                        </div>
                    </div>
            </section>

            <section class="ask_me section-padding text-center cover-bg" style="height: 50vh;">
                <h2>I'll be pleased to answer your questions</h2>
                <a href="#" class="btn mt-30">Ask Me</a>
            </section>
        </div>
    </body>

    <footer class="footer">
        <div class="infolcs ">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0 text-left">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                            Jl. Raya Pelabuhan
                            <br/>
                            Gang 5 Lorong T No. 9B
                            <br/>
                            Jakarta Utara, DKI Jakarta.
                            <br/>
                            Indonesia. 14220
                        </p>
                    </div>
    
                    <!-- Footer Contact Text-->
                    <div class="col-lg-4 text-left" >
                        <h4 class="text-uppercase mb-4">Contack</h4>
                        <p class="lead mb-0 ">Email : khadafikhadafi0@gmail.com <br />Phone Number : (+62) 815 5772 4858  </p>
                        
                    </div>
                    
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0 text-center">
                        <h4 class="text-uppercase mb-4">Social Media</h4>
                        <a class="btn-outline-light btn-social mx-1" href="https://www.instagram.com/khadafi_af/"><i class="fa fa-instagram"></i></a>
                        <a class="btn-outline-light btn-social mx-1" href="https://github.com/khadafi-hub"><i class="fa fa-github"></i></a>
                        <a class="btn-outline-light btn-social mx-1" href="https://web.facebook.com/profile.php?id=100007886132427"><i class="fa fa-facebook"></i></a>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Copyright Section-->
        <div class="copyright py-3 text-center text-white">
            <div class="container"><small>Copyright © Muhammad Khadafi 2021</small></div>
        </div>
    </footer>
</html>