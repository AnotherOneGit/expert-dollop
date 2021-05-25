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
