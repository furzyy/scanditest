<?php

require_once "BaseProduct.php";

class Dvd extends BaseProduct
{
    private int $size;

    public function getSize(): int
    {
        return $this->size;
    }

    public function setSize(int $size): void
    {
        $this->size = $size;
    }


}