<?php


namespace App;


class Worker extends AbstractUnit
{
    protected $speed = 2;

    public function say(): string
    {
        return 'Oui monseigneur !';
    }

    public function work() :string
    {
        return 'Je travaille';
    }
}