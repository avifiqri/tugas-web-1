<?php include_once "../koneksi.php" ?>
<?php
    session_set_cookie_params('3600');
    if(!isset($_SESSION))
    {
        session_start();
    }
        $userlogin= $_SESSION['userlogin'];
        $namelogin= $_SESSION['namelogin'];
        $levellogin= $_SESSION['levellogin'];

        if(!( ($userlogin) && ($levellogin) ))
        {
            head("location: ../home.php");
        }

    

?>
<html>
<head>
        <title>Tugas 1</title>
        <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <div class="container">
            <div class="menu">
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="logout.php">logout</a></li>
        
                    </ul>
        
                </div> 

             
                <div id="header">
            <div class="logo"> LOGO </div>
            <div class="iklan"><marquee> IKLAN </marquee></div>

        </div>
        

        <div id="sidebar">
                   
                
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

