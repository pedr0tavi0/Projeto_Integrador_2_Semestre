<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>area do professor</title>
     <!-- font awesome icons -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css stylesheet -->
    <link rel="stylesheet" href="css/Style_Login.css">
</head>
<body>
    <header class="header">
        <section class="flex">
          <a href="Index.php" class="logo">educa.</a> 
          <a href="Index.php" class="logo">Aréa do Professor <i class=" fas fa-graduation-cap"></i></a> 
        </section>

    
    <section class="login" id="login">
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <div class="infield">
                    <input type="text" placeholder="Name" />
                    <label></label>
                </div>
                <div class="infield">
                    <input type="email" placeholder="Email" name="email"/>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="password" placeholder="Password" />
                    <label></label>
                </div>
                <div class="infield">
                    <input type="telefone" placeholder="telefone" />
                    <label></label>
                    <select name="sexo" id="sexo">
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                       </select>
                       <select name="funcao" id="funcao">
                        <option value="professor">Professor</option>
                        <option value="medico">Medico</option>
                       </select>
                </div>
                <button type="submit" value="Entrar">Cadastrar</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="login.php" method="POST">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                <div class="infield">
                    <input type="email" placeholder="Email" name="email"/>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="password" placeholder="Password" />
                    <label></label>
                </div>
                <a href="#" class="forgot">Forgot your password?</a>
                <input type="submit" value="Entrar">
            </form>
        </div>
        <div class="overlay-container" id="overlayCon">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button>Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button>Sign Up</button>
                </div>
            </div>
            <button id="overlayBtn"></button>
        </div>
    </section>

    
<!-- js code -->
<script>
    const container = document.getElementById('login');
    const overlaycon = document.getElementById('overlaycon');
    const overlayBtn = document.getElementById('overlayBtn');

    overlayBtn.addEventListener('click', ()=> {
      container.classList.toggle('right-panel-active');

      overlayBtn.classList.remove('btnScaled');
      window.requestAnimationFrame( ()=>{
          overlayBtn.classList.add('btnScaled');
      })
    });
  </script>


</body>
</html>
   
    
  