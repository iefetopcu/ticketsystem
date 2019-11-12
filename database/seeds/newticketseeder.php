<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class newticketseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('task')->insert(['task_topic'=>'Konu',
        	'idtask_topic_type'=>'1',
        	'idtask_priority'=>'1',
        	'idtask_process'=>'1',
        	'task_detail'=>'Aciklama'
        	]);
    }
}
