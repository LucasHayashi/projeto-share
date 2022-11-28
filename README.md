## Sobre
Este é o projeto de conclusão de curso do CTI Unesp desenvolvido por meu grupo.
O projeto Share é um ecossistema que permite projetos sociais criar e gerenciar campanhas de doações. Os usuários podem interagir com as campanhas através de um mapa interativo e também realizar doações.

## Instalação

Para utilização do software é necessário instalar os programas abaixo

* [Versão mais recente do Git](https://git-scm.com/downloads)
* [composer ^2.4](https://getcomposer.org/)
* [XAMPP ^8.1 / ^PHP 8.1](https://www.apachefriends.org/pt_br/)

Depois da instalação do XAMPP, é necessário habilitar a extesão GD no arquivo **php.ini** seguindo o passo a passo abaixo:

1. Inicie o XAMPP, procure por **Apache -> Config**
2. Clique na opção **PHP (php.ini)**
3. Remova o **;** da linha: **;extension=gd** e salve o arquivo.

## Clonando o projeto

É necessário clonar os arquivos do projeto, para isso escolha um diretório de sua preferência, abra o terminal do git execute o comando abaixo:
```
git clone https://github.com/LucasHayashi/projeto-share.git
```

## Configurações do projeto

Depois que o repositório estiver clonado, é necessário instalar as dependências do projeto. Navegue até a pasta raiz do projeto, e digite na linha de comando `composer update`

Como o projeto faz o uso de um provedor de e-mail, banco de dados, servidor FTP e autorizadores do Github e do Google, é necessário configurar algumas credenciais para que a aplicação possa funcionar corretamente. Disponibilizamos o arquivo **.env.example** para que você tenha uma ideia de como configurá-lo. Lembre-se é necessário criar um o arquivo **.env** na raiz do projeto com todas as informações do arquivo **.env.example**.

## Iniciando o projeto

Para iniciar o projeto é necessário rodar os comandos abaixo na linha de comando ao menos uma vez, exceto o `php artisan serve` que sempre deve ser executado para iniciar a aplicação.

~~~PHP
php artisan route:clear
php artisan key:generate
php artisan db:seed
php artisan serve
~~~
