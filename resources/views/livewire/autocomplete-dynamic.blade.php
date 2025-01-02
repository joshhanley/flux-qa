<?php

use Livewire\Volt\Component;

use App\Models\Document;

new class extends Component {

    public array $orders = [];

    public function mount()
    {
        // seed one starting order
        $this->orders[] = [
            'id' => 1,
            'total' => 1,
            'title' => 'Title 1',
        ];
    }

    public function documentsMatching(string $title)
    {
        if (empty($title)) {
            return [];
        }

        return Document::query()
            ->whereLike('title', '%'.$title.'%')
            ->orderBy('title')
            ->pluck('title', 'id');
    }

    public function save()
    {
        // add next order w/ default as 'Title 1'
        $this->orders[] = [
            'id' => count($this->orders) + 1,
            'total' => count($this->orders),
            'title' => 'Title 1',
        ];
    }
};
?>

<div>
    @forelse($orders as $index => $order)
        <div class="flex items-center mt-1 space-x-4">
            <div class="w-[200px]">{{ $orders[$index]['title'] }}</div>

            <div class="w-[400px] flex flex-col">
                <flux:autocomplete
                    wire:model.live="orders.{{ $index }}.title"
                    :filter="false"
                    :wire:key="$orders[$index]['id']"
                    placeholder="Choose Document Title..."
                >
                    @foreach ($this->documentsMatching($orders[$index]['title']) as $id => $title )
                        <flux:autocomplete.item wire:key="{{ $orders[$index]['id'] }}-{{ $id }}">
                            {{ $title }}
                        </flux:autocomplete.item>
                    @endforeach
                </flux:autocomplete>
            </div>

            <div>
                <flux:button wire:click="save">Save + Add Row</flux:button>
            </div>
        </div>
    @empty
        No Orders Yet
    @endforelse
</div>