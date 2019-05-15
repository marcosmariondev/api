### Passos
- composer install
- cp .env.example .env
- Alterar banco de dados no .env
- php artisna key:generate
- php artisan migrate --seed
- php artisan passport:keys
- php artisan passport:client --personal
