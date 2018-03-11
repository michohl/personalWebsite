<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require_once('../admin/config.php');
    //print_r($_POST);
    $conn = mysqli_connect($loc, $user, $pass, $db2);

    $result = $conn->query("SELECT * FROM classes WHERE Term LIKE '%" . $_POST["semester"] . "%'" . "AND Name LIKE '%" . $_POST["name"] . "%'");
    
    if ($result->num_rows > 0) {
        // output data of each row
        $output = "<table class='table table-responsive center-block' style='width: 40%'>
            <thead>
                <tr>
                    <th>Number</th>
                    <th>Name</th>
                    <th>Hours</th>
                    <th>Description</th>
                    <th>Term</th>
                    <th>Prerequisite(s)</th>
                </tr>
            </thead>
            <tbody>";
            
        while($row = mysqli_fetch_assoc($result)) {
            $output.= "<tr>
                <td> {$row["Number"]} </td>
                <td> {$row["Name"]} </td>
                <td> {$row['Hours']} </td>
                <td> {$row['Description']} </td>
                <td> {$row['Term']} </td>
                <td> {$row['Prerequisites']} </td>
            </tr>";
            $output .= "            </tbody>
            </table>";
        }
        
    } else {
        $conn->close();
        echo "<p>0 results</p>";
        exit;
    }
    
    $conn->close();   
    echo $output;
?>