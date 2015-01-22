<?php

// Video

Breadcrumbs::register('admin.video.index', function (\DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs) {
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push(trans('Video::global.title'), route('admin.video.index'));
});

Breadcrumbs::register('admin.video.edit', function (
        \DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs,
        \Phpv8\Modules\Video\Models\Video $video
    ) {
    $breadcrumbs->parent('admin.video.index');
    $breadcrumbs->push($video->title, route('admin.video.edit', $video->id));
});

Breadcrumbs::register('admin.video.create', function (\DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs) {
    $breadcrumbs->parent('admin.video.index');
    $breadcrumbs->push(trans('Video::global.add'), route('admin.video.create'));
});
