# Organizze PHP SDK [WORK IN PROGRESS]
### Biblioteca não oficial PHP para interação com o [Organizze](http://www.organizze.com.br/) 
--------
[Organizze](http://www.organizze.com.br/) é na ***minha opinião*** o melhor sistema de controle financeiro tanto para finanças pessoais quanto a finanças empresariais. 
Venho utilizando a ferramenta desde 2009 e tive a honra de acompanhar de perto a grande evolução por qual a ferramenta tem passado constantemente sem em nenhum momento prejudicar os usuarios.
Essa biblioteca serve para facilitar automação e interação com a plataforma facilitando assim ainda mais sua utilização da plataforma. 

--------

# Example

Category
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






