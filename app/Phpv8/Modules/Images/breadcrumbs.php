<?php

// Images

Breadcrumbs::register('admin.images.index', function (\DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs) {
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push(trans('Images::global.title'), route('admin.images.index'));
});

Breadcrumbs::register('admin.images.edit', function (
        \DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs,
        \Phpv8\Modules\Images\Models\Images $news
    ) {
    $breadcrumbs->parent('admin.images.index');
    $breadcrumbs->push($news->title, route('admin.images.edit', $news->id));
});

Breadcrumbs::register('admin.images.create', function (\DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs) {
    $breadcrumbs->parent('admin.images.index');
    $breadcrumbs->push(trans('Images::global.add'), route('admin.images.create'));
});
