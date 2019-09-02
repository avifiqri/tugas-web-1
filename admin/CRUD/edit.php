<?PHP
    if (isset($_POST['update'])) {
        $v_kode = $_POST["kode"];
        // $v_name = $_POST["name"];
        // $v_price = $_POST["price"];
        // $v_quantity = $_POST["quantity"];
        // $v_deskripsi = $_POST["deskripsi"];
        $urut = 0;
        $showEdit = mysqli_query($koneksidb, "SELECT * FROM produck where kode= '$v_kode'");
        while($hs_showEdit = mysqli_fetch_array($showEdit)) {
            $urut++;
            $v_name = "$hs_showEdit[name_product]";
            $v_price = "$hs_showEdit[price]";
            $v_quantity ="$hs_showEdit[quantity]";
            $v_deskripsi = "$hs_showEdit[deskripsi]";
            $gambar_product = "$hs_showEdit[gambar_product]";
    


        }
?>

            <div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title"> Edit data</h3>   
    </div>
            <form class="form-horizontal" method="POST" action= "<?php $_SERVER['PHP_SELF']  ?>" target="_self" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="form-group">
                        <label for="t_kode" class="col-sm-2 control-label" >Kode Produck</label>
                        <div class="col-sm-10">

                        <input type="text" disabled name="kode"class="form-control" value='<?php echo "$v_kode"?>'>  
                        <input type="hidden"  name="kode" value='<?php echo "$v_kode"?>'>  

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="t_namaproduct" class="col-sm-2 control-label" >Nama Produck</label>
                        <div class="col-sm-10">
                            <input type="text" name="name_product" class="form-control" value='<?php echo "$v_name"?>' >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="t_price" class="col-sm-2 control-label" >Harga Produck</label>
                        <div class="col-sm-10">
                            <input type="text" name="price" class="form-control"  value='<?php echo "$v_price"?>'>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="t_quantity" class="col-sm-2 control-label" >jumlah Produck</label>
                        <div class="col-sm-10">
                            <input type="text" name="quantity" class="form-control" value='<?php echo "$v_quantity"?>'>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="t_deskripsi" class="col-sm-2 control-label"  >Deskripsi Produck</label>
                        <div class="col-sm-10">
                            <textarea name="deskripsi" class="form-control" rows="10" value='<?php echo "$v_deskripsi"?>'></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="t_filegambar" class="col-sm-2 control-label" >Upload Gambar</label>
                        <div class="col-sm-10">
                            <input type="file" name="filegambaredit" class="form-control" value='<?php echo "$gambar_product" ?>'>
                        </div>
                    </div>

                        <button class="btn btn-info pull-right" name="updateFinal" >Update</button>

                </div>
            </form>
</div>



<?php } ?>


<?PHP 
    if(isset($_POST['updateFinal'])){
        $v_kode = $_POST["kode"];
        $v_name = $_POST["name_product"];
        $v_price = $_POST["price"];
        $v_quantity = $_POST["quantity"];
        $v_deskripsi = $_POST["deskripsi"];
        $namafileedit = date('YmdHis').'.jpg';
        $gambaredit = '../imgEdit/'.basename($namafileedit);
        if (move_uploaded_file($_FILES['filegambaredit'] ['tmp_name'], $gambaredit)) { } else { }
         $sekarangedit= date('Y-m-d H:i:s');

        
    $updateFinal= $koneksidb->query("UPDATE produck SET name_product= '$v_name', price='$v_price', quantity= '$v_quantity', deskripsi='$v_deskripsi', gambar_product='$namafileedit', lastupdate='$sekarangedit', lastsiapa='$userlogin' WHERE kode ='$v_kode' ")

    ?>
        <hr/>
        data dengan <?php echo "$v_kode" ?> sudah diupdate

    <?php } ?>