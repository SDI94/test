<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJMaLlGX\appAppKernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJMaLlGX/appAppKernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJMaLlGX.legacy');

    return;
}

if (!\class_exists(appAppKernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJMaLlGX\appAppKernelDevDebugContainer::class, appAppKernelDevDebugContainer::class, false);
}

return new \ContainerJMaLlGX\appAppKernelDevDebugContainer([
    'container.build_hash' => 'JMaLlGX',
    'container.build_id' => '03f96954',
    'container.build_time' => 1728029017,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJMaLlGX');
