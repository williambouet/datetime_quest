<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $presentTime = new DateTime();
    $destinationTime = new DateTime();
    $destinationTime->setDate(2022, 11, 01);
    $destinationTime->setTime(16, 54, 0);
    $diffDays = $presentTime->diff($destinationTime)->d;
    $diffmonth = $presentTime->diff($destinationTime)->m;
    $diffYears = $presentTime->diff($destinationTime)->y;
    $diffHours = $presentTime->diff($destinationTime)->h;
    $diffmin = $presentTime->diff($destinationTime)->i;

    $diffInMin = $presentTime->getTimestamp() - $destinationTime->getTimestamp();
    $diffInMin = abs(floor($diffInMin / 60));

    if ($diffInMin >= 10000) {
        $literMessage = 'Il faut ' . floor($diffInMin / 10000) . 'l de carburant pour faire le voyage temporel.';
    } else {
        $literMessage = 'Il faut moins de 1l de carburant pour faire le voyage temporel.';
    }

    ?>

    <ul>
        <li><?= 'Présent : ' . $presentTime->format('M d Y h:i'); ?></li>
        <li><?= 'Destination : ' . $destinationTime->format('M d Y h:i'); ?></li>
        <li><?= "Il y a {$diffYears} an, {$diffmonth} mois, {$diffDays} jours,  {$diffHours}h et {$diffmin}min de différence  " ?></li>
        <li><?= $diffInMin . ' min séparent les 2 dates' ?></li>
        <li><?= $literMessage ?></li>
    </ul>

</body>

</html>