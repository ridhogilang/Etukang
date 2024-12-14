<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\User;
use App\Models\Tukang;
use App\Models\Layanan;
use App\Models\Kecamatan;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create([
            'id' => '1',
            'name' => 'admin'
        ]);

        Role::create([
            'id' => '2',
            'name' => 'user'
        ]);

        Role::create([
            'id' => '3',
            'name' => 'tukang'
        ]);

        User::create([
            'username' => 'Ridho',
            'email' => 'ridho@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '1'
        ]);

        User::create([
            'username' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '1'
        ]);

        User::create([
            'username' => 'Yanu',
            'email' => 'yanu@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '2'
        ]);

        User::create([
            'username' => 'Febby',
            'email' => 'febby@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '1'
        ]);

        User::create([
            'username' => 'Budi',
            'email' => 'budi@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'username' => 'Joko',
            'email' => 'joko@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'username' => 'Siti',
            'email' => 'siti@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'username' => 'Agus',
            'email' => 'agus@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'username' => 'Rina',
            'email' => 'rina@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'username' => 'Hadi',
            'email' => 'hadi@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'username' => 'Rudi',
            'email' => 'rudi@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'username' => 'Hendra',
            'email' => 'hendra@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'username' => 'Wahyu',
            'email' => 'wahyu@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'username' => 'Dewi',
            'email' => 'dewi@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'username' => 'Andi',
            'email' => 'andi@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'username' => 'Sinta',
            'email' => 'sinta@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'username' => 'Rama',
            'email' => 'rama@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'username' => 'Yuni',
            'email' => 'yuni@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'username' => 'Bambang',
            'email' => 'bambang@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'username' => 'Jokowi',
            'email' => 'jokowi@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'username' => 'Agustian',
            'email' => 'agustian@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'username' => 'Jaya',
            'email' => 'jaya@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'username' => 'Rahman',
            'email' => 'rahman@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'username' => 'Hadianto',
            'email' => 'hadianto@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'username' => 'Hendri',
            'email' => 'hendri@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'username' => 'Heryanto',
            'email' => 'heryanto@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'username' => 'Hendro',
            'email' => 'hendro@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'username' => 'Haryanto',
            'email' => 'haryanto@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'username' => 'Anton',
            'email' => 'anton@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'username' => 'Dayat',
            'email' => 'dayat@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'username' => 'Lilik',
            'email' => 'lilik@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'username' => 'Hartono',
            'email' => 'hartono@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'username' => 'Wiranto',
            'email' => 'wiranto@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'username' => 'Subari',
            'email' => 'subari@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'username' => 'Suroto',
            'email' => 'suroto@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'username' => 'Sumardi',
            'email' => 'sumardi@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'username' => 'Sukirman',
            'email' => 'sukirman@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'username' => 'Suratno',
            'email' => 'suratno@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'username' => 'Sukiswanto',
            'email' => 'sukiswanto@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'username' => 'Sutoyo',
            'email' => 'sutoyo@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'username' => 'Ruslan',
            'email' => 'ruslan@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 42,
            'username' => 'Paeran',
            'email' => 'paeran@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 43,
            'username' => 'Suyatman',
            'email' => 'suyatman@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 44,
            'username' => 'Ngatimin Jatmiko',
            'email' => 'ngatimin@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 45,
            'username' => 'Kerno',
            'email' => 'kerno@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 46,
            'username' => 'Sukadi',
            'email' => 'sukadi@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 47,
            'username' => 'Sulastri',
            'email' => 'sulastri@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 48,
            'username' => 'Kiswanto',
            'email' => 'kiswanto@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 50,
            'username' => 'Eko Yunarto',
            'email' => 'ekoyunarto@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 51,
            'username' => 'Supono',
            'email' => 'supono@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 52,
            'username' => 'Tri Mulyadi',
            'email' => 'trimulyadi@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 53,
            'username' => 'Sukardi',
            'email' => 'sukardi@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 54,
            'username' => 'Supriono',
            'email' => 'supriono@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 55,
            'username' => 'Kardiono',
            'email' => 'kardiono@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 56,
            'username' => 'Karyanto',
            'email' => 'karyanto@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 57,
            'username' => 'Sukijan',
            'email' => 'sukijan@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 58,
            'username' => 'Rahmat Handoko',
            'email' => 'rahmathandoko@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 59,
            'username' => 'Rahmat Pujiono',
            'email' => 'rahmatpujiono@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 60,
            'username' => 'Puji Rahmanto',
            'email' => 'pujirahmanto@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 61,
            'username' => 'Puji Harotno',
            'email' => 'pujiharotno@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 62,
            'username' => 'Yuana Putra',
            'email' => 'yuanaputra@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 63,
            'username' => 'Mega Juana',
            'email' => 'megajuana@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 64,
            'username' => 'Edi Maryadi',
            'email' => 'edimaryadi@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 65,
            'username' => 'Rizky Subekti',
            'email' => 'rizkysubekti@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 66,
            'username' => 'Andri Bujana',
            'email' => 'andribujana@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 67,
            'username' => 'Ahmad Seferi',
            'email' => 'ahmadseferi@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 68,
            'username' => 'Ahmad Sukron',
            'email' => 'ahmadsukron@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 69,
            'username' => 'Abdul Malik',
            'email' => 'abdulmalik@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 70,
            'username' => 'Abdul Karim',
            'email' => 'abdulkarim@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 71,
            'username' => 'Budi Saptono',
            'email' => 'budisaptono@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 72,
            'username' => 'Budi Raharjo',
            'email' => 'budiraharjo@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 73,
            'username' => 'Budi Hartono',
            'email' => 'budihartono@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 74,
            'username' => 'Wira Sabdo Aji',
            'email' => 'wirasabdoaji@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 75,
            'username' => 'Sabar',
            'email' => 'sabar@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 76,
            'username' => 'Muhammad Ali',
            'email' => 'muhammad.ali@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 78,
            'username' => 'Maksum Jumari',
            'email' => 'maksum.jumari@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 79,
            'username' => 'Abdul Jauhari',
            'email' => 'abdul.jauhari@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 80,
            'username' => 'Abdul Jalil',
            'email' => 'abdul.jalil@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 81,
            'username' => 'Mahbub Junaidi',
            'email' => 'mahbub.junaidi@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 82,
            'username' => 'Ahmad Junaidi',
            'email' => 'ahmad.junaidi@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 83,
            'username' => 'Susilo Amasis',
            'email' => 'susilo.amasis@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 84,
            'username' => 'Susilo Adi Yuana',
            'email' => 'susilo.adi.yuana@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 85,
            'username' => 'Andi Gunawan',
            'email' => 'andi.gunawan@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 86,
            'username' => 'Rudi Tabuti',
            'email' => 'rudi.tabuti@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 87,
            'username' => 'Joko Susilo',
            'email' => 'joko.susilo@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => '3'
        ]);

        User::create([
            'id' => 88,
            'username' => 'Joko Wiroso',
            'email' => 'joko.wiroso@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => '3'
        ]);

        Layanan::create([
            'id' => 1,
            'jenis' => 'Tukang Kayu',
            'harga' => '550000'
        ]);

        Layanan::create([
            'id' => 2,
            'jenis' => 'Tukang Besi',
            'harga' => '450000'
        ]);

        Layanan::create([
            'id' => 3,
            'jenis' => 'Tukang Keramik',
            'harga' => '350000'
        ]);

        Layanan::create([
            'id' => 4,
            'jenis' => 'Tukang Sumur',
            'harga' => '400000'
        ]);

        Layanan::create([
            'id' => 5,
            'jenis' => 'Tukang Kaca',
            'harga' => '550000'
        ]);

        Layanan::create([
            'id' => 6,
            'jenis' => 'Tukang AC',
            'harga' => '200000'
        ]);

        Layanan::create([
            'id' => 7,
            'jenis' => 'Tukang Genteng',
            'harga' => '250000'
        ]);

        Layanan::create([
            'id' => 8,
            'jenis' => 'Tukang Pipa',
            'harga' => '300000'
        ]);

        Kecamatan::create([
            'id' => 1,
            'kabupaten' => 'Kota Yogyakarta'
        ]);

        Kecamatan::create([
            'id' => 2,
            'kabupaten' => 'Sleman'
        ]);

        Kecamatan::create([
            'id' => 3,
            'kabupaten' => 'Bantul'
        ]);

        Kecamatan::create([
            'id' => 4,
            'kabupaten' => 'Gunung Kidul'
        ]);

        Kecamatan::create([
            'id' => 5,
            'kabupaten' => 'Kulon Progo'
        ]);

        Tukang::create([
            'id' => 1,
            'user_id' => 4,
            'role_id' => 3,
            'nama' => 'Budi',
            'jenislayanan_id' => 1,
            'alamat' => 'Jalan Malioboro No. 456, Danurejan, Yogyakarta',
            'kecamatan_id' => 1,
            'deskripsi' => 'Kami spesialis dalam perbaikan atap dan dinding rumah. Kami memberikan layanan berkualitas dan profesional dengan harga terjangkau.',
            'lokasi' => '-7.7860275322342645, 110.35248034494852'
        ]);

        Tukang::create([
            'id' => 2,
            'user_id' => 5,
            'role_id' => 3,
            'nama' => 'Joko',
            'jenislayanan_id' => 1,
            'alamat' => 'Jalan Solo No. 789, Gedongtengen, Yogyakarta',
            'kecamatan_id' => 1,
            'deskripsi' => 'Kami ahli dalam pemasangan dan penggantian pintu serta jendela. Kami memberikan layanan cepat dan rapi dengan hasil yang memuaskan.',
            'lokasi' => '-7.781713607268462, 110.36482421814281'
        ]);

        Tukang::create([
            'id' => 3,
            'user_id' => 6,
            'role_id' => 3,
            'nama' => 'Siti',
            'jenislayanan_id' => 1,
            'alamat' => 'Jalan Magelang No. 101, Gondokusuman, Yogyakarta',
            'kecamatan_id' => 1,
            'deskripsi' => 'Kami menyediakan layanan perbaikan lantai dengan berbagai material seperti keramik, marmer, dan parket. Hubungi kami untuk hasil yang tahan lama dan estetis.',
            'lokasi' => '-7.787786660099963, 110.37323389902839'
        ]);

        Tukang::create([
            'id' => 4,
            'user_id' => 7,
            'role_id' => 3,
            'nama' => 'Agus',
            'jenislayanan_id' => 1,
            'alamat' => 'Jalan Pramuka No. 222, Gondomanan, Yogyakarta',
            'kecamatan_id' => 2,
            'deskripsi' => 'Kami adalah tukang listrik berpengalaman yang siap membantu Anda dalam pemasangan dan perbaikan instalasi listrik. Jaminan keamanan dan kualitas kerja terjamin.',
            'lokasi' => '-7.715513702549513, 110.32711607793567'
        ]);

        Tukang::create([
            'id' => 5,
            'user_id' => 8,
            'role_id' => 3,
            'nama' => 'Rina',
            'jenislayanan_id' => 1,
            'alamat' => 'Jalan Veteran No. 333, Jetis, Yogyakarta',
            'kecamatan_id' => 2,
            'deskripsi' => 'Kami tukang pipa profesional yang siap membantu Anda dalam perbaikan dan instalasi pipa air bersih dan saluran air kotor. Hubungi kami untuk layanan yang terpercaya.',
            'lokasi' => '-7.710538710836752, 110.37467075971928'
        ]);

        Tukang::create([
            'id' => 6,
            'user_id' => 9,
            'role_id' => 3,
            'nama' => 'Hadi',
            'jenislayanan_id' => 1,
            'alamat' => 'Jalan Malioboro No. 456, Kotagede, Yogyakarta',
            'kecamatan_id' => 2,
            'deskripsi' => 'Kami ahli dalam perbaikan atap dan dinding rumah. Kami memberikan layanan berkualitas dan profesional dengan harga terjangkau.',
            'lokasi' => '-7.739466123272895, 110.40805542025531'
        ]);

        Tukang::create([
            'id' => 7,
            'user_id' => 10,
            'role_id' => 3,
            'nama' => 'Rudi',
            'jenislayanan_id' => 1,
            'alamat' => 'Jalan Solo No. 789, Kraton, Yogyakarta',
            'kecamatan_id' => 3,
            'deskripsi' => 'Kami ahli dalam pemasangan dan penggantian pintu serta jendela. Kami memberikan layanan cepat dan rapi dengan hasil yang memuaskan.',
            'lokasi' => '-7.848522038600258, 110.33361777681104'
        ]);

        Tukang::create([
            'id' => 8,
            'user_id' => 11,
            'role_id' => 3,
            'nama' => 'Hendra',
            'jenislayanan_id' => 1,
            'alamat' => 'Jalan Magelang No. 101, Mantrijeron, Yogyakarta',
            'kecamatan_id' => 3,
            'deskripsi' => 'Kami menyediakan layanan perbaikan lantai dengan berbagai material seperti keramik, marmer, dan parket. Hubungi kami untuk hasil yang tahan lama dan estetis.',
            'lokasi' => '-7.848891870727962, 110.36618097038911'
        ]);

        Tukang::create([
            'id' => 9,
            'user_id' => 12,
            'role_id' => 3,
            'nama' => 'Wahyu',
            'jenislayanan_id' => 1,
            'alamat' => 'Jalan Pramuka No. 222, Mergangsan, Yogyakarta',
            'kecamatan_id' => 3,
            'deskripsi' => 'Kami adalah tukang listrik berpengalaman yang siap membantu Anda dalam pemasangan dan perbaikan instalasi listrik. Jaminan keamanan dan kualitas kerja terjamin.',
            'lokasi' => '-7.877790742801048, 110.34594371863632'
        ]);

        Tukang::create([
            'id' => 10,
            'user_id' => 13,
            'role_id' => 3,
            'nama' => 'Dewi',
            'jenislayanan_id' => 1,
            'alamat' => 'Jalan Veteran No. 333, Ngampilan, Yogyakarta',
            'kecamatan_id' => 4,
            'deskripsi' => 'Kami tukang pipa profesional yang siap membantu Anda dalam perbaikan dan instalasi pipa air bersih dan saluran air kotor. Hubungi kami untuk layanan yang terpercaya.',
            'lokasi' => '-7.883688726349032, 110.4787787735256'
        ]);

        Tukang::create([
            'id' => 11,
            'user_id' => 14,
            'role_id' => 3,
            'nama' => 'Andi',
            'jenislayanan_id' => 1,
            'alamat' => 'Jalan Malioboro No. 456, Pakualaman, Yogyakarta',
            'kecamatan_id' => 4,
            'deskripsi' => 'Kami ahli dalam perbaikan atap dan dinding rumah. Kami memberikan layanan berkualitas dan profesional dengan harga terjangkau.',
            'lokasi' => '-7.857899668055227, 110.50644023505403'
        ]);

        Tukang::create([
            'id' => 12,
            'user_id' => 15,
            'role_id' => 3,
            'nama' => 'Sinta',
            'jenislayanan_id' => 1,
            'alamat' => 'Jalan Solo No. 789, Tegalrejo, Yogyakarta',
            'kecamatan_id' => 4,
            'deskripsi' => 'Kami ahli dalam pemasangan dan penggantian pintu serta jendela. Kami memberikan layanan cepat dan rapi dengan hasil yang memuaskan.',
            'lokasi' => '-7.876274536480983, 110.5467934259896'
        ]);

        Tukang::create([
            'id' => 13,
            'user_id' => 16,
            'role_id' => 3,
            'nama' => 'Rama',
            'jenislayanan_id' => 1,
            'alamat' => 'Jalan Magelang No. 101, Umbulharjo, Yogyakarta',
            'kecamatan_id' => 5,
            'deskripsi' => 'Kami menyediakan layanan perbaikan lantai dengan berbagai material seperti keramik, marmer, dan parket. Hubungi kami untuk hasil yang tahan lama dan estetis.',
            'lokasi' => '-7.867248387075237, 110.2119270270162'
        ]);

        Tukang::create([
            'id' => 14,
            'user_id' => 17,
            'role_id' => 3,
            'nama' => 'Yuni',
            'jenislayanan_id' => 1,
            'alamat' => 'Jalan Pramuka No. 222, Wirobrajan, Yogyakarta',
            'kecamatan_id' => 5,
            'deskripsi' => 'Kami adalah tukang listrik berpengalaman yang siap membantu Anda dalam pemasangan dan perbaikan instalasi listrik. Jaminan keamanan dan kualitas kerja terjamin.',
            'lokasi' => '-7.864347083027306, 110.17287555191726'
        ]);

        Tukang::create([
            'id' => 15,
            'user_id' => 18,
            'role_id' => 3,
            'nama' => 'Bambang',
            'jenislayanan_id' => 2,
            'alamat' => 'Jalan Malioboro No. 456, Danurejan, Yogyakarta',
            'kecamatan_id' => 1,
            'deskripsi' => 'Layanan pemasangan dan penggantian meliputi pemasangan AC, kamar mandi, perabot, lampu, kaca, dan lain-lain.',
            'lokasi' => '-7.799652996882128, 110.3557230662749'
        ]);

        Tukang::create([
            'id' => 16,
            'user_id' => 19,
            'role_id' => 3,
            'nama' => 'Jokowi',
            'jenislayanan_id' => 2,
            'alamat' => 'Jalan Solo No. 789, Gedongtengen, Yogyakarta',
            'kecamatan_id' => 1,
            'deskripsi' => 'Layanan pemasangan dan penggantian meliputi pemasangan AC, kamar mandi, perabot, lampu, kaca, dan lain-lain.',
            'lokasi' => '-7.780196691996639, 110.34350815534152'
        ]);

        Tukang::create([
            'id' => 17,
            'user_id' => 20,
            'role_id' => 3,
            'nama' => 'Agustian',
            'jenislayanan_id' => 2,
            'alamat' => 'Jalan Magelang No. 101, Gondokusuman, Yogyakarta',
            'kecamatan_id' => 1,
            'deskripsi' => 'Layanan pemasangan dan penggantian meliputi pemasangan AC, kamar mandi, perabot, lampu, kaca, dan lain-lain.',
            'lokasi' => '-7.771753314350082, 110.3826986057011'
        ]);

        Tukang::create([
            'id' => 18,
            'user_id' => 21,
            'role_id' => 3,
            'nama' => 'Jaya',
            'jenislayanan_id' => 2,
            'alamat' => 'Jalan Pramuka No. 222, Gondomanan, Yogyakarta',
            'kecamatan_id' => 2,
            'deskripsi' => 'Layanan pemasangan dan penggantian meliputi pemasangan AC, kamar mandi, perabot, lampu, kaca, dan lain-lain.',
            'lokasi' => '-7.736216131356884, 110.36379771107723'
        ]);

        Tukang::create([
            'id' => 19,
            'user_id' => 22,
            'role_id' => 3,
            'nama' => 'Rahman',
            'jenislayanan_id' => 2,
            'alamat' => 'Jalan Veteran No. 333, Jetis, Yogyakarta',
            'kecamatan_id' => 2,
            'deskripsi' => 'Layanan pemasangan dan penggantian meliputi pemasangan AC, kamar mandi, perabot, lampu, kaca, dan lain-lain.',
            'lokasi' => '-7.74863480759649, 110.38902633564862'
        ]);

        Tukang::create([
            'id' => 20,
            'user_id' => 23,
            'role_id' => 3,
            'nama' => 'Hadianto',
            'jenislayanan_id' => 2,
            'alamat' => 'Jalan Malioboro No. 456, Kotagede, Yogyakarta',
            'kecamatan_id' => 2,
            'deskripsi' => 'Layanan pemasangan dan penggantian meliputi pemasangan AC, kamar mandi, perabot, lampu, kaca, dan lain-lain.',
            'lokasi' => '-7.694613719734615, 110.42080582097917'
        ]);

        Tukang::create([
            'id' => 21,
            'user_id' => 24,
            'role_id' => 3,
            'nama' => 'Hendri',
            'jenislayanan_id' => 2,
            'alamat' => 'Jalan Magelang No. 123, Mergangsan, Yogyakarta',
            'kecamatan_id' => 3,
            'deskripsi' => 'Layanan pemasangan dan penggantian meliputi pemasangan AC, kamar mandi, perabot, lampu, kaca, dan lain-lain.',
            'lokasi' => '-7.838404616152544, 110.40891864719809'
        ]);

        Tukang::create([
            'id' => 22,
            'user_id' => 25,
            'role_id' => 3,
            'nama' => 'Heryanto',
            'jenislayanan_id' => 2,
            'alamat' => 'Jalan Malioboro No. 789, Umbulharjo, Yogyakarta',
            'kecamatan_id' => 3,
            'deskripsi' => 'Layanan pemasangan dan penggantian meliputi pemasangan AC, kamar mandi, perabot, lampu, kaca, dan lain-lain.',
            'lokasi' => '-7.868400365977322, 110.31316918165501'
        ]);

        Tukang::create([
            'id' => 23,
            'user_id' => 26,
            'role_id' => 3,
            'nama' => 'Hendro',
            'jenislayanan_id' => 2,
            'alamat' => 'Jalan Solo No. 111, Depok, Yogyakarta',
            'kecamatan_id' => 3,
            'deskripsi' => 'Layanan pemasangan dan penggantian meliputi pemasangan AC, kamar mandi, perabot, lampu, kaca, dan lain-lain.',
            'lokasi' => ''
        ]);

        Tukang::create([
            'id' => 24,
            'user_id' => 27,
            'role_id' => 3,
            'nama' => 'Haryanto',
            'jenislayanan_id' => 2,
            'alamat' => 'Jalan Magelang No. 555, Ngampilan, Yogyakarta',
            'kecamatan_id' => 3,
            'deskripsi' => 'Layanan pemasangan dan penggantian meliputi pemasangan AC, kamar mandi, perabot, lampu, kaca, dan lain-lain.',
            'lokasi' => '-7.949448323319535, 110.32989367240376'
        ]);

        Tukang::create([
            'id' => 25,
            'user_id' => 28,
            'role_id' => 3,
            'nama' => 'Anton',
            'jenislayanan_id' => 2,
            'alamat' => 'Jalan Veteran No. 777, Mantrijeron, Yogyakarta',
            'kecamatan_id' => 4,
            'deskripsi' => 'Layanan pemasangan dan penggantian meliputi pemasangan AC, kamar mandi, perabot, lampu, kaca, dan lain-lain.',
            'lokasi' => '-8.00158616120206, 110.64955756622807'
        ]);

        Tukang::create([
            'id' => 26,
            'user_id' => 29,
            'role_id' => 3,
            'nama' => 'Dayat',
            'jenislayanan_id' => 2,
            'alamat' => 'Jalan Sudirman No. 222, Tegalrejo, Yogyakarta',
            'kecamatan_id' => 4,
            'deskripsi' => 'Layanan pemasangan dan penggantian meliputi pemasangan AC, kamar mandi, perabot, lampu, kaca, dan lain-lain.',
            'lokasi' => '-7.969502937752469, 110.60006157605558'
        ]);

        Tukang::create([
            'id' => 27,
            'user_id' => 30,
            'role_id' => 3,
            'nama' => 'Lilik',
            'jenislayanan_id' => 2,
            'alamat' => 'Jalan Solo No. 111, Gondomanan, Yogyakarta',
            'kecamatan_id' => 5,
            'deskripsi' => 'Layanan pemasangan dan penggantian meliputi pemasangan AC, kamar mandi, perabot, lampu, kaca, dan lain-lain.',
            'lokasi' => '-7.893069560561379, 110.13800892376061'
        ]);

        Tukang::create([
            'id' => 28,
            'user_id' => 31,
            'role_id' => 3,
            'nama' => 'Hartono',
            'jenislayanan_id' => 2,
            'alamat' => 'Jalan Magelang No. 555, Ngaglik, Yogyakarta',
            'kecamatan_id' => 5,
            'deskripsi' => 'Layanan pemasangan dan penggantian meliputi pemasangan AC, kamar mandi, perabot, lampu, kaca, dan lain-lain.',
            'lokasi' => '-7.8416265538034615, 110.16900294738988'
        ]);

        Tukang::create([
            'id' => 29,
            'user_id' => 32,
            'role_id' => 3,
            'nama' => 'Wiranto',
            'jenislayanan_id' => 3,
            'alamat' => 'Jalan Wates, Wirobrajan, Yogyakarta',
            'kecamatan_id' => 1,
            'deskripsi' => 'Layanan yang menyediakan tenaga kerja yang terlatih dan terampil untuk membersihkan berbagai jenis ruangan atau lingkungan.',
            'lokasi' => '-7.790507179518158, 110.36216060541058'
        ]);

        Tukang::create([
            'id' => 30,
            'user_id' => 33,
            'role_id' => 3,
            'nama' => 'Subari',
            'jenislayanan_id' => 3,
            'alamat' => 'Gedongkiwo, Matrijeron, Yogyakarta',
            'kecamatan_id' => 1,
            'deskripsi' => 'Layanan yang menyediakan tenaga kerja yang terlatih dan terampil untuk membersihkan berbagai jenis ruangan atau lingkungan.',
            'lokasi' => '-7.791326363848878, 110.38541835551473'
        ]);

        Tukang::create([
            'id' => 31,
            'user_id' => 34,
            'role_id' => 3,
            'nama' => 'Suroto',
            'jenislayanan_id' => 3,
            'alamat' => 'Jalan Magelang No. 555, Ngaglik, Yogyakarta',
            'kecamatan_id' => 1,
            'deskripsi' => 'Layanan yang menyediakan tenaga kerja yang terlatih dan terampil untuk membersihkan berbagai jenis ruangan atau lingkungan.',
            'lokasi' => '-7.815735716719235, 110.38657565327193'
        ]);

        Tukang::create([
            'id' => 32,
            'user_id' => 35,
            'role_id' => 3,
            'nama' => 'Sumardi',
            'jenislayanan_id' => 3,
            'alamat' => 'Jalan Solo No. 111, Gondomanan, Yogyakarta',
            'kecamatan_id' => 2,
            'deskripsi' => 'Layanan yang menyediakan tenaga kerja yang terlatih dan terampil untuk membersihkan berbagai jenis ruangan atau lingkungan.',
            'lokasi' => '-7.720984764931505, 110.40259173656057'
        ]);

        Tukang::create([
            'id' => 33,
            'user_id' => 36,
            'role_id' => 3,
            'nama' => 'Sukirman',
            'jenislayanan_id' => 3,
            'alamat' => 'Jalan Sudirman No. 222, Tegalrejo, Yogyakarta',
            'kecamatan_id' => 2,
            'deskripsi' => 'Layanan yang menyediakan tenaga kerja yang terlatih dan terampil untuk membersihkan berbagai jenis ruangan atau lingkungan.',
            'lokasi' => '-7.660343614879501, 110.34853860434148'
        ]);

        Tukang::create([
            'id' => 34,
            'user_id' => 37,
            'role_id' => 3,
            'nama' => 'Suratno',
            'jenislayanan_id' => 3,
            'alamat' => 'Jalan Solo No. 111, Gondomanan, Yogyakarta',
            'kecamatan_id' => 2,
            'deskripsi' => 'Layanan yang menyediakan tenaga kerja yang terlatih dan terampil untuk membersihkan berbagai jenis ruangan atau lingkungan.',
            'lokasi' => '-7.702568165312134, 110.34342398778081'
        ]);

        Tukang::create([
            'id' => 35,
            'user_id' => 38,
            'role_id' => 3,
            'nama' => 'Suratno',
            'jenislayanan_id' => 3,
            'alamat' => 'Jalan Veteran No. 777, Mantrijeron, Yogyakarta',
            'kecamatan_id' => 3,
            'deskripsi' => 'Layanan yang menyediakan tenaga kerja yang terlatih dan terampil untuk membersihkan berbagai jenis ruangan atau lingkungan.',
            'lokasi' => '-7.85952211194321, 110.2699256252592'
        ]);

        Tukang::create([
            'id' => 36,
            'user_id' => 39,
            'role_id' => 3,
            'nama' => 'Sukiswanto',
            'jenislayanan_id' => 3,
            'alamat' => 'Jalan Solo No. 111, Depok, Yogyakarta',
            'kecamatan_id' => 3,
            'deskripsi' => 'Layanan yang menyediakan tenaga kerja yang terlatih dan terampil untuk membersihkan berbagai jenis ruangan atau lingkungan.',
            'lokasi' => '-7.862378362029355, 110.36594101564722'
        ]);

        Tukang::create([
            'id' => 37,
            'user_id' => 40,
            'role_id' => 3,
            'nama' => 'Sutoyo',
            'jenislayanan_id' => 3,
            'alamat' => 'Jalan Veteran No. 777, Mantrijeron, Yogyakarta',
            'kecamatan_id' => 3,
            'deskripsi' => 'Layanan yang menyediakan tenaga kerja yang terlatih dan terampil untuk membersihkan berbagai jenis ruangan atau lingkungan.',
            'lokasi' => '-7.91521543469557, 110.35902098751116'
        ]);

        Tukang::create([
            'id' => 38,
            'user_id' => 41,
            'role_id' => 3,
            'nama' => 'Ruslan',
            'jenislayanan_id' => 3,
            'alamat' => 'Jalan Malioboro No. 456, Danurejan, Yogyakarta',
            'kecamatan_id' => 4,
            'deskripsi' => 'Layanan yang menyediakan tenaga kerja yang terlatih dan terampil untuk membersihkan berbagai jenis ruangan atau lingkungan.',
            'lokasi' => '-7.954910188341903, 110.65917721875583'
        ]);

        Tukang::create([
            'id' => 39,
            'user_id' => 42,
            'role_id' => 3,
            'nama' => 'Paeran',
            'jenislayanan_id' => 3,
            'alamat' => 'Jalan Pramuka No. 222, Mergangsan, Yogyakarta',
            'kecamatan_id' => 4,
            'deskripsi' => 'Layanan yang menyediakan tenaga kerja yang terlatih dan terampil untuk membersihkan berbagai jenis ruangan atau lingkungan.',
            'lokasi' => '-7.907076111575252, 110.56128765408096'
        ]);

        Tukang::create([
            'id' => 40,
            'user_id' => 43,
            'role_id' => 3,
            'nama' => 'Paeran',
            'jenislayanan_id' => 3,
            'alamat' => 'Jalan Rotowijawan, Kraton, Yogyakarta',
            'kecamatan_id' => 4,
            'deskripsi' => 'Layanan yang menyediakan tenaga kerja yang terlatih dan terampil untuk membersihkan berbagai jenis ruangan atau lingkungan.',
            'lokasi' => '-8.005220128347611, 110.56402028429339'
        ]);

        Tukang::create([
            'id' => 41,
            'user_id' => 44,
            'role_id' => 3,
            'nama' => 'Suyatman',
            'jenislayanan_id' => 3,
            'alamat' => 'Jalan Pramuka No. 222, Mergangsan, Yogyakarta',
            'kecamatan_id' => 5,
            'deskripsi' => 'Layanan yang menyediakan tenaga kerja yang terlatih dan terampil untuk membersihkan berbagai jenis ruangan atau lingkungan.',
            'lokasi' => '-7.828600380084472, 110.21079568900745'
        ]);

        Tukang::create([
            'id' => 42,
            'user_id' => 45,
            'role_id' => 3,
            'nama' => 'Ngatimin Jatmiko',
            'jenislayanan_id' => 3,
            'alamat' => 'Jalan Veteran No. 333, Ngampilan, Yogyakarta',
            'kecamatan_id' => 5,
            'deskripsi' => 'Layanan yang menyediakan tenaga kerja yang terlatih dan terampil untuk membersihkan berbagai jenis ruangan atau lingkungan.',
            'lokasi' => '-7.896117706387665, 110.23211056850843'
        ]);

        Tukang::create([
            'id' => 43,
            'user_id' => 46,
            'role_id' => 3,
            'nama' => 'Kerno',
            'jenislayanan_id' => 3,
            'alamat' => 'Jalan Malioboro No. 456, Pakualaman, Yogyakarta',
            'kecamatan_id' => 1,
            'deskripsi' => 'Layanan yang menyediakan tenaga kerja yang terlatih dan terampil untuk membersihkan berbagai jenis ruangan atau lingkungan.',
            'lokasi' => ''
        ]);

        Tukang::create([
            'id' => 44,
            'user_id' => 47,
            'role_id' => 3,
            'nama' => 'Sukadi',
            'jenislayanan_id' => 4,
            'alamat' => 'Jalan Magelang No. 101, Mantrijeron, Yogyakarta',
            'kecamatan_id' => 1,
            'deskripsi' => 'Layanan yang menyediakan tenaga kerja terampil dan berpengalaman untuk melakukan perbaikan, perombakan, atau peningkatan pada suatu bangunan atau ruangan.',
            'lokasi' => '-7.785257593943216, 110.34915683801424'
        ]);

        Tukang::create([
            'id' => 45,
            'user_id' => 48,
            'role_id' => 3,
            'nama' => 'Sulastri',
            'jenislayanan_id' => 4,
            'alamat' => 'Jalan Magelang No. 101, Mantrijeron, Yogyakarta',
            'kecamatan_id' => 1,
            'deskripsi' => 'Layanan yang menyediakan tenaga kerja terampil dan berpengalaman untuk melakukan perbaikan, perombakan, atau peningkatan pada suatu bangunan atau ruangan.',
            'lokasi' => '-7.795648534259249, 110.34079506481274'
        ]);

        Tukang::create([
            'id' => 46,
            'user_id' => 49,
            'role_id' => 3,
            'nama' => 'Kiswanto',
            'jenislayanan_id' => 4,
            'alamat' => 'Jalan Pramuka No. 222, Mergangsan, Yogyakarta',
            'kecamatan_id' => 1,
            'deskripsi' => 'Layanan yang menyediakan tenaga kerja terampil dan berpengalaman untuk melakukan perbaikan, perombakan, atau peningkatan pada suatu bangunan atau ruangan.',
            'lokasi' => '-7.810848241926989, 110.34188078998284'
        ]);

        Tukang::create([
            'id' => 47,
            'user_id' => 50,
            'role_id' => 3,
            'nama' => 'Eko Yunarto',
            'jenislayanan_id' => 4,
            'alamat' => 'Jalan Malioboro No. 456, Danurejan, Yogyakarta',
            'kecamatan_id' => 1,
            'deskripsi' => 'Layanan yang menyediakan tenaga kerja terampil dan berpengalaman untuk melakukan perbaikan, perombakan, atau peningkatan pada suatu bangunan atau ruangan.',
            'lokasi' => ''
        ]);

        Tukang::create([
            'id' => 48,
            'user_id' => 51,
            'role_id' => 3,
            'nama' => 'Supono',
            'jenislayanan_id' => 4,
            'alamat' => 'Jalan Solo No. 789, Gedongtengen, Yogyakarta',
            'kecamatan_id' => 2,
            'deskripsi' => 'Layanan yang menyediakan tenaga kerja terampil dan berpengalaman untuk melakukan perbaikan, perombakan, atau peningkatan pada suatu bangunan atau ruangan.',
            'lokasi' => ''
        ]);

        Tukang::create([
            'id' => 49,
            'user_id' => 52,
            'role_id' => 3,
            'nama' => 'Tri Mulyadi',
            'jenislayanan_id' => 4,
            'alamat' => 'Jalan Solo No. 111, Depok, Yogyakarta',
            'kecamatan_id' => 3,
            'deskripsi' => 'Layanan yang menyediakan tenaga kerja terampil dan berpengalaman untuk melakukan perbaikan, perombakan, atau peningkatan pada suatu bangunan atau ruangan.',
            'lokasi' => ''
        ]);

        Tukang::create([
            'id' => 50,
            'user_id' => 53,
            'role_id' => 3,
            'nama' => 'Sukardi',
            'jenislayanan_id' => 4,
            'alamat' => 'Jalan Malioboro No. 456, Danurejan, Yogyakarta',
            'kecamatan_id' => 1,
            'deskripsi' => 'Layanan yang menyediakan tenaga kerja terampil dan berpengalaman untuk melakukan perbaikan, perombakan, atau peningkatan pada suatu bangunan atau ruangan.',
            'lokasi' => ''
        ]);

        Tukang::create([
            'id' => 51,
            'user_id' => 54,
            'role_id' => 3,
            'nama' => 'Supriono',
            'jenislayanan_id' => 4,
            'alamat' => 'Jalan Solo No. 789, Kraton, Yogyakarta',
            'kecamatan_id' => 5,
            'deskripsi' => 'Layanan yang menyediakan tenaga kerja terampil dan berpengalaman untuk melakukan perbaikan, perombakan, atau peningkatan pada suatu bangunan atau ruangan.',
            'lokasi' => ''
        ]);

        Tukang::create([
            'id' => 52,
            'user_id' => 55,
            'role_id' => 3,
            'nama' => 'Kardiono',
            'jenislayanan_id' => 4,
            'alamat' => 'Jalan Pramuka No. 222, Mergangsan, Yogyakarta',
            'kecamatan_id' => 3,
            'deskripsi' => 'Layanan yang menyediakan tenaga kerja terampil dan berpengalaman untuk melakukan perbaikan, perombakan, atau peningkatan pada suatu bangunan atau ruangan.',
            'lokasi' => ''
        ]);

        Tukang::create([
            'id' => 53,
            'user_id' => 56,
            'role_id' => 3,
            'nama' => 'Karyanto',
            'jenislayanan_id' => 5,
            'alamat' => 'Jalan Pramuka No. 222, Mergangsan, Yogyakarta',
            'kecamatan_id' => 1,
            'deskripsi' => 'Layanan penyedia tenaga kerja terampil dalam bidang pengolahan kayu, seperti pembuatan/perbaikan furnitur, perabot kayu, dan kusen kayu.'
,            'lokasi' => '-7.807527737689345, 110.3330533716223'
        ]);

        Tukang::create([
            'id' => 54,
            'user_id' => 57,
            'role_id' => 3,
            'nama' => 'Sukijan',
            'jenislayanan_id' => 5,
            'alamat' => 'Jalan Magelang No. 101, Umbulharjo, Yogyakarta',
            'kecamatan_id' => 1,
            'deskripsi' => 'Layanan penyedia tenaga kerja terampil dalam bidang pengolahan kayu, seperti pembuatan/perbaikan furnitur, perabot kayu, dan kusen kayu.'
,            'lokasi' => '-7.761424158967083, 110.35325401294058'
        ]);

        Tukang::create([
            'id' => 55,
            'user_id' => 58,
            'role_id' => 3,
            'nama' => 'Rahmat Handoko',
            'jenislayanan_id' => 5,
            'alamat' => 'Jalan Magelang No. 123, Mergangsan, Yogyakarta',
            'kecamatan_id' => 1,
            'deskripsi' => 'Layanan penyedia tenaga kerja terampil dalam bidang pengolahan kayu, seperti pembuatan/perbaikan furnitur, perabot kayu, dan kusen kayu.'
,            'lokasi' => '-7.770554178728651, 110.37348592327123'
        ]);

        Tukang::create([
            'id' => 56,
            'user_id' => 59,
            'role_id' => 3,
            'nama' => 'Rahmat Pujiono',
            'jenislayanan_id' => 5,
            'alamat' => 'Jalan Malioboro No. 456, Danurejan, Yogyakarta',
            'kecamatan_id' => 1,
            'deskripsi' => 'Layanan penyedia tenaga kerja terampil dalam bidang pengolahan kayu, seperti pembuatan/perbaikan furnitur, perabot kayu, dan kusen kayu.'
,            'lokasi' => ''
        ]);

        Tukang::create([
            'id' => 57,
            'user_id' => 60,
            'role_id' => 3,
            'nama' => 'Puji Rahmanto',
            'jenislayanan_id' => 5,
            'alamat' => 'Jalan Magelang No. 113, Mergangsan, Yogyakarta',
            'kecamatan_id' => 5,
            'deskripsi' => 'Layanan penyedia tenaga kerja terampil dalam bidang pengolahan kayu, seperti pembuatan/perbaikan furnitur, perabot kayu, dan kusen kayu.'
,            'lokasi' => ''
        ]);

        Tukang::create([
            'id' => 58,
            'user_id' => 61,
            'role_id' => 3,
            'nama' => 'Puji Harotno',
            'jenislayanan_id' => 5,
            'alamat' => 'Jalan Sudirman No. 22, Tegalrejo, Yogyakarta',
            'kecamatan_id' => 1,
            'deskripsi' => 'Layanan penyedia tenaga kerja terampil dalam bidang pengolahan kayu, seperti pembuatan/perbaikan furnitur, perabot kayu, dan kusen kayu.'
,            'lokasi' => ''
        ]);

        Tukang::create([
            'id' => 59,
            'user_id' => 62,
            'role_id' => 3,
            'nama' => 'Yuana Putra',
            'jenislayanan_id' => 5,
            'alamat' => 'Jalan Wates, Wirobrajan, Yogyakarta',
            'kecamatan_id' => 2,
            'deskripsi' => 'Layanan penyedia tenaga kerja terampil dalam bidang pengolahan kayu, seperti pembuatan/perbaikan furnitur, perabot kayu, dan kusen kayu.'
,            'lokasi' => ''
        ]);

        Tukang::create([
            'id' => 60,
            'user_id' => 63,
            'role_id' => 3,
            'nama' => 'Mega Juana',
            'jenislayanan_id' => 5,
            'alamat' => 'Jalan Malioboro No. 45, Danurejan, Yogyakarta',
            'kecamatan_id' => 1,
            'deskripsi' => 'Layanan penyedia tenaga kerja terampil dalam bidang pengolahan kayu, seperti pembuatan/perbaikan furnitur, perabot kayu, dan kusen kayu.'
,            'lokasi' => ''
        ]);

        Tukang::create([
            'id' => 61,
            'user_id' => 64,
            'role_id' => 3,
            'nama' => 'Edi Maryadi',
            'jenislayanan_id' => 5,
            'alamat' => 'Jalan Solo No. 1, Gondomanan, Yogyakarta',
            'kecamatan_id' => 5,
            'deskripsi' => 'Layanan penyedia tenaga kerja terampil dalam bidang pengolahan kayu, seperti pembuatan/perbaikan furnitur, perabot kayu, dan kusen kayu.'
,            'lokasi' => ''
        ]);

        Tukang::create([
            'id' => 62,
            'user_id' => 65,
            'role_id' => 3,
            'nama' => 'Rizky Subekti',
            'jenislayanan_id' => 5,
            'alamat' => 'Jalan Pramuka No. 2, Mergangsan, Yogyakarta',
            'kecamatan_id' => 3,
            'deskripsi' => 'Layanan penyedia tenaga kerja terampil dalam bidang pengolahan kayu, seperti pembuatan/perbaikan furnitur, perabot kayu, dan kusen kayu.'
,            'lokasi' => ''
        ]);

        Tukang::create([
            'id' => 63,
            'user_id' => 66,
            'role_id' => 3,
            'nama' => 'Andri Bujana',
            'jenislayanan_id' => 5,
            'alamat' => 'Jalan Veteran No. 35, Jetis, Yogyakarta',
            'kecamatan_id' => 5,
            'deskripsi' => 'Layanan penyedia tenaga kerja terampil dalam bidang pengolahan kayu, seperti pembuatan/perbaikan furnitur, perabot kayu, dan kusen kayu.'
,            'lokasi' => ''
        ]);

        Tukang::create([
            'id' => 64,
            'user_id' => 67,
            'role_id' => 3,
            'nama' => 'Ahmad Seferi',
            'jenislayanan_id' => 5,
            'alamat' => 'Jalan Magelang No. 25, Ngaglik, Yogyakarta',
            'kecamatan_id' => 5,
            'deskripsi' => 'Layanan penyedia tenaga kerja terampil dalam bidang pengolahan kayu, seperti pembuatan/perbaikan furnitur, perabot kayu, dan kusen kayu.'
,            'lokasi' => ''
        ]);

        Tukang::create([
            'id' => 65,
            'user_id' => 68,
            'role_id' => 3,
            'nama' => 'Ahmad Sukron',
            'jenislayanan_id' => 6,
            'alamat' => 'Jalan Magelang No. 14, Mergangsan, Yogyakarta',
            'kecamatan_id' => 1,
            'deskripsi' => 'Layanan penyedia tenaga kerja terampil dalam bidang pengolahan komponen besi, seperti pagar, pintu gerbang, railing tangga, atap logam, atau konstruksi baja.'
,            'lokasi' => '-7.76013403148395, 110.37799303200825'
        ]);

        Tukang::create([
            'id' => 66,
            'user_id' => 69,
            'role_id' => 3,
            'nama' => 'Abdul Malik',
            'jenislayanan_id' => 6,
            'alamat' => 'Jalan Wates, Wirobrajan, Yogyakarta',
            'kecamatan_id' => 1,
            'deskripsi' => 'Layanan penyedia tenaga kerja terampil dalam bidang pengolahan komponen besi, seperti pagar, pintu gerbang, railing tangga, atap logam, atau konstruksi baja.'
,            'lokasi' => '-7.820071147581246, 110.36447170579719'
        ]);

        Tukang::create([
            'id' => 67,
            'user_id' => 70,
            'role_id' => 3,
            'nama' => 'Abdul Karim',
            'jenislayanan_id' => 6,
            'alamat' => 'Jalan Pramuka No. 222, Gondomanan, Yogyakarta',
            'kecamatan_id' => 1,
            'deskripsi' => 'Layanan penyedia tenaga kerja terampil dalam bidang pengolahan komponen besi, seperti pagar, pintu gerbang, railing tangga, atap logam, atau konstruksi baja.'
,            'lokasi' => '-7.814712880764346, 110.354155434688'
        ]);

        Tukang::create([
            'id' => 68,
            'user_id' => 71,
            'role_id' => 3,
            'nama' => 'Budi Saptono',
            'jenislayanan_id' => 6,
            'alamat' => 'Jalan Solo No. 65, Kraton, Yogyakarta',
            'kecamatan_id' => 5,
            'deskripsi' => 'Layanan penyedia tenaga kerja terampil dalam bidang pengolahan komponen besi, seperti pagar, pintu gerbang, railing tangga, atap logam, atau konstruksi baja.'
,            'lokasi' => ''
        ]);

        Tukang::create([
            'id' => 69,
            'user_id' => 72,
            'role_id' => 3,
            'nama' => 'Budi Raharjo',
            'jenislayanan_id' => 6,
            'alamat' => 'Jalan Pramuka No. 32, Gondomanan, Yogyakarta',
            'kecamatan_id' => 4,
            'deskripsi' => 'Layanan penyedia tenaga kerja terampil dalam bidang pengolahan komponen besi, seperti pagar, pintu gerbang, railing tangga, atap logam, atau konstruksi baja.'
,            'lokasi' => ''
        ]);

        Tukang::create([
            'id' => 70,
            'user_id' => 73,
            'role_id' => 3,
            'nama' => 'Budi Hartono',
            'jenislayanan_id' => 6,
            'alamat' => 'Jalan Veteran No. 23, Mantrijeron, Yogyakarta',
            'kecamatan_id' => 2,
            'deskripsi' => 'Layanan penyedia tenaga kerja terampil dalam bidang pengolahan komponen besi, seperti pagar, pintu gerbang, railing tangga, atap logam, atau konstruksi baja.'
,            'lokasi' => ''
        ]);

        Tukang::create([
            'id' => 71,
            'user_id' => 74,
            'role_id' => 3,
            'nama' => 'Wira Sabdo Aji',
            'jenislayanan_id' => 6,
            'alamat' => 'Jalan Malioboro No. 33, Pakualaman, Yogyakarta',
            'kecamatan_id' => 1,
            'deskripsi' => 'Layanan penyedia tenaga kerja terampil dalam bidang pengolahan komponen besi, seperti pagar, pintu gerbang, railing tangga, atap logam, atau konstruksi baja.'
,            'lokasi' => ''
        ]);

        Tukang::create([
            'id' => 72,
            'user_id' => 75,
            'role_id' => 3,
            'nama' => 'Sabar',
            'jenislayanan_id' => 6,
            'alamat' => 'Jalan Wates km. 3, Wirobrajan, Yogyakarta',
            'kecamatan_id' => 2,
            'deskripsi' => 'Layanan penyedia tenaga kerja terampil dalam bidang pengolahan komponen besi, seperti pagar, pintu gerbang, railing tangga, atap logam, atau konstruksi baja.'
,            'lokasi' => ''
        ]);

        Tukang::create([
            'id' => 73,
            'user_id' => 76,
            'role_id' => 3,
            'nama' => 'Muhammad Ali',
            'jenislayanan_id' => 6,
            'alamat' => 'Jalan Solo No. 21, Depok, Yogyakarta',
            'kecamatan_id' => 3,
            'deskripsi' => 'Layanan penyedia tenaga kerja terampil dalam bidang pengolahan komponen besi, seperti pagar, pintu gerbang, railing tangga, atap logam, atau konstruksi baja.'
,            'lokasi' => ''
        ]);

        Tukang::create([
            'id' => 74,
            'user_id' => 77,
            'role_id' => 3,
            'nama' => 'Muhammad Ali',
            'jenislayanan_id' => 7,
            'alamat' => 'Jalan Solo No. 21, Depok, Yogyakarta',
            'kecamatan_id' => 1,
            'deskripsi' => 'Layanan penyedia tenaga kerja terampil dalam bidang instalasi, perbaikan, dan pemeliharaan sistem listrik.'
,            'lokasi' => '-7.773928266237679, 110.35195195930544'
        ]);

        Tukang::create([
            'id' => 75,
            'user_id' => 78,
            'role_id' => 3,
            'nama' => 'Maksum Jumari',
            'jenislayanan_id' => 7,
            'alamat' => 'Jalan Magelang No. 33, Ngaglik, Yogyakarta',
            'kecamatan_id' => 1,
            'deskripsi' => 'Layanan penyedia tenaga kerja terampil dalam bidang instalasi, perbaikan, dan pemeliharaan sistem listrik.'
,            'lokasi' => '-7.804591522503669, 110.36296933621819'
        ]);

        Tukang::create([
            'id' => 76,
            'user_id' => 79,
            'role_id' => 3,
            'nama' => 'Abdul Jauhari',
            'jenislayanan_id' => 7,
            'alamat' => 'Jalan Malioboro No. 456, Pakualaman, Yogyakarta',
            'kecamatan_id' => 1,
            'deskripsi' => 'Layanan penyedia tenaga kerja terampil dalam bidang instalasi, perbaikan, dan pemeliharaan sistem listrik.'
,            'lokasi' => '-7.769005562197248, 110.40109276027042'
        ]);

        Tukang::create([
            'id' => 77,
            'user_id' => 80,
            'role_id' => 3,
            'nama' => 'Abdul Jalil',
            'jenislayanan_id' => 7,
            'alamat' => 'Jalan Solo No. 35, Depok, Yogyakarta',
            'kecamatan_id' => 3,
            'deskripsi' => 'Layanan penyedia tenaga kerja terampil dalam bidang instalasi, perbaikan, dan pemeliharaan sistem listrik.'
,            'lokasi' => ''
        ]);

        Tukang::create([
            'id' => 78,
            'user_id' => 81,
            'role_id' => 3,
            'nama' => 'Mahbub Junaidi',
            'jenislayanan_id' => 7,
            'alamat' => 'Jalan Wates km. 3, Wirobrajan, Yogyakarta',
            'kecamatan_id' => 2,
            'deskripsi' => 'Layanan penyedia tenaga kerja terampil dalam bidang instalasi, perbaikan, dan pemeliharaan sistem listrik.'
,            'lokasi' => ''
        ]);

        Tukang::create([
            'id' => 79,
            'user_id' => 82,
            'role_id' => 3,
            'nama' => 'Ahmad Junaidi',
            'jenislayanan_id' => 7,
            'alamat' => 'Jalan Solo No. 12, Depok, Yogyakarta',
            'kecamatan_id' => 3,
            'deskripsi' => 'Layanan penyedia tenaga kerja terampil dalam bidang instalasi, perbaikan, dan pemeliharaan sistem listrik.'
,            'lokasi' => ''
        ]);

        Tukang::create([
            'id' => 80,
            'user_id' => 83,
            'role_id' => 3,
            'nama' => 'Susilo Amasis',
            'jenislayanan_id' => 8,
            'alamat' => 'Jalan Magelang No. 13, Umbulharjo, Yogyakarta',
            'kecamatan_id' => 1,
            'deskripsi' => 'Layanan penyedia tenaga kerja terampil dalam bidang instalasi, perbaikan, dan pemeliharaan sistem pipa..',
            'lokasi' => '-7.772926599145071, 110.39151845474453'
        ]);

        Tukang::create([
            'id' => 81,
            'user_id' => 84,
            'role_id' => 3,
            'nama' => 'Susilo Adi Yuana',
            'jenislayanan_id' => 8,
            'alamat' => 'Jalan Veteran No. 67, Jetis, Yogyakarta',
            'kecamatan_id' => 1,
            'deskripsi' => 'Layanan penyedia tenaga kerja terampil dalam bidang instalasi, perbaikan, dan pemeliharaan sistem pipa..',
            'lokasi' => '-7.807030431163152, 110.37743734652395'
        ]);

        Tukang::create([
            'id' => 82,
            'user_id' => 85,
            'role_id' => 3,
            'nama' => 'Andi Gunawan',
            'jenislayanan_id' => 8,
            'alamat' => 'Jalan Pramuka No. 45, Wirobrajan, Yogyakarta',
            'kecamatan_id' => 1,
            'deskripsi' => 'Layanan penyedia tenaga kerja terampil dalam bidang instalasi, perbaikan, dan pemeliharaan sistem pipa..',
            'lokasi' => '-7.773942048019419, 110.39111789067638'
        ]);

        Tukang::create([
            'id' => 83,
            'user_id' => 86,
            'role_id' => 3,
            'nama' => 'Rudi Tabuti',
            'jenislayanan_id' => 8,
            'alamat' => 'Jalan Veteran No. 61, Mantrijeron, Yogyakarta',
            'kecamatan_id' => 1,
            'deskripsi' => 'Layanan penyedia tenaga kerja terampil dalam bidang instalasi, perbaikan, dan pemeliharaan sistem pipa..',
            'lokasi' => ''
        ]);

        Tukang::create([
            'id' => 84,
            'user_id' => 87,
            'role_id' => 3,
            'nama' => 'Joko Susilo',
            'jenislayanan_id' => 8,
            'alamat' => 'Jalan Wates km. 2, Wirobrajan, Yogyakarta',
            'kecamatan_id' => 2,
            'deskripsi' => 'Layanan penyedia tenaga kerja terampil dalam bidang instalasi, perbaikan, dan pemeliharaan sistem pipa..',
            'lokasi' => ''
        ]);

        Tukang::create([
            'id' => 85,
            'user_id' => 88,
            'role_id' => 3,
            'nama' => 'Joko Wiroso',
            'jenislayanan_id' => 8,
            'alamat' => 'Jalan Wates km. 2, Wirobrajan, Yogyakarta',
            'kecamatan_id' => 2,
            'deskripsi' => 'Layanan penyedia tenaga kerja terampil dalam bidang instalasi, perbaikan, dan pemeliharaan sistem pipa..',
            'lokasi' => ''
        ]);
    }
}
