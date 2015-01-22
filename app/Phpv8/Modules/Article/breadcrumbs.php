<?php

// Article

Breadcrumbs::register('admin.article.index', function (\DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs) {
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push(trans('Article::global.title'), route('admin.article.index'));
});

Breadcrumbs::register('admin.article.edit', function (
        \DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs,
        \Phpv8\Modules\Article\Models\Article $news
    ) {
    $breadcrumbs->parent('admin.article.index');
    $breadcrumbs->push($news->title, route('admin.article.edit', $news->id));
});

Breadcrumbs::register('admin.article.create', function (\DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs) {
    $breadcrumbs->parent('admin.article.index');
    $breadcrumbs->push(trans('Article::global.add'), route('admin.article.create'));
});
