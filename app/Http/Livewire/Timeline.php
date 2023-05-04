<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;
use Illuminate\Contracts\View\View;

class Timeline extends Component
{
    protected $listeners = ['tweet::created' => '$refresh'];
    public int $perPage = 15;

    public function render():View
    {
        return view('livewire.timeline', [
            'tweets' => Tweet::query()->latest()->paginate($this->perPage),
        ]);
    }

    public function loadMore(): void
    {
        $this->perPage += 15;
    }
}
