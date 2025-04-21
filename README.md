# Laravel Livewire Project Setup

## Setup Commands

```bash
# Copy environment file
cp .env.example .env

# Install dependencies
composer install
npm install

# Generate application key
php artisan key:generate

# Create SQLite database
touch database/database.sqlite

# Run migrations
php artisan migrate

# Start the server
php artisan serve
```

## Development

```bash
# Run both commands in separate terminals
php artisan serve
npm run dev
```
