<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Intervention\Image\ImageManager;

class ConvertImagesToWebP extends Command
{
    protected $signature = 'images:convert-to-webp';
    protected $description = 'Convert all images to WebP format';

    public function handle()
    {
        $paths = [
            public_path('images'),
            public_path('technologies'),
            public_path('icons'),
        ];

        $manager = new ImageManager();

        foreach ($paths as $path) {
            if (!is_dir($path)) continue;
            
            $files = glob($path . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
            
            foreach ($files as $file) {
                $webpPath = pathinfo($file, PATHINFO_DIRNAME) . '/' . 
                           pathinfo($file, PATHINFO_FILENAME) . '.webp';
                
                if (!file_exists($webpPath)) {
                    $image = $manager->read($file);
                    $image->toWebP()->save($webpPath, 80);
                    $this->info("Converted: " . basename($file));
                }
            }
        }
    }
}