<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fileName = $_POST['fileName'];
    $contentType = $_POST['contentType'];
    $base64 = $_POST['base64'];
    $data = base64_decode($base64);
    $myfile = fopen($_SERVER['DOCUMENT_ROOT'] . '/vardhman-accounts/images/testFile.pdf', "w");
    file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/vardhman-accounts/images/testFile.pdf', $data);
    die;
}
