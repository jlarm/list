<?php

declare(strict_types=1);

namespace App\Livewire\User;

use App\Models\User;
use Flux\Flux;
use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

final class Create extends Component
{
    #[Validate(['required', 'string', 'min:3', 'max:255'])]
    public string $name = '';

    #[Validate(['required', 'email', 'min:3', 'max:255', 'unique:users,email'])]
    public string $email = '';

    #[Validate(['required', 'string', 'min:3', 'max:255'])]
    public string $password = '';

    #[Validate(['nullable', 'string', 'min:3', 'max:255'])]
    public $role;

    public function addUser(): void
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt('password'),
            'role' => $this->role,
        ]);

        $this->reset(['name', 'email', 'password', 'role']);

        Flux::toast('The user was created!', 'success');
    }

    #[Title('Create User')]
    public function render(): View
    {
        return view('livewire.user.create');
    }
}
