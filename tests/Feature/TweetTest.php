<?php

use App\Models\User;
use App\Http\Livewire\Tweet\Create;
use App\Models\Tweet;

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

it('should make sure that only authenticated user can tweet', function(){
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

todo('body is required');

todo('the tweet body should have a max length of 140 characters');

todo('should show the tweet on the timeline');
