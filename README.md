# PHP Laravel Tutorial Deploy on Blossom

[![Blossom Badge](https://img.boltops.com/images/blossom/logos/blossom-readme.png)](https://blossom-cloud.com)

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

<details>
<summary>Additional Information</summary>

### Environment Variables

- `APP_ENV`: Environment (local, production)
- `APP_DEBUG`: Enable debug mode (true/false)
- `DATABASE_URL`: Database connection (pgsql, mysql, sqlite). Eg: `postgres://postgres@127.0.0.1:5432/jokes_dev`

## Building Assets for Deployment

Before deploying, you need to build the frontend assets:

```bash
npm install
npm run build
```

The built assets will be in the `public/build` directory. Make sure to commit these files to your repository as they are required for production deployment. Note, the repo already has committed assets. So you only have to rebuild the assets if you have asset changes.

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
