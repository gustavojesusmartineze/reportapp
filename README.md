# Report App with Laravel and Angular

The new tool is going to be a report which lists all the invoices assigned to particular clients. It should have a summary with a multiple select clients dropdown filter and a "go" button. At the beginning all the invoices for all clients would be listed. Once the user selects the clients on the dropdown and clicks the go button, the summary should filter the invoices belonging to those clients.


**Prerequisites:** PHP, Node, MySQL

## Getting Started

Clone this project using the following commands:

```
git clone git@github.com:gustavojesusmartineze/reportapp.git
cd report-app
```

### Set up the Backend

Create the database and user for the project:

```
mysql -uroot -p
CREATE DATABASE reportapp CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
GRANT ALL on reportapp.* to root@127.0.0.1 identified by 'reportapp';
quit
```

Copy the example `.env` file:

```
cd backend
cp .env.example .env
```

Put the database details in the `.env` file:

```
DB_DATABASE=reportapp
DB_USERNAME=reportapp
DB_PASSWORD=reportapp
```

Install the project dependencies, generate a project key, run the migrations and then start the server:

```
composer install
php artisan migrate
php artisan serve
```
