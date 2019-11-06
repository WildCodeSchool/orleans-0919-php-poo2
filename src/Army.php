<?php
/**
 * Created by PhpStorm.
 * User: nico
 * Date: 02/10/18
 * Time: 15:41
 */
namespace App;

class Army
{
    /**
     * Contient les soldats de l'armée
     *
     * @var array
     */
    private $soldiers = [];

    /**
     * @return array
     */
    public function getSoldiers(): array
    {
        return $this->soldiers;
    }

    /**
     * @param array $soldiers
     * @return Army
     */
    public function setSoldiers(array $soldiers): Army
    {
        $this->soldiers = $soldiers;
        return $this;
    }

    /**
     * Ajoute un soldat dans l'armée
     * Uniquement les
     *
     */
    public function join(AttackInterface $unit) : void
    {
        $this->soldiers[] = $unit;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf('L\'armée contient %s soldat(s)', count($this->soldiers));
    }
}
