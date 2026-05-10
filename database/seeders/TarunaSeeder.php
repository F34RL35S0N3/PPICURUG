<?php

namespace Database\Seeders;

use App\Models\User;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TarunaSeeder extends Seeder
{
    /**
     * Generate akun untuk semua taruna dari MahasiswaController.
     * Username : nickname (lowercase)
     * Password : nickname.lower + 3 digit terakhir NPM  (contoh: "joke.976")
     * Email    : firstname.secondname@student.poltekssn.ac.id
     */
    public function run(): void
    {
        $allMahasiswa = MahasiswaController::getAllMahasiswa();

        $created  = 0;
        $skipped  = 0;
        $rows     = [];

        foreach ($allMahasiswa as $kelas => $students) {
            foreach ($students as $s) {
                $username = strtolower($s['nickname']);
                $last3    = substr($s['npm'], -3);
                $password = $username . '.' . $last3;
                $email    = $this->makeEmail($s['nama']);

                // Hindari duplikat email
                if (User::where('email', $email)->exists()) {
                    $skipped++;
                    continue;
                }

                User::create([
                    'name'          => $s['nama'],
                    'username'      => $username,
                    'nama_panggilan'=> $s['nickname'],
                    'email'         => $email,
                    'password'      => Hash::make($password),
                    'jabatan'       => 'Taruna ' . $kelas,
                    'role'          => User::ROLE_TARUNA,
                ]);

                $rows[] = [$s['nickname'], $email, $password, $kelas];
                $created++;
            }
        }

        $this->command->info("✅ TarunaSeeder selesai: {$created} akun dibuat, {$skipped} dilewati (sudah ada).");
        $this->command->table(['Nickname', 'Email', 'Password', 'Kelas'], $rows);
    }

    private function makeEmail(string $nama): string
    {
        $parts  = explode(' ', trim($nama));
        $first  = strtolower($parts[0]);
        $second = isset($parts[1]) ? strtolower($parts[1]) : '';
        return $second
            ? "{$first}.{$second}@student.poltekssn.ac.id"
            : "{$first}@student.poltekssn.ac.id";
    }
}
