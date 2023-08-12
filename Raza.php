<?php
class Raza{
    private $raza;

    /**
     * Get the value of raza
     */
    public function getRaza(): string
    {
        return $this->raza;
    }

    /**
     * Set the value of raza
     */
    public function setRaza(string $raza): self
    {
        $this->raza = $raza;

        return $this;
    }
}