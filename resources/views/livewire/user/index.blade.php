<div>
    <div class="flex items-center justify-between">
        <flux:heading size="xl">Users</flux:heading>
        <flux:button variant="primary" href="{{ route('users.create') }}" wire:navigate>Add User</flux:button>
    </div>
    <flux:separator variant="subtle" class="my-8" />
    <flux:table class="w-full">
        <flux:table.columns>
            <flux:table.column>Name</flux:table.column>
            <flux:table.column>Role</flux:table.column>
            <flux:table.column>Email</flux:table.column>
        </flux:table.columns>
        <flux:table.rows>
            @foreach ($users as $user)
                <flux:table.row>
                    <flux:table.cell>{{ $user->name }}</flux:table.cell>
                    <flux:table.cell>{{ $user->role ?? 'Kid' }}</flux:table.cell>
                    <flux:table.cell>{{ $user->email }}</flux:table.cell>
                </flux:table.row>
            @endforeach
        </flux:table.rows>
    </flux:table>
</div>
