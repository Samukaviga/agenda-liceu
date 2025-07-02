<?php
date_default_timezone_set('America/Sao_Paulo');
$data=date("Y-m-d");   
$hora=date("H:i");

$conexao = mysqli_connect("142.93.181.222", "root", "ff3003c79b9d59bdb2dfa4b5a90c174e586fa5bd66fd76de","bd_geral") or print ('Erro de conexao! 111');
$conecta = mysqli_connect("142.93.181.222", "root", "ff3003c79b9d59bdb2dfa4b5a90c174e586fa5bd66fd76de","bd_geral") or print ('Erro de conexao! 111');
$conecta_liceu = mysqli_connect("142.93.181.222", "root", "ff3003c79b9d59bdb2dfa4b5a90c174e586fa5bd66fd76de","bolsas_liceubrasil_com_br") or print ('Erro de conexao! 22');
$conn = mysqli_connect("142.93.181.222", "root", "ff3003c79b9d59bdb2dfa4b5a90c174e586fa5bd66fd76de","bolsas_liceubrasil_com_br") or print ('Erro de conexao! 1');

$CONNECTION_SITE = mysqli_connect("142.93.181.222", "root", "ff3003c79b9d59bdb2dfa4b5a90c174e586fa5bd66fd76de","bd_site") or print ('Erro de conexao! 1');
$CONNECTION_VOX_EDUCACIONAL = mysqli_connect("142.93.181.222", "root", "ff3003c79b9d59bdb2dfa4b5a90c174e586fa5bd66fd76de","bd_liceu") or print ('Erro de conexao! 1');