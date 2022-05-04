<!-- 
*Get a meter reading from your home electricity

*Deduce the previous meter reading from the current one

*Calculate how much money is to be spent
*Thats it

*hint
*For first 50 units – Rs. 3.50/unit
*For next 100 units – Rs. 4.00/unit
*For next 100 units – Rs. 5.20/unit
*For units above 250 – Rs. 6.50/unit 
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill Calculator</title>
</head>


<body>
    <h3>Electricity Bill Calculator in PHP</h3>
    <form action="cal.php" method="post">

        Enter your current bill reading:<br>
        <input type="number" name="current_unit" id="digit" min="5" max="99999">
        <input type="submit"><br>
        Enter your previous bill reading: <br> 
        <input type="number" name="previous_unit" id="" min="1" max="99999">
        <input type="submit">

    </form>
    

</body>

</html>