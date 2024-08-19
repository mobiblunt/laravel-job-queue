# Submission API

This project implements a simple API for handling submissions.

## Setup

1. Clone the repository
2. Run `composer install`
3. Copy `.env.example` to `.env` and configure your database
4. Run `php artisan key:generate`
5. Run `php artisan migrate`
6. Configure your queue driver in `.env` (recommend using `database`)
7. Run `php artisan queue:work` to start processing jobs

## Testing the API

You can test the API using curl or a tool like Postman:

```bash
curl -X POST http://your-app-url/api/submit \
     -H "Content-Type: application/json" \
     -d '{"name":"John Doe","email":"john@example.com","message":"Test message"}'