<?php
function printtable($array) {
  
    if (!is_array($array) || empty($array)) {
        echo "<p>No data</p>";
        return 0;
    }

    
    echo "<table border='1'>";
    
    
    echo "<tr>";
    foreach (array_keys($array[0]) as $key) {
        echo "<th>" . $key . "</th>";
    }
    echo "</tr>";

  
    foreach ($array as $row) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>" . $value . "</td>";
        }
        echo "</tr>";
    }

    
    echo "</table>";
}


$data = [
    ['name' => 'Aya', 'age' => 24, 'city' => 'Cairo'],
    ['name' => 'shimaa', 'age' => 30, 'city' => 'New York'],
    ['name' => 'omar', 'age' => 22, 'city' => 'London']
];


printtable($data);
?>
