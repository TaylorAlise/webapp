<?php
// get the data from the form
$investment_amount = filter_input(INPUT_POST, 'investment_amount', 
    FILTER_VALIDATE_FLOAT);
$interest_rate = filter_input(INPUT_POST, 'interest_rate', 
    FILTER_VALIDATE_FLOAT);
$number_years = filter_input(INPUT_POST, 'number_years', 
    FILTER_VALIDATE_INT);


// validate data
$error_message = '';

// validate investment 
if ($investment_amount === FALSE) {
    $error_message .= 'Investment must be a valid number.<br>';
}
else if ($investment_amount <= 0) {
    $error_message .= 'Investment must be greater than zero.<br>';
}

// validate interest rate
if ($interest_rate === FALSE) {
    $error_message .= 'Interest rate must be a valid number.<br>';
}
else if ($interest_rate <= 0) {
    $error_message .= 'Interest rate must be greater than zero.<br>';
}

// validate years
if ($number_years === FALSE) {
    $error_message .= 'Years must be a valid a whole number.<br>';
}
else if ($number_years <= 0) {
    $error_message .= 'Years must be greater than zero.<br>';
}
else if ($number_years > 30) {
    $error_message .= 'Years must be less than 31.<br>';
}

// if an error message exists, go the the index page
if ($error_message != '') {
    include('index.php');
    exit();
}

// calculate the future value
$future_value = $investment_amount;
for ($i = 1; $i <= $number_years; $i++) {
    $future_value = $future_value + ($future_value * $interest_rate * .01);
}

//apply currency and percent formatteing
$investment_amount_f = '$'.number_format($investment_amount, 2); 
$yearly_rate_f = $interest_rate.'%';
$future_value_f = '$'.number_format($future_value, 2)

?>