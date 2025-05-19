<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div>
    <div class="bg-blue-500 w-full h-24"></div>
    <div class="overflow-y-hidden">
        <flux:modal.trigger name="edit-profile">
            <flux:button>Edit profile</flux:button>
        </flux:modal.trigger>

        <flux:modal name="edit-profile" class="md:w-96">
            <div>
                <div class="h-[300px] overflow-y-auto w-56">
                    <flux:select variant="listbox">
                        <flux:select.option value="1">Option 1</flux:select.option>
                        <flux:select.option value="2">Option 2</flux:select.option>
                        <flux:select.option value="3">Option 3</flux:select.option>
                        <flux:select.option value="4">Option 4</flux:select.option>
                        <flux:select.option value="5">Option 5</flux:select.option>
                        <flux:select.option value="6">Option 6</flux:select.option>
                        <flux:select.option value="7">Option 7</flux:select.option>
                        <flux:select.option value="8">Option 8</flux:select.option>
                        <flux:select.option value="9">Option 9</flux:select.option>
                        <flux:select.option value="10">Option 10</flux:select.option>
                    </flux:select>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
                        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                        sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia
                        non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,
                        nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo
                        voluptas nulla pariatur?</p>
                </div>
            </div>
        </flux:modal>
        <div class="h-[300px] overflow-y-auto w-56">
            <flux:select variant="listbox">
                <flux:select.option value="1">Option 1</flux:select.option>
                <flux:select.option value="2">Option 2</flux:select.option>
                <flux:select.option value="3">Option 3</flux:select.option>
                <flux:select.option value="4">Option 4</flux:select.option>
                <flux:select.option value="5">Option 5</flux:select.option>
                <flux:select.option value="6">Option 6</flux:select.option>
                <flux:select.option value="7">Option 7</flux:select.option>
                <flux:select.option value="8">Option 8</flux:select.option>
                <flux:select.option value="9">Option 9</flux:select.option>
                <flux:select.option value="10">Option 10</flux:select.option>
            </flux:select>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
                aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia
                non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,
                nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo
                voluptas nulla pariatur?</p>
        </div>
    </div>
    <div class="h-[1000px]"></div>
</div>
