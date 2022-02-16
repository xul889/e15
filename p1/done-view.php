<!doctype html>
<html lang='en'>

<head>
    <title>String Processor - Project 1</title>
    <meta charset='utf-8'>
    <link href="style.css" rel="stylesheet">

</head>

<body>
    <div class="wrapper">
        <h1>String Processor</h1>
        <form method='GET' action='process.php'>
            <input type="text" name="input" placeholder="Enter a string here">
            <button type="submit">Process</button>
        </form>

        <h2>String:</h2>
        <h3><?php echo $string ?></h3>
        <h2>Is palindrome?</h2>
        <h3><?php echo $result ?></h3>

        <h2>Vowel count:</h2>
        <h3><?php echo $count ?></h3>

</body>

</html>