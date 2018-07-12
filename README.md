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

## 1. Escreva um programa que imprima números de 1 a 100. Mas, para múltiplos de 3 imprima “Fizz” em vez do número e para múltiplos de 5 imprima “Buzz”. Para números múltiplos de ambos (3 e 5), imprima “FizzBuzz”.

Confira (https://github.com/robsonkerner/processo-seletivo-bdr-07-2018/tree/master/atividade-1)


## 2. Refatore o código abaixo, fazendo as alterações que julgar necessário.

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
Confira (https://github.com/robsonkerner/processo-seletivo-bdr-07-2018/tree/master/atividade-2)


## 3. Refatore o código abaixo, fazendo as alterações que julgar necessário.
```php
<?
class MyUserClass
{
    public function getUserList()
    {
        $dbconn = new DatabaseConnection('localhost','user','password');
        $results = $dbconn->query('select name from user');
        sort($results);
        return $results;
    }
}
```
Confira (https://github.com/robsonkerner/processo-seletivo-bdr-07-2018/tree/master/atividade-3)


## 4. Desenvolva uma API Rest para um sistema gerenciador de tarefas (inclusão/alteração/exclusão). As tarefas consistem em título e descrição, ordenadas por prioridade.

**Desenvolver utilizando:**
- Linguagem PHP (ou framework CakePHP);
- Banco de dados MySQL;

**Diferenciais:**
- Criação de interface para visualização da lista de tarefas;
- Interface com drag and drop;
- Interface responsiva (desktop e mobile);

1. Copie o diretório "atividade-4" em seu servidor.
2. Importe o arquivo "atividade-4-db.sql" em seu MySQL
3. Configure o acesso ao banco de dados (host, username, password) no arquivo app/Config/database.php 
4. Execute o arquivo "index.php" em seu navegador.

Confira (https://github.com/robsonkerner/processo-seletivo-bdr-07-2018/tree/master/atividade-4)