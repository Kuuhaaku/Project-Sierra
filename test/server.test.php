<?php
echo "Hello World";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
</head>

<body>
  <pre>
    <?php
    var_dump($_SERVER['DOCUMENT_ROOT']);
    var_dump(file_exists($_SERVER['DOCUMENT_ROOT'] . '/index.php'));
    var_dump(__DIR__);
    var_dump(file_exists(__DIR__ . '/index.php'));
    var_dump($_SERVER['asas']);

    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];    

    ?>
  </pre>

</body>

</html>