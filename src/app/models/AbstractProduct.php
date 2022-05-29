<?php

abstract class AbstractProduct
{
    public abstract function getSku();

    public abstract function setSku(string $sku): void;

    public abstract function getName();

    public abstract function setName(string $name): void;

    public abstract function getPrice();

    public abstract function setPrice(float $price): void;
}