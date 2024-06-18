<?php

require "vendor/autoload.php";

use app\classes\UploadFoto;

$upload = new UploadFoto('foto.png');
$upload->upload();
echo $upload->newName();
