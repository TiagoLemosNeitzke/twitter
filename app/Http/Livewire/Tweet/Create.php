<?php

namespace App\Http\Livewire\Tweet;

use App\Events\TweetHasBeenCreated;
use App\Models\Tweet;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class Create extends Component
{
    use AuthorizesRequests;

    public ?string $body = null;

    public $user;

    public function mount()
    {
        $this->user = auth()->user();
    }

    public function render():View
    {
        return view('livewire.tweet.create');
    }

    public function tweet()
    {
        $this->authorize('create', Tweet::class);

        $this->validate([
            'body' => 'required|max:140'
        ]);

        Tweet::query()->create(
            [
                'body' => $this->body,
                'created_by' => auth()->id(),
            ]
        );

        TweetHasBeenCreated::dispatch();

        $this->reset('body');
    }
}
