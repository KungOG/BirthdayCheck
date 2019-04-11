<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <p>När fyller du år?</p>
        <input type="text" name="checkDate" value="<?php echo date('Y-m-d')?>">
        <input type="submit" value="Submit"> 
    </form>
    
</body>
</html>
<?php


$birthdate = strtotime($_POST['checkDate']);
$today = time();
$days = ($birthdate-$today);
$daysLeft = (int)($days/86400);
$week = date("l", $birthdate);

echo "Om $daysLeft dagar fyller du år, och det är en $week! <br>";

?>