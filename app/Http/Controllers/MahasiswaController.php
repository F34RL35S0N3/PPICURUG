<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MahasiswaController extends Controller
{
    /**
     * Semua data mahasiswa dikelompokkan per kelas
     */
    public static function getAllMahasiswa(): array
    {
        return [
            '2 RPLK' => [
                ['npm' => '2322101976', 'nama' => 'Selma Shakila Andyana Putri', 'nickname' => 'Akila'],
                ['npm' => '2423101991', 'nama' => 'Achmad Fatih Binasiilah', 'nickname' => 'Fatih'],
                ['npm' => '2423101994', 'nama' => 'Ahmad Muflih Izfatara', 'nickname' => 'Muflih'],
                ['npm' => '2423102007', 'nama' => 'Boyke Charish Situmeang', 'nickname' => 'Boy'],
                ['npm' => '2423102017', 'nama' => 'Dini Riyani Oktavia', 'nickname' => 'Tavi'],
                ['npm' => '2423102018', 'nama' => 'Donny Rusdianysah', 'nickname' => 'Rusdi'],
                ['npm' => '2423102024', 'nama' => 'Farhan Regian Cahya Muharam', 'nickname' => 'Aram'],
                ['npm' => '2423102025', 'nama' => 'Farid Ali Wafi', 'nickname' => 'Alwa'],
                ['npm' => '2423102027', 'nama' => 'Fathan Mawla Itzwa', 'nickname' => 'Fathan'],
                ['npm' => '2423102030', 'nama' => 'Hany Mahsa Lysandra Tarigan', 'nickname' => 'Lysa'],
                ['npm' => '2423102037', 'nama' => 'Jonathan Kevin Binsar Pangaribuan', 'nickname' => 'Joke'],
                ['npm' => '2423102038', 'nama' => 'Justin Wismar Tobing', 'nickname' => 'Justin'],
                ['npm' => '2423102043', 'nama' => 'Marsantya Haleza Mawa', 'nickname' => 'Haleza'],
                ['npm' => '2423102044', 'nama' => 'Marsya Tsabitah Yustin', 'nickname' => 'Marsya'],
                ['npm' => '2423102048', 'nama' => 'Muhammad Amirul Haqa Ardi', 'nickname' => 'Haqa'],
                ['npm' => '2423102059', 'nama' => 'Mutiara Cahyaning Utami', 'nickname' => 'Aya'],
                ['npm' => '2423102062', 'nama' => 'Nufri Rafif', 'nickname' => 'Nufri'],
                ['npm' => '2423102072', 'nama' => 'Rezen Kova Renita Pratama', 'nickname' => 'Rezen'],
                ['npm' => '2423102077', 'nama' => 'Ruben Gabe Aditya Panjaitan', 'nickname' => 'Ruben'],
                ['npm' => '2423102080', 'nama' => 'Salsabila Syifa Farah Febrina', 'nickname' => 'Farah'],
                ['npm' => '2423102094', 'nama' => 'Zefanya Raditya Pratama', 'nickname' => 'Zefa'],
                ['npm' => '2423102095', 'nama' => 'Zhafran Riko Santoso', 'nickname' => 'Zhafran'],
            ],
            '2 RPKK' => [
                ['npm' => '2423101992', 'nama' => 'Adam Raihan Prasedya', 'nickname' => 'Edya'],
                ['npm' => '2423101993', 'nama' => 'Ahmad Ghani Nurkhadian', 'nickname' => 'Marnat'],
                ['npm' => '2423101995', 'nama' => 'Aiko Senyum Indra Nugraha', 'nickname' => 'Aiko'],
                ['npm' => '2423102000', 'nama' => 'Aqilah Putri Meylani S', 'nickname' => 'Meyla'],
                ['npm' => '2423102014', 'nama' => 'Dimas Ardiyansyah', 'nickname' => 'Masdim'],
                ['npm' => '2423102019', 'nama' => 'Edra Fernanda', 'nickname' => 'Eder'],
                ['npm' => '2423102032', 'nama' => 'Helza Aura Ferdani', 'nickname' => 'Helza'],
                ['npm' => '2423102034', 'nama' => 'Ida Ayu Mas Putri Kemala Dewi', 'nickname' => 'Dayu'],
                ['npm' => '2423102052', 'nama' => 'Muhammad Fauzil Fadhil', 'nickname' => 'Uzil'],
                ['npm' => '2423102060', 'nama' => 'Ni Made Dwi Armalayanti', 'nickname' => 'Mala'],
                ['npm' => '2423102064', 'nama' => 'Rafa Shafaudin Athaillah', 'nickname' => 'Udin'],
                ['npm' => '2423102066', 'nama' => 'Raffi Anantha Setiawan', 'nickname' => 'Anan'],
                ['npm' => '2423102068', 'nama' => 'Rahma Bima Algestiyano', 'nickname' => 'Alge'],
                ['npm' => '2423102069', 'nama' => 'Rangga Firman Syarif', 'nickname' => 'RF'],
                ['npm' => '2423102076', 'nama' => 'Rizky Zakariya', 'nickname' => 'Riza'],
                ['npm' => '2423102082', 'nama' => 'Septian Izya Pradana', 'nickname' => 'Ayzi'],
                ['npm' => '2423102083', 'nama' => 'Septian Trio Laksana', 'nickname' => 'Trio'],
                ['npm' => '2423102084', 'nama' => 'Stevent Imanuel Ginting', 'nickname' => 'Nuel'],
                ['npm' => '2423102085', 'nama' => 'Syifa Maulia Fadila', 'nickname' => 'Syifa'],
                ['npm' => '2423102086', 'nama' => 'Viki Maulana', 'nickname' => 'Kipli'],
                ['npm' => '2423102092', 'nama' => 'Zamir Achmad Sachio', 'nickname' => 'Chio'],
            ],
            '2 RKS A' => [
                ['npm' => '2423101996', 'nama' => 'Althaf Bilal Jubran', 'nickname' => 'Althaf'],
                ['npm' => '2423101997', 'nama' => 'Alyaa Mahiraah Ramadhani', 'nickname' => 'Hira'],
                ['npm' => '2423102003', 'nama' => 'Asyifa Alya Nabila', 'nickname' => 'Ayla'],
                ['npm' => '2423102010', 'nama' => 'Daffa Zaidan Eto\'o', 'nickname' => 'Etoo'],
                ['npm' => '2423102011', 'nama' => 'Damar', 'nickname' => 'Damar'],
                ['npm' => '2423102012', 'nama' => 'Dava Anugrah Putra', 'nickname' => 'Bob'],
                ['npm' => '2423102015', 'nama' => 'Dimas Surya Pratama', 'nickname' => 'Dimsur'],
                ['npm' => '2423102023', 'nama' => 'Falito Eriano Nainggolan', 'nickname' => 'Lito'],
                ['npm' => '2423102028', 'nama' => 'Gita Olivia Silaban', 'nickname' => 'Ivi'],
                ['npm' => '2423102033', 'nama' => 'Hinggil Parahita', 'nickname' => 'Hinggil'],
                ['npm' => '2423102039', 'nama' => 'Luklu Miranda', 'nickname' => 'Luklu'],
                ['npm' => '2423102047', 'nama' => 'Muhammad Agung Nafsi Aminullah', 'nickname' => 'Nafsi'],
                ['npm' => '2423102055', 'nama' => 'Muhammad Reza Al Ichwan', 'nickname' => 'Al'],
                ['npm' => '2423102058', 'nama' => 'Mukhammad Rizal Maulana', 'nickname' => 'Lana'],
                ['npm' => '2423102065', 'nama' => 'Raffelino Hizkia Marbun', 'nickname' => 'Lino'],
                ['npm' => '2423102067', 'nama' => 'Rahadian Ronggo Kusumo', 'nickname' => 'Goku'],
                ['npm' => '2423102070', 'nama' => 'Reiza Gerrard Rizki Ramadhan', 'nickname' => 'Gerrard'],
                ['npm' => '2423102071', 'nama' => 'Retta Kresensia Br Sembiring', 'nickname' => 'Cia'],
                ['npm' => '2423102075', 'nama' => 'Rizky Herdiansyah Ramadhan', 'nickname' => 'Kiher'],
                ['npm' => '2423102089', 'nama' => 'Yosapat Nainggolan', 'nickname' => 'Yosan'],
                ['npm' => '2423102093', 'nama' => 'Zebi Nurlestari Asmoro', 'nickname' => 'Zebi'],
            ],
            '2 RSK' => [
                ['npm' => '2423101998', 'nama' => 'Andreas Castropasu Sibarani', 'nickname' => 'Castro'],
                ['npm' => '2423101999', 'nama' => 'Aniparadja', 'nickname' => 'Anip'],
                ['npm' => '2423102001', 'nama' => 'Arya Sinarta Sihite', 'nickname' => 'Narta'],
                ['npm' => '2423102002', 'nama' => 'Asih Wulandaiva P', 'nickname' => 'Wulan'],
                ['npm' => '2423102005', 'nama' => 'Aurel Dwi Cahyono', 'nickname' => 'Rely'],
                ['npm' => '2423102006', 'nama' => 'Bintang Nur Hidayah Putri', 'nickname' => 'Binta'],
                ['npm' => '2423102016', 'nama' => 'Dinda Atika Rahmah', 'nickname' => 'Ika'],
                ['npm' => '2423102021', 'nama' => 'Evan Perwira Abednego', 'nickname' => 'Dego'],
                ['npm' => '2423102029', 'nama' => 'Haidar Fauzul Kusnadi', 'nickname' => 'Zul'],
                ['npm' => '2423102042', 'nama' => 'Made Ayu Ratna D. S.', 'nickname' => 'Dweta'],
                ['npm' => '2423102049', 'nama' => 'Muhammad Azril', 'nickname' => 'Azril'],
                ['npm' => '2423102050', 'nama' => 'Muhammad Dafa Ray Stahanif', 'nickname' => 'Ray'],
                ['npm' => '2423102051', 'nama' => 'Muhammad Daniel Cello Pratama', 'nickname' => 'Cello'],
                ['npm' => '2423102054', 'nama' => 'Muhammad Pandu Praja', 'nickname' => 'Praja'],
                ['npm' => '2423102057', 'nama' => 'Muhammad Umar', 'nickname' => 'Emyu'],
                ['npm' => '2423102061', 'nama' => 'Niswatun Nur Farida', 'nickname' => 'Niswa'],
                ['npm' => '2423102063', 'nama' => 'Putra Adhi Aqsha', 'nickname' => 'Aqsha'],
                ['npm' => '2423102078', 'nama' => 'Ruth Devina Graceila Hutabarat', 'nickname' => 'Ruth'],
                ['npm' => '2423102079', 'nama' => 'Sabina Ratu Putri', 'nickname' => 'Bina'],
                ['npm' => '2423102091', 'nama' => 'Zahra\' Salsabila Fitria Merlyn', 'nickname' => 'Merlyn'],
            ],
            '2 RKS B' => [
                ['npm' => '2423102004', 'nama' => 'Atika Rahma', 'nickname' => 'Tira'],
                ['npm' => '2423102008', 'nama' => 'Britania Paria Delta Siburian', 'nickname' => 'Tania'],
                ['npm' => '2423102009', 'nama' => 'Christine Nauli Febiana S', 'nickname' => 'Febi'],
                ['npm' => '2423102013', 'nama' => 'Della Risava Silaban', 'nickname' => 'Risav'],
                ['npm' => '2423102020', 'nama' => 'Eulia Radifa Meilinawati', 'nickname' => 'Difa'],
                ['npm' => '2423102022', 'nama' => 'Fakhri Ahmad Asyafi\'i', 'nickname' => 'Fri'],
                ['npm' => '2423102026', 'nama' => 'Faris Rahmadin', 'nickname' => 'Fadin'],
                ['npm' => '2423102031', 'nama' => 'Hasan Almusanna Albaar', 'nickname' => 'Nasa'],
                ['npm' => '2423102035', 'nama' => 'Irsyad Arif Firmansyah', 'nickname' => 'Irsyad'],
                ['npm' => '2423102036', 'nama' => 'Jessica Avrilia Br Simatupang', 'nickname' => 'Jessi'],
                ['npm' => '2423102040', 'nama' => 'M. Adib Arkan', 'nickname' => 'Diboy'],
                ['npm' => '2423102041', 'nama' => 'M. Deonardo Federicko', 'nickname' => 'Deo'],
                ['npm' => '2423102045', 'nama' => 'Michael Ridho Waster Pakpahan', 'nickname' => 'Waster'],
                ['npm' => '2423102046', 'nama' => 'Muhaimin Murdiyanto', 'nickname' => 'Imin'],
                ['npm' => '2423102053', 'nama' => 'Muhammad Fernanda Irawan', 'nickname' => 'Feno'],
                ['npm' => '2423102056', 'nama' => 'Muhammad Rizq Dewangga', 'nickname' => 'Wangga'],
                ['npm' => '2423102073', 'nama' => 'Rivaldi Abdullah', 'nickname' => 'Valid'],
                ['npm' => '2423102074', 'nama' => 'Rizal Hadi Fadillah Riyadi', 'nickname' => 'Riyad'],
                ['npm' => '2423102087', 'nama' => 'Yahfi Al Farisy', 'nickname' => 'Alfa'],
                ['npm' => '2423102088', 'nama' => 'Yanuar Ubeth Taruna Wibawa', 'nickname' => 'Ubeth'],
                ['npm' => '2423102090', 'nama' => 'Yusuf Fahar Prasli Irsyad', 'nickname' => 'Fahar'],
            ],
        ];
    }

    /**
     * Helper: generate username from nickname
     */
    private static function generateUsername(string $nickname): string
    {
        return strtolower($nickname);
    }

    /**
     * Helper: generate password from nickname + last 3 digits of NPM
     */
    private static function generatePassword(string $nickname, string $npm): string
    {
        $last3 = substr($npm, -3);
        return strtolower($nickname) . '.' . $last3;
    }

    /**
     * Helper: generate email from full name
     */
    private static function generateEmail(string $nama): string
    {
        $parts = explode(' ', trim($nama));
        $first = strtolower($parts[0]);
        $second = isset($parts[1]) ? strtolower($parts[1]) : '';
        if ($second) {
            return $first . '.' . $second . '@student.poltekssn.ac.id';
        }
        return $first . '@student.poltekssn.ac.id';
    }

    /**
     * Enrich student data with account info
     */
    public static function enrichMahasiswa(array $mahasiswa): array
    {
        foreach ($mahasiswa as $kelas => &$students) {
            foreach ($students as &$student) {
                $student['username'] = self::generateUsername($student['nickname']);
                $student['password'] = self::generatePassword($student['nickname'], $student['npm']);
                $student['email'] = self::generateEmail($student['nama']);
            }
        }
        return $mahasiswa;
    }

    /**
     * Display the student database page
     */
    public function index(): View
    {
        $mahasiswaData = self::enrichMahasiswa(self::getAllMahasiswa());
        return view('mahasiswa.index', compact('mahasiswaData'));
    }

    /**
     * Show edit form for a single student
     */
    public function edit(string $npm): View
    {
        $allData = self::enrichMahasiswa(self::getAllMahasiswa());
        $student = null;
        $kelas = null;

        foreach ($allData as $k => $students) {
            foreach ($students as $s) {
                if ($s['npm'] === $npm) {
                    $student = $s;
                    $kelas = $k;
                    break 2;
                }
            }
        }

        if (!$student) {
            abort(404);
        }

        return view('mahasiswa.edit', compact('student', 'kelas'));
    }
}
