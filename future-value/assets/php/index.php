<?php
// set default value of variables for intial page load
if (!isset ($investment_amount)) { $investment_amount = '';}
if (!isset ($interest_rate)) { $interest_rate = '';}
if (!isset ($number_years)) { $number_years = '';}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" href="assets/css/future-value.css">
</head>
<body>
    <main>
        <h1>Future Value Calculator</h1>
        <?php if (!empty($error_message)) { ?>
            <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
        <?php } ?> 
        <form>
            <div id="data">
                <label>Investment Amount:</label>
                <input type="text" name="investment_amount"
                    value="<?php echo htmlspecialchars($investment_amount); ?>"> 

                <br><br>

                <label>Yearly Interest Rate:</label>
                <input type="text" name="interest_rate"
                    value="<?php echo htmlspecialchars($interest_rate); ?>"> 

                <br><br>

                <label>Number of Years:</label>
                <input type="text" name="number_years"
                    value="<?php echo htmlspecialchars($number_years); ?>"> 
                <br><br>
            </div>


            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate"><br>
            </div>
        </form>
    </main>
</body>
</html>