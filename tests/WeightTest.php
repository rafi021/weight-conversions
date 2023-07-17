<?php

use Rafi021\WeightConversions\WeightConversionsClass;

it('can convert kilograms to prounds', function () {
    $pounds = WeightConversionsClass::kilograms(100)->toPounds();

    expect($pounds)->toEqual(220.46);
});
