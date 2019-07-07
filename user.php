<?php include "header.php"; ?>
               
<div id="content"> 
<?php include "User/deleteUser.php"?>

<?php include "User/createUser.php"?>
<?php include "User/editUser.php"?>

    <!-- menampilkan data dari database -->


     <table style="border: 2px solid black;">
     
            <tr>
                <td>No </td>
                <td>id user</td>
                <td>Nama user</td>
                <td>password user</td>
                <td>level user</td>
            </tr>
<?php 
    $urut=0;
    $user_show= mysqli_query($koneksidb, "SELECT * FROM user");
    while($hs_show = mysqli_fetch_array($user_show)) {
        $urut ++;
        $vid = "$hs_show[id_user]";
        $vname = "$hs_show[nama_user]";
        $vpassword = "$hs_show[password_user]";
        $vlevel = "$hs_show[level_user]";

?>
    <form method="POST" action= "<?php $_SERVER['PHP_SELF']  ?>" target="_self" >

        <tr>
            <td> <?php echo "$urut" ?> </td>
        

        
            <td> <?php echo "$vid" ?>
            <input type="hidden" name="idUser" value='<?php echo "$vid" ?>' >

            </td>
        

        
            <td> <?php echo "$vname" ?> </td>
        

        
            <td> <?php echo "$vpassword" ?> </td>
        

        
            <td> <?php echo "$vlevel" ?> </td>
        </tr>
        <td> <input type="submit" name="hapus" value="HAPUS"> </td>
        <td> <input type="submit" name="edit" value="Update"> </td>
        </form>

<?php
    }
?>


    </table>

    
</div>
    <div id="footer"> copy righ &copy M. Yusuf Avifiqri all right</div>
</div>

</body>
</html>