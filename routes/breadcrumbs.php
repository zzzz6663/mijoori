<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use App\Models\User;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('user.index', function (BreadcrumbTrail $trail) {
    // $trail->parent('admin.provinces');
    $trail->push('لیست کاربران', route('user.index'));
});
Breadcrumbs::for('user.show', function (BreadcrumbTrail $trail,User $user) {

    $trail->parent('user.index');
    $trail->push('پروفایل کاربر  ', route('user.show',$user->id));
});
Breadcrumbs::for('province.index', function (BreadcrumbTrail $trail) {
    $trail->push('لیست استان ها', route('province.index'));
});

// // Home > Blog
// Breadcrumbs::for('blog', function (BreadcrumbTrail $trail) {
//     $trail->parent('home');
//     $trail->push('Blog', route('blog'));
// });

// // Home > Blog > [Category]
// Breadcrumbs::for('category', function (BreadcrumbTrail $trail, $category) {
//     $trail->parent('blog');
//     $trail->push($category->title, route('category', $category));
// });
