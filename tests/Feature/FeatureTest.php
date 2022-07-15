<?php

namespace Tests\Feature;

use App\Models\Books;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Database\Factories\UserFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Session;
use Tests\TestCase;

class FeatureTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_login_redirect()
    {
        $response = $this->get('/');

        // A no logged user should be redirected to login
        $response->assertStatus(302);
    }

    use RefreshDatabase;

    public function test_registration()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_user_login_form()
    {
        $response = $this->get('/login');

        $response->assertSuccessful();
        $response->assertViewIs('auth.login');
    }

    public function test_auth_user_not_see_login()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/login');

        $response->assertRedirect('/home');
    }

    public function test_logged_user()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->withSession(['banned' => false])
            ->get('/');

        $response->assertStatus(200);
    }

    public function test_books_list()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->withSession(['banned' => false])
            ->get('/books');

        $response->assertStatus(200);
        $response->assertViewHas('books');
    }

}
