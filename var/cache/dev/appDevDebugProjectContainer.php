<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQ1hy00e\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQ1hy00e/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerQ1hy00e.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerQ1hy00e\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerQ1hy00e\appDevDebugProjectContainer();
