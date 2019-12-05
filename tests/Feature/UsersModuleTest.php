<?php

namespace Tests\Feature;

use Tests\TestCase;

class UsersModuleTest extends TestCase
{
    /**
     *
     * @test
     */
    public function it_loads_the_user_list_page()
    {
        $this->get('/users')
            ->assertStatus(200)
            ->assertSee('Usuarios');
    }

    /**
     *
     * @test
     */
    public function it_loads_the_user_destail_page()
    {
        $this->get('/users/1')
            ->assertStatus(200)
            ->assertSee('Usuario: 1');
    }
}
