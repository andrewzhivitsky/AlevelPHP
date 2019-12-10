<?php
class Direction {
    public $developer;

    public function __constract($developer)
    {
        $this->developer = $developer;

    }

    /**
     * @return mixed
     */
    public function getDeveloper()
    {
        return $this->developer;
    }


    /**
     * @param mixed $developer
     */
    public function setDeveloper($developer)
    {
        $this->developer = $developer;
    }
}

