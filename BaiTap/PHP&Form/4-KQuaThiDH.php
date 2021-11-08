<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST['txtToan']))
            $toan = trim($_POST['txtToan']);
        else $toan=0;
        if(isset($_POST['txtLy']))  
            $ly=trim($_POST['txtLy']); 
        else $ly=0;
        if(isset($_POST['txtHoa']))  
            $hoa=trim($_POST['txtHoa']); 
        else $hoa=0;
        if(isset($_POST['txtDiemChuan']))  
            $diemchuan=trim($_POST['txtDiemChuan']); 
        else $diemchuan=20;
        if(isset($_POST['btnKQ']))
            if (is_numeric($toan) && is_numeric($ly) && is_numeric($hoa))  

                $tongdiem= $toan + $ly +$hoa;

            else {

                echo "<font color='red'>Vui lòng nhập vào số! </font>"; 

                $tongdiem="";

            }
        else $tongdiem=0;
        if(isset($_POST['btnKQ']))
            if($tongdiem >= $diemchuan)
                if($toan != 0 && $ly != 0 && $hoa != 0)
                    $ketqua="Đậu";
                else {
                    $ketqua="Rớt";
                }
            else {
                $ketqua="Rớt";
            }
        else $ketqua="";
    ?>
    <form action="4-KQuaThiDH.php" method="POST" >
        <table align="center" bgcolor="pink">
            <tr bgcolor="yellow">
    	        <th colspan="3" align="center"><h3><font color="Gray">KẾT QUẢ THI ĐẠI HỌC</font></h3></th>
            </tr>  
            <tr>
                <td>Toán:</td>
                <td><input type="text" name="txtToan" value="<?php echo $toan ?>"/></td>   
            </tr>
            <tr>
                <td>Lý:</td>
                <td><input type="text" name="txtLy" value="<?php echo $ly ?>"/></td>
            </tr>
            <tr>
                <td>Hóa:</td>
                <td><input type="text" name="txtHoa" value="<?php echo $hoa ?>"/></td>
            </tr>
            <tr>
                <td>Điểm chuẩn:</td>
                <td><input type="text" name="txtDiemChuan" value="<?php echo $diemchuan ?>"/></td>
            </tr>
            <tr>
                <td>Tổng điểm:</td>
                <td><input type="text" name="tongDiem" disabled="disabled" value="<?php echo $tongdiem ?>"/></td>
            </tr>
            <tr>
                <td>Kết quả thi:</td>
                <td><input type="text" name="ketQuaThi" disabled="disabled" value="<?php echo $ketqua ?>"/></td>
            </tr>
            <tr>
                <td colspan = "2" align="center"><input type="submit" name="btnKQ" value="Xem kết quá"/></td>
            </tr>
        </table>
    </form>
</body>
</html>