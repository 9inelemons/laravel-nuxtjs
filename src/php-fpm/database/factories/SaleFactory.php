<?php

namespace Database\Factories;

class SaleFactory extends \Illuminate\Database\Eloquent\Factories\Factory
{

    /**
     * @inheritDoc
     */
    public function definition()
    {
        return [
            'amount' => rand(100, 100000)
        ];
    }
}
