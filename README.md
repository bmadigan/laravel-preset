# Laravel Preset

First off, thanks to TJ Miller who provided the initial core for this preset.

You can view his excellent preset at: https://github.com/sixlive/laravel-preset

## Overview
### Composer Packages
- [bensampo/laravel-enum](https://github.com/BenSampo/laravel-enum) - optional
- [silber/bouncer:v1.0.0-rc.4](https://github.com/JosephSilber/bouncer) - optional
- [sentry/sentry-laravel](https://github.com/getsentry/sentry-laravel) - optional
- [dyrynda/laravel-model-uuid](https://github.com/michaeldyrynda/laravel-model-uuid) - optional
- [sempro/phpunit-pretty-print](https://github.com/sempro/phpunit-pretty-print) (dev)
- [sensiolabs/security-checker](https://github.com/sensiolabs/security-checker) (dev)

### Stubs
- `phpunit.xml`
    - Adds `APP_KEY`
    - Configures sqlite in-memory database
- `app/Models/Model.php` - A base model setup to bypass mass assignment
- `views/layouts/app.blade.php` - A default Tailwind layout with an `svg` and `partials` folder
- `Acme app` - A simple default Laravel/Vue crud healthcare/patient app (only if you installed it)
- `.docker/` and `docker-compose.yml`
    - A simple docker development configuration
- `database/seeds/BouncerSeeder.php` - Bouncer permissions seeder (only if you included the package)
- `.php_cs`
- `.editorconfig`

### ENV Changes
- Changes `DB_PORT` to match the docker configuration for `.env` and `.env.example`
- Adds docker configuration to `.env` and `.env.example`
- Adds `SENTRY_DSN` to `.env` and `.env.example` (only if you included the package)

### Tailwindcss
- Adds these node packages:
    - laravel-mix-purgecss:^2.2.0
    - postcss-nesting:^5.0.0
    - postcss-import:^11.1.0
    - tailwindcss:>=0.6.1
- Removes the `sass` directory
- Removes `app.css`
- Publishes
    - Tailwind `app.css` template
    - An updated welcome blade template
    - An updated `webpack.mix.js`

## Installation
**Note:** It is assumed that this is being ran on a fresh installation of Laravel.

You can install the package via composer:

```bash
> composer require --dev bmadigan/laravel-preset
```

## Usage

```bash
> php artisan preset bmadigan
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
