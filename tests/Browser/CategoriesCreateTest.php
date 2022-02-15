<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CategoriesCreateTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/categories/new')
                ->assertSee('Заголовок')
                ->assertSee('Содержание')
                ->type('title', '')
                ->press('send')
                ->assertSee('Поле Заголовок обязательно для заполнения.')
                ->type('title', 'qwe')
                ->press('send')
                ->assertSee('Количество символов в поле Заголовок должно быть не меньше 10.');
        });
    }
}
