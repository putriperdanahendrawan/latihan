<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Array</title>
</head>
<body>
    <fieldset>
        <legend>Input Array</legend>
        <form action=" " method ="post">
            <table>
                <tr>
                    <th>Masukan Jumblah Data</th>
                    <td>: <input type="number" name="jumblah"></td>
                </tr>
                <tr>
                    <th>
                    </th>
                    <td>
                        <button type = "submit" name = "simpan"> Simpan </button>
                        <button type = "reset">Reset</button>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
    <?php
    if(isset($_POST['simpan']))
    {
        $row = $_POST['jumblah'];
        ?>
    <fieldset>
        <legend>Input Data Siswa</legend>
        <table>
            <form action="proses.php" method = "post">
                <?php
                for($i = 1; $i <= $row; $i++)
                {
                    ?>
                    <tr>
                        <tr>
                        <th colspan = "2">Data Ke-<?php echo $i; ?></th>
                        <td>Nama</td>
                        <td><input type="text" name= "nama[]"></td>
                        </tr>
                    </tr>
                    <tr>
                    <th colspan = "2"></th>
                        <td>Asal Sekolah</td>
                        <td><input type="text" name= "asalsekolah[]"></td>
                        </tr>
                    </tr>
                    <tr>
                    <th colspan = "2"></th>
                        <td>Nilai Bahasa Indonesia</td>
                        <td><input type="number" name= "indonesia[]" max="100"></td>
                        </tr>
                    </tr>
                    <th colspan = "2"></th>
                        <td>Nilai Bahasa Inggris</td>
                        <td><input type="number" name= "inggris[]" max= "100"></td>
                        </tr>
                    </tr>
                    <th colspan = "2"></th>
                        <td>Nilai Matematika</td>
                        <td><input type="number" name= "matematika[]" max = "100"></td>
                        </tr>
                    </tr>
                    <th colspan = "2"></th>
                        <td>Nilai Ipa</td>
                        <td><input type="number" name= "ipa[]" max = "100"></td>
                        </tr>
                    </tr>
                <?php
                }
                ?>
                <tr>
                    <th></th>
                    <td><button type= "submit" name = "save">Simpan</button></td>
                </tr>
            </form>
        </table>
    </fieldset>
    <?php
    }
    ?>
</body>
</html>