<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create(
        // 	[
        // 	'name'=>'Masum Billah',
        // 	'batch_id'=>'WDPF44',
        // 	'phone'=>'01738004246',
        // 	'address'=>'Dhaka'
        // ],
        // [
        // 	'name'=>'Monir Hossain',
        // 	'batch_id'=>'WDPF44',
        // 	'phone'=>'01245454246',
        // 	'address'=>'Narayanganj'
        // ],
        [
        	'name'=>'Moaref Billah',
        	'batch_id'=>'WDPF44',
        	'phone'=>'0543225346',
        	'address'=>'Feni',
            'district_id'=>'2',
        ],

        );
    }
}
