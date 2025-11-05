<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// pagination 스타일 설정을 위해 추가
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Paginator::useTailwind();

        // 커스터마이징 하려면 php artisan vendor:publish --tag=laravel-pagination 실행
        // resources/views/vendor/pagination 폴더가 생성됨
    }
}
