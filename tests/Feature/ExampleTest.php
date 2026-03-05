<?php

// verifico que la aplicación responda correctamente.
test('the application returns successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
