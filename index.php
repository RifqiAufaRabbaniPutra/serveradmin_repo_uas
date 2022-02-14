<?php
    $conn = mysqli_connect('172.19.0.2', 'root', 'password', 'trucorp_db', '3306');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jabatan</th>
        </tr>
        <?php
                $query = "SELECT * FROM `users`";
                $result = $conn->query($query);
                while($row = $result->fetch_assoc()){
        ?>
        <tr>
            
            <td class="left"><?=$row['id']?></td>
            <td class="left"><?=$row['Nama']?></td>
            <td class="left"><?=$row['Alamat']?></td>
            <td class="right"><?=$row['Jabatan']?></td>
            
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>
