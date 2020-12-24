<?php

use Illuminate\Database\Seeder;
use \App\Role;
class SystemRole extends Seeder
{
    
    public function run()
    {
        $adminrole = new Role();
        $adminrole->role="Admin";
        $adminrole->save();
        $tenetrole = new Role();
        $tenetrole->role="Tenet";
        $tenetrole->save();
        $advisorrole = new Role();
        $advisorrole->role="PropertyAdvisor";
        $advisorrole->save();
    }
}
