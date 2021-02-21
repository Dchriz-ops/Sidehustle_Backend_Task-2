
<?php
//Task 2 of Week ONE
//Program to Generate 200 Recharge Pins for a Telecommunication Company
for ($i = 1; $i <= 200; $i++) {
    echo(mt_rand(100000000000,999999999999) . "<br>"); // generate 12 digit random number
}
?>
