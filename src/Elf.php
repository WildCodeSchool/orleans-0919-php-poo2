<?php


namespace App;


class Elf extends AbstractUnit implements AttackInterface
{
    protected $speed = 5;

    public function say(): string
    {
        return 'J\ai de grandes oreilles';
    }

    public function attack() :string
    {
        return 'Lance des flèches';
    }
}