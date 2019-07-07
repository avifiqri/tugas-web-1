<?php include "header.php"; ?>
    
            <div id="content">
                    <center>
                    <h2 style="text-transform: uppercase;"> form pengaduan </h2>
                    </center>
                <hr />
  <!-- method ada 3
    1. POST;
    2. GET;
    3. REQUEST; -->

        <!-- target ada tiga pilihan
            1. <form method="POST" action="pengaduan.php" target="_blank">
            2. <form method="POST" action="pengaduan.php" target="_self"> -->

                <!-- jika ingin melakukan single page maka kita menggunakan action
                action=" $SERVER['PHP_SELF'] " -->

                <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>" target="_self">
                    <table>
                        <tr>
                            <td>name</td>
                            <td>: <input type="text" name="name" placeholder="Your -Name" ></td>
                        </tr>
                            <br />

                        <tr>
                            <td>age</td>
                            <td>: <input type="text" name="age" placeholder="Your -Age" ></td>
                        </tr>
                        <br />

                        <tr>
                            <td>jenis kelamin</td>
                            <td>:
                                <select name= "jeniskelamin">
                                    <option>Laki-Laki </option>
                                    <option>Perempuan </option>
                                </select>
                             </td>
                        </tr>
                        <br />


                        <tr>
                            <td>email</td>
                            <td>: <input type="text" name="email" placeholder="Your -Email" ></td>

                        </tr>
                        <br />


                        <tr>
                            <td>nomor hp</td>
                            <td>: <input type="text" name="hp" placeholder="Your -Phone"></td>

                        </tr>
                        <br />


                        <tr>
                            <td>catatan pengaduan</td>
                            <td>:
                             <textarea name="catatan" placeholder="Note: -Pengaduan" rows="20" > </textarea> 
                            </td>
                        </tr>
                        <br />

                        <tr>
                            <td> <input type="submit" name="submit" value="kirim "> </td>
                        </tr>
                    </table>

                </form>
                        <?PHP
                            if(isset($_POST['submit']))
                            {
                        ?>

            <?php
                $vname=$_POST["name"];
                    $vage=$_POST["age"];
                        $vjeniskelamin=$_POST["jeniskelamin"];
                            $vemail=$_POST["email"];
                                $vhp=$_POST["hp"];
                                    $vcatatan=$_POST["catatan"];
            ?>
                                    <hr />
                                        <h1> Terima kasih telah mengirimkan pengaduan </h1>
                                <hr />
                <h4> data anda ditampilkan berikut ini </h4>
                    name: <?php echo "$vname" ?><br />
                        age: <?php echo "$vage" ?><br />
                            jeni kelamin: <?php echo "$vjeniskelamin" ?><br />
                                email: <?php echo "$vemail" ?> <br />
                                    nomor hp: <?php echo "$vhp" ?> <br />
                                        catatan: <?php echo "$vcatatan" ?>

            <?php 
                            }
            ?>
            </div>

        <div id="footer"> copy righ &copy M. Yusuf Avifiqri all right</div>
        </div>
    
    </body>
</html>