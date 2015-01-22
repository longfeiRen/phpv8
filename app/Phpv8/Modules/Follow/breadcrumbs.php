<?php

// Follow

Breadcrumbs::register('admin.follow.index', function (\DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs) {
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push(trans('Follow::global.title'), route('admin.follow.index'));
});
