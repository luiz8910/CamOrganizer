<?php

$directory = __DIR__ . '/resources/views';
$pattern = '/asset\([\'"]public\/(.*?)[\'"]\)/';

$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($directory),
    RecursiveIteratorIterator::SELF_FIRST
);

foreach ($iterator as $file) {
    if ($file->isFile() && in_array($file->getExtension(), ['php', 'blade'])) {
        $contents = file_get_contents($file);
        $newContents = preg_replace($pattern, 'asset(\'$1\')', $contents);

        if ($newContents !== $contents) {
            file_put_contents($file, $newContents);
            echo "Corrigido: " . $file . PHP_EOL;
        }
    }
}
