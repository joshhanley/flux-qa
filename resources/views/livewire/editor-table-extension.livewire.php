<?php

use Livewire\Component;

new class extends Component {
    public $content = <<< HTML
    <table>
      <tbody>
        <tr>
          <th>Name</th>
          <th colspan="3">Description</th>
        </tr>
        <tr>
          <td>Cyndi Lauper</td>
          <td>Singer</td>
          <td>Songwriter</td>
          <td>Actress</td>
        </tr>
      </tbody>
    </table>
    HTML;
} ?>

<div>
    <flux:editor wire:model="content" />

    <flux:button wire:click="$refresh">Refresh</flux:button>
    <flux:link href="/playground" wire:navigate>Playground</flux:link>
</div>
