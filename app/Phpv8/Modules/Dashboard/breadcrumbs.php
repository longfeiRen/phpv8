<?php
// Module
Breadcrumbs::register('dashboard', function(\DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs) {
    $breadcrumbs->push(trans('Dashboard::global.title'), route('dashboard'));
});



