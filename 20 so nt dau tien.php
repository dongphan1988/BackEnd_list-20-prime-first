list 20 so nt dau tien :
<?php
function checkSNT($num)
{

    if ($num < 2) {
        return false;

    }
    if ($num === 2) {
        return true;
    }
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}
$count = 0;
$i = 0;
while($count<21){
    if(checkSNT($i)){
        $count++;
        echo "<br>".$i."<br>";
    }
    $i++;
}
?>