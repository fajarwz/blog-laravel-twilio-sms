# Sending SMS in Laravel Using Twilio: A Step-by-Step Tutorial
This is an implementation of sending SMS in Laravel using [Twilio](https://twilio.com). A blog about this can be found here: [Sending SMS in Laravel Using Twilio: A Step-by-Step Tutorial | Fajarwz](https://fajarwz.com/blog/sending-sms-in-laravel-using-twilio-a-step-by-step-tutorial/).

## Installation

### Composer Packages 
```
composer install
```

## Configuration

### Create `.env` file from `.env.example`
```
cp .env.example .env
```

### Generate Laravel App Key
```
php artisan key:generate
```

### Configure Your Twilio Settings
Replace the placeholder with your own Twilio settings.

```
# .env
TWILIO_SID=XXXXXXXXXXXX
TWILIO_TOKEN=XXXXXXXXXXXX
TWILIO_FROM=+XXXXXXXXXXXX
```

## Run App
```
php artisan serve
```