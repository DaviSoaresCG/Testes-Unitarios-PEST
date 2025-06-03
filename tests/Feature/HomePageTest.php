<?php

test('verificar se a Welcome Page esta disponivel', function () {
    $response = $this->get('/');

    // $response->assertStatus(200); PHPUnit

    expect($response->status())->toBe(200);
});
