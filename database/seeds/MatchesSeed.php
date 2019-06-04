<?php

use Illuminate\Database\Seeder;
use App\teams;
use App\matches;

class MatchesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $bearLawly = Teams::create(array(
    'name'         => 'lidl',
    'rank'         => '12',
));
$picnicGrandCanyon = Matches::create(array(
    'team1'        => 'lidl',
    'team2' => 'fnatic'
));
    }
}
