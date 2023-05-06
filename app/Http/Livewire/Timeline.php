<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Component;
use Illuminate\Contracts\View\View;

/**
* @property-read Collection $tweets
 */
class Timeline extends Component
{
    protected $listeners = [
        'show::more' => '$refresh',
    ];
    public int $perPage = 15;

    public function render(): View
    {
        return view('livewire.timeline');
    }

    public function getTweetsProperty(): LengthAwarePaginator
    {
        $data = Tweet::query()->latest()->paginate($this->perPage);

        session()->put('last-tweet', $data->first()->id);
        return $data;
    }

    public function loadMore(): void
    {
        $this->perPage += 15;
    }
}
