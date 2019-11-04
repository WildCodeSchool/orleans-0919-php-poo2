<?php


namespace App;


class Unit
{
    const AUTHORIZED_DIRECTIONS = [
        'right'  => [1, 0],
        'left'   => [-1, 0],
        'top'    => [0, 1],
        'bottom' => [0, -1],
    ];
    protected $health = 100;
    protected $position = [0, 0];
    protected $speed = 1;

    public function walk(string $direction)
    {
        if (key_exists($direction, self::AUTHORIZED_DIRECTIONS)) {
            $xModifier = self::AUTHORIZED_DIRECTIONS[$direction][0] * $this->getSpeed();
            $yModifier = self::AUTHORIZED_DIRECTIONS[$direction][1] * $this->getSpeed();

            $this->setPosition([
                    $this->getPosition()[0] + $xModifier,
                    $this->getPosition()[1] + $yModifier,
                ]
            );
        }
    }

    /**
     * @return mixed
     */
    public
    function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @param mixed $speed
     */
    public
    function setSpeed(int $speed): void
    {
        $this->speed = $speed;
    }

    /**
     * @return mixed
     */
    public
    function getPosition(): array
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public
    function setPosition(array $position): void
    {
        if ($position[0] >= 0 && $position[1] >= 0) {
            $this->position = $position;
        }
    }

    /**
     * @return mixed
     */
    public
    function getHealth(): int
    {
        return $this->health;
    }

    /**
     * @param mixed $health
     */
    public
    function setHealth(int $health): void
    {
        $this->health = $health;
    }

    public
    function __toString()
    {
        return 'x:' . $this->getPosition()[0] . ', y:' . $this->getPosition()[1];
    }
}