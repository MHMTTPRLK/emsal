<?php

namespace App\Console\Commands;

use App\Models\Message;
use App\Models\Room;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class ReportSendAlarmCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'alarm:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Alarm Zamanında Çalışır';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $getTimeStamp=now();
        $time = strtotime($getTimeStamp);
        $getHour = date('H', $time);
        $getMinute = date('i', $time);
       // Log::info('Alarm Çalıyor GUK GUK SAAT !'.$getHour.":".$getMinute);
        $room_count=Room::where('status','publish')->get();
        for($i=1;$i<=count($room_count);$i++)
        {
            Log::info('Alarm Çalıyor GUK GUK SAAT !'.$getHour.":".$getMinute."-".$i);
            Message::create([
                'user_id'=>'3',
                'room_id'=>$i,
                'message'=>'Alarm Çalıyor GUK GUK SAAT !'.$getHour.":".$getMinute
            ]);
        }


    }
}
