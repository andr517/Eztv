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
          'name'         => 'Jonathan',
          'email'         => 'test@eztv.se',
          'picture'       => 'https://pbs.twimg.com/profile_images/1385859268/aSDfg.jpg',
          'info'          => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lobortis feugiat vivamus at augue eget arcu dictum varius. Purus viverra accumsan in nisl. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit lectus. Sit amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar. Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant. Rutrum tellus pellentesque eu tincidunt tortor aliquam nulla. In iaculis nunc sed augue. Ornare quam viverra orci sagittis eu. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lobortis feugiat vivamus at augue eget arcu dictum varius. Purus viverra accumsan in nisl. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit lectus. Sit amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar. Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant. Rutrum tellus pellentesque eu tincidunt tortor aliquam nulla. In iaculis nunc sed augue. Ornare quam viverra orci sagittis eu.',
          'group'         => 1,
          'password' => 12345678
      ));

      $userTwo = User::create(array(
          'name'         => 'andr517',
          'email'         => 'test2@eztv.se',
          'picture'       => 'https://www.lidl.se/statics/lidl-offering-se/ds_img/assets_600_x/lidl-logo_600x600.jpg',
          'info'          => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lobortis feugiat vivamus at augue eget arcu dictum varius. Purus viverra accumsan in nisl. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit lectus. Sit amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar. Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant. Rutrum tellus pellentesque eu tincidunt tortor aliquam nulla. In iaculis nunc sed augue. Ornare quam viverra orci sagittis eu. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lobortis feugiat vivamus at augue eget arcu dictum varius. Purus viverra accumsan in nisl. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit lectus. Sit amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar. Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant. Rutrum tellus pellentesque eu tincidunt tortor aliquam nulla. In iaculis nunc sed augue. Ornare quam viverra orci sagittis eu.',
          'group'         => 1,
          'password' => 12345678
      ));

      $userThree = User::create(array(
          'name'         => 'Westin',
          'email'         => 'test3@eztv.se',
          'picture'       => 'https://coubsecure-s.akamaihd.net/get/b79/p/coub/simple/cw_timeline_pic/ad5d08a796b/924cfde2e93cfa911fe6b/med_1473493160_image.jpg',
          'info'          => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lobortis feugiat vivamus at augue eget arcu dictum varius. Purus viverra accumsan in nisl. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit lectus. Sit amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar. Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant. Rutrum tellus pellentesque eu tincidunt tortor aliquam nulla. In iaculis nunc sed augue. Ornare quam viverra orci sagittis eu.',
          'group'         => 0,
          'password' => 12345678
      ));
      User::create(array(
          'name'         => 'bhopper44',
          'email'         => 'a@eztv.se',
          'picture'       => 'https://www.tec.com.pe/wp-content/uploads/2019/03/master-chief-thumbnail-708x398-cd2e0516ab49409c823985737dfad08b.jpg',
          'info'          => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lobortis feugiat vivamus at augue eget arcu dictum varius. Purus viverra accumsan in nisl. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit lectus. Sit amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar. Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant. Rutrum tellus pellentesque eu tincidunt tortor aliquam nulla. In iaculis nunc sed augue. Ornare quam viverra orci sagittis eu.',
          'group'         => 0,
          'password' => 12345678
      ));
      User::create(array(
          'name'         => 'TheSuperMan',
          'email'         => 'b@eztv.se',
          'picture'       => 'https://ichef.bbci.co.uk/news/660/cpsprodpb/16BB/production/_106591850_untitleddesign-3.jpg',
          'info'          => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lobortis feugiat vivamus at augue eget arcu dictum varius. Purus viverra accumsan in nisl. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit lectus. Sit amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar. Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant. Rutrum tellus pellentesque eu tincidunt tortor aliquam nulla. In iaculis nunc sed augue. Ornare quam viverra orci sagittis eu.',
          'group'         => 0,
          'password' => 12345678
      ));

      $this->command->info('Users created!');

      News::create(array(
          'title'  => 'CS:GO prize pools then and now',
          'img' => 'https://i2.wp.com/www.vpesports.com/wp-content/uploads/2019/05/young_nip.jpg',
          'content'  => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.',
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
          'content'  => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.',
          'user_id' => $userThree->id
      ));
      News::create(array(
          'title'  => 'Liquid & ENCE receive first two invites to IEM Chicago',
          'img' => 'https://i2.wp.com/www.vpesports.com/wp-content/uploads/2019/06/dhmd_liquid.jpg',
          'content'  => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
          'user_id' => $userThree->id
      ));
      News::create(array(
          'title'  => 'NRG to make BLAST Pro Series debut in Los Angeles',
          'img' => 'https://i2.wp.com/www.vpesports.com/wp-content/uploads/2019/05/iem_nrg.jpg',
          'content'  => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
          'user_id' => $userTwo->id
      ));

      $this->command->info('News posts created!');
    }
}
