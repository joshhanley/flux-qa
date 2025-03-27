<?php

use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new
//#[Layout('components.layouts.rtl')]
class extends Component {
    //
}; ?>

<div class="flex flex-col space-y-1">
    Button group
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

    <flux:button.group>
        <flux:button icon="chevron-left"></flux:button>
        <flux:button/>
        <flux:button icon-trailing="chevron-right"></flux:button>
    </flux:button.group>

    <flux:button.group>
        <flux:button icon="chevron-left"></flux:button>
        <flux:input/>
        <flux:button icon-trailing="chevron-right"></flux:button>
    </flux:button.group>

    <flux:button.group>
        <flux:button icon="chevron-left"></flux:button>
        <flux:date-picker/>
        <flux:button icon-trailing="chevron-right"></flux:button>
    </flux:button.group>

    <flux:button.group>
        <flux:button icon="chevron-left"></flux:button>
        <flux:select>
            <flux:select.option selected>USD</flux:select.option>
            <!-- ... -->
        </flux:select>
        <flux:button icon-trailing="chevron-right"></flux:button>
    </flux:button.group>

    Input group
    <flux:input.group>
        <flux:button icon="chevron-left" />
        <flux:date-picker/>
        <flux:button icon-trailing="chevron-right" />
    </flux:input.group>

    <flux:input.group>
        <flux:button icon="chevron-left" />
        <flux:input />
        <flux:button icon-trailing="chevron-right" />
    </flux:input.group>

    <flux:input.group>
        <flux:input />
        <flux:input />
        <flux:input />
    </flux:input.group>

    <flux:input.group>
        <flux:button icon="chevron-left" />
        <flux:input />
        <flux:input />
        <flux:button icon-trailing="chevron-right" />
    </flux:input.group>

    <flux:input.group>
        <flux:button icon="chevron-left" />
        <flux:select>
        </flux:select>
        <flux:button icon-trailing="chevron-right" />
    </flux:input.group>

    <flux:input.group>
        <flux:button icon="chevron-left" />
        <flux:select variant="listbox">
        </flux:select>
        <flux:button icon-trailing="chevron-right" />
    </flux:input.group>

    <flux:input.group>
        <flux:input />
        <flux:button icon="chevron-left" />
        <flux:button icon-trailing="chevron-right" />
    </flux:input.group>

    <flux:input.group>
        <flux:input placeholder="Post title" />

        <flux:button icon="plus">New post</flux:button>
    </flux:input.group>

    <flux:input.group>
        <flux:select class="max-w-fit">
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

    <flux:input.group>
        <flux:input.group.prefix>https://</flux:input.group.prefix>

        <flux:input placeholder="mysite" />

        <flux:input.group.suffix>.brand.com</flux:input.group.suffix>
    </flux:input.group>

    <flux:input.group>
        <flux:input.group.prefix>https://</flux:input.group.prefix>

        <flux:date-picker />

        <flux:input.group.suffix>.brand.com</flux:input.group.suffix>
    </flux:input.group>

    <flux:input.group>
        <flux:input.group.prefix>https://</flux:input.group.prefix>

        <flux:select class="max-w-fit">
            <flux:select.option selected>USD</flux:select.option>
            <!-- ... -->
        </flux:select>

        <flux:input.group.suffix>.brand.com</flux:input.group.suffix>
    </flux:input.group>

    <flux:input.group>
        <flux:input.group.prefix>https://</flux:input.group.prefix>

        <flux:button icon="chevron-left" />

        <flux:input.group.suffix>.brand.com</flux:input.group.suffix>
    </flux:input.group>
</div>
