<?php
$servername = "sql101.infinityfree.com";
$username   = "if0_39736700";
$password   = "mero131120200";
$dbname     = "if0_39736700_agent_killer_game";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("❌ فشل الاتصال: " . $conn->connect_error);
} else {
    echo "✅ الاتصال ناجح!";
}
?>
