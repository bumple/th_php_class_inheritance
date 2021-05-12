<?php
include_once 'Shape.php';

$circle = new Circle('hinh tron',3);
echo 'dien tich hinh tron: '.$circle->calculateArea().'<br>';
echo 'chu vi hinh tron: '.$circle->calculatePerimeter().'<br>';

$cylinder = new Cylinder('hinh tru',3,4);
echo 'dien tich hinh tru: '.$cylinder->calculateArea().'<br>';
echo 'chu vi toan phan: '.$cylinder->calculatePerimeter().'<br>';

$rectangle = new Rectangle('hinh chu nhat', 3, 4);
echo 'dien tich hinh chu nhat: '.$rectangle->calculateArea().'<br>';
echo 'chu vi '.$rectangle->name.' : '.$rectangle->calculatePerimeter().'<br>';

$square = new Square('hinh vuong',4,4);
echo 'dien tich '.$square->name.' : '.$square->calculateArea().'<br>';
echo 'chu vi '.$square->name.' : '.$square->calculatePerimeter().'<br>';
