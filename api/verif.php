<?php 
   session_start();
   ?>
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="/css/style.css">
       <title>Confirm Email</title>
   </head>
   <body class = "verif-page">
       <div class="bg-img">
         <div class="container">
           <div class="box form-box">
   
               <header>Confirm it's you</header>
   
               <div class = "presslink">
                   <p>Press the link sent to your email</p>
                   <p><?php echo $email; ?></p>
               </div>
               
               <div class="footer">
               If this isn't right,&emsp;&emsp;<a href="register.php"><span class="terms">Change</span></a>
               </div>
           </div>
         </div>
       </div>
   </body>
   </html>