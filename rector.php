<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Naming\Rector\Class_\RenamePropertyToMatchTypeRector;
use Rector\Naming\Rector\Foreach_\RenameForeachValueVariableToMatchExprVariableRector;
use Rector\Naming\Rector\Foreach_\RenameForeachValueVariableToMatchMethodCallReturnTypeRector;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/app',
        __DIR__ . '/routes',
        __DIR__ . '/tests',
    ])
    ->withPreparedSets(
        deadCode: true,
        codeQuality: true,
        codingStyle: true,
        typeDeclarations: true,
        privatization: true,
        instanceOf: true,
        earlyReturn: true,
        strictBooleans: true,
        carbon: true,
        rectorPreset: true,
    )
    ->withRules([
        // in lieu of naming set
        RenamePropertyToMatchTypeRector::class,
        RenameForeachValueVariableToMatchMethodCallReturnTypeRector::class,
        RenameForeachValueVariableToMatchExprVariableRector::class,
    ])
    ->withPhpSets();
