

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
         .marathi{
           justify-content: center;
           border: solid black;
           box-shadow: 2px 4px black;
           padding-top: -10%;
           width: 30%;
           margin: 0 auto;
         }
         .header{
           margin: 0 auto;
           width: 65.0%;
           /* border: solid blue; */
           padding-bottom: -30px;
         }
         .input-field{
           margin-left: 25%;
         }
         .inputbutton{
           margin: 0 auto;
           width: 25%;
         }
      </style>
  </head>
  <body>
   <div class="marathi">
   <div class="login-form">
    <form method="post" action="adminupdate.php">
<div class="header">
     <h2>Admin Login Panel</h2>
     </div>
     <hr> 
     <div class="login-form">
       
      <div class="input-field">
           <i class="fas fas-user"></i>
           <input type="text" placeholder="Username" name="a_name">
         </div>
         <br>
         <br>
         <div class="input-field">
           <i class="fas fas-lock"></i>
           <input type="password" placeholder="Password" name="a_password">
         </div>
         <br>
         <br>
         
        <div class="inputbutton">
        <input type="Submit" name="Submit"  class="btn btn-primary"value="Reset">
        </div>
     </div>

</form>
    </div>
   </div>
  </body>
  </html>