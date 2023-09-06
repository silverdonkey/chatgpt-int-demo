
## About this project

The purpose of this demo is to showcase a very simple usage of the new [OpenAI Chat completions API](https://platform.openai.com/docs/guides/gpt/chat-completions-api) and the `gpt-3.5-turbo` model.

If you want to integrate ChatGPT on your company Website or mobile app and provide a Virtual Assistant (ChatGPT bot) to your employees, customers or partners, this is a quick and very simple example of how todo it.

Here is a look at the result:

![](resources/img/chat.png)


### Software stack and setup

* Checkout this repo locally
* This is a Laravel 10 web application
  * Uses OpenAI PHP client (`openai-php/laravel`)
  * Make sure you have Docker Engine installed
* Generate your OpenAI API key and set it (`OPENAI_API_KEY=sk-...`) in the .env file of the project.
* cd into the project directory and start the container: `./vendor/bin/sail up -d`
* Open your browser and go to http://localhost
* Enjoy chatting with your Virtual Assistant ;)

---


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
