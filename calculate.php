<?php

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: index.php");
    exit();
}

$name = htmlspecialchars($_POST['name']);
$consumer_no = htmlspecialchars($_POST['consumer_no']);

$previous = (float) $_POST['previous'];
$current = (float) $_POST['current'];

$connection = $_POST['connection'];

if ($current < $previous) {
    die("Error: Current meter reading cannot be less than previous reading.");
}

$units = $current - $previous;

$energyCharge = 0;

// -----------------------------
// DOMESTIC BILL CALCULATION
// Demo slab rates
// -----------------------------

if ($connection == "domestic") {

    if ($units <= 100) {

        $energyCharge = $units * 3.50;

    } elseif ($units <= 200) {

        $energyCharge =
            (100 * 3.50) +
            (($units - 100) * 4.50);

    } elseif ($units <= 300) {

        $energyCharge =
            (100 * 3.50) +
            (100 * 4.50) +
            (($units - 200) * 5.50);

    } else {

        $energyCharge =
            (100 * 3.50) +
            (100 * 4.50) +
            (100 * 5.50) +
            (($units - 300) * 6.50);
    }

    $fixedCharge = 100;

}

// -----------------------------
// COMMERCIAL BILL
// Demo rate
// -----------------------------

else {

    $energyCharge = $units * 7.50;

    $fixedCharge = 200;
}


// Example electricity duty
$electricityDuty = $energyCharge * 0.05;

$totalBill =
    $energyCharge +
    $fixedCharge +
    $electricityDuty;

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<title>Electricity Bill</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="bill">

<h1>⚡ Electricity Bill</h1>

<div class="bill-info">

<p>
<strong>Consumer Name:</strong>
<?php echo $name; ?>
</p>

<p>
<strong>Consumer Number:</strong>
<?php echo $consumer_no; ?>
</p>

<p>
<strong>Connection:</strong>
<?php echo ucfirst($connection); ?>
</p>

</div>

<hr>

<table>

<tr>
<td>Previous Reading</td>
<td><?php echo $previous; ?></td>
</tr>

<tr>
<td>Current Reading</td>
<td><?php echo $current; ?></td>
</tr>

<tr>
<td>Units Consumed</td>
<td><?php echo $units; ?> Units</td>
</tr>

<tr>
<td>Energy Charge</td>
<td>₹<?php echo number_format($energyCharge, 2); ?></td>
</tr>

<tr>
<td>Fixed Charge</td>
<td>₹<?php echo number_format($fixedCharge, 2); ?></td>
</tr>

<tr>
<td>Electricity Duty</td>
<td>₹<?php echo number_format($electricityDuty, 2); ?></td>
</tr>

<tr class="total">

<td>Total Bill</td>

<td>
₹<?php echo number_format($totalBill, 2); ?>
</td>

</tr>

</table>

<button onclick="window.print()">
Print Bill
</button>

<a href="index.php" class="back">
Calculate Another Bill
</a>

</div>

</body>

</html>
