<?php

it('returns a successful response', function () {
    dd(DB::connection()->getDatabaseName());
    $response = $this->get('/');

    $response->assertStatus(200);
});
