<?php

use App\Models\Post;
use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {
    public $sort = 'Name';
    public $filters = [];
};

?>

<flux:body container class="space-y-4">
    <flux:card>
        <flux:card.header class="border-b bg-gray-50">Use this page to test the following issues</flux:card.header>
        <flux:card.body class="divide-y">
            <div>
                <flux:heading size="lg">Dropdowns don't have a hover option</flux:heading>

                <flux:subheading size="lg" class="font-medium">Issue</flux:subheading>

                <flux:text>
                    Dropdowns don't have a hover option, where if you hover over the trigger, the dropdown is shown.
                </flux:text>

                <flux:subheading size="lg" class="font-medium">Instructions</flux:subheading>

                <flux:text>
                    1. Look at the `Components` dropdown in the top navigation above, it would be nice if we could hover over that to see all components in the dropdown.
                </flux:text>
            </div>

            <div>
                <flux:heading size="lg">Dropdowns with submenu break when you click the submenu trigger</flux:heading>

                <flux:subheading size="lg" class="font-medium">Issue</flux:subheading>

                <flux:text>
                    If a dropdown has a submenu (which is shown by hovering over the trigger), if you then click on the trigger (because you weren't expecting the hover), then the submenu is hidden.
                    But clicking again doesn't show the submenu again.
                </flux:text>

                <flux:subheading size="lg" class="font-medium">Instructions</flux:subheading>

                <flux:text>
                    1. Click on the Options dropdown below.<br>
                    2. Hover over Sort by and see the submenu.<br>
                    3. Click on Sort by and see the submenu is hidden.<br>
                    4. Click on Sort by again and see the submenu is not shown.<br>
                    5. But if you then hover over Filter and then over Sort by again, the Sort by submenu is shown again.
                </flux:text>
            </div>

            <div>
                <flux:heading size="lg">Dropdown menu radio and checkbox have different syntax</flux:heading>

                <flux:subheading size="lg" class="font-medium">Issue</flux:subheading>

                <flux:text>
                    The radio and checkbox components have different syntax when used in a menu compared to when used as a standalone component. The standalone components require a `label` attribute
                    where as the menu components require a slot for the label. I actually expected both to work, labels and/or slots, for both menu and standalone components.
                </flux:text>

                <flux:subheading size="lg" class="font-medium">Instructions</flux:subheading>

                <flux:text>
                    1. Look at the Radio Menu and Checkbox Menu dropdowns below.<br>
                    2. Then look at the Standard radio and checkbox below for comparison.
                </flux:text>
            </div>

            <div>
                <flux:heading size="lg">Dropdown menu radio button not using value attribute</flux:heading>

                <flux:subheading size="lg" class="font-medium">Issue</flux:subheading>

                <flux:text>
                    The menu radio button doesn't use the value attribute like the standard radio button does.
                </flux:text>

                <flux:subheading size="lg" class="font-medium">Instructions</flux:subheading>

                <flux:text>
                    1. Click on the Radio Menu dropdown below.<br>
                    2. Click on one of the radio items.<br>
                    3. Then look at the "Sort:" output and see that the value is the label and not the value passed into the radio component.
                </flux:text>
            </div>

            <div>
                <flux:heading size="lg">Dropdowns with checkboxes bound to an array don't work properly</flux:heading>

                <flux:subheading size="lg" class="font-medium">Issue</flux:subheading>

                <flux:text>
                    If a dropdown has checkboxes that are bound to an array property, the checkboxes don't work correctly. They don't show the correct value when checked and instead all checkboxes are
                    checked. Where as this does work for standard checkboxes.
                </flux:text>

                <flux:subheading size="lg" class="font-medium">Instructions</flux:subheading>

                <flux:text>
                    1. Click on the Checkbox Menu dropdown below.<br>
                    2. Click on one of the checkbox items and all of them get selected.<br>
                    3. Then look at the "Filters:" output and see that the value is an empty string.
                </flux:text>
            </div>

            <div>
                <flux:heading size="lg">Submenus in submenus left arrow keyboard navigation closes all submenus</flux:heading>

                <flux:subheading size="lg" class="font-medium">Issue</flux:subheading>

                <flux:text>
                    If a dropdown contains a submenu that also has a submenu, you can navigate through them by using the up and down arrows, and right to open a submenu. But when you are in a submenu
                    that is in a submenu and you press the left arrow key, I would expect that just the current submenu closes but instead all submenus close (but the main dropdown is still open).
                </flux:text>

                <flux:subheading size="lg" class="font-medium">Instructions</flux:subheading>

                <flux:text>
                    1. Click on the Deeeeep menu dropdown below.<br>
                    2. Use arrow keys to navigate to Submenu 1 > Submenu 1.1 > Submenu 1.1.1 > Submenu 1.1.1 Item 1<br>
                    3. Then press the left arrow key to see that all submenus are closed.
                </flux:text>
            </div>
        </flux:card.body>
    </flux:card>

    <flux:dropdown position="bottom center">
        <flux:button icon-trailing="chevron-down">Options</flux:button>

        <flux:menu>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.separator />
            <flux:menu.submenu heading="Sort by">
                <flux:menu.radio-group wire:model.live="sort">
                    <flux:menu.radio value="name1">Name</flux:menu.radio>
                    <flux:menu.radio value="date1">Date</flux:menu.radio>
                    <flux:menu.radio value="popularity1">Popularity</flux:menu.radio>
                </flux:menu.radio-group>
            </flux:menu.submenu>
            <flux:menu.submenu heading="Filter">
                <flux:checkbox.group wire:model.live="filters">
                    <flux:menu.checkbox value="draft1">Draft</flux:menu.checkbox>
                    <flux:menu.checkbox value="published1">Published</flux:menu.checkbox>
                    <flux:menu.checkbox value="archived1">Archived</flux:menu.checkbox>
                </flux:checkbox.group>
            </flux:menu.submenu>
            <flux:menu.separator />
            <flux:menu.item variant="danger" icon="trash">Delete Author</flux:menu.item>
        </flux:menu>
    </flux:dropdown>

    <flux:text>Sort: {{ $sort }}</flux:text>
    <flux:text>Filters: {{ var_export($filters) }}</flux:text>

    <flux:dropdown position="bottom center">
        <flux:button icon-trailing="chevron-down">Radio menu</flux:button>

        <flux:menu>
            <flux:radio.group wire:model.live="sort">
                <flux:menu.radio value="name1">Name</flux:menu.radio>
                <flux:menu.radio value="date1">Date</flux:menu.radio>
                <flux:menu.radio value="popularity1">Popularity</flux:menu.radio>
            </flux:radio.group>
        </flux:menu>
    </flux:dropdown>

    <flux:dropdown position="bottom center">
        <flux:button icon-trailing="chevron-down">Checkbox menu</flux:button>

        <flux:menu>
            <flux:checkbox.group wire:model.live="filters">
                <flux:menu.checkbox value="draft1">Draft</flux:menu.checkbox>
                <flux:menu.checkbox value="published1">Published</flux:menu.checkbox>
                <flux:menu.checkbox value="archived1">Archived</flux:menu.checkbox>
            </flux:checkbox.group>
        </flux:menu>
    </flux:dropdown>

    <flux:heading>Standard radio and checkbox for sanity checks</flux:heading>
    <flux:radio.group wire:model="sort" label="Sort By">
        <flux:radio value="name1" label="Name"></flux:radio>
        <flux:radio value="date1" label="Date"></flux:radio>
        <flux:radio value="popularity1" label="Popularity"></flux:radio>
    </flux:radio.group>

    <flux:checkbox.group wire:model="filters" label="Filters">
        <flux:checkbox value="draft1" label="Draft"></flux:checkbox>
        <flux:checkbox value="published1" label="Published"></flux:checkbox>
        <flux:checkbox value="archived1" label="Archived"></flux:checkbox>
    </flux:checkbox.group>

    <flux:dropdown position="bottom center">
        <flux:button icon-trailing="chevron-down">Deeeeep menu</flux:button>

        <flux:menu>
            <flux:menu.item icon="plus">Item 1</flux:menu.item>
            <flux:menu.separator />
            <flux:menu.submenu heading="Submenu 1">
                <flux:menu.item>Submenu1 Item 1</flux:menu.item>
                <flux:menu.item>Submenu1 Item 2</flux:menu.item>
                <flux:menu.item>Submenu1 Item 3</flux:menu.item>
                <flux:menu.submenu heading="Submenu 1.1">
                    <flux:menu.item>Submenu1.1 Item 1</flux:menu.item>
                    <flux:menu.item>Submenu1.1 Item 2</flux:menu.item>
                    <flux:menu.item>Submenu1.1 Item 3</flux:menu.item>
                    <flux:menu.submenu heading="Submenu 1.1.1">
                        <flux:menu.item>Submenu1.1.1 Item 1</flux:menu.item>
                        <flux:menu.item>Submenu1.1.1 Item 2</flux:menu.item>
                        <flux:menu.item>Submenu1.1.1 Item 3</flux:menu.item>
                    </flux:menu.submenu>
                    <flux:menu.submenu heading="Submenu 1.1.2">
                        <flux:menu.item>Submenu1.1.2 Item 1</flux:menu.item>
                        <flux:menu.item>Submenu1.1.2 Item 2</flux:menu.item>
                        <flux:menu.item>Submenu1.1.2 Item 3</flux:menu.item>
                    </flux:menu.submenu>
                </flux:menu.submenu>
            </flux:menu.submenu>
            <flux:menu.submenu heading="Submenu 2">
                <flux:menu.item>Submenu2 Item 1</flux:menu.item>
                <flux:menu.item>Submenu2 Item 2</flux:menu.item>
                <flux:menu.item>Submenu2 Item 3</flux:menu.item>
                <flux:menu.submenu heading="Submenu 2.1">
                    <flux:menu.item>Submenu2.1 Item 1</flux:menu.item>
                    <flux:menu.item>Submenu2.1 Item 2</flux:menu.item>
                    <flux:menu.item>Submenu2.1 Item 3</flux:menu.item>
                    <flux:menu.submenu heading="Submenu 2.1.1">
                        <flux:menu.item>Submenu2.1.1 Item 1</flux:menu.item>
                        <flux:menu.item>Submenu2.1.1 Item 2</flux:menu.item>
                        <flux:menu.item>Submenu2.1.1 Item 3</flux:menu.item>
                    </flux:menu.submenu>
                </flux:menu.submenu>
            </flux:menu.submenu>
        </flux:menu>
    </flux:dropdown>
</flux:body>
