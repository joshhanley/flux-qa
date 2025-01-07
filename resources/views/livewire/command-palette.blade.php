<?php

use App\Models\Post;
use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {
    public $action = null;

    #[Computed]
    public function commandItems()
    {
        return match ($this->action) {
            'assignTo' => $this->assignToItems(),
            default => $this->defaultItems(),
        };
    }

    #[Computed]
    public function keyBindings()
    {
        return json_encode(
            collect($this->commandItems)
                ->filter(fn($commandItem) => isset($commandItem['shortcut']))
                ->mapWithKeys(
                    fn($commandItem) => [
                        'x-on:keydown.' . $commandItem['shortcut'] . '.prevent' => "\$wire.\$call('{$commandItem['action']}', " . ($commandItem['parameters'] ?? null) . ')',
                    ],
                )
                ->all(),
        );
    }

    protected function defaultItems()
    {
        return collect([
            [
                'action' => 'assignTo',
                'icon' => 'user-plus',
                'label' => 'Assign to…',
                'keys' => '⌘A',
                'shortcut' => 'cmd.a',
                'close' => false,
            ],
            [
                'action' => 'createNewFile',
                'icon' => 'document-plus',
                'label' => 'Create new file',
                'close' => false,
            ],
            [
                'action' => 'createNewProject',
                'icon' => 'folder-plus',
                'label' => 'Create new project',
                'modal' => 'edit-profile',
                'keys' => '⌘⇧O',
                'shortcut' => 'cmd.shift.o',
                'close' => false,
            ],
            [
                'action' => 'openDocumentation',
                'icon' => 'book-open',
                'label' => 'Documentation',
                'close' => false,
                'keys' => 'G > D',
            ],
            [
                'action' => 'openChangelog',
                'icon' => 'newspaper',
                'label' => 'Changelog',
                'keys' => 'G > C',
                'close' => false,
            ],
            [
                'action' => 'openSettings',
                'icon' => 'cog-6-tooth',
                'label' => 'Settings',
                'keys' => '⌘,',
                'shortcut' => 'cmd.,',
                'close' => false,
            ],
        ]);
    }

    protected function assignToItems()
    {
        $users = User::query()
        ->limit(50)
        ->get()
        ->map(
            fn($user) => [
                'action' => 'assignToUser',
                'parameters' => "{$user->id}",
                'icon' => 'user',
                'label' => $user->name,
                'close' => true,
            ],
        );

        return collect([
            [
                'action' => 'back',
                'icon' => 'arrow-uturn-left',
                'label' => 'Back',
                'keys' => '⌘⌫',
                'shortcut' => 'cmd.backspace',
                'close' => false,
            ],
        ])->merge($users);
    }
    
    public function back()
    {
        $this->action = null;
    }

    public function assignTo()
    {
        $this->action = 'assignTo';

        sleep(1);
    }

    public function createNewFile()
    {
        $this->action = 'createNewFile';
    }

    public function createNewProject()
    {
        $this->action = 'createNewProject';
    }

    public function openDocumentation()
    {
        $this->redirect('/documentation');
    }

    public function openChangelog()
    {
        $this->redirect('/changelog');
    }

    public function openSettings()
    {
        $this->redirect('/settings');
    }

    public function assignToUser(User $user)
    {
        dump('Assigning to user', $user->toArray());
    }
};

?>

<div container class="flex gap-x-4">
    {{--
    Command palette problems:
    - Max height needed (should check all dropdowns)
    - Keyboard shortcuts on individual items would make it easier to use (like the trigger) but scoped to the modal
    - How to do sequence shortcuts like "G > D"?
    - Being able to use buttons as links, to link directly to a page in a command palette
    - Is there a way to trigger something on modal close? Like reset the command palette?
    - If I wanted to trigger a new modal, from a command item, how would I do that? Like for say "Create new project"?
    - Once that second modal is finished, how do I close it from Livewire?
 --}}
    {{-- <button type="button" wire:click="$refresh">Refresh</button>

    <flux:modal.trigger modal="search" shortcut="cmd.k">
        <flux:input as="button" icon="magnifying-glass" placeholder="Search..." kbd="⌘K" class="min-w-56" />
    </flux:modal.trigger>

    <flux:modal name="search" variant="bare" class="min-h-[30rem] w-full max-w-[30rem] px-6" x-on:click.outside="console.log('test');$el.dialog()._dialogable.hide()">
        <flux:command class="border-none shadow-lg">
            <flux:command.input placeholder="Search..." closable x-bind="{{ $this->keyBindings }}" />

            <flux:command.items class="relative max-h-72">
                <div wire:loading.flex class="absolute inset-0 flex items-center justify-center bg-gray-100/90 z-10">Loading...</div>
                @foreach ($this->commandItems as $commandItem)
                    @if(isset($commandItem['modal']))
                        <flux:modal.trigger :modal="$commandItem['modal']">
                            <flux:command.item
                                icon="{{ $commandItem['icon'] }}"
                                :kbd="$commandItem['keys'] ?? null"
                                x-on:click="$wire.call('{{ $commandItem['action'] }}', {{ $commandItem['parameters'] ?? 'null' }}); if({{ $commandItem['close'] ? 'true' : 'false' }}) { $el.closest('ui-modal')?.dialog()._dialogable.hide(); $wire.$set('action', null, true) }">
                                {{ $commandItem['label'] }}
                            </flux:command.item>
                        </flux:modal.trigger>
                    @else
                        <flux:command.item
                            icon="{{ $commandItem['icon'] }}"
                            :kbd="$commandItem['keys'] ?? null"
                            x-on:click="$wire.call('{{ $commandItem['action'] }}', {{ $commandItem['parameters'] ?? 'null' }}); if({{ $commandItem['close'] ? 'true' : 'false' }}) { $el.closest('ui-modal')?.dialog()._dialogable.hide(); $wire.$set('action', null, true) }">
                            {{ $commandItem['label'] }}
                        </flux:command.item>
                    @endif
                @endforeach
            </flux:command.items>
            <flux:text class="pl-4 py-2 bg-white">Action: {{ $this->action }}</flux:text>
        </flux:command>
    </flux:modal>

    <flux:modal name="edit-profile" class="md:w-96">
        <flux:modal.header>
            <flux:heading size="lg">Update profile</flux:heading>
            <flux:subheading>Make changes to your personal details.</flux:subheading>
        </flux:modal.header>

        <flux:modal.body>
            <flux:input label="Name" placeholder="Your name" />

            <flux:input label="Date of birth" type="date" />
        </flux:modal.body>

        <flux:modal.footer>
            <flux:spacer />
            <flux:button type="submit">Save changes</flux:button>
        </flux:modal.footer>
    </flux:modal> --}}
</div>
