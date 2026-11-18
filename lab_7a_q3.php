<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 7a Q3</title>
</head>
<body>
    <?php
        function calculateArea($width, $length) {
            return $width * $length;
        }

        $w = 4;
        $l = 2;
        $area = calculateArea($w, $l);

        echo "<b>The area of a rectangle with a width of $w and $l is $area</b>";
    ?>
</body>
</html>