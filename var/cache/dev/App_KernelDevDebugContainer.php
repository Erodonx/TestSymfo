<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUD7xruZ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUD7xruZ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUD7xruZ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUD7xruZ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerUD7xruZ\App_KernelDevDebugContainer([
    'container.build_hash' => 'UD7xruZ',
    'container.build_id' => 'bd6bfe74',
    'container.build_time' => 1722415974,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUD7xruZ');
