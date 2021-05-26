<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# ЗАДАНИЕ
В системе есть два типа пользователей:

- Обычный пользователь
- Администратор

## Написать следующие роуты АПИ

### 1. Для пользователя

- Роут для получения списка новостей. Принимает строку поиска в качестве фильтра. Список возвращаемых полей: title, updated_at
- Роут для получение конкрутной новости. Список возвращаемых полей: title, body, updated_at

### 2. Для администратора

- Роут для получения списка новостей. Принимает строку поиска в качестве фильтра. Список возвращаемых полей: title, updated_at, status (строка)
- Роут для получение конкрутной новости. Список возвращаемых полей: title, body, status, updated_at
- Роут для добавления новости. Список принимаемых полей: title, body
- Роут для изменения статуса. Принимает строку status.

### Дополнительные задачи:

1. Разделить права для роутов через middleware, если пользователь захочет получить доступ к роутам админа, то ему должна вернуться ошибка 403
2. Использование реквестов для валидировании данных
3. Покрыть код тестами.

## Порядок действий:
git clone https://github.com/AnotherOneGit/expert-dollop.git
cd expert-dollop
cp .env.example .env
php artisan key:generate
Создать БД, указать название, логин, пароль в .env
php artisan migrate
php artisan db:seed
php artisan serve
http://127.0.0.1:8000/api/news

При тестировании через Postman - взять нужный api_token из таблицы users (в зависимости от is_admin) и подставить в Auth-Bearer Token. 

- GET|HEAD  | api/news        | news.index   | App\Http\Controllers\NewsController@index 
- POST      | api/news        | news.store   | App\Http\Controllers\NewsController@store
- GET|HEAD  | api/news/{news} | news.show    | App\Http\Controllers\NewsController@show
- PUT|PATCH | api/news/{news} | news.update  | App\Http\Controllers\NewsController@update
