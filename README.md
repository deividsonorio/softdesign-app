## SoftDesign desafio

Criar uma aplicação web em PHP com acesso restrito, que exiba uma listagem de livros com as opções de ver os detalhes, editar, deletar e criar um livro, e também exiba o clima atual da sua região.

### Requisitos

- **PHP**
- **Docker**
- **Composer**

### Rodando a aplicação


#### Baixar o projeto em uma pasta

~~~bash
https://github.com/deividsonorio/softdesign-app
~~~

#### Instalando dependências

~~~bash
composer install
~~~

#### Subir contâiners docker

~~~bash
./vendor/bin/sail up
~~~

A aplicação poderá ser acessada em:

~~~url
http://localhost
~~~

## Usuário de acesso

Um usuário é criado automaticamente ao iniciar a aplicação:

**Usuário**: test@softdesign.com.br<br>
**Senha**: softdesignpass

## Livros

10 livros de exemplo são criados automaticamente ao iniciar a aplicação para fácil visualização inicial.

## Funcionalidades

- **Aplicação em Docker**
- **Laravel e Sail**
- **Migrations**
- **Testes**
- **Composer**
- **Disponível no Github**
- **Seed de informações iniciais**

### Observações

- O HG Weather tem um limite de consultas de 10 cidades diferentes por dia.
- Caso esse limite seja atingido, ou a cidade não seja encontrada, as informações de São Paulo serão retornadas.

### Funcionalidades que não foram implementadas devido ao tempo

- **README completo com orientações**
- **Maior número de testes**
- **Melhoria no layout**
- **Melhoria na listagem de livros**
- **Melhor integração com HGWeather**
- **Ambientes de dev, homol e prod**
