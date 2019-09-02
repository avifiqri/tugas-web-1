<?php include "header.php"; ?>
            
            <div id="content">
            <?php 
                        $vkode = $_GET['id'];

                        
                        $urut = 0;
                    $produk_show = mysqli_query($koneksidb, "SELECT * FROM produck");
                    while($hs_show = mysqli_fetch_array($produk_show)) {
                        $urut ++;
        
                        $vkode = "$hs_show[kode]";
                        $vname = "$hs_show[name_product]";
                        $vprice = "$hs_show[price]";
                            $vprice = number_format($vprice, 0, ",", ".");
                        $vquantity = "$hs_show[quantity]";
                            $vquantity = number_format($vquantity, 0, ",", ".");
                        $vdeskripsi = "$hs_show[deskripsi]";
                    }
                    
                        ?>
                <div class="gambardetail">
                
                </div>

                <div class="detail-product">
                    <div class="how">
                        Detail product    
                </div>
                <table>
                        <tr>
                            <td> Kode Product </td>
                            <td>: <?php echo "$vkode"; ?> </td>
                        </tr>
                        
                        <tr>
                            <td> nama Product </td>
                            <td>: <?php echo "$vname"; ?> </td>
                        </tr>
                        <tr>   
                            <td> harga Product </td>
                            <td>: <?php echo "$vprice"; ?> </td>
                        </tr>

                            <tr>
                            <td> stok Product </td>
                            <td>: <?php echo "$vquantity"; ?> </td>
                            </tr>

                            <tr>
                            <td> deskripsi Product </td>
                            <td>: <?php echo "$vdeskripsi"; ?> </td>
                            </tr>

                    </table>                
                    </div>
                <div class="batas">
                    <hr />
                </div>
                

                <div class="comentar">
                <form method="POST" action= "<?php $_SERVER['PHP_SELF']  ?>" target="_self" >
                            <table width="100%">
                            <tr>
                                <td> Nama </td> 
                                <td> <input name="nameKomentar" style="width:100%;" placeholder="input your name"  > </td> 
                            </tr>
                            <tr>
                                <td> Email </td> 
                                <td> <input name="emailKomentar" style="width:100%;" placeholder="input your email"  > </td> 
                            </tr>
                            <tr>
                                <td> komentar </td> 
                                <td> <textarea name="komentar" style="width:100%;" placeholder="input your komentar"  > </textarea> </td> 
                            </tr>
                            <tr>
                                <td><input type="submit" name="kirimkomentar" value="kirim komentar" ></td>
                            </tr>
                            </tabel>
                            </form>
                                              
<?PHP
    if (isset($_POST['kirimkomentar'])) {
        $v_namekomentar = $_POST["nameKomentar"];
        $v_emailkomentar = $_POST["emailKomentar"];
        $v_komentar = $_POST["komentar"];
?>
        
        data anda berhasil dibuat....
        <p>nama anda: <?php echo "$v_namekomentar" ?> </p><br/>
            <p> email anda: <?php echo "$v_emailkomentar" ?> </p><br/>
            <p> komentar anda: <?php echo "$v_komentar" ?></p> <br/>


<?php } ?>
          
    </div>

                </div>
                <div style="clear:both;">
    </div>

                <div id="footer"> copy righ &copy M. Yusuf Avifiqri all right</div>
                </div>
    </body>
</html>