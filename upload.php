<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fileName = $_POST['fileName'];
    $contentType = $_POST['contentType'];
    $base64 = $_POST['base64'];

    $data = base64_decode($base64);
    file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/vardhaman-accounts/images/test.pdf', $data);
    die;
}
