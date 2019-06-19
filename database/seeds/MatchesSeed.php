<?php

use Illuminate\Database\Seeder;
use App\Teams;
use App\Players;
use App\Matches;

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
    'teamUrl'      => 'https://esportsranks.com/wp-content/uploads/2019/06/Best-CSGO-Team-2.jpg',
    'logoUrl'      => 'https://static.hltv.org/images/team/logo/5973',
    'country'      => 'United States',
    'flag'         => 'https://static.hltv.org/images/bigflags/30x20/US.gif',
));
$astralis = Teams::create(array(
'name'         => 'Astralis',
'rank'         => '2',
'teamUrl'      => 'https://y4j7y8s9.ssl.hwcdn.net/wp-content/uploads/2018/11/Astralis_Unibet.jpg',
'logoUrl'      => 'https://static.hltv.org/images/team/logo/6665',
'country'      => 'Denmark',
'flag'         => 'https://static.hltv.org/images/bigflags/30x20/DK.gif',
));
$ence = Teams::create(array(
'name'         => 'Ence',
'rank'         => '3',
'teamUrl'      => 'https://muropaketti.com/wp-content/uploads/2018/10/ence.png',
'logoUrl'      => 'https://static.hltv.org/images/team/logo/4869',
'country'      => 'Finland',
'flag'         => 'https://static.hltv.org/images/bigflags/30x20/FI.gif',
));
$vitality = Teams::create(array(
'name'         => 'Vitality',
'rank'         => '4',
'teamUrl'      => 'https://dotesports-media.nyc3.cdn.digitaloceanspaces.com/wp-content/uploads/2018/11/18192905/Vit-win.jpg',
'logoUrl'      => 'https://static.hltv.org/images/team/logo/9565',
'country'      => 'France',
'flag'         => 'https://static.hltv.org/images/bigflags/30x20/FR.gif',
));
$faze = Teams::create(array(
'name'         => 'FaZe',
'rank'         => '5',
'teamUrl'      => 'https://s3.dexerto.com/thumbnails/_thumbnailLarge/DeKay-Why-FaZe-Clan-could-leave-CSGO-soon.jpg',
'logoUrl'      => 'https://static.hltv.org/images/team/logo/6667',
'country'      => 'Europe',
'flag'         => 'https://static.hltv.org/images/bigflags/30x20/EU.gif',
));
$navi = Teams::create(array(
'name'         => 'NAVI',
'rank'         => '6',
'teamUrl'      => 'https://static-cdn.eleague.com/team/Boston-Major_Teams_slates_navi_1.jpg',
'logoUrl'      => 'https://static.hltv.org/images/team/logo/4608',
'country'      => 'Russia',
'flag'         => 'https://static.hltv.org/images/bigflags/30x20/RU.gif',
));
$fnatic = Teams::create(array(
'name'         => 'Fnatic',
'rank'         => '7',
'teamUrl'      => 'https://img.fnatic.io/prod%2Fuploads%2Feda47b4e-ee4d-40fd-8bd0-0c65d3aa0096%2Fteam-photo.png?w=1200&fit=crop&q=60&s=6a7e5ac8a8d00a077f565a7524f1d876',
'logoUrl'      => 'https://static.hltv.org/images/team/logo/4991',
'country'      => 'Sweden',
'flag'         => 'https://static.hltv.org/images/bigflags/30x20/SE.gif',
));
$mibr = Teams::create(array(
'name'         => 'MIBR',
'rank'         => '8',
'teamUrl'      => 'http://cdn.vs.com.br/webedia-temp/1549478661549-mibr-novo-uniforme.png',
'logoUrl'      => 'https://static.hltv.org/images/team/logo/9215',
'country'      => 'Brazil',
'flag'         => 'https://static.hltv.org/images/bigflags/30x20/BR.gif',
));
$nip = Teams::create(array(
'name'         => 'NIP',
'rank'         => '9',
'teamUrl'      => 'http://esportsbite.com/wp-content/uploads/2018/10/nip-1.png',
'logoUrl'      => 'https://static.hltv.org/images/team/logo/4411',
'country'      => 'Sweden',
'flag'         => 'https://static.hltv.org/images/bigflags/30x20/SE.gif',
));
$Nrg = Teams::create(array(
'name'         => 'Nrg',
'rank'         => '10',
'teamUrl'      => 'http://esportsbite.com/wp-content/uploads/2018/10/nrg.png',
'logoUrl'      => 'https://static.hltv.org/images/team/logo/6673',
'country'      => 'United States',
'flag'         => 'https://static.hltv.org/images/bigflags/30x20/US.gif',
));
//players
$liquid1 = Players::create(array(
'name'         => 'Keith Markovic',
'alias'        => 'NAF',
'age'          => '21',
'rating'       => '1.18',
'flag'         => 'https://static.hltv.org/images/bigflags/30x20/CA.gif',
'playerUrl'    => 'https://static.hltv.org//images/playerprofile/bodyshot/compressed/8520.png',
'team_id'      =>  $liquid->id,
));
$liquid2 = Players::create(array(
'name'         => 'Nick Cannella',
'alias'        => 'nitr0',
'age'          => '23',
'rating'       => '1.04',
'flag'         => 'https://static.hltv.org/images/bigflags/30x20/US.gif',
'playerUrl'    => 'https://static.hltv.org//images/playerprofile/bodyshot/compressed/7687.png',
'team_id'      =>  $liquid->id,
));
$liquid3 = Players::create(array(
'name'         => 'Jonathan Jablonowski',
'alias'        => 'EliGE',
'age'          => '21',
'rating'       => '1.17',
'flag'         => 'https://static.hltv.org/images/bigflags/30x20/US.gif',
'playerUrl'    => 'https://static.hltv.org//images/playerprofile/bodyshot/compressed/8738.png',
'team_id'      =>  $liquid->id,
));
$liquid4 = Players::create(array(
'name'         => 'Jake Yip',
'alias'        => 'Stewie2K',
'age'          => '21',
'rating'       => '1.06',
'flag'         => 'https://static.hltv.org/images/bigflags/30x20/US.gif',
'playerUrl'    => 'https://static.hltv.org//images/playerprofile/bodyshot/compressed/8797.png',
'team_id'      =>  $liquid->id,
));
$liquid5 = Players::create(array(
'name'         => 'Russel Van Dulken',
'alias'        => 'Twistzz',
'age'          => '19',
'rating'       => '1.18',
'flag'         => 'https://static.hltv.org/images/bigflags/30x20/CA.gif',
'playerUrl'    => 'https://static.hltv.org//images/playerprofile/bodyshot/compressed/10394.png',
'team_id'      =>  $liquid->id,
));
$astralis1 = Players::create(array(
'name'         => 'Andreas Højsleth',
'alias'        => 'Xyp9x',
'age'          => '23',
'rating'       => '1.08',
'flag'         => 'https://static.hltv.org/images/bigflags/30x20/DK.gif',
'playerUrl'    => 'https://static.hltv.org//images/playerprofile/bodyshot/compressed/4954.png',
'team_id'      =>  $astralis->id,
));

    }
}
