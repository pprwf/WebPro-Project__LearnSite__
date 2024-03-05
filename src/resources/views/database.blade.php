<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST</title>
</head>

<body>
    <?php
    // 1. Connect to Database 
    class MyDB extends SQLite3
    {
        function __construct()
        {
            $this->open('learnsite.db');
        }
    }

    // 2. Open Database 
    $db = new MyDB();
    if (!$db) {
        echo $db->lastErrorMsg();
    } else {
        echo "Opened database successfully<br>";
    }

    // 3. Query Execution
    // SQL Statements


    // 4. Close database
    $db->close();
    ?>
</body>

</html>