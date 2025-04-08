<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "energy_audit";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

$stmt = $conn->prepare("INSERT INTO audit_data (address, contact_person, contact_info, year_built, building_type, square_footage, occupants, operating_hours, transformer_id, location, manufacturer, capacity, voltage_rating, frequency, type, temperature, cooling_type, installation_date, motor_id, motor_rating, motor_efficiency, chiller_capacity, chiller_cop, chiller_hours, fan_id, fan_power, fan_runtime, observations, recommendations) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("sssisisisssssdsssssdddisidss",
  $_POST['address'], $_POST['contact_person'], $_POST['contact_info'], $_POST['year_built'],
  $_POST['building_type'], $_POST['square_footage'], $_POST['occupants'], $_POST['operating_hours'],
  $_POST['transformer_id'], $_POST['location'], $_POST['manufacturer'], $_POST['capacity'],
  $_POST['voltage_rating'], $_POST['frequency'], $_POST['type'], $_POST['temperature'],
  $_POST['cooling_type'], $_POST['installation_date'], $_POST['motor_id'], $_POST['motor_rating'],
  $_POST['motor_efficiency'], $_POST['chiller_capacity'], $_POST['chiller_cop'],
  $_POST['chiller_hours'], $_POST['fan_id'], $_POST['fan_power'], $_POST['fan_runtime'],
  $_POST['observations'], $_POST['recommendations']
);

$stmt->execute();
$stmt->close();
$conn->close();

echo "Data submitted successfully!";
?>
