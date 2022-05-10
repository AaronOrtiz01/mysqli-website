<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php require_once("db_connect.php");?>
<?php require_once("db.php");?>
<?php require_once("workerslist.php");?>
<?php $dbname = new CreateDb("shopping6333","workerstb");?>
<!DOCTYPE html>
<html>
<head>
	<title>People</title>
	<link rel="icon" href="images/logo/service_logo.png" sizes="32x32" type="image/png">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="style/stylesheet.css">
        <link rel="stylesheet" href="style/navbar.css">

	<style>
		td {vertical-align: top; width: 50%;}
		table {margin: 5px 0;}
		.left {padding-right: 3px;}
		.right {padding-left: 3px;}
		.member-info {position: relative;}
		.member-email {position: absolute; bottom: 0; left: 0; width: 100%; margin-bottom: 15px;}
		.team {vertical-align: top;}
		.team-row {width: 100%;}
	</style>
    
</head>
    <body>

        <nav class="navbar fixed-top navbar-expand-lg ">
            <a class="navbar-brand" href="/">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"><img src="images/navbar/reorder.png"/></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                      <a class="nav-link" href="index.html">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="date.php">Find Worker to date </a>
                  <li class="nav-item">
                      <a class="nav-link" href="allservice.html">All Services</a>
                  </li>
                   <li class="nav-item">
                      <a id="people-link" class="nav-link" href="location.php">Location</a>
                      <div id="drop-down">
                           <a class="nav-link" href="location.php#Cleaing-Edinburg">Edinburg</a>
                           <a class="nav-link" href="location.php#Cleaning-Pharr">Pharr</a>
                           <a class="nav-link" href="location.php#Plumbing-Mcallen">Mcallen</a>
                        </div>
                    </li>
                  <li class="nav-item">
                      <a id="people-link" class="nav-link" href="workers.php">workers</a>
                      <div id="drop-down">
                          <a class="nav-link" href="workers.php#Cleaing-Edinburg">Cleaing - Edinburg</a>
                          <a class="nav-link" href="workers.php#Cleaning-Pharr">Cleaning - Pharr</a>
                          <a class="nav-link" href="workers.php#Cleaning-Mcallen">Cleaning - Mcallen</a>
                          <a class="nav-link" href="workers.php#Plumbing-Edinburg">Plumbing - Edinburg</a>
                          <a class="nav-link" href="workers.php#Plumbing-Pharr">Plumbing - Pharr</a>
                          <a class="nav-link" href="workers.php#Plumbing-Mcallen">Plumbing - Mcallen</a>
                          <a class="nav-link" href="workers.php#Electrical-Edinburg">Electrical - Edinburg</a>
                          <a class="nav-link" href="workers.php#Electrical-Pharr">Electrical - Pharr</a>
                          <a class="nav-link" href="workers.php#Electrical-Mcallen">Electrical-Mcallen</a>
                          <a class="nav-link" href="workers.php#Moving-Edinburg">Moving - Edinburg</a>
                          <a class="nav-link" href="workers.php#Moving-Pharr">Moving - Pharr</a>
                          <a class="nav-link" href="workers.php#Moving-Mcallen">Moving - Mcallen</a>
                      </div>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="news.html">News</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="staff.html">Staff</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signup.php">Login</a>
              </li>
            </ul>
          </div>
        </nav>
        <span id="Cleaing-Edinburg" type="hidden"></span>
        <div class="pg-title">
            <h2 class="display-4"> Cleaning - Edinburg </h2>
        </div> 

                
     <?php
        $result = $dbname->getData();
        while($row = mysqli_fetch_assoc($result)){
            if($row['service_location'] == 'edinburg' && $row['service_type'] == 'cleaning'){
            workerslist($row['worker_id'], $row['worker_name'], $row['worker_email'], $row['service_type'], $row['worker_img'], $row['appointment_date'], $row['service_location'], $row['service_quality'], $row['price'], $row['worker_active']);  
        }
    }
   ?>
   
        <span id="Plumbing-Edinburg" type="hidden"></span>
        <div class="pg-title sub-title">
            <h2 class="display-4"> Plumbing - Edinburg </h2>
        </div>

        <?php
        $result = $dbname->getData();
        while($row = mysqli_fetch_assoc($result)){
        if($row['service_location'] == 'edinburg' && $row['service_type'] == 'plumbing'){
        workerslist($row['worker_id'], $row['worker_name'], $row['worker_email'], $row['service_type'], $row['worker_img'], $row['appointment_date'], $row['service_location'], $row['service_quality'], $row['price'], $row['worker_active']);  
    }
}      
       ?>

         <span id="Electrical-Edinburg" type="hidden"></span>
        <div class="pg-title sub-title">
            <h2 class="dispay-4"> Electrical - Edinburg </h2>
        </div>

        <?php
        $result = $dbname->getData();
        while($row = mysqli_fetch_assoc($result)){
        if($row['service_location'] == 'edinburg' && $row['service_type'] == 'electrical'){
        workerslist($row['worker_id'], $row['worker_name'], $row['worker_email'], $row['service_type'], $row['worker_img'], $row['appointment_date'], $row['service_location'], $row['service_quality'], $row['price'], $row['worker_active']);  
    }
}      
       ?>


       
        <span id="Moving-Edinburg" type="hidden"></span>
        <div class="pg-title sub-title">
            <h2 class="dispay-4"> Moving - Edinburg </h2>
        </div>

        <?php
        $result = $dbname->getData();
        while($row = mysqli_fetch_assoc($result)){
        if($row['service_location'] == 'edinburg' && $row['service_type'] == 'moving'){
        workerslist($row['worker_id'], $row['worker_name'], $row['worker_email'], $row['service_type'], $row['worker_img'], $row['appointment_date'], $row['service_location'], $row['service_quality'], $row['price'], $row['worker_active']);  
    }
}      
       ?>


        <span id="Cleaning-Pharr" type="hidden"></span>
        <div class="pg-title sub-title" style="margin-top: -60px;">
            <h2 class="display-4"> Cleaning - Pharr </h2>
        </div>

       <?php
        $result = $dbname->getData();
        while($row = mysqli_fetch_assoc($result)){
        if($row['service_location'] == 'pharr' && $row['service_type'] == 'cleaning'){
        workerslist($row['worker_id'], $row['worker_name'], $row['worker_email'], $row['service_type'], $row['worker_img'], $row['appointment_date'], $row['service_location'], $row['service_quality'], $row['price'], $row['worker_active']);  
    }
}      
       ?>


     

        <span id="Plumbing-Pharr" type="hidden"></span>
        <div class="pg-title sub-title">
            <h2 class="dispay-4"> Plumbing - Pharr </h2>
        </div>
        <?php
        $result = $dbname->getData();
        while($row = mysqli_fetch_assoc($result)){
        if($row['service_location'] == 'pharr' && $row['service_type'] == 'plumbing'){
        workerslist($row['worker_id'], $row['worker_name'], $row['worker_email'], $row['service_type'], $row['worker_img'], $row['appointment_date'], $row['service_location'], $row['service_quality'], $row['price'], $row['worker_active']);  
    }
}      
       ?>

       

        <span id="Electrical-Pharr" type="hidden"></span>
        <div class="pg-title sub-title">
            <h2 class="dispay-4"> Electrical - Pharr </h2>
        </div>

        <?php
        $result = $dbname->getData();
        while($row = mysqli_fetch_assoc($result)){
        if($row['service_location'] == 'pharr' && $row['service_type'] == 'electrical'){
        workerslist($row['worker_id'], $row['worker_name'], $row['worker_email'], $row['service_type'], $row['worker_img'], $row['appointment_date'], $row['service_location'], $row['service_quality'], $row['price'], $row['worker_active']);  
    }
}      
       ?>

       
        <span id="Moving-Pharr" type="hidden"></span>
        <div class="pg-title sub-title">
            <h2 class="dispay-4"> Moving - Pharr </h2>
        </div>

        <?php
        $result = $dbname->getData();
        while($row = mysqli_fetch_assoc($result)){
        if($row['service_location'] == 'pharr' && $row['service_type'] == 'moving'){
        workerslist($row['worker_id'], $row['worker_name'], $row['worker_email'], $row['service_type'], $row['worker_img'], $row['appointment_date'], $row['service_location'], $row['service_quality'], $row['price'], $row['worker_active']);  
    }
}      
       ?>




            <span id="Plumbing-Mcallen" type="hidden"></span>
        <div class="pg-title sub-title">
            <h2 class="dispay-4"> Plumbing - Mc allen </h2>
        </div>

        <?php
        $result = $dbname->getData();
        while($row = mysqli_fetch_assoc($result)){
        if($row['service_location'] == 'mcallen' && $row['service_type'] == 'plumbing'){
        workerslist($row['worker_id'], $row['worker_name'], $row['worker_email'], $row['service_type'], $row['worker_img'], $row['appointment_date'], $row['service_location'], $row['service_quality'], $row['price'], $row['worker_active']);  
    }
}      
       ?>


        <span id="Electrical-Mcallen" type="hidden"></span>
        <div class="pg-title sub-title">
            <h2 class="dispay-4"> Electrical - Mc allen </h2>
        </div>

        <?php
        $result = $dbname->getData();
        while($row = mysqli_fetch_assoc($result)){
        if($row['service_location'] == 'mcallen' && $row['service_type'] == 'electrical'){
        workerslist($row['worker_id'], $row['worker_name'], $row['worker_email'], $row['service_type'], $row['worker_img'], $row['appointment_date'], $row['service_location'], $row['service_quality'], $row['price'], $row['worker_active']);  
    }
}      
       ?>

           <span id="Moving-Mcallen" type="hidden"></span>
        <div class="pg-title sub-title">
            <h2 class="dispay-4"> Moving - Mcallen </h2>
        </div>

        <?php
        $result = $dbname->getData();
        while($row = mysqli_fetch_assoc($result)){
        if($row['service_location'] == 'mcallen' && $row['service_type'] == 'moving'){
        workerslist($row['worker_id'], $row['worker_name'], $row['worker_email'], $row['service_type'], $row['worker_img'], $row['appointment_date'], $row['service_location'], $row['service_quality'], $row['price'], $row['worker_active']);  
    }
}      
       ?>

        <div class="info">


  
     
            <div class="nav-contact-us">
              <h4> <abbr title="attribute">Contact Us</abbr> </h4>
              <img id="utrgv-logo" src="images/logo/service_logo.png">
              <p>DataBase@UTRGV</p>
              <p>2202 SanRodrigo, Edinburg, TX</p>
              <p>Email: <a href="junseong.park01@utrgv.edu" target="_top">DataBase@utrgv.edu</a></p>    
              <p>Phone: 956-324-3333</p>           
            </div>
  
        </div>
    

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script type="text/javascript" src="static/action.js?01"></script>
        <script type="text/javascript" src="static/search.js?123"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script>
            AOS.init();
        </script>

    </body>
</html>
