<?php

use App\Models\User;
use App\Models\Tweet;
use App\Http\Livewire\Timeline;

use App\Http\Livewire\Tweet\Create;
use function Pest\Laravel\actingAs;
use function Pest\Livewire\livewire;

it('should be able to create a tweet', function () {
    $user = User::factory()->create();

    actingAs($user);

    
    
    livewire(Create::class)
        ->set('body', 'This is my first tweet')
        ->call('tweet')
        ->assertEmitted('tweet::created');


    \Pest\Laravel\assertDatabaseCount('tweets', count: 1);

    expect(Tweet::first())
        ->body->toBe('This is my first tweet')
        ->created_by->toBe($user->id);

});

it('should make sure that only authenticated user can tweet', function () {
    livewire(Create::class)
    ->set('body', 'this is my first commit')
    ->call('tweet')
    ->assertForbidden();

    actingAs(User::factory()->create());

    livewire(Create::class)
    ->set('body', 'this is my fisrt tweet')
    ->call('tweet')
    ->assertEmitted('tweet::created');
});

test('body is required', function () {
    actingAs(User::factory()->create());

    livewire(Create::class)
    ->set('body', null)
    ->call('tweet')
    ->assertHasErrors(['body' => 'required']);
});

test('the tweet body should have a max length of 140 characters', function(){
    actingAs(User::factory()->create());

    livewire(Create::class)
    ->set('body', str_repeat('a', 141))
    ->call('tweet')
    ->assertHasErrors(['body' => 'max']);
});

it('should show the tweet on the timeline', function(){
    $user = User::factory()->create();

    actingAs($user);

    livewire(Create::class)
    ->set('body', 'this is my first tweet')
    ->call('tweet')
    ->assertEmitted('tweet::created');

    livewire(Timeline::class)
    ->assertSee('this is my first tweet');
});

it('should set body as null after tweeting', function(){
    $user = User::factory()->create();

    actingAs($user);

    livewire(Create::class)
    ->set('body', 'this is my first tweet')
    ->call('tweet')
    ->assertEmitted('tweet::created')
    ->assertSet('body', null);
});
