# Processo Seletivo BDR 07-2018
Avaliação de conhecimento para processo seletivo - Analista Desenvolvedor PHP

# Orientações
- [x] Hospedar o código no GitHub (https://github.com/) ou Bitbucket (https://bitbucket.org/)
- [x] Linguagem PHP 5.3
- [x] Siga todas as regras definidas pela PSR-2
- [x] Frameworks e bibliotecas utilizados para solução devem estar inclusos no repositório
- [x] O repositório deve possuir um README.md, contendo instruções de como rodar o projeto
- [x] Todas as questões devem constar no repositório

# Atividades:

#1. Escreva um programa que imprima números de 1 a 100. Mas, para múltiplos de 3 imprima “Fizz” em vez do número e para múltiplos de 5 imprima “Buzz”. Para números múltiplos de ambos (3 e 5), imprima “FizzBuzz”.

1. Copie o diretório "atividade-1" em seu servidor devidamente configurado com PHP.
2. Execute o arquivo "index.php" em seu navegador.

#2. Refatore o código abaixo, fazendo as alterações que julgar necessário.

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
1. Copie o diretório "atividade-2" em seu servidor devidamente configurado com PHP.
2. Execute o arquivo "index.php" em seu navegador.