<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;
class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();

        $schedule->call('App\Http\Controllers\ScheduleTaskController@update_amount_id')->daily();
        $schedule->call('App\Http\Controllers\ScheduleTaskController@child_status')->daily();
        $schedule->call('App\Http\Controllers\ScheduleTaskController@total_amount')->daily();
        $schedule->call('App\Http\Controllers\ScheduleTaskController@lucky_portal')->daily();
        $schedule->call('App\Http\Controllers\ScheduleTaskController@user_renewel_status')->daily();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
