<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fileName = $_POST['fileName'];
    $contentType = $_POST['contentType'];
    $base64 = $_POST['base64'];

    $data = base64_decode($base64);
    file_put_contents('file.pdf', $data);
    die;
}
