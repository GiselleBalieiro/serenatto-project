<?php
// 🚀 CONFIGURAÇÃO DA CONEXÃO COM O BANCO DE DADOS 🚀
// 🔹 Substitua os valores abaixo conforme necessário.

$pdo = new PDO(
    dsn: 'mysql:host=SEU_HOST;dbname=SEU_BANCO;charset=utf8',
    username: 'SEU_USUARIO', // Substitua pelo nome de usuário do seu banco
    password: 'SUA_SENHA' // Substitua pela senha do seu banco
);