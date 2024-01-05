## Book Manager

A Laravel-based project designed to efficiently manage and organize book-related information through a structured database system and an API for book lists.

## Installation

(1) Installing dependencies

```bash
  composer install
```

```bash
  npm install
```

(2) Migration and seeding

Configure your database in the .env file.otherwise copy .env.example .

Then, run the following command -

```bash
 php artisan migrate —seed
```

(3) Run the project

```bash
  php artisan serve
```

```bash
  npm run dev
```

Done!! The application should now be running on your localhost at port 8000.

## Accounts

User Account

-   lpp001@gmail.com

    Default password is "asdffdsa".

    Or just register to create a user account.
    Or Login if you have been created an account.

## Language

PHP, MySQL

## Tech Stack

Laravel Framework

## Features

-   New Book create form
-   Book Edit and Delete form
-   Book Listing Page
-   Book List json api
-   Authentication & Authorization
-   Alert Manager

### API Endpoint for Book List (GET)

To retrieve the list of books in JSON format, use the following API endpoint:

```http
  http://127.0.0.1:8000/api/books
```
