# Roadmap Backend Project
https://roadmap.sh/projects/url-shortening-service


# Tech Stack
1. Laravel php framework
2. Sqlite light weight database

# Installation
## Clone this project
```git clone https://github.com/projecthanif/roadmapurlshortner ```

cd roadmapurlshortner
## Install dependencies
```composer install```
## Set up Laravel configurations
```copy .env.example .env``` 
#
```php artisan key:generate```
# Set your database in .env

## Migrate database

```php artisan migrate```
## Serve the application
```php artisan serve```

Create Short URL
Create a new short URL using the POST method

```
POST /api/v1/shorten
{
  "url": "https://www.example.com/some/long/url"
}
```

The endpoint should validate the request body and return a 201 Created status code with the newly created short URL i.e.

```{
  "id": "1",
  "url": "https://www.example.com/some/long/url",
  "shortCode": "abc123",
  "createdAt": "2021-09-01T12:00:00Z",
  "updatedAt": "2021-09-01T12:00:00Z"
}
```

## Retrieve Original URL
Retrieve the original URL from a short URL using the GET method

```
GET /api/v1/shorten/abc123
```
The endpoint should return a 200 OK status code with the original URL i.e.

```
{
  "id": "1",
  "url": "https://www.example.com/some/long/url",
  "shortCode": "abc123",
  "createdAt": "2021-09-01T12:00:00Z",
  "updatedAt": "2021-09-01T12:00:00Z"
}
```

# Update Short URL
Update an existing short URL using the PUT method

```
PUT /api/v1/shorten/abc123
{
  "url": "https://www.example.com/some/updated/url"
}
```

The endpoint should validate the request body and return a 200 OK status code with the updated short URL i.e.

```
{
  "id": "1",
  "url": "https://www.example.com/some/updated/url",
  "shortCode": "abc123",
  "createdAt": "2021-09-01T12:00:00Z",
  "updatedAt": "2021-09-01T12:30:00Z"
}
```
# Delete Short URL
Delete an existing short URL using the DELETE method

```
DELETE /api/v1/shorten/abc123
```
# Get URL Statistics
Get statistics for a short URL using the GET method
```
GET /api/v1/shorten/abc123/stats
```
The endpoint should return a 200 OK status code with the statistics i.e.
```
{
  "id": "1",
  "url": "https://www.example.com/some/long/url",
  "shortCode": "abc123",
  "createdAt": "2021-09-01T12:00:00Z",
  "updatedAt": "2021-09-01T12:00:00Z",
  "accessCount": 10
}
```
## Learn More about about Laravel
<a href="laravel.com">Laravel</a>
