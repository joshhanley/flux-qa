<?php

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {
    //
};
?>

<div class="space-y-4">
    <flux:input type="date" label="Date of birth" />
    <flux:input label="Test" placeholder="other" />
    <flux:accordion>
        <flux:accordion.item>
            <flux:accordion.heading>What's your refund policy?</flux:accordion.heading>

            <flux:accordion.content>
                If you are not satisfied with your purchase, we offer a 30-day money-back guarantee. Please contact our support team for assistance.
            </flux:accordion.content>
        </flux:accordion.item>

        <flux:accordion.item>
            <flux:accordion.heading>Do you offer any discounts for bulk purchases?</flux:accordion.heading>

            <flux:accordion.content>
                Yes, we offer special discounts for bulk orders. Please reach out to our sales team with your requirements.
            </flux:accordion.content>
        </flux:accordion.item>

        <flux:accordion.item>
            <flux:accordion.heading>How do I track my order?</flux:accordion.heading>

            <flux:accordion.content>
                Once your order is shipped, you will receive an email with a tracking number. Use this number to track your order on our website.
            </flux:accordion.content>
        </flux:accordion.item>
    </flux:accordion>

    <flux:autocomplete wire:model="state" label="State of residence">
        <flux:autocomplete.item>Alabama</flux:autocomplete.item>
        <flux:autocomplete.item>Arkansas</flux:autocomplete.item>
        <flux:autocomplete.item>California</flux:autocomplete.item>
        <!-- ... -->
    </flux:autocomplete>

    <flux:badge color="lime">New</flux:badge>

    <flux:badge size="sm">Small</flux:badge>
    <flux:badge>Default</flux:badge>
    <flux:badge size="lg">Large</flux:badge>

    <flux:badge icon="user-circle">Users</flux:badge>
    <flux:badge icon="document-text">Files</flux:badge>
    <flux:badge icon-trailing="video-camera">Videos</flux:badge>

    <flux:badge variant="pill" icon="user">Users</flux:badge>

    <flux:badge color="zinc">Zinc</flux:badge>
    <flux:badge color="red">Red</flux:badge>
    <flux:badge color="orange">Orange</flux:badge>
    <flux:badge color="amber">Amber</flux:badge>
    <flux:badge color="yellow">Yellow</flux:badge>
    <flux:badge color="lime">Lime</flux:badge>
    <flux:badge color="green">Green</flux:badge>
    <flux:badge color="emerald">Emerald</flux:badge>
    <flux:badge color="teal">Teal</flux:badge>
    <flux:badge color="cyan">Cyan</flux:badge>
    <flux:badge color="sky">Sky</flux:badge>
    <flux:badge color="blue">Blue</flux:badge>
    <flux:badge color="indigo">Indigo</flux:badge>
    <flux:badge color="violet">Violet</flux:badge>
    <flux:badge color="purple">Purple</flux:badge>
    <flux:badge color="fuchsia">Fuchsia</flux:badge>
    <flux:badge color="pink">Pink</flux:badge>
    <flux:badge color="rose">Rose</flux:badge>

    <flux:button>Default</flux:button>
    <flux:button variant="primary">Primary</flux:button>
    <flux:button variant="filled">Filled</flux:button>
    <flux:button variant="danger">Danger</flux:button>
    <flux:button variant="ghost">Ghost</flux:button>
    <flux:button variant="subtle">Subtle</flux:button>

    <flux:button>Base</flux:button>
    <flux:button size="sm">Small</flux:button>
    <flux:button size="xs">Extra small</flux:button>

    <flux:button icon="ellipsis-horizontal" />
    <flux:button icon="arrow-down-tray">Export</flux:button>
    <flux:button icon-trailing="chevron-down">Open</flux:button>
    <flux:button icon="x-mark" variant="subtle" />

    <flux:button wire:click="save">
        Save changes
    </flux:button>

    <flux:button variant="primary" class="w-full">Send invite</flux:button>

    <flux:button.group>
        <flux:button>Oldest</flux:button>
        <flux:button>Newest</flux:button>
        <flux:button>Top</flux:button>
    </flux:button.group>

    <flux:button.group>
        <flux:button icon="bars-3-bottom-left"></flux:button>
        <flux:button icon="bars-3"></flux:button>
        <flux:button icon="bars-3-bottom-right"></flux:button>
    </flux:button.group>

    <flux:button.group>
        <flux:button>New product</flux:button>
        <flux:button icon="chevron-down"></flux:button>
    </flux:button.group>

    <flux:input as="button" placeholder="Search..." icon="magnifying-glass" kbd="⌘K" />

    <flux:breadcrumbs>
        <flux:breadcrumbs.item href="#">Home</flux:breadcrumbs.item>
        <flux:breadcrumbs.item href="#">Blog</flux:breadcrumbs.item>
        <flux:breadcrumbs.item>Post</flux:breadcrumbs.item>
    </flux:breadcrumbs>

    <flux:breadcrumbs>
        <flux:breadcrumbs.item href="#" separator="slash">Home</flux:breadcrumbs.item>
        <flux:breadcrumbs.item href="#" separator="slash">Blog</flux:breadcrumbs.item>
        <flux:breadcrumbs.item separator="slash">Post</flux:breadcrumbs.item>
    </flux:breadcrumbs>

    <flux:breadcrumbs>
        <flux:breadcrumbs.item href="#" icon="home" />

        <flux:breadcrumbs.item>
            <flux:dropdown>
                <flux:button icon="ellipsis-horizontal" variant="ghost" size="sm" />

                <flux:navmenu>
                    <flux:navmenu.item>Client</flux:navmenu.item>
                    <flux:navmenu.item icon="arrow-turn-down-right">Team</flux:navmenu.item>
                    <flux:navmenu.item icon="arrow-turn-down-right">User</flux:navmenu.item>
                </flux:navmenu>
            </flux:dropdown>
        </flux:breadcrumbs.item>

        <flux:breadcrumbs.item>Post</flux:breadcrumbs.item>
    </flux:breadcrumbs>

    <flux:card class="space-y-6">
        <div>
            <flux:heading size="lg">Log in to your account</flux:heading>
            <flux:subheading>Welcome back!</flux:subheading>
        </div>

        <div class="space-y-6">
            <flux:input label="Email" type="email" placeholder="Your email address" />

            <flux:field>
                <div class="mb-3 flex justify-between">
                    <flux:label>Password</flux:label>

                    <flux:link href="#" variant="subtle" class="text-sm">Forgot password?</flux:link>
                </div>

                <flux:input type="password" placeholder="Your password" />

                <flux:error name="password" />
            </flux:field>
        </div>

        <div class="space-y-2">
            <flux:button variant="primary" class="w-full">Log in</flux:button>

            <flux:button variant="ghost" class="w-full">Sign up for a new account</flux:button>
        </div>
    </flux:card>

    <flux:card class="space-y-6">
        <div class="flex">
            <div class="flex-1">
                <flux:heading size="lg">Are you sure?</flux:heading>

                <flux:subheading>
                    <p>Your post will be deleted permanently.</p>
                    <p>This action cannot be undone.</p>
                </flux:subheading>
            </div>

            <div class="-mx-2 -mt-2">
                <flux:button variant="ghost" size="sm" icon="x-mark" inset="top right bottom" />
            </div>
        </div>

        <div class="flex gap-4">
            <flux:spacer />
            <flux:button variant="ghost">Undo</flux:button>
            <flux:button variant="danger">Delete</flux:button>
        </div>
    </flux:card>

    <flux:card>
        <flux:heading size="lg">Are you sure?</flux:heading>

        <flux:subheading class="mb-4">
            <p>Your post will be deleted permanently.</p>
            <p>This action cannot be undone.</p>
        </flux:subheading>

        <flux:button variant="danger">Delete</flux:button>
    </flux:card>

    <flux:checkbox wire:model="terms" label="I agree to the terms and conditions" />

    <flux:checkbox.group wire:model="notifications" label="Notifications">
        <flux:checkbox label="Push notifications" value="push" checked />
        <flux:checkbox label="Email" value="email" checked />
        <flux:checkbox label="In-app alerts" value="app" />
        <flux:checkbox label="SMS" value="sms" />
    </flux:checkbox.group>

    <flux:checkbox.group wire:model="subscription" label="Subscription preferences">
        <flux:checkbox checked
            value="newsletter"
            label="Newsletter"
            description="Receive our monthly newsletter with the latest updates and offers."
        />
        <flux:checkbox
            value="updates"
            label="Product updates"
            description="Stay informed about new features and product updates."
        />
        <flux:checkbox
            value="invitations"
            label="Event invitations"
            description="Get invitations to our exclusive events and webinars."
        />
    </flux:checkbox.group>

    <flux:fieldset>
        <flux:legend>Languages</flux:legend>

        <flux:description>Choose the languages you want to support.</flux:description>

        <div class="flex gap-4 *:gap-x-2">
            <flux:checkbox checked value="english" label="English" />
            <flux:checkbox checked value="spanish" label="Spanish" />
            <flux:checkbox value="french" label="French" />
            <flux:checkbox value="german" label="German" />
        </div>
    </flux:fieldset>

    <flux:checkbox.group>
        <flux:checkbox.all />

        <flux:checkbox checked />
        <flux:checkbox />
        <flux:checkbox />
    </flux:checkbox.group>

    <flux:checkbox checked />

    <flux:checkbox disabled />

    <flux:checkbox.group wire:model="subscription" label="Subscription preferences" variant="cards" class="max-sm:flex-col">
        <flux:checkbox checked
            value="newsletter"
            label="Newsletter"
            description="Get the latest updates and offers."
        />
        <flux:checkbox
            value="updates"
            label="Product updates"
            description="Learn about new features and products."
        />
        <flux:checkbox
            value="invitations"
            label="Event invitations"
            description="Invitatations to exclusive events."
        />
    </flux:checkbox.group>

    <flux:checkbox.group label="Subscription preferences" variant="cards" class="flex-col">
        <flux:checkbox checked
            value="newsletter"
            label="Newsletter"
            description="Get the latest updates and offers."
        />
        <flux:checkbox
            value="updates"
            label="Product updates"
            description="Learn about new features and products."
        />
        <flux:checkbox
            value="invitations"
            label="Event invitations"
            description="Invitatations to exclusive events."
        />
    </flux:checkbox.group>

    <flux:checkbox.group label="Subscription preferences" variant="cards" class="flex-col">
        <flux:checkbox checked
            value="newsletter"
            icon="newspaper"
            label="Newsletter"
            description="Get the latest updates and offers."
        />
        <flux:checkbox
            value="updates"
            icon="cube"
            label="Product updates"
            description="Learn about new features and products."
        />
        <flux:checkbox
            value="invitations"
            icon="calendar"
            label="Event invitations"
            description="Invitatations to exclusive events."
        />
    </flux:checkbox.group>

    <flux:checkbox.group label="Subscription preferences" variant="cards" class="flex-col">
        <flux:checkbox checked value="newsletter">
            <flux:checkbox.indicator />

            <div class="flex-1">
                <flux:heading class="leading-4">Newsletter</flux:heading>
                <flux:subheading size="sm">Get the latest updates and offers.</flux:subheading>
            </div>
        </flux:checkbox>

        <flux:checkbox value="updates">
            <flux:checkbox.indicator />

            <div class="flex-1">
                <flux:heading class="leading-4">Product updates</flux:heading>
                <flux:subheading size="sm">Learn about new features and products.</flux:subheading>
            </div>
        </flux:checkbox>

        <flux:checkbox value="invitations">
            <flux:checkbox.indicator />

            <div class="flex-1">
                <flux:heading class="leading-4">Event invitations</flux:heading>
                <flux:subheading size="sm">Invitatations to exclusive events.</flux:subheading>
            </div>
        </flux:checkbox>
    </flux:checkbox.group>

    <flux:command>
        <flux:command.input placeholder="Search..." />

        <flux:command.items>
            <flux:command.item wire:click="..." icon="user-plus" kbd="⌘A">Assign to…</flux:command.item>
            <flux:command.item wire:click="..." icon="document-plus">Create new file</flux:command.item>
            <flux:command.item wire:click="..." icon="folder-plus" kbd="⌘⇧N">Create new project</flux:command.item>
            <flux:command.item wire:click="..." icon="book-open">Documentation</flux:command.item>
            <flux:command.item wire:click="..." icon="newspaper">Changelog</flux:command.item>
            <flux:command.item wire:click="..." icon="cog-6-tooth" kbd="⌘,">Settings</flux:command.item>
        </flux:command.items>
    </flux:command>

    <flux:modal.trigger name="search" shortcut="cmd.k">
        <flux:input as="button" placeholder="Search..." icon="magnifying-glass" kbd="⌘K" />
    </flux:modal.trigger>

    <flux:modal name="search" variant="bare" class="min-h-[30rem] w-full max-w-[30rem] px-6" x-on:keydown.cmd.k.document="$el.showModal()">
        <flux:command class="border-none shadow-lg">
            <flux:command.input placeholder="Search..." closable />

            <flux:command.items>
                <flux:command.item icon="user-plus" kbd="⌘A">Assign to…</flux:command.item>
                <flux:command.item icon="document-plus">Create new file</flux:command.item>
                <flux:command.item icon="folder-plus" kbd="⌘⇧N">Create new project</flux:command.item>
                <flux:command.item icon="book-open">Documentation</flux:command.item>
                <flux:command.item icon="newspaper">Changelog</flux:command.item>
                <flux:command.item icon="cog-6-tooth" kbd="⌘,">Settings</flux:command.item>
            </flux:command.items>
        </flux:command>
    </flux:modal>

    <flux:context>
        <flux:card class="border-dashed border-2 px-16">
            <flux:subheading>Right click</flux:subheading>
        </flux:card>

        <flux:menu>
            <flux:menu.item icon="plus">New post</flux:menu.item>

            <flux:menu.separator />

            <flux:menu.submenu heading="Sort by">
                <flux:menu.radio.group>
                    <flux:menu.radio checked>Name</flux:menu.radio>
                    <flux:menu.radio>Date</flux:menu.radio>
                    <flux:menu.radio>Popularity</flux:menu.radio>
                </flux:menu.radio.group>
            </flux:menu.submenu>

            <flux:menu.submenu heading="Filter">
                <flux:menu.checkbox checked>Draft</flux:menu.checkbox>
                <flux:menu.checkbox checked>Published</flux:menu.checkbox>
                <flux:menu.checkbox>Archived</flux:menu.checkbox>
            </flux:menu.submenu>

            <flux:menu.separator />

            <flux:menu.item variant="danger" icon="trash">Delete</flux:menu.item>
        </flux:menu>
    </flux:context>

    <flux:dropdown>
        <flux:button icon-trailing="chevron-down">Options</flux:button>

        <flux:menu>
            <flux:menu.item icon="plus">New post</flux:menu.item>

            <flux:menu.separator />

            <flux:menu.submenu heading="Sort by">
                <flux:menu.radio.group>
                    <flux:menu.radio checked>Name</flux:menu.radio>
                    <flux:menu.radio>Date</flux:menu.radio>
                    <flux:menu.radio>Popularity</flux:menu.radio>
                </flux:menu.radio.group>
            </flux:menu.submenu>

            <flux:menu.submenu heading="Filter">
                <flux:menu.checkbox checked>Draft</flux:menu.checkbox>
                <flux:menu.checkbox checked>Published</flux:menu.checkbox>
                <flux:menu.checkbox>Archived</flux:menu.checkbox>
            </flux:menu.submenu>

            <flux:menu.separator />

            <flux:menu.item variant="danger" icon="trash">Delete</flux:menu.item>
        </flux:menu>
    </flux:dropdown>

    <flux:dropdown position="bottom" align="end">
        <flux:profile avatar="/img/demo/user.png" name="Olivia Martin" />

        <flux:navmenu>
            <flux:navmenu.item href="#" icon="user">Account</flux:navmenu.item>
            <flux:navmenu.item href="#" icon="building-storefront">Profile</flux:navmenu.item>
            <flux:navmenu.item href="#" icon="credit-card">Billing</flux:navmenu.item>
            <flux:navmenu.item href="#" icon="arrow-right-start-on-rectangle">Logout</flux:navmenu.item>
            <flux:navmenu.item href="#" icon="trash" variant="danger">Delete</flux:navmenu.item>
        </flux:navmenu>
    </flux:dropdown>

    <flux:dropdown>
        <flux:button icon-trailing="chevron-down">Options</flux:button>

        <flux:menu>
            <flux:menu.item icon="pencil-square" kbd="⌘S">Save</flux:menu.item>
            <flux:menu.item icon="document-duplicate" kbd="⌘D">Duplicate</flux:menu.item>
            <flux:menu.item icon="trash" variant="danger" kbd="⌘⌫">Delete</flux:menu.item>
        </flux:menu>
    </flux:dropdown>

    <flux:dropdown>
        <flux:button icon-trailing="chevron-down">Permissions</flux:button>

        <flux:menu>
            <flux:menu.checkbox wire:model="read" checked>Read</flux:menu.checkbox>
            <flux:menu.checkbox wire:model="write" checked>Write</flux:menu.checkbox>
            <flux:menu.checkbox wire:model="delete">Delete</flux:menu.checkbox>
        </flux:menu>
    </flux:dropdown>

    <flux:dropdown>
        <flux:button icon-trailing="chevron-down">Sort by</flux:button>

        <flux:menu>
            <flux:menu.radio.group wire:model="sortBy">
                <flux:menu.radio checked>Latest activity</flux:menu.radio>
                <flux:menu.radio>Date created</flux:menu.radio>
                <flux:menu.radio>Most popular</flux:menu.radio>
            </flux:menu.radio.group>
        </flux:menu>
    </flux:dropdown>

    <flux:dropdown>
        <flux:button icon-trailing="chevron-down">Options</flux:button>

        <flux:menu>
            <flux:menu.item>View</flux:menu.item>
            <flux:menu.item>Transfer</flux:menu.item>

            <flux:menu.separator />

            <flux:menu.item>Publish</flux:menu.item>
            <flux:menu.item>Share</flux:menu.item>

            <flux:menu.separator />

            <flux:menu.item variant="danger">Delete</flux:menu.item>
        </flux:menu>
    </flux:dropdown>

    <flux:dropdown>
        <flux:button icon-trailing="chevron-down">Options</flux:button>

        <flux:menu>
            <flux:menu.group heading="Account">
                <flux:menu.item>Profile</flux:menu.item>
                <flux:menu.item>Permissions</flux:menu.item>
            </flux:menu.group>

            <flux:menu.group heading="Billing">
                <flux:menu.item>Transactions</flux:menu.item>
                <flux:menu.item>Payouts</flux:menu.item>
                <flux:menu.item>Refunds</flux:menu.item>
            </flux:menu.group>

            <flux:menu.item>Logout</flux:menu.item>
        </flux:menu>
    </flux:dropdown>

    <flux:dropdown>
        <flux:button icon-trailing="chevron-down">Options</flux:button>

        <flux:menu>
            <flux:menu.submenu heading="Sort by">
                <flux:menu.radio checked>Name</flux:menu.radio>
                <flux:menu.radio>Date</flux:menu.radio>
                <flux:menu.radio>Popularity</flux:menu.radio>
            </flux:menu.submenu>

            <flux:menu.submenu heading="Filter">
                <flux:menu.checkbox checked>Draft</flux:menu.checkbox>
                <flux:menu.checkbox checked>Published</flux:menu.checkbox>
                <flux:menu.checkbox>Archived</flux:menu.checkbox>
            </flux:menu.submenu>

            <flux:menu.separator />

            <flux:menu.item variant="danger">Delete</flux:menu.item>
        </flux:menu>
    </flux:dropdown>

    <flux:editor wire:model="content" label="…" description="…" />

    <flux:editor toolbar="heading | bold italic underline | align ~ undo redo" />

    <flux:tooltip content="{{ __('Copy to clipboard') }}" class="contents">
        <flux:editor.button x-on:click="navigator.clipboard?.writeText($el.closest('[data-flux-editor]').value); $el.setAttribute('data-copied', ''); setTimeout(() => $el.removeAttribute('data-copied'), 2000)">
            <flux:icon.clipboard variant="outline" class="in-data-copied:hidden size-5!" />
            <flux:icon.clipboard-document-check variant="outline" class="hidden in-data-copied:block size-5!" />
        </flux:editor.button>
    </flux:tooltip>

    <flux:editor>
        <flux:editor.toolbar>
            <flux:editor.heading />
            <flux:editor.separator />
            <flux:editor.bold />
            <flux:editor.italic />
            <flux:editor.strike />
            <flux:editor.separator />
            <flux:editor.bullet />
            <flux:editor.ordered />
            <flux:editor.blockquote />
            <flux:editor.separator />
            <flux:editor.link />
            <flux:editor.separator />
            <flux:editor.align />

            <flux:editor.spacer />

            <flux:dropdown position="bottom end" offset="-15">
                <flux:editor.button icon="ellipsis-horizontal" tooltip="More" />

                <flux:menu>
                    <flux:menu.item wire:click="…" icon="arrow-top-right-on-square">Preview</flux:menu.item>
                    <flux:menu.item wire:click="…" icon="arrow-down-tray">Export</flux:menu.item>
                    <flux:menu.item wire:click="…" icon="share">Share</flux:menu.item>
                </flux:menu>
            </flux:dropdown>
        </flux:editor.toolbar>

        <flux:editor.content />
    </flux:editor>

    <flux:field>
        <flux:label>Email</flux:label>

        <flux:input wire:model="email" type="email" />

        <flux:error name="email" />
    </flux:field>

    <flux:input wire:model="email" label="Email" type="email" />

    <flux:field>
        <flux:label>Password</flux:label>

        <flux:input type="password" />

        <flux:error name="password" />

        <flux:description>Must be at least 8 characters long, include an uppercase letter, a number, and a special character.</flux:description>
    </flux:field>

    <!-- Alternative shorthand syntax... -->

    <flux:input
        type="password"
        label="Password"
        description-trailing="Must be at least 8 characters long, include an uppercase letter, a number, and a special character."
    />

    <flux:field>
        <flux:label badge="Required" aside="test">Email</flux:label>

        <flux:input type="email" required />

        <flux:error name="email" />
    </flux:field>

    <flux:field>
        <flux:label badge="Optional">Phone number</flux:label>

        <flux:input type="phone" placeholder="(555) 555-5555" mask="(999) 999-9999"  />

        <flux:error name="phone" />
    </flux:field>

    <div class="grid grid-cols-2 gap-4">
        <flux:input label="First name" placeholder="River" />

        <flux:input label="Last name" placeholder="Porzio" />
    </div>

    <flux:fieldset>
        <flux:legend>Shipping address</flux:legend>

        <div class="space-y-6">
            <flux:input label="Street address line 1" placeholder="123 Main St" class="max-w-sm" />
            <flux:input label="Street address line 2" placeholder="Apartment, studio, or floor" class="max-w-sm" />

            <div class="grid grid-cols-2 gap-x-4 gap-y-6">
                <flux:input label="City" placeholder="San Francisco" />
                <flux:input label="State / Province" placeholder="CA" />
                <flux:input label="Postal / Zip code" placeholder="12345" />
                <flux:select label="Country">
                    <option selected>United States</option>
                    <!-- ... -->
                </flux:select>
            </div>
        </div>
    </flux:fieldset>

    <flux:heading>User profile</flux:heading>
    <flux:subheading>This information will be displayed publicly.</flux:subheading>

    <flux:heading>Default</flux:heading>
    <flux:heading size="lg">Large</flux:heading>
    <flux:heading size="xl">Extra large</flux:heading>

    <flux:heading level="3">User profile</flux:heading>
    <flux:subheading>This information will be displayed publicly.</flux:subheading>

    <flux:card size="sm">
        <flux:subheading>Year to date</flux:subheading>

        <flux:heading size="xl" class="mb-1">$7,532.16</flux:heading>

        <div class="flex items-center gap-2">
            <flux:icon.arrow-trending-up variant="micro" class="text-green-600 dark:text-green-500" />

            <span class="text-sm text-green-600 dark:text-green-500">15.2%</span>
        </div>
    </flux:card>

    <flux:icon.bolt />

    <flux:icon.bolt />                  <!-- 24px, outline -->
    <flux:icon.bolt variant="solid" />  <!-- 24px, filled -->
    <flux:icon.bolt variant="mini" />   <!-- 20px, filled -->
    <flux:icon.bolt variant="micro" />  <!-- 16px, filled -->

    <flux:icon.bolt class="size-12" />
    <flux:icon.bolt class="size-10" />
    <flux:icon.bolt class="size-8" />

    <flux:icon.bolt variant="solid" class="text-amber-500 dark:text-amber-300" />

    <flux:icon.loading />

    <flux:input wire:model="username" label="Username" description="This will be publicly displayed." />

    <flux:field>
        <flux:label>Username</flux:label>

        <flux:description>This will be publicly displayed.</flux:description>

        <flux:input />

        <flux:error name="username" />
    </flux:field>

    <flux:input type="email" label="Email" />
    <flux:input type="password" label="Password" />
    <flux:input type="date" max="2999-12-31" label="Date" />

    <flux:input type="file" wire:model="logo" label="Logo"/>
    <flux:input type="file" wire:model="attachments" label="Attachments" multiple />

    <flux:input size="sm" placeholder="Filter by..." />

    <flux:input disabled label="Email" />

    <flux:input readonly variant="filled" />

    <flux:input invalid />

    <flux:input mask="(999) 999-9999" value="7161234567" />

    <flux:input icon="magnifying-glass" placeholder="Search orders" />

    <flux:input icon-trailing="credit-card" placeholder="4444-4444-4444-4444" />

    <flux:input icon-trailing="loading" placeholder="Search transactions" />

    <flux:input placeholder="Search orders">
        <x-slot name="iconTrailing">
            <flux:button size="sm" variant="subtle" icon="x-mark" class="-mr-1" />
        </x-slot>
    </flux:input>

    <flux:input type="password" value="password">
        <x-slot name="iconTrailing">
            <flux:button size="sm" variant="subtle" icon="eye" class="-mr-1" />
        </x-slot>
    </flux:input>

    <flux:input placeholder="Search orders" clearable />
    <flux:input type="password" value="password" viewable />
    <flux:input icon="key" value="FLUX-1234-5678-ABCD-EFGH" readonly copyable />

    <flux:input kbd="⌘K" icon="magnifying-glass" placeholder="Search..."/>

    <flux:input as="button" placeholder="Search..." icon="magnifying-glass" kbd="⌘K" />

    <flux:input.group>
        <flux:input placeholder="Post title" />

        <flux:button icon="plus">New post</flux:button>
    </flux:input.group>

    <flux:input.group>
        <flux:select variant="listbox" class="max-w-fit">
            <flux:select.option selected>USD</flux:select.option>
            <!-- ... -->
        </flux:select>

        <flux:input placeholder="$99.99" />
    </flux:input.group>

    <flux:input.group>
        <flux:input.group.prefix>https://</flux:input.group.prefix>

        <flux:input placeholder="example.com" />
    </flux:input.group>

    <flux:input.group>
        <flux:input placeholder="chunky-spaceship" />

        <flux:input.group.suffix>.brand.com</flux:input.group.suffix>
    </flux:input.group>

    <flux:field>
        <flux:label>Website</flux:label>

        <flux:input.group>
            <flux:input.group.prefix>https://</flux:input.group.prefix>

            <flux:input wire:model="website" placeholder="example.com" />
        </flux:input.group>

        <flux:error name="website" />
    </flux:field>

    <flux:modal.trigger name="edit-profile">
        <flux:button>Edit profile</flux:button>
    </flux:modal.trigger>

    <flux:modal name="edit-profile" class="md:w-96 space-y-6">
        <div>
            <flux:heading size="lg">Update profile</flux:heading>
            <flux:subheading>Make changes to your personal details.</flux:subheading>
        </div>

        <flux:input label="Name" placeholder="Your name" />

        <flux:input label="Date of birth" type="date" />

        <div class="flex">
            <flux:spacer />

            <flux:button type="submit" variant="primary">Save changes</flux:button>
        </div>
    </flux:modal>

    <flux:modal.trigger name="delete-profile">
        <flux:button variant="danger">Delete</flux:button>
    </flux:modal.trigger>

    <flux:modal name="delete-profile" class="min-w-[22rem] space-y-6">
        <div>
            <flux:heading size="lg">Delete project?</flux:heading>

            <flux:subheading>
                <p>You're about to delete this project.</p>
                <p>This action cannot be reversed.</p>
            </flux:subheading>
        </div>

        <div class="flex gap-2">
            <flux:spacer />

            <flux:modal.close>
                <flux:button variant="ghost">Cancel</flux:button>
            </flux:modal.close>

            <flux:button type="submit" variant="danger">Delete project</flux:button>
        </div>
    </flux:modal>

    <flux:modal.trigger name="edit-profile">
        <flux:button>Edit profile</flux:button>
    </flux:modal.trigger>

    <flux:modal name="edit-profile" variant="flyout" class="space-y-6">
        <div>
            <flux:heading size="lg">Update profile</flux:heading>
            <flux:subheading>Make changes to your personal details.</flux:subheading>
        </div>

        <flux:input label="Name" placeholder="Your name" />

        <flux:input label="Date of birth" type="date" />

        <div class="flex">
            <flux:spacer />

            <flux:button type="submit" variant="primary">Save changes</flux:button>
        </div>
    </flux:modal>

    <flux:navbar>
        <flux:navbar.item href="#">Home</flux:navbar.item>
        <flux:navbar.item href="#" current>Features</flux:navbar.item>
        <flux:navbar.item href="#">Pricing</flux:navbar.item>
        <flux:navbar.item href="#">About</flux:navbar.item>
    </flux:navbar>

    <flux:navbar>
        <flux:navbar.item href="#" icon="home">Home</flux:navbar.item>
        <flux:navbar.item href="#" icon="puzzle-piece" current>Features</flux:navbar.item>
        <flux:navbar.item href="#" icon="currency-dollar">Pricing</flux:navbar.item>
        <flux:navbar.item href="#" icon="user">About</flux:navbar.item>
    </flux:navbar>

    <flux:navbar>
        <flux:navbar.item href="#">Home</flux:navbar.item>
        <flux:navbar.item href="#" badge="12">Inbox</flux:navbar.item>
        <flux:navbar.item href="#">Contacts</flux:navbar.item>
        <flux:navbar.item href="#" badge="Pro" badge-color="lime">Calendar</flux:navbar.item>
    </flux:navbar>

    <flux:navbar>
        <flux:navbar.item href="#">Dashboard</flux:navbar.item>
        <flux:navbar.item href="#">Transactions</flux:navbar.item>

        <flux:dropdown>
            <flux:navbar.item icon-trailing="chevron-down">Account</flux:navbar.item>

            <flux:navmenu>
                <flux:navmenu.item href="#">Profile</flux:navmenu.item>
                <flux:navmenu.item href="#">Settings</flux:navmenu.item>
                <flux:navmenu.item href="#">Billing</flux:navmenu.item>
            </flux:navmenu>
        </flux:dropdown>
    </flux:navbar>

    <flux:navlist class="w-64">
        <flux:navlist.item href="#" icon="home">Home</flux:navlist.item>
        <flux:navlist.item href="#" icon="puzzle-piece">Features</flux:navlist.item>
        <flux:navlist.item href="#" icon="currency-dollar">Pricing</flux:navlist.item>
        <flux:navlist.item href="#" icon="user">About</flux:navlist.item>
    </flux:navlist>

    <flux:navlist>
        <flux:navlist.group heading="Account" class="mt-4">
            <flux:navlist.item href="#">Profile</flux:navlist.item>
            <flux:navlist.item href="#">Settings</flux:navlist.item>
            <flux:navlist.item href="#">Billing</flux:navlist.item>
        </flux:navlist.group>
    </flux:navlist>

    <flux:navlist class="w-64">
        <flux:navlist.item href="#" icon="home">Dashboard</flux:navlist.item>
        <flux:navlist.item href="#" icon="list-bullet">Transactions</flux:navlist.item>

        <flux:navlist.group heading="Account" expandable>
            <flux:navlist.item href="#">Profile</flux:navlist.item>
            <flux:navlist.item href="#">Settings</flux:navlist.item>
            <flux:navlist.item href="#">Billing</flux:navlist.item>
        </flux:navlist.group>
    </flux:navlist>

    <flux:navlist class="w-64">
        <flux:navlist.item href="#" icon="home">Home</flux:navlist.item>
        <flux:navlist.item href="#" icon="envelope" badge="12">Inbox</flux:navlist.item>
        <flux:navlist.item href="#" icon="user-group">Contacts</flux:navlist.item>
        <flux:navlist.item href="#" icon="calendar-days" badge="Pro" badge-color="lime">Calendar</flux:navlist.item>
    </flux:navlist>

    <flux:radio.group wire:model="payment" label="Select your payment method">
        <flux:radio value="cc" label="Credit Card" checked />
        <flux:radio value="paypal" label="Paypal" />
        <flux:radio value="ach" label="Bank transfer" />
    </flux:radio.group>

    <flux:radio.group label="Role">
        <flux:radio
            name="role"
            value="administrator"
            label="Administrator"
            description="Administrator users can perform any action."
            checked
        />
        <flux:radio
            name="role"
            value="editor"
            label="Editor"
            description="Editor users have the ability to read, create, and update."
        />
        <flux:radio
            name="role"
            value="viewer"
            label="Viewer"
            description="Viewer users only have the ability to read. Create, and update are restricted."
        />
    </flux:radio.group>

    <flux:fieldset>
        <flux:legend>Role</flux:legend>

        <flux:radio.group>
            <flux:radio
                value="administrator"
                label="Administrator"
                description="Administrator users can perform any action."
                checked
            />
            <flux:radio
                value="editor"
                label="Editor"
                description="Editor users have the ability to read, create, and update."
            />
            <flux:radio
                value="viewer"
                label="Viewer"
                description="Viewer users only have the ability to read. Create, and update are restricted."
            />
        </flux:radio.group>
    </flux:fieldset>

    <flux:radio.group wire:model="role" label="Role" variant="segmented">
        <flux:radio label="Admin" />
        <flux:radio label="Editor" />
        <flux:radio label="Viewer" />
    </flux:radio.group>

    <flux:radio.group wire:model="role" label="Role" variant="segmented" size="sm">
        <flux:radio label="Admin" />
        <flux:radio label="Editor" />
        <flux:radio label="Viewer" />
    </flux:radio.group>

    <flux:radio.group wire:model="role" variant="segmented">
        <flux:radio label="Admin" icon="wrench" />
        <flux:radio label="Editor" icon="pencil-square" />
        <flux:radio label="Viewer" icon="eye" />
    </flux:radio.group>

    <flux:radio.group wire:model="shipping" label="Shipping" variant="cards" class="max-sm:flex-col">
        <flux:radio value="standard" label="Standard" description="4-10 business days" checked />
        <flux:radio value="fast" label="Fast" description="2-5 business days" />
        <flux:radio value="next-day" label="Next day" description="1 business day" />
    </flux:radio.group>

    <flux:radio.group label="Shipping" variant="cards" class="flex-col">
        <flux:radio value="standard" label="Standard" description="4-10 business days" />
        <flux:radio value="fast" label="Fast" description="2-5 business days" />
        <flux:radio value="next-day" label="Next day" description="1 business day" />
    </flux:radio.group>

    <flux:radio.group label="Shipping" variant="cards" class="max-sm:flex-col">
        <flux:radio value="standard" icon="truck" label="Standard" description="4-10 business days" />
        <flux:radio value="fast" icon="cube" label="Fast" description="2-5 business days" />
        <flux:radio value="next-day" icon="clock" label="Next day" description="1 business day" />
    </flux:radio.group>

    <flux:radio.group label="Shipping" variant="cards" :indicator="false" class="max-sm:flex-col">
        <flux:radio value="standard" icon="truck" label="Standard" description="4-10 business days" />
        <flux:radio value="fast" icon="cube" label="Fast" description="2-5 business days" />
        <flux:radio value="next-day" icon="clock" label="Next day" description="1 business day" />
    </flux:radio.group>

    <flux:radio.group label="Shipping" variant="cards" class="max-sm:flex-col">
        <flux:radio value="standard" checked>
            <flux:radio.indicator />

            <div class="flex-1">
                <flux:heading class="leading-4">Standard</flux:heading>
                <flux:subheading size="sm">4-10 business days</flux:subheading>
            </div>
        </flux:radio>

        <flux:radio value="fast">
            <flux:radio.indicator />

            <div class="flex-1">
                <flux:heading class="leading-4">Fast</flux:heading>
                <flux:subheading size="sm">2-5 business days</flux:subheading>
            </div>
        </flux:radio>

        <flux:radio value="next-day">
            <flux:radio.indicator />

            <div class="flex-1">
                <flux:heading class="leading-4">Next day</flux:heading>
                <flux:subheading size="sm">1 business day</flux:subheading>
            </div>
        </flux:radio>
    </flux:radio.group>

    <flux:select wire:model="industry" placeholder="Choose industry...">
        <flux:select.option>Photography</flux:select.option>
        <flux:select.option>Design services</flux:select.option>
        <flux:select.option>Web development</flux:select.option>
        <flux:select.option>Accounting</flux:select.option>
        <flux:select.option>Legal services</flux:select.option>
        <flux:select.option>Consulting</flux:select.option>
        <flux:select.option>Other</flux:select.option>
    </flux:select>

    <flux:select size="sm" placeholder="Choose industry...">
        <flux:select.option>Photography</flux:select.option>
        <flux:select.option>Design services</flux:select.option>
        <flux:select.option>Web development</flux:select.option>
        <flux:select.option>Accounting</flux:select.option>
        <flux:select.option>Legal services</flux:select.option>
        <flux:select.option>Consulting</flux:select.option>
        <flux:select.option>Other</flux:select.option>
    </flux:select>

    <flux:select variant="listbox" placeholder="Choose industry...">
        <flux:select.option>Photography</flux:select.option>
        <flux:select.option>Design services</flux:select.option>
        <flux:select.option>Web development</flux:select.option>
        <flux:select.option>Accounting</flux:select.option>
        <flux:select.option>Legal services</flux:select.option>
        <flux:select.option>Consulting</flux:select.option>
        <flux:select.option>Other</flux:select.option>
    </flux:select>

    <flux:select variant="listbox">
        <x-slot name="button">
            <flux:select.button class="rounded-full!" placeholder="Choose industry..." :invalid="$errors->has('...')" />
        </x-slot>

        <flux:select.option>Photography</flux:select.option>
        ...
    </flux:select>

    <flux:select variant="listbox" clearable>
        ...
    </flux:select>

    <flux:select variant="listbox" placeholder="Select role...">
        <flux:select.option>
            <div class="flex items-center gap-2">
                <flux:icon.shield-check variant="mini" class="text-zinc-400" /> Owner
            </div>
        </flux:select.option>

        <flux:select.option>
            <div class="flex items-center gap-2">
                <flux:icon.key variant="mini" class="text-zinc-400" /> Administrator
            </div>
        </flux:select.option>

        <flux:select.option>
            <div class="flex items-center gap-2">
                <flux:icon.user variant="mini" class="text-zinc-400" /> Member
            </div>
        </flux:select.option>

        <flux:select.option>
            <div class="flex items-center gap-2">
                <flux:icon.eye variant="mini" class="text-zinc-400" /> Viewer
            </div>
        </flux:select.option>
    </flux:select>

    <flux:select variant="listbox" searchable placeholder="Choose industries...">
        <flux:select.option>Photography</flux:select.option>
        <flux:select.option>Design services</flux:select.option>
        <flux:select.option>Web development</flux:select.option>
        <flux:select.option>Accounting</flux:select.option>
        <flux:select.option>Legal services</flux:select.option>
        <flux:select.option>Consulting</flux:select.option>
        <flux:select.option>Other</flux:select.option>
    </flux:select>

    <flux:select variant="listbox" multiple placeholder="Choose industries...">
        <flux:select.option>Photography</flux:select.option>
        <flux:select.option>Design services</flux:select.option>
        <flux:select.option>Web development</flux:select.option>
        <flux:select.option>Accounting</flux:select.option>
        <flux:select.option>Legal services</flux:select.option>
        <flux:select.option>Consulting</flux:select.option>
        <flux:select.option>Other</flux:select.option>
    </flux:select>

    <flux:select variant="combobox" placeholder="Choose industry...">
        <flux:select.option>Photography</flux:select.option>
        <flux:select.option>Design services</flux:select.option>
        <flux:select.option>Web development</flux:select.option>
        <flux:select.option>Accounting</flux:select.option>
        <flux:select.option>Legal services</flux:select.option>
        <flux:select.option>Consulting</flux:select.option>
        <flux:select.option>Other</flux:select.option>
    </flux:select>

    <flux:select variant="combobox">
        <x-slot name="input">
            <flux:select.input x-model="search" :invalid="$errors->has('...')" />
        </x-slot>

        <flux:select.option>Photography</flux:select.option>
        <flux:select.option>Design services</flux:select.option>
        <flux:select.option>Web development</flux:select.option>
        <flux:select.option>Accounting</flux:select.option>
        <flux:select.option>Legal services</flux:select.option>
        <flux:select.option>Consulting</flux:select.option>
        <flux:select.option>Other</flux:select.option>
    </flux:select>

    <flux:separator />

    <flux:separator text="or" />

    <flux:separator vertical />

    <flux:separator vertical class="my-2" />

    <flux:separator vertical variant="subtle" />

    <flux:switch wire:model.live="notifications" label="Enable notifications" />

    <flux:fieldset>
        <flux:legend>Email notifications</flux:legend>

        <div class="space-y-4">
            <flux:switch wire:model.live="communication" label="Communication emails" description="Receive emails about your account activity." />

            <flux:separator variant="subtle" />

            <flux:switch wire:model.live="marketing" label="Marketing emails" description="Receive emails about new products, features, and more." />

            <flux:separator variant="subtle" />

            <flux:switch wire:model.live="social" label="Social emails" description="Receive emails for friend requests, follows, and more." />

            <flux:separator variant="subtle" />

            <flux:switch wire:model.live="security" label="Security emails" description="Receive emails about your account activity and security." />
        </div>
    </flux:fieldset>

    <flux:fieldset>
        <flux:legend>Email notifications</flux:legend>

        <div class="space-y-3">
            <flux:field variant="inline" class="w-full flex justify-between">
                <flux:switch wire:model.live="email" />
                <flux:label>Communication emails</flux:label>
                <flux:error name="email" />
            </flux:field>

            <flux:field variant="inline" class="w-full flex justify-between">
                <flux:switch wire:model.live="marketing" />
                <flux:label>Marketing emails</flux:label>
                <flux:error name="marketing" />
            </flux:field>

            <flux:field variant="inline" class="w-full flex justify-between">
                <flux:switch wire:model.live="social" />
                <flux:label>Social emails</flux:label>
                <flux:error name="social" />
            </flux:field>

            <flux:field variant="inline" class="w-full flex justify-between">
                <flux:switch wire:model.live="security" />
                <flux:label>Security emails</flux:label>
                <flux:error name="security" />
            </flux:field>
        </div>
    </flux:fieldset>

    <flux:table>
        <flux:table.columns>
            <flux:table.column>Customer</flux:table.column>
            <flux:table.column sortable sorted direction="asc">Date</flux:table.column>
            <flux:table.column>Status</flux:table.column>
            <flux:table.column>Amount</flux:table.column>
        </flux:table.columns>

        <flux:table.rows>
            <flux:table.row>
                <flux:table.cell>Lindsey Aminoff</flux:table.cell>
                <flux:table.cell>Jul 29, 10:45 AM</flux:table.cell>
                <flux:table.cell><flux:badge color="green" size="sm" inset="top bottom">Paid</flux:badge></flux:table.cell>
                <flux:table.cell variant="strong">$49.00</flux:table.cell>
            </flux:table.row>

            <flux:table.row>
                <flux:table.cell>Hanna Lubin</flux:table.cell>
                <flux:table.cell>Jul 28, 2:15 PM</flux:table.cell>
                <flux:table.cell><flux:badge color="green" size="sm" inset="top bottom">Paid</flux:badge></flux:table.cell>
                <flux:table.cell variant="strong">$312.00</flux:table.cell>
            </flux:table.row>

            <flux:table.row>
                <flux:table.cell>Kianna Bushevi</flux:table.cell>
                <flux:table.cell>Jul 30, 4:05 PM</flux:table.cell>
                <flux:table.cell><flux:badge color="zinc" size="sm" inset="top bottom">Refunded</flux:badge></flux:table.cell>
                <flux:table.cell variant="strong">$132.00</flux:table.cell>
            </flux:table.row>

            <flux:table.row>
                <flux:table.cell>Gustavo Geidt</flux:table.cell>
                <flux:table.cell>Jul 27, 9:30 AM</flux:table.cell>
                <flux:table.cell><flux:badge color="green" size="sm" inset="top bottom">Paid</flux:badge></flux:table.cell>
                <flux:table.cell variant="strong">$31.00</flux:table.cell>
            </flux:table.row>
        </flux:table.rows>
    </flux:table>

    <flux:tab.group>
        <flux:tabs wire:model="tab">
            <flux:tab name="profile">Profile</flux:tab>
            <flux:tab name="account">Account</flux:tab>
            <flux:tab name="billing">Billing</flux:tab>
        </flux:tabs>

        <flux:tab.panel name="profile">...</flux:tab.panel>
        <flux:tab.panel name="account">...</flux:tab.panel>
        <flux:tab.panel name="billing">...</flux:tab.panel>
    </flux:tab.group>

    <flux:tab.group>
        <flux:tabs>
            <flux:tab name="profile" icon="user">Profile</flux:tab>
            <flux:tab name="account" icon="cog-6-tooth">Account</flux:tab>
            <flux:tab name="billing" icon="banknotes">Billing</flux:tab>
        </flux:tabs>

        <flux:tab.panel name="profile">...</flux:tab.panel>
        <flux:tab.panel name="account">...</flux:tab.panel>
        <flux:tab.panel name="billing">...</flux:tab.panel>
    </flux:tab.group>

    <flux:tabs class="px-4">
        <flux:tab name="profile">Profile</flux:tab>
        <flux:tab name="account">Account</flux:tab>
        <flux:tab name="billing">Billing</flux:tab>
    </flux:tabs>

    <flux:tabs variant="segmented">
        <flux:tab>List</flux:tab>
        <flux:tab>Board</flux:tab>
        <flux:tab>Timeline</flux:tab>
    </flux:tabs>

    <flux:tabs variant="segmented">
        <flux:tab icon="list-bullet">List</flux:tab>
        <flux:tab icon="squares-2x2">Board</flux:tab>
        <flux:tab icon="calendar-days">Timeline</flux:tab>
    </flux:tabs>

    <flux:tabs variant="segmented" size="sm">
        <flux:tab>Demo</flux:tab>
        <flux:tab>Code</flux:tab>
    </flux:tabs>

    <flux:textarea />

    <flux:textarea
        label="Order notes"
        placeholder="No lettuce, tomato, or onion..."
    />

    <flux:textarea rows="2" label="Note" />

    <flux:textarea rows="auto" />

    <flux:textarea resize="vertical" />
    <flux:textarea resize="none" />
    <flux:textarea resize="horizontal" />
    <flux:textarea resize="both" />

    <flux:tooltip content="Settings">
        <flux:button icon="cog-6-tooth" icon-variant="outline" />
    </flux:tooltip>

    <flux:button tooltip="Settings" ... />

    <flux:tooltip content="Settings" position="top">
        <flux:button icon="cog-6-tooth" icon-variant="outline" />
    </flux:tooltip>

    <flux:tooltip content="Settings" position="right">
        <flux:button icon="cog-6-tooth" icon-variant="outline" />
    </flux:tooltip>

    <flux:tooltip content="Settings" position="bottom">
        <flux:button icon="cog-6-tooth" icon-variant="outline" />
    </flux:tooltip>

    <flux:tooltip content="Settings" position="left">
        <flux:button icon="cog-6-tooth" icon-variant="outline" />
    </flux:tooltip>

    <flux:tooltip content="Cannot merge until reviewed by a team member">
        <div class="flex justify-center">
            <flux:button disabled icon="arrow-turn-down-right">Merge pull request</flux:button>
        </div>
    </flux:tooltip>

    <flux:calendar />
    <flux:calendar mode="range" />
    <flux:calendar week-numbers selectable-header />
    <flux:date-picker />
    <flux:date-picker mode="range" with-presets />
    <flux:date-picker week-numbers selectable-header />
    <flux:date-picker mode="range" value="2025-03-29/2025-04-08" with-presets with-confirmation week-numbers>
        <x-slot name="trigger">
            <flux:date-picker.input />
        </x-slot>
    </flux:date-picker>

    <flux:callout icon="clock">
        <flux:callout.heading>Upcoming maintenance</flux:callout.heading>

        <flux:callout.text>
            Our servers will be undergoing scheduled maintenance this Sunday from 2 AM - 5 AM UTC. Some services may be temporarily unavailable.
            <flux:callout.link href="#">Learn more</flux:callout.link>
        </flux:callout.text>
    </flux:callout>

    <flux:callout>
        <flux:callout.heading icon="newspaper">Policy update</flux:callout.heading>

        <flux:callout.text>We've updated our Terms of Service and Privacy Policy. Please review them to stay informed.</flux:callout.text>
    </flux:callout>

    <flux:callout icon="clock">
        <flux:callout.heading>Subscription expiring soon</flux:callout.heading>
        <flux:callout.text>Your current plan will expire in 3 days. Renew now to avoid service interruption and continue accessing premium features.</flux:callout.text>

        <x-slot name="actions">
            <flux:button>Renew now</flux:button>
            <flux:button variant="ghost" href="/pricing">View plans</flux:button>
        </x-slot>
    </flux:callout>

    <flux:callout icon="cube" variant="secondary" inline>
        <flux:callout.heading>Your package is delayed</flux:callout.heading>

        <x-slot name="actions">
            <flux:button>Track order -></flux:button>
            <flux:button variant="ghost">Reschedule</flux:button>
        </x-slot>
    </flux:callout>

    <flux:callout icon="exclamation-triangle" variant="secondary" inline>
        <flux:callout.heading>Payment issue detected</flux:callout.heading>
        <flux:callout.text>Your last payment attempt failed. Update your billing details to prevent service interruption.</flux:callout.text>

        <x-slot name="actions">
            <flux:button>Update billing</flux:button>
        </x-slot>
    </flux:callout>

    <flux:callout icon="bell" variant="secondary" inline x-data="{ visible: true }" x-show="visible">
        <flux:callout.heading class="flex gap-2 @max-md:flex-col items-start">Upcoming meeting <flux:text>10:00 AM</flux:text></flux:callout.heading>

        <x-slot name="controls">
            <flux:button icon="x-mark" variant="ghost" x-on:click="visible = false" />
        </x-slot>
    </flux:callout>

    <!-- Wrapping divs to add smooth exist transition... -->
    <div x-data="{ visible: true }" x-show="visible" x-collapse>
        <div x-show="visible" x-transition>
            <flux:callout icon="finger-print" variant="secondary">
                <flux:callout.heading>Unusual login attempt</flux:callout.heading>
                <flux:callout.text>We detected a login from a new device in <span class="font-medium text-zinc-800 dark:text-white">New York, USA</span>. If this was you, no action is needed. If not, secure your account immediately.</flux:callout.text>

                <x-slot name="actions">
                    <flux:button>Change password</flux:button>
                    <flux:button variant="ghost">Review activity</flux:button>
                </x-slot>

                <x-slot name="controls">
                    <flux:button icon="x-mark" variant="ghost" x-on:click="visible = false" />
                </x-slot>
            </flux:callout>
        </div>
    </div>

    <flux:callout variant="secondary" icon="information-circle" heading="Your account has been successfully created." />
    <flux:callout variant="success" icon="check-circle" heading="Your account is verified and ready to use." />
    <flux:callout variant="warning" icon="exclamation-circle" heading="Please verify your account to unlock all features." />
    <flux:callout variant="danger" icon="x-circle" heading="Something went wrong. Try again or contact support." />

    <flux:callout>
        <x-slot name="icon">
            <!-- Custom icon: https://lucide.dev/icons/alarm-clock -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-alarm-clock"><circle cx="12" cy="13" r="8"/><path d="M12 9v4l2 2"/><path d="M5 3 2 6"/><path d="m22 6-3-3"/><path d="M6.38 18.7 4 21"/><path d="M17.64 18.67 20 21"/></svg>
        </x-slot>

        <flux:callout.heading>Notification system updated</flux:callout.heading>

        <flux:callout.text>
            <p>We've improved our notification system to deliver alerts faster and more reliably.</p>
        </flux:callout.text>
    </flux:callout>
    

    <flux:avatar tooltip="Caleb Porzio" src="https://unavatar.io/x/calebporzio" />

    <!-- Or infer from the name prop... -->
    <flux:avatar tooltip name="Caleb Porzio" src="https://unavatar.io/x/calebporzio" />

    <flux:avatar name="Caleb Porzio" />
    <flux:avatar name="calebporzio" />
    <flux:avatar name="calebporzio" initials:single />

    <!-- Or use the initials prop directly... -->
    <flux:avatar initials="CP" />

    <!-- Extra large: size-16 (64px) -->
    <flux:avatar size="xl" src="https://unavatar.io/x/calebporzio" />

    <!-- Large: size-12 (48px) -->
    <flux:avatar size="lg" src="https://unavatar.io/x/calebporzio" />

    <!-- Default: size-10 (40px) -->
    <flux:avatar src="https://unavatar.io/x/calebporzio" />

    <!-- Small: size-8 (32px) -->
    <flux:avatar size="sm" src="https://unavatar.io/x/calebporzio" />

    <!-- Extra small: size-6 (24px) -->
    <flux:avatar size="xs" src="https://unavatar.io/x/calebporzio" />

    <flux:avatar icon="user" />
    <flux:avatar icon="phone" />
    <flux:avatar icon="computer-desktop" />

    <flux:avatar name="Caleb Porzio" color="red" />
    <flux:avatar name="Caleb Porzio" color="orange" />
    <flux:avatar name="Caleb Porzio" color="amber" />
    <flux:avatar name="Caleb Porzio" color="yellow" />
    <flux:avatar name="Caleb Porzio" color="lime" />
    <flux:avatar name="Caleb Porzio" color="green" />
    <flux:avatar name="Caleb Porzio" color="emerald" />
    <flux:avatar name="Caleb Porzio" color="teal" />
    <flux:avatar name="Caleb Porzio" color="cyan" />
    <flux:avatar name="Caleb Porzio" color="sky" />
    <flux:avatar name="Caleb Porzio" color="blue" />
    <flux:avatar name="Caleb Porzio" color="indigo" />
    <flux:avatar name="Caleb Porzio" color="violet" />
    <flux:avatar name="Caleb Porzio" color="purple" />
    <flux:avatar name="Caleb Porzio" color="fuchsia" />
    <flux:avatar name="Caleb Porzio" color="pink" />
    <flux:avatar name="Caleb Porzio" color="rose" />

    <flux:avatar name="Caleb Porzio" color="auto" />

    <!-- Use color:seed to generate a consistent color based -->
    <!-- on something unchanging like a user's ID... -->
    <flux:avatar name="Caleb Porzio" color="auto" color:seed="1" />

    <flux:avatar circle src="https://unavatar.io/x/calebporzio" />

    <flux:avatar badge badge:color="green" badge:circle src="https://unavatar.io/x/calebporzio" />

    <flux:avatar badge badge:color="zinc" badge:position="top right" badge:circle badge:variant="outline" src="https://unavatar.io/x/calebporzio" />

    <flux:avatar badge="25" src="https://unavatar.io/x/calebporzio" />

    <flux:avatar circle badge="👍" badge:circle src="https://unavatar.io/x/calebporzio" />

    <flux:avatar circle src="https://unavatar.io/x/calebporzio">
        <x-slot:badge>
            <img class="size-3" src="https://unavatar.io/github/hugosaintemarie" />
        </x-slot:badge>
    </flux:avatar>

    <flux:avatar.group>
        <flux:avatar src="https://unavatar.io/x/calebporzio" />
        <flux:avatar src="https://unavatar.io/github/hugosaintemarie" />
        <flux:avatar src="https://unavatar.io/github/joshhanley" />
        <flux:avatar>3+</flux:avatar>
    </flux:avatar.group>

    <!-- Adapt rings to custom background... -->
    <flux:avatar.group class="**:ring-zinc-100 dark:**:ring-zinc-800">
        <flux:avatar circle src="https://unavatar.io/x/calebporzio" />
        <flux:avatar circle src="https://unavatar.io/github/hugosaintemarie" />
        <flux:avatar circle src="https://unavatar.io/github/joshhanley" />
        <flux:avatar circle>3+</flux:avatar>
    </flux:avatar.group>

    <flux:avatar as="button" src="https://unavatar.io/x/calebporzio" />

    <flux:avatar href="https://x.com/calebporzio" src="https://unavatar.io/x/calebporzio" />

    <div>
        <div class="flex items-center gap-2">
            <flux:icon.star variant="solid" />
            <flux:icon.star variant="solid" />
            <flux:icon.star variant="solid" />
            <flux:icon.star variant="solid" />
            <flux:icon.star variant="solid" />
        </div>

        <flux:heading size="xl" class="mt-4 italic">
            <p>IMO Livewire takes Blade to the next level. It's basically what Blade should be by default. 🔥</p>
        </flux:heading>

        <div class="mt-6 flex items-center gap-4">
            <flux:avatar size="lg" src="https://unavatar.io/x/taylorotwell" />

            <div>
                <flux:heading size="lg">Taylor Otwell</flux:heading>
                <flux:text>Creator of Laravel</flux:text>
            </div>
        </div>
    </div>

    <div>
        <flux:heading size="xl">The Laravel Podcast <flux:badge inset="top bottom" class="ml-1 max-sm:hidden">New</flux:badge></flux:heading>

        <flux:subheading>
            A podcast about Laravel, development best practices, and the PHP ecosystem—hosted by Jeffrey Way, Matt Stauffer, and Taylor Otwell, later joined by Adam Wathan.
        </flux:subheading>

        <flux:avatar.group class="mt-6">
            <flux:avatar circle size="lg" src="https://unavatar.io/x/taylorotwell" />
            <flux:avatar circle size="lg" src="https://unavatar.io/x/adamwathan" />
            <flux:avatar circle size="lg" src="https://unavatar.io/x/jeffrey_way" />
            <flux:avatar circle size="lg" src="https://unavatar.io/x/stauffermatt" />
        </flux:avatar.group>
    </div>

    <flux:card>
        <div class="flex justify-between items-center">
            <flux:heading>Assignees</flux:heading>
            <flux:button size="sm" variant="subtle" icon="plus" inset="top bottom" />
        </div>

        <flux:separator class="mt-2 mb-4" variant="subtle" />

        <ul class="flex flex-col gap-3">
            <li class="flex items-center gap-2">
                <flux:avatar size="xs" src="https://unavatar.io/github/calebporzio" />
                <flux:heading>Caleb Porzio</flux:heading>
            </li>
            <li class="flex items-center gap-2">
                <flux:avatar size="xs" src="https://unavatar.io/github/hugosaintemarie" />
                <flux:heading>Hugo Sainte-Marie</flux:heading>
            </li>
            <li class="flex items-center gap-2">
                <flux:avatar size="xs" src="https://unavatar.io/github/joshhanley" />
                <flux:heading>Josh Hanley</flux:heading>
            </li>
            <li class="flex items-center gap-2">
                <flux:avatar size="xs" src="https://unavatar.io/github/jasonlbeggs" />
                <flux:heading>Jason Beggs</flux:heading>
            </li>
        </ul>
    </flux:card>

    <flux:select variant="listbox" label="Assign to">
        <flux:select.option selected>
            <div class="flex items-center gap-2 whitespace-nowrap">
                <flux:avatar circle size="xs" src="https://unavatar.io/github/calebporzio" /> Caleb Porzio
            </div>
        </flux:select.option>

        <flux:select.option>
            <div class="flex items-center gap-2 whitespace-nowrap">
                <flux:avatar circle size="xs" src="https://unavatar.io/github/hugosaintemarie" /> Hugo Sainte-Marie
            </div>
        </flux:select.option>

        <flux:select.option>
            <div class="flex items-center gap-2 whitespace-nowrap">
                <flux:avatar circle size="xs" src="https://unavatar.io/github/joshhanley" /> Josh Hanley
            </div>
        </flux:select.option>

        <flux:select.option>
            <div class="flex items-center gap-2 whitespace-nowrap">
                <flux:avatar circle size="xs" src="https://unavatar.io/github/jasonlbeggs" /> Jason Beggs
            </div>
        </flux:select.option>
    </flux:select>

    <flux:dropdown hover position="bottom center">
        <flux:avatar as="button" name="calebporzio" src="https://unavatar.io/x/calebporzio" />

        <flux:popover class="relative max-w-[15rem]">
            <div class="absolute top-0 right-0 p-2">
                <flux:button icon="user-plus" variant="filled" size="sm">Follow back</flux:button>
            </div>

            <flux:avatar size="xl" name="calebporzio" src="https://unavatar.io/x/calebporzio" />

            <flux:heading class="mt-2">Caleb Porzio</flux:heading>
            <flux:text>@calebporzio <flux:badge color="zinc" size="sm" inset="top bottom">Follows you</flux:badge></flux:text>

            <flux:text class="mt-3">
                I'm a full stack developer with a passion for building web applications. Currently working on a new project called <flux:link href="https://fluxui.dev">Flux</flux:link>.
            </flux:text>

            <div class="flex gap-4 mt-3">
                <div class="flex gap-2 items-center">
                    <flux:heading>1.2k</flux:heading> <flux:text>Followers</flux:text>
                </div>

                <div class="flex gap-2 items-center">
                    <flux:heading>1.2k</flux:heading> <flux:text>Following</flux:text>
                </div>
            </div>
        </flux:popover>
    </flux:dropdown>


    <flux:profile src="https://unavatar.io/x/calebporzio" />

    <flux:profile avatar="https://unavatar.io/x/calebporzio" />

    <flux:profile :chevron="false" avatar="https://unavatar.io/x/calebporzio" />

    <flux:profile circle :chevron="false" avatar="https://unavatar.io/x/calebporzio" />

    <flux:profile circle name="Caleb Porzio" avatar="https://unavatar.io/x/calebporzio" />

    <!-- Automatically generates initials from name -->
    <flux:profile name="Caleb Porzio" />

    <!-- Specify color... -->
    <flux:profile name="Caleb Porzio" avatar:color="cyan" />

    <!-- Manually specify initials... -->
    <flux:profile initials="CP" />

    <!-- Provide name only for avatar initial generation... -->
    <flux:profile avatar:name="Caleb Porzio" />

    <flux:profile
        icon:trailing="chevron-up-down"
        avatar="https://unavatar.io/x/calebporzio"
        name="Caleb Porzio"
    />

    <flux:dropdown align="end">
        <flux:profile avatar="https://unavatar.io/x/calebporzio" />

        <flux:navmenu class="max-w-[12rem]">
            <div class="px-2 py-1.5">
                <flux:subheading size="sm">Signed in as</flux:subheading>
                <flux:heading class="mt-1! truncate">caleb@example.com</flux:heading>
            </div>

            <flux:navmenu.separator />

            <div class="px-2 py-1.5">
                <flux:subheading size="sm" class="pl-7">Teams</flux:subheading>
            </div>

            <flux:navmenu.item href="#" icon="check" class="text-zinc-800 dark:text-white truncate">Personal</flux:navmenu.item>
            <flux:navmenu.item href="#" indent class="text-zinc-800 dark:text-white truncate">Wireable LLC</flux:navmenu.item>

            <flux:navmenu.separator />

            <flux:navmenu.item href="/dashboard" icon="key" class="text-zinc-800 dark:text-white">Licenses</flux:navmenu.item>
            <flux:navmenu.item href="/account" icon="user" class="text-zinc-800 dark:text-white">Account</flux:navmenu.item>

            <flux:navmenu.separator />

            <flux:navmenu.item href="/logout" icon="arrow-right-start-on-rectangle" class="text-zinc-800 dark:text-white">Logout</flux:navmenu.item>
        </flux:navmenu>
    </flux:dropdown>

    <flux:dropdown position="top" align="start">
        <flux:profile avatar="https://unavatar.io/x/calebporzio" name="Caleb Porzio" />

        <flux:menu>
            <flux:menu.radio.group>
                <flux:menu.radio checked>Caleb Porzio</flux:menu.radio>
                <flux:menu.radio>Hugo Sainte-Marie</flux:menu.radio>
                <flux:menu.radio>Josh Hanley</flux:menu.radio>
            </flux:menu.radio.group>

            <flux:menu.separator />

            <flux:menu.item icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
        </flux:menu>
    </flux:dropdown>
</div>
