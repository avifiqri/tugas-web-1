<div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-green">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"> Data Users</h4>
              </div>
              <div class="modal-body">

        <form class="form-horizontal" method="POST" action= "<?php $_SERVER['PHP_SELF']  ?>" target="_self" enctype="multipart/form-data"> 
                <div class="box-body">
                    <div class="form-group">
                        <label for="t_kode" class="col-sm-2 control-label" >Id user</label>
                        <div class="col-sm-10">
                            <input type="text" name="id_user" class="form-control" placeholder="Masukan Id user ">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="t_namaproduct" class="col-sm-2 control-label" >Nama user</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_user" class="form-control" placeholder="Masukan Nama Product">
                        </div>
                    </div>

                     <div class="form-group">
                        <label for="t_namaproduct" class="col-sm-2 control-label" > Level</label>
                        <div class="col-sm-10">
                            <select  name="level_user" class="form-control">
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="t_price" class="col-sm-2 control-label" >Password user</label>
                        <div class="col-sm-10">
                            <input type="password" name="password_user" class="form-control" placeholder="Masukan Password User">
                        </div>
                    </div>


                     <div class="form-group">
                        <label for="t_filegambar" class="col-sm-2 control-label" >Upload Gambar</label>
                        <div class="col-sm-10">
                            <input type="file" name="gambaruser" class="form-control">
                        </div>
                    </div>


                </div>

              </div>
              <div class="modal-footer bg-green">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button class="btn btn-primary pull-right" name="createUser" >Tambah Data user</button>
              </div>
        </form>

            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
<?PHP 
        if(isset($_POST['createUser'])) {
            $vid = $_POST["id_user"];
            $vname= $_POST["nama_user"];
            $vpassword= md5($_POST["password_user"]);
            $vlevel = $_POST["level_user"];

            $namafileuser = date('YmdHis') . '.jpg';
            $gambaruser ='../imguser/' . basename($namafileuser);
            if (move_uploaded_file($_FILES ['gambaruser'] ['tmp_name'], $gambaruser)) { } else { };
            $sekaranguser= date('Y-m-d H:i:s');


            


    
         $createUser = $koneksidb->query("INSERT INTO user (id_user, nama_user, password_user, level_user,gambar_user, lastedit, siapa) VALUES ('$vid', '$vname','$vpassword', '$vlevel','$namafileuser','$sekaranguser', '$userlogin'  )")
?>

<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i>berhasil</h4>
               <h4> Data <?php echo "$vid" ?> telah dibuat </h4> 

              </div>
<?php } ?>






   