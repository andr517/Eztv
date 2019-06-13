<?php

use Illuminate\Database\Seeder;
use App\User;
use App\News;

class TestAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('news')->delete();
      DB::table('users')->delete();

      $userOne = User::create(array(
          'name'         => 'Jonathan Eriksson',
          'userName'         => 'jotner',
          'email'         => 'test@eztv.se',
          'group'         => 1,
          'password' => 12345678
      ));

      $userTwo = User::create(array(
          'name'         => 'André Ingman',
          'userName'         => 'lidl',
          'email'         => 'test2@eztv.se',
          'group'         => 0,
          'password' => 12345678
      ));

      $userThree = User::create(array(
          'name'         => 'Johan Westin',
          'userName'         => 'blyatman',
          'email'         => 'test3@eztv.se',
          'group'         => 0,
          'password' => 12345678
      ));

      $this->command->info('Users created!');

      News::create(array(
          'title'  => 'CS:GO prize pools then and now',
          'img' => 'https://i2.wp.com/www.vpesports.com/wp-content/uploads/2019/05/young_nip.jpg',
          'content'  => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
          'user_id' => $userOne->id
      ));
      News::create(array(
          'title'  => 'Envy sign Sonic in place of jdm46',
          'img' => 'https://i0.wp.com/www.vpesports.com/wp-content/uploads/2019/06/envy_sonic.jpg',
          'content'  => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
          'user_id' => $userTwo->id
      ));
      News::create(array(
          'title'  => 'Team Rankings: May 2019',
          'img' => 'https://i0.wp.com/www.vpesports.com/wp-content/uploads/2018/12/valve_csgo-1.jpg',
          'content'  => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
          'user_id' => $userOne->id
      ));
      News::create(array(
          'title'  => 'Vitality shock Liquid in 2-0 cs_summit 4 final',
          'img' => 'https://i2.wp.com/www.vpesports.com/wp-content/uploads/2019/05/bts_vit_liq.jpg',
          'content'  => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
          'user_id' => $userThree->id
      ));
      News::create(array(
          'title'  => 'Liquid & ENCE receive first two invites to IEM Chicago',
          'img' => 'https://i2.wp.com/www.vpesports.com/wp-content/uploads/2019/06/dhmd_liquid.jpg',
          'content'  => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
          'user_id' => $userThree->id
      ));

      $this->command->info('News posts created!');
    }
}
