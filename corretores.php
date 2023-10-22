<?php
header('Content-Type: application/json');

$cnpj = $_GET['cnpj'];
$url = "https://api.infosimples.com/api/v2/consultas/susep/corretores?token=1-kgAMBVa4TaO-06w7DaSiCuWRFpHNc7a2axyJSr&timeout=600&cpf=&cnpj=" . $cnpj;

echo file_get_contents($url);
?>