<?php

use App\Http\Controllers\MainController;

// indicando teste no metodo index

test('Testando o método index do Controller MainController', function(){

    // iniciando MainController
    $mainController = new MainController();

    // call to index
    $result = $mainController->index();

    // if the result is string
    expect($result)->toBeString();

    // if result is same "Ola Mundo!"
    expect($result)->toEqual("Ola Mundo!");
});
