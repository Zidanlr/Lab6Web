<?php
require_once("template/header.php");
$database = new Database();
if (isset($_POST['submit'])) {
    $data = [
        'nama' => $_POST['nama'],
        'nim' => $_POST['nim'],
        'kelas' => $_POST['kelas'],
    ];
    $database->insert("mahasiswa", $data);
}

$form = new Form("", "submit");
$form->addField("nama", "Nama");
$form->addField("nim", "Nim");
$form->addField("kelas", "Kelas");
$form->displayForm();