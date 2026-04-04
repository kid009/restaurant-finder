# Restaurant Finder API

A Laravel-based backend for searching restaurants with keyword search and intelligent caching.

## Features

- **Restaurant Search**: Search for restaurants by name.
- **Default Location**: Defaults to "Bang Sue" if no keyword is provided.
- **Caching**: Search results are cached for 1 hour to improve performance.
- **API Documentation**: Fully documented with Swagger/OpenAPI.
- **RESTful API**: Clean API endpoints for restaurant management.

## Prerequisites

- PHP ^8.3
- Composer
- Node.js & NPM
- MySQL or SQLite (Database)
- Redis (Optional, for caching)

## Setup Instructions

1. **Clone the repository** (if applicable)

2. **Install PHP dependencies**:

    ```bash
    composer install
    ```

3. **Install JS dependencies**:

    ```bash
    npm install
    ```

4. **Environment Setup**:

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

    _Note: Update your `.env` file with your database and cache configurations._

5. **Run Migrations & Seeders**:

    ```bash
    php artisan migrate --seed
    ```

6. **Generate API Documentation**:

    ```bash
    php artisan l5-swagger:generate
    ```

7. **Start the Development Server**:
    ```bash
    npm run dev
    ```
    _This command runs the Laravel server, queue listener, and Vite simultaneously._

## API Endpoints

### Restaurants

- `GET /api/restaurants`: List restaurants. Use `?keyword=...` to search.

#### Restaurant Schema

| Property               | Type     | Description              |
| ---------------------- | -------- | ------------------------ |
| `id`                   | Integer  | Unique identifier        |
| `restaurant_name`      | String   | Name of the restaurant   |
| `restaurant_latitude`  | Float    | Latitude coordinate      |
| `restaurant_longitude` | Float    | Longitude coordinate     |
| `restaurant_address`   | String   | Full address             |
| `restaurant_province`  | String   | Province/City            |
| `created_at`           | DateTime | Timestamp of creation    |
| `updated_at`           | DateTime | Timestamp of last update |

## Documentation

Once the server is running, you can access the interactive Swagger documentation at:
[http://localhost:8081/api/documentation](http://localhost:8081/api/documentation)

## Project Structure

- `app/Http/Controllers/Api/RestaurantController.php`: Handles API requests.
- `app/Services/RestaurantService.php`: Contains the business logic for searching and caching.
- `app/Models/Restaurant.php`: The Restaurant model.
- `routes/api.php`: API route definitions.
