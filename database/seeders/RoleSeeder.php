<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Seed akun default untuk setiap role.
     * Password: role@12345 (sesuaikan setelah production)
     */
    public function run(): void
    {
        // Penyelenggara (super admin)
        User::firstOrCreate(
            ['email' => 'penyelenggara@poltekssn.ac.id'],
            [
                'name'     => 'Penyelenggara',
                'username' => 'penyelenggara',
                'jabatan'  => 'Penyelenggara Pengasuhan',
                'role'     => User::ROLE_PENYELENGGARA,
                'password' => Hash::make('penyelenggara@12345'),
            ]
        );

        // Pengasuh
        User::firstOrCreate(
            ['email' => 'pengasuh@poltekssn.ac.id'],
            [
                'name'     => 'Pengasuh',
                'username' => 'pengasuh',
                'jabatan'  => 'Pengasuh',
                'role'     => User::ROLE_PENGASUH,
                'password' => Hash::make('pengasuh@12345'),
            ]
        );

        // Taruna (contoh)
        User::firstOrCreate(
            ['email' => 'taruna@poltekssn.ac.id'],
            [
                'name'     => 'Taruna Demo',
                'username' => 'taruna',
                'jabatan'  => 'Taruna',
                'role'     => User::ROLE_TARUNA,
                'password' => Hash::make('taruna@12345'),
            ]
        );

        $this->command->info('✅ Role seeder selesai:');
        $this->command->table(
            ['Role', 'Email', 'Password'],
            [
                ['Penyelenggara', 'penyelenggara@poltekssn.ac.id', 'penyelenggara@12345'],
                ['Pengasuh',      'pengasuh@poltekssn.ac.id',      'pengasuh@12345'],
                ['Taruna',        'taruna@poltekssn.ac.id',        'taruna@12345'],
            ]
        );
    }
}
