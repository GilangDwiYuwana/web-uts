<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PendaftaranFactory extends Factory
{
    public function definition(): array
    {
        $status = ['terdaftar', 'aktif', 'selesai', 'dibatalkan'];

        return [
            'nama_peserta' => $this->faker->name,
            'email' => $this->faker->safeEmail,
            'nama_kursus' => $this->faker->word,
            'kategori_kursus' => $this->faker->word,
            'tanggal_mulai' => $this->faker->date(),
            'tanggal_selesai' => $this->faker->date(),
            'status_pendaftaran' => $this->faker->randomElement($status),
        ];
    }
}
