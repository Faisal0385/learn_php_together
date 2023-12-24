<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    // Global variable
    $name = "Faisal A Salam";

    function info()
    {
        // local variable
        $address = "CTG, Bangaldesh";
        echo $address;
    }

    info();

    // how to use global variable in a function

    // First way
    function StudentInfo()
    {
        global $name;

        echo "This is from Student info function " . $name . "<br>";
    }

    StudentInfo();

    // Second way
    function HomeInfo()
    {
        echo "This is from Home info function " . $GLOBALS['name'] . "<br>";
    }

    HomeInfo();


    ?>

</body>

</html>