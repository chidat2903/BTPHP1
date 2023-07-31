
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bai4.css">
    <title>Bài 4</title>
</head>
<body>
    <?php
    $average = "";
    $result = "";
    $type = "";
    $hk1 = "";
    $hk2 = "";
    if (isset($_POST['hk1']) && isset($_POST['hk2']) && $_POST['hk1'] != "" && $_POST['hk2'] != ""){
        $hk1 = $_POST['hk1'];
        $hk2 = $_POST['hk2'];
        $average = round(($hk1+$hk2*2)/3,2);
        if ($average>=5) $result = "Được lên lớp"; else $result = "Không đủ điều kiện lên lớp";
        if ($average>=8) $type = "Giỏi"; 
        else if ($average>=6.5) $type = "Khá"; 
        else if ($average>=5) $type = "Trung bình";
        else $type = "Yếu";
    }
    ?>
    <form action="ex4.php" method="POST">
        <table>
            <tr>
                <td colspan="2"><span class="title">KẾT QUẢ HỌC TẬP</span></td>
            </tr>
            <tr>
                <td width="160"><span class="data">Điểm HK1: </span></td>
                <td>
                    <label for="hk1">
                        <input type="text" id="hk1" name="hk1" value="<?php 
                                if (isset($_POST['hk1'])){ echo $hk1; }
                                else echo "";
                            ?>" size="20"
                        >
                    </label>
                </td>
            </tr>
            <tr>
                <td width="160"><span class="data">Điểm HK2: </span></td>
                <td>
                    <label for="hk2">
                        <input type="text" id="hk2" name="hk2" value="<?php
                                if (isset($_POST['hk2'])){ echo $hk2; }
                                else echo "";
                            ?>" size="20"
                        >
                    </label>
                </td>
            </tr>
            <tr>
                <td width="160"><span class="data">Điểm trung bình: </span></td>
                <td>
                    <label for="average">
                        <input readonly="true" type="text" id="average" name="average" value="<?php echo $average; ?>" size="20">
                    </label>
                </td>
            </tr>
            <tr>
                <td width="160"><span class="data">Kết quả: </span></td>
                <td>
                    <label for="result">
                        <input readonly="true" type="text" id="result" name="result" value="<?php echo $result;?>" size="20">
                    </label>
                </td>
            </tr>
            <tr>
                <td width="160"><span class="data">Xếp loại học lực: </span></td>
                <td>
                    <label for="type">
                        <input type="text" id="type" name="type" readonly="true" value="<?php echo $type;?>" size="20">
                    </label>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="Submit" value="Xem kết quả">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
