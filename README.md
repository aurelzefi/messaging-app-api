# Messaging App API

## Setup

Run the following artisan commands:
```
php artisan key:generate
php artisan storage:link
php artisan migrate --seed
```

Set `BROADCAST_DRIVER=pusher` in the `.env` file. 

Also set the values for the pusher configuration:

```dotenv
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
