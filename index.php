<?php
include_once('user/includes/dbconnection.php');
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<title>Pendaftaran</title>
<link rel="stylesheet" href="css/style.css"/>
<!--fav-icon-->
<link rel="shortcut icon" href="images/favicon.png"/>

</head>

<body>
    
    <section class="main" style="background-image: url(images/hero-bg.png); height:100vh;">
        
        <nav>
            <input class="menu-btn" type="checkbox" id="menu-btn"/>
            <label class="menu-icon" for="menu-btn">
                <span class="nav-icon"></span>
            </label>
            <ul class="menu" style="border-radius: 5px;">
                <li><a class="active" href="user/signup.php" onclick="document.getElementById('id01').style.display='block'" style="width:auto; border-radius: 5px; cursor: pointer;">Sign Up</a></li>
                <li><a class="active" href="user/login.php" onclick="document.getElementById('id01').style.display='block'" style="width:auto; border-radius: 5px; cursor: pointer;">sign in</a></li>
            </ul>
        </nav>
       
    


        <!--main-content-->
        <div class="home-content">
            
            <!--text-->
            <div class="home-text" >
                
                <h3 style="color: white; letter-spacing: 3px;">Selamat Datang</h3>
                <h1 style="color: white;">Di Pendaftaran Pegawai Baru</h1>
                <p style="color: white;">Kementrian Kelautan dan Perikanan</p>
            <!--login-btn-->
            <a href="user/signup.php" class="main-login" style="border-radius: 5px;">Daftar</a>
            </div>
            <!--img-->
            <div class="home-img" style="width: 500px;">
                <img src="images/KKP.png" width="500px" style="text-shadow: 20px 22px;"/>
               
                     

            </div>
            
        </div>
        
        
    </section>
   <!--LATEST NOTIFICATION START -->
     <section class="notification">

                         <hr>
<marquee behavior="alternate" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();">
    <?php $query=mysqli_query($con,"select * from tblnotice");
while ($row=mysqli_fetch_array($query)) {
?>

    <a href="notice-details.php?nid=<?php echo $row['ID'];?>" target="_blank"><?php echo $row['Title'];?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
    
    <?php } ?>
    
    
</marquee>

        
    </section>
    <hr>
    <!--LATEST NOTIFICATION END-->
</body>

</html>
