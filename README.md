Copy
# ToDo API (Laravel)

Простое REST API для управления задачами с использованием Laravel.

## Установка

1. Клонируйте репозиторий:

git clone https://github.com/DanyaErezer/ToDoAPI.git

cd todo-api

Установите зависимости:
composer install

2. Настройте окружение:


cp .env.example .env

php artisan key:generate

3. Настройте базу данных (SQLite):

4. Запустите миграции и сидеры:

php artisan migrate --seed

5. Запустите сервер:

php artisan serve

6. Протестируйте 

Базовый URL: http://localhost:8000/api

1. Получить все задачи
   
   GET /tasks

2. Получить конкретную задачу
      
      GET /tasks/{id}

3. Создать задачу
   
   POST /tasks

4. Обновить задачу
   
   PUT /tasks/{id}

5. Удалить задачу
   
   DELETE /tasks/{id}

Для тестирование можно использовать Postman - просто импортируйте коллекцию
https://documenter.getpostman.com/view/43517403/2sB2cSfNxj

Или создайте запросы самостоятельно используя примеры выше.
