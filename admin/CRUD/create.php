<div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-green">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data</h4>
              </div>
              <div class="modal-body">

         <form class="form-horizontal" method="POST" action= "<?php $_SERVER['PHP_SELF']  ?>" target="_self" enctype="multipart/form-data"> 
                <div class="box-body">
                    <div class="form-group">
                        <label for="t_kode" class="col-sm-2 control-label" >Kode Produck</label>
                        <div class="col-sm-10">
                            <input type="text" name="kode" class="form-control" placeholder="Masukan Kode Product">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="t_namaproduct" class="col-sm-2 control-label" >Nama Produck</label>
                        <div class="col-sm-10">
                            <input type="text" name="name_product" class="form-control" placeholder="Masukan Nama Product">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="t_price" class="col-sm-2 control-label" >Harga Produck</label>
                        <div class="col-sm-10">
                            <input type="text" name="price" class="form-control" placeholder="Masukan Harga Product">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="t_quantity" class="col-sm-2 control-label" >jumlah Produck</label>
                        <div class="col-sm-10">
                            <input type="text" name="quantity" class="form-control" placeholder="Masukan Jumlah Product">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="t_deskripsi" class="col-sm-2 control-label" >Deskripsi Produck</label>
                        <div class="col-sm-10">
                            <textarea name="deskripsi" class="form-control" rows="10"></textarea>
                        </div>
                    </div>

                     <div class="form-group">
                        <label for="t_filegambar" class="col-sm-2 control-label" >Upload Gambar</label>
                        <div class="col-sm-10">
                            <input type="file" name="filegambar" class="form-control">
                        </div>
                    </div>
                </div>

              </div>
              <div class="modal-footer bg-green">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button class="btn btn-primary pull-right" name="tambahdata" >Tambah Data</button>
              </div>
       </form>

            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
<?PHP
    if (isset($_POST['tambahdata'])) {
        $v_kode = $_POST["kode"];
        $v_name = $_POST["name_product"];
        $v_price = $_POST["price"];
        $v_quantity = $_POST["quantity"];
        $v_deskripsi = $_POST["deskripsi"];
        
        $namafile = date('YmdHis') . '.jpg';
        $gambar = '../img/' . basename($namafile);
        if (move_uploaded_file($_FILES ['filegambar'] ['tmp_name'], $gambar)) { } else { }
         $sekarang= date('Y-m-d H:i:s');


        $tambahdata = $koneksidb->query("INSERT INTO produck (kode, name_product, price, quantity, deskripsi, gambar_product, lastupdate, lastsiapa) 
        VALUES ('$v_kode', '$v_name', '$v_price', '$v_quantity', '$v_deskripsi', '$namafile', '$sekarang', '$userlogin' )")
?>

<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i>berhasil</h4>
               <h4> Data <?php echo "$v_kode" ?> telah dibuat </h4> 

              </div>
<?php } ?>


