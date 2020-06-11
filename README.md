<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Olá,

Muito obrigado pela oportunidade.

O presente projeto tem as seguintes funcionalidade implementadas.

Para usuários 

Cadastro de Usuário
Login de usuário
Redefinição de senha

Para o que foi pedido

Foi criado uma parte Web

Registro de filme
Alterações no registro do filme
Exclusão de filme

A parte principal com API

Criação
Exibição
Alteração
Exclusão

O sistema tem duas linha de desenvolvimento, uma web e outra usando API. Para esse projeto foi usado MySQL com PHPmyAdmin para o banco de dados relacionado, mas pode ser utilizado outros também. É para salienta foi desenvolvido no LInux Ubuntu.

Esse é o endereço da documentação do Front-And:

https://material-dashboard-laravel.creative-tim.com/docs/getting-started/laravel-setup.html?_ga=2.264974029.310902578.1591838914-1595982657.1591838914

No interface do sistema foi utilizado uma template livre da Material Dashboard Laravel, com ela foi montado o sistema de login e o Dashboard  da aplicação.

O projeto está no git então os passo a seguir são essenciais:

Após baixar o projeto será preciso executar dentro da pasta do projeto:

composer update

e depois 

composer dump-autoload

em seguida configurar o banco de dados, que está no arquivo  .envi. Altere essas opções no aquivos 

DB_DATABASE=Nome do Banco de dados (eu usei magic)
DB_USERNAME=Usuario
DB_PASSWORD=senha

O passo seguinte são as execuções da migretions

php artisan migrate

É para executar o servidor

php artisan serve

________________________________________________________________________

API

No postman você pode criar uma workspace, adicionar coleções com:

GET

Esse caminho e para exibir
URL ->  http://localhost:8000/api/apiFilme/

POST

Esse caminho e para inserir um novo dado
URL->http://localhost:8000/api/apiFilme/store
Nesse caso você deve preencher as campos na seção body

POST

Para alterar os dados
http://localhost:8000/api/apiFilme/id
Para esse você deve alterar os dados na seção parâmetros 


DELETE

É para deletar
URL->http://localhost:8000/api/apiFilme/id


