<?PHP
    if (isset($_POST['hapus'])) {
        $vid=$_POST["idUser"];
    $clear = $koneksidb->query("DELETE FROM user where id_user='$vid' ");
  ?>    
  <hr />

  <h4> data dengan kode <?php echo "$vid" ?> telah di hapus </h4>

  <?php      
    
    }

?>
      