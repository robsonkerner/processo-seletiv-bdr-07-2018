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

# Atenção
- Como atividade não envolve processo de verificação do código em execução, a resposta será postada a seguir.

```php
<?php

class UserClass
{
    private $dbconn;

    public function __construct()
    {
        if (!isset($this->dbconn) || !($this->dbconn instanceOf DatabaseConnection)) {
            $host = 'localhost';
            $user = 'username';
            $pass = 'password';
            $this->dbconn = new DatabaseConnection($host,$user,$pass);
        }
    }

    public function getUserList()
    {
        $lista = $this->dbconn->query('select name from user order by name');
        return $lista;
    }
}

```

1. Nome da classe alterado para UserClass. Achei incoerente o nome da classe ser MyUserClass e realizar uma consulta para listar todos usuários da base. 
2. Criação de um construtor para verificar e criar a instância de conexão. Assim eu criar o objeto pela primeira vez haverá uma única conexão com banco.
3. A ordenação dos dados é feira duranto a consulta no banco dispensando o uso do sort();