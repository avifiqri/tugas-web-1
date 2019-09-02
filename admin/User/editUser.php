
<?PHP
    if (isset($_POST['edit'])) {
        $vid = $_POST['id_user'];
        $urut = 0;
        $showEditUser = mysqli_query($koneksidb, "SELECT * FROM user where id_user= '$vid'");
        while($hs_showEditUser = mysqli_fetch_array($showEditUser)) {
            $urut++;
            $vname = "$hs_showEditUser[nama_user]";
            $vpassword ="$hs_showEditUser[password_user]";
            $vlevel = "$hs_showEditUser[level_user]";


        }
?>

            <div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title"> Edit data User</h3>   
    </div>
    <form class="form-horizontal" method="POST" action= "<?php $_SERVER['PHP_SELF']  ?>" target="_self" enctype="multipart/form-data"> 
                <div class="box-body">
                    <div class="form-group">
                        <label for="t_kode" class="col-sm-2 control-label" >Id user</label>
                        <div class="col-sm-10">
                         <input type="text" disabled class="form-control" name="id_user" value='<?php echo "$vid"?>'>  
                        <input type="hidden" class="form-control" name="id_user" value='<?php echo "$vid"?>'>  
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="t_namaproduct" class="col-sm-2 control-label" >Nama user</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_user" class="form-control"  value='<?php echo "$vname"?>' >
                        </div>
                    </div>

                     <div class="form-group">
                        <label for="t_namaproduct" class="col-sm-2 control-label" > Level</label>
                        <div class="col-sm-10">
                            <select  name="level_user" class="form-control">
                            <option value='admin <?php if($vlevel=="admin") {echo "selected";}?>'>admin </option>
                            <option value='user <?php if($vlevel=="user") {echo "selected";}?>'>user </option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="t_price" class="col-sm-2 control-label" >Password user</label>
                        <div class="col-sm-10">
                            <input type="text" name="password_user" class="form-control" value='<?php echo "$vpassword"?>' >
                        </div>
                    </div>


                     <div class="form-group">
                        <label for="t_filegambar" class="col-sm-2 control-label" >Upload Gambar</label>
                        <div class="col-sm-10">
                            <input type="file" name="filegambaruser" class="form-control">
                        </div>
                    </div>
                    <button class="btn btn-primary pull-right" name="updateFinal" >Update user</button>


                </div>

              </div>
        </form>
</div>



<?php } ?>
<?PHP 
    if(isset($_POST['updateFinal'])){
        $vid = $_POST["id_user"];
        $vname = $_POST["nama_user"];
        $vpassword =md5($_POST["password_user"]);
        $vlevel = $_POST["level_user"];
        
    $updateFinal= $koneksidb->query("UPDATE user SET nama_user='$vname', password_user= '$vpassword', level_user= '$vlevel'  WHERE id_user ='$vid' ")

?>
        <hr/>
        data dengan <?php echo "$vid" ?> sudah diupdate

    <?php } ?>










