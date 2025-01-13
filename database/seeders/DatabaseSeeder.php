<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $names = ['admin', 'staff', 'guest'];
        foreach ($names as $name) {
            for ($i = 1; $i <= 3; $i++) {
                User::create([
                    'name' => $name,
                    'email' => $name . $i . '@gmail.com', // Append $i to make email unique
                    'password' => bcrypt('password'),
                ]);
            }
        }
        DB::table('provinsi')->insert([
            ['id' => 11, 'nama' => 'ACEH', 'alt_nama' => 'ACEH', 'lat' => 4.368550, 'long' => 97.025300],
            ['id' => 12, 'nama' => 'SUMATERA UTARA', 'alt_nama' => 'SUMATERA UTARA', 'lat' => 2.192350, 'long' => 99.381220],
            ['id' => 13, 'nama' => 'SUMATERA BARAT', 'alt_nama' => 'SUMATERA BARAT', 'lat' => -1.342250, 'long' => 100.076100],
            ['id' => 14, 'nama' => 'RIAU', 'alt_nama' => 'RIAU', 'lat' => 0.500410, 'long' => 101.547580],
            ['id' => 15, 'nama' => 'JAMBI', 'alt_nama' => 'JAMBI', 'lat' => -1.611570, 'long' => 102.779700],
            ['id' => 16, 'nama' => 'SUMATERA SELATAN', 'alt_nama' => 'SUMATERA SELATAN', 'lat' => -3.126680, 'long' => 104.093060],
            ['id' => 17, 'nama' => 'BENGKULU', 'alt_nama' => 'BENGKULU', 'lat' => -3.518680, 'long' => 102.535980],
            ['id' => 18, 'nama' => 'LAMPUNG', 'alt_nama' => 'LAMPUNG', 'lat' => -4.855500, 'long' => 105.027300],
            ['id' => 19, 'nama' => 'KEPULAUAN BANGKA BELITUNG', 'alt_nama' => 'KEPULAUAN BANGKA BELITUNG', 'lat' => -2.757750, 'long' => 107.583940],
            ['id' => 21, 'nama' => 'KEPULAUAN RIAU', 'alt_nama' => 'KEPULAUAN RIAU', 'lat' => -0.154780, 'long' => 104.580370],
            ['id' => 31, 'nama' => 'DKI JAKARTA', 'alt_nama' => 'DKI JAKARTA', 'lat' => 6.174500, 'long' => 106.822700],
            ['id' => 32, 'nama' => 'JAWA BARAT', 'alt_nama' => 'JAWA BARAT', 'lat' => -6.889170, 'long' => 107.640470],
            ['id' => 33, 'nama' => 'JAWA TENGAH', 'alt_nama' => 'JAWA TENGAH', 'lat' => -7.303240, 'long' => 110.004410],
            ['id' => 34, 'nama' => 'DI YOGYAKARTA', 'alt_nama' => 'DI YOGYAKARTA', 'lat' => 7.795600, 'long' => 110.369500],
            ['id' => 35, 'nama' => 'JAWA TIMUR', 'alt_nama' => 'JAWA TIMUR', 'lat' => -6.968510, 'long' => 113.980050],
            ['id' => 36, 'nama' => 'BANTEN', 'alt_nama' => 'BANTEN', 'lat' => -6.445380, 'long' => 106.137560],
            ['id' => 51, 'nama' => 'BALI', 'alt_nama' => 'BALI', 'lat' => -8.235660, 'long' => 115.122390],
            ['id' => 52, 'nama' => 'NUSA TENGGARA BARAT', 'alt_nama' => 'NUSA TENGGARA BARAT', 'lat' => -8.121790, 'long' => 117.636960],
            ['id' => 53, 'nama' => 'NUSA TENGGARA TIMUR', 'alt_nama' => 'NUSA TENGGARA TIMUR', 'lat' => -8.565680, 'long' => 120.697860],
            ['id' => 61, 'nama' => 'KALIMANTAN BARAT', 'alt_nama' => 'KALIMANTAN BARAT', 'lat' => -0.132240, 'long' => 111.096890],
            ['id' => 62, 'nama' => 'KALIMANTAN TENGAH', 'alt_nama' => 'KALIMANTAN TENGAH', 'lat' => -1.499580, 'long' => 113.290330],
            ['id' => 63, 'nama' => 'KALIMANTAN SELATAN', 'alt_nama' => 'KALIMANTAN SELATAN', 'lat' => -2.943480, 'long' => 115.375650],
            ['id' => 64, 'nama' => 'KALIMANTAN TIMUR', 'alt_nama' => 'KALIMANTAN TIMUR', 'lat' => 0.788440, 'long' => 116.242000],
            ['id' => 65, 'nama' => 'KALIMANTAN UTARA', 'alt_nama' => 'KALIMANTAN UTARA', 'lat' => 2.725940, 'long' => 116.911000],
            ['id' => 71, 'nama' => 'SULAWESI UTARA', 'alt_nama' => 'SULAWESI UTARA', 'lat' => 0.655570, 'long' => 124.090150],
            ['id' => 72, 'nama' => 'SULAWESI TENGAH', 'alt_nama' => 'SULAWESI TENGAH', 'lat' => -1.693780, 'long' => 120.808860],
            ['id' => 73, 'nama' => 'SULAWESI SELATAN', 'alt_nama' => 'SULAWESI SELATAN', 'lat' => -3.644670, 'long' => 119.947190],
            ['id' => 74, 'nama' => 'SULAWESI TENGGARA', 'alt_nama' => 'SULAWESI TENGGARA', 'lat' => -3.549120, 'long' => 121.727960],
            ['id' => 75, 'nama' => 'GORONTALO', 'alt_nama' => 'GORONTALO', 'lat' => 0.718620, 'long' => 122.455590],
            ['id' => 76, 'nama' => 'SULAWESI BARAT', 'alt_nama' => 'SULAWESI BARAT', 'lat' => -2.497450, 'long' => 119.391900],
            ['id' => 81, 'nama' => 'MALUKU', 'alt_nama' => 'MALUKU', 'lat' => -3.118840, 'long' => 129.420780],
            ['id' => 82, 'nama' => 'MALUKU UTARA', 'alt_nama' => 'MALUKU UTARA', 'lat' => 0.630120, 'long' => 127.972020],
            ['id' => 91, 'nama' => 'PAPUA BARAT', 'alt_nama' => 'PAPUA BARAT', 'lat' => -1.384240, 'long' => 132.902530],
            ['id' => 94, 'nama' => 'PAPUA', 'alt_nama' => 'PAPUA', 'lat' => -3.988570, 'long' => 138.348530],
        ]);
        DB::table('kabkota')->insert([
            ['id' => 1101, 'provinsi_id' => 11, 'nama' => 'KABUPATEN SIMEULUE', 'alt_nama' => 'KABUPATEN SIMEULUE', 'lat' => 2.616670, 'long' => 96.083330],
            ['id' => 1102, 'provinsi_id' => 11, 'nama' => 'KABUPATEN ACEH SINGKIL', 'alt_nama' => 'KABUPATEN ACEH SINGKIL', 'lat' => 2.416670, 'long' => 97.916670],
            ['id' => 1103, 'provinsi_id' => 11, 'nama' => 'KABUPATEN ACEH SELATAN', 'alt_nama' => 'KABUPATEN ACEH SELATAN', 'lat' => 3.166670, 'long' => 97.416670],
            ['id' => 1104, 'provinsi_id' => 11, 'nama' => 'KABUPATEN ACEH TENGGARA', 'alt_nama' => 'KABUPATEN ACEH TENGGARA', 'lat' => 3.366670, 'long' => 97.700000],
            ['id' => 1105, 'provinsi_id' => 11, 'nama' => 'KABUPATEN ACEH TIMUR', 'alt_nama' => 'KABUPATEN ACEH TIMUR', 'lat' => 4.633330, 'long' => 97.633330],
            ['id' => 1106, 'provinsi_id' => 11, 'nama' => 'KABUPATEN ACEH TENGAH', 'alt_nama' => 'KABUPATEN ACEH TENGAH', 'lat' => 4.510000, 'long' => 96.855000],
            ['id' => 1107, 'provinsi_id' => 11, 'nama' => 'KABUPATEN ACEH BARAT', 'alt_nama' => 'KABUPATEN ACEH BARAT', 'lat' => 4.450000, 'long' => 96.166670],
            ['id' => 1108, 'provinsi_id' => 11, 'nama' => 'KABUPATEN ACEH BESAR', 'alt_nama' => 'KABUPATEN ACEH BESAR', 'lat' => 5.383330, 'long' => 95.516670],
            ['id' => 1109, 'provinsi_id' => 11, 'nama' => 'KABUPATEN PIDIE', 'alt_nama' => 'KABUPATEN PIDIE', 'lat' => 5.080000, 'long' => 96.110000],
            ['id' => 1110, 'provinsi_id' => 11, 'nama' => 'KABUPATEN BIREUEN', 'alt_nama' => 'KABUPATEN BIREUEN', 'lat' => 5.083330, 'long' => 96.583330],
            ['id' => 1111, 'provinsi_id' => 11, 'nama' => 'KABUPATEN ACEH UTARA', 'alt_nama' => 'KABUPATEN ACEH UTARA', 'lat' => 4.970000, 'long' => 97.140000],
            ['id' => 1112, 'provinsi_id' => 11, 'nama' => 'KABUPATEN ACEH BARAT DAYA', 'alt_nama' => 'KABUPATEN ACEH BARAT DAYA', 'lat' => 3.833330, 'long' => 96.883330],
            ['id' => 1113, 'provinsi_id' => 11, 'nama' => 'KABUPATEN GAYO LUES', 'alt_nama' => 'KABUPATEN GAYO LUES', 'lat' => 3.950000, 'long' => 97.390000],
            ['id' => 1114, 'provinsi_id' => 11, 'nama' => 'KABUPATEN ACEH TAMIANG', 'alt_nama' => 'KABUPATEN ACEH TAMIANG', 'lat' => 4.250000, 'long' => 97.966670],
            ['id' => 1115, 'provinsi_id' => 11, 'nama' => 'KABUPATEN NAGAN RAYA', 'alt_nama' => 'KABUPATEN NAGAN RAYA', 'lat' => 4.166670, 'long' => 96.516670],
            ['id' => 1116, 'provinsi_id' => 11, 'nama' => 'KABUPATEN ACEH JAYA', 'alt_nama' => 'KABUPATEN ACEH JAYA', 'lat' => 4.860000, 'long' => 95.640000],
            ['id' => 1117, 'provinsi_id' => 11, 'nama' => 'KABUPATEN BENER MERIAH', 'alt_nama' => 'KABUPATEN BENER MERIAH', 'lat' => 4.730150, 'long' => 96.861560],
            ['id' => 1118, 'provinsi_id' => 11, 'nama' => 'KABUPATEN PIDIE JAYA', 'alt_nama' => 'KABUPATEN PIDIE JAYA', 'lat' => 5.150000, 'long' => 96.216670],
            ['id' => 1171, 'provinsi_id' => 11, 'nama' => 'KOTA BANDA ACEH', 'alt_nama' => 'KOTA BANDA ACEH', 'lat' => 5.541670, 'long' => 95.333330],
            ['id' => 1172, 'provinsi_id' => 11, 'nama' => 'KOTA SABANG', 'alt_nama' => 'KOTA SABANG', 'lat' => 5.821640, 'long' => 95.310860],
            ['id' => 1173, 'provinsi_id' => 11, 'nama' => 'KOTA LANGSA', 'alt_nama' => 'KOTA LANGSA', 'lat' => 4.470000, 'long' => 97.930000],
            ['id' => 1174, 'provinsi_id' => 11, 'nama' => 'KOTA LHOKSEUMAWE', 'alt_nama' => 'KOTA LHOKSEUMAWE', 'lat' => 5.133330, 'long' => 97.066670],
            ['id' => 1175, 'provinsi_id' => 11, 'nama' => 'KOTA SUBULUSSALAM', 'alt_nama' => 'KOTA SUBULUSSALAM', 'lat' => 2.750000, 'long' => 97.933330],


            ['id' => 1201, 'provinsi_id' => 12, 'nama' => 'KABUPATEN NIAS', 'alt_nama' => 'KABUPATEN NIAS', 'lat' => 1.033330, 'long' => 97.766670],
            ['id' => 1202, 'provinsi_id' => 12, 'nama' => 'KABUPATEN MANDAILING NATAL', 'alt_nama' => 'KABUPATEN MANDAILING NATAL', 'lat' => 0.783780, 'long' => 99.254950],
            ['id' => 1203, 'provinsi_id' => 12, 'nama' => 'KABUPATEN TAPANULI SELATAN', 'alt_nama' =>  'KABUPATEN TAPANULI SELATAN', 'lat' => 1.516670, 'long' => 99.250000],
            ['id' => 1204, 'provinsi_id' => 12, 'nama' => 'KABUPATEN TAPANULI TENGAH', 'alt_nama' => 'KABUPATEN TAPANULI TENGAH', 'lat' => 1.900000, 'long' => 98.666670],
            ['id' => 1205, 'provinsi_id' => 12, 'nama' => 'KABUPATEN TAPANULI UTARA', 'alt_nama' => 'KABUPATEN TAPANULI UTARA', 'lat' => 2.002800, 'long' => 99.070700],
            ['id' => 1206, 'provinsi_id' => 12, 'nama' => 'KABUPATEN TOBA SAMOSIR', 'alt_nama' => 'KABUPATEN TOBA SAMOSIR', 'lat' => 2.397930, 'long' => 99.216780],
            ['id' => 1207, 'provinsi_id' => 12, 'nama' => 'KABUPATEN LABUHAN BATU', 'alt_nama' => 'KABUPATEN LABUHAN BATU', 'lat' => 2.266670, 'long' => 100.100000],
            ['id' => 1208, 'provinsi_id' => 12, 'nama' => 'KABUPATEN ASAHAN', 'alt_nama' => 'KABUPATEN ASAHAN', 'lat' => 2.783330, 'long' => 99.550000],
            ['id' => 1209, 'provinsi_id' => 12, 'nama' => 'KABUPATEN SIMALUNGUN', 'alt_nama' => 'KABUPATEN SIMALUNGUN', 'lat' => 2.900000, 'long' => 99.000000],
            ['id' => 1210, 'provinsi_id' => 12, 'nama' => 'KABUPATEN DAIRI', 'alt_nama' => 'KABUPATEN DAIRI', 'lat' => 2.866670, 'long' => 98.233330],
            ['id' => 1211, 'provinsi_id' => 12, 'nama' => 'KABUPATEN KARO', 'alt_nama' =>  'KABUPATEN KARO', 'lat' => 3.116670, 'long' => 98.300000],
            ['id' => 1212, 'provinsi_id' => 12, 'nama' => 'KABUPATEN DELI SERDANG', 'alt_nama' =>  'KABUPATEN DELI SERDANG', 'lat' => 3.416670, 'long' => 98.666670],
            ['id' => 1213, 'provinsi_id' => 12, 'nama' => 'KABUPATEN LANGKAT', 'alt_nama' =>  'KABUPATEN LANGKAT', 'lat' => 3.716670, 'long' => 98.216670],
            ['id' => 1214, 'provinsi_id' => 12, 'nama' => 'KABUPATEN NIAS SELATAN', 'alt_nama' => 'KABUPATEN NIAS SELATAN', 'lat' => 0.770000, 'long' => 97.750000],
            ['id' => 1215, 'provinsi_id' => 12, 'nama' => 'KABUPATEN HUMBANG HASUNDUTAN', 'alt_nama' => 'KABUPATEN HUMBANG HASUNDUTAN', 'lat' => 2.265510, 'long' => 98.503760],
            ['id' => 1216, 'provinsi_id' => 12, 'nama' => 'KABUPATEN PAKPAK BHARAT', 'alt_nama' =>  'KABUPATEN PAKPAK BHARAT', 'lat' => 2.566670, 'long' => 98.283330],
            ['id' => 1217, 'provinsi_id' => 12, 'nama' => 'KABUPATEN SAMOSIR', 'alt_nama' =>  'KABUPATEN SAMOSIR', 'lat' => 2.640250, 'long' => 98.715250],
            ['id' => 1218, 'provinsi_id' => 12, 'nama' => 'KABUPATEN SERDANG BEDAGAI', 'alt_nama' =>  'KABUPATEN SERDANG BEDAGAI', 'lat' => 3.366670, 'long' => 99.033330],
            ['id' => 1219, 'provinsi_id' => 12, 'nama' => 'KABUPATEN BATU BARA', 'alt_nama' =>  'KABUPATEN BATU BARA', 'lat' => 3.161660, 'long' => 99.526520],
            ['id' => 1220, 'provinsi_id' => 12, 'nama' => 'KABUPATEN PADANG LAWAS UTARA', 'alt_nama' =>  'KABUPATEN PADANG LAWAS UTARA', 'lat' => 1.460110, 'long' => 99.673460],
            ['id' => 1221, 'provinsi_id' => 12, 'nama' => 'KABUPATEN PADANG LAWAS', 'alt_nama' =>  'KABUPATEN PADANG LAWAS', 'lat' => 1.446840, 'long' => 99.992070],
            ['id' => 1222, 'provinsi_id' => 12, 'nama' => 'KABUPATEN LABUHAN BATU SELATAN', 'alt_nama' =>  'KABUPATEN LABUHAN BATU SELATAN', 'lat' => 1.983000, 'long' => 100.097600],
            ['id' => 1223, 'provinsi_id' => 12, 'nama' => 'KABUPATEN LABUHAN BATU UTARA', 'alt_nama' =>  'KABUPATEN LABUHAN BATU UTARA', 'lat' => 2.333490, 'long' => 99.637760],
            ['id' => 1224, 'provinsi_id' => 12, 'nama' => 'KABUPATEN NIAS UTARA', 'alt_nama' =>  'KABUPATEN NIAS UTARA', 'lat' => 1.330370, 'long' => 97.319640],
            ['id' => 1225, 'provinsi_id' => 12, 'nama' => 'KABUPATEN NIAS BARAT', 'alt_nama' =>  'KABUPATEN NIAS BARAT', 'lat' => 1.059660, 'long' => 97.586060],
            ['id' => 1271, 'provinsi_id' => 12, 'nama' => 'KOTA SIBOLGA', 'alt_nama' =>  'KOTA SIBOLGA', 'lat' => 1.733330, 'long' => 98.800000],
            ['id' => 1272, 'provinsi_id' => 12, 'nama' => 'KOTA TANJUNG BALAI', 'alt_nama' => 'KOTA TANJUNG BALAI', 'lat' => 2.958330, 'long' => 99.791670],
            ['id' => 1273, 'provinsi_id' => 12, 'nama' => 'KOTA PEMATANG SIANTAR', 'alt_nama' =>  'KOTA PEMATANG SIANTAR', 'lat' => 2.966670, 'long' => 99.050000],
            ['id' => 1274, 'provinsi_id' => 12, 'nama' => 'KOTA TEBING TINGGI', 'alt_nama' => 'KOTA TEBING TINGGI', 'lat' => 3.325000, 'long' => 99.141670],
            ['id' => 1275, 'provinsi_id' => 12, 'nama' => 'KOTA MEDAN', 'alt_nama' =>  'KOTA MEDAN', 'lat' => 3.650000, 'long' => 98.666670],
            ['id' => 1276, 'provinsi_id' => 12, 'nama' => 'KOTA BINJAI', 'alt_nama' => 'KOTA BINJAI', 'lat' => 3.800000, 'long' => 108.233330],
            ['id' => 1277, 'provinsi_id' => 12, 'nama' => 'KOTA PADANG SIDEMPUAN', 'alt_nama' =>  'KOTA PADANG SIDEMPUAN', 'lat' => 1.373750, 'long' => 99.268430],
            ['id' => 1278, 'provinsi_id' => 12, 'nama' => 'KOTA GUNUNGSITOLI', 'alt_nama' => 'KOTA GUNUNGSITOLI', 'lat' => 1.327310, 'long' => 97.550180],

            ['id' => 1301, "provinsi_id" => 13, 'nama' => 'KABUPATEN KEPULAUAN MENTAWAI', 'alt_nama' => 'KABUPATEN KEPULAUAN MENTAWAI', 'lat' =>  1.989170, 'long' => 99.518890],
            ['id' => 1302, "provinsi_id" => 13, 'nama' => 'KABUPATEN PESISIR SELATAN', 'alt_nama' => 'KABUPATEN PESISIR SELATAN', 'lat' =>  -1.583330, 'long' => 100.850000],
            ['id' => 1303, "provinsi_id" => 13, 'nama' => 'KABUPATEN SOLOK', 'alt_nama' => 'KABUPATEN SOLOK', 'lat' =>  -0.966670, 'long' => 100.816670],
            ['id' => 1304, "provinsi_id" => 13, 'nama' => 'KABUPATEN SIJUNJUNG', 'alt_nama' => 'KABUPATEN SIJUNJUNG', 'lat' =>  -1.182700, 'long' => 101.605600],
            ['id' => 1305, "provinsi_id" => 13, 'nama' => 'KABUPATEN TANAH DATAR', 'alt_nama' => 'KABUPATEN TANAH DATAR', 'lat' =>  -0.455500, 'long' => 100.577100],
            ['id' => 1306, "provinsi_id" => 13, 'nama' => 'KABUPATEN PADANG PARIAMAN', 'alt_nama' => 'KABUPATEN PADANG PARIAMAN', 'lat' =>  -0.600000, 'long' => 100.283330],
            ['id' => 1307, "provinsi_id" => 13, 'nama' => 'KABUPATEN AGAM', 'alt_nama' => 'KABUPATEN AGAM', 'lat' =>  -0.250000, 'long' => 100.166670],
            ['id' => 1308, "provinsi_id" => 13, 'nama' => 'KABUPATEN LIMA PULUH KOTA', 'alt_nama' => 'KABUPATEN LIMA PULUH KOTA', 'lat' =>  -0.016800, 'long' => 100.587200],
            ['id' => 1309, "provinsi_id" => 13, 'nama' => 'KABUPATEN PASAMAN', 'alt_nama' => 'KABUPATEN PASAMAN', 'lat' =>  0.425030, 'long' => 99.946060],
            ['id' => 1310, "provinsi_id" => 13, 'nama' => 'KABUPATEN SOLOK SELATAN', 'alt_nama' => 'KABUPATEN SOLOK SELATAN', 'lat' =>  -1.233330, 'long' => 101.417000],
            ['id' => 1311, "provinsi_id" => 13, 'nama' => 'KABUPATEN DHARMASRAYA', 'alt_nama' => 'KABUPATEN DHARMASRAYA', 'lat' =>  -1.050000, 'long' => 101.367000],
            ['id' => 1312, "provinsi_id" => 13, 'nama' => 'KABUPATEN PASAMAN BARAT', 'alt_nama' => 'KABUPATEN PASAMAN BARAT', 'lat' =>  0.281520, 'long' => 99.519650],
            ['id' => 1371, "provinsi_id" => 13, 'nama' => 'KOTA PADANG', 'alt_nama' => 'KOTA PADANG', 'lat' =>  -0.983330, 'long' => 100.450000],
            ['id' => 1372, "provinsi_id" => 13, 'nama' => 'KOTA SOLOK', 'alt_nama' => 'KOTA SOLOK', 'lat' =>  -0.766670, 'long' => 100.616670],
            ['id' => 1373, "provinsi_id" => 13, 'nama' => 'KOTA SAWAH LUNTO', 'alt_nama' => 'KOTA SAWAH LUNTO', 'lat' =>  -0.600000, 'long' => 100.750000],
            ['id' => 1374, "provinsi_id" => 13, 'nama' => 'KOTA PADANG PANJANG', 'alt_nama' => 'KOTA PADANG PANJANG', 'lat' =>  -0.450000, 'long' => 100.433330],
            ['id' => 1375, "provinsi_id" => 13, 'nama' => 'KOTA BUKITTINGGI', 'alt_nama' => 'KOTA BUKITTINGGI', 'lat' =>  -0.275000, 'long' => 100.375000],
            ['id' => 1376, "provinsi_id" => 13, 'nama' => 'KOTA PAYAKUMBUH', 'alt_nama' => 'KOTA PAYAKUMBUH', 'lat' =>  -0.233330, 'long' => 100.633330],
            ['id' => 1377, "provinsi_id" => 13, 'nama' => 'KOTA PARIAMAN', 'alt_nama' => 'KOTA PARIAMAN', 'lat' => -0.626820, 'long' => 100.120470],

            ['id' => 1401, "provinsi_id" => 14, 'nama' => 'KABUPATEN KUANTAN SINGINGI', 'alt_nama' => 'KABUPATEN KUANTAN SINGINGI', 'lat' => -0.475320, 'long' => 101.458570],
            ['id' => 1402, "provinsi_id" => 14, 'nama' => 'KABUPATEN INDRAGIRI HULU', 'alt_nama' => 'KABUPATEN INDRAGIRI HULU', 'lat' => -0.550000, 'long' => 102.316670],
            ['id' => 1403, "provinsi_id" => 14, 'nama' => 'KABUPATEN INDRAGIRI HILIR', 'alt_nama' => 'KABUPATEN INDRAGIRI HILIR', 'lat' => -0.333330, 'long' => 103.166670],
            ['id' => 1404, "provinsi_id" => 14, 'nama' => 'KABUPATEN PELALAWAN', 'alt_nama' => 'KABUPATEN PELALAWAN', 'lat' => 0.208220, 'long' => 102.186070],
            ['id' => 1405, "provinsi_id" => 14, 'nama' => 'KABUPATEN SIAK', 'alt_nama' => 'KABUPATEN SIAK', 'lat' => 0.974530, 'long' => 102.013550],
            ['id' => 1406, "provinsi_id" => 14, 'nama' => 'KABUPATEN KAMPAR', 'alt_nama' => 'KABUPATEN KAMPAR', 'lat' => 0.234400, 'long' => 101.213100],
            ['id' => 1407, "provinsi_id" => 14, 'nama' => 'KABUPATEN ROKAN HULU', 'alt_nama' => 'KABUPATEN ROKAN HULU', 'lat' => 0.883330, 'long' => 100.483330],
            ['id' => 1408, "provinsi_id" => 14, 'nama' => 'KABUPATEN BENGKALIS', 'alt_nama' => 'KABUPATEN BENGKALIS', 'lat' => 0.983800, 'long' => 102.509600],
            ['id' => 1409, "provinsi_id" => 14, 'nama' => 'KABUPATEN ROKAN HILIR', 'alt_nama' => 'KABUPATEN ROKAN HILIR', 'lat' => 2.165990, 'long' => 100.825140],
            ['id' => 1410, "provinsi_id" => 14, 'nama' => 'KABUPATEN KEPULAUAN MERANTI', 'alt_nama' => 'KABUPATEN KEPULAUAN MERANTI', 'lat' => 0.974880, 'long' => 102.695390],
            ['id' => 1471, "provinsi_id" => 14, 'nama' => 'KOTA PEKANBARU', 'alt_nama' => 'KOTA PEKANBARU', 'lat' => 0.533330, 'long' => 101.466670],
            ['id' => 1473, "provinsi_id" => 14, 'nama' => 'KOTA DUMAI', 'alt_nama' => 'KOTA DUMAI', 'lat' => 1.615920, 'long' => 101.491700],

            ["id" => 1501, "provinsi_id" => 15, 'nama' => 'KABUPATEN KERINCI', 'alt_nama' => 'KABUPATEN KERINCI', 'lat' => -2.033330, 'long' => 101.533330],
            ["id" => 1502, "provinsi_id" => 15, 'nama' => 'KABUPATEN MERANGIN', 'alt_nama' => 'KABUPATEN MERANGIN', 'lat' => -2.069330, 'long' => 102.133030],
            ["id" => 1503, "provinsi_id" => 15, 'nama' => 'KABUPATEN SAROLANGUN', 'alt_nama' => 'KABUPATEN SAROLANGUN', 'lat' => -2.300000, 'long' => 102.650000],
            ["id" => 1504, "provinsi_id" => 15, 'nama' => 'KABUPATEN BATANG HARI', 'alt_nama' => 'KABUPATEN BATANG HARI', 'lat' => -1.750000, 'long' => 103.116670],
            ["id" => 1505, "provinsi_id" => 15, 'nama' => 'KABUPATEN MUARO JAMBI', 'alt_nama' => 'KABUPATEN MUARO JAMBI', 'lat' => -1.552140, 'long' => 103.821630],
            ["id" => 1506, "provinsi_id" => 15, 'nama' => 'KABUPATEN TANJUNG JABUNG TIMUR', 'alt_nama' => 'KABUPATEN TANJUNG JABUNG TIMUR', 'lat' => -1.131980, 'long' => 103.617550],
            ["id" => 1507, "provinsi_id" => 15, 'nama' => 'KABUPATEN TANJUNG JABUNG BARAT', 'alt_nama' => 'KABUPATEN TANJUNG JABUNG BARAT', 'lat' => -1.154400, 'long' => 103.244020],
            ["id" => 1508, "provinsi_id" => 15, 'nama' => 'KABUPATEN TEBO', 'alt_nama' => 'KABUPATEN TEBO', 'lat' => -1.455760, 'long' => 102.374730],
            ["id" => 1509, "provinsi_id" => 15, 'nama' => 'KABUPATEN BUNGO', 'alt_nama' => 'KABUPATEN BUNGO', 'lat' => -1.502220, 'long' => 101.960000],
            ["id" => 1571, "provinsi_id" => 15, 'nama' => 'KOTA JAMBI', 'alt_nama' => 'KOTA JAMBI', 'lat' => -1.616670, 'long' => 103.650000],
            ["id" => 1572, "provinsi_id" => 15, 'nama' => 'KOTA SUNGAI PENUH', 'alt_nama' => 'KOTA SUNGAI PENUH', 'lat' => -2.108960, 'long' => 101.321750],

            ['id' => 1601, 'provinsi_id' => 16, 'nama' => 'KABUPATEN OGAN KOMERING ULU', 'alt_nama' => 'KABUPATEN OGAN KOMERING ULU', 'lat' => -4.133330, 'long' => 104.033330],
            ['id' => 1602, 'provinsi_id' => 16, 'nama' => 'KABUPATEN OGAN KOMERING ILIR', 'alt_nama' => 'KABUPATEN OGAN KOMERING ILIR', 'lat' => -3.366670, 'long' => 105.366670],
            ['id' => 1603, 'provinsi_id' => 16, 'nama' => 'KABUPATEN MUARA ENIM', 'alt_nama' => 'KABUPATEN MUARA ENIM', 'lat' => -4.232700, 'long' => 103.614100],
            ['id' => 1604, 'provinsi_id' => 16, 'nama' => 'KABUPATEN LAHAT', 'alt_nama' => 'KABUPATEN LAHAT', 'lat' => -3.786400, 'long' => 103.542800],
            ['id' => 1605, 'provinsi_id' => 16, 'nama' => 'KABUPATEN MUSI RAWAS', 'alt_nama' => 'KABUPATEN MUSI RAWAS', 'lat' => -3.083330, 'long' => 103.200000],
            ['id' => 1606, 'provinsi_id' => 16, 'nama' => 'KABUPATEN MUSI BANYU ASIN', 'alt_nama' => 'KABUPATEN MUSI BANYU ASIN', 'lat' => -2.416670, 'long' => 103.750000],
            ['id' => 1607, 'provinsi_id' => 16, 'nama' => 'KABUPATEN BANYU ASIN', 'alt_nama' => 'KABUPATEN BANYU ASIN', 'lat' => -2.883330, 'long' => 104.383060],
            ['id' => 1608, 'provinsi_id' => 16, 'nama' => 'KABUPATEN OGAN KOMERING ULU SELATAN', 'alt_nama' => 'KABUPATEN OGAN KOMERING ULU SELATAN', 'lat' => -4.657280, 'long' => 104.006590],
            ['id' => 1609, 'provinsi_id' => 16, 'nama' => 'KABUPATEN OGAN KOMERING ULU TIMUR', 'alt_nama' => 'KABUPATEN OGAN KOMERING ULU TIMUR', 'lat' => -3.856790, 'long' => 104.752090],
            ['id' => 1610, 'provinsi_id' => 16, 'nama' => 'KABUPATEN OGAN ILIR', 'alt_nama' => 'KABUPATEN OGAN ILIR', 'lat' => -3.431860, 'long' => 104.627270],
            ['id' => 1611, 'provinsi_id' => 16, 'nama' => 'KABUPATEN EMPAT LAWANG', 'alt_nama' => 'KABUPATEN EMPAT LAWANG', 'lat' => 3.226670, 'long' => 99.092560],
            ['id' => 1612, 'provinsi_id' => 16, 'nama' => 'KABUPATEN PENUKAL ABAB LEMATANG ILIR', 'alt_nama' => 'KABUPATEN PENUKAL ABAB LEMATANG ILIR', 'lat' => -3.213420, 'long' => 104.087220],
            ['id' => 1613, 'provinsi_id' => 16, 'nama' => 'KABUPATEN MUSI RAWAS UTARA', 'alt_nama' => 'KABUPATEN MUSI RAWAS UTARA', 'lat' => -2.485330, 'long' => 103.293460],
            ['id' => 1671, 'provinsi_id' => 16, 'nama' => 'KOTA PALEMBANG', 'alt_nama' => 'KOTA PALEMBANG', 'lat' => -3.000000, 'long' => 104.716670],
            ['id' => 1672, 'provinsi_id' => 16, 'nama' => 'KOTA PRABUMULIH', 'alt_nama' => 'KOTA PRABUMULIH', 'lat' => -3.462020, 'long' => 104.222900],
            ['id' => 1673, 'provinsi_id' => 16, 'nama' => 'KOTA PAGAR ALAM', 'alt_nama' => 'KOTA PAGAR ALAM', 'lat' => -4.130550, 'long' => 103.268220],
            ['id' => 1674, 'provinsi_id' => 16, 'nama' => 'KOTA LUBUK LINGGAU', 'alt_nama' => 'KOTA LUBUK LINGGAU', 'lat' => -3.293080, 'long' => 102.855030],
            ['id' => 1701, 'provinsi_id' => 17, 'nama' => 'KABUPATEN BENGKULU SELATAN', 'alt_nama' => 'KABUPATEN BENGKULU SELATAN', 'lat' => -4.350000, 'long' => 103.033330],

            ['id' => 1702, 'provinsi_id' => 17, 'nama' => 'KABUPATEN REJANG LEBONG', 'alt_nama' => 'KABUPATEN REJANG LEBONG', 'lat' => -3.433330, 'long' => 102.716670],

            ['id' => 1703, 'provinsi_id' => 17, 'nama' => 'KABUPATEN BENGKULU UTARA', 'alt_nama' => 'KABUPATEN BENGKULU UTARA', 'lat' => -3.333330, 'long' => 102.050000],

            ['id' => 1704, 'provinsi_id' => 17, 'nama' => 'KABUPATEN KAUR', 'alt_nama' => 'KABUPATEN KAUR', 'lat' => -4.781790, 'long' => 103.361090],

            ['id' => 1705, 'provinsi_id' => 17, 'nama' => 'KABUPATEN SELUMA', 'alt_nama' => 'KABUPATEN SELUMA', 'lat' => -3.966440, 'long' => 102.474290],

            ['id' => 1706, 'provinsi_id' => 17, 'nama' => 'KABUPATEN MUKOMUKO', 'alt_nama' => 'KABUPATEN MUKOMUKO', 'lat' => -3.074380, 'long' => 101.547660],

            ['id' => 1707, 'provinsi_id' => 17, 'nama' => 'KABUPATEN LEBONG', 'alt_nama' => 'KABUPATEN LEBONG', 'lat' => -3.242780, 'long' => 102.334900],

            ['id' => 1708, 'provinsi_id' => 17, 'nama' => 'KABUPATEN KEPAHIANG', 'alt_nama' => 'KABUPATEN KEPAHIANG', 'lat' => -3.601940, 'long' => 102.564240],

            ['id' => 1709, 'provinsi_id' => 17, 'nama' => 'KABUPATEN BENGKULU TENGAH', 'alt_nama' => 'KABUPATEN BENGKULU TENGAH', 'lat' => -3.206790, 'long' => 102.126160],

            ['id' => 1771, 'provinsi_id' => 17, 'nama' => 'KOTA BENGKULU', 'alt_nama' => 'KOTA BENGKULU', 'lat' => -3.816670, 'long' => 102.316670],

            ['id' => 1801, 'provinsi_id' => 18, 'nama' => 'KABUPATEN LAMPUNG BARAT', 'alt_nama' => 'KABUPATEN LAMPUNG BARAT', 'lat' => -5.149040, 'long' => 104.193090],

            ['id' => 1802, 'provinsi_id' => 18, 'nama' => 'KABUPATEN TANGGAMUS', 'alt_nama' => 'KABUPATEN TANGGAMUS', 'lat' => -5.385080, 'long' => 104.623490],

            ['id' => 1803, 'provinsi_id' => 18, 'nama' => 'KABUPATEN LAMPUNG SELATAN', 'alt_nama' => 'KABUPATEN LAMPUNG SELATAN', 'lat' => -5.453100, 'long' => 104.987700],

            ['id' => 1804, 'provinsi_id' => 18, 'nama' => 'KABUPATEN LAMPUNG TIMUR', 'alt_nama' => 'KABUPATEN LAMPUNG TIMUR', 'lat' => -5.102730, 'long' => 105.680030],

            ['id' => 1805, 'provinsi_id' => 18, 'nama' => 'KABUPATEN LAMPUNG TENGAH', 'alt_nama' => 'KABUPATEN LAMPUNG TENGAH', 'lat' => -4.866670, 'long' => 105.266670],

            ['id' => 1806, 'provinsi_id' => 18, 'nama' => 'KABUPATEN LAMPUNG UTARA', 'alt_nama' => 'KABUPATEN LAMPUNG UTARA', 'lat' => -4.816670, 'long' => 104.800000],

            ['id' => 1807, 'provinsi_id' => 18, 'nama' => 'KABUPATEN WAY KANAN', 'alt_nama' => 'KABUPATEN WAY KANAN', 'lat' => -4.447050, 'long' => 104.527530],

            ['id' => 1808, 'provinsi_id' => 18, 'nama' => 'KABUPATEN TULANGBAWANG', 'alt_nama' => 'KABUPATEN TULANGBAWANG', 'lat' => -4.206040, 'long' => 105.579990],

            ['id' => 1809, 'provinsi_id' => 18, 'nama' => 'KABUPATEN PESAWARAN', 'alt_nama' => 'KABUPATEN PESAWARAN', 'lat' => -5.429800, 'long' => 105.178990],

            ['id' => 1810, 'provinsi_id' => 18, 'nama' => 'KABUPATEN PRINGSEWU', 'alt_nama' => 'KABUPATEN PRINGSEWU', 'lat' => -5.422110, 'long' => 104.934540],

            ['id' => 1811, 'provinsi_id' => 18, 'nama' => 'KABUPATEN MESUJI', 'alt_nama' => 'KABUPATEN MESUJI', 'lat' => -4.043900, 'long' => 105.401300],

            ['id' => 1812, 'provinsi_id' => 18, 'nama' => 'KABUPATEN TULANG BAWANG BARAT', 'alt_nama' => 'KABUPATEN TULANG BAWANG BARAT', 'lat' => -4.439750, 'long' => 105.044400],

            ['id' => 1813, 'provinsi_id' => 18, 'nama' => 'KABUPATEN PESISIR BARAT', 'alt_nama' => 'KABUPATEN PESISIR BARAT', 'lat' => -5.193230, 'long' => 103.939760],

            ['id' => 1871, 'provinsi_id' => 18, 'nama' => 'KOTA BANDAR LAMPUNG', 'alt_nama' => 'KOTA BANDAR LAMPUNG', 'lat' => -5.416670, 'long' => 105.250000],

            ['id' => 1872, 'provinsi_id' => 18, 'nama' => 'KOTA METRO', 'alt_nama' => 'KOTA METRO', 'lat' => -5.118560, 'long' => 105.299490],
            ['id' => 1901, 'provinsi_id' => 19, 'nama' => 'KABUPATEN BANGKA', 'alt_nama' => 'KABUPATEN BANGKA', 'lat' => -1.916670, 'long' => 105.933330],

            ['id' => 1902, 'provinsi_id' => 19, 'nama' => 'KABUPATEN BELITUNG', 'alt_nama' => 'KABUPATEN BELITUNG', 'lat' => -2.866670, 'long' => 107.700000],

            ['id' => 1903, 'provinsi_id' => 19, 'nama' => 'KABUPATEN BANGKA BARAT', 'alt_nama' => 'KABUPATEN BANGKA BARAT', 'lat' => -1.958390, 'long' => 105.537410],

            ['id' => 1904, 'provinsi_id' => 19, 'nama' => 'KABUPATEN BANGKA TENGAH', 'alt_nama' => 'KABUPATEN BANGKA TENGAH', 'lat' => -2.339890, 'long' => 106.114200],

            ['id' => 1905, 'provinsi_id' => 19, 'nama' => 'KABUPATEN BANGKA SELATAN', 'alt_nama' => 'KABUPATEN BANGKA SELATAN', 'lat' => -2.668030, 'long' => 106.012570],

            ['id' => 1906, 'provinsi_id' => 19, 'nama' => 'KABUPATEN BELITUNG TIMUR', 'alt_nama' => 'KABUPATEN BELITUNG TIMUR', 'lat' => -2.962700, 'long' => 108.152160],

            ['id' => 1971, 'provinsi_id' => 19, 'nama' => 'KOTA PANGKAL PINANG', 'alt_nama' => 'KOTA PANGKAL PINANG', 'lat' => -2.133330, 'long' => 106.133330],


            // Kepri

            ['id' => 2101, 'provinsi_id' => 21, 'nama' => 'KABUPATEN KARIMUN', 'alt_nama' => 'KABUPATEN KARIMUN', 'lat' => 0.807640, 'long' => 103.419110],

            ['id' => 2102, 'provinsi_id' => 21, 'nama' => 'KABUPATEN BINTAN', 'alt_nama' => 'KABUPATEN BINTAN', 'lat' => 0.950000, 'long' => 104.619440],

            ['id' => 2103, 'provinsi_id' => 21, 'nama' => 'KABUPATEN NATUNA', 'alt_nama' => 'KABUPATEN NATUNA', 'lat' => 4.714170, 'long' => 107.976390],

            ['id' => 2104, 'provinsi_id' => 21, 'nama' => 'KABUPATEN LINGGA', 'alt_nama' => 'KABUPATEN LINGGA', 'lat' => 0.200000, 'long' => 104.616670],

            ['id' => 2105, 'provinsi_id' => 21, 'nama' => 'KABUPATEN KEPULAUAN ANAMBAS', 'alt_nama' => 'KABUPATEN KEPULAUAN ANAMBAS', 'lat' => 3.000000, 'long' => 106.000000],

            ['id' => 2171, 'provinsi_id' => 21, 'nama' => 'KOTA BATAM', 'alt_nama' => 'KOTA BATAM', 'lat' => 1.052110, 'long' => 104.028510],

            ['id' => 2172, 'provinsi_id' => 21, 'nama' => 'KOTA TANJUNG PINANG', 'alt_nama' => 'KOTA TANJUNG PINANG', 'lat' => 0.916830, 'long' => 104.443290],


            // DKI Jakarta

            ['id' => 3101, 'provinsi_id' => 31, 'nama' => 'KABUPATEN KEPULAUAN SERIBU', 'alt_nama' => 'KABUPATEN KEPULAUAN SERIBU', 'lat' => -5.598500, 'long' => 106.552710],

            ['id' => 3171, 'provinsi_id' => 31, 'nama' => 'KOTA JAKARTA SELATAN', 'alt_nama' => 'KOTA JAKARTA SELATAN', 'lat' => -6.266000, 'long' => 106.813500],

            ['id' => 3172, 'provinsi_id' => 31, 'nama' => 'KOTA JAKARTA TIMUR', 'alt_nama' => 'KOTA JAKARTA TIMUR', 'lat' => -6.252100, 'long' => 106.884000],

            ['id' => 3173, 'provinsi_id' => 31, 'nama' => 'KOTA JAKARTA PUSAT', 'alt_nama' => 'KOTA JAKARTA PUSAT', 'lat' => -6.177700, 'long' => 106.840300],

            ['id' => 3174, 'provinsi_id' => 31, 'nama' => 'KOTA JAKARTA BARAT', 'alt_nama' => 'KOTA JAKARTA BARAT', 'lat' => -6.167600, 'long' => 106.767300],

            ['id' => 3175, 'provinsi_id' => 31, 'nama' => 'KOTA JAKARTA UTARA', 'alt_nama' => 'KOTA JAKARTA UTARA', 'lat' => -6.133900, 'long' => 106.882300],

            ['id' => 3201, 'provinsi_id' => 32, 'nama' => 'KABUPATEN BOGOR', 'alt_nama' => 'KABUPATEN BOGOR', 'lat' => -6.583330, 'long' => 106.716670],

            ['id' => 3202, 'provinsi_id' => 32, 'nama' => 'KABUPATEN SUKABUMI', 'alt_nama' => 'KABUPATEN SUKABUMI', 'lat' => -7.066670, 'long' => 106.700000],

            ['id' => 3203, 'provinsi_id' => 32, 'nama' => 'KABUPATEN CIANJUR', 'alt_nama' => 'KABUPATEN CIANJUR', 'lat' => -6.772500, 'long' => 107.083060],

            ['id' => 3204, 'provinsi_id' => 32, 'nama' => 'KABUPATEN BANDUNG', 'alt_nama' => 'KABUPATEN BANDUNG', 'lat' => -7.100000, 'long' => 107.600000],

            ['id' => 3205, 'provinsi_id' => 32, 'nama' => 'KABUPATEN GARUT', 'alt_nama' => 'KABUPATEN GARUT', 'lat' => -7.383330, 'long' => 107.766670],

            ['id' => 3206, 'provinsi_id' => 32, 'nama' => 'KABUPATEN TASIKMALAYA', 'alt_nama' => 'KABUPATEN TASIKMALAYA', 'lat' => -7.500000, 'long' => 108.133330],

            ['id' => 3207, 'provinsi_id' => 32, 'nama' => 'KABUPATEN CIAMIS', 'alt_nama' => 'KABUPATEN CIAMIS', 'lat' => -7.283330, 'long' => 108.416670],

            ['id' => 3208, 'provinsi_id' => 32, 'nama' => 'KABUPATEN KUNINGAN', 'alt_nama' => 'KABUPATEN KUNINGAN', 'lat' => -7.000000, 'long' => 108.550000],

            ['id' => 3209, 'provinsi_id' => 32, 'nama' => 'KABUPATEN CIREBON', 'alt_nama' => 'KABUPATEN CIREBON', 'lat' => -6.800000, 'long' => 108.566670],

            ['id' => 3210, 'provinsi_id' => 32, 'nama' => 'KABUPATEN MAJALENGKA', 'alt_nama' => 'KABUPATEN MAJALENGKA', 'lat' => -6.816670, 'long' => 108.283330],

            ['id' => 3211, 'provinsi_id' => 32, 'nama' => 'KABUPATEN SUMEDANG', 'alt_nama' => 'KABUPATEN SUMEDANG', 'lat' => -6.816670, 'long' => 107.983330],

            ['id' => 3212, 'provinsi_id' => 32, 'nama' => 'KABUPATEN INDRAMAYU', 'alt_nama' => 'KABUPATEN INDRAMAYU', 'lat' => -6.450000, 'long' => 108.166670],

            ['id' => 3213, 'provinsi_id' => 32, 'nama' => 'KABUPATEN SUBANG', 'alt_nama' => 'KABUPATEN SUBANG', 'lat' => -6.508330, 'long' => 107.702500],

            ['id' => 3214, 'provinsi_id' => 32, 'nama' => 'KABUPATEN PURWAKARTA', 'alt_nama' => 'KABUPATEN PURWAKARTA', 'lat' => -6.583330, 'long' => 107.450000],

            ['id' => 3215, 'provinsi_id' => 32, 'nama' => 'KABUPATEN KARAWANG', 'alt_nama' => 'KABUPATEN KARAWANG', 'lat' => -6.266670, 'long' => 107.416670],

            ['id' => 3216, 'provinsi_id' => 32, 'nama' => 'KABUPATEN BEKASI', 'alt_nama' => 'KABUPATEN BEKASI', 'lat' => -6.246670, 'long' => 107.108330],

            ['id' => 3217, 'provinsi_id' => 32, 'nama' => 'KABUPATEN BANDUNG BARAT', 'alt_nama' => 'KABUPATEN BANDUNG BARAT', 'lat' => -6.833330, 'long' => 107.483330],

            ['id' => 3218, 'provinsi_id' => 32, 'nama' => 'KABUPATEN PANGANDARAN', 'alt_nama' => 'KABUPATEN PANGANDARAN', 'lat' => -7.667300, 'long' => 108.640370],

            // Kota

            ['id' => 3271, 'provinsi_id' => 32, 'nama' => 'KOTA BOGOR', 'alt_nama' => 'KOTA BOGOR', 'lat' => -6.591670, 'long' => 106.800000],

            ['id' => 3272, 'provinsi_id' => 32, 'nama' => 'KOTA SUKABUMI', 'alt_nama' => 'KOTA SUKABUMI', 'lat' => -6.950000, 'long' => 106.933330],

            ['id' => 3273, 'provinsi_id' => 32, 'nama' => 'KOTA BANDUNG', 'alt_nama' => 'KOTA BANDUNG', 'lat' => -6.917500, 'long' => 107.624440],

            ['id' => 3274, 'provinsi_id' => 32, 'nama' => 'KOTA CIREBON', 'alt_nama' => 'KOTA CIREBON', 'lat' => -6.750000, 'long' => 108.550000],

            ['id' => 3275, 'provinsi_id' => 32, 'nama' => 'KOTA BEKASI', 'alt_nama' => 'KOTA BEKASI', 'lat' => -6.283330, 'long' => 106.983330],

            ['id' => 3276, 'provinsi_id' => 32, 'nama' => 'KOTA DEPOK', 'alt_nama' => 'KOTA DEPOK', 'lat' => -6.400000, 'long' => 106.816670],

            ['id' => 3277, 'provinsi_id' => 32, 'nama' => 'KOTA CIMAHI', 'alt_nama' => 'KOTA CIMAHI', 'lat' => -6.891670, 'long' => 107.550000],

            ['id' => 3278, 'provinsi_id' => 32, 'nama' => 'KOTA TASIKMALAYA', 'alt_nama' => 'KOTA TASIKMALAYA', 'lat' => -7.350000, 'long' => 108.216670],

            ['id' => 3279, 'provinsi_id' => 32, 'nama' => 'KOTA BANJAR', 'alt_nama' => 'KOTA BANJAR', 'lat' => -7.369960, 'long' => 108.532090],

            ['id' => 3301, 'provinsi_id' => 33, 'nama' => 'KABUPATEN CILACAP', 'alt_nama' => 'KABUPATEN CILACAP', 'lat' => -7.574170, 'long' => 108.988610],

            ['id' => 3302, 'provinsi_id' => 33, 'nama' => 'KABUPATEN BANYUMAS', 'alt_nama' => 'KABUPATEN BANYUMAS', 'lat' => -7.450000, 'long' => 109.166670],

            ['id' => 3303, 'provinsi_id' => 33, 'nama' => 'KABUPATEN PURBALINGGA', 'alt_nama' => 'KABUPATEN PURBALINGGA', 'lat' => -7.284170, 'long' => 109.350280],

            ['id' => 3304, 'provinsi_id' => 33, 'nama' => 'KABUPATEN BANJARNEGARA', 'alt_nama' => 'KABUPATEN BANJARNEGARA', 'lat' => -7.351110, 'long' => 109.587500],

            ['id' => 3305, 'provinsi_id' => 33, 'nama' => 'KABUPATEN KEBUMEN', 'alt_nama' => 'KABUPATEN KEBUMEN', 'lat' => -7.639170, 'long' => 109.660560],

            ['id' => 3306, 'provinsi_id' => 33, 'nama' => 'KABUPATEN PURWOREJO', 'alt_nama' => 'KABUPATEN PURWOREJO', 'lat' => -7.700000, 'long' => 109.966670],

            ['id' => 3307, 'provinsi_id' => 33, 'nama' => 'KABUPATEN WONOSOBO', 'alt_nama' => 'KABUPATEN WONOSOBO', 'lat' => -7.361390, 'long' => 109.926670],

            ['id' => 3308, 'provinsi_id' => 33, 'nama' => 'KABUPATEN MAGELANG', 'alt_nama' => 'KABUPATEN MAGELANG', 'lat' => -7.427500, 'long' => 110.161940],

            ['id' => 3309, 'provinsi_id' => 33, 'nama' => 'KABUPATEN BOYOLALI', 'alt_nama' => 'KABUPATEN BOYOLALI', 'lat' => -7.500000, 'long' => 110.700000],

            ['id' => 3310, 'provinsi_id' => 33, 'nama' => 'KABUPATEN KLATEN', 'alt_nama' => 'KABUPATEN KLATEN', 'lat' => -7.683330, 'long' => 110.616670],

            ['id' => 3311, 'provinsi_id' => 33, 'nama' => 'KABUPATEN SUKOHARJO', 'alt_nama' => 'KABUPATEN SUKOHARJO', 'lat' => -7.683330, 'long' => 110.833330],

            ['id' => 3312, 'provinsi_id' => 33, 'nama' => 'KABUPATEN WONOGIRI', 'alt_nama' => 'KABUPATEN WONOGIRI', 'lat' => -7.916670, 'long' => 111.000000],

            ['id' => 3313, 'provinsi_id' => 33, 'nama' => 'KABUPATEN KARANGANYAR', 'alt_nama' => 'KABUPATEN KARANGANYAR', 'lat' => -7.628060, 'long' => 111.062500],

            ['id' => 3314, 'provinsi_id' => 33, 'nama' => 'KABUPATEN SRAGEN', 'alt_nama' => 'KABUPATEN SRAGEN', 'lat' => -7.412780, 'long' => 110.935000],

            ['id' => 3315, 'provinsi_id' => 33, 'nama' => 'KABUPATEN GROBOGAN', 'alt_nama' => 'KABUPATEN GROBOGAN', 'lat' => -7.116670, 'long' => 110.916670],

            ['id' => 3316, 'provinsi_id' => 33, 'nama' => 'KABUPATEN BLORA', 'alt_nama' => 'KABUPATEN BLORA', 'lat' => -7.066670, 'long' => 111.383330],

            ['id' => 3317, 'provinsi_id' => 33, 'nama' => 'KABUPATEN REMBANG', 'alt_nama' => 'KABUPATEN REMBANG', 'lat' => -6.783330, 'long' => 111.466670],

            ['id' => 3318, 'provinsi_id' => 33, 'nama' => 'KABUPATEN PATI', 'alt_nama' => 'KABUPATEN PATI', 'lat' => -6.766670, 'long' => 111.100000],

            ['id' => 3319, 'provinsi_id' => 33, 'nama' => 'KABUPATEN KUDUS', 'alt_nama' => 'KABUPATEN KUDUS', 'lat' => -6.800000, 'long' => 110.866670],

            ['id' => 3320, 'provinsi_id' => 33, 'nama' => 'KABUPATEN JEPARA', 'alt_nama' => 'KABUPATEN JEPARA', 'lat' => -6.583330, 'long' => 110.766670],

            ['id' => 3321, 'provinsi_id' => 33, 'nama' => 'KABUPATEN DEMAK', 'alt_nama' => 'KABUPATEN DEMAK', 'lat' => -6.899300, 'long' => 110.612200],

            ['id' => 3322, 'provinsi_id' => 33, 'nama' => 'KABUPATEN SEMARANG', 'alt_nama' => 'KABUPATEN SEMARANG', 'lat' => -7.206670, 'long' => 110.441390],

            ['id' => 3323, 'provinsi_id' => 33, 'nama' => 'KABUPATEN TEMANGGUNG', 'alt_nama' => 'KABUPATEN TEMANGGUNG', 'lat' => -7.250000, 'long' => 110.116670],

            ['id' => 3324, 'provinsi_id' => 33, 'nama' => 'KABUPATEN KENDAL', 'alt_nama' => 'KABUPATEN KENDAL', 'lat' => -7.025600, 'long' => 110.168500],

            ['id' => 3325, 'provinsi_id' => 33, 'nama' => 'KABUPATEN BATANG', 'alt_nama' => 'KABUPATEN BATANG', 'lat' => -7.033330, 'long' => 109.883330],

            ['id' => 3326, 'provinsi_id' => 33, 'nama' => 'KABUPATEN PEKALONGAN', 'alt_nama' => 'KABUPATEN PEKALONGAN', 'lat' => -7.031900, 'long' => 109.624000],

            ['id' => 3327, 'provinsi_id' => 33, 'nama' => 'KABUPATEN PEMALANG', 'alt_nama' => 'KABUPATEN PEMALANG', 'lat' => -7.033330, 'long' => 109.400000],

            ['id' => 3328, 'provinsi_id' => 33, 'nama' => 'KABUPATEN TEGAL', 'alt_nama' => 'KABUPATEN TEGAL', 'lat' => -7.033330, 'long' => 109.166670],

            ['id' => 3329, 'provinsi_id' => 33, 'nama' => 'KABUPATEN BREBES', 'alt_nama' => 'KABUPATEN BREBES', 'lat' => -7.050000, 'long' => 108.900000],

            // Kota

            ['id' => 3371, 'provinsi_id' => 33, 'nama' => 'KOTA MAGELANG', 'alt_nama' => 'KOTA MAGELANG', 'lat' => -7.500000, 'long' => 110.225000],

            ['id' => 3372, 'provinsi_id' => 33, 'nama' => 'KOTA SURAKARTA', 'alt_nama' => 'KOTA SURAKARTA', 'lat' => -7.550000, 'long' => 110.816670],

            ['id' => 3373, 'provinsi_id' => 33, 'nama' => 'KOTA SALATIGA', 'alt_nama' => 'KOTA SALATIGA', 'lat' => -7.332780, 'long' => 110.483330],

            ['id' => 3374, 'provinsi_id' => 33, 'nama' => 'KOTA SEMARANG', 'alt_nama' => 'KOTA SEMARANG', 'lat' => -7.033330, 'long' => 110.383330],

            ['id' => 3375, 'provinsi_id' => 33, 'nama' => 'KOTA PEKALONGAN', 'alt_nama' => 'KOTA PEKALONGAN', 'lat' => -6.900000, 'long' => 109.683330],

            ['id' => 3376, 'provinsi_id' => 33, 'nama' => 'KOTA TEGAL', 'alt_nama' => 'KOTA TEGAL', 'lat' => -6.868600, 'long' => 109.112900],
            ['id' => 3401, 'provinsi_id' => 34, 'nama' => 'KABUPATEN KULON PROGO', 'alt_nama' => 'KABUPATEN KULON PROGO', 'lat' => -7.645000, 'long' => 110.026940],

            ['id' => 3402, 'provinsi_id' => 34, 'nama' => 'KABUPATEN BANTUL', 'alt_nama' => 'KABUPATEN BANTUL', 'lat' => -7.900000, 'long' => 110.366670],

            ['id' => 3403, 'provinsi_id' => 34, 'nama' => 'KABUPATEN GUNUNG KIDUL', 'alt_nama' => 'KABUPATEN GUNUNG KIDUL', 'lat' => -7.983330, 'long' => 110.616670],

            ['id' => 3404, 'provinsi_id' => 34, 'nama' => 'KABUPATEN SLEMAN', 'alt_nama' => 'KABUPATEN SLEMAN', 'lat' => -7.681670, 'long' => 110.323330],

            ['id' => 3471, 'provinsi_id' => 34, 'nama' => 'KOTA YOGYAKARTA', 'alt_nama' => 'KOTA YOGYAKARTA', 'lat' => -7.800000, 'long' => 110.375000],


            ['id' => 3501, 'provinsi_id' => 35, 'nama' => 'KABUPATEN PACITAN', 'alt_nama' => 'KABUPATEN PACITAN', 'lat' => -8.133330, 'long' => 111.166670],

            ['id' => 3502, 'provinsi_id' => 35, 'nama' => 'KABUPATEN PONOROGO', 'alt_nama' => 'KABUPATEN PONOROGO', 'lat' => -7.933330, 'long' => 111.500000],

            ['id' => 3503, 'provinsi_id' => 35, 'nama' => 'KABUPATEN TRENGGALEK', 'alt_nama' => 'KABUPATEN TRENGGALEK', 'lat' => -8.166670, 'long' => 111.616670],

            ['id' => 3504, 'provinsi_id' => 35, 'nama' => 'KABUPATEN TULUNGAGUNG', 'alt_nama' => 'KABUPATEN TULUNGAGUNG', 'lat' => -8.116670, 'long' => 111.916670],

            ['id' => 3505, 'provinsi_id' => 35, 'nama' => 'KABUPATEN BLITAR', 'alt_nama' => 'KABUPATEN BLITAR', 'lat' => -8.133330, 'long' => 112.250000],

            ['id' => 3506, 'provinsi_id' => 35, 'nama' => 'KABUPATEN KEDIRI', 'alt_nama' => 'KABUPATEN KEDIRI', 'lat' => -7.833330, 'long' => 112.166670],

            ['id' => 3507, 'provinsi_id' => 35, 'nama' => 'KABUPATEN MALANG', 'alt_nama' => 'KABUPATEN MALANG', 'lat' => -8.166670, 'long' => 112.666670],

            ['id' => 3508, 'provinsi_id' => 35, 'nama' => 'KABUPATEN LUMAJANG', 'alt_nama' => 'KABUPATEN LUMAJANG', 'lat' => -8.116670, 'long' => 113.150000],

            ['id' => 3509, 'provinsi_id' => 35, 'nama' => 'KABUPATEN JEMBER', 'alt_nama' => 'KABUPATEN JEMBER', 'lat' => -8.250000, 'long' => 113.650000],

            ['id' => 3510, 'provinsi_id' => 35, 'nama' => 'KABUPATEN BANYUWANGI', 'alt_nama' => 'KABUPATEN BANYUWANGI', 'lat' => -8.333330, 'long' => 114.200000],

            ['id' => 3511, 'provinsi_id' => 35, 'nama' => 'KABUPATEN BONDOWOSO', 'alt_nama' => 'KABUPATEN BONDOWOSO', 'lat' => -7.940400, 'long' => 113.983400],

            ['id' => 3512, 'provinsi_id' => 35, 'nama' => 'KABUPATEN SITUBONDO', 'alt_nama' => 'KABUPATEN SITUBONDO', 'lat' => -7.716670, 'long' => 114.050000],

            ['id' => 3513, 'provinsi_id' => 35, 'nama' => 'KABUPATEN PROBOLINGGO', 'alt_nama' => 'KABUPATEN PROBOLINGGO', 'lat' => -7.866670, 'long' => 113.316670],

            ['id' => 3514, 'provinsi_id' => 35, 'nama' => 'KABUPATEN PASURUAN', 'alt_nama' => 'KABUPATEN PASURUAN', 'lat' => -7.733330, 'long' => 112.833330],

            ['id' => 3515, 'provinsi_id' => 35, 'nama' => 'KABUPATEN SIDOARJO', 'alt_nama' => 'KABUPATEN SIDOARJO', 'lat' => -7.450000, 'long' => 112.700000],

            ['id' => 3516, 'provinsi_id' => 35, 'nama' => 'KABUPATEN MOJOKERTO', 'alt_nama' => 'KABUPATEN MOJOKERTO', 'lat' => -7.550000, 'long' => 112.500000],

            ['id' => 3517, 'provinsi_id' => 35, 'nama' => 'KABUPATEN JOMBANG', 'alt_nama' => 'KABUPATEN JOMBANG', 'lat' => -7.550000, 'long' => 112.250000],

            ['id' => 3518, 'provinsi_id' => 35, 'nama' => 'KABUPATEN NGANJUK', 'alt_nama' => 'KABUPATEN NGANJUK', 'lat' => -7.600000, 'long' => 111.933330],

            ['id' => 3519, 'provinsi_id' => 35, 'nama' => 'KABUPATEN MADIUN', 'alt_nama' => 'KABUPATEN MADIUN', 'lat' => -7.616670, 'long' => 111.650000],

            ['id' => 3520, 'provinsi_id' => 35, 'nama' => 'KABUPATEN MAGETAN', 'alt_nama' => 'KABUPATEN MAGETAN', 'lat' => -7.644720, 'long' => 111.359170],

            ['id' => 3521, 'provinsi_id' => 35, 'nama' => 'KABUPATEN NGAWI', 'alt_nama' => 'KABUPATEN NGAWI', 'lat' => -7.474440, 'long' => 111.334440],

            ['id' => 3522, 'provinsi_id' => 35, 'nama' => 'KABUPATEN BOJONEGORO', 'alt_nama' => 'KABUPATEN BOJONEGORO', 'lat' => -7.250000, 'long' => 111.800000],

            ['id' => 3523, 'provinsi_id' => 35, 'nama' => 'KABUPATEN TUBAN', 'alt_nama' => 'KABUPATEN TUBAN', 'lat' => -6.966670, 'long' => 111.900000],

            ['id' => 3524, 'provinsi_id' => 35, 'nama' => 'KABUPATEN LAMONGAN', 'alt_nama' => 'KABUPATEN LAMONGAN', 'lat' => -7.133330, 'long' => 112.316670],

            ['id' => 3525, 'provinsi_id' => 35, 'nama' => 'KABUPATEN GRESIK', 'alt_nama' => 'KABUPATEN GRESIK', 'lat' => -7.193300, 'long' => 112.553000],

            ['id' => 3526, 'provinsi_id' => 35, 'nama' => 'KABUPATEN BANGKALAN', 'alt_nama' => 'KABUPATEN BANGKALAN', 'lat' => -7.050000, 'long' => 112.933330],

            ['id' => 3527, 'provinsi_id' => 35, 'nama' => 'KABUPATEN SAMPANG', 'alt_nama' => 'KABUPATEN SAMPANG', 'lat' => -7.050000, 'long' => 113.250000],

            ['id' => 3528, 'provinsi_id' => 35, 'nama' => 'KABUPATEN PAMEKASAN', 'alt_nama' => 'KABUPATEN PAMEKASAN', 'lat' => -7.066670, 'long' => 113.500000],

            ['id' => 3529, 'provinsi_id' => 35, 'nama' => 'KABUP ATEN SUMENEP', 'alt_nama' => 'KABUPATEN SUMENEP', 'lat' => -7.116670, 'long' => 114.333330],

            ['id' => 3571, 'provinsi_id' => 35, 'nama' => 'KOTA KEDIRI', 'alt_nama' => 'KOTA KEDIRI', 'lat' => -7.833330, 'long' => 112.016670],

            ['id' => 3572, 'provinsi_id' => 35, 'nama' => 'KOTA BLITAR', 'alt_nama' => 'KOTA BLITAR', 'lat' => -8.100000, 'long' => 112.166670],

            ['id' => 3573, 'provinsi_id' => 35, 'nama' => 'KOTA MALANG', 'alt_nama' => 'KOTA MALANG', 'lat' => -7.975000, 'long' => 112.633330],

            ['id' => 3574, 'provinsi_id' => 35, 'nama' => 'KOTA PROBOLINGGO', 'alt_nama' => 'KOTA PROBOLINGGO', 'lat' => -7.783330, 'long' => 113.216670],

            ['id' => 3575, 'provinsi_id' => 35, 'nama' => 'KOTA PASURUAN', 'alt_nama' => 'KOTA PASURUAN', 'lat' => -7.650000, 'long' => 112.900000],

            ['id' => 3576, 'provinsi_id' => 35, 'nama' => 'KOTA MOJOKERTO', 'alt_nama' => 'KOTA MOJOKERTO', 'lat' => -7.466670, 'long' => 112.433330],

            ['id' => 3577, 'provinsi_id' => 35, 'nama' => 'KOTA MADIUN', 'alt_nama' => 'KOTA MADIUN', 'lat' => -7.633330, 'long' => 111.533330],

            ['id' => 3578, 'provinsi_id' => 35, 'nama' => 'KOTA SURABAYA', 'alt_nama' => 'KOTA SURABAYA', 'lat' => -7.266670, 'long' => 112.716670],

            ['id' => 3579, 'provinsi_id' => 35, 'nama' => 'KOTA BATU', 'alt_nama' => 'KOTA BATU', 'lat' => -7.832720, 'long' => 112.537510],

            ['id' => 3601, 'provinsi_id' => 36, 'nama' => 'KABUPATEN PANDEGLANG', 'alt_nama' => 'KABUPATEN PANDEGLANG', 'lat' => -6.633330, 'long' => 105.750000],

            ['id' => 3602, 'provinsi_id' => 36, 'nama' => 'KABUPATEN LEBAK', 'alt_nama' => 'KABUPATEN LEBAK', 'lat' => -6.650000, 'long' => 106.216670],

            ['id' => 3603, 'provinsi_id' => 36, 'nama' => 'KABUPATEN TANGERANG', 'alt_nama' => 'KABUPATEN TANGERANG', 'lat' => -6.200000, 'long' => 106.466670],

            ['id' => 3604, 'provinsi_id' => 36, 'nama' => 'KABUPATEN SERANG', 'alt_nama' => 'KABUPATEN SERANG', 'lat' => -6.150000, 'long' => 106.000000],

            // Kota

            ['id' => 3671, 'provinsi_id' => 36, 'nama' => 'KOTA TANGERANG', 'alt_nama' => 'KOTA TANGERANG', 'lat' => -6.179440, 'long' => 106.629910],

            ['id' => 3672, 'provinsi_id' => 36, 'nama' => 'KOTA CILEGON', 'alt_nama' => 'KOTA CILEGON', 'lat' => -6.016670, 'long' => 106.016670],

            ['id' => 3673, 'provinsi_id' => 36, 'nama' => 'KOTA SERANG', 'alt_nama' => 'KOTA SERANG', 'lat' => -6.125630, 'long' => 106.149990],

            ['id' => 3674, 'provinsi_id' => 36, 'nama' => 'KOTA TANGERANG SELATAN', 'alt_nama' => 'KOTA TANGERANG SELATAN', 'lat' => -6.293730, 'long' => 106.712440],

            ['id' => 5101, 'provinsi_id' => 51, 'nama' => 'KABUPATEN JEMBRANA', 'alt_nama' => 'KABUPATEN JEMBRANA', 'lat' => -8.300000, 'long' => 114.666670],

            ['id' => 5102, 'provinsi_id' => 51, 'nama' => 'KABUPATEN TABANAN', 'alt_nama' => 'KABUPATEN TABANAN', 'lat' => -8.433330, 'long' => 115.066670],

            ['id' => 5103, 'provinsi_id' => 51, 'nama' => 'KABUPATEN BADUNG', 'alt_nama' => 'KABUPATEN BADUNG', 'lat' => -8.516670, 'long' => 115.200000],

            ['id' => 5104, 'provinsi_id' => 51, 'nama' => 'KABUPATEN GIANYAR', 'alt_nama' => 'KABUPATEN GIANYAR', 'lat' => -8.466670, 'long' => 115.283330],

            ['id' => 5105, 'provinsi_id' => 51, 'nama' => 'KABUPATEN KLUNGKUNG', 'alt_nama' => 'KABUPATEN KLUNGKUNG', 'lat' => -8.550000, 'long' => 115.400000],

            ['id' => 5106, 'provinsi_id' => 51, 'nama' => 'KABUPATEN BANGLI', 'alt_nama' => 'KABUPATEN BANGLI', 'lat' => -8.283330, 'long' => 115.350000],

            ['id' => 5107, 'provinsi_id' => 51, 'nama' => 'KABUPATEN KARANG ASEM', 'alt_nama' => 'KABUPATEN KARANG ASEM', 'lat' => -8.389100, 'long' => 115.539300],

            ['id' => 5108, 'provinsi_id' => 51, 'nama' => 'KABUPATEN BULELENG', 'alt_nama' => 'KABUPATEN BULELENG', 'lat' => -8.250000, 'long' => 114.966670],

            ['id' => 5171, 'provinsi_id' => 51, 'nama' => 'KOTA DENPASAR', 'alt_nama' => 'KOTA DENPASAR', 'lat' => -8.666670, 'long' => 115.216630],


            // Nusa Tenggara Barat

            ['id' => 5201, 'provinsi_id' => 52, 'nama' => 'KABUPATEN LOMBOK BARAT', 'alt_nama' => 'KABUPATEN LOMBOK BARAT', 'lat' => -8.695830, 'long' => 116.116670],

            ['id' => 5202, 'provinsi_id' => 52, 'nama' => 'KABUPATEN LOMBOK TENGAH', 'alt_nama' => 'KABUPATEN LOMBOK TENGAH', 'lat' => -8.700000, 'long' => 116.300000],

            ['id' => 5203, 'provinsi_id' => 52, 'nama' => 'KABUPATEN LOMBOK TIMUR', 'alt_nama' => 'KABUPATEN LOMBOK TIMUR', 'lat' => -8.533330, 'long' => 116.533330],

            ['id' => 5204, 'provinsi_id' => 52, 'nama' => 'KABUPATEN SUMBAWA', 'alt_nama' => 'KABUPATEN SUMBAWA', 'lat' => -8.743900, 'long' => 117.332400],

            ['id' => 5205, 'provinsi_id' => 52, 'nama' => 'KABUPATEN DOMPU', 'alt_nama' => 'KABUPATEN DOMPU', 'lat' => -8.509400, 'long' => 118.481600],

            ['id' => 5206, 'provinsi_id' => 52, 'nama' => 'KABUPATEN BIMA', 'alt_nama' => 'KABUPATEN BIMA', 'lat' => -8.600000, 'long' => 118.616670],

            ['id' => 5207, 'provinsi_id' => 52, 'nama' => 'KABUPATEN SUMBAWA BARAT', 'alt_nama' => 'KABUPATEN SUMBAWA BARAT', 'lat' => -8.751590, 'long' => 116.921320],

            ['id' => 5208, 'provinsi_id' => 52, 'nama' => 'KABUPATEN LOMBOK UTARA', 'alt_nama' => 'KABUPATEN LOMBOK UTARA', 'lat' => -8.352140, 'long' => 116.401520],

            ['id' => 5271, 'provinsi_id' => 52, 'nama' => 'KOTA MATARAM', 'alt_nama' => 'KOTA MATARAM', 'lat' => -8.583300, 'long' => 116.116700],

            ['id' => 5272, 'provinsi_id' => 52, 'nama' => 'KOTA BIMA', 'alt_nama' => 'KOTA BIMA', 'lat' => -8.467280, 'long' => 118.752590],


            ['id' => 5301, 'provinsi_id' => 53, 'nama' => 'KABUPATEN SUMBA BARAT', 'alt_nama' => 'KABUPATEN SUMBA BARAT', 'lat' => -9.566670, 'long' => 119.450000],

            ['id' => 5302, 'provinsi_id' => 53, 'nama' => 'KABUPATEN SUMBA TIMUR', 'alt_nama' => 'KABUPATEN SUMBA TIMUR', 'lat' => -9.883330, 'long' => 120.250000],

            ['id' => 5303, 'provinsi_id' => 53, 'nama' => 'KABUPATEN KUPANG', 'alt_nama' => 'KABUPATEN KUPANG', 'lat' => -9.916670, 'long' => 123.833330],

            ['id' => 5304, 'provinsi_id' => 53, 'nama' => 'KABUPATEN TIMOR TENGAH SELATAN', 'alt_nama' => 'KABUPATEN TIMOR TENGAH SELATAN', 'lat' => -9.833330, 'long' => 124.400000],

            ['id' => 5305, 'provinsi_id' => 53, 'nama' => 'KABUPATEN TIMOR TENGAH UTARA', 'alt_nama' => 'KABUPATEN TIMOR TENGAH UTARA', 'lat' => -9.331360, 'long' => 124.519040],

            ['id' => 5306, 'provinsi_id' => 53, 'nama' => 'KABUPATEN BELU', 'alt_nama' => 'KABUPATEN BELU', 'lat' => -9.412580, 'long' => 124.950660],

            ['id' => 5307, 'provinsi_id' => 53, 'nama' => 'KABUPATEN ALOR', 'alt_nama' => 'KABUPATEN ALOR', 'lat' => -8.300000, 'long' => 124.566670],

            ['id' => 5308, 'provinsi_id' => 53, 'nama' => 'KABUPATEN LEMBATA', 'alt_nama' => 'KABUPATEN LEMBATA', 'lat' => -8.413960, 'long' => 123.552250],

            ['id' => 5309, 'provinsi_id' => 53, 'nama' => 'KABUPATEN FLORES TIMUR', 'alt_nama' => 'KABUPATEN FLORES TIMUR', 'lat' => -8.242240, 'long' => 122.968170],

            ['id' => 5310, 'provinsi_id' => 53, 'nama' => 'KABUPATEN SIKKA', 'alt_nama' => 'KABUPATEN SIKKA', 'lat' => -8.666670, 'long' => 122.366670],

            ['id' => 5311, 'provinsi_id' => 53, 'nama' => 'KABUPATEN ENDE', 'alt_nama' => 'KABUPATEN ENDE', 'lat' => -8.840560, 'long' => 121.663890],

            ['id' => 5312, 'provinsi_id' => 53, 'nama' => 'KABUPATEN NGADA', 'alt_nama' => 'KABUPATEN NGADA', 'lat' => -8.666670, 'long' => 121.000000],

            ['id' => 5313, 'provinsi_id' => 53, 'nama' => 'KABUPATEN MANGGARAI', 'alt_nama' => 'KABUPATEN MANGGARAI', 'lat' => -8.566670, 'long' => 120.416670],

            ['id' => 5314, 'provinsi_id' => 53, 'nama' => 'KABUPATEN ROTE NDAO', 'alt_nama' => 'KABUPATEN ROTE NDAO', 'lat' => -10.736170, 'long' => 123.120540],

            ['id' => 5315, 'provinsi_id' => 53, 'nama' => 'KABUPATEN MANGGARAI BARAT', 'alt_nama' => 'KABUPATEN MANGGARAI BARAT', 'lat' => -8.644840, 'long' => 119.882810],

            ['id' => 5316, 'provinsi_id' => 53, 'nama' => 'KABUPATEN SUMBA TENGAH', 'alt_nama' => 'KABUPATEN SUMBA TENGAH', 'lat' => -9.629410, 'long' => 119.619140],

            ['id' => 5317, 'provinsi_id' => 53, 'nama' => 'KABUPATEN SUMBA BARAT DAYA', 'alt_nama' => 'KABUPATEN SUMBA BARAT DAYA', 'lat' => -9.562160, 'long' => 119.089050],

            ['id' => 5318, 'provinsi_id' => 53, 'nama' => 'KABUPATEN NAGEKEO', 'alt_nama' => 'KABUPATEN NAGEKEO', 'lat' => -8.872100, 'long' => 121.209630],

            ['id' => 5319, 'provinsi_id' => 53, 'nama' => 'KABUPATEN MANGGARAI TIMUR', 'alt_nama' => 'KABUPATEN MANGGARAI TIMUR', 'lat' => -8.555330, 'long' => 120.597610],

            ['id' => 5320, 'provinsi_id' => 53, 'nama' => 'KABUPATEN SABU RAIJUA', 'alt_nama' => 'KABUPATEN SABU RAIJUA', 'lat' => -10.562860, 'long' => 121.788940],

            ['id' => 5321, 'provinsi_id' => 53, 'nama' => 'KABUPATEN MALAKA', 'alt_nama' => 'KABUPATEN MALAKA', 'lat' => -9.563200, 'long' => 124.894810],

            ['id' => 5371, 'provinsi_id' => 53, 'nama' => 'KOTA KUPANG', 'alt_nama' => 'KOTA KUPANG', 'lat' => -10.216670, 'long' => 123.600000],

            ['id' => 6101, 'provinsi_id' => 61, 'nama' => 'KABUPATEN SAMBAS', 'alt_nama' => 'KABUPATEN SAMBAS', 'lat' => 1.416670, 'long' => 109.333330],

            ['id' => 6102, 'provinsi_id' => 61, 'nama' => 'KABUPATEN BENGKAYANG', 'alt_nama' => 'KABUPATEN BENGKAYANG', 'lat' => 1.069110, 'long' => 109.663930],

            ['id' => 6103, 'provinsi_id' => 61, 'nama' => 'KABUPATEN LANDAK', 'alt_nama' => 'KABUPATEN LANDAK', 'lat' => 0.423730, 'long' => 109.759170],

            ['id' => 6104, 'provinsi_id' => 61, 'nama' => 'KABUPATEN MEMPAWAH', 'alt_nama' => 'KABUPATEN MEMPAWAH', 'lat' => 0.250000, 'long' => 109.166670],

            ['id' => 6105, 'provinsi_id' => 61, 'nama' => 'KABUPATEN SANGGAU', 'alt_nama' => 'KABUPATEN SANGGAU', 'lat' => 0.254720, 'long' => 110.450000],

            ['id' => 6106, 'provinsi_id' => 61, 'nama' => 'KABUPATEN KETAPANG', 'alt_nama' => 'KABUPATEN KETAPANG', 'lat' => -1.583330, 'long' => 110.500000],

            ['id' => 6107, 'provinsi_id' => 61, 'nama' => 'KABUPATEN SINTANG', 'alt_nama' => 'KABUPATEN SINTANG', 'lat' => -0.083330, 'long' => 112.083330],

            ['id' => 6108, 'provinsi_id' => 61, 'nama' => 'KABUPATEN KAPUAS HULU', 'alt_nama' => 'KABUPATEN KAPUAS HULU', 'lat' => 0.816670, 'long' => 112.766670],

            ['id' => 6109, 'provinsi_id' => 61, 'nama' => 'KABUPATEN SEKADAU', 'alt_nama' => 'KABUPATEN SEKADAU', 'lat' => 0.034850, 'long' => 110.950660],

            ['id' => 6110, 'provinsi_id' => 61, 'nama' => 'KABUPATEN MELAWI', 'alt_nama' => 'KABUPATEN MELAWI', 'lat' => -0.336170, 'long' => 111.698000],

            ['id' => 6111, 'provinsi_id' => 61, 'nama' => 'KABUPATEN KAYONG UTARA', 'alt_nama' => 'KABUPATEN KAYONG UTARA', 'lat' => -1.437110, 'long' => 110.797810],

            ['id' => 6112, 'provinsi_id' => 61, 'nama' => 'KABUPATEN KUBU RAYA', 'alt_nama' => 'KABUPATEN KUBU RAYA', 'lat' => 0.016370, 'long' => 109.337310],

            // Kota

            ['id' => 6171, 'provinsi_id' => 61, 'nama' => 'KOTA PONTIANAK', 'alt_nama' => 'KOTA PONTIANAK', 'lat' => -0.083330, 'long' => 109.366670],

            ['id' => 6172, 'provinsi_id' => 61, 'nama' => 'KOTA SINGKAWANG', 'alt_nama' => 'KOTA SINGKAWANG', 'lat' => 0.907340, 'long' =>  109.001030],

            ['id' => 6201, 'provinsi_id' => 62, 'nama' => 'KABUPATEN KOTAWARINGIN BARAT', 'alt_nama' => 'KABUPATEN KOTAWARINGIN BARAT', 'lat' => -2.400000, 'long' => 111.733330],

            ['id' => 6202, 'provinsi_id' => 62, 'nama' => 'KABUPATEN KOTAWARINGIN TIMUR', 'alt_nama' => 'KABUPATEN KOTAWARINGIN TIMUR', 'lat' => -2.083330, 'long' => 112.750000],

            ['id' => 6203, 'provinsi_id' => 62, 'nama' => 'KABUPATEN KAPUAS', 'alt_nama' => 'KABUPATEN KAPUAS', 'lat' => -2.016670, 'long' => 114.383330],

            ['id' => 6204, 'provinsi_id' => 62, 'nama' => 'KABUPATEN BARITO SELATAN', 'alt_nama' => 'KABUPATEN BARITO SELATAN', 'lat' => -1.866670, 'long' => 114.733330],

            ['id' => 6205, 'provinsi_id' => 62, 'nama' => 'KABUPATEN BARITO UTARA', 'alt_nama' => 'KABUPATEN BARITO UTARA', 'lat' => -0.983330, 'long' => 115.100000],

            ['id' => 6206, 'provinsi_id' => 62, 'nama' => 'KABUPATEN SUKAMARA', 'alt_nama' => 'KABUPATEN SUKAMARA', 'lat' => -2.626750, 'long' => 111.236810],

            ['id' => 6207, 'provinsi_id' => 62, 'nama' => 'KABUPATEN LAMANDAU', 'alt_nama' => 'KABUPATEN LAMANDAU', 'lat' => -1.838280, 'long' => 111.286900],

            ['id' => 6208, 'provinsi_id' => 62, 'nama' => 'KABUPATEN SERUYAN', 'alt_nama' => 'KABUPATEN SERUYAN', 'lat' => -2.333330, 'long' => 112.250000],

            ['id' => 6209, 'provinsi_id' => 62, 'nama' => 'KABUPATEN KATINGAN', 'alt_nama' => 'KABUPATEN KATINGAN', 'lat' => -2.066670, 'long' => 113.400000],

            ['id' => 6210, 'provinsi_id' => 62, 'nama' => 'KABUPATEN PULANG PISAU', 'alt_nama' => 'KABUPATEN PULANG PISAU', 'lat' => -3.118580, 'long' => 113.862300],

            ['id' => 6211, 'provinsi_id' => 62, 'nama' => 'KABUPATEN GUNUNG MAS', 'alt_nama' => 'KABUPATEN GUNUNG MAS', 'lat' => -0.950000, 'long' => 113.500000],

            ['id' => 6212, 'provinsi_id' => 62, 'nama' => 'KABUPATEN BARITO TIMUR', 'alt_nama' => 'KABUPATEN BARITO TIMUR', 'lat' => -1.933330, 'long' => 115.100000],

            ['id' => 6213, 'provinsi_id' => 62, 'nama' => 'KABUPATEN MURUNG RAYA', 'alt_nama' => 'KABUPATEN MURUNG RAYA', 'lat' => -0.016670, 'long' => 114.266670],

            ['id' => 6271, 'provinsi_id' => 62, 'nama' => 'KOTA PALANGKA RAYA', 'alt_nama' => 'KOTA PALANGKA RAYA ', 'lat' => -1.769790, 'long' => 113.731260],

            // Kalimantan Selatan

            ['id' => 6301, 'provinsi_id' => 63, 'nama' => 'KABUPATEN TANAH LAUT', 'alt_nama' => 'KABUPATEN TANAH LAUT', 'lat' => -3.883330, 'long' => 114.866670],

            ['id' => 6302, 'provinsi_id' => 63, 'nama' => 'KABUPATEN KOTA BARU', 'alt_nama' => 'KABUPATEN KOTA BARU', 'lat' => -3.000000, 'long' => 116.000000],

            ['id' => 6303, 'provinsi_id' => 63, 'nama' => 'KABUPATEN BANJAR', 'alt_nama' => 'KABUPATEN BANJAR', 'lat' => -3.316670, 'long' => 115.083330],

            ['id' => 6304, 'provinsi_id' => 63, 'nama' => 'KABUPATEN BARITO KUALA', 'alt_nama' => 'KABUPATEN BARITO KUALA', 'lat' => -3.083330, 'long' => 114.616670],

            ['id' => 6305, 'provinsi_id' => 63, 'nama' => 'KABUPATEN TAPIN', 'alt_nama' => 'KABUPATEN TAPIN', 'lat' => -2.916670, 'long' => 115.033330],

            ['id' => 6306, 'provinsi_id' => 63, 'nama' => 'KABUPATEN HULU SUNGAI SELATAN', 'alt_nama' => 'KABUPATEN HULU SUNGAI SELATAN', 'lat' => -2.750000, 'long' => 115.200000],

            ['id' => 6307, 'provinsi_id' => 63, 'nama' => 'KABUPATEN HULU SUNGAI TENGAH', 'alt_nama' => 'KABUPATEN HULU SUNGAI TENGAH', 'lat' => -2.616670, 'long' => 115.416670],

            ['id' => 6308, 'provinsi_id' => 63, 'nama' => 'KABUPATEN HULU SUNGAI UTARA', 'alt_nama' => 'KABUPATEN HULU SUNGAI UTARA', 'lat' => -2.450000, 'long' => 115.133330],

            ['id' => 6309, 'provinsi_id' => 63, 'nama' => 'KABUPATEN TABALONG', 'alt_nama' => 'KABUPATEN TABALONG', 'lat' => -1.883330, 'long' => 115.500000],

            ['id' => 6310, 'provinsi_id' => 63, 'nama' => 'KABUPATEN TANAH BUMBU', 'alt_nama' => 'KABUPATEN TANAH BUMBU', 'lat' => -3.454130, 'long' => 115.703720],

            ['id' => 6311, 'provinsi_id' => 63, 'nama' => 'KABUPATEN BALANGAN', 'alt_nama' => 'KABUPATEN BALANGAN', 'lat' => -2.323140, 'long' => 115.629220],

            // Kota

            ['id' => 6371, 'provinsi_id' => 63, 'nama' => 'KOTA BANJARMASIN', 'alt_nama' => 'KOTA BANJARMASIN', 'lat' => -3.324440, 'long' => 114.591020],

            ['id' => 6372, 'provinsi_id' => 63, 'nama' => 'KOTA BANJAR BARU', 'alt_nama' => 'KOTA BANJAR BARU', 'lat' => -3.416670, 'long' => 114.833330],

            ['id' => 6401, 'provinsi_id' => 64, 'nama' => 'KABUPATEN PASER', 'alt_nama' => 'KABUPATEN PASER', 'lat' => -1.435170, 'long' => 116.235350],

            ['id' => 6402, 'provinsi_id' => 64, 'nama' => 'KABUPATEN KUTAI BARAT', 'alt_nama' => 'KABUPATEN KUTAI BARAT', 'lat' => -0.594170, 'long' => 115.515750],

            ['id' => 6403, 'provinsi_id' => 64, 'nama' => 'KABUPATEN KUTAI KARTANEGARA', 'alt_nama' => 'KABUPATEN KUTAI KARTANEGARA', 'lat' => -0.440190, 'long' => 116.981390],

            ['id' => 6404, 'provinsi_id' => 64, 'nama' => 'KABUPATEN KUTAI TIMUR', 'alt_nama' => 'KABUPATEN KUTAI TIMUR', 'lat' => 1.037690, 'long' => 117.831120],

            ['id' => 6405, 'provinsi_id' => 64, 'nama' => 'KABUPATEN BERAU', 'alt_nama' => 'KABUPATEN BERAU', 'lat' => 2.000000, 'long' => 117.300000],

            ['id' => 6409, 'provinsi_id' => 64, 'nama' => 'KABUPATEN PENAJAM PASER UTARA', 'alt_nama' => 'KABUPATEN PENAJAM PASER UTARA', 'lat' => -1.250000, 'long' => 116.833330],

            ['id' => 6411, 'provinsi_id' => 64, 'nama' => 'KABUPATEN MAHAKAM HULU', 'alt_nama' => 'KABUPATEN MAHAKAM HULU', 'lat' => 0.378220, 'long' => 115.380480],

            // Kota

            ['id' => 6471, 'provinsi_id' => 64, 'nama' => 'KOTA BALIKPAPAN', 'alt_nama' => 'KOTA BALIKPAPAN', 'lat' => -1.166670, 'long' => 116.883330],

            ['id' => 6472, 'provinsi_id' => 64, 'nama' => 'KOTA SAMARINDA', 'alt_nama' => 'KOTA SAMARINDA', 'lat' => -0.433330, 'long' => 117.183330],

            ['id' => 6474, 'provinsi_id' => 64, 'nama' => 'KOTA BONTANG', 'alt_nama' => 'KOTA BONTANG', 'lat' => 0.125260, 'long' => 117.496030],


            // Kalimantan Utara

            ['id' => 6501, 'provinsi_id' => 65, 'nama' => 'KABUPATEN MALINAU', 'alt_nama' => 'KABUPATEN MALINAU', 'lat' => 2.450000, 'long' => 115.683330],

            ['id' => 6502, 'provinsi_id' => 65, 'nama' => 'KABUPATEN BULUNGAN', 'alt_nama' => 'KABUPATEN BULUNGAN', 'lat' => 3.000000, 'long' => 117.166670],

            ['id' => 6503, 'provinsi_id' => 65, 'nama' => 'KABUPATEN TANA TIDUNG', 'alt_nama' => 'KABUPATEN TANA T IDUNG', 'lat' => 3.550000, 'long' => 117.250000],

            ['id' => 6504, 'provinsi_id' => 65, 'nama' => 'KABUPATEN NUNUKAN', 'alt_nama' => 'KABUPATEN NUNUKAN', 'lat' => 4.133330, 'long' => 116.700000],

            ['id' => 6571, 'provinsi_id' => 65, 'nama' => 'KOTA TARAKAN', 'alt_nama' => 'KOTA TARAKAN', 'lat' => 3.366670, 'long' => 117.600000],


            // Sulawesi Utara

            ['id' => 7101, 'provinsi_id' => 71, 'nama' => 'KABUPATEN BOLAANG MONGONDOW', 'alt_nama' => 'KABUPATEN BOLAANG MONGONDOW', 'lat' => 0.750000, 'long' => 124.083330],

            ['id' => 7102, 'provinsi_id' => 71, 'nama' => 'KABUPATEN MINAHASA', 'alt_nama' => 'KABUPATEN MINAHASA', 'lat' => 1.253700, 'long' => 124.830000],

            ['id' => 7103, 'provinsi_id' => 71, 'nama' => 'KABUPATEN KEPULAUAN SANGIHE', 'alt_nama' => 'KABUPATEN KEPULAUAN SANGIHE', 'lat' => 3.500000, 'long' => 125.550000],

            ['id' => 7104, 'provinsi_id' => 71, 'nama' => 'KABUPATEN KEPULAUAN TALAUD', 'alt_nama' => 'KABUPATEN KEPULAUAN TALAUD', 'lat' => 4.311780, 'long' => 126.780850],

            ['id' => 7105, 'provinsi_id' => 71, 'nama' => 'KABUPATEN MINAHASA SELATAN', 'alt_nama' => 'KABUPATEN MINAHASA SELATAN', 'lat' => 1.212910, 'long' => 124.597080],

            ['id' => 7106, 'provinsi_id' => 71, 'nama' => 'KABUPATEN MINAHASA UTARA', 'alt_nama' => 'KABUPATEN MINAHASA UTARA', 'lat' => 1.402500, 'long' => 124.960000],

            ['id' => 7107, 'provinsi_id' => 71, 'nama' => 'KABUPATEN BOLAANG MONGONDOW UTARA', 'alt_nama' => 'KABUPATEN BOLAANG MONGONDOW UTARA', 'lat' => 0.785270, 'long' => 123.417660],

            ['id' => 7108, 'provinsi_id' => 71, 'nama' => 'KABUPATEN SIAU TAGULANDANG BIARO', 'alt_nama' => 'KABUPATEN SIAU TAGULANDANG BIARO', 'lat' => 2.117280, 'long' => 125.375120],

            ['id' => 7109, 'provinsi_id' => 71, 'nama' => 'KABUPATEN MINAHASA TENGGARA', 'alt_nama' => 'KABUPATEN MINAHASA TENGGARA', 'lat' => 1.056330, 'long' => 124.792500],

            ['id' => 7110, 'provinsi_id' => 71, 'nama' => 'KABUPATEN BOLAANG MONGONDOW SELATAN', 'alt_nama' => 'KABUPATEN BOLAANG MONGONDOW SELATAN', 'lat' => 0.409120, 'long' => 123.759610],

            ['id' => 7111, 'provinsi_id' => 71, 'nama' => 'KABUPATEN BOLAANG MONGONDOW TIMUR', 'alt_nama' => 'KABUPATEN BOLAANG MONGONDOW TIMUR', 'lat' => 0.720730, 'long' => 124.502560],

            // Kota

            ['id' => 7171, 'provinsi_id' => 71, 'nama' => 'KOTA MANADO', 'alt_nama' => 'KOTA MANADO', 'lat' => 1.516670, 'long' => 124.883330],

            ['id' => 7172, 'provinsi_id' => 71, 'nama' => 'KOTA BITUNG', 'alt_nama' => 'KOTA BITUNG', 'lat' => 1.483330, 'long' => 125.150000],

            ['id' => 7173, 'provinsi_id' => 71, 'nama' => 'KOTA TOMOHON', 'alt_nama' => 'KOTA TOMOHON', 'lat' => 1.313070, 'long' => 124.834040],

            ['id' => 7174, 'provinsi_id' => 71, 'nama' => 'KOTA KOTAMOBAGU', 'alt_nama' => 'KOTA KOTAMOBAGU', 'lat' => 0.689150, 'long' => 124.326780],

            ['id' => 7201, 'provinsi_id' => 72, 'nama' => 'KABUPATEN BANGGAI KEPULAUAN', 'alt_nama' => 'KABUPATEN BANGGAI KEPULAUAN', 'lat' => -1.642400, 'long' => 123.548810],

            ['id' => 7202, 'provinsi_id' => 72, 'nama' => 'KABUPATEN BANGGAI', 'alt_nama' => 'KABUPATEN BANGGAI', 'lat' => -1.283500, 'long' => 122.889200],

            ['id' => 7203, 'provinsi_id' => 72, 'nama' => 'KABUPATEN MOROWALI', 'alt_nama' => 'KABUPATEN MOROWALI', 'lat' => -1.893420, 'long' => 121.254730],

            ['id' => 7204, 'provinsi_id' => 72, 'nama' => 'KABUPATEN POSO', 'alt_nama' => 'KABUPATEN POSO', 'lat' => -1.650000, 'long' => 120.500000],

            ['id' => 7205, 'provinsi_id' => 72, 'nama' => 'KABUPATEN DONGGALA', 'alt_nama' => 'KABUPATEN DONGGALA', 'lat' => -0.583330, 'long' => 119.850000],

            ['id' => 7206, 'provinsi_id' => 72, 'nama' => 'KABUPATEN TOLI-TOLI', 'alt_nama' => 'KABUPATEN TOLI-TOLI', 'lat' => 1.308620, 'long' => 120.886430],

            ['id' => 7207, 'provinsi_id' => 72, 'nama' => 'KABUPATEN BUOL', 'alt_nama' => 'KABUPATEN BUOL', 'lat' => 0.750000, 'long' => 120.750000],

            ['id' => 7208, 'provinsi_id' => 72, 'nama' => 'KABUPATEN PARIGI MOUTONG', 'alt_nama' => 'KABUPATEN PARIGI MOUTONG', 'lat' => 0.336800, 'long' => 120.178410],

            ['id' => 7209, 'provinsi_id' => 72, 'nama' => 'KABUPATEN TOJO UNA-UNA', 'alt_nama' => 'KABUPATEN TOJO UNA-UNA', 'lat' => -1.203600, 'long' => 121.482010],

            ['id' => 7210, 'provinsi_id' => 72, 'nama' => 'KABUPATEN SIGI', 'alt_nama' => 'KABUPATEN SIGI', 'lat' => -1.385000, 'long' => 119.966940],

            ['id' => 7211, 'provinsi_id' => 72, 'nama' => 'KABUPATEN BANGGAI LAUT', 'alt_nama' => 'KABUPATEN BANGGAI LAUT', 'lat' => -1.618410, 'long' => 123.493880],

            ['id' => 7212, 'provinsi_id' => 72, 'nama' => 'KABUPATEN MOROWALI UTARA', 'alt_nama' => 'KABUPATEN MOROWALI UTARA', 'lat' => -1.720700, 'long' => 121.246490],

            ['id' => 7271, 'provinsi_id' => 72, 'nama' => 'KOTA PALU', 'alt_nama' => 'KOTA PALU', 'lat' => -0.869720, 'long' => 119.900000],


            // Sulawesi Selatan

            ['id' => 7301, 'provinsi_id' => 73, 'nama' => 'KABUPATEN KEPULAUAN SELAYAR', 'alt_nama' => 'KABUPATEN KEPULAUAN SELAYAR', 'lat' => -6.816670, 'long' => 120.800000],

            ['id' => 7302, 'provinsi_id' => 73, 'nama' => 'KABUPATEN BULUKUMBA', 'alt_nama' => 'KABUPATEN BULUKUMBA', 'lat' => -5.416670, 'long' => 120.233330],

            ['id' => 7303, 'provinsi_id' => 73, 'nama' => 'KABUPATEN BANTAENG', 'alt_nama' => 'KABUPATEN BANTAENG', 'lat' => -5.483330, 'long' => 119.983330],

            ['id' => 7304, 'provinsi_id' => 73, 'nama' => 'KABUPATEN JENEPONTO', 'alt_nama' => 'KABUPATEN JENEPONTO', 'lat' => -5.633330, 'long' => 119.733330],

            ['id' => 7305, 'provinsi_id' => 73, 'nama' => 'KABUPATEN TAKALAR', 'alt_nama' => 'KABUPATEN TAKALAR', 'lat' => -5.416670, 'long' => 119.516670],

            ['id' => 7306, 'provinsi_id' => 73, 'nama' => 'KABUPATEN GOWA', 'alt_nama' => 'KABUPATEN GOWA', 'lat' => -5.316670, 'long' => 119.750000],

            ['id' => 7307, 'provinsi_id' => 73, 'nama' => 'KABUPATEN SINJAI', 'alt_nama' => 'KABUPATEN SINJAI', 'lat' => -5.216670, 'long' => 120.150000],

            ['id' => 7308, 'provinsi_id' => 73, 'nama' => 'KABUPATEN MAROS', 'alt_nama' => 'KABUPATEN MAROS', 'lat' => -5.050000, 'long' => 119.716670],

            ['id' => 7309, 'provinsi_id' => 73, 'nama' => 'KABUPATEN PANGKAJENE DAN KEPULAUAN', 'alt_nama' => 'KABUPATEN PANGKAJENE DAN KEPULAUAN', 'lat' => -4.782700, 'long' => 119.550600],

            ['id' => 7310, 'provinsi_id' => 73, 'nama' => 'KABUPATEN BARRU', 'alt_nama' => 'KABUPATEN BARRU', 'lat' => -4.433330, 'long' => 119.683330],

            ['id' => 7311, 'provinsi_id' => 73, 'nama' => 'KABUPATEN BONE', 'alt_nama' => 'KABUPATEN BONE', 'lat' => -4.700000, 'long' => 120.133330],

            ['id' => 7312, 'provinsi_id' => 73, 'nama' => 'KABUPATEN SOPPENG', 'alt_nama' => 'KABUPATEN SOPPENG', 'lat' => -4.384200, 'long' => 119.890000],

            ['id' => 7313, 'provinsi_id' => 73, 'nama' => 'KABUPATEN WAJO', 'alt_nama' => 'KABUPATEN WAJO', 'lat' => -4.000000, 'long' => 120.166670],

            ['id' => 7314, 'provinsi_id' => 73, 'nama' => 'KABUPATEN SIDENRENG RAPPANG', 'alt_nama' => 'KABUPATEN SIDENRENG RAPPANG', 'lat' => -3.850000, 'long' => 119.966670],

            ['id' => 7315, 'provinsi_id' => 73, 'nama' => 'KABUPATEN PINRANG', 'alt_nama' => 'KABUPATEN PINRANG', 'lat' => -3.616670, 'long' => 119.600000],

            ['id' => 7316, 'provinsi_id' => 73, 'nama' => 'KABUPATEN ENREKANG', 'alt_nama' => 'KABUPATEN ENREKANG', 'lat' => -3.500000, 'long' => 119.866670],

            ['id' => 7317, 'provinsi_id' => 73, 'nama' => 'KABUPATEN LUWU', 'alt_nama' => 'KABUPATEN LUWU', 'lat' => -2.557700, 'long' => 121.324200],

            ['id' => 7318, 'provinsi_id' => 73, 'nama' => 'KABUPATEN TANA TORAJA', 'alt_nama' => 'KABUPATEN TANA TORAJA', 'lat' => -3.002400, 'long' => 119.796550],

            ['id' => 7322, 'provinsi_id' => 73, 'nama' => 'KABUPATEN LUWU UTARA', 'alt_nama' => 'KABUPATEN LUWU UTARA', 'lat' => -2.600000, 'long' => 120.250000],

            ['id' => 7325, 'provinsi_id' => 73, 'nama' => 'KABUPATEN LUWU TIMUR', 'alt_nama' => 'KABUPATEN LUWU TIMUR', 'lat' => -2.509570, 'long' => 120.397800],

            ['id' => 7326, 'provinsi_id' => 73, 'nama' => 'KABUPATEN TORAJA UTARA', 'alt_nama' => 'KABUPATEN TORAJA UTARA', 'lat' => -2.927380, 'long' => 119.792180],

            // Kota

            ['id' => 7371, 'provinsi_id' => 73, 'nama' => 'KOTA MAKASSAR', 'alt_nama' => 'KOTA MAKASSAR', 'lat' => -5.150000, 'long' => 119.450000],

            ['id' => 7372, 'provinsi_id' => 73, 'nama' => 'KOTA PARE-PARE', 'alt_nama' => 'KOTA PARE-PARE', 'lat' => -4.033330, 'long' => 119.650000],

            ['id' => 7373, 'provinsi_id' => 73, 'nama' => 'KOTA PALOPO', 'alt_nama' => 'KOTA PALOPO', 'lat' => -2.978410, 'long' => 120.110780],

            ['id' => 7401, 'provinsi_id' => 74, 'nama' => 'KABUPATEN BUTON', 'alt_nama' => 'KABUPATEN BUTON', 'lat' => -5.316670, 'long' => 122.583330],

            ['id' => 7402, 'provinsi_id' => 74, 'nama' => 'KABUPATEN MUNA', 'alt_nama' => 'KABUPATEN MUNA', 'lat' => -4.966670, 'long' => 122.666670],

            ['id' => 7403, 'provinsi_id' => 74, 'nama' => 'KABUPATEN KONAWE', 'alt_nama' => 'KABUPATEN KONAWE', 'lat' => -3.917170, 'long' => 122.088230],

            ['id' => 7404, 'provinsi_id' => 74, 'nama' => 'KABUPATEN KOLAKA', 'alt_nama' => 'KABUPATEN KOLAKA', 'lat' => -4.083330, 'long' => 121.666670],

            ['id' => 7405, 'provinsi_id' => 74, 'nama' => 'KABUPATEN KONAWE SELATAN', 'alt_nama' => 'KABUPATEN KONAWE SELATAN', 'lat' => -4.191910, 'long' => 122.448540],

            ['id' => 7406, 'provinsi_id' => 74, 'nama' => 'KABUPATEN BOMBANA', 'alt_nama' => 'KABUPATEN BOMBANA', 'lat' => -4.625700, 'long' => 121.816410],

            ['id' => 7407, 'provinsi_id' => 74, 'nama' => 'KABUPATEN WAKATOBI', 'alt_nama' => 'KABUPATEN WAKATOBI', 'lat' => -5.319340, 'long' => 123.594800],

            ['id' => 7408, 'provinsi_id' => 74, 'nama' => 'KABUPATEN KOLAKA UTARA', 'alt_nama' => 'KABUPATEN KOLAKA UTARA', 'lat' => -3.104520, 'long' => 121.124270],

            ['id' => 7409, 'provinsi_id' => 74, 'nama' => 'KABUPATEN BUTON UTARA', 'alt_nama' => 'KABUPATEN BUTON UTARA', 'lat' => -5.014570, 'long' => 122.930150],

            ['id' => 7410, 'provinsi_id' => 74, 'nama' => 'KABUPATEN KONAWE UTARA', 'alt_nama' => 'KABUPATEN KONAWE UTARA', 'lat' => -3.415520, 'long' => 121.990810],

            ['id' => 7411, 'provinsi_id' => 74, 'nama' => 'KABUPATEN KOLAKA TIMUR', 'alt_nama' => 'KABUPATEN KOLAKA TIMUR', 'lat' => -4.018070, 'long' => 121.861720],

            ['id' => 7412, 'provinsi_id' => 74, 'nama' => 'KABUPATEN KONAWE KEPULAUAN', 'alt_nama' => 'KABUPATEN KONAWE KEPULAUAN', 'lat' => -4.116560, 'long' => 123.101810],

            ['id' => 7413, 'provinsi_id' => 74, 'nama' => 'KABUPATEN MUNA BARAT', 'alt_nama' => 'KABUPATEN MUNA BARAT', 'lat' => -4.833330, 'long' => 122.483330],

            ['id' => 7414, 'provinsi_id' => 74, 'nama' => 'KABUPATEN BUTON TENGAH', 'alt_nama' => 'KABUPATEN BUTON TENGAH', 'lat ' => -5.316670, 'long' => 122.333330],

            ['id' => 7415, 'provinsi_id' => 74, 'nama' => 'KABUPATEN BUTON SELATAN', 'alt_nama' => 'KABUPATEN BUTON SELATAN', 'lat' => -5.566670, 'long' => 122.700000],

            ['id' => 7471, 'provinsi_id' => 74, 'nama' => 'KOTA KENDARI', 'alt_nama' => 'KOTA KENDARI', 'lat' => -3.983330, 'long' => 122.500000],

            ['id' => 7472, 'provinsi_id' => 74, 'nama' => 'KOTA BAUBAU', 'alt_nama' => 'KOTA BAUBAU', 'lat' => -5.477000, 'long' => 122.616600],


            // Gorontalo

            ['id' => 7501, 'provinsi_id' => 75, 'nama' => 'KABUPATEN BOALEMO', 'alt_nama' => 'KABUPATEN BOALEMO', 'lat' => 0.626890, 'long' => 122.356800],

            ['id' => 7502, 'provinsi_id' => 75, 'nama' => 'KABUPATEN GORONTALO', 'alt_nama' => 'KABUPATEN GORONTALO', 'lat' => 0.572800, 'long' => 122.233700],

            ['id' => 7503, 'provinsi_id' => 75, 'nama' => 'KABUPATEN POHUWATO', 'alt_nama' => 'KABUPATEN POHUWATO', 'lat' => 0.709800, 'long' => 121.595820],

            ['id' => 7504, 'provinsi_id' => 75, 'nama' => 'KABUPATEN BONE BOLANGO', 'alt_nama' => 'KABUPATEN BONE BOLANGO', 'lat' => 0.502960, 'long' => 123.275010],

            ['id' => 7505, 'provinsi_id' => 75, 'nama' => 'KABUPATEN GORONTALO UTARA', 'alt_nama' => 'KABUPATEN GORONTALO UTARA', 'lat' => 0.770000, 'long' => 122.316670],

            ['id' => 7571, 'provinsi_id' => 75, 'nama' => 'KOTA GORONTALO', 'alt_nama' => 'KOTA GORONTALO', 'lat' => 0.533330, 'long' => 123.100000],

            // Sulawesi Barat

            ['id' => 7601, 'provinsi_id' => 76, 'nama' => 'KABUPATEN MAJENE', 'alt_nama' => 'KABUPATEN MAJENE', 'lat' => -3.150000, 'long' => 118.866670],

            ['id' => 7602, 'provinsi_id' => 76, 'nama' => 'KABUPATEN POLEWALI MANDAR', 'alt_nama' => 'KABUPATEN POLEWALI MANDAR', 'lat' => -3.300000, 'long' => 119.166670],

            ['id' => 7603, 'provinsi_id' => 76, 'nama' => 'KABUPATEN MAMASA', 'alt_nama' => 'KABUPATEN MAMASA', 'lat' => -2.964920, 'long' => 119.306310],

            ['id' => 7604, 'provinsi_id' => 76, 'nama' => 'KABUPATEN MAMUJU', 'alt_nama' => 'KABUPATEN MAMUJU', 'lat' => -2.500000, 'long' => 119.416670],

            ['id' => 7605, 'provinsi_id' => 76, 'nama' => 'KABUPATEN MAMUJU UTARA', 'alt_nama' => 'KABUPATEN MAMUJU UTARA', 'lat' => -1.516390, 'long' => 119.421390],

            ['id' => 7606, 'provinsi_id' => 76, 'nama' => 'KABUPATEN MAMUJU TENGAH', 'alt_nama' => 'KABUPATEN MAMUJU TENGAH', 'lat' => -2.821200, 'long' => 119.266200],


            // Maluku

            ['id' => 8101, 'provinsi_id' => 81, 'nama' => 'KABUPATEN MALUKU TENGGARA BARAT', 'alt_nama' => 'KABUPATEN MALUKU TENGGARA BARAT', 'lat' => -7.611860, 'long' => 131.380000],

            ['id' => 8102, 'provinsi_id' => 81, 'nama' => 'KABUPATEN MALUKU TENGGARA', 'alt_nama' => 'KABUPATEN MALUKU TENGGARA', 'lat' => -5.750000, 'long' => 132.733340],

            ['id' => 8103, 'provinsi_id' => 81, 'nama' => 'KABUPATEN MALUKU TENGAH', 'alt_nama' => 'KABUPATEN MALUKU TENGAH', 'lat' => -3.291670, 'long' => 128.967500],

            ['id' => 8104, 'provinsi_id' => 81, 'nama' => 'KABUPATEN BURU', 'alt_nama' => 'KABUPATEN BURU', 'lat' => -3.327670, 'long' => 126.684130],

            ['id' => 8105, 'provinsi_id' => 81, 'nama' => 'KABUPATEN KEPULAUAN ARU', 'alt_nama' => 'KABUPATEN KEPULAUAN ARU', 'lat' => -6.170590, 'long' => 134.469910],

            ['id' => 8106, 'provinsi_id' => 81, 'nama' => 'KABUPATEN SERAM BAGIAN BARAT', 'alt_nama' => 'KABUPATEN SERAM BAGIAN BARAT', 'lat' => -3.102700, 'long' => 128.429960],

            ['id' => 8107, 'provinsi_id' => 81, 'nama' => 'KABUPATEN SERAM BAGIAN TIMUR', 'alt_nama' => 'KABUPATEN SERAM BAGIAN TIMUR', 'lat' => -3.398510, 'long' => 130.391660],

            ['id' => 8108, 'provinsi_id' => 81, 'nama' => 'KABUPATEN MALUKU BARAT DAYA', 'alt_nama' => 'KABUPATEN MALUKU BARAT DAYA', 'lat' => -7.829600, 'long' => 126.173860],

            ['id' => 8109, 'provinsi_id' => 81, 'nama' => 'KABUPATEN BURU SELATAN', 'alt_nama' => 'KABUPATEN BURU SELATAN', 'lat' => -3.521870, 'long' => 126.592710],

            ['id' => 8171, 'provinsi_id' => 81, 'nama' => 'KOTA AMBON', 'alt_nama' => 'KOTA AMBON', 'lat' => -3.700000, 'long' => 128.183330],

            ['id' => 8172, 'provinsi_id' => 81, 'nama' => 'KOTA TUAL', 'alt_nama' => 'KOTA TUAL', 'lat' => -5.643010, 'long' => 132.749340],


            // Maluku Utara

            ['id' => 8201, 'provinsi_id' => 82, 'nama' => 'KABUPATEN HALMAHERA BARAT', 'alt_nama' => 'KABUPATEN HALMAHERA BARAT', 'lat' => 1.417090, 'long' => 127.552640],

            ['id' => 8202, 'provinsi_id' => 82, 'nama' => 'KABUPATEN HALMAHERA TENGAH', 'alt_nama' => 'KABUPATEN HALMAHERA TENGAH', 'lat' => 0.480560, 'long' => 128.250000],

            ['id' => 8203, 'provinsi_id' => 82, 'nama' => 'KABUPATEN KEPULAUAN SULA', 'alt_nama' => 'KABUPATEN KEPULAUAN SULA', 'lat' => -1.864600, 'long' => 125.690460],

            ['id' => 8204, 'provinsi_id' => 82, 'nama' => 'KABUPATEN HALMAHERA SELATAN', 'alt_nama' => 'KABUPATEN HALMAHERA SELATAN', 'lat' => -0.395500, 'long' => 127.908330],

            ['id' => 8205, 'provinsi_id' => 82, 'nama' => 'KABUPATEN HALMAHERA UTARA', 'alt_nama' => 'KABUPATEN HALMAHERA UTARA', 'lat' => 1.731940, 'long' => 128.007780],

            ['id' => 8206, 'provinsi_id' => 82, 'nama' => 'KABUPATEN HALMAHERA TIMUR', 'alt_nama' => 'KABUPATEN HALMAHERA TIMUR', 'lat' => 1.335170, 'long' => 128.486270],

            ['id' => 8207, 'provinsi_id' => 82, 'nama' => 'KABUPATEN PULAU MOROTAI', 'alt_nama' => 'KABUPATEN PULAU MOROTAI', 'lat' => 2.199240, 'long' => 128.405460],

            ['id' => 8208, 'provinsi_id' => 82, 'nama' => 'KABUPATEN PULAU TALIABU', 'alt_nama' => 'KABUPATEN PULAU TALIABU', 'lat' => -1.845780, 'long' => 124.789920],

            ['id' => 8271, 'provinsi_id' => 82, 'nama' => 'KOTA TERNATE', 'alt_nama' => 'KOTA TERNATE', 'lat' => 0.896180, 'long' => 127.310160],

            ['id' => 8272, 'provinsi_id' => 82, 'nama' => 'KOTA TIDORE KEPULAUAN', 'alt_nama' => 'KOTA TIDORE KEPULAUAN', 'lat' => 0.609620, 'long' => 127.569810],

            // Papua Barat

            ['id' => 9101, 'provinsi_id' => 91, 'nama' => 'KABUPATEN FAK-FAK', 'alt_nama' => 'KABUPATEN FAK-FAK', 'lat' => -2.926410, 'long' => 133.296080],

            ['id' => 9102, 'provinsi_id' => 91, 'nama' => 'KABUPATEN KAIMANA', 'alt_nama' => 'KABUPATEN KAIMANA', 'lat' => -3.660930, 'long' => 133.774510],

            ['id' => 9103, 'provinsi_id' => 91, 'nama' => 'KABUPATEN TELUK WONDAMA', 'alt_nama' => 'KABUPATEN TELUK WONDAMA', 'lat' => -2.700000, 'long' => 134.500000],

            ['id' => 9104, 'provinsi_id' => 91, 'nama' => 'KABUPATEN TELUK BINTUNI', 'alt_nama' => 'KABUPATEN TELUK BINTUNI', 'lat' => -1.880370, 'long' => 133.331050],

            ['id' => 9105, 'provinsi_id' => 91, 'nama' => 'KABUPATEN MANOKWARI', 'alt_nama' => 'KABUPATEN MANOKWARI', 'lat' => -0.900000, 'long' => 133.750000],

            ['id' => 9106, 'provinsi_id' => 91, 'nama' => 'KABUPATEN SORONG SELATAN', 'alt_nama' => 'KABUPATEN SORONG SELATAN', 'lat' => -1.504950, 'long' => 132.286380],

            ['id' => 9107, 'provinsi_id' => 91, 'nama' => 'KABUPATEN SORONG', 'alt_nama' => 'KABUPATEN SORONG', 'lat' => -1.166670, 'long' => 131.500000],

            ['id' => 9108, 'provinsi_id' => 91, 'nama' => 'KABUPATEN RAJA AMPAT', 'alt_nama' => 'KABUPATEN RAJA AMPAT', 'lat' => -0.500000, 'long' => 130.000000],

            ['id' => 9109, 'provinsi_id' => 91, 'nama' => 'KABUPATEN TAMBRAUW', 'alt_nama' => 'KABUPATEN TAMBRAUW', 'lat' => -0.605150, 'long' => 132.489620],

            ['id' => 9110, 'provinsi_id' => 91, 'nama' => 'KABUPATEN MAYBRAT', 'alt_nama' => 'KABUPATEN MAYBRAT', 'lat' => -1.215500, 'long' => 132.350920],

            ['id' => 9111, 'provinsi_id' => 91, 'nama' => 'KABUPATEN MANOKWARI SELATAN', 'alt_nama' => 'KABUPATEN MANOKWARI SELATAN', 'lat' => -1.079800, 'long' => 133.967290],

            ['id' => 9112, 'provinsi_id' => 91, 'nama' => 'KABUPATEN PEGUNUNGAN ARFAK', 'alt_nama' => 'KABUPATEN PEGUNUNGAN ARFAK', 'lat' => -0.935230, 'long' => 133.895870],

            ['id' => 9171, 'provinsi_id' => 91, 'nama' => 'KOTA SORONG', 'alt_nama' => 'KOTA SORONG', 'lat' => -0.865070, 'long' => 131.251530],


            // Papua

            ['id' => 9401, 'provinsi_id' => 94, 'nama' => 'KABUPATEN MERAUKE', 'alt_nama' => 'KABUPATEN MERAUKE', 'lat' => -7.666670, 'long' => 139.666670],

            ['id' => 9402, 'provinsi_id' => 94, 'nama' => 'KABUPATEN JAYAWIJAYA', 'alt_nama' => 'KABUPATEN JAYAWIJAYA', 'lat' => -4.083330, 'long' => 139.083330],

            ['id' => 9403, 'provinsi_id' => 94, 'nama' => 'KABUPATEN JAYAPURA', 'alt_nama' => 'KABUPATEN JAYAPURA', 'lat' => -3.000000, 'long' => 139.950000],

            ['id' => 9404, 'provinsi_id' => 94, 'nama' => 'KABUPATEN NABIRE', 'alt_nama' => 'KABUPATEN NABIRE', 'lat' => -3.540160, 'long' => 135.555110],

            ['id' => 9408, 'provinsi_id' => 94, 'nama' => 'KABUPATEN KEPULAUAN YAPEN', 'alt_nama' => 'KABUPATEN KEPULAUAN YAPEN', 'lat' => -1.787730, 'long' => 136.277160],

            ['id' => 9409, 'provinsi_id' => 94, 'nama' => 'KABUPATEN BIAK NUMFOR', 'alt_nama' => 'KABUPATEN BIAK NUMFOR', 'lat' => -1.033330, 'long' => 136.000000],

            ['id' => 9410, 'provinsi_id' => 94, 'nama' => 'KABUPATEN PANIAI', 'alt_nama' => 'KABUPATEN PANIAI', 'lat' => -3.900000, 'long' => 136.600010],

            ['id' => 9411, 'provinsi_id' => 94, 'nama' => 'KABUPATEN PUNCAK JAYA', 'alt_nama' => 'KABUPATEN PUNCAK JAYA', 'lat' => -3.672410, 'long' => 137.438960],

            ['id' => 9412, 'provinsi_id' => 94, 'nama' => 'KABUPATEN MIMIKA', 'alt_nama' => 'KABUPATEN MIMIKA', 'lat' => -4.543570, 'long' => 136.565550],

            ['id' => 9413, 'provinsi_id' => 94, 'nama' => 'KABUPATEN BOVEN DIGOEL', 'alt_nama' => 'KABUPATEN BOVEN DIGOEL', 'lat' => -5.705190, 'long' => 140.363490],

            ['id' => 9414, 'provinsi_id' => 94, 'nama' => 'KABUPATEN MAPPI', 'alt_nama' => 'KABUPATEN MAPPI', 'lat' => -6.499710, 'long' => 139.344410],

            ['id' => 9415, 'provinsi_id' => 94, 'nama' => 'KABUPATEN ASMAT', 'alt_nama' => 'KABUPATEN ASMAT', 'lat' => -5.379500, 'long' => 138.463440],

            ['id' => 9416, 'provinsi_id' => 94, 'nama' => 'KABUPATEN YAHUKIMO', 'alt_nama' => 'KABUPATEN YAHUKIMO', 'lat' => -4.604030, 'long' => 139.584050],

            ['id' => 9417, 'provinsi_id' => 94, 'nama' => 'KABUPATEN PEGUNUNGAN BINTANG', 'alt_nama' => 'KABUPATEN PEGUNUNGAN BINTANG', 'lat' => -4.521670, 'long' => 140.295410],

            ['id' => 9418, 'provinsi_id' => 94, 'nama' => 'KABUPATEN TOLIKARA', 'alt_nama' => 'KABUPATEN TOLIKARA', 'lat' => -3.426610, 'long' => 137.416990],

            ['id' => 9419, 'provinsi_id' => 94, 'nama' => 'KABUPATEN SARMI', 'alt_nama' => 'KABUPATEN SARMI', 'lat' => -2.416670, 'long' => 139.083330],

            ['id' => 9420, 'provinsi_id' => 94, 'nama' => 'KABUPATEN KEEROM', 'alt_nama' => 'KABUPATEN KEEROM', 'lat' => -3.300000, 'long' => 140.616670],

            ['id' => 9426, 'provinsi_id' => 94, 'nama' => 'KABUPATEN WAROPEN', 'alt_nama' => 'KABUPATEN WAROPEN', 'lat' => -2.286000, 'long' => 137.018370],

            ['id' => 9427, 'provinsi_id' => 94, 'nama' => 'KABUPATEN SUPIORI', 'alt_nama' => 'KABUPATEN SUPIORI', 'lat' => -0.738810, 'long' => 135.611110],

            ['id' => 9428, 'provinsi_id' => 94, 'nama' => 'KABUPATEN MAMBERAMO RAYA', 'alt_nama' => 'KABUPATEN MAMBERAMO RAYA', 'lat' => -2.235610, 'long' => 137.782290],

            ['id' => 9429, 'provinsi_id' => 94, 'nama' => 'KABUPATEN NDUGA', 'alt_nama' => 'KABUPATEN NDUGA', 'lat' => -4.450930, 'long' => 138.100890],

            ['id' => 9430, 'provinsi_id' => 94, 'nama' => 'KABUPATEN LANNY JAYA', 'alt_nama' => 'KABUPATEN LANNY JAYA', 'lat' => -3.912440, 'long' => 138.287660],

            ['id' => 9431, 'provinsi_id' => 94, 'nama' => 'KABUPATEN MAMBERAMO TENGAH', 'alt_nama' => 'KABUPATEN MAMBERAMO TENGAH', 'lat' => -2.460640, 'long' => 138.452450],

            ['id' => 9432, 'provinsi_id' => 94, 'nama' => 'KABUPATEN YALIMO', 'alt_nama' => 'KABUPATEN YALIMO', 'lat' => -3.860370, 'long' => 138.473050],

            ['id' => 9433, 'provinsi_id' => 94, 'nama' => 'KABUPATEN PUNCAK', 'alt_nama' => 'KABUPATEN PUNCAK', 'lat' => -4.142040, 'long' => 137.097020],

            ['id' => 9434, 'provinsi_id' => 94, 'nama' => 'KABUPATEN DOGIYAI', 'alt_nama' => 'KABUPATEN DOGIYAI', 'lat' => -4.031860, 'long' => 135.439450],

            ['id' => 9435, 'provinsi_id' => 94, 'nama' => 'KABUPATEN INTAN JAYA', 'alt_nama' => 'KABUPATEN INTAN JAYA', 'lat' => -3.410160, 'long' => 136.708370],

            ['id' => 9436, 'provinsi_id' => 94, 'nama' => 'KABUPATEN DEIYAI', 'alt_nama' => 'KABUPATEN DEIYAI', 'lat' => -3.947370, 'long' => 135.950320],

            ['id' => 9471, 'provinsi_id' => 94, 'nama' => 'KOTA JAYAPURA', 'alt_nama' => 'KOTA JAYAPURA', 'lat' => -2.646470, 'long' => 140.777790],


        ]);
    }
}
