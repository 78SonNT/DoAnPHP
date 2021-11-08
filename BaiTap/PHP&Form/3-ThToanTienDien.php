<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh Toán Tiền Điện</title>
</head>
<body>
    <?php
        if(isset($_POST['txtChuHo']))
            $chuho = trim($_POST['txtChuHo']);
        else $chuho = "";
        if(isset($_POST['txtCSCu']))  
            $cscu=trim($_POST['txtCSCu']); 
        else $cscu=0;
        if(isset($_POST['txtCSMoi']))  
            $csmoi=trim($_POST['txtCSMoi']); 
        else $csmoi=0;
        if(isset($_POST['txtDonGia']))  
            $dongia=trim($_POST['txtDonGia']); 
        else $dongia=20000;
        if(isset($_POST['btnTinh']))
            if (is_numeric($cscu) && is_numeric($csmoi))  

                $thanhtoan=($csmoi - $cscu) * $dongia;

            else {

                echo "<font color='red'>Vui lòng nhập vào số! </font>"; 

                $thanhtoan="";

            }
        else $thanhtoan=0;
    ?>
    <form action="3-ThToanTienDien.php" method="POST">
        <table bgcolor="pink">
            <tr bgcolor="yellow">
    	        <th colspan="3" align="center"><h3><font color="red">THANH TOÁN TIỀN ĐIỆN</font></h3></th>
            </tr>
            <tr>
                <td>Tên chủ hộ:</td>
                <td><input type="text" name="txtChuHo" value="<?php echo $chuho; ?>"/></td>   
            </tr>
            <tr>
                <td>Chỉ số cũ:</td>
                <td><input type="text" name="txtCSCu" value="<?php echo $cscu; ?>"/></td>
                <td><?php echo "(Kw)"; ?></td>
            </tr>
            <tr>
                <td>Chỉ số mới:</td>
                <td><input type="text" name="txtCSMoi" value="<?php echo $csmoi; ?>"/></td>
                <td><?php echo "(Kw)"; ?></td>
            </tr>
            <tr>
                <td>Đơn giá:</td>
                <td><input type="text" name="txtDonGia" value="<?php echo $dongia; ?>"/></td>
                <td><?php echo "(VNĐ)"; ?></td>
            </tr>
            <tr>
            <td>Số tiền thanh toán:</td>
                <td><input type="text" name="thanhToan" disabled="disabled" value="<?php echo $thanhtoan; ?>"/></td>
                <td><?php echo "(VNĐ)"; ?></td>
            </tr>
            <tr>
                <td colspan = "2" align="center"><input type="submit" name="btnTinh" value="Tính"/></td>
            </tr>
        </table>
    </form>
</body>
</html>