# Desafio: Gerenciamento de Produtos e Categorias

# Descrição:

O arquivo produtos.csv contém informações sobre diversos produtos organizados em colunas com os seguintes dados:

1. Categoria: Tipo do produto (ex.: "Eletrônicos", "Móveis", "Livros").
2. Nome: Nome do produto (ex.: "Smartphone", "Sofá", "Romance Clássico").
3. Preço: Preço do produto em formato numérico (ex.: 499.99, 1200.00).

Você deve criar um sistema que:

1. Implemente uma classe abstrata Produto com propriedades protegidas:

- categoria
- nome
- preco

2. Esta classe deve incluir:

- Um construtor que recebe as linhas do arquivo CSV para inicializar as propriedades.
- Um método get_categoria() para obter a categoria.
- Um método abstrato exibir_detalhes(), que será implementado pelas subclasses.

3. Crie 3 classes derivadas de Produto:

- Eletronico: Implementa o método exibir_detalhes() para retornar uma string como:
"Produto: Smartphone, Categoria: Eletrônicos, Preço: R$499.99."
- Movel: Implementa o método exibir_detalhes() para retornar uma string como:
"Produto: Sofá, Categoria: Móveis, Preço: R$1200.00."
- Livro: Implementa o método exibir_detalhes() para retornar uma string como:
"Produto: Romance Clássico, Categoria: Livros, Preço: R$39.90."

4. Leia o arquivo produtos.csv e crie um array de objetos produtos, onde cada linha do CSV será um objeto da classe correspondente (baseado na categoria).

5. No final, apresente os produtos em um layout HTML:

- Cada categoria de produto deve ser apresentada com um título
- Os produtos pertencentes àquela categoria devem ser listados abaixo em uma lista não ordenada 

# Requisitos adicionais:

- O código deve tratar possíveis erros no arquivo CSV, como linhas inválidas ou campos ausentes.
- Garanta que os produtos sejam exibidos ordenados pelo preço dentro de cada categoria (do menor para o maior).
- O layout HTML deve ser minimalista e bem estruturado.
Boa sorte! 😊