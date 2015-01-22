<?php

// Module

Breadcrumbs::register('admin.user.index', function (\DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs) {
    $breadcrumbs->parent('dashboard');
    //$breadcrumbs->push(Str::title(trans('news::global.name')), route('admin.user.index'));
});

Breadcrumbs::register('admin.user.edit', function (
        \DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs,
        \Phpv8\Modules\Module\Models\Module $news
    ) {
    $breadcrumbs->parent('admin.user.index');
    $breadcrumbs->push($news->title, route('admin.user.edit', $news->id));
});

Breadcrumbs::register('admin.user.create', function (\DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs) {
    $breadcrumbs->parent('admin.user.index');
    $breadcrumbs->push(trans('news::global.New'), route('admin.user.create'));
});
