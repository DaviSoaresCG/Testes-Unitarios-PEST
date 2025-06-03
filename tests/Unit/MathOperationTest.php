<?php

use App\Services\MainOperations;

describe('MainOperations - Testar o método mathOperation', function () {

    it('test the addition', function () {
        $a = 10;
        $b = 5;
        $operation = "add";

        $result = MainOperations::mathOperations($a, $b, $operation);
        expect($result)->toBe(15);
    });

    it('test the subtraction', function(){
        $a = 10;
        $b = 5;
        $operation = "subtract";

        $result = MainOperations::mathOperations($a, $b, $operation);
        expect($result)->toBe(5);
    });

    it("test the multiply", function(){
        $a = 10;
        $b = 5;
        $operation = "multiply";

        $result = MainOperations::mathOperations($a, $b, $operation);
        expect($result)->toBe(50);
    });

    it("test the divide", function(){
        $a = 10;
        $b = 5;
        $operation = "divide";

        $result = MainOperations::mathOperations($a, $b, $operation);
        expect($result)->toBe(2);
    });
});
