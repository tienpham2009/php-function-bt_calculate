<form method="post">
    Nhap x:<input type="text" name="numberX">
    <br>
    Nhap y:<input type="text" name="numberY">
    <br>
    <input type="submit" value="Submit">
</form>
<?php
function calculate($numberX, $numberY)
{
    $sum = $numberX + $numberY;
    $brand = $numberX - $numberY;

    echo 'Tong : ' . $sum . '<br>'
        . 'Hieu : ' . $brand . '<br>'
        . 'Tich : ' . $numberX * $numberY . '<br>'
        . 'Thuong : ' . $numberX / $numberY;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numberX = (int)$_POST['numberX'];
    $numberY = (int)$_POST['numberY'];
}

try {
    if ($numberY == 0 || $numberX == 0 && $numberY == 0) {
        throw new Exception("by zero");
    } else {

        calculate($numberX, $numberY);

    }
} catch (Exception $e) {
    echo $e->getMessage();
}