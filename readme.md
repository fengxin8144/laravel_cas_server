# CAS Server for Laravel
### copy to fengxin8144/laravel_cas_server
laravel_cas_server is a Laravel package that implements the server part of [CAS protocol](https://apereo.github.io/cas/4.2.x/protocol/CAS-Protocol-Specification.html) v1/v2/v3.


[![Latest Version](http://img.shields.io/github/release/fengxin8144/laravel_cas_server.svg)](https://github.com/fengxin8144/laravel_cas_server/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg)](LICENSE)
[![Build Status](https://img.shields.io/travis/fengxin8144/laravel_cas_server/master.svg)](https://travis-ci.org/fengxin8144/laravel_cas_server)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/fengxin8144/laravel_cas_server/master.svg)](https://scrutinizer-ci.com/g/fengxin8144/laravel_cas_server/code-structure)
[![Total Downloads](https://img.shields.io/packagist/dt/fengxin8144/laravel_cas_server.svg)](https://packagist.org/packages/fengxin8144/laravel_cas_server)

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
