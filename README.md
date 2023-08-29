## Technical Specification
- Laravel : 10.20.0
- PHP : 8.2
- JQuery : 3.7.1

## How to Setup
1. Clone the master branch on your local machine
2. Install dependecies. Run the ff command in the project root dir:
    ```
    composer install
    ```
3. Create your own .env file based on .env.example. .env file should be located on the project root dir.

4. Generate your owm app key using this command:
    ```
    php artisan key:generate
    ```
5. Create a database on your MYSQL/MariaDB Service. You can use the name **kangaroo_tracker** as your db name. (based on sample .env)

6. Run the following command to create tables on the db you created:
    ```
    php artisan migrate
    ```
7. To run the application, use this command:
    ```
    php artisan serve
    ```
8. Now you can visit the homepage @ http://127.0.0.1:8000 or on the port you specify

9. If you want to generate 50 dummy data, You can use the seeder I created. Run this ff command:
    ```
    php artisan db:seed
    ```