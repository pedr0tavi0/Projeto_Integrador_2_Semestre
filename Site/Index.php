<?php

 require_once("global.php");
 require_once("conexao.php");

 

 
 
 
 
 if(!empty($flassMessage["msg"])){
   //limpar msg
   $message->clearMessage();
 }
 
 
 ?>
 
 <!--php code -->
 <?php if(!empty($flassMessage["msg"])): ?>
     <div class="msg-container">
     <p class="msg<?= $flassMessage["type"]?>"><?= $flassMessage['msg']?></p>
 </div>
 <?php endif; ?>
 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

   
     <!-- swiper css  link  -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>


    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- custom css file link -->
    <link rel="stylesheet" href="css/Style_Index.css">



</head>
<body>
    <!-- header section starts -->
     <header class="header">
      <section class="flex">
        <a href="#home" class="logo">ProfCare</a>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="Login-Professor.php">Professor </a>
            <a href="Login-Medico.php">Medico </a>
            <a href="#courses">Sobre nós</a>
            <a href="#contact">Contato</a>
            <a href="#about">Meta</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
      </section>

     </header>
    <!-- header section ends -->
    <!-- home section stars -->
     <section class="home" id="home">
        <div class="row">
            <div class="content">
                <h3>Prof<span>Care</span></h3>
                <a href="#contact" class="btn">nos contate</a>
            </div>

            <div class="image">
                <img src="images/Student stress.svg" alt="">
            </div>
        </div>
     </section>
    <!-- home section ends -->

    <!-- counter section stars -->
    <section class="count">

        <div class="box-container">
            
         <div class="box">

            <i class="fas fa-stethoscope"></i>
            <div class="content">
                <h3>150+</h3>
                <p>sessões</p>
            </div>
        </div>

        <div class="box">
            
            <i class="fas fa-users "></i>
            <div class="content">
                <h3>1300+</h3>
                <p>pacientes</p>
            </div>
        </div>

        <div class="box">
            
            <i class="fas fa-user-md r"></i>
            <div class="content">
                <h3>80+</h3>
                <p>medicos</p>
            </div>
        </div>
       
        <div class="box">
            
            <i class="fas fa-face-smile"></i>
            <div class="content">
                <h3>100%</h3>
                <p>satisfação</p>
            </div>
        </div>
    
    
    
      </div>
    </section>
    <!-- counter section ends -->

<!-- about section starts -->

<section class="about" id="about">

    <div class="row">

        <div class="image">
          <img src="images/Online world.svg" alt="">
        </div>

        <div class="content">
            <h3>Por que nos escolher?</h3>
            <p>Facilitando seu dia a dia e tornando mais pratico e simplificado para entrar em contato com quem se preocupa com voçê</p>
                 <!-- <a href="#contact"class="btn">contact us</a> -->
        </div>




    </div>
</section>
<!-- about section ends -->

<!-- courses section starts -->
 <section class="courses" id="courses">
     
   <h1 class="heading">Sobre <span>nós</span></h1>

   <div class="swiper courses-slider">

     <div class="swiper-wrapper">

        <div class="swiper-slide slide">
            <img src="images/About us page.svg" alt="">
            <h3>Profissionais Dedicados</h3>
            <p>Nós da ProfCare trabalhamos duro para que a distancia não seja um problema para voçê e sua saúde mental</p>
        </div>

        <div class="swiper-slide slide">
            <img src="images/waterfall method.svg" alt="">
            <h3>Constante Desenvolvimento</h3>
            <p>A cada dia mais trazendo tecnologia e conhecimento profissional para a tela do seu aparelho, inovando nas comunicações e video chamada</p>
        </div>

        <div class="swiper-slide slide">
            <img src="images/About us page-rafiki.svg" alt="">
            <h3>Interface Pratica</h3>
            <p>Possuimos um site limpo e pratico, para os usuarios que não saem das telas e dos smartphones não sentirem um desgaste mental.</p>
        </div>

     </div>

     <div class="swiper-pagination"></div>

   </div>

 </section>
<!-- courses section ends -->

<!-- contact section starts -->

<section class="contact" id="contact">

 <h1 class="heading"><span>contate</span> nos</h1>

 <div class="row">

    <div class="image">
      <img src="images/Contact us.svg" alt="">
    </div>

 <form action="" method="post"> 
    <span>your name</span>
    <Input type="text" required placeholder="enter your full name" maxlength="50"
    name="name" class="box">

    <span>your email</span>
    <Input type="email" required placeholder="enter your valie email" maxlength="50"
    name="email" class="box">

    <span>your number</span>
    <Input type="number" required placeholder="enter your valie number" 
      max="99999999999" min="0" name="number" class="box" onkeypress="if(this.value.
      length == 10) return false;">

     <span>select gender</span>
     <div class="radio">
        <input type="radio" name="gender" value="male" id="male">
        <label for="male">male</label>
        <input type="radio" name="gender" value="female" id="female">
        <label for="female">female</label>
     </div>
    <input type="submit" value="send message" class="btn" name="send"> 
   
 </form>

 </div>


</section>
<!-- contact section ends -->

<!-- footer section starts -->

<footer class="footer">

    <section>
      <div class="share">
          
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-youtube"></a>
      </div>


      <div class="credit">&copy; copyright @ 2022 by <span>mr. web designer</span> | all
    rights reserved!</div>


    </section>



</footer>
<!-- footer section ends -->



<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- custom js file links -->
<script src="js/script.js"></script>
    
</body>
</html>

