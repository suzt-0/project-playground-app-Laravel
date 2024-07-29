<?php

namespace App\Providers;

use App\Models\Project;
use App\Models\Task;
use App\Policies\ProjectPolicy;
use App\Policies\TaskPolicy;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    // /**
    //  * The policy mappings for the application.
    //  *
    //  * @var array
    //  */
    // protected $policies = [
    //     Task::class => TaskPolicy::class,
    //     Project::class => ProjectPolicy::class,
    // ];

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
    }
}
