<?php

use Livewire\Volt\Component;
use OpenAI\Laravel\Facades\OpenAI;

new class extends Component {
    public $prompt = 'I\'m just testing an issue with streamed responses. Please just respond with one word answers for now';
    public $response = '';
    public $isLoading = false;

    public function ask()
    {
        $this->isLoading = true;
        $this->response = '';

        try {
            ray('start');
            $response = OpenAI::chat()->createStreamed([
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    ['role' => 'user', 'content' => $this->prompt],
                ],
            ]);
            ray('response', $response);

            foreach ($response as $chunk) {
                // ray('chunk');
                $content = $chunk->choices[0]->delta->content ?? '';
                // ray('content', $content);
                if ($content) {
                    $this->stream(
                        to: 'response',
                        content: $content
                    );
                }
            }
        } catch (\Exception $e) {
            $this->response = "Error: " . $e->getMessage();
        }

        $this->isLoading = false;
    }
}; ?>

<div class="flex flex-col items-start space-y-4 p-4">
    <div class="w-full">
        <textarea
            wire:model="prompt"
            class="w-full p-2 border rounded-lg"
            rows="4"
            placeholder="Ask ChatGPT something..."
        ></textarea>
    </div>

    <button
        wire:click="ask"
        wire:loading.attr="disabled"
        class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 disabled:opacity-50"
    >
        <span wire:loading.remove>Ask ChatGPT</span>
        <span wire:loading>Thinking...</span>
    </button>

    <div class="w-full mt-4">
        <div class="p-4 border rounded-lg min-h-[100px]">
            <div wire:stream="response" class="whitespace-pre-wrap" wire:ignore>
                {{ $response }}
            </div>
        </div>
    </div>
</div>
