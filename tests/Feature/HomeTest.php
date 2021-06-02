<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * @test
     */
    public function statusCode()
    {
        $response = $this->get('/home');

        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function body()
    {
        $response = $this->get('/home');

        $response->assertSeeText('Home of laravel_docker.');
    }

}
