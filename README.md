# Messaging App API

The API for a messaging app.

## Setup

Run the following commands:
```
composer install

cp .env.example .env

php artisan key:generate
php artisan storage:link
php artisan migrate --seed
```

Change the broadcasting configuration for pusher, the values don't matter as long as they match in the client application:

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

A video demo of this application can be found [here](https://drive.google.com/file/d/1G0NZVWJtFT6yWCDJDBD2DmPkLSnx-JvA/view?usp=sharing).
