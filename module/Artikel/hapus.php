<?php

$database = new Database();
$nim = $_GET["nim"];

if (isset($_GET["nim"])) {
    $database->delete("mahasiswa", "where nim=" . $nim);
    header("Location: home");
}
