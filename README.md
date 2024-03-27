# ES2
Repositório para a matéria Engenharia de Software II

### Prof: GLAUCO DE FIGUEIREDO CARNEIRO
### Grupo
       AMANDA LIMA DA SILVA
       ÉVERTON SANTOS DE ANDRADE JUNIOR
       PATRICK AUGUSTO OLIVEIRA PINHEIRO
       PAULINA KAYSE DE ANDRADE SANTOS
       RODRIGO OLIVEIRA SANTOS 

### Site proposto BETH BEE, tem o objetivo de explorar as informações dos dados disponíveis sobre as eleições de 2022 de forma didática e com foco ao nosso estado Sergipe

---

## Setup

    cd "./Beth bee/" && composer install && npm install

    php artisan serve


#### PHP
- ``php --ini`` find where is your ``php.ini``, uncomment the line containing ``extension=pdo_mysql``, to enable object mapping driver;
- ``.env`` <- ``.env.example``

#### Database | MariaDB (MySQL)

- install and login on the database ``mariadb``, see: https://wiki.archlinux.org/title/MariaDB
- ``GRANT ALL PRIVILEGES ON *.* TO 'root'@'localhost' IDENTIFIED BY 'your_password' WITH GRANT OPTION``;
- ``CREATE DATABASE laravel;`` must be the same name in your ``DB_DATABASE`` inside``.env``
- ``USE laravel;``
- ``SOURCE /path/to/your/schema.sql;``


## Useful Commands

- ``php artisan list``
- ``php artisan serve``, start server ``--port=6969`` (optional).
- ``php artisan serve``
