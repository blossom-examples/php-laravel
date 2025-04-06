# PHP Laravel Tutorial Deploy on Blossom

A ready-to-deploy PHP Laravel app to get you started quickly on [Blossom](https://blossom-cloud.com).

## Quick Start

```bash
# Install dependencies
composer install

# Set up environment
cp .env.example .env
php artisan key:generate

# Run migrations and seed the database
php artisan migrate --seed

# Run the app
php artisan serve
```

Visit `http://localhost:8000` in your browser to see the demo application.

## Building for Production

Before deploying, you need to build the frontend assets:

```bash
# Install Node.js dependencies
npm install

# Build frontend assets
npm run build
```

The built assets will be in the `public/build` directory. Make sure to commit these files to your repository as they are required for production deployment.

## Features

- Joke management system (create, read, update, delete)
- Random joke generator
- Modern UI with Tailwind CSS
- Ready for production deployment

<details>
<summary>Additional Information</summary>

### Environment Variables
- `APP_NAME`: Application name (default: Laravel)
- `APP_ENV`: Environment (local, production)
- `APP_DEBUG`: Enable debug mode (true/false)
- `DB_CONNECTION`: Database connection (pgsql, mysql, sqlite)
- `DB_HOST`: Database host
- `DB_PORT`: Database port
- `DB_DATABASE`: Database name
- `DB_USERNAME`: Database username
- `DB_PASSWORD`: Database password

### API Endpoints
```bash
# Get all jokes
curl http://localhost:8000/api/jokes

# Get a random joke
curl http://localhost:8000/api/jokes/random

# Create a new joke
curl -X POST -H "Content-Type: application/json" \
     -d '{"content":"Why did the scarecrow win an award? Because he was outstanding in his field!","author":"Farm Humor","category":"dad jokes"}' \
     http://localhost:8000/api/jokes
```
</details>
