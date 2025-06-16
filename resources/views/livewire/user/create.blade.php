<div>
    <div class="flex items-center justify-between">
        <flux:heading size="xl">Add User</flux:heading>
    </div>
    <flux:separator variant="subtle" class="my-8" />
    <div class="max-w-xl mx-auto">
        <form wire:submit.prevent="addUser" class="space-y-6">
            <flux:field>
                <flux:input wire:model="name" type="text" placeholder="Name" />
                <flux:error name="name" />
            </flux:field>

            <flux:field>
                <flux:input wire:model="email" type="email" placeholder="Email Address" />
                <flux:error name="email" />
            </flux:field>

            <flux:field>
                <flux:input wire:model="password" type="password" placeholder="Password" viewable />
                <flux:error name="email" />
            </flux:field>

            <flux:field>

                <flux:radio.group wire:model="role" variant="segmented" size="sm">
                    @foreach(\App\Enums\Role::cases() as $role)
                    <flux:radio value="{{ $role->value }}" label="{{ $role->label() }}" />
                    @endforeach
                </flux:radio.group>


                <flux:error name="role" />
            </flux:field>

            <flux:button type="submit" variant="primary" class="w-full">Submit</flux:button>
        </form>
    </div>
</div>
