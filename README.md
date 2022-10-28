<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Sobre

- Este projeto foi criado utilizando o framework Laravel em sua versão 9.
- Consiste em um sistema de assinaturas recorrentes para uma rede de supermercados.
- O propósito deste sistema não é comercial, somente um projeto pessoal a nível de aprendizado \o/.

## Preparação

- Possui o docker instalado
- Possuir Mysql server
- Criar uma base de dados chamada smareserved
- Configure o .env

## Rodando o projeto

- Após clonar execute o seguinte comando
```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
```
- Execute o comando para gerar as tabelas no banco de dados
```
sail artisan migrate
```
- Execute o comando para gerar o usuário para acessar o sistema
```
sail artisan db:seed
```
- Execute o comando para subir o ambiente
```
sail up
```
- Execute o comando para subir a parte do front-end da aplicação
```
npm run dev
```
- Após rodar o seed você pode acessar o sistema com os seguintes dados:
- User: dev@moat.ai
- Pass: 123456789

## Bibliotecas externas utilizadas

- [kitloong](https://github.com/kitloong/laravel-migrations-generator) -
Utilizada para gerar as migrations a partir da leitura base de dados
- [krlove](https://github.com/krlove/eloquent-model-generator) -
Utilizada para gerar as models a partir da base de dados
