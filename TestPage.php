<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Page</title>
</head>
<body>
    <?php
    include_once("DBFunctions.php");
    $dbfuncs = new DBRepositoryFuncs;
    $dbfuncs->Connect();
    $dbfuncs->GetData();   
    ?>
</body>
</html>