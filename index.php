<?php

require('db.php');

echo '<h2>Создание новой записи</h2>';
$course = R::dispense('courses');
$course->title = "Курс по React";
$course->tuts = 11;
$course->homeworks = 11;
$course->level = "Для новичков";
$course->price = 100;
R::store($course);
echo '<pre>';
print_r($course);
echo '</pre>';


echo '<h2>Все записи</h2>';
$courses = R::find('courses');
foreach ($courses as $course) {
  echo '<pre>';
  print_r( $course );
  echo '</pre>';
  echo '<hr>';
}


echo '<h2>Одна запись</h2>';
$course = R::load('courses', 2);
echo '<pre>';
print_r($course);
echo '</pre>';
echo '<hr>';
 
$course->title = "React - ступень 2-я";
$course->tuts = 20;
$course->price = 199;
R::store($course);
echo '<pre>';
print_r($course);
echo '</pre>';
echo '<hr>';

echo '<h2>Удаление</h2>';
 $course = R::load('courses', 3);
 R::trash( $course );

?>