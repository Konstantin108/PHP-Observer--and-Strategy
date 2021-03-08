<?php

spl_autoload_register(function ($className)
{
    include $className . '.php';
});

$goods = [];
$client = '8(999)940-93-32';

array_push($goods,new Good('Носки спортивные', '35'));
array_push($goods,new Good('Гетры', '56'));
array_push($goods,new Good('Гольфы', '60'));
array_push($goods,new Good('Носки шерсятные', '49'));

$goods2 = [];
$client2 = '8(906)047-88-20';

array_push($goods2,new Good('Носки спортивные', '122'));
array_push($goods2,new Good('Гетры', '100'));
array_push($goods2,new Good('Колготки', '79'));
array_push($goods2,new Good('Тёплые зимние носки', '85'));

function testStrategy(array $goods, $client)
{
    echo '<h3>Первый клиент</h3>';

    $collection = new Goods($goods, $client);
    $collection->data(new YandexMoney());
    $collection->sort(new YandexMoney());
    $collection->total(new YandexMoney());

    $collection->sort(new Qiwi());
    $collection->total(new Qiwi());

    $collection->sort(new WebMoney());
    $collection->total(new WebMoney());
}

testStrategy($goods, $client);

function testStrategy2(array $goods, $client)
{
    echo '<h3>Второй клиент</h3>';

    $collection = new Goods($goods, $client);
    $collection->data(new YandexMoney());
    $collection->sort(new YandexMoney());
    $collection->total(new YandexMoney());

    $collection->sort(new Qiwi());
    $collection->total(new Qiwi());

    $collection->sort(new WebMoney());
    $collection->total(new WebMoney());
}

testStrategy2($goods2, $client2);