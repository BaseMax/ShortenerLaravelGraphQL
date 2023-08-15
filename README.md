# URL Shortener Laravel GraphQL

ShortenerLaravelGraphQL is a GraphQL-based web service developed using PHP 8.2 and Laravel 10. This project aims to provide a URL shortening service with a GraphQL API interface, making it easy to create short links and retrieve original URLs using GraphQL queries.

## Features

- **URL shortening:** Generate short URLs from long URLs.
- **URL redirection:** Redirect short URLs to their original long URLs.
- **GraphQL API:** Intuitive API for creating short links and retrieving original URLs.

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

| Query/Mutation       | Description                                        | Examples                                             |
|----------------------|----------------------------------------------------|------------------------------------------------------|
| `allLinks`           | Get a list of all short links.                    | `{ allLinks { id, short_code, original_url } }`      |
| `link`               | Get details of a specific short link.             | `{ link(id: "abc123") { id, short_code, original_url } }` |
| `redirectLink`       | Redirect a short link to its original URL.        | (N/A)                                                |
| `createShortLink`    | Create a new short link.                          | `{ createShortLink(url: "https://www.example.com") { id, short_code, original_url } }` |
| `updateShortLink`    | Update details of an existing short link.        | `{ updateShortLink(id: "abc123", original_url: "https://newurl.com") { id, short_code, original_url } }` |
| `deleteShortLink`    | Delete a short link.                              | `{ deleteShortLink(id: "abc123") }`                 |
| `allUsers`           | Get a list of all users.                          | `{ allUsers { id, username, email } }`              |
| `user`               | Get details of a specific user.                   | `{ user(id: "user123") { id, username, email } }`   |
| `createUser`         | Create a new user.                                | `{ createUser(username: "newuser", email: "new@example.com") { id, username, email } }` |
| `updateUser`         | Update details of an existing user.              | `{ updateUser(id: "user123", email: "updated@example.com") { id, username, email } }` |
| `deleteUser`         | Delete a user.                                    | `{ deleteUser(id: "user123") }`                    |
| `linkVisitStats`     | Get statistics for visits to a short link.       | `{ linkVisitStats(shortCode: "abc123") { total_visits, unique_visits } }` |
| `userLinkStats`      | Get statistics for a user's short links.         | `{ userLinkStats(userId: "user123") { total_links, total_visits } }` |
| `topVisitedLinks`    | Get a list of top visited short links.           | `{ topVisitedLinks(limit: 10) { id, short_code, original_url, total_visits } }` |
| `searchLinks`        | Search for short links based on criteria.       | `{ searchLinks(keyword: "example", limit: 5) { id, short_code, original_url } }` |
| `createUserSession`  | Create a new user session.                        | `{ createUserSession(userId: "user123") { id, token, created_at } }` |
| `deleteUserSession`  | Delete a user session.                            | `{ deleteUserSession(sessionId: "sess123") }`       |
| `createBookmark`     | Create a bookmark for a user.                   | `{ createBookmark(userId: "user123", linkId: "abc123") { id, user_id, link_id } }` |
| `deleteBookmark`     | Delete a user's bookmark.                        | `{ deleteBookmark(userId: "user123", linkId: "abc123") }` |
| `likeLink`           | Like a short link.                               | `{ likeLink(userId: "user123", linkId: "abc123") { id, user_id, link_id } }` |
| `unlikeLink`         | Remove a like from a short link.                | `{ unlikeLink(userId: "user123", linkId: "abc123") }` |
| `addComment`         | Add a comment to a short link.                   | `{ addComment(userId: "user123", linkId: "abc123", text: "Great link!") { id, user_id, link_id, text } }` |
| `updateComment`      | Update a comment on a short link.               | `{ updateComment(commentId: "comm123", text: "Updated comment.") { id, user_id, link_id, text } }` |
| `deleteComment`      | Delete a comment from a short link.              | `{ deleteComment(commentId: "comm123") }`          |
| `rateLink`           | Rate a short link.                               | `{ rateLink(userId: "user123", linkId: "abc123", rating: 4) { id, user_id, link_id, rating } }` |
| `updateRating`       | Update a user's rating for a short link.        | `{ updateRating(userId: "user123", linkId: "abc123", rating: 5) { id, user_id, link_id, rating } }` |
| `deleteRating`       | Delete a user's rating for a short link.        | `{ deleteRating(userId: "user123", linkId: "abc123") }` |
| `flagLink`           | Flag a short link for review.                   | `{ flagLink(userId: "user123", linkId: "abc123", reason: "Inappropriate content") { id, user_id, link_id, reason } }` |
| `unflagLink`         | Remove a flag from a short link.                | `{ unflagLink(userId: "user123", linkId: "abc123") }` |
| `reportLink`         | Report an issue with a short link.              | `{ reportLink(userId: "user123", linkId: "abc123", issue: "Broken link") { id, user_id, link_id, issue } }` |
| `createCategory`     | Create a new category for short links.          | `{ createCategory(name: "News") { id, name } }`    |
| `updateCategory`     | Update details of an existing category.        | `{ updateCategory(categoryId: "cat123", name: "Updated Category") { id, name } }` |
| `deleteCategory`     | Delete a category.                               | `{ deleteCategory(categoryId: "cat123") }`         |
| `addLinkToCategory`  | Add a short link to a category.                 | `{ addLinkToCategory(categoryId: "cat123", linkId: "abc123") { id, category_id, link_id } }` |
| `removeLinkFromCategory` | Remove a short link from a category.         | `{ removeLinkFromCategory(categoryId: "cat123", linkId: "abc123") }` |
| `searchCategories`   | Search for categories based on criteria.       | `{ searchCategories(keyword: "news", limit: 3) { id, name } }` |
| `createTag`          | Create a new tag for short links.               | `{ createTag(name: "technology") { id, name } }`    |
| `updateTag`          | Update details of an existing tag.             | `{ updateTag(tagId: "tag123", name: "Updated Tag") { id, name } }` |
| `deleteTag`          | Delete a tag.                                     | `{ deleteTag(tagId: "tag123") }`                   |
| `addTagToLink`       | Add a tag to a short link.                      | `{ addTagToLink(tagId: "tag123", linkId: "abc123") { id, tag_id, link_id } }` |
| `removeTagFromLink`  | Remove a tag from a short link.                 | `{ removeTagFromLink(tagId: "tag123", linkId: "abc123") }` |
| `searchTags`         | Search for tags based on criteria.             | `{ searchTags(keyword: "tech", limit: 2) { id, name } }` |
| `createReport`       | Create a new report for a short link.           | `{ createReport(userId: "user123", linkId: "abc123", issue: "Spam") { id, user_id, link_id, issue } }` |
| `updateReport`       | Update details of an existing report.         | `{ updateReport(reportId: "rep123", issue: "Inaccurate information") { id, user_id, link_id, issue } }` |
| `deleteReport`       | Delete a report.                                 | `{ deleteReport(reportId: "rep123") }`             |
| `approveLink`        | Approve a flagged short link.                   | `{ approveLink(linkId: "abc123") }`                |
| `rejectLink`         | Reject a flagged short link.                     | `{ rejectLink(linkId: "abc123", reason: "Low quality content") }` |
| `createNotification` | Create a new notification for a user.         | `{ createNotification(userId: "user123", message: "New update!") { id, message, created_at } }` |
| `markAsRead`         | Mark a notification as read for a user.       | `{ markAsRead(notificationId: "notif123") }`        |
| `deleteNotification` | Delete a notification for a user.             | `{ deleteNotification(notificationId: "notif123") }` |
| `createSubscription` | Create a subscription for updates.           | `{ createSubscription(userId: "user123") { id, user_id, created_at } }` |
| `cancelSubscription` | Cancel a subscription for a user.             | `{ cancelSubscription(userId: "user123") }`        |
| `updateSettings`     | Update user-specific settings.               | `{ updateSettings(userId: "user123", theme: "dark") }` |
| `resetPassword`      | Initiate the password reset process.         | `{ resetPassword(email: "user@example.com") }`      |
| `changePassword`     | Change the user's password.                  | `{ changePassword(userId: "user123", newPassword: "newpass123") }` |

## Database Scheme

### Table: users
- `id` (Primary Key)
- `username` (Unique)
- `email` (Unique)
- `password`
- `created_at`
- `updated_at`

### Table: links
- `id` (Primary Key)
- `user_id` (Foreign Key to `users`)
- `short_code` (Unique)
- `original_url`
- `total_visits`
- `created_at`
- `updated_at`

### Table: link_likes
- `id` (Primary Key)
- `user_id` (Foreign Key to `users`)
- `link_id` (Foreign Key to `links`)
- `created_at`
- `updated_at`

### Table: link_comments
- `id` (Primary Key)
- `user_id` (Foreign Key to `users`)
- `link_id` (Foreign Key to `links`)
- `text`
- `created_at`
- `updated_at`

### Table: link_ratings
- `id` (Primary Key)
- `user_id` (Foreign Key to `users`)
- `link_id` (Foreign Key to `links`)
- `rating`
- `created_at`
- `updated_at`

### Table: link_flags
- `id` (Primary Key)
- `user_id` (Foreign Key to `users`)
- `link_id` (Foreign Key to `links`)
- `reason`
- `created_at`
- `updated_at`

### Table: link_reports
- `id` (Primary Key)
- `user_id` (Foreign Key to `users`)
- `link_id` (Foreign Key to `links`)
- `issue`
- `created_at`
- `updated_at`

### Table: categories
- `id` (Primary Key)
- `name` (Unique)
- `created_at`
- `updated_at`

### Table: category_links
- `id` (Primary Key)
- `category_id` (Foreign Key to `categories`)
- `link_id` (Foreign Key to `links`)

### Table: tags
- `id` (Primary Key)
- `name` (Unique)
- `created_at`
- `updated_at`

### Table: link_tags
- `id` (Primary Key)
- `tag_id` (Foreign Key to `tags`)
- `link_id` (Foreign Key to `links`)

### Table: notifications
- `id` (Primary Key)
- `user_id` (Foreign Key to `users`)
- `message`
- `read` (Boolean)
- `created_at`
- `updated_at`

### Table: user_sessions
- `id` (Primary Key)
- `user_id` (Foreign Key to `users`)
- `token`
- `created_at`
- `updated_at`

### Table: bookmarks
- `id` (Primary Key)
- `user_id` (Foreign Key to `users`)
- `link_id` (Foreign Key to `links`)

### Table: subscriptions
- `id` (Primary Key)
- `user_id` (Foreign Key to `users`)
- `created_at`
- `updated_at`

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
