<?php

<<<<<<< HEAD
use App\Models\User;
=======
namespace Tests\Feature\Auth;

use App\Models\User;
use Livewire\Volt\Volt;
>>>>>>> master

test('confirm password screen can be rendered', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->get('/confirm-password');

<<<<<<< HEAD
    $response->assertStatus(200);
=======
    $response
        ->assertSeeVolt('pages.auth.confirm-password')
        ->assertStatus(200);
>>>>>>> master
});

test('password can be confirmed', function () {
    $user = User::factory()->create();

<<<<<<< HEAD
    $response = $this->actingAs($user)->post('/confirm-password', [
        'password' => 'password',
    ]);

    $response->assertRedirect();
    $response->assertSessionHasNoErrors();
=======
    $this->actingAs($user);

    $component = Volt::test('pages.auth.confirm-password')
        ->set('password', 'password');

    $component->call('confirmPassword');

    $component
        ->assertRedirect('/dashboard')
        ->assertHasNoErrors();
>>>>>>> master
});

test('password is not confirmed with invalid password', function () {
    $user = User::factory()->create();

<<<<<<< HEAD
    $response = $this->actingAs($user)->post('/confirm-password', [
        'password' => 'wrong-password',
    ]);

    $response->assertSessionHasErrors();
=======
    $this->actingAs($user);

    $component = Volt::test('pages.auth.confirm-password')
        ->set('password', 'wrong-password');

    $component->call('confirmPassword');

    $component
        ->assertNoRedirect()
        ->assertHasErrors('password');
>>>>>>> master
});
