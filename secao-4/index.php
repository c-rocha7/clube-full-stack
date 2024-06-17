<?php

require "vendor/autoload.php";

use app\classes\UploadFile;

$upload = new UploadFile('foto.zip');

// echo $upload->teste();
// $upload->file('foto.png');
// $upload->extension();
// $upload->rename();
echo $upload->upload();
