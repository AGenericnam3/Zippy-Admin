<?php
// admin/index.php

// Initialize session
session_start();


// database connection
require_once 'database.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zippy's Admin Dashboard</title>
</head>
<body>
    <h1>Zippy's Admin Dashboard</h1>
    <p>Welcome, Zippy!</p>

    <!-- Display the list of vehicles -->
    <table>
        <thead>
            <tr>
                <th>Model</th>
                <th>Make</th>
                <th>Type</th>
                <th>Class</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Suburban</td>
                <td>Chevy</td>
                <td>SUV</td>
                <td>Utility</td>
                <td>
                    <a href="edit_vehicle.php?id=Suburban">Edit</a>
                    <a href="index.php?delete_vehicle=Suburban" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
            <tr>
                <td>F150</td>
                <td>Ford</td>
                <td>Truck</td>
                <td>Utility</td>
                <td>
                    <a href="edit_vehicle.php?id=F150">Edit</a>
                    <a href="index.php?delete_vehicle=F150" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
            <tr>
                <td>Escalade</td>
                <td>Cadillac</td>
                <td>Sedan</td>
                <td>Luxury</td>
                <td>
                    <a href="edit_vehicle.php?id=Escalade">Edit</a>
                    <a href="index.php?delete_vehicle=Escalade" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
            <tr>
                <td>Rogue</td>
                <td>Nissan</td>
                <td>SUV</td>
                <td>Coupe</td>
                <td>
                    <a href="edit_vehicle.php?id=Rogue">Edit</a>
                    <a href="index.php?delete_vehicle=Rogue" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
            <tr>
                <td>Sonata</td>
                <td>Hyundai</td>
                <td>Sedan</td>
                <td>Economy</td>
                <td>
                    <a href="edit_vehicle.php?id=Sonata">Edit</a>
                    <a href="index.php?delete_vehicle=Sonata" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
            <tr>
                <td>Challenger</td>
                <td>Dodge</td>
                <td>Coupe</td>
                <td>Sports</td>
                <td>
                    <a href="edit_vehicle.php?id=Challenger">Edit</a>
                    <a href="index.php?delete_vehicle=Challenger" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
            <tr>
                <td>Tahoe</td>
                <td>Chevy</td>
                <td>SUV</td>
                <td>Utility</td>
                <td>
                    <a href="edit_vehicle.php?id=Tahoe">Edit</a>
                    <a href="index.php?delete_vehicle=Tahoe" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
            <tr>
                <td>QX80</td>
                <td>Infiniti</td>
                <td>SUV</td>
                <td>Luxury</td>
                <td>
                    <a href="edit_vehicle.php?id=QX80">Edit</a>
                    <a href="index.php?delete_vehicle=QX80" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
            <tr>
                <td>Fusion</td>
                <td>Ford</td>
                <td>Sedan</td>
                <td>Economy</td>
                <td>
                    <a href="edit_vehicle.php?id=Fusion">Edit</a>
                    <a href="index.php?delete_vehicle=Fusion" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
            <tr>
                <td>XTS</td>
                <td>Cadillac</td>
                <td>Sedan</td>
                <td>Luxury</td>
                <td>
                    <a href="edit_vehicle.php?id=XTS">Edit</a>
                    <a href="index.php?delete_vehicle=XTS" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>

</body>
</html>