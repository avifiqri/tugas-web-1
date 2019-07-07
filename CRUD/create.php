<form method="POST" action= "<?php $_SERVER['PHP_SELF']  ?>" target="_self" >
    <table>
        <tr>
            <td> kode produk </td>
            <td>: <input type="text" name="kode" > </td>
        </tr>
        
        <tr>
            <td> nama produck </td>
            <td>: <input type="text" name="name_product" > </td>
        </tr>

        <tr>
            <td> harga produck </td>
            <td>: <input type="text" name="price" > </td>
        </tr>

        <tr>
            <td> jumlah produck </td>
            <td>: <input type="text" name="quantity" > </td>
        </tr>

        <tr>
            <td> deskripsi produck </td>
            <td>: <textarea type="text" name="deskripsi" rows= "20"> </textarea> </td>
        </tr> 
        
        <tr>
            <td>
            <input  type="submit" name="tambahdata" value="create product" >
            </td>
        </tr>

    </table>
</form>


<?PHP
    if (isset($_POST['tambahdata'])) {
        $v_kode = $_POST["kode"];
        $v_name = $_POST["name_product"];
        $v_price = $_POST["price"];
        $v_quantity = $_POST["quantity"];
        $v_deskripsi = $_POST["deskripsi"];
        $tambahdata = $koneksidb->query("INSERT INTO produck (kode,name_product,  price, quantity, deskripsi) VALUES ('$v_kode', '$v_name', '$v_price', '$v_quantity', '$v_deskripsi')")
?>
        <hr />
        data anda berhasil dibuat....
<?php } ?>


