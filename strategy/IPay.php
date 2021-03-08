<?php


interface IPay
{
    public function compare($posts);

    public function total($posts);

    public function data($clientData);
}