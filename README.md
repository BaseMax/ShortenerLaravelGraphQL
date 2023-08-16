![Screenshot from 2023-08-15 10-40-05](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/44795a12-1026-4945-810f-f9d427a2dffe)# URL Shortener Laravel GraphQL

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

## Examples:

![Screenshot from 2023-08-15 10-08-58](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/7fe769c4-4438-4b66-8ea8-6251d286f8a4)

![Screenshot from 2023-08-15 10-11-15](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/33361dc4-5a38-48c8-ae6c-465a36ae3799)

![Screenshot from 2023-08-15 10-18-52](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/3f634362-04d5-4999-8387-e9ff215279e1)

![Screenshot from 2023-08-15 10-24-51](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/079f4b64-195b-427e-b7ba-850f2b4fb33f)

![Screenshot from 2023-08-15 10-40-05](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/d301d22e-db6d-40b6-9f4a-344e6bc14be0)

![Screenshot from 2023-08-15 10-52-07](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/10a68317-5247-42ca-b930-c2cffa45ff0c)

![Screenshot from 2023-08-15 10-54-11](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/4f7c948a-b7da-45be-86c0-74e1ac7727ef)

![Screenshot from 2023-08-15 10-55-29](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/513a438f-043c-42b0-90c7-507516a274ad)

![Screenshot from 2023-08-15 11-08-10](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/83194ea4-c5de-499c-97f7-ff1e94598751)

![Screenshot from 2023-08-15 11-09-46](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/41b77b81-078a-4ab2-aa85-592bb02adce9)

![Screenshot from 2023-08-15 11-26-31](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/5352a0e8-1f9b-49c5-b5d6-a76929f803ee)

![Screenshot from 2023-08-15 11-56-28](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/d893b7d7-3883-48e2-bb01-a7b0a019e20b)

![Screenshot from 2023-08-15 11-56-51](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/7dfc74c3-aa90-446a-a5a9-2a0788c76ece)

![Screenshot from 2023-08-15 12-33-33](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/e4afe21e-cf25-4c09-8f44-e7c503ddce0c)

![Screenshot from 2023-08-15 12-34-01](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/7594ea8f-e21a-4075-b8cd-6376e2b03826)

![Screenshot from 2023-08-15 12-48-41](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/35eb1a61-fd91-42a0-9aad-22e7c78d8111)

![Screenshot from 2023-08-15 12-49-14](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/957c5d7d-0748-4783-92c3-08dc126249d4)

![Screenshot from 2023-08-15 12-50-06](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/62f90d5f-2f2f-46af-a8f0-0ffc5debdad4)

![Screenshot from 2023-08-15 12-50-33](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/04822aa7-2b38-4a5f-8853-0538194f4862)

![Screenshot from 2023-08-15 13-13-36](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/3b4abc4a-c7b7-48b9-9e12-30738bc27179)

![Screenshot from 2023-08-15 13-13-56](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/05777409-c771-4c02-a074-0e561a5b5446)

![Screenshot from 2023-08-15 13-14-28](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/da5af46e-6733-45fd-b8bb-955ee6ccb2eb)

![Screenshot from 2023-08-15 15-38-34](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/7edec46e-e193-4637-88fa-e9bd56d3b0ed)

![Screenshot from 2023-08-15 15-41-12](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/2603a187-b937-4bd6-83b9-4060b5508846)

![Screenshot from 2023-08-15 16-05-48](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/7cf12205-8c26-4b0d-a416-878a5d5af754)

![Screenshot from 2023-08-15 16-25-35](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/f102080a-a20c-4221-89f8-c7d9056069c8)

![Screenshot from 2023-08-15 16-28-03](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/3a965de4-5cc0-4733-806b-da177add8e7d)

![Screenshot from 2023-08-15 17-05-20](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/5b1cf1a5-cbd8-4554-a396-0643d9a3796c)

![Screenshot from 2023-08-15 17-07-17](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/33479691-f8e0-4418-b4f9-442ffd2a8673)

![Screenshot from 2023-08-15 17-24-16](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/90161c2a-6c58-4fc8-a895-ff08fe2ddd44)

![Screenshot from 2023-08-15 17-51-41](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/4f5d4ef4-1021-4e39-a8e9-05133193f9f3)

![Screenshot from 2023-08-15 18-11-27](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/381e53b0-42a5-4acf-ae85-beb29351c7de)

![Screenshot from 2023-08-15 18-26-36](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/c07f19e0-2e74-4b66-bd3b-0f5e0c63b445)

![Screenshot from 2023-08-15 18-32-04](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/e09886d9-7dd7-4975-b912-a7b94fc16b8e)

![Screenshot from 2023-08-15 18-33-24](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/4ac52d22-f703-4ea3-a472-d5ec24d1966f)

![Screenshot from 2023-08-15 20-11-57](https://github.com/BaseMax/ShortenerLaravelGraphQL/assets/107758775/030de49c-a079-40bd-a518-ecf8e7d85f6d)


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
