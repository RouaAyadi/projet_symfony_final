<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerApcoI1y\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerApcoI1y/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerApcoI1y.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerApcoI1y\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerApcoI1y\App_KernelDevDebugContainer([
    'container.build_hash' => 'ApcoI1y',
    'container.build_id' => '2427f24b',
    'container.build_time' => 1713633863,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerApcoI1y');
