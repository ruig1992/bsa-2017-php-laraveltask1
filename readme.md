Binary Studio Academy PHP 2017
====

### Домашнее задание Laravel 5

#### Требования
Разработать небольшое приложение, используя фреймворк Laravel.

***

#### Установка

Установка показана в рабочем окружении OS Linux:

```bash
git clone https://pavel_nemchenko@bitbucket.org/pavel_nemchenko/bsa-2017-php-laraveltask1.git
cd bsa-2017-php-laraveltask1
composer install
```

Также рекомендуется использовать Homestead для поднятия приложения.

#### Задания


##### Задание 1

* Зарегистрировать `RandomGenerator` в сервис контейнере Laravel

* Реализовать интерфейс `CarSharing` в классе `CarSharingService` 

* Зарегистрировать `CarSharing` в сервис контейнере Laravel

***

##### Задание 2

* Реализовать маршрут `/cars` в файле `routes/web.php` 
    * вернуть список всех авто в формате json 

* Реализовать маршрут `/cars/random` в файле `routes/web.php`
    * получить рандомное авто и отрендерить во view `car.blade.php` 
 
#### Проверка

Cвои решения можно проверить запустив тесты PHPUnit.

Все тесты:

```bash
./vendor/bin/phpunit
```

Или тест для каждого задания в отдельности  

```bash
./vendor/bin/phpunit --testsuite task1
```

#### Приём решений

В идеале разместить ваше решение в одельном репозитории или форке текущего на Github или Bitbucket
и прислать ссылку на него.
