<?php

namespace Database\Seeders;

use App\Models\Phone;
use App\Models\PhoneMeta;
use Faker\Provider\Address;
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
        for ($i = 1; $i <= 50; $i++) {
            $phones = ['iPhone ' . $i, 'Samsung ' . $i, 'Xiaomi ' . $i];
            shuffle($phones);
            Phone::create([
                'name' => $phones[0],
                'price' => rand(1000, 2000)
            ]);
        }

        Phone::all()->each(function ($phone) {
            PhoneMeta::create([
                'phone_id' => $phone->id,
                'key' => 'camera',
                'value' => rand(12, 48),
            ]);
            PhoneMeta::create([
                'phone_id' => $phone->id,
                'key' => 'ram',
                'value' => rand(1, 16),
            ]);
            PhoneMeta::create([
                'phone_id' => $phone->id,
                'key' => 'memory',
                'value' => rand(16, 256),
            ]);
            PhoneMeta::create([
                'phone_id' => $phone->id,
                'key' => 'screen',
                'value' => rand(6, 11),
            ]);
            PhoneMeta::create([
                'phone_id' => $phone->id,
                'key' => 'cores',
                'value' => rand(2, 8),
            ]);
        });
    }
}
