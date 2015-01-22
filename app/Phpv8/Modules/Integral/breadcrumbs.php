<?php

// Integral

Breadcrumbs::register('admin.integral.index', function (\DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs) {
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push(trans('Integral::global.title'), route('admin.integral.index'));
});

Breadcrumbs::register('admin.integral.edit', function (
        \DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs,
        \Phpv8\Modules\Integral\Models\Integral $integral
    ) {
    $breadcrumbs->parent('admin.integral.index');
    $breadcrumbs->push($integral->title, route('admin.integral.edit', $integral->id));
});

Breadcrumbs::register('admin.integral.create', function (\DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs) {
    $breadcrumbs->parent('admin.integral.index');
    $breadcrumbs->push(trans('Integral::global.add'), route('admin.integral.create'));
});
