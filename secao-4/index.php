<?php

require "vendor/autoload.php";

use app\classes\UploadFoto;

$upload = new UploadFoto('foto.png');

// echo $upload->teste();
// $upload->file('foto.png');
// $upload->extension();
// $upload->rename();
$upload->validation();
echo $upload->upload();
