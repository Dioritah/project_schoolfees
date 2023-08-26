<?php $page='dashboard';
include("php/dbconnect.php");
include("php/checklogin.php");


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Système de gestion des frais de scolarité</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />


</head>
<?php
include("php/header.php");
?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Tableau de bord</h1>
                        

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
				
				  <div class="col-md-4">
                        <div class="main-box mb-purple">
                            <a href="student.php">
                                <i class="fa fa-users fa-5x"></i>
                                <h4>Nombre total d'étudiants: <?php include 'counter/stucount.php'?></h4>
                                <h5>Gérer les étudiants</h5>
                            </a>
                        </div>
                    </div>
				
				
                   
					
                    <div class="col-md-4">
                        <div class="main-box mb-green">
                            <a href="fees.php">
                                <i class="fa fa-money fa-5x"></i>
                                <h4>Total des gains: <?php include 'counter/totalearncount.php'?></h4>
                                <h5>Percevoir les frais</h5>
                            </a>
                        </div>
                    </div>
					
					
					 <div class="col-md-4">
                        <div class="main-box mb-secondary">
                            <a href="report.php">
                                <i class="fa fa-th-large fa-5x"></i>
                                <h4>Filière disponible: <?php include 'counter/totalgrade.php'?></h4>
                                <h5>Filières</h5>
                            </a>
                        </div>
                    </div>
                  

                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="main-box mb-dull">
                            <a>
                                <i class="fa fa-toggle-on fa-5x"></i>
                                <h5>Étudiants actifs: <?php include 'counter/activecount.php'?></h5>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="main-box mb-maroon">
                            <a href="report.php">
                                <i class="fa fa-file-pdf-o fa-5x"></i>
                                <h5>Afficher les rapports</h5>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="main-box mb-yell">
                            <a href="inactivestd.php">
                                <i class="fa fa-toggle-off fa-5x"></i>
                                <h5>Étudiants inactifs: <?php include 'counter/inactivecount.php'?></h5>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /. ROW  -->

            
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    
   
   <script src="js/jquery-1.10.2.js"></script>	
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="js/custom1.js"></script>
    


</body>
</html>
