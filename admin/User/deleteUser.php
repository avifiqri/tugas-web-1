<?PHP
    if (isset($_POST['hapus'])) {
        $vid=$_POST["id_user"];
    $clear = $koneksidb->query("DELETE FROM user where id_user='$vid' ");
  ?>    

      <hr />


            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i>Peringatan</h4>
               <h4> Data <?php echo "$vid" ?> telah di hapus </h4> 

              </div>



  <?php      
    
    }

?>
      