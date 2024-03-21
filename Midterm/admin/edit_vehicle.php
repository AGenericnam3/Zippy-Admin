<?php
include "database.php";
// Add vehicle function
function addVehicle($type, $make, $model) {
    global $pdo;

    $sql = "INSERT INTO vehicles (type, make, model) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$type, $make, $model]);

    // Return the newly inserted ID
    return $pdo->lastInsertId();
}

// Delete vehicle function
function deleteVehicle($make, $model) {
    $sql = "DELETE FROM vehicles WHERE make = ? AND model = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $make, $model);
    $stmt->execute();

    // Close the connection
    $stmt->close();
    $conn->close();
}

// Edit vehicle function
function editVehicle($make, $model, $type, $class){
    // Sanitize input values
    $make = mysqli_real_escape_string($this->dbConnection, $make);
    $model = mysqli_real_escape_string($this->dbConnection, $model);
    $type = mysqli_real_escape_string($this->dbConnection, $type);
    $class = mysqli_real_escape_string($this->dbConnection, $class);
    // Construct the SQL query
    $query = "UPDATE vehicles SET make='$make', model='$model', type='$type', class='$class' WHERE id=$vehicleId";
    // Execute the query
    if (mysqli_query($this->dbConnection, $query)) {
        return true; // Successfully updated the vehicle record
    } else {
        return false; // Error occurred during update
    }
}
?>