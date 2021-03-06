<!-- boostrap navbar -->
<?php
session_start();

  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SENimmobilier</title>

    <!-- Bootstrap -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
    .marketing {
    	text-align: center;
    	margin-bottom: 20px;
    }
    .divider{
    	margin: 80px 0px;
    }
    hr{
    	border: solid 1px #eee
    }
    nav{
    	margin:0px ;
    }
    /* Sticky footer styles
-------------------------------------------------- */
html {
  position: relative;
  min-height: 100%;
}
body {
  /* Margin bottom by footer height */
  margin-bottom: 60px;
}
.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 60px;
  background-color: black;
}
    



    </style>
  </head>
  <body>
 <nav class="navbar navbar-default navbar-inverse " style="border-radius:0px !important;margin-bottom=0px;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
   <div class="navbar-header ">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">SEN<em><small class="text-primary">immobilier <span class="glyphicon glyphicon-home"></span></small></em></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
       
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="client.php.php" class="text-warning">home</a></li>


        <li><a href="alerte.php">Mes alertes Mail</a></li>
        <li><a href="sauvegarde.php">Mes recherches </a></li>
                <li><a href="decoabonne.php">Deconnexion</a></li>
      
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="dist/image/1.jpg" alt="im1" class="img-responsive">
      <div class="carousel-caption">
        

        ...
      </div>
    </div>
    <div class="item">
      <img src="dist/image/7_bon.jpg" alt="img2">
      <div class="carousel-caption">
      
        ...
      </div>
    </div>
     <div class="item ">
      <img src="dist/image/new_54.jpg" alt="im3">
      <div class="carousel-caption">
      

        ...
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="clearfix" style="margin-bottom=20px;"></div>
<img src="dist/image/logo.png"><br><br>
<h3 class=text-info>BIENVENUE dans Votre Espace Personnel </h3>


<?php
$connect = mysql_connect('localhost','root','');
    mysql_select_db('immobilier');

if(isset($_SESSION['email_ab'])){
?>

 
     
    <article class="bg-contact">
      <h2 class="text-muted"><?php echo  $_SESSION['prenom']."  ". $_SESSION['nom'] ." ( ". $_SESSION['email_ab']." ) ";?></h2>

        
              
                
          <h2 class="text-muted">    <?php echo $_SESSION['adresse'];?><br></h2>
              <h2 class="text-muted"><u><?php echo $_SESSION['tel'];?> </u></h2>
                
<div class="container" align="center">
  <div class="row">
 <div style="width:500px;height:150px;border:1px solid #000;" class="col-md-6">

  <h2 class="text-danger"><u><spang class="glyphicon glyphicon-bell">Mes&nbsp;alertes&nbsp;Mail</span></u><hr></h2>

  <ul>

<a href="alerte.php"><li class="text-left"> <h3 class="text-success ">Gerer mes alertes mail</h3> </li></a>
  </ul>





 </div>
          
      <div style="width:500px;height:150px;border:1px solid #000;" class="col-md-6">

        <h2 class="text-primary"><u><span class="glyphicon glyphicon-download-alt">Mes&nbsp;Recherches</span></u><hr></h2>
         <ul>

<a href="sauvegarde.php"><li class="text-left"> <h3 class="text-success">Voir les resultats de mes recherches </h3> </li></a>
  </ul>


      </div>

</div>
 </div>
<?php }else{
  header('location:index.php');
}

?>

   

   
  

 
 



   

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="dist/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>


