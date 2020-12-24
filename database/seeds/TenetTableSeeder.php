<?php

use Illuminate\Database\Seeder;
use \App\RegisterTenet;
class TenetTableSeeder extends Seeder
{
   
    public function run()
    {
        $this->detail_1();
        $this->detail_2();
        $this->detail_3();
        
    }
    public function detail_1() {
        $reg_ten = new RegisterTenet;
        $reg_ten ->first_name = 'MURSHED';
        $reg_ten ->last_name = 'HOQUE';
        $reg_ten ->phone = '+88014840701';
        $reg_ten ->address = 'UPOSHOHOR';
        $reg_ten ->user_id_fk = '4'; 
        $reg_ten->save();
    }
    
    public function detail_2() {
        $reg_ten = new RegisterTenet;
        $reg_ten ->first_name = 'NAFISA';
        $reg_ten ->last_name = 'HaSAN';
        $reg_ten ->phone = '+88019230781';
        $reg_ten ->address = 'HOUSING STATES';
        $reg_ten ->user_id_fk = '5'; 
        $reg_ten->save();
    }

    public function detail_3() {
        $reg_ten = new RegisterTenet;
        $reg_ten ->first_name = 'AFRA';
        $reg_ten ->last_name = 'IBNAT';
        $reg_ten ->phone = '+8801556776';
        $reg_ten ->address = 'GULSHAN';
        $reg_ten ->user_id_fk = '6'; 
        $reg_ten->save();
    }
}
