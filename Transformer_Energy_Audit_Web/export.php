<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "energy_audit";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="audit_export.csv"');

$output = fopen('php://output', 'w');
fputcsv($output, ['address','contact_person','contact_info','year_built','building_type','square_footage','occupants','operating_hours','transformer_id','location','manufacturer','capacity','voltage_rating','frequency','type','temperature','cooling_type','installation_date','motor_id','motor_rating','motor_efficiency','chiller_capacity','chiller_cop','chiller_hours','fan_id','fan_power','fan_runtime','observations','recommendations']);

$result = $conn->query("SELECT * FROM audit_data");
while ($row = $result->fetch_assoc()) {
  fputcsv($output, $row);
}

fclose($output);
$conn->close();
?>
