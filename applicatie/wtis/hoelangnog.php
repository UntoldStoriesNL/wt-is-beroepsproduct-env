<?php
    $originalTime = new DateTime("now");
    $targedTime = new DateTimeImmutable("2023-12-05 UTC");
    $interval = $originalTime->diff($targedTime);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>PHP voorbeeld</title>
</head>
<body>
    Het duurt nog <?= $interval->format("%a") ?> dagen tot sinterklaas
</body>
</html>