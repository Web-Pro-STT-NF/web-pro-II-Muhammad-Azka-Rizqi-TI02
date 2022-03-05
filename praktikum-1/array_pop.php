<!DOCTYPE html>
<html>
<body>
<?php
$tims = ["azka","rizki","japur","artz"];
array_pop($tims);
foreach($tims as $person){
    echo $person. '<br/>';
}
?>
</body>
</html>
