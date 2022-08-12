<!DOCTYPE html>
<html lang="ru">
<head>

    <title>Таблица</title>
<link href="" rel="stylesheet" type="text/css">
<meta http-equiv="Content-type" content="text/html;charset=UTF-8"/></head>
<body>
<h1 class="rg">Таблица</h1>
<table cellspacing="0" width="70%">
    <tr>
      <th>№</th>
      <th>name</th>
      <th>tel</th>
      <th>data</th>
    </tr>
  <tbody>
  <?php 
    $conn = mysqli_connect("localhost","s90618cw_1","123Vad!","s90618cw_1"); 
    // Check connection 
    if ($conn->connerror) { 
    die("Connection failed: " . $conn->connerror); 
    }  
    $sql = "SELECT * FROM telefoni"; 
    $result = $conn->query($sql); 
    if ($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()) { 
      echo "<tr><td>" . $row["id"]
        . "</td><td>" . $row["name"] 
        . "</td><td>" . $row["tel"]
        . "</td><td>" . $row["dataa"]
        . "</td></tr>"; 
    } echo "</tbody>";
    } else { echo "0 results"; } 
    $conn->close(); 
  ?> 


</body></html>
