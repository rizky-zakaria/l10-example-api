## Clone Project

```bash
git clone https://github.com/rizky-zakaria/l10-example-api.git
```

## Instalasi Project

```bash
composer install
```

```bash
php artisan key:generate
```

## Setup Database

```bash
cp .env.example .env
```

```bash
nano .env
```

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database-anda
DB_USERNAME=usernama-database-anda
DB_PASSWORD=password-database-anda
```

```bash
php artisan migrate
```

```bash
php artisan db:seed
```
