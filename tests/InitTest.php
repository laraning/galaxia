<?php

namespace Laraning\GalaxiaTests;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InitTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/galaxia/login');
        $response->assertStatus(200);
    }

    public function testHomeTest()
    {
        $response = $this->get('/galaxia/home');
        $response->assertStatus(302);
    }
}
