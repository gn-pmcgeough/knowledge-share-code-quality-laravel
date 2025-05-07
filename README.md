# Install First

Laravel Telescope: https://laravel.com/docs/12.x/telescope
```
composer require laravel/telescope
php artisan telescope:install
php artisan migrate
```

Laravel IDE Helper: https://github.com/barryvdh/laravel-ide-helper
```
composer require --dev barryvdh/laravel-ide-helper
```

Larastan: https://github.com/larastan/larastan
```
composer require --dev "larastan/larastan:^3.0"
```

Laravel Pint: https://laravel.com/docs/12.x/pint
```
composer require laravel/pint --dev
```

Pest Type Coverage: https://pestphp.com/docs/type-coverage
```
composer require pestphp/pest-plugin-type-coverage --dev
```

Rector: https://getrector.com/documentation
```
composer require rector/rector --dev
```

## IDE Helper
This adds properties for type hinting for your ide, It is based on the database, just to be aware
To use run whatever your version of docker compose exec api is with `php artisan ide-helper:models -RW -q`

## Automatic Usage
To use run whatever your version of docker compose exec api is with composer test
This will run through the suite in order as defined above
```
        "test": [
            "@test:pest",
            "@test:type-coverage",
            "@test:types",
            "@test:refactor",
            "@test:lint"
        ]
```
It will either pass or fall over in stages

For the first time use it would be best to go through in stages. `docker compose exec api composer test:type-coverage` followed by `docker compose exec api composer test:types`
These two will require manual fixing.

Next is a automatic refactor, you can run `docker compose exec api composer test:refactor` this will show you the changes or run `docker compose exec api composer refactor` to make those changes (you can git diff to see those)

Last is linter, same again an automatic refactor, you can run `docker compose exec api composer test:lint` this will show you the changes or run `docker compose exec api composer lint` to do them.
