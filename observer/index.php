<?php

spl_autoload_register(function ($class)
{
   include $class . '.php';
});

$applicant1 = new Applicant('Иван', 'Иванов', 'ivanov@mail.ru', 'стаж работы 3 года и 3 месяца');
$applicant2 = new Applicant('Николай', 'Юдаков', 'yudak@mail.ru', 'стаж работы 10 лет');
$applicant3 = new Applicant('Мария', 'Оскирко', 'baby@yandex.ru', 'стаж работы 1 год');
$applicant4 = new Applicant('Константин', 'Павлов', 'pavlov@gmail.com', 'стаж работы 1 год и 2 месяца');

HandHunter::getInstance()->setAddedjobOpportunity(30);
HandHunter::getInstance()->setAddedjobOpportunity(50);
