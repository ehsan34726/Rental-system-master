<?php

use Illuminate\Database\Seeder;
use \App\AdvisorPost;

class PostTableSeeder extends Seeder
{
    
    public function run()
    {
        // post for advisor 1
        $this->post_1();
        $this->post_2();
        $this->post_3();
        $this->post_4();
        $this->post_5();
        //post for advisr 2
        $this->post_6();
        $this->post_7();
        $this->post_8();
        $this->post_8();
        $this->post_10();
        
    }
    // For Advsor 1
    public function post_1() {
        $post = new AdvisorPost;
        $post->area = '1200';
        $post->garage = '1';
        $post->bathroom = '3';
        $post->bedroom = '6';
        $post->ownername = 'TOHA';
        $post->rent = '85000';
        $post->city = 'GULSHAN';
        $post->state = 'DHAKA';
        $post->address = 'colony no 3 gulshan';
        $post->description = 'This is very beautiful home';
        $post->image = '3.jpg';
        $post->advisor_id_fk = '1';
        $post->save();
    }

    public function post_2() {
        $post = new AdvisorPost;
        $post->area = '1550';
        $post->garage = '1';
        $post->bathroom = '2';
        $post->bedroom = '5';
        $post->ownername = 'Ali zia';
        $post->rent = '67000';
        $post->city = 'UTTARA';
        $post->state = 'DHAKA';
        $post->address = 'DHA UTTARA';
        $post->description = 'Very beautiful home';
        $post->image = '2.jpg';
        $post->advisor_id_fk = '1';
        $post->save();
    }
      public function post_3() {
        $post = new AdvisorPost;
        $post->area = '1530';
        $post->garage = '1';
        $post->bathroom = '2';
        $post->bedroom = '5';
        $post->ownername = 'Ali Mia';
        $post->rent = '67000';
        $post->city = 'UTTARA';
        $post->state = 'DHAKA';
        $post->address = 'BLOCK D';
        $post->description = 'Very beautiful home';
        $post->image = '4.jpg';
        $post->advisor_id_fk = '1';
        $post->save();
    }
    
    //ADVISOR2 POST
    
          public function post_1() {
        $post = new AdvisorPost;
        $post->area = '1530';
        $post->garage = '1';
        $post->bathroom = '2';
        $post->bedroom = '5';
        $post->ownername = 'Ali Mia';
        $post->rent = '67000';
        $post->city = 'UPOSHOHOR';
        $post->state = 'SYLHET';
        $post->address = 'BLOCK D';
        $post->description = 'Very beautiful home';
        $post->image = '4.jpg';
        $post->advisor_id_fk = '1';
        $post->save();
    }