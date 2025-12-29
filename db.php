<?php
if (file_exists(__DIR__ . "/db.local.php")) {
    require __DIR__ . "/db.local.php";
} else {
    die("Database config missing");
}
