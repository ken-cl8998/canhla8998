<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

1, Design database table: user(username, password, kind) & tintuc(content, created_time, style)
2, Desgin frontend
- trang-chu: show all artical for user
- admin-login: for admin can login ->admin-bai-viet
- user-log-in: for user can login -> author-bai-viet
- author-bai-viet: show articals users can write artical, edit, delete news with pending approval 
- admin-bai-viet: show articals & allow admin approval articals written by author
3, Design backend:
logic: authors write a artical -> save on database with style = 0 & status = "pending for approval". Admin will see the status and approval this artical -> after update on database style = 1. If style = 1->will show on trang-chu.
