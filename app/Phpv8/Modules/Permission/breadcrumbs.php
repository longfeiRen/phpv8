<?php

// Permission

Breadcrumbs::register('admin.permission.index', function (\DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs) {
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push(trans('Permission::global.title'), route('admin.permission.index'));
});