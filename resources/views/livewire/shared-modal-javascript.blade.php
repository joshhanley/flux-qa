<?php

use Flux\Flux;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {
    public $userId;
    public $userNote;

    public $users = [
        1 => [
            'id' => 1,
            'name' => 'John Doe',
            'note' => 'This is a note',
        ],
        2 => [
            'id' => 2,
            'name' => 'Jane Doe',
            'note' => '',
        ],
        3 => [
            'id' => 3,
            'name' => 'John Smith',
            'note' => 'This is another note',
        ],
        4 => [
            'id' => 4,
            'name' => 'Jane Smith',
            'note' => 'Random note',
        ],
    ];

    public function updateNote()
    {
        $this->users[$this->userId]['note'] = $this->userNote;

        Flux::modal('edit-note')->close();

        $this->userId = null;
        $this->userNote = null;
    }
}; ?>

<div>
    <flux:table>
        <flux:table.rows>
            @foreach ($users as $user)
                <flux:table.row wire:key="{{ $user['id'] }}">
                    <flux:table.cell>{{ $user['name'] }}</flux:table.cell>
                    <flux:table.cell>
                        <flux:modal.trigger name="edit-note">
                            <flux:input x-on:click="$wire.userId = {{ $user['id'] }}; $wire.userNote = '{{ $user['note'] }}';" as="button" class="max-w-96" icon:trailing="pencil-square">
                                {{ $user['note'] }}
                            </flux:input>
                        </flux:modal.trigger>
                    </flux:table.cell>
                </flux:table.row>
            @endforeach
        </flux:table.rows>
    </flux:table>

    <flux:modal name="edit-note" class="min-w-md">
        <form wire:submit="updateNote" class="space-y-4">
            <flux:input name="note" label="Note" wire:model="userNote" />
            <flux:button variant="primary" type="submit">Update</flux:button>
        </form>
    </flux:modal>
</div>
