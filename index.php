<?php
    require_once './src/controllers/CSVWriter.php';
    $CSVWriter = new CSVWriter();

    // Fill with your own data like this
    $data = [
        [ 'Car', 'Red', '30000€' ],
        [ 'Laptop', 'Black', '1200€' ],
        [ 'Smartphone', 'Grey', '600€' ],
        [ 'Xbox', 'White', '400€' ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> CSV Writer Example </title>
    <meta charset="UTF-8">
</head>

<body>
    <h2> CSV File Generator </h2>
    <form action="" method="POST">
        <input type="submit" name="generate-submit" value="Generate CSV File">
    </form>
    <br />

    <?php
        if(isset($_POST['generate-submit'])) {
            try {
                if($CSVWriter->generateFile($data)) {
                    echo 'CSV File well generated.';
                }
            } catch (Exception $e) {
                echo 'An error has occured during the CSV File generation.';
            }
        }
    ?>
</body>

</html>

