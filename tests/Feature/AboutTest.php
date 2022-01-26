<?php

namespace Tests\Feature;

use App\Http\Requests\AboutPostRequest;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\TestResponse;
use Tests\TestCase;

class AboutTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/about');

        $response->assertStatus(200)
            ->assertSeeText('E-Mail')
            ->assertSeeText('Админка');
    }

    /**
     * Пример базового теста функции.
     *
     * @return void
     */
    public function testForm()
    {

        $postData = [

            'title' => 'Example',

            'content' => 'I love your website',

            'email' => 'email@mail.ma',

        ];

        $response = $this->post('/about/create', $postData);

        $response->assertRedirect('/');

    }


}
