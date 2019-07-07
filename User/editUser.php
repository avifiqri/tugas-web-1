<?PHP
    if (isset($_POST['edit'])) {
        $vid = $_POST["idUser"];
        // $v_name = $_POST["name"];
        // $v_price = $_POST["price"];
        // $v_quantity = $_POST["quantity"];
        // $v_deskripsi = $_POST["deskripsi"];
        $urut = 0;
        $showEditUser = mysqli_query($koneksidb, "SELECT * FROM user where id_user= '$vid'");
        while($hs_showEditUser = mysqli_fetch_array($showEditUser)) {
            $urut++;
            $vname = "$hs_showEditUser[nama_user]";
            $vpassword ="$hs_showEditUser[password_user]";
            $vlevel = "$hs_showEditUser[level_user]";


        }
?>



<form method="POST" action="<?php $_SERVER['PHP_SELF']?>" target="_self">
    <table>
        <tr>
        <td> <input type="text" disabled name="idUser" value='<?php echo "$vid"?>'>  </td>
        <td> <input type="hidden"  name="idUser" value='<?php echo "$vid"?>'>  </td>
        </tr>

            <tr>
        <td> <input type="text"  name="nama"  value='<?php echo "$vname"?>'>  </td>
        </tr>

        <tr>
        <td> <input type="text"  value='<?php echo "$vpassword"?>' name= "password">  </td>
        </tr>

        <tr>
        <td> <input type="text"  value='<?php echo "$vlevel"?>' name="level">  </td>
        </tr>

        <tr>
        <td> <input type="submit" value= "update" name="updateFinal">  </td>
        </tr>


    </table>

</form>

<?php } ?>


<?PHP 
    if(isset($_POST['updateFinal'])){
        $vid = $_POST["idUser"];
        $vname = $_POST["nama"];
        $vpassword = $_POST["password"];
        $vlevel = $_POST["level"];
        
    $updateFinal= $koneksidb->query("UPDATE user SET nama_user='$vname', password_user= '$vpassword', level_user= '$vlevel'  WHERE id_user ='$vid' ")

?>
        <hr/>
        data dengan <?php echo "$vid" ?> sudah diupdate

    <?php } ?>