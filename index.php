<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>⚡ Electricity Bill Calculator</h1>
    <p class="subtitle">Calculate your electricity bill using meter readings</p>

    <form action="calculate.php" method="POST">

        <label>Consumer Name</label>
        <input type="text" name="name" placeholder="Enter consumer name" required>

        <label>Consumer Number</label>
        <input type="text" name="consumer_no" placeholder="Enter consumer number" required>

        <label>Previous Meter Reading</label>
        <input type="number" name="previous" placeholder="Example: 1250" min="0" required>

        <label>Current Meter Reading</label>
        <input type="number" name="current" placeholder="Example: 1380" min="0" required>

        <label>Connection Type</label>
        <select name="connection">
            <option value="domestic">Domestic</option>
            <option value="commercial">Commercial</option>
        </select>

        <button type="submit">Calculate Bill</button>

    </form>

</div>

</body>
</html>
