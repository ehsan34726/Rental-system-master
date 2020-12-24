<?php

use Illuminate\Database\Seeder;
use \App\RegisterAdmin;
class AdminTableSeeder extends Seeder
{
    
    
    public function run()
    {
        $this->detail_1();
        $this->detail_2();
        $this->detail_3();
        
    }
    public function detail_1() {
        $reg_admin = new RegisterAdmin;
        $reg_admin ->first_name = 'Syed';
        $reg_admin ->last_name = 'Ehsan';
        $reg_admin ->phone = '+8801797283528';
        $reg_admin ->address = 'Sylhet';
        $reg_admin ->user_id_fk = '1'; 
        $reg_admin->save();
    }
}