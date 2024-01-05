<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Tbl_Book;
use App\Models\User;
use App\Policies\TblBookPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Tbl_Book::class => TblBookPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        // $this->registerPolicies();

        Gate::define('book-update', function (User $user, Tbl_Book $tbl_Book) {
            return $user->id == $tbl_Book->user_id;
        });


        Gate::define('book-delete', function (User $user, Tbl_Book $tbl_Book) {
            return $user->id == $tbl_Book->user_id;
        });
    }
}
