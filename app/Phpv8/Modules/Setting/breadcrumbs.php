<?php

// Setting

Breadcrumbs::register('admin.setting.index', function (\DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs) {
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push(trans('Setting::global.title'), route('admin.setting.index'));
});

