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
- Como a atividade envolve apenas uma perspectiva de refatoração, segue código para análise:

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

1. Nome da classe alterado para UserClass. Achei incoerente o nome da classe ser MyUserClass e realizar uma consulta para listar todos usuários da base. Seria mais prudente uma classe geral de usuários listar todos. 
2. Criação de um construtor para verificar e criar a instância de conexão. Assim ao criar o objeto pela primeira vez haverá uma única conexão com banco. Evitando novas conexões a cada momento que usar a classe.
3. A ordenação dos dados é feira duranto a consulta no banco dispensando o uso do sort().

# Execução

Caso queria executar o programa:
1. Copie o diretório "atividade-3" em seu servidor configurado para rodar arquivos PHP.
2. Configure o acesso do arquivo "index.php" em seu servidor.
2. Execute o arquivo "index.php" em seu navegador.
3. Qualquer dúvida envie e-email para robson.kerner@outlook.com