<?php
ini_set('display_errors', 1); // لا تنسى إزالة هذه السطور بعد تصحيح الأخطاء
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/_safe_wrappers.php';
// // ملف اتصال قاعدة البيانات: php/db.php
// $servername = "localhost";  // اسم السيرفر
// $username   = "root";       // يوزر قاعدة البيانات
// $password   = "";           // باسورد قاعدة البيانات
// $dbname     = "agent_killer_game"; // اسم قاعدة البيانات

// // ملف اتصال قاعدة البيانات: php/db.php
$servername = "sql101.infinityfree.com";  // اسم السيرفر
$username   = "if0_39736700";       // يوزر قاعدة البيانات
$password   = "mero131120200";           // باسورد قاعدة البيانات
$dbname     = "if0_39736700_agent_killer_game"; // اسم قاعدة البيانات

// $servername = "sql8.freesqldatabase.com";
// $username   = "sql8794878";
// $password   = "ApzKYPlRz8";
// $dbname     = "sql8794878";
// $port       = 3306;   
// إنشاء اتصال بقاعدة البيانات
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    // إذا فشل الاتصال، أوقف السكريبت وأظهر رسالة خطأ
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

// تعيين ترميز الأحرف إلى UTF-8 لدعم اللغة العربية
$conn->set_charset("utf8mb4");

?>
