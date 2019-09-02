<?php include "header.php"; ?>
<link rel="stylesheet" href="../themes/theme/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<script>
    function imgError(image){
        image.onerorr="";
        image.src="../img/ganteng.jpg";
        return true;
    }
</script>
<style>
    .zoom {
        transition: transform .2s;

    }
    .zoom:hover {
        transform: scale(5);
    }
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
   
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
            <div>
                   <?php
                        include "./CRUD/create.php"
                    ?>
                <?php
                    include "./CRUD/delete.php"
                ?>

                    <?php
                        include "./CRUD/edit.php"
                    ?>
                </div>
               
            <div id="content">

        <div class="box">
            <div class="box-header">
            <h2 class="box-title-blue">Data Barang</h2>
              <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#modal-default">
              <i class="fa fa-plus"></i>
              </button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               <table id="example1" class="table table-bordered table-striped">
               <thead>
                <tr>
                  <th>No</th>
                  <th>Kode barang</th>
                  <th>Nama barang</th>
                  <th> Harga barang</th>
                  <th>Jumlah barang</th>
                  <th> Deskripsi </th>
                  <th> Action </th>

                </tr>
                </thead>
                <tbody>
                <?php 
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
                $vgambar_product = "$hs_show[gambar_product]";
        ?>
            <tr>
                <td> <?php echo "$urut" ?> </td>
                <td>
                 <img src=' ../img/<?php echo "$vgambar_product"; ?>' class="zoom" style="max-height:25px;" onerror="imgError(this)" >                
                 <?php echo "$vkode" ?>
                 </td>

                <td> <?php echo "$vname" ?> </td>
                <td>RP. <?php echo "$vprice" ?>,- </td>
                <td> <?php echo "$vquantity" ?> </td>
                <td> <?php echo "$vdeskripsi" ?> </td>
                <td>   <form method="POST" action= "<?php $_SERVER['PHP_SELF']  ?>" target="_self" >
                <input type="hidden" name="kode" value='<?php echo "$vkode" ?>' >
                  <div class="btn-group">
                  <button  name="delete" value="HAPUS" class="btn btn-danger btn-flat" onclick="return cekHapus()"><i class="fa fa-trash"></i> </button>
                 <button data-toggle="modal" data-target="#modal-default" name="update" class="btn btn-info btn-flat">
                  <i class="fa fa-pencil"></i>
                   </button>

                  </div>  
            </form>
                </td>
            </tr>

        <?php } ?>
                
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <?php include "footer.php" ?>

  
      </div>
     
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="../themes/theme/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../themes/theme/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../themes/theme/dist/js/adminlte.min.js"></script>
<script src="../themes/theme/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../themes/theme/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
    function cekHapus(){
        return confirm('Yakin ingin dihapus');
    }
</script>

<script>
  $(function () {
    $('#example1').DataTable()
  });
</script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>
     




