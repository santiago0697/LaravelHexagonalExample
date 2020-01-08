<?php


namespace Hexagonal\Infrastructure\Bus\Contracts;


interface Container
{
    public function make($class);
}
