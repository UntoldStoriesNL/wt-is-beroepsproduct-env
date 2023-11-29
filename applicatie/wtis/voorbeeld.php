<?php
$vliegtuig = $_GET['vliegtuig'];
$vluchtnummer = $_GET['vluchtnummer'];
$vliegveld_van_bestemming = $_GET['vliegveld_van_bestemming'];


?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>PHP voorbeeld</title>
</head>
<body>
    Vliegtuig: <?= $vliegtuig ?><br>
    met vluchtnummer: <?= $vluchtnummer ?><br>
    landt op: <?= $vliegveld_van_bestemming ?>.<br>
</body>
</html>
