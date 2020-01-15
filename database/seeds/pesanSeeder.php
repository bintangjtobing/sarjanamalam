<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class pesanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(0, 50) as $i) {
            DB::table('messages')->insert([
                'judul_messages' => 'Pertanyaan umum',
                'nama_lengkap' => $faker->name,
                'email' => $faker->email,
                'subject' => $faker->text,
                'messages' => $faker->text,
                'status' => 'unread',
            ]);
        }
    }
}
