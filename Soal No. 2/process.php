<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $age = $_POST["age"];
  $city = $_POST["city"];
  
  // Remove "th" from age if present
  $age = preg_replace("/th|tahun$/i", "", $age);
  
  // Validate name and city
  if (!preg_match("/^[a-zA-Z ]+$/", $name) || !preg_match("/^[a-zA-Z ]+$/", $city)) {
    echo "Invalid name or city";
    exit;
  }
  
  // Validate age
  if (!is_numeric($age)) {
    echo "Invalid age";
    exit;
  }
  
  // Print the data in table form
  //echo "<table>";
  //echo "<tr><th>Name</th><th>Age</th><th>City</th></tr>";
  //echo "<tr><td>$name</td><td>$age</td><td>$city</td></tr>";
  //echo "</table>";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width+device-width,initial-scale=1">
        <title>Form Input</title>
        <link rel="stylesheet" href="styles2.css">
    
    </head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
  text-align: center;
}
tr {
  text-align: center;
}
th {
  background-color: #04AA6D;
  color: white;
  text-align: center;
}
th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
  text-align: center;
}

tr:hover {
    background-color: #F0FFF0;
}

</style>
<body>
<div id="card">
<div id="card-content">
  <div id="card-title">
    <h2>HASIL</h2>
    <div class="underline-title"></div>
  </div>

<table>
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Kota</th>
        </tr>
        <tr>
            <td><?php echo $name; ?></td>
            <td><?php echo $age; ?></td>
            <td><?php echo $city; ?></td>
        </tr>
    </table>
  
<center><a href="index.php"><input id="submit-btn" type="submit" name="Back" value="Back"></a></center>

  </div>

</body>