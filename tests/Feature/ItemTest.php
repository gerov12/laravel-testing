<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ItemTest extends TestCase
{
    public function test_unauthenticated_user_cannot_access_items_page(): void
    {
        $response = $this->get('/items');

        $response->assertRedirect('login');
    }
}
