# Organizze PHP SDK [BETA]
### Biblioteca não oficial PHP para interação com o [Organizze](http://www.organizze.com.br/) 
--------
[Organizze](http://www.organizze.com.br/) é na ***minha opinião*** o melhor sistema de controle financeiro pessoal e empresarial. 
Essa biblioteca serve para facilitar automação/interação com a plataforma facilitando assim ainda mais sua utilização da plataforma. 

Instalação
------------

Esta biblioteca pode ser encontrada no  [Packagist](https://packagist.org/packages/skaisser/organizze).
Recomendamos sua instalação com o  [composer](http://getcomposer.org).

Para instalar a biblioteca basta executar o seguinte comando no seu terminal
```bash
$ composer require skaisser/organizze:dev-master
```
Ou você pode editar seu arquivo composer.json
```json
{
    "require": {
        "skaisser/organizze": "dev-master"
    }
}
```

Então voce deve instalar **APENAS UM** dos seguintes adaptadores:

```json
{
    "require": {
        "kriswallsmith/buzz": "~0.10",
        "guzzle/guzzle": "~3.7",
        "guzzlehttp/guzzle": "~5.0",
        "guzzlehttp/guzzle": "~6.0"
    }
}
```


# Exemplo de utilização

```php
<?php

require 'vendor/autoload.php';

use Skaisser\Organizze\Adapter\GuzzleHttpAdapter;
use Skaisser\Organizze\Organizze;

// Você precisará do seu e-mail e Chave Api para consumir esta api

$adaptador = new GuzzleHttpAdapter('seuemail@provedor.com', 'chave_api_gerada_pelo_organizze');

// Vamos criar o objeto Organizze com o Adaptador selecionado.
$organizze = new Organizze($adaptador);

// ...
```

Transações (Lançamentos)
-------
```php
// Pegar uma transação especifica por id
$transaction = $organizze->transaction()->getById(:id);

// Criar uma nova Transação | Veja Skaisser/Entity/Transaction para parametros disponiveis.
$transaction = $organizze->transaction()->create(array);

// Modificar uma  Transação | Veja Skaisser/Entity/Transaction para parametros disponiveis.
$account = $organizze->account()->update(:id, array);
```


Contas [ORGANIZZE MAIS OU EMPRESARIAL]
-------

```php
// Pegar todas as Contas
$accounts = $organizze->account()->getAll();

// Pegar uma Conta por id
$account = $organizze->account()->getById(690486);

// Criar uma nova Conta | tipo  disponivel -> Conta Corrente: checking, Conta Poupança: savings, Outros: other
$account = $organizze->account()->create(['name' => 'Banco Itau', 'description' => 'Ag 0123', 'type' => 'checking']);

// Modificar uma Conta | tipo  disponivel -> Conta Corrente: checking, Conta Poupança: savings, Outros: other
$account = $organizze->account()->update(:id, array);
```

Categoria
-------

```php
// ...
// retorna todas as categorias
$category = $organizze->category()->getAll();

// Pegar uma categoria por id
$category = $organizze->category()->getById(:id);

// Excluir uma Categoria
$category = $organizze->category()->deleteById(:id);

// Criar uma nova Categoria
$category = $organizze->category()->create(['name' => 'Nome Categoria']);

// Criar uma nova SubCategoria [REQUER ORGANIZZE MAIS OU EMPRESARIAL]
$category = $organizze->category()->create(['name' => 'Nome Subcategoria', 'parent_id' => 'idCategoriaPai']);

// Atualize uma Categoria
$category = $organizze->category()->update(:idCategoria, ['name' => 'Novo Nome']);

// Atualize uma Subcategoria  (alterando a categoria pai)
$category = $organizze->category()->update(:idCategoria, ['parent_id' => 'idCategoriaPai']);

````


Créditos
-------

* [Shirleyson Kaisser](https://twitter.com/skaisser)
* [Graham Campbell](https://twitter.com/GrahamCampbell)


* Esta biblioteca foi feita com base na API DigitalOcean disponível [neste link](https://github.com/toin0u/DigitalOcean)





