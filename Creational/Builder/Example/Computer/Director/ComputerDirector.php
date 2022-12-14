<?php

class ComputerDirector
{
    private Builder $builder;

    /**
     * @param Builder $builder
     */
    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }
    public function changeBuilder(Builder $builder): void
    {
        $this->builder = $builder;
    }
    public function makeComputer():Computer{
        return $this->builder->getComputer();
    }

}