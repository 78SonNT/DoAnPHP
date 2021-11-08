<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BT 2.1</title>
    
</head>
<body>
    <h3 style="color :red;text-transform: uppercase;" align="center">THÔNG TIN HÃNG SỮA</h3>
    <table align="center" border="true">
        <tr>
            <th>Mã HS</th>
            <th>Tên hãng sữa</th>
            <th>Địa chỉ</th>
            <th>Điện thoại</th>
            <th>Email</th>
            
        </tr>

        <?php
            require("config.php");
            $query = "select * from hang_sua";
            $result = $conn->query($query);
            if(!$result) echo "Query failed: " .$conn->error;
            $dem=0;
            while($row=$result->fetch_array()){
               
                for($i=0;$i<$result->field_count;$i++){
                   echo "<td>" .$row[$i] ."</td>"; 
                }
                echo "</tr>";
                $dem++;
            }
        ?>

    </table>
</body>
</html>