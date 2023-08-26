<!DOCTYPE html>
<html>
<head>
     <!-- BOOTSTRAP STYLES-->
     <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
<style>
    @font-face {
  font-family: Poppins;
  src: url("fonts/Poppins-Regular.ttf");
}

html * {
  font-family: "Poppins", sans-serif;
}
.myhead{
margin-top:0px;
margin-bottom:0px;
text-align:center;
}
</style>
</head>
<body>
<?php
 include("php/dbconnect.php");
if (isset($_REQUEST['username'], $_REQUEST['emailid'], $_REQUEST['password'])){
  // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
  $username = stripslashes($_REQUEST['username']);
  $username = mysqli_real_escape_string($conn, $username); 
  // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
  $emailid = stripslashes($_REQUEST['emailid']);
  $emailid = mysqli_real_escape_string($conn, $emailid);
  // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);
  //requéte SQL + mot de passe crypté
    $query = "INSERT into `user` (username, emailid, password)
              VALUES ('$username', '$emailid', '".md5($password)."')";
  // Exécuter la requête sur la base de données
    $res = mysqli_query($conn, $query);
    if($res){
        $newURL  = 'login.php';
        header('Location: '.$newURL);
      
    }
}else{
?>
<div class="container">
        
        <div class="row ">
              
               <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                         
                           <div class="panel-body" style="background-color: #E2E2E2; margin-top:70px; box-shadow: 5px 10px #888888;">
                             <h3 class="myhead">Système de gestion des frais de scolarité</h3>
                             <form class="box" action="" method="post">
                               
                            

                             <div class="form-group input-group">
                             <span class="input-group-addon"><i class="fa fa-user"  ></i></span>

                                <input type="text" class="form-control" name="username" placeholder="Donnez le nom de l'utilisateur" required />
                            </div>

                            <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-user"  ></i></span>
                                <input type="text" class="form-control" name="emailid" placeholder="Donnez l'email de l'utilisateur" required />
                            </div>

                            <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-user"  ></i></span>
                            
                                <input type="password" class="form-control" name="password" placeholder="Donnez le mot de passe de l'utilisateur" required />
                            </div>
                            <input type="submit" name="submit" value="S'inscrire" class="btn btn-success" />
                                
                            <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
                            </form>
                         </div>

                </div>
         </div>
 </div>
<?php } ?>
</body>
</html>