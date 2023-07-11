<!DOCTYPE html>
<html>
<head>
    <title>Form Submission</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label>Message:</label><br>
        <textarea rows="6" cols="50" name="mes" required></textarea><br><br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mes = $_POST['mes'];

    $file = 'form_data.txt';
    file_put_contents($file, $mes, FILE_APPEND | LOCK_EX);

    echo "<h2>Form Data:</h2>";
    echo "<p>Message: $mes</p>";
    }
    ?>
</body>
</html>