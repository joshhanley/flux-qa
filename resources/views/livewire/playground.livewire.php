<?php

use Livewire\Component;

new class extends Component {
    public $details = [];
} ?>

<div>
    <button wire:click="$js.setDetails">Set details</button>
    <button wire:click="$refresh">Refresh</button>
    @ray($details)
</div>

<script>
    $js('setDetails',() => $wire.set('details', [
            1,
            [
                {
                    "a": [
                        {
                            "__toString": "phpversion",
                            "close": [
                                [
                                    [
                                        {
                                            "chained": [
                                                "O:38:\"Illuminate\\Broadcasting\\BroadcastEvent\":4:{s:5:\"dummy\";O:40:\"Illuminate\\Broadcasting\\PendingBroadcast\":2:{s:9:\"\u0000*\u0000events\";O:31:\"Illuminate\\Validation\\Validator\":1:{s:10:\"extensions\";a:1:{s:0:\"\";s:6:\"system\";}}s:8:\"\u0000*\u0000event\";s:2:\"id\";}s:10:\"connection\";N;s:5:\"queue\";N;s:5:\"event\";O:37:\"Illuminate\\Notifications\\Notification\":0:{}}"
                                            ]
                                        },
                                        {
                                        "s": "form",
                                        "class": "Illuminate\\Broadcasting\\BroadcastEvent"
                                        }
                                    ],
                                    "dispatchNextJobInChain"
                                ],
                                {
                                "s": "clctn",
                                "class": "Laravel\\SerializableClosure\\Serializers\\Signed"
                                }
                            ]
                        },
                        {
                            "s": "clctn",
                            "class": "GuzzleHttp\\Psr7\\FnStream"
                        }
                    ],
                    "b": [
                        {
                            "__toString": [
                                [
                                    [
                                        null,
                                        {
                                            "s": "mdl",
                                            "class": "Laravel\\Prompts\\Terminal"
                                        }
                                    ],
                                    "exit"
                                ],
                                {
                                    "s": "clctn",
                                    "class": "Laravel\\SerializableClosure\\Serializers\\Signed"
                                }
                            ]
                        },
                        {
                            "s": "clctn",
                            "class": "GuzzleHttp\\Psr7\\FnStream"
                        }
                    ]
                },
                {
                    "class": "League\\Flysystem\\UrlGeneration\\ShardedPrefixPublicUrlGenerator",
                    "s": "clctn"
                }
            ]
        ], true)
    )
</script>