<?php include_once "koneksi.php" ?>

<html>
<head>
        <title>Tugas 1</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
            <div class="menu">
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="profil.php">Profil</a></li>
                        <li><a href="product.php">Store</a></li>
                        <li><a href="follow.php">Contact us</a></li>
                        <li><a href="user.php"> User </a></li>
        
                    </ul>
        
                </div> -->

                <!-- <hr />

  <!-- <div class="container purple topBotomBordersIn">
  <a>HOME</a>
  <a>ARTICLES</a>
  <a>PORTFOLIO</a>
  <a>ABOUT</a>
  <a>CONTACT</a>
</div> -->

                <div id="header">
            <div class="logo"> LOGO </div>
            <div class="iklan"><marquee> IKLAN </marquee></div>

        </div>
        

        <div id="sidebar">
                     <!-- awal login -->
                    <div id="title-sidebar">
                        <h5> login</h5>
                    </div>
                    <div id="content-sidebar">
                    <form method="POST" action="<?php $_SERVER['PHP_SELF']  ?>" target="_self" >
                        <tr>
                            <td><input name="username" type="text" placeholder="input user"></td>
                        </tr>
                        <tr>
                            <td><input name="password" type="password" placeholder="input password"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="submitLogin"></td>
                        </tr>

                    </form>
                        <?PHP
                            if(isset($_POST['submitLogin'])){
                                $vid =$_POST['username'];
                                $vpassword = $_POST['password'];

                                session_set_cookie_params('3600');
                                if(!isset($_SESSION)){
                                    session_start();
                                }
                                    $cekuser = mysqli_query($koneksidb, "SELECT * FROM user WHERE id_user = '$vid' and password_user = '$vpassword' ");
                                    $ada = mysqli_fetch_row($cekuser);
                                    if($ada){
                                        $_SESSION['userlogin']= $vid;
                                        $_SESSION['namelogin']= $ada[1];
                                        $_SESSION['levellogin']= $ada[3];
                                        header("location: admin/home.php");
                                        exit;
                                    }
                                    else {
                                        echo "password salah";
                                    }
                                
                        ?>
                                
                            <?php } ?>
                            <!-- akhir login -->
                    </div>
                    <div id="title-sidebar">
                            <h5> judul side bar</h5>
                        </div>
                        <div id="content-sidebar">
                            <p>ini adalah side bar ini adalah side bar ini adalah side bar ini adalah side bar ini adalah side bar ini adalah side bar ini adalah side bar ini adalah side bar ini adalah side bar ini adalah side bar ini adalah side bar ini adalah side bar ini adalah side bar ini adalah side bar </p>
                        </div>
                        <div id="title-sidebar">
                                <h5> judul side bar</h5>
                            </div>
                            <div id="content-sidebar">
                                <p>ini adalah side bar ini adalah side bar ini adalah side bar ini adalah side bar ini adalah side bar ini adalah side bar ini adalah side bar ini adalah side bar ini adalah side bar ini adalah side bar ini adalah side bar ini adalah side bar ini adalah side bar ini adalah side bar </p>
                            </div>
                            <div id="title-sidebar">
                                    <h5> judul side bar</h5>
                                </div>
                                <div id="content-sidebar">
                                    <p>ini adalah side bar ini adalah side bar ini adalah side bar ini adalah side bar ini adalah side bar ini adalah side bar ini adalah side bar ini adalah side bar ini adalah side bar ini adalah side bar ini adalah side bar ini adalah side bar ini adalah side bar ini adalah side bar </p>
                                </div>
            </div>

