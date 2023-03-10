<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $rows = array();
    foreach ($_POST['name'] as $key => $value) {
        $row = array();
        $row['name'] = $_POST['name'][$key];
        $row['email'] = $_POST['email'][$key];
        $row['phone'] = $_POST['phone'][$key];
        $rows[] = $row;
    }

    // Output the table
    echo '<table>';
    echo '<thead><tr><th>Name</th><th>Email</th><th>Phone Number</th></tr></thead>';
    echo '<tbody>';
    foreach ($rows as $row) {
        echo '<tr>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['phone'] . '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
}
?>
