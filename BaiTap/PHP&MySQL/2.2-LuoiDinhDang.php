<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BT 2.2</title>
    <style>
        th{
            color: red;
        }
    </style>
</head>
<body>
    <h3 style="color :red;text-transform: uppercase;" align="center">THÔNG TIN KHÁCH HÀNG</h3>
    <table align="center" border="true">
        <tr>
            <th>Mã KH</th>
            <th>Tên khách hàng</th>
            <th>Giới tính</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Email</th>
        </tr>

        <?php
            require("config.php");
            $query = "select * from khach_hang";
            $result = $conn->query($query);
            if(!$result) echo "Query failed: " .$conn->error;
            $dem=0;
            while($row=$result->fetch_array()){
                if($dem % 2 ==0)
                    echo "<tr bgcolor='pink'>";
                else echo "<tr>";
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