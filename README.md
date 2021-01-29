# Messaging App API

The API for a messaging app.

## Setup

Run the following artisan commands:
```
php artisan key:generate
php artisan storage:link
php artisan migrate --seed
```

Change the broadcasting configuration for pusher:

```dotenv
BROADCAST_DRIVER=pusher

PUSHER_APP_ID=test-app
PUSHER_APP_KEY=key
PUSHER_APP_SECRET=secret
```

Next, start the websockets server:
```
php artisan websockets:serve
```

## Demo

A video demo of this application can be viewed [here]().
