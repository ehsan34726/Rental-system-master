<?php

use Illuminate\Database\Seeder;
use \App\RegisterAdvisor;
class AdvisorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->detail_1();
        $this->detail_2();
        $this->detail_3();
        
    }
    public function detail_1() {
        $reg_advisor = new RegisterAdvisor;
        $reg_advisor ->first_name = 'TOHA';
        $reg_advisor ->last_name = 'SIKDAR';
        $reg_advisor ->ntn = '1234';
        $reg_advisor ->cnic = '3610274376841284';
        $reg_advisor ->brand = 'TohaAdvisor';
        $reg_advisor ->phone = '+88013334234';
        $reg_advisor ->address = 'DHAKA';
        $reg_advisor ->user_id_fk = '7'; 
        $reg_advisor ->is_recived = 1;
        $reg_advisor ->is_upgrated = 1;
        $reg_advisor->save();
    }
}