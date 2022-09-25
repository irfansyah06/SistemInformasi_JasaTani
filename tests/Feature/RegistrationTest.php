<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegistrationTes extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_registrationtest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}