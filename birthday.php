<?php 

$birthdate = mktime(0,0,0,4,24,2019);
echo "Födelsedagtum i tid: $birthdate <br>";

$today = time();
echo "Dagenstid: $today <br>";

$days = ($birthdate-$today);
echo "tid mellan dagens datum och mitt födelsedatum: $days <br>";

$daysLeft = (int)($days/86400);

echo "Så här många dagar är det kvar till min födelsedag: $daysLeft st! <br>";

$week = date("l", $birthdate);
echo "$week <br>";

?>