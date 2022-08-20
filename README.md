<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Sobre

Este projeto foi criado utilizando o framework Laravel em sua versão 9.
Consiste em um sistema de assinaturas recorrentes para uma rede de mercados.

## Preparação

- Instalar o docker
- Instalar Mysql
- Criar uma base de dados chamada smareserved
- Configure o .env

## Rodando o projeto

- Após clonar execute sail composer install para instalar as dependências 
- Execute o comando sail artisan migrate
- Execute o comando sail artisan db:seed
- Após rodar o seed você pode acessar o sistema com os seguintes dados:
- User: dev@moat.ai
- Pass: 123456789

## Bibliotecas externas utilizadas

- [kitloong](https://github.com/kitloong/laravel-migrations-generator)
- [krlove](https://github.com/krlove/eloquent-model-generator)
