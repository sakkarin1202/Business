<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Customer and Test SQL injection</title>
</head>
<body>
    <h1>Test SQL injection</h1>
    <form action="select_injection.php" method="GET">

    <input type="text" placeholder="Enter Customer ID" name="CustomerID">
    <br>
    <input type="submit">
    </form>
</body>
</html>
