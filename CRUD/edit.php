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


        }
?>



<form method="POST" action="<?php $_SERVER['PHP_SELF']?>" target="_self">
    <table>
        <tr>
        <td> <input type="text" disabled name="kode" value='<?php echo "$v_kode"?>'>  </td>
        <td> <input type="hidden"  name="kode" value='<?php echo "$v_kode"?>'>  </td>
        </tr>

            <tr>
        <td> <input type="text"  name="name_product"  value='<?php echo "$v_name"?>'>  </td>
        </tr>

        <tr>
        <td> <input type="text"  value='<?php echo "$v_price"?>' name= "price">  </td>
        </tr>

        <tr>
        <td> <input type="text"  value='<?php echo "$v_quantity"?>' name=" quantity">  </td>
        </tr>

        <tr>
        <td> <textarea type="text"  value='<?php echo "$v_deskripsi"?>' name="deskripsi"> </textarea>  </td>
        </tr>

        <tr>
        <td> <input type="submit" value= "update" name="updateFinal">  </td>
        </tr>


    </table>

</form>

<?php } ?>


<?PHP 
    if(isset($_POST['updateFinal'])){
        $v_kode = $_POST["kode"];
        $v_name = $_POST["name_product"];
        $v_price = $_POST["price"];
        $v_quantity = $_POST["quantity"];
        $v_deskripsi = $_POST["deskripsi"];
        
    $updateFinal= $koneksidb->query("UPDATE produck SET name_product= '$v_name', price='$v_price', quantity= '$v_quantity', deskripsi='$v_deskripsi' WHERE kode ='$v_kode' ")

?>
        <hr/>
        data dengan <?php echo "$v_kode" ?> sudah diupdate

    <?php } ?>