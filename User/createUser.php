<!-- awal buat create -->
<form method="POST" action="<?php $_SERVER['PHP_SELF']  ?>" target="_self">
    <table>
        <tr> 

            <td> id user </td>
            <td>: <input type="text" name="idUser" placeholder="input -id User"> </td>

        </tr>

        <tr> 

            <td>  nama </td>
            <td>: <input type="text" name="nama" placeholder="input -Your Name"> </td>

        </tr>

          <tr> 

            <td> password </td>
            <td>: <input type="password" name="password" placeholder="input -Your Password"> </td>

         </tr>


        <tr> 

            <td> level </td>
            <td>: <input type="text" name="level"> </td>

        </tr>

        <tr> 
        <td> <input type="submit" name="createUser" value="Buat User"> </td>
        </tr>
    </table>

</form> 

    <?PHP 
        if(isset($_POST['createUser'])) {
            $vid = $_POST["idUser"];
            $vname= $_POST["nama"];
            $vpassword= $_POST["password"];
            $vlevel = $_POST["level"];
            $createUser = $koneksidb->query("INSERT INTO user (id_user, nama_user, password_user, level_user) VALUES ('$vid', '$vname','$vpassword', '$vlevel')" )
    ?>
            <h5> data menampilkan </h5>

            
            <p>id anda: <?php echo "$vid" ?> </p><br/>
            <p>nama anda: <?php echo "$vname" ?> </p><br/>
            <p> pasword anda: <?php echo "$vpassword" ?></p> <br/>
            <p> anda sebagai:  <?php echo "$vlevel" ?>

    <?php
        }
    ?>

    <!-- akhir buat create -->