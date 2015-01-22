<?php

// Users

Breadcrumbs::register('admin.users.index', function (\DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs) {
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push(trans('Users::global.title'), route('admin.users.index'));
});

Breadcrumbs::register('admin.users.edit', function (
        \DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs,
        \Phpv8\Modules\Users\Models\Users $news
    ) {
    $breadcrumbs->parent('admin.users.index');
    $breadcrumbs->push($news->title, route('admin.users.edit', $news->id));
});

Breadcrumbs::register('admin.users.create', function (\DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs) {
    $breadcrumbs->parent('admin.users.index');
    $breadcrumbs->push(trans('Users::global.add'), route('admin.users.create'));
});
