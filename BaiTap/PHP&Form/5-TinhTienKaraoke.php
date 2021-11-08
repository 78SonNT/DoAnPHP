<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính tiền karaoke</title>
</head>
<body>
    <?php
        if(isset($_POST['txtGBD']))
            $gbd = trim($_POST['txtGBD']);
        else $gbd=0;
        if(isset($_POST['txtGKT']))  
            $gkt=trim($_POST['txtGKT']); 
        else $gkt=0;
        if(isset($_POST['btnTT']))
            if (is_numeric($gbd) && is_numeric($gkt))  
                if($gbd >=10 && $gkt <= 24 && $gkt > $gbd){
                    if($gkt > 10 && $gkt < 17)
                        $tt = ($gkt - $gbd)* 20000;
                    else {
                        $tt = ($gkt - $gbd)* 45000;
                    }
                }
                else {
                    echo "<font color='red'>Giờ bắt đầu phải hơn 10h || Giờ kết thúc phải lớn hơn giờ bắt đầu</font>";
                    $tt="";
                }
            else {
                echo "<font color='red'>Vui lòng nhập vào số! </font>"; 
                $tt="";
            }
        else $tt=0;
    ?>
    <form action="5-TinhTienKaraoke.php" method="POST" >
        <table align="center" bgcolor="#20B2AA">
            <tr bgcolor="#008080">
    	        <th colspan="3" align="center"><h3><i><font color="white">TÍNH TIỀN KARAOKE</font></i></h3></th>
            </tr>
            <tr>
                <td>Giờ bắt đầu:</td>
                <td><input type="text" name="txtGBD" value="<?php echo $gbd;?>"/></td>
                <td><?php echo"(h)"; ?>  
            </tr>
            <tr>
                <td>Giờ kết thúc:</td>
                <td><input type="text" name="txtGKT" value="<?php echo $gkt;?>"/></td>
                <td><?php echo"(h)"; ?>
            </tr>
            <tr>
                <td>Tiền thanh toán:</td>
                <td><input type="text" name="thanhToan" disabled="disabled" value="<?php echo $tt;?>"/></td>
                <td><?php echo"(VNĐ)"; ?>
            </tr>
            <tr>
                <td colspan = "2" align="center"><input type="submit" name="btnTT" value="Tính tiền"/></td>
            </tr>
        </table>
    </form>
</body>
</html>