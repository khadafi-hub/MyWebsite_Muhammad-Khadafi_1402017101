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
                    <li><a class="rounded" href="aboutme.php">About Me</a></li>
                    <li><a class="rounded main" href="myprojects.php">My Projects</a></li>
                    <li class="active"><a class="rounded" href="#banner">Ask Me</a></li>
                </ul>
                
            </header>

            
                
            <section id="banner" class="banner banner_askme cover-bg">
                    <div class="headertitle">
                        <div class="row align-items-center">
                            <div class="col-12 caption text-center">
                            
                                <h2 class="mt-20">Ask Me</h2>
                                
                            </div>
                        </div>
                    </div>
            </section>
        
            <section id="ask_me">
                <h1 class="title">get in touch</h1>
                <div class="container"> 
                    <div class="contact-form row">
                        <div class="form-field col-lg-6">
                            <input id="name" class="input-text" type="text" name="">
                            <label for="name" class="label">name</label>
                        </div>

                        <div class="form-field col-lg-6">
                            <input id="email" class="input-text" type="email" name="">
                            <label for="email" class="label">email</label>
                        </div>

                        <div class="form-field col-lg-6">
                            <input id="company" class="input-text" type="text" name="">
                            <label for="company" class="label">company name</label>
                        </div>

                        <div class="form-field col-lg-6">
                            <input id="phone" class="input-text" type="text" name="">
                            <label for="phone" class="label">phone number</label>
                        </div>

                        <div class="form-field col-lg-12">
                            <input id="message" class="input-text" type="text" name="">
                            <label for="message" class="label">message</label>
                        </div>  

                        <div class="form-field col-lg-12">
                            <input id="message" class="submit-btn" type="submit" value="submit" name="">
                            
                        </div>    
                    </div>
                    
                </div>
                
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