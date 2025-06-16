<?php

declare(strict_types=1);

namespace App\Livewire\User;

use App\Models\User;
use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

final class Index extends Component
{
    #[Title('Users')]
    public function render(): View
    {
        return view('livewire.user.index', [
            'users' => User::orderBy('name')->get(),
        ]);
    }
}
