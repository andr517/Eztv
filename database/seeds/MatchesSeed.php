<?php

use Illuminate\Database\Seeder;
use App\Teams;


class MatchesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $liquid = Teams::create(array(
    'name'         => 'Liquid',
    'rank'         => '1',
    'teamUrl'      => 'https://i.ytimg.com/vi/Iyd6WdCnEVQ/maxresdefault.jpg',
    'logoUrl'      => 'https://static.hltv.org/images/team/logo/5973',
));
$astralis = Teams::create(array(
'name'         => 'Astralis',
'rank'         => '2',
'teamUrl'      => 'https://media.tycsports.com/files/2019/01/19/39076/astralis-0.jpg',
'logoUrl'      => 'https://static.hltv.org/images/team/logo/6665',
));
$ence = Teams::create(array(
'name'         => 'Ence',
'rank'         => '3',
'teamUrl'      => 'https://dotesports-media.nyc3.cdn.digitaloceanspaces.com/wp-content/uploads/2019/02/28154219/D0hbx-QXQAUXSFA.jpg',
'logoUrl'      => 'https://static.hltv.org/images/team/logo/4869',
));
$vitality = Teams::create(array(
'name'         => 'Vitality',
'rank'         => '4',
'teamUrl'      => 'https://dotesports-media.nyc3.cdn.digitaloceanspaces.com/wp-content/uploads/2018/11/18192905/Vit-win.jpg',
'logoUrl'      => 'https://static.hltv.org/images/team/logo/9565',
));
$faze = Teams::create(array(
'name'         => 'FaZe',
'rank'         => '5',
'teamUrl'      => 'https://www.wagerbop.com/wp-content/uploads/2018/10/FaZe-Clan.jpg',
'logoUrl'      => 'https://static.hltv.org/images/team/logo/6667',
));
$navi = Teams::create(array(
'name'         => 'Natus Vincere',
'rank'         => '6',
'teamUrl'      => 'https://navi.gg/upload/10/b6/u_5c1ca66bed003.png',
'logoUrl'      => 'https://static.hltv.org/images/team/logo/4608',
));
$fnatic = Teams::create(array(
'name'         => 'Fnatic',
'rank'         => '7',
'teamUrl'      => 'https://img.fnatic.io/prod%2Fuploads%2Feda47b4e-ee4d-40fd-8bd0-0c65d3aa0096%2Fteam-photo.png?w=1200&fit=crop&q=60&s=6a7e5ac8a8d00a077f565a7524f1d876',
'logoUrl'      => 'https://static.hltv.org/images/team/logo/4991',
));
$mibr = Teams::create(array(
'name'         => 'MIBR',
'rank'         => '8',
'teamUrl'      => 'http://cdn.vs.com.br/webedia-temp/1549478661549-mibr-novo-uniforme.png',
'logoUrl'      => 'https://static.hltv.org/images/team/logo/9215',
));
$nip = Teams::create(array(
'name'         => 'NIP',
'rank'         => '9',
'teamUrl'      => 'http://esportsbite.com/wp-content/uploads/2018/10/nip-1.png',
'logoUrl'      => 'https://static.hltv.org/images/team/logo/4411',
));
$Nrg = Teams::create(array(
'name'         => 'Nrg',
'rank'         => '10',
'teamUrl'      => 'http://esportsbite.com/wp-content/uploads/2018/10/nrg.png',
'logoUrl'      => 'https://static.hltv.org/images/team/logo/6673',
));

    }
}
