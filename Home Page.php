<html>

<head>
    <title>OPTIC</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" crossorigin="anonymous">
   
    <link rel="stylesheet" href="css/reset.css">

    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/middle.css">

    <link rel="stylesheet" href="css/AboutUSPage.css">
    


    <link rel="stylesheet" href="css/anetaretHomePage.css">
 

</head>


<body style="pointer-events:none; min-width: 1000px">
<!--  Header -->
   
    <!--  Logo -->
    <nav style="display:inline">
    <div class="menu">
    <div class="logo">
                <a href="Home%20page.php"><img src="images/LOGO.png"
                        style="margin-left:50px;margin-bottom: 10px; margin-left: 0px;width:210px;height:95px;position:absolute;margin-top: 3px;"
                        alt="logo">
            </div>
      <div class="main-nav">


        <ul>
          <li><a class="list" href="Home Page.php" id="active">HOMEPAGE </a></li>
        </ul>



        <ul>
          <li>
            <a class="list" href="Our-Products.php">BRANDS</a>
            <div class="dropdown-content">
              <a href="Our-Products.php#RAYBAN">RAY-BAN</a>
              <a href="Our-Products.php#VERSACHE">VERSACE</a>
              <a href="Our-Products.php#GUCCI">GUCCI</a>
              <a href="Our-Products.php#PRADA">PRADA</a>
            </div>


          </li>
        </ul>






        <ul>
            <a class="list" href="About Us.php">ABOUT US</a>
            
          
        </ul>



        <ul>
          <li><a class="list" href="Sign In.php" target="_blank">LOGIN</a>
            <div class="dropdown-content">
              <a href="Sign In.php" target="_blank">Signin</a>
              <a href="Sign Up.php" target="_blank">Signup</a>
            </div>
          </li>
        </ul>


       



        <ul>
          <li>
            <a class="list" href="Cart.php"><i class="fas fa-shopping-cart fa-1x"></i></a>
          </li>
        </ul>



  </nav>
  </div>

  </div>


  </div>

<!--  Slideshow -->
    <div class="slideshow-container">
        <div class="slideshow">
            <img src="images/Slider4.jpg" alt="slideshow" style="width:100%;height:500px">
        </div>
        <div class="slideshow">
            <img src="images/Slider3.jpg" alt="slideshow" style="width:100%;height:500px">
        </div>
        <div class="slideshow">
            <img src="images/Slider1.jfif" alt="slideshow" style="width:100%;height:500px">
        </div>
        <div class="slideshow">
            <img src="images/Slider2.jfif" alt="slideshow" style="width:100%;height:500px">
        </div>

        <button class="prev klik" type="button" onclick="plusSlides(-1)" style="margin-top: 180px;">
            <img src="images\shigjetam.png" alt="slideshow"
                style="width:15px; height:25px;padding-right:5px;padding-top:2px;cursor: pointer;">
        </button>

        <button class="next klik" type="button" onclick="plusSlides(1)" style="margin-top: 180px;">
            <img src="images\shigjetad.png" alt="slideshow"
                style="width:15px; height:25x;padding-left:5px;padding-top:2px;cursor: pointer;">
        </button>
    </div>
    


    <<?php

class Title{
public $title;
function __construct($aTitle){
$this->title = $aTitle;
             }

function getTitle(){
return $this->title;
               }
function setTitle($title) {
if(strlen($title)  >= 4){
$this->title = $title;
            }
else {
$this->title = "Pa titull";
     }
                  }
                  }

$title1 = new Title("RAYBAN");
$title2 = new Title("VERSACE");
$title3 = new Title("GUCCI");
$title4 = new Title("PRADA");
            ?>
                
                
                
<div class="boxlarge">

<div class="box">
<div class="top">
    <a href="Our-Products.php#RAYBAN"><?php echo $title1->getTitle(); ?><img src="images/BRAND1/RAY-BAN/PRODUKTI1.png"
            style="width:225px; height:140px" alt="RAYBAN"></a>
</div>
<div class="bot">
    <h2 class="brand">RAY-BAN</h2>
    <p class="description">
       Brendi Ray-Ban eshte brendi me me se shumti kerkesa ne dyqanin tone, kjo fale llojllojshmerise dhe modeleve te ndryshme.
        <span class="hiddentext">Nder brendet me mese shumshti shitje,duke perfshire edhe syzet me diptri njeashtu edhe ato per diell.

        </span>
    </p>
</div>
</div>

<div class="box">
<div class="top">
    <a href="Our-Products.php#VERSACE"><?php echo $title2->getTitle(); ?><img src="images/BRAND2/VERSACE/PRODUKTI1.jfif"
            style="width:100%;height:100%" alt="VERSACE"></a>
</div>
<div class="bot">
    <h2 class="brand">VERSACE</h2>
    <p class="description">
Brendi Versace eshte brendi me me se shumti kerkesa ne dyqanin tone, kjo fale llojllojshmerise dhe modeleve te ndryshme.
 <span class="hiddentext">Nder brendet me mese shumshti shitje,duke perfshire edhe syzet me diptri njeashtu edhe ato per diell.
        </span></p>
</div>
</div>



<div class="box">
<div class="top">
    <a href="Our-Products.php#GUCCI"><?php echo $title3->getTitle(); ?><img src="images/BRAND3/GUCCI/PRODUKTI1.jfif"
            style="width:100%;height:100%" alt="GUCCI"></a>
</div>
<div class="bot">
    <h2 class="brand">GUCCI</h2>
    <p class="description">
    Brendi Gucci eshte brendi me me se shumti kerkesa ne dyqanin tone, kjo fale llojllojshmerise dhe modeleve te ndryshme.
        <span class="hiddentext">Nder brendet me mese shumshti shitje,duke perfshire edhe syzet me diptri njeashtu edhe ato per diell.
        </span>
    </p>
</div>
</div>



<div class="box">
<div class="top">
    <a href="Our-Products.php#PRADA"><?php echo $title4->getTitle(); ?><img src="images/BRAND4/PRADA/PRODUKTI1.jpg" style="width:100%;height:100%"
            alt="Hotic"></a>
</div>
<div class="bot">
    <h2 class="brand">PRADA</h2>
    <p class="description">
    Brendi Prada eshte brendi me me se shumti kerkesa ne dyqanin tone, kjo fale llojllojshmerise dhe modeleve te ndryshme.
        <span class="hiddentext">

        Nder brendet me mese shumshti shitje,duke perfshire edhe syzet me diptri njeashtu edhe ato per diell. </span>
    </p>
</div>
</div>

</div>
        

 

        
<!-- Middle -->



        <div class="vija"></div>



        <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("slideshow");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) { slideIndex = 1 }
                if (n < 1) { slideIndex = slides.length }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
            }
        </script>

    </div>



    <div style="width:100%;background-color:white;position:absolute;">

<!-- Kientet -->
        <div class="anetaret">


            <div class="ceo">
                <p style="margin-top:50px;font-size:20px;    font-weight: bold;">Klientet
                    <small><a href="#" style="float: right; font-weight:400;   color: rgb(124, 156, 55);">View More
                            »</a></small>
                </p>
            </div>
            <div class="mentor">
                <p style="margin-top:50px;font-size:20px;    font-weight: bold;">Puntoret
                    <small><a href="#" style="float: right;font-weight:400;    color: rgb(124, 156, 55);">View More
                            »</a></small>
                </p>
            </div>

            <div class="majtas">

                <div class="ceo1">
                    <div class="fotoceo"><img src="images/PROFILET/CHE.jfif" style="width:48px;height:48px;" alt="arlinda">
                    </div>
                    <div class="shkrimiceo">
                        <h2 class="shkronjatceo">Ernesto Che Guevara</h2>
                        <p class="shkrim">Njera nga optikat me brendet me te njohura ne treg.</p>
                    </div>
                </div>

                <div class="ceo2">
                    <div class="fotoceo"><img src="images/PROFILET/KATANA.jpg" style="width:48px;height:48px;" alt="dafina">
                    </div>
                    <div class="shkrimiceo">
                        <h2 class="shkronjatceo">Agim Ramadani</h2>
                        <p class="shkrim">Gjithmone ne hap me trendet aktuale, ndryshe nga te tjeret.</p>
                    </div>
                </div>

                <div class="ceo3">
                    <div class="fotoceo"><img src="images/PROFILET/PROFESSOR.jpg" style="width:48px;height:48px;" alt="albana">
                    </div>
                    <div class="shkrimiceo">
                        <h2 class="shkronjatceo"> Sergio Martina</h2>
                        <p class="shkrim">Qmimet me te volitshme ne treg, kualiteti i garantuar.</p>
                    </div>
                </div>
                <div class="ceo4">
                    <div class="fotoceo"><img src="images/PROFILET/SNIPER.jpg" style="width:48px;height:48px;" alt="albana">
                    </div>
                    <div class="shkrimiceo">
                        <h2 class="shkronjatceo"> Chris Kyle</h2>
                        <p class="shkrim">Ketu me qmojne ketu bleje..</p>
                    </div>
                </div>



            </div>
            <div class="djathtas">
                <div class="mentor1"><img src="images/PROFILET/PUNTORI2.jpg" style="width:225px;height:225px;" alt="profesori"></div>
                <div class="mentor2"><img src="images/PROFILET/PUNTORI1.jpg" style="width:225px;height:225px;" alt="asistenti"></div>
                <div class="shkrimimentor1">
                    <p style="padding-top: 15px;"><span style="color:black;font-weight:900"></span>Veronika Behluli
                        <br>
                        <a href="#" style="    color: rgb(124, 156, 55); ">Profili »</a>
                    <p>
                </div>
                <div class="shkrimimentor2">
                    <p style="padding-top: 15px;"><span style="color:black;font-weight:900"></span>Elona Hajdini
                        <br>
                        <a href="#" style="    color: rgb(124, 156, 55);">Profili »</a>
                    <p>
                </div>
            </div>
        </div>


 <!--  Footer -->
        <footer>
            <div style="width:100%;height:auto;background-color:rgb(34,34,34); ">
                <div id="wrapper">
                    <div>
                        <h3>ABOUT US</h3>
                        
                        <p>In 1852, Francis Wolle, a schoolteacher, invented the first machine to mass-produce paper
                            bags.
                            Wolle and his brother patented the machine and founded the Union Paper Bag Company.</p>
                        <br>
                        <p><a style="text-decoration: none;color:rgb(124,156,55);font-family:'Niramit','Sorts Mill Goudy','sans serif';
     font-size:16px;" href="">Read more &#187;</a></p>
                    </div>
                    <div>
                        <h3>LINK BLOCK</h3>
                        <ul id="arrow">
                            <li><a style="text-decoration: none" href=""><span
                                        style="color: rgb(102,102,102)">&#187;</span>
                                    Ray-Ban Model-1</a></li>
                            <li><a style="text-decoration: none" href=""><span
                                        style="color: rgb(102,102,102)">&#187;</span>
                                        Ray-Ban Model-2</a></li>
                            <li><a style="text-decoration: none" href=""><span
                                        style="color: rgb(102,102,102)">&#187;</span>
                                        Ray-Ban Model-3</a></li>
                            <li><a style="text-decoration: none" href=""><span
                                        style="color: rgb(102,102,102)">&#187;</span>
                                    Versace Model-1</a></li>
                            <li><a style="text-decoration: none" href=""><span
                                        style="color: rgb(102,102,102)">&#187;</span>
                                        Versace Model-2</a></li>
                            <li><a style="text-decoration: none" href=""><span
                                        style="color: rgb(102,102,102)">&#187;</span>
                                        Versace Model-3</a></li>
                            <li><a style="text-decoration: none" href=""><span
                                        style="color: rgb(102,102,102)">&#187;</span>
                                    Gucci Model-1</a></li>
                            <li><a style="text-decoration: none" href=""><span
                                        style="color: rgb(102,102,102)">&#187;</span>
                                   Gucci Model-2 </a></li>
                            <li><a style="text-decoration: none" href=""><span
                                        style="color: rgb(102,102,102)">&#187;</span>
                                   Gucci Model-3</a></li>
                            <li><a style="text-decoration: none" href=""><span
                                        style="color: rgb(102,102,102)">&#187;</span>
                                   Prada Model-1</a></li>
                            <li><a style="text-decoration: none" href=""><span
                                        style="color: rgb(102,102,102)">&#187;</span>
                                   Prada Model-2</a></li>
                            <li><a style="text-decoration: none" href=""><span
                                        style="color: rgb(102,102,102)">&#187;</span>
                                   Prada Model-3</a></li>
                        </ul>

                    </div>
                    <div>
                        <h3>FROM THE BLOG</h3>
                        <div class="small">
                            <h3>Lifespan of a Bag</h3>
                            <p>We assess the physical, fashion-related and financial attributes that help a purse stand
                                the test of time.</p> <br>
                            <p><a style="text-decoration: none;color:rgb(124,156,55)" href="">Read more &#187;</a></p>
                        </div>
                        <div class="small">
                            <br>
                            <h3>Lifespan of a Bag</h3>
                            <p>We assess the physical, fashion-related and financial attributes that help a purse stand
                                the test of time.</p>
                            <br>
                            <p><a style="text-decoration: none;color:rgb(124,156,55)" href="">Read more &#187;</a></p>
                        </div>
                        <!-- game -->
                    </div>
                    <div>
                        <h3>CONTACT US</h3>
                        <div class="small">
                            <p>TEL: xxxx xxxxxxxx</p>
                            <br>
                            <p>Fax: xxxxxxxx</p>
                            <br>
                            <address id="email">Email:<a style="text-decoration:none;color:rgb(124,156,55)"
                                    href="">contact@mydomain.com</a></address>
                                    <!-- date and time -  built-in function-->
                             <?php
                            $date = date('d-m-y h:i:s');
                            echo $date; ?>
                        </div>

                        <div class="small">
                            <h3>NEWSLETTER</h3>
                            <br>
                            <label class="form" for="name"></label>
                            <input type="text" id="name" name="name" placeholder="  Name">
                            <br><br>
                            <label class="form" for="email"></label>
                            <input type="text" id="email" name="email" placeholder="  Email">
                            <br> <br>
                            <button> <b>Submit</b> </button>
                        </div>
                    </div>
                    <br><br><br>
                    <hr style="padding: 0px;
                background-color: black;
                margin-bottom: 5px;
                margin-top: 10px;
                border: 1px solid black;">
                    <p id="thelast"><span id="grey">COPYRIGHT &COPY; <?php
                    $topic = "-2021";
                    //Zevendeson vizat me hapesira
                    $stringu_i_ri = str_replace('-', ' ', $topic);
                    echo $stringu_i_ri;
                    ?> -All rights reserved-
                            <abbr title="AllRounder">AR</abbr></span></p>
                </div>

            </div>
    </div>
    </footer>
    <script type="text/javascript">
        function pointer() {
            document.getElementsByTagName("BODY")[0].style.pointerEvents = "auto";
        } pointer();

    </script>
</body>


</html>
