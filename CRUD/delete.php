<?PHP
    if (isset($_POST['delete'])) {
        $v_kode=$_POST["kode"];
    $hapus = $koneksidb->query("DELETE FROM produck where kode='$v_kode' ");
  ?>    
  <hr />

  <h4> data dengan kode <?php echo "$v_kode" ?> telah di hapus </h4>

  <?php      
    
    }

?>
      