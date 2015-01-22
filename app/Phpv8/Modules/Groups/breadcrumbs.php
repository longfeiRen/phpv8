<?php

// Groups

Breadcrumbs::register('admin.groups.index', function (\DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs) {
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push(trans('Groups::global.title'), route('admin.groups.index'));
});

Breadcrumbs::register('admin.groups.edit', function (
        \DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs,
        \Phpv8\Modules\Groups\Models\Groups $groups
    ) {
    $breadcrumbs->parent('admin.groups.index');
    $breadcrumbs->push($groups->title, route('admin.groups.edit', $groups->id));
});

Breadcrumbs::register('admin.groups.create', function (\DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs) {
    $breadcrumbs->parent('admin.groups.index');
    $breadcrumbs->push(trans('Groups::global.add'), route('admin.groups.create'));
});
