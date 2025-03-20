<?php
//SEARCH NAME OR ID 

    $searchName = $_POST['search'];
    $sql = "SELECT id, firstName, lastName FROM jts_users WHERE firstName LIKE ? OR lastName LIKE ?  OR id = ?";
    $stmt = $connection->prepare($sql);
    $searchTerm = "%$searchName%";
    $stmt->bind_param('ssi', $searchTerm, $searchTerm, $searchName);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        echo $row['firstName'];
        echo $row['lastName'];
        echo $row['id'];
    }
