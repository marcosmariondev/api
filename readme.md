#API
Este repositório contém uma simples API para o desafio de backend do BossaBox.


##Como executar
- Faça o clone/download deste repositório.
- composer install
- cp .env.example .env
- Alterar banco de dados no .env
- php artisna key:generate
- php artisan migrate --seed
- php artisan passport:keys
- php artisan passport:client --personal
- Start em uma porta personalizada: acesse o diretorio /public depois execute o comando no terminal "php -S 0.0.0.0:3000"

## Documentação

 - Api /docs

