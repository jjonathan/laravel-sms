## Laravel-SMS + Nexmo

Project based on [Sending and Receiving SMS with Laravel and Nexmo](https://laravel-news.com/sending-receiving-sms-laravel-nexmo).

Example of laravel web app to send SMS using Nexmo.

## Using

- Clone the project and use composer update

```
git clone https://github.com/jjonathan/laravel-sms.git 
cd laravel-sms
composer update
```

- Configure your config/nexmo.php file with your credentials api_key and api_secret from https://dashboard.nexmo.com/


```
    /*
    |--------------------------------------------------------------------------
    | API Credentials
    |--------------------------------------------------------------------------
    |
    | If you're using API credentials, change these settings. Get your
    | credentials from https://dashboard.nexmo.com | 'Settings'.
    |
    */

    'api_key' => 'xxxxxx',
    'api_secret' => 'xxxxxx',

```

- Run artisan serve


```
php artisan serve

```

- Access your local url to sms route passing the "to" as parameter with the number (example: http://127.0.0.1:8000/sms?to=1122333333333)
