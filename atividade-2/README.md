# Processo Seletivo BDR 07-2018
Avaliação de conhecimento para processo seletivo - Analista Desenvolvedor PHP

# Refatore o código abaixo, fazendo as alterações que julgar necessário.

```php
<?
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header("Location: http://www.google.com");
    exit();
} elseif (isset($_COOKIE['Loggedin']) && $_COOKIE['Loggedin'] == true) {
    header("Location: http://www.google.com");
    exit();
}

```
# Atenção
- Como a atividade envolve apenas uma perspectiva de refatoração, segue código para análise:

```php
<?php

session_start();

if (@$_SESSION['loggedin'] == true || @$_COOKIE['Loggedin'] == true) {
	header('Location: http://www.google.com');
}

```

# Execução

Caso queria executar o programa:
1. Copie o diretório "atividade-2" em seu servidor configurado para rodar arquivos PHP.
2. Configure o acesso do arquivo "index.php" em seu servidor.
2. Execute o arquivo "index.php" em seu navegador.
3. Qualquer dúvida envie e-email para robson.kerner@outlook.com