<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Admin\Credit;
use DB;
use Mail;

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

        /*cron to delete credit data one year after they issued and take backup of that data*/

        $schedule->call(function () {

            $lastYearDate = date('Y-m-d', strtotime(date('Y-m-d').'-1 year'));

            $credit = Credit::where('issueDate', '<', $lastYearDate)
                                ->orWhere('issueDate', '=', $lastYearDate)
                                ->get();

            if(count($credit) > 0){

                foreach($credit as $row){

                    $data = array(

                        'creditID' => $row->creditID,
                        'userid' => $row->userid,
                        'amount' => $row->amount,
                        'credit_amount' => $row->credit_amount,
                        'issueDate' => $row->issueDate,
                        'addedBy' => $row->addedBy,
                        'deleted_at' => date('Y-m-d')

                    );
        
                    DB::table('credits_deleted')
                        ->insert($data);

                }

            }

            Credit::where('issueDate', '<', $lastYearDate)
                    ->orWhere('issueDate', '=', $lastYearDate)
                    ->delete();

        })->daily(); 
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
