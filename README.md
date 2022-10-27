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

Loading [127.0.0.1:8000](127.0.0.1:8000) now should show the default Laravel page, and [127.0.0.1:8000/api/](127.0.0.1:8000/api/) will expose our API.

### Set up mysql database with docker
Run with latest mysql image
```
docker run --detach --name=mysqllocalnew --env="MYSQL_ROOT_PASSWORD=mysqllocalnew" --publish 6603:3306 --volume=/root/docker/mysqllocalnew/conf.d:/etc/mysql/conf.d mysql
```

Access container from console
```
docker exec -it mysqllocalnew bash
```

Or you can run it directly
```
mysql -uroot --password=mysqllocalnew --host=127.0.0.1 -P6603 
```

### Set up the Frontend

```
cd frontend
npm install -g @angular/cli
npm install
ng serve -o --port=3500
```

NOTE: if using a virtual machine and NAT, you might need to run the server as `ng serve --open --host 0.0.0.0` instead.

Loading [127.0.0.1:3500](127.0.0.1:3500) now should show you the application.
