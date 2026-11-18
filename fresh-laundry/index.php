
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

   <form method="POST" action="calculate.php">

        <h3>Laundry Details</h3>

        <label>Number of Shirts</label>
        <input type="number" name="shirts" placeholder="Enter number of shirts">

        <label>Price per Shirt (SAR)</label>
        <input type="number" name="shirt_price" placeholder="e.g. 5">

        <label>Number of Pants</label>
        <input type="number" name="pants" placeholder="Enter number of pants">

        <label>Price per Pants (SAR)</label>
        <input type="number" name="pants_price" placeholder="e.g. 8">

        <h3>Order Summary</h3>

        <div class="summary">

            <p>Shirts Cost</p>
            <p><strong>0 SAR</strong></p>

            <p>Pants Cost</p>
            <p><strong>0 SAR</strong></p>

            <hr>

            <p>Total Cost</p>
            <p class="total">0 SAR</p>

        </div>

        <button type="submit">Calculate Total</button>

    </form>

</div>

</body>
</html>
