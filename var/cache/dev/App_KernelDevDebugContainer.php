<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerN0CC1pc\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerN0CC1pc/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerN0CC1pc.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerN0CC1pc\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerN0CC1pc\App_KernelDevDebugContainer([
    'container.build_hash' => 'N0CC1pc',
    'container.build_id' => '280e1e35',
    'container.build_time' => 1589295049,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerN0CC1pc');
