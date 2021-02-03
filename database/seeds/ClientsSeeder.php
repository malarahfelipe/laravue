<?php

use Illuminate\Database\Seeder;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $clientsFake = [[
        "name" => "Fake Client 1",
        "cityCode" => "3850"
      ], [
        "name" => "Fake Client 11",
        "cityCode" => "3851"
      ], [
        "name" => "Fake Client 111",
        "cityCode" => "3852"
      ], [
        "name" => "Fake Client 2",
        "cityCode" => "3853"
      ], [
        "name" => "Fake Client 3",
        "cityCode" => "3854"
      ]];
      foreach($clientsFake as $client) {
        DB::table('clients')->insert($client);
      }
    }
}
