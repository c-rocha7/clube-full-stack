<?php

require "app/classes/Pessoa.php";
require "app/classes/AtividadesPessoa.php";
require "app/classes/UploadFoto.php";

$upload = new UploadFoto;
$upload->file('foto.png');
$upload->extension();
$upload->rename();
echo $upload->upload();

// $atividadePessoa = new AtividadesPessoa;
// echo $atividadePessoa->pular();

// $pessoa = new Pessoa;

// $pessoa->idade = 29;
// $pessoa->nome = 'Admin';
// $pessoa->email = 'admin@mail.com';
// echo $pessoa->dados();

// $pessoa->idade = 35;
// $pessoa->nome = 'User';
// $pessoa->email = 'user@mail.com';
// echo $pessoa->dados();
