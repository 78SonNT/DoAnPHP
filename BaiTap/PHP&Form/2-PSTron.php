<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $PI = 3.14;
        if(isset($_POST['txtBanKinh']))  
	        $bankinh=trim($_POST['txtBanKinh']); 
        else $bankinh=0;
        if(isset($_POST['btnTinh']))

            if (is_numeric($bankinh))  

                $dientich=$PI * pow($bankinh,2);

            else {

                echo "<font color='red'>Vui lòng nhập vào số! </font>"; 

                $dientich="";

            }

        else $dientich=0;
        if(isset($_POST['btnTinh']))

            if (is_numeric($bankinh))  

                $chuvi=2*$PI * $bankinh;

            else {

                echo "<font color='red'>Vui lòng nhập vào số! </font>"; 

                $chuvi="";

            }

	    else $chuvi=0;
    ?>
    <form action="2-PSTron.php" method="POST">
        <table bgcolor="#CCCC66">
            <tr bgcolor="yellow">
    	        <th colspan="2" align="center"><h3><font color="red">DIỆN TÍCH VÀ CHU VI HÌNH TRÒN</font></h3></th>
            </tr>
            <tr>
                <td>Bán kính:</td>
                <td><input type="text" name="txtBanKinh" value="<?php echo $bankinh;?>"/></td>
            </tr>
            <tr>
                <td>Chu vi:</td>
                <td><input type="text" name="chuVi" disabled="disabled" value="<?php echo $chuvi;?>"/></td>
            </tr>
            <tr>
                <td>Diện tích:</td>
                <td><input type="text" name="dienTich" disabled="disabled" value="<?php echo $dientich;?>"/></td>
            </tr>
            <tr>
                <td colspan = "2" align="center"><input type="submit" name="btnTinh" value="Tính"/></td>
            </tr>
        </table>
    </form>
</body>
</html>