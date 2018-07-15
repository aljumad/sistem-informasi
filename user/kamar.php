<?php
    require_once "view/header.php";

?>

    <div id="imgindex">
        <div id="imglog">
            <p><br>>>Kamar<br>&nbsp;</p>
        </div>
    </div>
    <div id="datakamar2">
    <div>
        <?php

            $sql = $pdo->query("SELECT * FROM kamar");
            while($data = $sql->fetch()) {
                $id = $data['idkamar'];
                $tipe = $data['tipe'];
                $jumlah = $data['jumlah'];
                $harga = $data['harga'];
                $gambar = $data['gambar'];

                $angka = number_format($harga,0,",",".");

                $sqly = $pdo->query("SELECT * FROM stokkamar WHERE idkamar=$id");
                while($datay = $sqly->fetch()) {
                    $stok = $datay['stok'];
        ?>
        
            <div class="kamar">
                <form method="POST" action="pemesanan?id=<?php echo $id ?>">
                <table>
                    <tr>
                        <td>
                            <center>
                                
                                <div class="idkamar">
                                    <?php echo $tipe ?>
                                </div>
                                <div class="tipekamar"><b>Rp. <?php echo $angka ?></div></b>
                                <img src="../simpangambar/<?php echo $gambar ?>" width="200px" height="150px"/>
                                <div class="tipekamar">Tersedia <?php echo $stok ?> Kamar</div>
                                
                            </center>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <center>
                                <input type="submit" name="klik" value="Pesan" style="width:70px;background-color:#000;color:white;font-weight:bold;padding:4px;border:1px solid red;">
                            </center>
                        </td>
                    </tr>
                </table>
                </form>
            </div>
            <?php
                    }
                }
            ?>
    </div>
    </div>

<?php
    require_once "view/footer.php"
?>