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
- Como atividade não envolve processo de validação da condição o código será postado aqui para verificação

```php
<?php

session_start();

if (@$_SESSION['loggedin'] == true || @$_COOKIE['Loggedin'] == true) {
	header('Location: http://www.google.com');
}

```