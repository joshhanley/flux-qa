<?php

namespace App;

use Illuminate\Support\Facades\File;

class Components
{
    public static function get()
    {
        $files = File::files(resource_path('views/livewire'));

        $bladeFiles = [];

        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_ends_with($file->getFilename(), '.blade.php')) {
                $componentName = str($file->getFilename())->replace('.blade.php', '')->__toString();

                if ($componentName === 'index') {
                    continue;
                }

                $bladeFiles[] = $componentName;
            }
        }

        return $bladeFiles;
    }
}
