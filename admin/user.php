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
            

               
<div id="content"> 
<?php include "./User/deleteUser.php"?>
<?php include "./User/createUser.php"?>
<?php include "./User/editUser.php"?>
               
            <div id="content">

        <div class="box">
            <div class="box-header">
            <h2 class="box-title-blue">Data User</h2>
              <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#modal-default">
              <i class="fa fa-plus"></i>
              </button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               <table id="example1" class="table table-bordered table-striped">
               <thead>
                <tr>
                    
                <th>No </th>
                <th>id user</th>
                <th>Nama user</th>
                <th>password user</th>
                <th>level user</th>
                  <th> Action </th>

                </tr>
                </thead>
                <tbody>
         <?php 
    $urut=0;
    $user_show= mysqli_query($koneksidb, "SELECT * FROM user");
    while($hs_show = mysqli_fetch_array($user_show)) {
        $urut ++;
        $vid = "$hs_show[id_user]";
        $vname = "$hs_show[nama_user]";
        $vpassword = "$hs_show[password_user]";
        $vlevel = "$hs_show[level_user]";
        $gambaruser = "$hs_show[gambar_user]";


        ?>
            <tr>
                <td> <?php echo "$urut" ?> </td>
                <td>
                 <img src=' ../imgUser/<?php echo "$gambaruser"; ?>' class="zoom" style="max-height:25px;" onerror="imgError(this)" >                
                 <?php echo "$vid" ?>
                 </td>
            <td> <?php echo "$vname" ?> </td>
            <td> <?php echo "$vpassword" ?> </td>
            <td> <?php echo "$vlevel" ?> </td>
            <td>   <form method="POST" action= "<?php $_SERVER['PHP_SELF']  ?>" target="_self" >
                <input type="hidden" name="id_user" value='<?php echo "$vid" ?>' >
                  <div class="btn-group">
                  <button  name="hapus" value="HAPUS" class="btn btn-danger btn-flat" onclick="return cekHapus()"><i class="fa fa-trash"></i> </button>
                 <button  name="edit" value="Update" class="btn btn-info btn-flat"> <i class="fa fa-pencil"></i> </button>

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
     












