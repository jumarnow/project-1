
# Laravel REST API Application
## Instalation

- Clone the repository:

    git clone https://github.com/jumarnow/project-1.git
- Change into the project directory:

    cd project-1
- Install the required packages:

    composer install
- Create a .env file by copying the example:

    cp .env.example .env
- Generate a unique application key:

    php artisan key:generate
- Configure the database connection in the .env file:

    DB_CONNECTION=mysql

    DB_HOST=127.0.0.1

    DB_PORT=3306

    DB_DATABASE=your_database_name

    DB_USERNAME=your_database_username
    
    DB_PASSWORD=your_database_password
- Migrate and seed the database:

    php artisan migrate --seed
    
## Usage
- Start the server:

    php artisan serve

- Open a web browser and navigate to http://localhost:8000 to verify that the application is running.
