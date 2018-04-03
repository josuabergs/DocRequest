<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="PUP Binan">
    <meta name="keywords" content="PUP Binan, Polytechnic University of the Philippines Binan, PUPBC, PUP-BC, Binan">
    <meta name="description" content="Polytechnic University of the Philippines Binan - PUP Binan">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://www.pup.edu.ph/resources/images/icons/favicon.ico" rel="icon" type="image/x-icon" />
    <title>Polytechnic University Of The Philippines</title>
</head> 

    <style type="text/css">
      
    .logo-img {
      max-height: 70px!important;
      padding: 15px 0!important;
      }

nav ul li a{
  color: black;
}    

   

.footer-copyright {
    background: #7e0e09 !important;
}

footer.page-footer {
    background: white;
}


nav .button-collapse i {

    color: black;
}

.section {
    padding-top: 1rem;
    padding-bottom: 1rem;
    background-color: rgb(126, 14, 9);
}

div#asd{

  height: 593px;
}

.col.s12.m12{
  margin-top: 100px;
}

.page-footer {
    padding-top: 45px;
  }

    </style>

    <body>
     <nav>
         <div class="nav-wrapper white">
            <div class="container">
               <a href="#!" class="brand-logo">  <img class="responsive-img logo-img"  src="img/puplogo.png">
               <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                   <ul class="right hide-on-med-and-down">
                      <li><a href="index.php" >Home</a></li>
                      <li><a href="#">About Us</a></li>
                      <li><a href="#">Contact Us</a></li>
                        <li><a class="waves-effect waves-light btn " id="button_nav" a href="login">Sign Out</a></li>
                  </ul>
                      <ul class="side-nav"  id="mobile-demo">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a class="waves-effect waves-light btn " id="button_nav" a href="login">Sign Out</a></li>
                    </ul>
                  </div>
                </nav>

      
  <div class="section ">
      </div>



<div class="container" id="asd">
    <div class="container">
       <h5 class="ew">Welcome :</h5>
          <h4 class="center-align">Student Account</h4>
      <div class="container">
        <div class="row">
          <div class="col s12 m12">
       
              <form id="login-form">
                <div class="input-field">
             
                  <input id="username" type="text" autocomplete="off">
                  <label for="username">Change Password</label>
                </div>
                <div class="input-field">
               
                  <input id="password" type="password" autocomplete="off">
                  <label for="password">Retype Password</label>
                </div>
                <div class="center-align">
                  <button id="login-btn" class="hoverable waves-effect waves-light btn right" type="submit">
                    save
                  </button>
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>
    </div>
 
         </div>


             <footer class="page-footer">
       <div class="footer-copyright">
            <div class="container">
            © 2018 Copyright Text
            <span class="white-text text-lighten-4 right" href="#!">Developed By : Josua Berganio, Davidson Consul &amp; Daniel Rivera</span>
            </div>
          </div>
        </footer>


      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js">
          </script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

  <script type="text/javascript">
      $( document ).ready(function(){

         $(".button-collapse").sideNav();
      })

      

     </script>
    </body>
  </html>
  

