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

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
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
        ]);
    }





    // (1601, 16, 'nama'=>'KABUPATEN OGAN KOMERING ULU', 'nama'=>'KABUPATEN OGAN KOMERING ULU', -4.133330, 104.033330);
    // (1602, 16, 'nama'=>'KABUPATEN OGAN KOMERING ILIR', 'nama'=>'KABUPATEN OGAN KOMERING ILIR', -3.366670, 105.366670);
    // (1603, 16, 'nama'=>'KABUPATEN MUARA ENIM', 'nama'=>'KABUPATEN MUARA ENIM', -4.232700, 103.614100);
    // (1604, 16, 'nama'=>'KABUPATEN LAHAT', 'nama'=>'KABUPATEN LAHAT', -3.786400, 103.542800);
    // (1605, 16, 'nama'=>'KABUPATEN MUSI RAWAS', 'nama'=>'KABUPATEN MUSI RAWAS', -3.083330, 103.200000);
    // (1606, 16, 'nama'=>'KABUPATEN MUSI BANYU ASIN', 'nama'=>'KABUPATEN MUSI BANYU ASIN', -2.416670, 103.750000);
    // (1607, 16, 'nama'=>'KABUPATEN BANYU ASIN', 'nama'=>'KABUPATEN BANYU ASIN', -2.883330, 104.383060);
    // (1608, 16, 'nama'=>'KABUPATEN OGAN KOMERING ULU SELATAN', 'nama'=>'KABUPATEN OGAN KOMERING ULU SELATAN', -4.657280, 104.006590);
    // (1609, 16, 'nama'=>'KABUPATEN OGAN KOMERING ULU TIMUR', 'nama'=>'KABUPATEN OGAN KOMERING ULU TIMUR', -3.856790, 104.752090);
    // (1610, 16, 'nama'=>'KABUPATEN OGAN ILIR', 'nama'=>'KABUPATEN OGAN ILIR', -3.431860, 104.627270);
    // (1611, 16, 'nama'=>'KABUPATEN EMPAT LAWANG', 'nama'=>'KABUPATEN EMPAT LAWANG', 3.226670, 99.092560);
    // (1612, 16, 'nama'=>'KABUPATEN PENUKAL ABAB LEMATANG ILIR', 'nama'=>'KABUPATEN PENUKAL ABAB LEMATANG ILIR', -3.213420, 104.087220);
    // (1613, 16, 'nama'=>'KABUPATEN MUSI RAWAS UTARA', 'nama'=>'KABUPATEN MUSI RAWAS UTARA', -2.485330, 103.293460);
    // (1671, 16, 'nama'=>'KOTA PALEMBANG', 'nama'=>'KOTA PALEMBANG', -3.000000, 104.716670);
    // (1672, 16, 'nama'=>'KOTA PRABUMULIH', 'nama'=>'KOTA PRABUMULIH', -3.462020, 104.222900);
    // (1673, 16, 'nama'=>'KOTA PAGAR ALAM', 'nama'=>'KOTA PAGAR ALAM', -4.130550, 103.268220);
    // (1674, 16, 'nama'=>'KOTA LUBUK LINGGAU', 'nama'=>'KOTA LUBUK LINGGAU', -3.293080, 102.855030);

    // (1701, 17, 'nama'=>'KABUPATEN BENGKULU SELATAN', 'nama'=>'KABUPATEN BENGKULU SELATAN', -4.350000, 103.033330);
    // (1702, 17, 'nama'=>'KABUPATEN REJANG LEBONG', 'nama'=>'KABUPATEN REJANG LEBONG', -3.433330, 102.716670);
    // (1703, 17, 'nama'=>'KABUPATEN BENGKULU UTARA', 'nama'=>'KABUPATEN BENGKULU UTARA', -3.333330, 102.050000);
    // (1704, 17, 'nama'=>'KABUPATEN KAUR', 'nama'=>'KABUPATEN KAUR', -4.781790, 103.361090);
    // (1705, 17, 'nama'=>'KABUPATEN SELUMA', 'nama'=>'KABUPATEN SELUMA', -3.966440, 102.474290);
    // (1706, 17, 'nama'=>'KABUPATEN MUKOMUKO', 'nama'=>'KABUPATEN MUKOMUKO', -3.074380, 101.547660);
    // (1707, 17, 'nama'=>'KABUPATEN LEBONG', 'nama'=>'KABUPATEN LEBONG', -3.242780, 102.334900);
    // (1708, 17, 'nama'=>'KABUPATEN KEPAHIANG', 'nama'=>'KABUPATEN KEPAHIANG', -3.601940, 102.564240);
    // (1709, 17, 'nama'=>'KABUPATEN BENGKULU TENGAH', 'nama'=>'KABUPATEN BENGKULU TENGAH', -3.206790, 102.126160);
    // (1771, 17, 'nama'=>'KOTA BENGKULU', 'nama'=>'KOTA BENGKULU', -3.816670, 102.316670);

    // (1801, 18, 'nama'=>'KABUPATEN LAMPUNG BARAT', 'nama'=>'KABUPATEN LAMPUNG BARAT', -5.149040, 104.193090);
    // (1802, 18, 'nama'=>'KABUPATEN TANGGAMUS', 'nama'=>'KABUPATEN TANGGAMUS', -5.385080, 104.623490);
    // (1803, 18, 'nama'=>'KABUPATEN LAMPUNG SELATAN', 'nama'=>'KABUPATEN LAMPUNG SELATAN', -5.453100, 104.987700);
    // (1804, 18, 'nama'=>'KABUPATEN LAMPUNG TIMUR', 'nama'=>'KABUPATEN LAMPUNG TIMUR', -5.102730, 105.680030);
    // (1805, 18, 'nama'=>'KABUPATEN LAMPUNG TENGAH', 'nama'=>'KABUPATEN LAMPUNG TENGAH', -4.866670, 105.266670);
    // (1806, 18, 'nama'=>'KABUPATEN LAMPUNG UTARA', 'nama'=>'KABUPATEN LAMPUNG UTARA', -4.816670, 104.800000);
    // (1807, 18, 'nama'=>'KABUPATEN WAY KANAN', 'nama'=>'KABUPATEN WAY KANAN', -4.447050, 104.527530);
    // (1808, 18, 'nama'=>'KABUPATEN TULANGBAWANG', 'nama'=>'KABUPATEN TULANGBAWANG', -4.206040, 105.579990);
    // (1809, 18, 'nama'=>'KABUPATEN PESAWARAN', 'nama'=>'KABUPATEN PESAWARAN', -5.429800, 105.178990);
    // (1810, 18, 'nama'=>'KABUPATEN PRINGSEWU', 'nama'=>'KABUPATEN PRINGSEWU', -5.422110, 104.934540);
    // (1811, 18, 'nama'=>'KABUPATEN MESUJI', 'nama'=>'KABUPATEN MESUJI', -4.043900, 105.401300);
    // (1812, 18, 'nama'=>'KABUPATEN TULANG BAWANG BARAT', 'nama'=>'KABUPATEN TULANG BAWANG BARAT', -4.439750, 105.044400);
    // (1813, 18, 'nama'=>'KABUPATEN PESISIR BARAT', 'nama'=>'KABUPATEN PESISIR BARAT', -5.193230, 103.939760);
    // (1871, 18, 'nama'=>'KOTA BANDAR LAMPUNG', 'nama'=>'KOTA BANDAR LAMPUNG', -5.416670, 105.250000);
    // (1872, 18, 'nama'=>'KOTA METRO', 'nama'=>'KOTA METRO', -5.118560, 105.299490);

    // (1901, 19, 'nama'=>'KABUPATEN BANGKA', 'nama'=>'KABUPATEN BANGKA', -1.916670, 105.933330);
    // (1902, 19, 'nama'=>'KABUPATEN BELITUNG', 'nama'=>'KABUPATEN BELITUNG', -2.866670, 107.700000);
    // (1903, 19, 'nama'=>'KABUPATEN BANGKA BARAT', 'nama'=>'KABUPATEN BANGKA BARAT', -1.958390, 105.537410);
    // (1904, 19, 'nama'=>'KABUPATEN BANGKA TENGAH', 'nama'=>'KABUPATEN BANGKA TENGAH', -2.339890, 106.114200);
    // (1905, 19, 'nama'=>'KABUPATEN BANGKA SELATAN', 'nama'=>'KABUPATEN BANGKA SELATAN', -2.668030, 106.012570);
    // (1906, 19, 'nama'=>'KABUPATEN BELITUNG TIMUR', 'nama'=>'KABUPATEN BELITUNG TIMUR', -2.962700, 108.152160);
    // (1971, 19, 'nama'=>'KOTA PANGKAL PINANG', 'nama'=>'KOTA PANGKAL PINANG', -2.133330, 106.133330);

    // (2101, 21, 'nama'=>'KABUPATEN KARIMUN', 'nama'=>'KABUPATEN KARIMUN', 0.807640, 103.419110);
    // (2102, 21, 'nama'=>'KABUPATEN BINTAN', 'nama'=>'KABUPATEN BINTAN', 0.950000, 104.619440);
    // (2103, 21, 'nama'=>'KABUPATEN NATUNA', 'nama'=>'KABUPATEN NATUNA', 4.714170, 107.976390);
    // (2104, 21, 'nama'=>'KABUPATEN LINGGA', 'nama'=>'KABUPATEN LINGGA', 0.200000, 104.616670);
    // (2105, 21, 'nama'=>'KABUPATEN KEPULAUAN ANAMBAS', 'nama'=>'KABUPATEN KEPULAUAN ANAMBAS', 3.000000, 106.000000);
    // (2171, 21, 'nama'=>'KOTA BATAM', 'nama'=>'KOTA BATAM', 1.052110, 104.028510);
    // (2172, 21, 'nama'=>'KOTA TANJUNG PINANG', 'nama'=>'KOTA TANJUNG PINANG', 0.916830, 104.443290);

    // (3101, 31, 'nama'=>'KABUPATEN KEPULAUAN SERIBU', 'nama'=>'KABUPATEN KEPULAUAN SERIBU', -5.598500, 106.552710);
    // (3171, 31, 'nama'=>'KOTA JAKARTA SELATAN', 'nama'=>'KOTA JAKARTA SELATAN', -6.266000, 106.813500);
    // (3172, 31, 'nama'=>'KOTA JAKARTA TIMUR', 'nama'=>'KOTA JAKARTA TIMUR', -6.252100, 106.884000);
    // (3173, 31, 'nama'=>'KOTA JAKARTA PUSAT', 'nama'=>'KOTA JAKARTA PUSAT', -6.177700, 106.840300);
    // (3174, 31, 'nama'=>'KOTA JAKARTA BARAT', 'nama'=>'KOTA JAKARTA BARAT', -6.167600, 106.767300);
    // (3175, 31, 'nama'=>'KOTA JAKARTA UTARA', 'nama'=>'KOTA JAKARTA UTARA', -6.133900, 106.882300);

    // (3201, 32, 'nama'=>'KABUPATEN BOGOR', 'nama'=>'KABUPATEN BOGOR', -6.583330, 106.716670);
    // (3202, 32, 'nama'=>'KABUPATEN SUKABUMI', 'nama'=>'KABUPATEN SUKABUMI', -7.066670, 106.700000);
    // (3203, 32, 'nama'=>'KABUPATEN CIANJUR', 'nama'=>'KABUPATEN CIANJUR', -6.772500, 107.083060);
    // (3204, 32, 'nama'=>'KABUPATEN BANDUNG', 'nama'=>'KABUPATEN BANDUNG', -7.100000, 107.600000);
    // (3205, 32, 'nama'=>'KABUPATEN GARUT', 'nama'=>'KABUPATEN GARUT', -7.383330, 107.766670);
    // (3206, 32, 'nama'=>'KABUPATEN TASIKMALAYA', 'nama'=>'KABUPATEN TASIKMALAYA', -7.500000, 108.133330);
    // (3207, 32, 'nama'=>'KABUPATEN CIAMIS', 'nama'=>'KABUPATEN CIAMIS', -7.283330, 108.416670);
    // (3208, 32, 'nama'=>'KABUPATEN KUNINGAN', 'nama'=>'KABUPATEN KUNINGAN', -7.000000, 108.550000);
    // (3209, 32, 'nama'=>'KABUPATEN CIREBON', 'nama'=>'KABUPATEN CIREBON', -6.800000, 108.566670);
    // (3210, 32, 'nama'=>'KABUPATEN MAJALENGKA', 'nama'=>'KABUPATEN MAJALENGKA', -6.816670, 108.283330);
    // (3211, 32, 'nama'=>'KABUPATEN SUMEDANG', 'nama'=>'KABUPATEN SUMEDANG', -6.816670, 107.983330);
    // (3212, 32, 'nama'=>'KABUPATEN INDRAMAYU', 'nama'=>'KABUPATEN INDRAMAYU', -6.450000, 108.166670);
    // (3213, 32, 'nama'=>'KABUPATEN SUBANG', 'nama'=>'KABUPATEN SUBANG', -6.508330, 107.702500);
    // (3214, 32, 'nama'=>'KABUPATEN PURWAKARTA', 'nama'=>'KABUPATEN PURWAKARTA', -6.583330, 107.450000);
    // (3215, 32, 'nama'=>'KABUPATEN KARAWANG', 'nama'=>'KABUPATEN KARAWANG', -6.266670, 107.416670);
    // (3216, 32, 'nama'=>'KABUPATEN BEKASI', 'nama'=>'KABUPATEN BEKASI', -6.246670, 107.108330);
    // (3217, 32, 'nama'=>'KABUPATEN BANDUNG BARAT', 'nama'=>'KABUPATEN BANDUNG BARAT', -6.833330, 107.483330);
    // (3218, 32, 'nama'=>'KABUPATEN PANGANDARAN', 'nama'=>'KABUPATEN PANGANDARAN', -7.667300, 108.640370);
    // (3271, 32, 'nama'=>'KOTA BOGOR', 'nama'=>'KOTA BOGOR', -6.591670, 106.800000);
    // (3272, 32, 'nama'=>'KOTA SUKABUMI', 'nama'=>'KOTA SUKABUMI', -6.950000, 106.933330);
    // (3273, 32, 'nama'=>'KOTA BANDUNG', 'nama'=>'KOTA BANDUNG', -6.917500, 107.624440);
    // (3274, 32, 'nama'=>'KOTA CIREBON', 'nama'=>'KOTA CIREBON', -6.750000, 108.550000);
    // (3275, 32, 'nama'=>'KOTA BEKASI', 'nama'=>'KOTA BEKASI', -6.283330, 106.983330);
    // (3276, 32, 'nama'=>'KOTA DEPOK', 'nama'=>'KOTA DEPOK', -6.400000, 106.816670);
    // (3277, 32, 'nama'=>'KOTA CIMAHI', 'nama'=>'KOTA CIMAHI', -6.891670, 107.550000);
    // (3278, 32, 'nama'=>'KOTA TASIKMALAYA', 'nama'=>'KOTA TASIKMALAYA', -7.350000, 108.216670);
    // (3279, 32, 'nama'=>'KOTA BANJAR', 'nama'=>'KOTA BANJAR', -7.369960, 108.532090);

    // (3301, 33, 'nama'=>'KABUPATEN CILACAP', 'nama'=>'KABUPATEN CILACAP', -7.574170, 108.988610);
    // (3302, 33, 'nama'=>'KABUPATEN BANYUMAS', 'nama'=>'KABUPATEN BANYUMAS', -7.450000, 109.166670);
    // (3303, 33, 'nama'=>'KABUPATEN PURBALINGGA', 'nama'=>'KABUPATEN PURBALINGGA', -7.284170, 109.350280);
    // (3304, 33, 'nama'=>'KABUPATEN BANJARNEGARA', 'nama'=>'KABUPATEN BANJARNEGARA', -7.351110, 109.587500);
    // (3305, 33, 'nama'=>'KABUPATEN KEBUMEN', 'nama'=>'KABUPATEN KEBUMEN', -7.639170, 109.660560);
    // (3306, 33, 'nama'=>'KABUPATEN PURWOREJO', 'nama'=>'KABUPATEN PURWOREJO', -7.700000, 109.966670);
    // (3307, 33, 'nama'=>'KABUPATEN WONOSOBO', 'nama'=>'KABUPATEN WONOSOBO', -7.361390, 109.926670);
    // (3308, 33, 'nama'=>'KABUPATEN MAGELANG', 'nama'=>'KABUPATEN MAGELANG', -7.427500, 110.161940);
    // (3309, 33, 'nama'=>'KABUPATEN BOYOLALI', 'nama'=>'KABUPATEN BOYOLALI', -7.500000, 110.700000);
    // (3310, 33, 'nama'=>'KABUPATEN KLATEN', 'nama'=>'KABUPATEN KLATEN', -7.683330, 110.616670);
    // (3311, 33, 'nama'=>'KABUPATEN SUKOHARJO', 'nama'=>'KABUPATEN SUKOHARJO', -7.683330, 110.833330);
    // (3312, 33, 'nama'=>'KABUPATEN WONOGIRI', 'nama'=>'KABUPATEN WONOGIRI', -7.916670, 111.000000);
    // (3313, 33, 'nama'=>'KABUPATEN KARANGANYAR', 'nama'=>'KABUPATEN KARANGANYAR', -7.628060, 111.062500);
    // (3314, 33, 'nama'=>'KABUPATEN SRAGEN', 'nama'=>'KABUPATEN SRAGEN', -7.412780, 110.935000);
    // (3315, 33, 'nama'=>'KABUPATEN GROBOGAN', 'nama'=>'KABUPATEN GROBOGAN', -7.116670, 110.916670);
    // (3316, 33, 'nama'=>'KABUPATEN BLORA', 'nama'=>'KABUPATEN BLORA', -7.066670, 111.383330);
    // (3317, 33, 'nama'=>'KABUPATEN REMBANG', 'nama'=>'KABUPATEN REMBANG', -6.783330, 111.466670);
    // (3318, 33, 'nama'=>'KABUPATEN PATI', 'nama'=>'KABUPATEN PATI', -6.766670, 111.100000);
    // (3319, 33, 'nama'=>'KABUPATEN KUDUS', 'nama'=>'KABUPATEN KUDUS', -6.800000, 110.866670);
    // (3320, 33, 'nama'=>'KABUPATEN JEPARA', 'nama'=>'KABUPATEN JEPARA', -6.583330, 110.766670);
    // (3321, 33, 'nama'=>'KABUPATEN DEMAK', 'nama'=>'KABUPATEN DEMAK', -6.899300, 110.612200);
    // (3322, 33, 'nama'=>'KABUPATEN SEMARANG', 'nama'=>'KABUPATEN SEMARANG', -7.206670, 110.441390);
    // (3323, 33, 'nama'=>'KABUPATEN TEMANGGUNG', 'nama'=>'KABUPATEN TEMANGGUNG', -7.250000, 110.116670);
    // (3324, 33, 'nama'=>'KABUPATEN KENDAL', 'nama'=>'KABUPATEN KENDAL', -7.025600, 110.168500);
    // (3325, 33, 'nama'=>'KABUPATEN BATANG', 'nama'=>'KABUPATEN BATANG', -7.033330, 109.883330);
    // (3326, 33, 'nama'=>'KABUPATEN PEKALONGAN', 'nama'=>'KABUPATEN PEKALONGAN', -7.031900, 109.624000);
    // (3327, 33, 'nama'=>'KABUPATEN PEMALANG', 'nama'=>'KABUPATEN PEMALANG', -7.033330, 109.400000);
    // (3328, 33, 'nama'=>'KABUPATEN TEGAL', 'nama'=>'KABUPATEN TEGAL', -7.033330, 109.166670);
    // (3329, 33, 'nama'=>'KABUPATEN BREBES', 'nama'=>'KABUPATEN BREBES', -7.050000, 108.900000);
    // (3371, 33, 'nama'=>'KOTA MAGELANG', 'nama'=>'KOTA MAGELANG', -7.500000, 110.225000);
    // (3372, 33, 'nama'=>'KOTA SURAKARTA', 'nama'=>'KOTA SURAKARTA', -7.550000, 110.816670);
    // (3373, 33, 'nama'=>'KOTA SALATIGA', 'nama'=>'KOTA SALATIGA', -7.332780, 110.483330);
    // (3374, 33, 'nama'=>'KOTA SEMARANG', 'nama'=>'KOTA SEMARANG', -7.033330, 110.383330);
    // (3375, 33, 'nama'=>'KOTA PEKALONGAN', 'nama'=>'KOTA PEKALONGAN', -6.900000, 109.683330);
    // (3376, 33, 'nama'=>'KOTA TEGAL', 'nama'=>'KOTA TEGAL', -6.868600, 109.112900);

    // (3401, 34, 'nama'=>'KABUPATEN KULON PROGO', 'nama'=>'KABUPATEN KULON PROGO', -7.645000, 110.026940);
    // (3402, 34, 'nama'=>'KABUPATEN BANTUL', 'nama'=>'KABUPATEN BANTUL', -7.900000, 110.366670);
    // (3403, 34, 'nama'=>'KABUPATEN GUNUNG KIDUL', 'nama'=>'KABUPATEN GUNUNG KIDUL', -7.983330, 110.616670);
    // (3404, 34, 'nama'=>'KABUPATEN SLEMAN', 'nama'=>'KABUPATEN SLEMAN', -7.681670, 110.323330);
    // (3471, 34, 'nama'=>'KOTA YOGYAKARTA', 'nama'=>'KOTA YOGYAKARTA', -7.800000, 110.375000);

    // (3501, 35, 'nama'=>'KABUPATEN PACITAN', 'nama'=>'KABUPATEN PACITAN', -8.133330, 111.166670);
    // (3502, 35, 'nama'=>'KABUPATEN PONOROGO', 'nama'=>'KABUPATEN PONOROGO', -7.933330, 111.500000);
    // (3503, 35, 'nama'=>'KABUPATEN TRENGGALEK', 'nama'=>'KABUPATEN TRENGGALEK', -8.166670, 111.616670);
    // (3504, 35, 'nama'=>'KABUPATEN TULUNGAGUNG', 'nama'=>'KABUPATEN TULUNGAGUNG', -8.116670, 111.916670);
    // (3505, 35, 'nama'=>'KABUPATEN BLITAR', 'nama'=>'KABUPATEN BLITAR', -8.133330, 112.250000);
    // (3506, 35, 'nama'=>'KABUPATEN KEDIRI', 'nama'=>'KABUPATEN KEDIRI', -7.833330, 112.166670);
    // (3507, 35, 'nama'=>'KABUPATEN MALANG', 'nama'=>'KABUPATEN MALANG', -8.166670, 112.666670);
    // (3508, 35, 'nama'=>'KABUPATEN LUMAJANG', 'nama'=>'KABUPATEN LUMAJANG', -8.116670, 113.150000);
    // (3509, 35, 'nama'=>'KABUPATEN JEMBER', 'nama'=>'KABUPATEN JEMBER', -8.250000, 113.650000);
    // (3510, 35, 'nama'=>'KABUPATEN BANYUWANGI', 'nama'=>'KABUPATEN BANYUWANGI', -8.333330, 114.200000);
    // (3511, 35, 'nama'=>'KABUPATEN BONDOWOSO', 'nama'=>'KABUPATEN BONDOWOSO', -7.940400, 113.983400);
    // (3512, 35, 'nama'=>'KABUPATEN SITUBONDO', 'nama'=>'KABUPATEN SITUBONDO', -7.716670, 114.050000);
    // (3513, 35, 'nama'=>'KABUPATEN PROBOLINGGO', 'nama'=>'KABUPATEN PROBOLINGGO', -7.866670, 113.316670);
    // (3514, 35, 'nama'=>'KABUPATEN PASURUAN', 'nama'=>'KABUPATEN PASURUAN', -7.733330, 112.833330);
    // (3515, 35, 'nama'=>'KABUPATEN SIDOARJO', 'nama'=>'KABUPATEN SIDOARJO', -7.450000, 112.700000);
    // (3516, 35, 'nama'=>'KABUPATEN MOJOKERTO', 'nama'=>'KABUPATEN MOJOKERTO', -7.550000, 112.500000);
    // (3517, 35, 'nama'=>'KABUPATEN JOMBANG', 'nama'=>'KABUPATEN JOMBANG', -7.550000, 112.250000);
    // (3518, 35, 'nama'=>'KABUPATEN NGANJUK', 'nama'=>'KABUPATEN NGANJUK', -7.600000, 111.933330);
    // (3519, 35, 'nama'=>'KABUPATEN MADIUN', 'nama'=>'KABUPATEN MADIUN', -7.616670, 111.650000);
    // (3520, 35, 'nama'=>'KABUPATEN MAGETAN', 'nama'=>'KABUPATEN MAGETAN', -7.644720, 111.359170);
    // (3521, 35, 'nama'=>'KABUPATEN NGAWI', 'nama'=>'KABUPATEN NGAWI', -7.474440, 111.334440);
    // (3522, 35, 'nama'=>'KABUPATEN BOJONEGORO', 'nama'=>'KABUPATEN BOJONEGORO', -7.250000, 111.800000);
    // (3523, 35, 'nama'=>'KABUPATEN TUBAN', 'nama'=>'KABUPATEN TUBAN', -6.966670, 111.900000);
    // (3524, 35, 'nama'=>'KABUPATEN LAMONGAN', 'nama'=>'KABUPATEN LAMONGAN', -7.133330, 112.316670);
    // (3525, 35, 'nama'=>'KABUPATEN GRESIK', 'nama'=>'KABUPATEN GRESIK', -7.193300, 112.553000);
    // (3526, 35, 'nama'=>'KABUPATEN BANGKALAN', 'nama'=>'KABUPATEN BANGKALAN', -7.050000, 112.933330);
    // (3527, 35, 'nama'=>'KABUPATEN SAMPANG', 'nama'=>'KABUPATEN SAMPANG', -7.050000, 113.250000);
    // (3528, 35, 'nama'=>'KABUPATEN PAMEKASAN', 'nama'=>'KABUPATEN PAMEKASAN', -7.066670, 113.500000);
    // (3529, 35, 'nama'=>'KABUPATEN SUMENEP', 'nama'=>'KABUPATEN SUMENEP', -7.116670, 114.333330);
    // (3571, 35, 'nama'=>'KOTA KEDIRI', 'nama'=>'KOTA KEDIRI', -7.833330, 112.016670);
    // (3572, 35, 'nama'=>'KOTA BLITAR', 'nama'=>'KOTA BLITAR', -8.100000, 112.166670);
    // (3573, 35, 'nama'=>'KOTA MALANG', 'nama'=>'KOTA MALANG', -7.975000, 112.633330);
    // (3574, 35, 'nama'=>'KOTA PROBOLINGGO', 'nama'=>'KOTA PROBOLINGGO', -7.783330, 113.216670);
    // (3575, 35, 'nama'=>'KOTA PASURUAN', 'nama'=>'KOTA PASURUAN', -7.650000, 112.900000);
    // (3576, 35, 'nama'=>'KOTA MOJOKERTO', 'nama'=>'KOTA MOJOKERTO', -7.466670, 112.433330);
    // (3577, 35, 'nama'=>'KOTA MADIUN', 'nama'=>'KOTA MADIUN', -7.633330, 111.533330);
    // (3578, 35, 'nama'=>'KOTA SURABAYA', 'nama'=>'KOTA SURABAYA', -7.266670, 112.716670);
    // (3579, 35, 'nama'=>'KOTA BATU', 'nama'=>'KOTA BATU', -7.832720, 112.537510);

    // (3601, 36, 'nama'=>'KABUPATEN PANDEGLANG', 'nama'=>'KABUPATEN PANDEGLANG', -6.633330, 105.750000);
    // (3602, 36, 'nama'=>'KABUPATEN LEBAK', 'nama'=>'KABUPATEN LEBAK', -6.650000, 106.216670);
    // (3603, 36, 'nama'=>'KABUPATEN TANGERANG', 'nama'=>'KABUPATEN TANGERANG', -6.200000, 106.466670);
    // (3604, 36, 'nama'=>'KABUPATEN SERANG', 'nama'=>'KABUPATEN SERANG', -6.150000, 106.000000);
    // (3671, 36, 'nama'=>'KOTA TANGERANG', 'nama'=>'KOTA TANGERANG', -6.179440, 106.629910);
    // (3672, 36, 'nama'=>'KOTA CILEGON', 'nama'=>'KOTA CILEGON', -6.016670, 106.016670);
    // (3673, 36, 'nama'=>'KOTA SERANG', 'nama'=>'KOTA SERANG', -6.125630, 106.149990);
    // (3674, 36, 'nama'=>'KOTA TANGERANG SELATAN', 'nama'=>'KOTA TANGERANG SELATAN', -6.293730, 106.712440);

    // (5101, 51, 'nama'=>'KABUPATEN JEMBRANA', 'nama'=>'KABUPATEN JEMBRANA', -8.300000, 114.666670);
    // (5102, 51, 'nama'=>'KABUPATEN TABANAN', 'nama'=>'KABUPATEN TABANAN', -8.433330, 115.066670);
    // (5103, 51, 'nama'=>'KABUPATEN BADUNG', 'nama'=>'KABUPATEN BADUNG', -8.516670, 115.200000);
    // (5104, 51, 'nama'=>'KABUPATEN GIANYAR', 'nama'=>'KABUPATEN GIANYAR', -8.466670, 115.283330);
    // (5105, 51, 'nama'=>'KABUPATEN KLUNGKUNG', 'nama'=>'KABUPATEN KLUNGKUNG', -8.550000, 115.400000);
    // (5106, 51, 'nama'=>'KABUPATEN BANGLI', 'nama'=>'KABUPATEN BANGLI', -8.283330, 115.350000);
    // (5107, 51, 'nama'=>'KABUPATEN KARANG ASEM', 'nama'=>'KABUPATEN KARANG ASEM', -8.389100, 115.539300);
    // (5108, 51, 'nama'=>'KABUPATEN BULELENG', 'nama'=>'KABUPATEN BULELENG', -8.250000, 114.966670);
    // (5171, 51, 'nama'=>'KOTA DENPASAR', 'nama'=>'KOTA DENPASAR', -8.666670, 115.216630);

    // (5201, 52, 'nama'=>'KABUPATEN LOMBOK BARAT', 'nama'=>'KABUPATEN LOMBOK BARAT', -8.695830, 116.116670);
    // (5202, 52, 'nama'=>'KABUPATEN LOMBOK TENGAH', 'nama'=>'KABUPATEN LOMBOK TENGAH', -8.700000, 116.300000);
    // (5203, 52, 'nama'=>'KABUPATEN LOMBOK TIMUR', 'nama'=>'KABUPATEN LOMBOK TIMUR', -8.533330, 116.533330);
    // (5204, 52, 'nama'=>'KABUPATEN SUMBAWA', 'nama'=>'KABUPATEN SUMBAWA', -8.743900, 117.332400);
    // (5205, 52, 'nama'=>'KABUPATEN DOMPU', 'nama'=>'KABUPATEN DOMPU', -8.509400, 118.481600);
    // (5206, 52, 'nama'=>'KABUPATEN BIMA', 'nama'=>'KABUPATEN BIMA', -8.600000, 118.616670);
    // (5207, 52, 'nama'=>'KABUPATEN SUMBAWA BARAT', 'nama'=>'KABUPATEN SUMBAWA BARAT', -8.751590, 116.921320);
    // (5208, 52, 'nama'=>'KABUPATEN LOMBOK UTARA', 'nama'=>'KABUPATEN LOMBOK UTARA', -8.352140, 116.401520);
    // (5271, 52, 'nama'=>'KOTA MATARAM', 'nama'=>'KOTA MATARAM', -8.583300, 116.116700);
    // (5272, 52, 'nama'=>'KOTA BIMA', 'nama'=>'KOTA BIMA', -8.467280, 118.752590);

    // (5301, 53, 'nama'=>'KABUPATEN SUMBA BARAT', 'nama'=>'KABUPATEN SUMBA BARAT', -9.566670, 119.450000);
    // (5302, 53, 'nama'=>'KABUPATEN SUMBA TIMUR', 'nama'=>'KABUPATEN SUMBA TIMUR', -9.883330, 120.250000);
    // (5303, 53, 'nama'=>'KABUPATEN KUPANG', 'nama'=>'KABUPATEN KUPANG', -9.916670, 123.833330);
    // (5304, 53, 'nama'=>'KABUPATEN TIMOR TENGAH SELATAN', 'nama'=>'KABUPATEN TIMOR TENGAH SELATAN', -9.833330, 124.400000);
    // (5305, 53, 'nama'=>'KABUPATEN TIMOR TENGAH UTARA', 'nama'=>'KABUPATEN TIMOR TENGAH UTARA', -9.331360, 124.519040);
    // (5306, 53, 'nama'=>'KABUPATEN BELU', 'nama'=>'KABUPATEN BELU', -9.412580, 124.950660);
    // (5307, 53, 'nama'=>'KABUPATEN ALOR', 'nama'=>'KABUPATEN ALOR', -8.300000, 124.566670);
    // (5308, 53, 'nama'=>'KABUPATEN LEMBATA', 'nama'=>'KABUPATEN LEMBATA', -8.413960, 123.552250);
    // (5309, 53, 'nama'=>'KABUPATEN FLORES TIMUR', 'nama'=>'KABUPATEN FLORES TIMUR', -8.242240, 122.968170);
    // (5310, 53, 'nama'=>'KABUPATEN SIKKA', 'nama'=>'KABUPATEN SIKKA', -8.666670, 122.366670);
    // (5311, 53, 'nama'=>'KABUPATEN ENDE', 'nama'=>'KABUPATEN ENDE', -8.840560, 121.663890);
    // (5312, 53, 'nama'=>'KABUPATEN NGADA', 'nama'=>'KABUPATEN NGADA', -8.666670, 121.000000);
    // (5313, 53, 'nama'=>'KABUPATEN MANGGARAI', 'nama'=>'KABUPATEN MANGGARAI', -8.566670, 120.416670);
    // (5314, 53, 'nama'=>'KABUPATEN ROTE NDAO', 'nama'=>'KABUPATEN ROTE NDAO', -10.736170, 123.120540);
    // (5315, 53, 'nama'=>'KABUPATEN MANGGARAI BARAT', 'nama'=>'KABUPATEN MANGGARAI BARAT', -8.644840, 119.882810);
    // (5316, 53, 'nama'=>'KABUPATEN SUMBA TENGAH', 'nama'=>'KABUPATEN SUMBA TENGAH', -9.629410, 119.619140);
    // (5317, 53, 'nama'=>'KABUPATEN SUMBA BARAT DAYA', 'nama'=>'KABUPATEN SUMBA BARAT DAYA', -9.562160, 119.089050);
    // (5318, 53, 'nama'=>'KABUPATEN NAGEKEO', 'nama'=>'KABUPATEN NAGEKEO', -8.872100, 121.209630);
    // (5319, 53, 'nama'=>'KABUPATEN MANGGARAI TIMUR', 'nama'=>'KABUPATEN MANGGARAI TIMUR', -8.555330, 120.597610);
    // (5320, 53, 'nama'=>'KABUPATEN SABU RAIJUA', 'nama'=>'KABUPATEN SABU RAIJUA', -10.562860, 121.788940);
    // (5321, 53, 'nama'=>'KABUPATEN MALAKA', 'nama'=>'KABUPATEN MALAKA', -9.563200, 124.894810);
    // (5371, 53, 'nama'=>'KOTA KUPANG', 'nama'=>'KOTA KUPANG', -10.216670, 123.600000);

    // (6101, 61, 'nama'=>'KABUPATEN SAMBAS', 'nama'=>'KABUPATEN SAMBAS', 1.416670, 109.333330);
    // (6102, 61, 'nama'=>'KABUPATEN BENGKAYANG', 'nama'=>'KABUPATEN BENGKAYANG', 1.069110, 109.663930);
    // (6103, 61, 'nama'=>'KABUPATEN LANDAK', 'nama'=>'KABUPATEN LANDAK', 0.423730, 109.759170);
    // (6104, 61, 'nama'=>'KABUPATEN MEMPAWAH', 'nama'=>'KABUPATEN MEMPAWAH', 0.250000, 109.166670);
    // (6105, 61, 'nama'=>'KABUPATEN SANGGAU', 'nama'=>'KABUPATEN SANGGAU', 0.254720, 110.450000);
    // (6106, 61, 'nama'=>'KABUPATEN KETAPANG', 'nama'=>'KABUPATEN KETAPANG', -1.583330, 110.500000);
    // (6107, 61, 'nama'=>'KABUPATEN SINTANG', 'nama'=>'KABUPATEN SINTANG', -0.083330, 112.083330);
    // (6108, 61, 'nama'=>'KABUPATEN KAPUAS HULU', 'nama'=>'KABUPATEN KAPUAS HULU', 0.816670, 112.766670);
    // (6109, 61, 'nama'=>'KABUPATEN SEKADAU', 'nama'=>'KABUPATEN SEKADAU', 0.034850, 110.950660);
    // (6110, 61, 'nama'=>'KABUPATEN MELAWI', 'nama'=>'KABUPATEN MELAWI', -0.336170, 111.698000);
    // (6111, 61, 'nama'=>'KABUPATEN KAYONG UTARA', 'nama'=>'KABUPATEN KAYONG UTARA', -1.437110, 110.797810);
    // (6112, 61, 'nama'=>'KABUPATEN KUBU RAYA', 'nama'=>'KABUPATEN KUBU RAYA', 0.016370, 109.337310);
    // (6171, 61, 'nama'=>'KOTA PONTIANAK', 'nama'=>'KOTA PONTIANAK', -0.083330, 109.366670);
    // (6172, 61, 'nama'=>'KOTA SINGKAWANG', 'nama'=>'KOTA SINGKAWANG', 0.907340, 109.001030);

    // (6201, 62, 'nama'=>'KABUPATEN KOTAWARINGIN BARAT', 'nama'=>'KABUPATEN KOTAWARINGIN BARAT', -2.400000, 111.733330);
    // (6202, 62, 'nama'=>'KABUPATEN KOTAWARINGIN TIMUR', 'nama'=>'KABUPATEN KOTAWARINGIN TIMUR', -2.083330, 112.750000);
    // (6203, 62, 'nama'=>'KABUPATEN KAPUAS', 'nama'=>'KABUPATEN KAPUAS', -2.016670, 114.383330);
    // (6204, 62, 'nama'=>'KABUPATEN BARITO SELATAN', 'nama'=>'KABUPATEN BARITO SELATAN', -1.866670, 114.733330);
    // (6205, 62, 'nama'=>'KABUPATEN BARITO UTARA', 'nama'=>'KABUPATEN BARITO UTARA', -0.983330, 115.100000);
    // (6206, 62, 'nama'=>'KABUPATEN SUKAMARA', 'nama'=>'KABUPATEN SUKAMARA', -2.626750, 111.236810);
    // (6207, 62, 'nama'=>'KABUPATEN LAMANDAU', 'nama'=>'KABUPATEN LAMANDAU', -1.838280, 111.286900);
    // (6208, 62, 'nama'=>'KABUPATEN SERUYAN', 'nama'=>'KABUPATEN SERUYAN', -2.333330, 112.250000);
    // (6209, 62, 'nama'=>'KABUPATEN KATINGAN', 'nama'=>'KABUPATEN KATINGAN', -2.066670, 113.400000);
    // (6210, 62, 'nama'=>'KABUPATEN PULANG PISAU', 'nama'=>'KABUPATEN PULANG PISAU', -3.118580, 113.862300);
    // (6211, 62, 'nama'=>'KABUPATEN GUNUNG MAS', 'nama'=>'KABUPATEN GUNUNG MAS', -0.950000, 113.500000);
    // (6212, 62, 'nama'=>'KABUPATEN BARITO TIMUR', 'nama'=>'KABUPATEN BARITO TIMUR', -1.933330, 115.100000);
    // (6213, 62, 'nama'=>'KABUPATEN MURUNG RAYA', 'nama'=>'KABUPATEN MURUNG RAYA', -0.016670, 114.266670);
    // (6271, 62, 'nama'=>'KOTA PALANGKA RAYA', 'nama'=>'KOTA PALANGKA RAYA', -1.769790, 113.731260);

    // (6301, 63, 'nama'=>'KABUPATEN TANAH LAUT', 'nama'=>'KABUPATEN TANAH LAUT', -3.883330, 114.866670);
    // (6302, 63, 'nama'=>'KABUPATEN KOTA BARU', 'nama'=>'KABUPATEN KOTA BARU', -3.000000, 116.000000);
    // (6303, 63, 'nama'=>'KABUPATEN BANJAR', 'nama'=>'KABUPATEN BANJAR', -3.316670, 115.083330);
    // (6304, 63, 'nama'=>'KABUPATEN BARITO KUALA', 'nama'=>'KABUPATEN BARITO KUALA', -3.083330, 114.616670);
    // (6305, 63, 'nama'=>'KABUPATEN TAPIN', 'nama'=>'KABUPATEN TAPIN', -2.916670, 115.033330);
    // (6306, 63, 'nama'=>'KABUPATEN HULU SUNGAI SELATAN', 'nama'=>'KABUPATEN HULU SUNGAI SELATAN', -2.750000, 115.200000);
    // (6307, 63, 'nama'=>'KABUPATEN HULU SUNGAI TENGAH', 'nama'=>'KABUPATEN HULU SUNGAI TENGAH', -2.616670, 115.416670);
    // (6308, 63, 'nama'=>'KABUPATEN HULU SUNGAI UTARA', 'nama'=>'KABUPATEN HULU SUNGAI UTARA', -2.450000, 115.133330);
    // (6309, 63, 'nama'=>'KABUPATEN TABALONG', 'nama'=>'KABUPATEN TABALONG', -1.883330, 115.500000);
    // (6310, 63, 'nama'=>'KABUPATEN TANAH BUMBU', 'nama'=>'KABUPATEN TANAH BUMBU', -3.454130, 115.703720);
    // (6311, 63, 'nama'=>'KABUPATEN BALANGAN', 'nama'=>'KABUPATEN BALANGAN', -2.323140, 115.629220);
    // (6371, 63, 'nama'=>'KOTA BANJARMASIN', 'nama'=>'KOTA BANJARMASIN', -3.324440, 114.591020);
    // (6372, 63, 'nama'=>'KOTA BANJAR BARU', 'nama'=>'KOTA BANJAR BARU', -3.416670, 114.833330);

    // (6401, 64, 'nama'=>'KABUPATEN PASER', 'nama'=>'KABUPATEN PASER', -1.435170, 116.235350);
    // (6402, 64, 'nama'=>'KABUPATEN KUTAI BARAT', 'nama'=>'KABUPATEN KUTAI BARAT', -0.594170, 115.515750);
    // (6403, 64, 'nama'=>'KABUPATEN KUTAI KARTANEGARA', 'nama'=>'KABUPATEN KUTAI KARTANEGARA', -0.440190, 116.981390);
    // (6404, 64, 'nama'=>'KABUPATEN KUTAI TIMUR', 'nama'=>'KABUPATEN KUTAI TIMUR', 1.037690, 117.831120);
    // (6405, 64, 'nama'=>'KABUPATEN BERAU', 'nama'=>'KABUPATEN BERAU', 2.000000, 117.300000);
    // (6409, 64, 'nama'=>'KABUPATEN PENAJAM PASER UTARA', 'nama'=>'KABUPATEN PENAJAM PASER UTARA', -1.250000, 116.833330);
    // (6411, 64, 'nama'=>'KABUPATEN MAHAKAM HULU', 'nama'=>'KABUPATEN MAHAKAM HULU', 0.378220, 115.380480);
    // (6471, 64, 'nama'=>'KOTA BALIKPAPAN', 'nama'=>'KOTA BALIKPAPAN', -1.166670, 116.883330);
    // (6472, 64, 'nama'=>'KOTA SAMARINDA', 'nama'=>'KOTA SAMARINDA', -0.433330, 117.183330);
    // (6474, 64, 'nama'=>'KOTA BONTANG', 'nama'=>'KOTA BONTANG', 0.125260, 117.496030);

    // (6501, 65, 'nama'=>'KABUPATEN MALINAU', 'nama'=>'KABUPATEN MALINAU', 2.450000, 115.683330);
    // (6502, 65, 'nama'=>'KABUPATEN BULUNGAN', 'nama'=>'KABUPATEN BULUNGAN', 3.000000, 117.166670);
    // (6503, 65, 'nama'=>'KABUPATEN TANA TIDUNG', 'nama'=>'KABUPATEN TANA TIDUNG', 3.550000, 117.250000);
    // (6504, 65, 'nama'=>'KABUPATEN NUNUKAN', 'nama'=>'KABUPATEN NUNUKAN', 4.133330, 116.700000);
    // (6571, 65, 'nama'=>'KOTA TARAKAN', 'nama'=>'KOTA TARAKAN', 3.366670, 117.600000);

    // (7101, 71, 'nama'=>'KABUPATEN BOLAANG MONGONDOW', 'nama'=>'KABUPATEN BOLAANG MONGONDOW', 0.750000, 124.083330);
    // (7102, 71, 'nama'=>'KABUPATEN MINAHASA', 'nama'=>'KABUPATEN MINAHASA', 1.253700, 124.830000);
    // (7103, 71, 'nama'=>'KABUPATEN KEPULAUAN SANGIHE', 'nama'=>'KABUPATEN KEPULAUAN SANGIHE', 3.500000, 125.550000);
    // (7104, 71, 'nama'=>'KABUPATEN KEPULAUAN TALAUD', 'nama'=>'KABUPATEN KEPULAUAN TALAUD', 4.311780, 126.780850);
    // (7105, 71, 'nama'=>'KABUPATEN MINAHASA SELATAN', 'nama'=>'KABUPATEN MINAHASA SELATAN', 1.212910, 124.597080);
    // (7106, 71, 'nama'=>'KABUPATEN MINAHASA UTARA', 'nama'=>'KABUPATEN MINAHASA UTARA', 1.402500, 124.960000);
    // (7107, 71, 'nama'=>'KABUPATEN BOLAANG MONGONDOW UTARA', 'nama'=>'KABUPATEN BOLAANG MONGONDOW UTARA', 0.785270, 123.417660);
    // (7108, 71, 'nama'=>'KABUPATEN SIAU TAGULANDANG BIARO', 'nama'=>'KABUPATEN SIAU TAGULANDANG BIARO', 2.117280, 125.375120);
    // (7109, 71, 'nama'=>'KABUPATEN MINAHASA TENGGARA', 'nama'=>'KABUPATEN MINAHASA TENGGARA', 1.056330, 124.792500);
    // (7110, 71, 'nama'=>'KABUPATEN BOLAANG MONGONDOW SELATAN', 'nama'=>'KABUPATEN BOLAANG MONGONDOW SELATAN', 0.409120, 123.759610);
    // (7111, 71, 'nama'=>'KABUPATEN BOLAANG MONGONDOW TIMUR', 'nama'=>'KABUPATEN BOLAANG MONGONDOW TIMUR', 0.720730, 124.502560);
    // (7171, 71, 'nama'=>'KOTA MANADO', 'nama'=>'KOTA MANADO', 1.516670, 124.883330);
    // (7172, 71, 'nama'=>'KOTA BITUNG', 'nama'=>'KOTA BITUNG', 1.483330, 125.150000);
    // (7173, 71, 'nama'=>'KOTA TOMOHON', 'nama'=>'KOTA TOMOHON', 1.313070, 124.834040);
    // (7174, 71, 'nama'=>'KOTA KOTAMOBAGU', 'nama'=>'KOTA KOTAMOBAGU', 0.689150, 124.326780);

    // (7201, 72, 'nama'=>'KABUPATEN BANGGAI KEPULAUAN', 'nama'=>'KABUPATEN BANGGAI KEPULAUAN', -1.642400, 123.548810);
    // (7202, 72, 'nama'=>'KABUPATEN BANGGAI', 'nama'=>'KABUPATEN BANGGAI', -1.283500, 122.889200);
    // (7203, 72, 'nama'=>'KABUPATEN MOROWALI', 'nama'=>'KABUPATEN MOROWALI', -1.893420, 121.254730);
    // (7204, 72, 'nama'=>'KABUPATEN POSO', 'nama'=>'KABUPATEN POSO', -1.650000, 120.500000);
    // (7205, 72, 'nama'=>'KABUPATEN DONGGALA', 'nama'=>'KABUPATEN DONGGALA', -0.583330, 119.850000);
    // (7206, 72, 'nama'=>'KABUPATEN TOLI-TOLI', 'nama'=>'KABUPATEN TOLI-TOLI', 1.308620, 120.886430);
    // (7207, 72, 'nama'=>'KABUPATEN BUOL', 'nama'=>'KABUPATEN BUOL', 0.750000, 120.750000);
    // (7208, 72, 'nama'=>'KABUPATEN PARIGI MOUTONG', 'nama'=>'KABUPATEN PARIGI MOUTONG', 0.336800, 120.178410);
    // (7209, 72, 'nama'=>'KABUPATEN TOJO UNA-UNA', 'nama'=>'KABUPATEN TOJO UNA-UNA', -1.203600, 121.482010);
    // (7210, 72, 'nama'=>'KABUPATEN SIGI', 'nama'=>'KABUPATEN SIGI', -1.385000, 119.966940);
    // (7211, 72, 'nama'=>'KABUPATEN BANGGAI LAUT', 'nama'=>'KABUPATEN BANGGAI LAUT', -1.618410, 123.493880);
    // (7212, 72, 'nama'=>'KABUPATEN MOROWALI UTARA', 'nama'=>'KABUPATEN MOROWALI UTARA', -1.720700, 121.246490);
    // (7271, 72, 'nama'=>'KOTA PALU', 'nama'=>'KOTA PALU', -0.869720, 119.900000);

    // (7301, 73, 'nama'=>'KABUPATEN KEPULAUAN SELAYAR', 'nama'=>'KABUPATEN KEPULAUAN SELAYAR', -6.816670, 120.800000);
    // (7302, 73, 'nama'=>'KABUPATEN BULUKUMBA', 'nama'=>'KABUPATEN BULUKUMBA', -5.416670, 120.233330);
    // (7303, 73, 'nama'=>'KABUPATEN BANTAENG', 'nama'=>'KABUPATEN BANTAENG', -5.483330, 119.983330);
    // (7304, 73, 'nama'=>'KABUPATEN JENEPONTO', 'nama'=>'KABUPATEN JENEPONTO', -5.633330, 119.733330);
    // (7305, 73, 'nama'=>'KABUPATEN TAKALAR', 'nama'=>'KABUPATEN TAKALAR', -5.416670, 119.516670);
    // (7306, 73, 'nama'=>'KABUPATEN GOWA', 'nama'=>'KABUPATEN GOWA', -5.316670, 119.750000);
    // (7307, 73, 'nama'=>'KABUPATEN SINJAI', 'nama'=>'KABUPATEN SINJAI', -5.216670, 120.150000);
    // (7308, 73, 'nama'=>'KABUPATEN MAROS', 'nama'=>'KABUPATEN MAROS', -5.050000, 119.716670);
    // (7309, 73, 'nama'=>'KABUPATEN PANGKAJENE DAN KEPULAUAN', 'nama'=>'KABUPATEN PANGKAJENE DAN KEPULAUAN', -4.782700, 119.550600);
    // (7310, 73, 'nama'=>'KABUPATEN BARRU', 'nama'=>'KABUPATEN BARRU', -4.433330, 119.683330);
    // (7311, 73, 'nama'=>'KABUPATEN BONE', 'nama'=>'KABUPATEN BONE', -4.700000, 120.133330);
    // (7312, 73, 'nama'=>'KABUPATEN SOPPENG', 'nama'=>'KABUPATEN SOPPENG', -4.384200, 119.890000);
    // (7313, 73, 'nama'=>'KABUPATEN WAJO', 'nama'=>'KABUPATEN WAJO', -4.000000, 120.166670);
    // (7314, 73, 'nama'=>'KABUPATEN SIDENRENG RAPPANG', 'nama'=>'KABUPATEN SIDENRENG RAPPANG', -3.850000, 119.966670);
    // (7315, 73, 'nama'=>'KABUPATEN PINRANG', 'nama'=>'KABUPATEN PINRANG', -3.616670, 119.600000);
    // (7316, 73, 'nama'=>'KABUPATEN ENREKANG', 'nama'=>'KABUPATEN ENREKANG', -3.500000, 119.866670);
    // (7317, 73, 'nama'=>'KABUPATEN LUWU', 'nama'=>'KABUPATEN LUWU', -2.557700, 121.324200);
    // (7318, 73, 'nama'=>'KABUPATEN TANA TORAJA', 'nama'=>'KABUPATEN TANA TORAJA', -3.002400, 119.796550);
    // (7322, 73, 'nama'=>'KABUPATEN LUWU UTARA', 'nama'=>'KABUPATEN LUWU UTARA', -2.600000, 120.250000);
    // (7325, 73, 'nama'=>'KABUPATEN LUWU TIMUR', 'nama'=>'KABUPATEN LUWU TIMUR', -2.509570, 120.397800);
    // (7326, 73, 'nama'=>'KABUPATEN TORAJA UTARA', 'nama'=>'KABUPATEN TORAJA UTARA', -2.927380, 119.792180);
    // (7371, 73, 'nama'=>'KOTA MAKASSAR', 'nama'=>'KOTA MAKASSAR', -5.150000, 119.450000);
    // (7372, 73, 'nama'=>'KOTA PARE-PARE', 'nama'=>'KOTA PARE-PARE', -4.033330, 119.650000);
    // (7373, 73, 'nama'=>'KOTA PALOPO', 'nama'=>'KOTA PALOPO', -2.978410, 120.110780);

    // (7401, 74, 'nama'=>'KABUPATEN BUTON', 'nama'=>'KABUPATEN BUTON', -5.316670, 122.583330);
    // (7402, 74, 'nama'=>'KABUPATEN MUNA', 'nama'=>'KABUPATEN MUNA', -4.966670, 122.666670);
    // (7403, 74, 'nama'=>'KABUPATEN KONAWE', 'nama'=>'KABUPATEN KONAWE', -3.917170, 122.088230);
    // (7404, 74, 'nama'=>'KABUPATEN KOLAKA', 'nama'=>'KABUPATEN KOLAKA', -4.083330, 121.666670);
    // (7405, 74, 'nama'=>'KABUPATEN KONAWE SELATAN', 'nama'=>'KABUPATEN KONAWE SELATAN', -4.191910, 122.448540);
    // (7406, 74, 'nama'=>'KABUPATEN BOMBANA', 'nama'=>'KABUPATEN BOMBANA', -4.625700, 121.816410);
    // (7407, 74, 'nama'=>'KABUPATEN WAKATOBI', 'nama'=>'KABUPATEN WAKATOBI', -5.319340, 123.594800);
    // (7408, 74, 'nama'=>'KABUPATEN KOLAKA UTARA', 'nama'=>'KABUPATEN KOLAKA UTARA', -3.104520, 121.124270);
    // (7409, 74, 'nama'=>'KABUPATEN BUTON UTARA', 'nama'=>'KABUPATEN BUTON UTARA', -5.014570, 122.930150);
    // (7410, 74, 'nama'=>'KABUPATEN KONAWE UTARA', 'nama'=>'KABUPATEN KONAWE UTARA', -3.415520, 121.990810);
    // (7411, 74, 'nama'=>'KABUPATEN KOLAKA TIMUR', 'nama'=>'KABUPATEN KOLAKA TIMUR', -4.018070, 121.861720);
    // (7412, 74, 'nama'=>'KABUPATEN KONAWE KEPULAUAN', 'nama'=>'KABUPATEN KONAWE KEPULAUAN', -4.116560, 123.101810);
    // (7413, 74, 'nama'=>'KABUPATEN MUNA BARAT', 'nama'=>'KABUPATEN MUNA BARAT', -4.833330, 122.483330);
    // (7414, 74, 'nama'=>'KABUPATEN BUTON TENGAH', 'nama'=>'KABUPATEN BUTON TENGAH', -5.316670, 122.333330);
    // (7415, 74, 'nama'=>'KABUPATEN BUTON SELATAN', 'nama'=>'KABUPATEN BUTON SELATAN', -5.566670, 122.700000);
    // (7471, 74, 'nama'=>'KOTA KENDARI', 'nama'=>'KOTA KENDARI', -3.983330, 122.500000);
    // (7472, 74, 'nama'=>'KOTA BAUBAU', 'nama'=>'KOTA BAUBAU', -5.477000, 122.616600);

    // (7501, 75, 'nama'=>'KABUPATEN BOALEMO', 'nama'=>'KABUPATEN BOALEMO', 0.626890, 122.356800);
    // (7502, 75, 'nama'=>'KABUPATEN GORONTALO', 'nama'=>'KABUPATEN GORONTALO', 0.572800, 122.233700);
    // (7503, 75, 'nama'=>'KABUPATEN POHUWATO', 'nama'=>'KABUPATEN POHUWATO', 0.709800, 121.595820);
    // (7504, 75, 'nama'=>'KABUPATEN BONE BOLANGO', 'nama'=>'KABUPATEN BONE BOLANGO', 0.502960, 123.275010);
    // (7505, 75, 'nama'=>'KABUPATEN GORONTALO UTARA', 'nama'=>'KABUPATEN GORONTALO UTARA', 0.770000, 122.316670);
    // (7571, 75, 'nama'=>'KOTA GORONTALO', 'nama'=>'KOTA GORONTALO', 0.533330, 123.100000);

    // (7601, 76, 'nama'=>'KABUPATEN MAJENE', 'nama'=>'KABUPATEN MAJENE', -3.150000, 118.866670);
    // (7602, 76, 'nama'=>'KABUPATEN POLEWALI MANDAR', 'nama'=>'KABUPATEN POLEWALI MANDAR', -3.300000, 119.166670);
    // (7603, 76, 'nama'=>'KABUPATEN MAMASA', 'nama'=>'KABUPATEN MAMASA', -2.964920, 119.306310);
    // (7604, 76, 'nama'=>'KABUPATEN MAMUJU', 'nama'=>'KABUPATEN MAMUJU', -2.500000, 119.416670);
    // (7605, 76, 'nama'=>'KABUPATEN MAMUJU UTARA', 'nama'=>'KABUPATEN MAMUJU UTARA', -1.516390, 119.421390);
    // (7606, 76, 'nama'=>'KABUPATEN MAMUJU TENGAH', 'nama'=>'KABUPATEN MAMUJU TENGAH', -2.821200, 119.266200);

    // (8101, 81, 'nama'=>'KABUPATEN MALUKU TENGGARA BARAT', 'nama'=>'KABUPATEN MALUKU TENGGARA BARAT', -7.611860, "provinsi_id"=>131.380000);
    // (8102, 81, 'nama'=>'KABUPATEN MALUKU TENGGARA', 'nama'=>'KABUPATEN MALUKU TENGGARA', -5.750000, "provinsi_id"=>132.733340);
    // (8103, 81, 'nama'=>'KABUPATEN MALUKU TENGAH', 'nama'=>'KABUPATEN MALUKU TENGAH', -3.291670, 128.967500);
    // (8104, 81, 'nama'=>'KABUPATEN BURU', 'nama'=>'KABUPATEN BURU', -3.327670, 126.684130);
    // (8105, 81, 'nama'=>'KABUPATEN KEPULAUAN ARU', 'nama'=>'KABUPATEN KEPULAUAN ARU', -6.170590, "provinsi_id"=>134.469910);
    // (8106, 81, 'nama'=>'KABUPATEN SERAM BAGIAN BARAT', 'nama'=>'KABUPATEN SERAM BAGIAN BARAT', -3.102700, 128.429960);
    // (8107, 81, 'nama'=>'KABUPATEN SERAM BAGIAN TIMUR', 'nama'=>'KABUPATEN SERAM BAGIAN TIMUR', -3.398510, "provinsi_id"=>130.391660);
    // (8108, 81, 'nama'=>'KABUPATEN MALUKU BARAT DAYA', 'nama'=>'KABUPATEN MALUKU BARAT DAYA', -7.829600, 126.173860);
    // (8109, 81, 'nama'=>'KABUPATEN BURU SELATAN', 'nama'=>'KABUPATEN BURU SELATAN', -3.521870, 126.592710);
    // (8171, 81, 'nama'=>'KOTA AMBON', 'nama'=>'KOTA AMBON', -3.700000, 128.183330);
    // (8172, 81, 'nama'=>'KOTA TUAL', 'nama'=>'KOTA TUAL', -5.643010, "provinsi_id"=>132.749340);

    // (8201, 82, 'nama'=>'KABUPATEN HALMAHERA BARAT', 'nama'=>'KABUPATEN HALMAHERA BARAT', 1.417090, 127.552640);
    // (8202, 82, 'nama'=>'KABUPATEN HALMAHERA TENGAH', 'nama'=>'KABUPATEN HALMAHERA TENGAH', 0.480560, 128.250000);
    // (8203, 82, 'nama'=>'KABUPATEN KEPULAUAN SULA', 'nama'=>'KABUPATEN KEPULAUAN SULA', -1.864600, 125.690460);
    // (8204, 82, 'nama'=>'KABUPATEN HALMAHERA SELATAN', 'nama'=>'KABUPATEN HALMAHERA SELATAN', -0.395500, 127.908330);
    // (8205, 82, 'nama'=>'KABUPATEN HALMAHERA UTARA', 'nama'=>'KABUPATEN HALMAHERA UTARA', 1.731940, 128.007780);
    // (8206, 82, 'nama'=>'KABUPATEN HALMAHERA TIMUR', 'nama'=>'KABUPATEN HALMAHERA TIMUR', 1.335170, 128.486270);
    // (8207, 82, 'nama'=>'KABUPATEN PULAU MOROTAI', 'nama'=>'KABUPATEN PULAU MOROTAI', 2.199240, 128.405460);
    // (8208, 82, 'nama'=>'KABUPATEN PULAU TALIABU', 'nama'=>'KABUPATEN PULAU TALIABU', -1.845780, 124.789920);
    // (8271, 82, 'nama'=>'KOTA TERNATE', 'nama'=>'KOTA TERNATE', 0.896180, 127.310160);
    // (8272, 82, 'nama'=>'KOTA TIDORE KEPULAUAN', 'nama'=>'KOTA TIDORE KEPULAUAN', 0.609620, 127.569810);

    // (9101, 91, 'nama'=>'KABUPATEN FAK-FAK', 'nama'=>'KABUPATEN FAK-FAK', -2.926410, "provinsi_id"=>132.296080);
    // (9102, 91, 'nama'=>'KABUPATEN KAIMANA', 'nama'=>'KABUPATEN KAIMANA', -3.660930, "provinsi_id"=>133.774510);
    // (9103, 91, 'nama'=>'KABUPATEN TELUK WONDAMA', 'nama'=>'KABUPATEN TELUK WONDAMA', -2.700000, "provinsi_id"=>134.500000);
    // (9104, 91, 'nama'=>'KABUPATEN TELUK BINTUNI', 'nama'=>'KABUPATEN TELUK BINTUNI', -1.880370, "provinsi_id"=>133.331050);
    // (9105, 91, 'nama'=>'KABUPATEN MANOKWARI', 'nama'=>'KABUPATEN MANOKWARI', -0.900000, "provinsi_id"=>133.750000);
    // (9106, 91, 'nama'=>'KABUPATEN SORONG SELATAN', 'nama'=>'KABUPATEN SORONG SELATAN', -1.504950, "provinsi_id"=>132.286380);
    // (9107, 91, 'nama'=>'KABUPATEN SORONG', 'nama'=>'KABUPATEN SORONG', -1.166670, "provinsi_id"=>131.500000);
    // (9108, 91, 'nama'=>'KABUPATEN RAJA AMPAT', 'nama'=>'KABUPATEN RAJA AMPAT', -0.500000, "provinsi_id"=>130.000000);
    // (9109, 91, 'nama'=>'KABUPATEN TAMBRAUW', 'nama'=>'KABUPATEN TAMBRAUW', -0.605150, "provinsi_id"=>132.489620);
    // (9110, 91, 'nama'=>'KABUPATEN MAYBRAT', 'nama'=>'KABUPATEN MAYBRAT', -1.215500, "provinsi_id"=>132.350920);
    // (9111, 91, 'nama'=>'KABUPATEN MANOKWARI SELATAN', 'nama'=>'KABUPATEN MANOKWARI SELATAN', -1.079800, "provinsi_id"=>133.967290);
    // (9112, 91, 'nama'=>'KABUPATEN PEGUNUNGAN ARFAK', 'nama'=>'KABUPATEN PEGUNUNGAN ARFAK', -0.935230, "provinsi_id"=>133.895870);
    // (9171, 91, 'nama'=>'KOTA SORONG', 'nama'=>'KOTA SORONG', -0.865070, "provinsi_id"=>131.251530);

    // (9401, 94, 'nama'=>'KABUPATEN MERAUKE', 'nama'=>'KABUPATEN MERAUKE', -7.666670, "provinsi_id"=>139.666670);
    // (9402, 94, 'nama'=>'KABUPATEN JAYAWIJAYA', 'nama'=>'KABUPATEN JAYAWIJAYA', -4.083330, "provinsi_id"=>139.083330);
    // (9403, 94, 'nama'=>'KABUPATEN JAYAPURA', 'nama'=>'KABUPATEN JAYAPURA', -3.000000, "provinsi_id"=>139.950000);
    // (9404, 94, 'nama'=>'KABUPATEN NABIRE', 'nama'=>'KABUPATEN NABIRE', -3.540160, "provinsi_id"=>135.555110);
    // (9408, 94, 'nama'=>'KABUPATEN KEPULAUAN YAPEN', 'nama'=>'KABUPATEN KEPULAUAN YAPEN', -1.787730, "provinsi_id"=>136.277160);
    // (9409, 94, 'nama'=>'KABUPATEN BIAK NUMFOR', 'nama'=>'KABUPATEN BIAK NUMFOR', -1.033330, "provinsi_id"=>136.000000);
    // (9410, 94, 'nama'=>'KABUPATEN PANIAI', 'nama'=>'KABUPATEN PANIAI', -3.900000, "provinsi_id"=>136.600010);
    // (9411, 94, 'nama'=>'KABUPATEN PUNCAK JAYA', 'nama'=>'KABUPATEN PUNCAK JAYA', -3.672410, "provinsi_id"=>137.438960);
    // (9412, 94, 'nama'=>'KABUPATEN MIMIKA', 'nama'=>'KABUPATEN MIMIKA', -4.543570, "provinsi_id"=>136.565550);
    // (9413, 94, 'nama'=>'KABUPATEN BOVEN DIGOEL', 'nama'=>'KABUPATEN BOVEN DIGOEL', -5.705190, 140.363490);
    // (9414, 94, 'nama'=>'KABUPATEN MAPPI', 'nama'=>'KABUPATEN MAPPI', -6.499710, "provinsi_id"=>139.344410);
    // (9415, 94, 'nama'=>'KABUPATEN ASMAT', 'nama'=>'KABUPATEN ASMAT', -5.379500, "provinsi_id"=>138.463440);
    // (9416, 94, 'nama'=>'KABUPATEN YAHUKIMO', 'nama'=>'KABUPATEN YAHUKIMO', -4.604030, "provinsi_id"=>139.584050);
    // (9417, 94, 'nama'=>'KABUPATEN PEGUNUNGAN BINTANG', 'nama'=>'KABUPATEN PEGUNUNGAN BINTANG', -4.521670, 140.295410);
    // (9418, 94, 'nama'=>'KABUPATEN TOLIKARA', 'nama'=>'KABUPATEN TOLIKARA', -3.426610, "provinsi_id"=>137.416990);
    // (9419, 94, 'nama'=>'KABUPATEN SARMI', 'nama'=>'KABUPATEN SARMI', -2.416670, "provinsi_id"=>139.083330);
    // (9420, 94, 'nama'=>'KABUPATEN KEEROM', 'nama'=>'KABUPATEN KEEROM', -3.300000, 140.616670);
    // (9426, 94, 'nama'=>'KABUPATEN WAROPEN', 'nama'=>'KABUPATEN WAROPEN', -2.286000, "provinsi_id"=>137.018370);
    // (9427, 94, 'nama'=>'KABUPATEN SUPIORI', 'nama'=>'KABUPATEN SUPIORI', -0.738810, "provinsi_id"=>135.611110);
    // (9428, 94, 'nama'=>'KABUPATEN MAMBERAMO RAYA', 'nama'=>'KABUPATEN MAMBERAMO RAYA', -2.235610, "provinsi_id"=>137.782290);
    // (9429, 94, 'nama'=>'KABUPATEN NDUGA', 'nama'=>'KABUPATEN NDUGA', -4.450930, "provinsi_id"=>138.100890);
    // (9430, 94, 'nama'=>'KABUPATEN LANNY JAYA', 'nama'=>'KABUPATEN LANNY JAYA', -3.912440, "provinsi_id"=>138.287660);
    // (9431, 94, 'nama'=>'KABUPATEN MAMBERAMO TENGAH', 'nama'=>'KABUPATEN MAMBERAMO TENGAH', -2.460640, "provinsi_id"=>138.452450);
    // (9432, 94, 'nama'=>'KABUPATEN YALIMO', 'nama'=>'KABUPATEN YALIMO', -3.860370, "provinsi_id"=>138.473050);
    // (9433, 94, 'nama'=>'KABUPATEN PUNCAK', 'nama'=>'KABUPATEN PUNCAK', -4.142040, "provinsi_id"=>137.097020);
    // (9434, 94, 'nama'=>'KABUPATEN DOGIYAI', 'nama'=>'KABUPATEN DOGIYAI', -4.031860, "provinsi_id"=>135.439450);
    // (9435, 94, 'nama'=>'KABUPATEN INTAN JAYA', 'nama'=>'KABUPATEN INTAN JAYA', -3.410160, "provinsi_id"=>136.708370);
    // (9436, 94, 'nama'=>'KABUPATEN DEIYAI', 'nama'=>'KABUPATEN DEIYAI', -3.947370, "provinsi_id"=>135.950320);
    // (9471, 94, 'nama'=>'KOTA JAYAPURA', 'nama'=>'KOTA JAYAPURA', -2.646470, 140.777790);


}
