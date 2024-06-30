<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Siswa;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            Siswa::create([
                'id_siswa' => $faker->unique()->numberBetween(10000, 99999),
                'nis' => $faker->unique()->numberBetween(10000, 99999),
                'barcode' => $faker->unique()->ean13, // Menambahkan barcode
                'nama_siswa' => $faker->name,
                'jenis_kelamin' => $faker->randomElement(['l', 'p']),
                'tgl_lahir' => $faker->date,
                'kelas' => $faker->randomElement(['X', 'XI', 'XII']), // Mengubah jenis_kelas menjadi kelas
                'foto' => $faker->imageUrl(640, 480, 'people', true),
                'created_at' => $faker->dateTimeThisYear,
                'updated_at' => now(),
            ]);
        }
    }
}
