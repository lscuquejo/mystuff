<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8Jhd6fO\srcApp_KernelProdDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8Jhd6fO/srcApp_KernelProdDebugContainer.php') {
    touch(__DIR__.'/Container8Jhd6fO.legacy');

    return;
}

if (!\class_exists(srcApp_KernelProdDebugContainer::class, false)) {
    \class_alias(\Container8Jhd6fO\srcApp_KernelProdDebugContainer::class, srcApp_KernelProdDebugContainer::class, false);
}

return new \Container8Jhd6fO\srcApp_KernelProdDebugContainer(array(
    'container.build_hash' => '8Jhd6fO',
    'container.build_id' => 'daedc7b2',
    'container.build_time' => 1548849635,
), __DIR__.\DIRECTORY_SEPARATOR.'Container8Jhd6fO');
