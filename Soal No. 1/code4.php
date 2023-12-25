<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Generated Code </title>
</head>
<body>
<center><b>Generated Code Based on Date</b><br></center>
</body>
</html>

<?php

// Generate unique codes for dates from 01-January-2021 to 30-March-2021
$startDate = strtotime('01-January-2021');
$endDate = strtotime('30-March-2021');

$codes = [];

for ($date = $startDate; $date <= $endDate; $date += 86400) {
    $formattedDate = date('Y-m-d', $date);
    $code = generateCode($formattedDate);
    $codes[$formattedDate] = $code;
}

// Display the codes on another page, sorted by date
foreach ($codes as $date => $code) {
    echo "<a href='#' onclick='showCode(\"$code\")'>$date</a><br>";
}

?>

<script>
    function showCode(code) {
        // Display the code in a popup window or popup div
        alert(code);
    }
</script>

<?php

function generateUniqueCode($startDate, $endDate)
{
    $codes = [];
    $currentDate = $startDate;

    while ($currentDate <= $endDate) {
        $code = generateCode();
        while (in_array($code, $codes)) {
            $code = generateCode();
        }
        $codes[] = $code;
        $currentDate = date('Y-m-d', strtotime($currentDate . ' +1 day'));
    }

    return $codes;
}

function generateCode()
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $code = '';
    $length = 6;

    for ($i = 0; $i < $length; $i++) {
        $code .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $code;
}

$startDate = '2021-01-01';
$endDate = '2021-03-30';

$codes = generateUniqueCode($startDate, $endDate);

?>
