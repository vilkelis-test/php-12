## Подключение к базе данных
```php
R::setup('mysql:host=localhost;dbname=school', 'root', '');
```

## Запрет автосоздания столбцов
```php
R::freeze( TRUE );
```

## Создание новой записи
```php
$course = R::dispense('courses');
...
R::store($course);
```

## Получение всех записей таблицы и обход их
```php
 $courses = R::find('courses');

 foreach ($courses as $course) {
 	...
 }
```

## Изменение записи
```php
$course = R::load('courses',2);
...
R::store($course);
```

## Удаление записи
```php
$course = R::load('courses',2);
R::trash( $course );
```