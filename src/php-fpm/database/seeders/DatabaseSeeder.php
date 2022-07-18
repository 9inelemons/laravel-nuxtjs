<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Sale;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CountrySeeder::class);
        for ($i=0; $i < 500; $i++) {
            Client::factory(1000)->create()->each(function (Client $client) {
                Sale::factory(2)->create([
                    'client_id' => $client->id,
                ]);
            });
        }
    }
}
