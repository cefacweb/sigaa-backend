<?php

namespace Tests\Feature;

use Tests\TestCase;

class HealthCheckTest extends TestCase
{
    /**
     * A basic health check test.
     *
     * @return void
     */
    public function test_health_check()
    {
        $response = $this->get('/health');

        $response->assertStatus(200);
    }
}
