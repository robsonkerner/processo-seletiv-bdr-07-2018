# Processo Seletivo BDR 07-2018
Avaliação de conhecimento para processo seletivo - Analista Desenvolvedor PHP

# Escreva um programa que imprima números de 1 a 100. Mas, para múltiplos de 3 imprima “Fizz” em vez do número e para múltiplos de 5 imprima “Buzz”. Para números múltiplos de ambos (3 e 5), imprima “FizzBuzz”.

# Atenção
- Como a atividade envolve apenas uma perspectiva de elaboração de programa, segue código para análise:

```php
<?php

for ($i = 1; $i <= 100; $i++) {
    if (($i %3 == 0) && ($i %5 == 0)) {
        $n = "FizzBuzz";
    } else {
        $n = (($i %3 == 0)
            ? "Fizz"
            : (($i %5 == 0)
                ? "Buzz"
                : $i
            )
        );
    }
    echo $n . PHP_EOL;
}

```

# Execução

Caso queria executar o programa:
1. Copie o diretório "atividade-1" em seu servidor configurado para rodar arquivos PHP.
2. Configure o acesso do arquivo "index.php" em seu servidor.
2. Execute o arquivo "index.php" em seu navegador.
3. Qualquer dúvida envie e-email para robson.kerner@outlook.com