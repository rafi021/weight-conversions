<?php

use Rafi021\WeightConversions\WeightConversionsClass;

it('can convert kilograms to prounds', function () {
    $pounds = WeightConversionsClass::kilograms(100)->toPounds();
    expect($pounds)->toEqual(220.46);
});

it('can convert kilograms to stones', function () {
    $pounds = WeightConversionsClass::kilograms(100)->toStones();
    expect($pounds)->toEqual(15.747);
});
