# ShortenerLaravelGraphQL

ShortenerLaravelGraphQL is a GraphQL-based web service developed using PHP 8.2 and Laravel 10. This project aims to provide a URL shortening service with a GraphQL API interface, making it easy to create short links and retrieve original URLs using GraphQL queries.

## Features

- URL shortening: Generate short URLs from long URLs.
- URL redirection: Redirect short URLs to their original long URLs.
- GraphQL API: Intuitive API for creating short links and retrieving original URLs.

## Prerequisites

Before you begin, ensure you have met the following requirements:

- PHP 8.2 installed on your system.
- Composer installed to manage PHP dependencies.
- Laravel 10 installed globally or within the project.

## Installation

Clone this repository to your local machine:

```bash
git clone https://github.com/BaseMax/ShortenerLaravelGraphQL.git
```

Navigate to the project directory:

```bash
cd ShortenerLaravelGraphQL
```

Install the required dependencies using Composer:

```bash
composer install
```

Copy the `.env.example` file and rename it to `.env`:

```bash
cp .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

Configure your database connection in the `.env` file.

Run database migrations:

```bash
php artisan migrate
```

Start the Laravel development server:

```bash
php artisan serve
```

Visit `http://localhost:8000` in your web browser to access the GraphQL playground.

## Usage

ShortenerLaravelGraphQL provides a GraphQL API endpoint for creating short links and redirecting to the original URLs. You can interact with the API using a GraphQL client or the built-in GraphQL playground.

## GraphQL


## Contributing

Contributions are welcome! If you'd like to contribute to ShortenerLaravelGraphQL, please follow these steps:

- Fork the repository.
- Create a new branch for your feature or bug fix.
- Make your changes and commit them.
- Push your changes to your fork.
- Submit a pull request to the main branch of the original repository.

## License

This project is licensed under the GPL-3.0 License.

Copyright 2023, Max Base
