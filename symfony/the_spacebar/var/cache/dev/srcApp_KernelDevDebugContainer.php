<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerY1sxpGu\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerY1sxpGu/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerY1sxpGu.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerY1sxpGu\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerY1sxpGu\srcApp_KernelDevDebugContainer(array(
    'container.build_hash' => 'Y1sxpGu',
    'container.build_id' => '1d85a656',
    'container.build_time' => 1547654866,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerY1sxpGu');
