<?php include "header.php"; ?>
            <div>
                <?php
                    include "CRUD/delete.php"
                ?>
                   <?php
                        include "CRUD/create.php"
                    ?>

                    <?php
                        include "CRUD/edit.php"
                    ?>
                </div>
               
            <div id="content">

    <table style="border: 2px solid black;">
            <tr>
                <td>No </td>
                <td>Kode Barang</td>
                <td>Nama Barang</td>
                <td>Harga Barang</td>
                <td>Jumlah Barang</td>
                <td>Deskripsi</td>
            </tr>
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
        ?>
        <form method="POST" action= "<?php $_SERVER['PHP_SELF']  ?>" target="_self" >
            <tr>
                <td> <?php echo "$urut" ?> </td>
                <td> <?php echo "$vkode" ?>
                    <input type="hidden" name="kode" value='<?php echo "$vkode" ?>' >
                 </td>

                <td> <?php echo "$vname" ?> </td>
                <td>RP. <?php echo "$vprice" ?>,- </td>
                <td> <?php echo "$vquantity" ?> </td>
                <td> <?php echo "$vdeskripsi" ?> </td>
                <td> <input type="submit" name="delete" value="HAPUS"> </td>
                <td> <input type="submit" name="update" value="Update"> </td>
            </tr>
            </form>
                


        <?php } ?>

    </table>

            </div>
              
                <div id="footer"> copy righ &copy M. Yusuf Avifiqri all right</div>
        </div>
    
    </body>
</html>