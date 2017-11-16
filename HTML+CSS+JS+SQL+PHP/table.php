<?php
    require_once('dbconnect.php');
    $sql = "SELECT * FROM tech";
    $result = $conn->query($sql);
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>
    <body class="table-background">
        <h1 class="table-header-text">Tabel Pengguna Teknologi</h1>
        <table id="tabelData" class="table" border="1">
            <tr class="table-header">
                <th rowspan="2">Nama</th>
                <th rowspan="2">Email</th>
                <th rowspan="2">Tanggal Lahir</th>
                <th rowspan="2">Jenis Kelamin</th>
                <th colspan="4">Teknologi Yang Digunakan</th>
                <th rowspan="2">Pengalaman</th>
                <th rowspan="2"></th>
                <tr class="table-header-2">
                    <td>Google Cloud</td>
                    <td>Microsoft Azure</td>
                    <td>Amazone Web Service</td>
                    <td>IBM Bluemix</td>
                </tr>
            </tr>
            <?php 
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $used_tech =$row["used_tech"];
                        $used_techArray = explode(",",$used_tech);
                        ?>
                    
                    <tr class="table-data">
                    <td><?=$row["name"]?></td>
                    <td><?=$row["email"]?></td>
                    <td><?=$row["birthday"]?></td>
                    <td><?= ($row["sex"]==1?'Pria': 'Wanita')?></td>
                    <td><?=(in_array("google",$used_techArray)?"YA":"TIDAK")?></td>
                    <td><?=(in_array("microsoft",$used_techArray)?"YA":"TIDAK")?></td>
                    <td><?=(in_array("aws",$used_techArray)?"YA":"TIDAK")?></td>
                    <td><?=(in_array("ibm",$used_techArray)?"YA":"TIDAK")?></td>
                    <td><?=$row["experience"]?></td>
                    <td><input class="deleteBtn" type="button" value="Hapus" onclick="hapusData(<?=$row["id"]?>)"></td>
                </tr>
            <?php
            }
        }
        ?>
            
        </table>
    </body>
    </html>
    <script>
        function hapusData(id) {
            var pathparts = location.pathname.split('/');
            if (location.host == 'localhost') {
                var url = location.origin+'/'+pathparts[1].trim('/')+'/';
            }else{
                var url = location.origin; 
            }
            var con = confirm('Apakah anda yakin akan menghapus data?');
            if(con){
                window.location.href = url+'deletePost.php?id='+id;
            }
        }
    </script>