<?php

// Users

Breadcrumbs::register('admin.uploads.index', function (\DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs) {
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push(trans('Uploads::global.title'), route('admin.uploads.index'));
});
