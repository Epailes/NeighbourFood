<?php
include ("connection.php");
include ("checkCharityLogin.php");
?>

<!DOCTYPE html>
<head>
    <title>NeighbourFood</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <script src="navigate.js"></script>
    <script src="claim.js"></script>
</head>

    <body>
        <form method="POST" action="logout.php">
            <input type="submit" value="Logout">
        </form>
    </body>

    <body>
        <!-- Navigate to donate page for business -->
        <button onclick="navTo('donate.php')"> Donate Food </button>

        <!-- Table displaying the current donations available to claim & their status -->
        <table>
            <thead>
                <tr>
                    <th>
                        Donator Name   
                    </th>
                    <th>
                        Item Name   
                    </th>
                    <th>
                        Item Quantity  
                    </th>
                    <th>
                        Start Time     
                    </th>
                    <th>
                        End Time     
                    </th>
                    <th>
                        <!-- Blank for claim buttons -->     
                    </th>
                </tr>
            </thead>
            <tbody>
                <!-- TODO Php: Make new <tr> for each item donated -->
                <tr>
                    <td>
                        Donated Item i: Attribute "Business id"  
                    </td>
                    <td>
                        Donated Item i: Attribute "Name"  
                    </td>
                    <td>
                        Donated Item i: Attribute "Quantity"
                    </td>
                    <td>
                        Donated Item i: Attribute "Start Time" 
                    </td>
                    <td>
                        Donated Item i: Attribute "End Time"
                    </td>
                    <td>
                        <!--  this button's claim() Javascript should:
                        Check if has been claimed, if so alert with apology/
                        if not, set as claimed and navigate to claim page -->
                        <button onclick = "claim()"></button>
                    </td>
                </tr>

            </tbody>
        </table>
        <script src="layout.js"></script>
    </body>
</html>
