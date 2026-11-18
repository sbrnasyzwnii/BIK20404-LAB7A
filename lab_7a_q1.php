<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 7a Q1</title>
</head>
<body>
    <?php
        $name = "Adam bin Abu";
        $matric = "AI250055";
        $course = "Web Technology";
        $year = "Year 2";
        $address = "No. 12 Jalan Universiti, 86400 Parit Raja, Batu Pahat, Johor";
    ?>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo "$matric"; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo "$course"; ?></td>
        </tr>
        <tr>
            <td>Year of study</td>
            <td><?php echo "$year"; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo "$address"; ?></td>
        </tr>
    </table>
</body>
</html>