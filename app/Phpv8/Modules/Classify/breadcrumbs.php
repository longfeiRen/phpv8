<?php

// Classify

Breadcrumbs::register('admin.classify.index', function (\DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs) {
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push(trans('Classify::global.title'), route('admin.classify.index'));
});

Breadcrumbs::register('admin.classify.edit', function (
        \DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs,
        \Phpv8\Modules\Classify\Models\Classify $class
    ) {
    $breadcrumbs->parent('admin.classify.index');
    $breadcrumbs->push($class->title, route('admin.classify.edit', $class->id));
});

Breadcrumbs::register('admin.classify.create', function (\DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs) {
    $breadcrumbs->parent('admin.classify.index');
    $breadcrumbs->push(trans('Classify::global.add'), route('admin.classify.create'));
});
