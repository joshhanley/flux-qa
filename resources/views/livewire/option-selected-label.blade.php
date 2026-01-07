<?php

use Livewire\Component;

new class extends Component {
    public $listbox;
    public $listboxMultiple;
    public $combobox;
    public $pillbox;
    public $pillboxMultiple;
}; ?>

<div class="max-w-md mx-auto">
    <flux:text>Listbox: {{ $listbox }}</flux:text>

    <flux:select wire:model.live="listbox" variant="listbox" placeholder="Choose industry...">
        <flux:select.option value="photography" label2="Photography" selected-label="PhotographyBOB">
            <flux:icon.camera variant="mini" />Photography
        </flux:select.option>
        <flux:select.option value="design-services" label="Design services" selected-label="Design servicesBOB" />
        <flux:select.option value="web-development" label="Web development" selected-label="Web developmentBOB" />
        <flux:select.option value="accounting" label="Accounting" selected-label="AccountingBOB" />
        <flux:select.option value="legal-services" label="Legal services" selected-label="Legal servicesBOB" />
        <flux:select.option value="consulting" label="Consulting" selected-label="ConsultingBOB" />
        <flux:select.option value="other" label="Other" selected-label="OtherBOB" />
    </flux:select>


    <flux:text>Listbox Multiple: {{ var_export($listboxMultiple, true) }}</flux:text>

    <flux:select wire:model.live="listboxMultiple" variant="listbox" placeholder="Choose industry..." multiple>
        <flux:select.option value="photography" label="Photography" selected-label="PhotographyBOB" />
        <flux:select.option value="design-services" label="Design services" selected-label="Design servicesBOB" />
        <flux:select.option value="web-development" label="Web development" selected-label="Web developmentBOB" />
        <flux:select.option value="accounting" label="Accounting" selected-label="AccountingBOB" />
        <flux:select.option value="legal-services" label="Legal services" selected-label="Legal servicesBOB" />
        <flux:select.option value="consulting" label="Consulting" selected-label="ConsultingBOB" />
        <flux:select.option value="other" label="Other" selected-label="OtherBOB" />
    </flux:select>

    <flux:text>Combobox: {{ $combobox }}</flux:text>
    <flux:select wire:model.live="combobox" variant="combobox" placeholder="Choose industry...">
        <flux:select.option value="photography" label="Photography" selected-label="PhotographyBOB" />
        <flux:select.option value="design-services" label="Design services" selected-label="Design servicesBOB" />
        <flux:select.option value="web-development" label="Web development" selected-label="Web developmentBOB" />
        <flux:select.option value="accounting" label="Accounting" selected-label="AccountingBOB" />
        <flux:select.option value="legal-services" label="Legal services" selected-label="Legal servicesBOB" />
        <flux:select.option value="consulting" label="Consulting" selected-label="ConsultingBOB" />
        <flux:select.option value="other" label="Other" selected-label="OtherBOB" />
    </flux:select>

    <flux:text>Pillbox: {{ $pillbox }}</flux:text>
    <flux:pillbox wire:model.live="pillbox" placeholder="Choose industry...">
        <flux:pillbox.option value="photography" label="Photography" selected-label="PhotographyBOB" />
        <flux:pillbox.option value="design-services" label="Design services" selected-label="Design servicesBOB" />
        <flux:pillbox.option value="web-development" label="Web development" selected-label="Web developmentBOB" />
        <flux:pillbox.option value="accounting" label="Accounting" selected-label="AccountingBOB" />
        <flux:pillbox.option value="legal-services" label="Legal services" selected-label="Legal servicesBOB" />
        <flux:pillbox.option value="consulting" label="Consulting" selected-label="ConsultingBOB" />
        <flux:pillbox.option value="other" label="Other" selected-label="OtherBOB" />
    </flux:pillbox>

    <flux:text>Pillbox Multiple: {{ var_export($pillboxMultiple, true) }}</flux:text>
    <flux:pillbox wire:model.live="pillboxMultiple" placeholder="Choose industry..." multiple>
        <flux:pillbox.option value="photography" label="Photography" selected-label="PhotographyBOB" />
        <flux:pillbox.option value="design-services" label="Design services" selected-label="Design servicesBOB" />
        <flux:pillbox.option value="web-development" label="Web development" selected-label="Web developmentBOB" />
        <flux:pillbox.option value="accounting" label="Accounting" selected-label="AccountingBOB" />
        <flux:pillbox.option value="legal-services" label="Legal services" selected-label="Legal servicesBOB" />
        <flux:pillbox.option value="consulting" label="Consulting" selected-label="ConsultingBOB" />
        <flux:pillbox.option value="other" label="Other" selected-label="OtherBOB" />
    </flux:pillbox>
</div>
