<?php include_once "koneksi.php" ?>
         
         <!-- awal login -->
                        <h5> login</h5>
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
                                $vpassword=$_POST['password'];

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

                                        if($_SESSION['levellogin']=="admin"){
                                            header("location: admin/home.php");    
                                        } else {
                                            header("location: home.php");
                                        }
                                        
                                            exit;
                                        
                                    }
                                    else {
                                        echo "password salah";
                                    }
                                
                        ?>
                                
                            <?php } ?>
                            <!-- akhir login -->

                            