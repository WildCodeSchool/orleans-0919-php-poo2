<?php


namespace App;


class Map
{
    const MAP_SIZE = 10;
    /**
     * @var array
     */
    private $units;

    /**
     * @return array
     */
    public function getUnits(): array
    {
        return $this->units;
    }

    /**
     * @param array $units
     */
    public function setUnits(array $units): void
    {
        $this->units = $units;
    }

    /**
     * @param array $units
     */
    public function addUnit(AbstractUnit $unit): void
    {
        $this->units[] = $unit;
    }


}