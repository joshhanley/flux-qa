<?php

use App\Models\Post;
use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new #[Layout('components.layouts.hrefs')] class extends Component {
    public function save()
    {
        sleep(5);
    }
};

?>

<div>
    <flux:sidebar class="border-r border-zinc-200">
        <flux:navlist variant="outline">
            <flux:navlist.item :href="route('test', ['user_id' => 1, 'page_category' => 'category1'])">Home</flux:navlist.item>
        </flux:navlist>

    </flux:sidebar>
    <flux:header class=" border-b border-zinc-200">
        <flux:navbar>
            <flux:navbar.item :href="route('test', ['user_id' => 1, 'page_category' => 'category1'])">Home</flux:navbar.item>
        </flux:navbar>

        <flux:spacer />

        <flux:navbar>
            <flux:dropdown>
                <flux:navbar.item icon-trailing="chevron-down">Menu</flux:navbar.item>

                <flux:navmenu>
                    <flux:navmenu.item :href="route('test', ['user_id' => 1, 'page_category' => 'category1'])">Home</flux:navmenu.item>
                </flux:navmenu>
            </flux:dropdown>
        </flux:navbar>
    </flux:header>
    <flux:main>
        <flux:button :href="route('test', ['user_id' => 1, 'page_category' => 'category1'])">Home</flux:button>
        <flux:dropdown>
            <flux:button icon-trailing="chevron-down">Dropdown</flux:button>

            <flux:menu>
                <flux:menu.item :href="route('test', ['user_id' => 1, 'page_category' => 'category1'])">Home</flux:menu.item>
            </flux:menu>
        </flux:dropdown>

        <flux:tabs variant="segmented">
            <flux:tab :href="route('test', ['user_id' => 1, 'page_category' => 'category1'])">Home</flux:tab>
        </flux:tabs>
    </flux:main>
</div>
