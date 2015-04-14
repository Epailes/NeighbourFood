<?php

session_start();

?>

<!DOCTYPE html>
<head>
    <title>NeighbourFood</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
    <form>
        <input type="text" name="Name" placeholder="Item Description" />
        <br />
        <input type="text" name="Quantity" placeholder="Quantity" />
        <br />
        <input type="email" name="Start" placeholder="Start Time" />
        <br />
        <input type="password" name="End" placeholder="End Time" />
        <br />   
    </form>
    <button class="button">Donate</button>
    <script src="layout.js"></script>
</body>
</html>