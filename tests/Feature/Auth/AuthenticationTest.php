<?php

use App\Models\User;
<<<<<<< HEAD
=======
use Livewire\Volt\Volt;
>>>>>>> master

test('login screen can be rendered', function () {
    $response = $this->get('/login');

<<<<<<< HEAD
    $response->assertStatus(200);
=======
    $response
        ->assertOk()
        ->assertSeeVolt('pages.auth.login');
>>>>>>> master
});

test('users can authenticate using the login screen', function () {
    $user = User::factory()->create();

<<<<<<< HEAD
    $response = $this->post('/login', [
        'email' => $user->email,
        'password' => 'password',
    ]);

    $this->assertAuthenticated();
    $response->assertRedirect(route('dashboard', absolute: false));
=======
    $component = Volt::test('pages.auth.login')
        ->set('form.email', $user->email)
        ->set('form.password', 'password');

    $component->call('login');

    $component
        ->assertHasNoErrors()
        ->assertRedirect(route('dashboard', absolute: false));

    $this->assertAuthenticated();
>>>>>>> master
});

test('users can not authenticate with invalid password', function () {
    $user = User::factory()->create();

<<<<<<< HEAD
    $this->post('/login', [
        'email' => $user->email,
        'password' => 'wrong-password',
    ]);
=======
    $component = Volt::test('pages.auth.login')
        ->set('form.email', $user->email)
        ->set('form.password', 'wrong-password');

    $component->call('login');

    $component
        ->assertHasErrors()
        ->assertNoRedirect();
>>>>>>> master

    $this->assertGuest();
});

<<<<<<< HEAD
test('users can logout', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post('/logout');

    $this->assertGuest();
    $response->assertRedirect('/');
=======
test('navigation menu can be rendered', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    $response = $this->get('/dashboard');

    $response
        ->assertOk()
        ->assertSeeVolt('layout.navigation');
});

test('users can logout', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    $component = Volt::test('layout.navigation');

    $component->call('logout');

    $component
        ->assertHasNoErrors()
        ->assertRedirect('/');

    $this->assertGuest();
>>>>>>> master
});
