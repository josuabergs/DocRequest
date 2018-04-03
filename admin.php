<?php
	session_start();
	if(!isset($_SESSION["id"])) {
		if($_SESSION["privilege"] == 1) {
			header("Location: admin");
		} else if($_SESSION["privilege"] == 2) {
			header("Location: student");
		} else {
			header("Location: index");
		}
	}
?>

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



.col.s12.m12{
  margin-top: 100px;
}

.page-footer {
    padding-top: 29px;
    }

a.waves-effect.waves-light.btn {
    width: 300px;
}

a#button_nav {
    width: 150px;
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
                        <li><a class="waves-effect waves-light btn " id="button_nav" href="logout">Sign Out</a></li>
                  </ul>
                      <ul class="side-nav"  id="mobile-demo">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a class="waves-effect waves-light btn " id="button_nav" href="logout">Sign Out</a></li>
                    </ul>
							    </div>
							  </nav>

      
  <div class="section ">
      </div>



<div class="container" id="asd">
    <div class="container">
       <h5 class="ew">Welcome :</h5>
          <h4 class="center-align">Admin Page</h4>
      <div class="container">
     

              <div class="col s12 m6">
  
        <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus facere sunt ut at, pariatur aperiam autem. Tempora mollitia, asperiores vitae eum unde impedit, expedita quam obcaecati deserunt dolor vero sit!</p>
   
      </div>
      <div class="col s12 m6">
     <a class="waves-effect waves-light btn" a href="#">Document Management</a>
          
      </div>
           </div>

             <div class="container">
     

              <div class="col s12 m6">
  
        <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus facere sunt ut at, pariatur aperiam autem. Tempora mollitia, asperiores vitae eum unde impedit, expedita quam obcaecati deserunt dolor vero sit!</p>
   
      </div>
      <div class="col s12 m6">
      <a class="waves-effect waves-light btn" a href="admin-usermanagement">User Management</a>
         
      </div>
           </div>


  
             <div class="container">
     

              <div class="col s12 m6">
  
        <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus facere sunt ut at, pariatur aperiam autem. Tempora mollitia, asperiores vitae eum unde impedit, expedita quam obcaecati deserunt dolor vero sit!</p>
   
      </div>
      <div class="col s12 m6">
         <a class="waves-effect waves-light btn" a href="#">Student Management</a>
         
      </div>
           </div>


             <div class="container">
     

              <div class="col s12 m6">
  
        <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus facere sunt ut at, pariatur aperiam autem. Tempora mollitia, asperiores vitae eum unde impedit, expedita quam obcaecati deserunt dolor vero sit!</p>
   
      </div>
      <div class="col s12 m6">
        <a class="waves-effect waves-light btn" a href="#">Document Management</a>
           </div>

          
          </div>
        </div>
    
 
         </div>


             <footer class="page-footer">
        
          <div class="footer-copyright">
            <div class="container">
            © 2018 Copyright Text
            <a class="white-text text-lighten-4 right" href="#!">Developed By : Josua Berganio & Daniel Rivera</a>
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