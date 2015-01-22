<?php

// Letter

Breadcrumbs::register('admin.letter.index', function (\DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs) {
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push(trans('Letter::global.title'), route('admin.letter.index'));
});

Breadcrumbs::register('admin.letter.edit', function (
        \DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs,
        \Phpv8\Modules\Letter\Models\Letter $letter
    ) {
    $breadcrumbs->parent('admin.letter.index');
    $breadcrumbs->push($letter->title, route('admin.letter.edit', $letter->id));
});

Breadcrumbs::register('admin.letter.create', function (\DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs) {
    $breadcrumbs->parent('admin.letter.index');
    $breadcrumbs->push(trans('Letter::global.add'), route('admin.letter.create'));
});
