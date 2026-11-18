
<?php



//اكتبي الحل هنا 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fresh Laundry</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="card">

    <h1>Fresh Laundry 🧺</h1>
    <p class="subtitle">Laundry Cost Calculator</p>

    <form method="POST">

        <h3>Laundry Details</h3>

        <label>Number of Shirts</label>
        <input type="number" name="shirts" required>

        <label>Price per Shirt (SAR)</label>
        <input type="number" name="shirt_price" required>

        <label>Number of Pants</label>
        <input type="number" name="pants" required>

        <label>Price per Pants (SAR)</label>
        <input type="number" name="pants_price" required>

        <h3>Order Summary</h3>

        <div class="summary">

            <p>Shirts Cost</p>
            <p class="result">
                <?php echo $shirts_cost; ?> SAR
            </p>

            <p>Pants Cost</p>
            <p class="result">
                <?php echo $pants_cost; ?> SAR
            </p>

            <hr>

            <p>Total Cost</p>
            <p class="total">
                <?php echo $total_cost; ?> SAR
            </p>

        </div>

        <button type="submit">Calculate Total</button>

    </form>

</div>

</body>
</html>
