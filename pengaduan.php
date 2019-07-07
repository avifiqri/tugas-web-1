<?php include "header.php"; ?>
               
            <div id="content">
                <center> 
                <h4 style="text-transform: uppercase;"> terima kasih telah memberikan pengaduan </h4>
                </center>
                <hr />
                <br />
                <?php
                $vname=$_POST["name"];
                $vage=$_POST["age"];
                $vjeniskelamin=$_POST["jeniskelamin"];
                $vemail=$_POST["email"];
                $vhp=$_POST["hp"];
                $vcatatan=$_POST["catatan"];
                ?>

                    <h4> data ditampilkan berikut ini </h4>
                    name: <?php echo "$vname" ?>

            </div>
        <div id="footer"> copy righ &copy M. Yusuf Avifiqri all right</div>
        </div>
    
    </body>
</html>