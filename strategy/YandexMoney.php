<?php


class YandexMoney implements IPay
{

    public function compare($posts)
    {
        echo 'Оплата через Яндекс Money' . '<br>';
        foreach ($posts as $post)
        {
            echo $post->name . ' ';
            echo $post->price . 'р.' . '<br>';
        }
    }

    public function total($posts)
    {
        $prices = [];
        foreach ($posts as $post)
        {
            $prices[] =  $post->price;
        }
        echo 'Общая сумма заказа: ' . array_sum($prices) . 'р.' . '<br><br>';
    }

    public function data($clientData)
    {
        echo 'Данные покупателя: номер телефона - ' . $clientData . '<br>';
    }
}