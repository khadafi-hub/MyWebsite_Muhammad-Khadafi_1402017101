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
                    <li class="active"><a class="rounded main" href="#banner">My Projects</a></li>
                    <li><a class="rounded" href="askme.php">Ask Me</a></li>
                </ul>
                
            </header>

            
                
            <section id="banner" class="banner banner_myprojects cover-bg">
                    <div class="headertitle">
                        <div class="row align-items-center">
                            <div class="col-12 caption text-center">
                            
                                <h2 class="mt-20">My Projects</h2>
                                
                            </div>
                        </div>
                    </div>
            </section>
        
            <section class="background_glass">
                <div class="glass" style="padding-top: 20px; padding-left: 50px;">
                    <div class="detailproject">
                        <h2 class="mt-20" style="color:rgb(255, 255, 255)" >My Projects</h2>
                        <a id="table-wrapper" style="padding-top: 20px;">
                            <table >
                                <tr>
                                    <th>Project</th>
                                    <th>AS</th>
                                    <th>Description</th>
                                </tr>
                                <tr>
                                    <td>Tribest Motorcycle Website</td>
                                    <td>Backend Developer</td>
                                    <td>Memeriksa bug atau error yang ada pada website serta memperbaiki bug atau error yang ada</td>
                                </tr>
                                <tr>
                                    <td>Mr.Meat Point Of Sale Desktop Software</td>
                                    <td>Designer dan Coder</td>
                                    <td>Mendesign poin of sale untuk perusahaan Mr.Meat serta mengcode software tersebut sesuai design yang sudah dibuat</td>
                                </tr>
                                <tr>
                                    <td>Android APK "Quacking Earth"</td>
                                    <td>Designer dan Coder</td>
                                    <td>Mendesign apk Quacking Earth dan merancang aplikasi tersebut untuk menginfokan gempa yang ada di seluruh dunia</td>
                                </tr>
                                <tr>
                                    <td>Android APK "The Little Zoo"</td>
                                    <td>Coder</td>
                                    <td>Merancang aplikasi game android "The Little Zoo" untuk mengedukasi anak di usia dini dengan memanfaatkan teknologi Augmented Reality dan buku The Little Zoo yang sudah dibuat sebagai image targetnya</td>
                                </tr>
                                <tr>
                                    <td>Android APK Augmented Reality MRT</td>
                                    <td>Coder/td>
                                    <td>Merancang aplikasi Augmented Reality dengan memanfaatkan teknologi augmented reality yang berfungsi memunculkan 3D MRT dengan mentargetkan kartu pos MRT Jakarta sebagai image targetnya</td>
                                </tr>
                                </table>
                        </a>
                    </div>
                </div>
                <div class="circle1"></div>
                <div class="circle2"></div>
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
            <div class="container"><small>Copyright ?? Muhammad Khadafi 2021</small></div>
        </div>
    </footer>
</html>