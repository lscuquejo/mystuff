<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container3KNkcbs\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container3KNkcbs/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container3KNkcbs.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container3KNkcbs\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container3KNkcbs\srcApp_KernelDevDebugContainer(array(
    'container.build_hash' => '3KNkcbs',
    'container.build_id' => '66c9e90e',
    'container.build_time' => 1549038414,
), __DIR__.\DIRECTORY_SEPARATOR.'Container3KNkcbs');
