<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNUMo60u\App_KernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNUMo60u/App_KernelTestDebugContainer.php') {
    touch(__DIR__.'/ContainerNUMo60u.legacy');

    return;
}

if (!\class_exists(App_KernelTestDebugContainer::class, false)) {
    \class_alias(\ContainerNUMo60u\App_KernelTestDebugContainer::class, App_KernelTestDebugContainer::class, false);
}

return new \ContainerNUMo60u\App_KernelTestDebugContainer([
    'container.build_hash' => 'NUMo60u',
    'container.build_id' => '0719201e',
    'container.build_time' => 1706034533,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNUMo60u');
