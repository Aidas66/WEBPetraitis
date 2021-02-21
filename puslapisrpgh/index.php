<?php
    require __DIR__ . '/app/src/app.php';
?>
<!DOCTYPE html>
<html lang="" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="discription" content="Dujų projektavimas, inžinerinių tinklų projektavimas.">
    <title>R. Petraitis ir partneriai</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,700;0,900;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="photos/favikon.PNG" sizes="16x16" type="image/png">
    <script src="https://kit.fontawesome.com/6e61101654.js" crossorigin="anonymous"></script>    
    <script>
        function myFunction() {
            var x = document.getElementById("mMenu");
            if(x.style.display === "block"){
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
                
        }
    </script>
</head>
<body>
<!--
    <div itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
    <span itemprop="ratingValue">4</span> stars -
    based on <span itemprop="reviewCount">250</span> reviews
    </div>
-->
    <header class="site-header">
        <div class="container flex-container">
            <div class="logo">
                <img src="photos/logo.JPG" alt="R.Petraitis ir partneriai logotipas" height="60">
            </div>
            <nav class="main-nav">
                <ul class="flex-container">
                    <li><a href="#pradzia">Pradžia</a></li>
                    <li><a href="#apie">Apie mus</a></li>
                    <li><a href="#paslaugos">Paslaugos</a></li>
                    <li><a href="#galerija">Galerija</a></li>
                    <li><a href="#uzsakovai">Užsakovai</a></li>
                    <li><a href="#kontaktai">Kontaktai</a></li>
                </ul>
            </nav>
            <nav class="mobile-nav">
                <ul id="mMenu" class="flex-container">
                    <li><a href="#pradzia">Pradžia</a></li>
                    <li><a href="#apie">Apie mus</a></li>
                    <li><a href="#paslaugos">Paslaugos</a></li>
                    <li><a href="#galerija">Galerija</a></li>
                    <li><a href="#uzsakovai">Užsakovai</a></li>
                    <li><a href="#kontaktai">Kontaktai</a></li>
                </ul>
                <a href="javascript:void(0);" class="icon"  onclick="myFunction()">
                    <i class="fa fa-bars" ></i>
                </a>
            </nav>
        </div>
    </header>
    <section class="hero" id="pradzia">
        <div class="container">       
            <h1>Sveiki, esame inžinerinių tinklų projetuotojai! Specializuojamės dujų tinklų projektavimu, bei galime pasiūlyti ir kitas paslaugas.</h1>
            <a href="#paslaugos">Paslaugos</a>
           
        </div>
    </section>
    <section class="about" id="apie">
        <div class="container2">
            <div class="section-heading" id="apie">
                <h2>Apie mus</h2>
                <p>Įmonė R. Petraitis ir partneriai įkurta 1992 m. Turime daugiau kaip 25 metų patirtį. Įmonė specializuojasi dujų sistemų projektavimo srityje, tačiau taip pat atlieka ir vandentiekio bei nuotekų šalinimo tinklų projektus.</p>
                <p>Įmonėje dirbantys darbuotojai turi projektų dalių vadovų atestatus bei dujų sistemų iki 1,6 MPa ir magistralinių dujotiekių projektuotojų pažymėjimus. </p>
                <p>Ilgametė darbo patirtis bei kvalifikacija  ir profesionalumas garantuoja punktualumą, greitai bei kokybiškai atliekamas paslaugas. Išsamiai konsultuojame dominančiais klausimais, kreipkitės.Prireikus įgyvendinti projektą nukreipsime Jus į mūsų partnerius montavimo srityje.</p>
            </div>    
        </div>
    </section>
    <section class="services " id="paslaugos" >
            <div class="section-heading2" >
                <h2>Projektavimo paslaugos</h2>
            </div>
            <div class="section-content flex-container">
                <div class="service">
                    <div class="iconas">
                        <img src="photos/breafcase.png" alt="folder">
                        <h3>Lauko dujotiekiai ir vidaus dujotiekiai</h3>
                    </div>
                    <p>Projektuojame lauko (skirstomuosius, vartotojo sistemos) ir vidaus dujotiekius</p>
                    <ul>
                        <li>Individualiems namams</li>
                        <li>Blokuotiems namams</li>
                        <li>Daugiabučiams</li>
                        <li>Katilinėms</li>
                        <li>Rekonstruojamiems pastatams</li>
                    </ul>
                </div>
                <div class="service">
                    <div class="iconas">
                        <img src="photos/Pencil.png"alt="pieštukas">
                        <h3>Vandentiekio ir nuotekų šalinimo tinklai</h3>
                    </div>
                    <p>Projektuojame vandentiekio ir nuotekų šalinmo tinklus pastatams ir individualiems namams</p>
                </div>
                <div class="service">
                    <div class="iconas">
                        <img src="photos/tools.png" alt="tools">
                        <h3>Šildymo ir vėdinimo sistemos </h3>
                    </div>
                    <p>Projektuojame šildymo ir vėdinimo sistemas  pastatams ir individualiems namams</p>
                </div>
             </div>
    </section>
    <section class="gallery" id="galerija">
        <div class="galleryh2 ">
            <h2>Galerija</h2>
        </div>
        <div class="flex-container gu flex section-content">
            <div class="col">
                <a data-fancybox="gallery1" href="photos/atestatasrp.jpg" >
                    <img src="photos/atestatasrp.jpg" height="200">
                </a>
           </div>
            <div class="col">
                <a data-fancybox="gallery1" href="photos/atestatasjp.jpg">
                    <img src="photos/atestatasjp.jpg" height="200">
                </a>
           </div>
            <div class="col">
                <a data-fancybox="gallery1" href="photos/atestatasar.jpg">
                    <img src="photos/atestatasar.jpg" height="200">
                </a>
           </div>
            <div class="col">
                <a data-fancybox="gallery1" href="photos/laukoplanas.jpg">
                    <img src="photos/laukoplanassmall.jpg" height="200">
                </a>
           </div>
            <div class="col">
                <a data-fancybox="gallery1" href="photos/vidausdujuplanas.jpg">
                    <img src="photos/vidausdujuplanassmall.jpg" height="200">
                </a>
           </div>
        </div>
    </section>
    <section class="clients" id="uzsakovai">
        <h2>Užsakovai</h2>
        <p>Metų laikotarpyje įmonė atlieka daugiau kaip 200 užsakytų įvairios paskirties inžinerinių tinklų projektų, tokiems pastatams kaip individualūs namai, daugiabučiai, gamyklos, sandėliai, maitinimo įstaigos, viešbučiai, administraciniai pastatai, parduotuvės ir kiti. Mūmis pasitikėjo šie bei daugelis kitų užsakovų:</p>
        <div class="flex-container section-content logos">
                <img src="photos/maxima.png" height="80">
                <img src="photos/Akropolis_logo.jpg" height="80">
                <img src="photos/atsisiusti.jpg" height="80">
                <img src="photos/betonocentras.jpg" height="80">
                <img src="photos/Plain-mcdonalds-logo.jpg" height="80">
        </div>
    </section>
    <section class="contacts" id="kontaktai">
        <div class="flex-container section-content">
            <div class="forms">
                <div class="form-text">
                    <h2>Susisiekime</h2>
                    <p>Turite klausimų? Galite su mumis susisiekti nurodytu telefono numeriu, elektroniniu paštu arba žemiau užpildę easnčią formą. Pasistengsime kuo skubiau Jums atsakyti.</p>
                </div>
                <form class="form" method="post" action="index.php">
                    <div class="input-row">
                        <input type="text" name="vardas" placeholder="Vardas(Privaloma)" required>
                        <input type="email" name="email" placeholder="El. paštas(privaloma)" required>
                        <input type="tel" name="tel" placeholder="Tel. Nr.">
                    </div>
                    <textarea name=message rows="8" placeholder="Jūsų žinutė(privaloma)" required></textarea>              
                    <input class="btn" type="submit" name="submit" value="Siųsti" >
                </form>
            </div>
            <div class="contact section-content">
                <h3>Mus rasite</h3>
                <h4>UAB R. Petraits ir partneriai</h4>
                <h4>A. Goštauto g. 8-247, Vilnius, LT-01108</h4>
                <h4>Įmonės kodas: 125252647, PVM mokėtojo kodas: LT252526410</h4>
                    <div class="pastas">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:petraitisuab@gmail.com"> petraitisuab@gmail.com</a>
                    </div>
                    <div class="telefonas">
                        <i class="fas fa-phone"></i>
                        <a href="tel:+37069948603">+370 699 48 603 </a>
                    </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d726.328389733822!2d25.269561480222766!3d54.69292966158594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd940648ab4a89%3A0x761cdcf99b2245fc!2sR.%20Petraitis%20ir%20partneriai!5e0!3m2!1slt!2slt!4v1611173957402!5m2!1slt!2slt" width="800" height="530" frameborder="0" style="border:1;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </section>
    <section class="footer">
        <p class="copyright"> &copy; <?php echo date('Y'); ?> Visos teisės saugomos. </p>
    </section>
<script src="app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>   
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="custom.js"></script>
</body>
</html>
