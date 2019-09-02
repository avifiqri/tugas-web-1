<?PHP
    if (isset($_POST['delete'])) {
        $v_kode=$_POST["kode"];
    $hapus = $koneksidb->query("DELETE FROM produck where kode='$v_kode' ");
  ?>    
  <hr />

 <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i>Peringatan</h4>
               <h4> Data <?php echo "$v_kode" ?> telah di hapus </h4> 

              </div>


  <?php      
    
    }

?>
      