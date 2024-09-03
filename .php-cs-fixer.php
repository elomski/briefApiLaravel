<?php

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12' => true,
        // Ajoute d'autres règles si nécessaire
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__ . '/app')
            ->in(__DIR__ . '/routes')
    );
