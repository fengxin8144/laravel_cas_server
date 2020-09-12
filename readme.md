# CAS Server for Laravel
### copy to fengxin8144/laravel_cas_server



## Requirements

- PHP >=7.0

## Installation && Usage

- `composer require fengxin8144/laravel_cas_server`
- <del>add `fengxin8144\CAS\CASServerServiceProvider::class` to the `providers` field in `config/app.php`</del>
- `php artisan vendor:publish --provider="fengxin8144\CAS\CASServerServiceProvider"`
- modify `config/cas.php`, fields in config file are all self-described
- `php artisan migrate`
- make your `App\User` implement `fengxin8144\CAS\Contracts\Models\UserModel`
- create a class implements `fengxin8144\CAS\Contracts\TicketLocker`
- create a class implements `fengxin8144\CAS\Contracts\Interactions\UserLogin`
- visit `http://your-domain/cas/login` to see the login page (assume that you didn't change the `router.prefix` value in `config/cas.php`)

## Example

If you are looking for an out of box solution of CAS Server powered by PHP, you can check [php_cas_server](https://github.com/fengxin8144/php_cas_server)
