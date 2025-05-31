<?php

use App\Services\MainOperations;

test("testar se é gerada uma hash de 32 caracteres", function(){

    $hash = MainOperations::generateHash();

    expect(strlen($hash))->toEqual(32);
});
