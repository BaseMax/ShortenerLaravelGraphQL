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

| Query/Mutation       | Description                                        |
|----------------------|----------------------------------------------------|
| `allLinks`           | Get a list of all short links.                    |
| `link`               | Get details of a specific short link.             |
| `redirectLink`       | Redirect a short link to its original URL.        |
| `createShortLink`    | Create a new short link.                          |
| `updateShortLink`    | Update details of an existing short link.        |
| `deleteShortLink`    | Delete a short link.                              |
| `allUsers`           | Get a list of all users.                          |
| `user`               | Get details of a specific user.                   |
| `createUser`         | Create a new user.                                |
| `updateUser`         | Update details of an existing user.              |
| `deleteUser`         | Delete a user.                                    |
| `linkVisitStats`     | Get statistics for visits to a short link.       |
| `userLinkStats`      | Get statistics for a user's short links.         |
| `topVisitedLinks`    | Get a list of top visited short links.           |
| `searchLinks`        | Search for short links based on criteria.       |
| `createUserSession`  | Create a new user session.                        |
| `deleteUserSession`  | Delete a user session.                            |
| `createBookmark`     | Create a bookmark for a user.                   |
| `deleteBookmark`     | Delete a user's bookmark.                        |
| `likeLink`           | Like a short link.                               |
| `unlikeLink`         | Remove a like from a short link.                |
| `addComment`         | Add a comment to a short link.                   |
| `updateComment`      | Update a comment on a short link.               |
| `deleteComment`      | Delete a comment from a short link.              |
| `rateLink`           | Rate a short link.                               |
| `updateRating`       | Update a user's rating for a short link.        |
| `deleteRating`       | Delete a user's rating for a short link.        |
| `flagLink`           | Flag a short link for review.                   |
| `unflagLink`         | Remove a flag from a short link.                |
| `reportLink`         | Report an issue with a short link.              |
| `createCategory`     | Create a new category for short links.          |
| `updateCategory`     | Update details of an existing category.        |
| `deleteCategory`     | Delete a category.                               |
| `addLinkToCategory`  | Add a short link to a category.                 |
| `removeLinkFromCategory` | Remove a short link from a category.         |
| `searchCategories`   | Search for categories based on criteria.       |
| `createTag`          | Create a new tag for short links.               |
| `updateTag`          | Update details of an existing tag.             |
| `deleteTag`          | Delete a tag.                                     |
| `addTagToLink`       | Add a tag to a short link.                      |
| `removeTagFromLink`  | Remove a tag from a short link.                 |
| `searchTags`         | Search for tags based on criteria.             |
| `createReport`       | Create a new report for a short link.           |
| `updateReport`       | Update details of an existing report.         |
| `deleteReport`       | Delete a report.                                 |
| `approveLink`        | Approve a flagged short link.                   |
| `rejectLink`         | Reject a flagged short link.                     |

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
