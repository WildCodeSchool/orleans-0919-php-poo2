<?php


namespace App;


class Soldier extends AbstractUnit implements AttackInterface
{
    protected $speed = 2;

    public function say(): string
    {
        return 'Prêt à combattre !';
    }

    public function attack() :string
    {
        return 'À l\'attaque';
    }
}