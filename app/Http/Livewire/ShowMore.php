<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Illuminate\View\View;
use Livewire\Component;

/**
 * @property-read int $count
 */
class ShowMore extends Component
{
    public function render(): View
    {
        return view('livewire.show-more');
    }

    public function more(): void
    {
        $this->emitTo(Timeline::class,'show::more');
    }

    public function getCountProperty(): int
    {
        return Tweet::query()->where('id', '>', session('last-tweet', 0))->count();
    }
}
