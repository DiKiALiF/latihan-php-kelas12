<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\SuplierController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contoh', [MyController::class, 'tampilkan']);

Route::get('/tampilan_bio', [BiodataController::class, 'tampil_data']);
Route::get('/tampilan_post', [PostController::class, 'tampilkan_post']);

Route::get('/barang', [BarangController::class, 'tampilkan_barang']);
Route::get('/pembelian', [PembelianController::class, 'tampilkan_pembelian']);
Route::get('/pembeli', [PembeliController::class, 'tampilkan_pembeli']);
Route::get('/pesanan', [PesananController::class, 'tampilkan_pesanan']);
Route::get('/suplier', [SuplierController::class, 'tampilkan_suplier']);

Route::get('/halo', function () {
    return '<h1>Halo Dunia</h1>';
});

Route::get('/biodata', function () {
    echo "<fieldset> <legend> Biodata </legend>";
    echo "<br> Nama:                  Diki Alif Taufik";
    echo "<br> Tempat, tanggal lahir: Bandung, 13 Juli 2004";
    echo "<br> Jenis kelamin:         Laki-laki";
    echo "<br> Agama:                 Islam";
    echo "<br> Kewarganegaraan:       Indonesia";
    echo "<br> Alamat:                Jl. Bihbul Raya I no. 116 </fieldset>";
});

// Route Parameter
Route::get('/input/{nama}/', function ($nama) {
    echo "Nama saya : " . $nama;
});

Route::get('/input_biodata/{nama}/{ttl}/{jk}/{agama}/{kwn}/{alamat}/', function ($nama,$ttl,$jk,$agama,$kwn,$alamat) {
    echo "<fieldset> <legend> Biodata </legend>";
    echo "Nama : " . $nama;
    echo "<br>Tempat, tanggal lahir : " . $ttl;
    echo "<br>Jenis kelamin : " . $jk;
    echo "<br>Agama : " . $agama;
    echo "<br>Kewarganegaraan : " . $kwn;
    echo "<br>Alamat : " . $alamat . "</fieldset>";
});

// Route Optional Parameter
Route::get('/optional/{nama}/{usia?}', function ($nama,$usia = 17) {
    echo "Nama saya : " . $nama;
    echo "<br> Umur saya : " . $usia . " tahun";
});

// Latihan
Route::get('/ujian/{nama}/{kelas}/{mtk?}/{indo?}/{ing?}/{prod?}',
function ($nama, $kelas, $mtk = 0, $indo = 0, $ing = 0, $prod = 0) {
    echo "Nama                  : {$nama}";
    echo "<br> Kelas            : {$kelas}";
    echo "<br> Nilai Matematika : {$mtk}";
    echo "<br> Nilai Indoneisa  : {$indo}";
    echo "<br> Nilai Inggris    : {$ing}";
    echo "<br> Nilai Produktif  : {$prod}";
    $rata = ($mtk + $indo + $ing + $prod) / 4;
    echo "<br> Rata-rata : {$rata}";
});

Route::get('/pesan/{makanan?}/{minuman?}/{cemilan?}',
function ($makanan = null, $minuman = null, $cemilan = null) {
if ($makanan == null && $minuman == null && $cemilan == null) {
    echo "Anda tidak memesan, silahkan pulang";
} if ($makanan !== null) {
    echo "Anda Pesan : ";
    echo "<br> Makanan : {$makanan}";
} if ($makanan !== null && $minuman !== null) {
    echo "<br> Minuman : {$minuman}";
} if ($makanan !== null && $minuman !== null && $cemilan !== null) {
    echo "<br> Cemilan : {$cemilan}";
}
});

Route::get('/bio', function () {
    $nama = "Diki Alif Taufik";
    $ttl = "Bandung, 13 Juli 2004";
    $jk = "Laki-laki";
    $alamat = "Jl. Bihbul Raya I no. 116";
    return view('halo', compact('nama','ttl','jk','alamat'));
});

Route::get('posting/{nama?}/{ttl?}/{jk?}/{alamat?}', function($nama, $ttl, $jk, $alamat){
return view('post',
[
    'a' => $nama,
    'b' => $ttl,
    'c' => $jk,
    'd' => $alamat
]);
});

Route::get('blog', function() {
    $data = [
                ['id' => 1, 'title' => 'Olahraga', 'content' => 'Sepak Bola'],
                ['id' => 2, 'title' => 'Ekonomi', 'content' => 'Hutang RI ke luar negeri']
            ];

return view('blog', compact('data'));
});

Route::get('data-siswa', function() {
    $data = [
                ['nis' => 1001, 'nama' => 'Diki', 'jk' => 'Laki-laki', 'jurusan' => 'RPL', 'kelas' => 'X RPL 1', 'walikelas' => 'Pak Ute'],
                ['nis' => 1002, 'nama' => 'Jonas', 'jk' => 'Laki-laki', 'jurusan' => 'TKRO', 'kelas' => 'XI TKRO 2', 'walikelas' => 'Miss Yanti'],
                ['nis' => 1003, 'nama' => 'Farga', 'jk' => 'Perempuan', 'jurusan' => 'TBSM', 'kelas' => 'XII TBSM 3', 'walikelas' => 'Pak Asep Aming'],
                ['nis' => 1004, 'nama' => 'Isabelle', 'jk' => 'Perempuan', 'jurusan' => 'RPL', 'kelas' => 'XI RPL 1', 'walikelas' => 'Pak Febri'],
                ['nis' => 1005, 'nama' => 'Hoffman', 'jk' => 'Laki-laki', 'jurusan' => 'TKRO', 'kelas' => 'XII TKRO 3', 'walikelas' => 'Bu Ani'],
                ['nis' => 1006, 'nama' => 'Elmas', 'jk' => 'Laki-laki', 'jurusan' => 'TBSM', 'kelas' => 'XI TBSM 2', 'walikelas' => 'Pak Sofwan'],
                ['nis' => 1007, 'nama' => 'Raquel', 'jk' => 'Perempuan', 'jurusan' => 'RPL', 'kelas' => 'XII RPL 1', 'walikelas' => 'Bu Tammy'],
                ['nis' => 1008, 'nama' => 'Nessa', 'jk' => 'Perempuan', 'jurusan' => 'TKRO', 'kelas' => 'X TKRO 1', 'walikelas' => 'Pak Asep Nurdin'],
                ['nis' => 1009, 'nama' => 'Hitler', 'jk' => 'Laki-laki', 'jurusan' => 'TBSM', 'kelas' => 'X TBSM 1', 'walikelas' => 'Bu Erni'],
                ['nis' => 1010, 'nama' => 'Stalin', 'jk' => 'Laki-laki', 'jurusan' => 'RPL', 'kelas' => 'XII RPL 2', 'walikelas' => 'Bu Rima']
            ];

return view('data-siswa', compact('data'));
});

Route::get('siswa', function() {
$siswas = [
   ['id' => 1,
   'nama' => 'Diki',
   'username' => 'diki',
   'email' => 'diki@gmail.com',
   'alamat' => 'Bandung',
   'mapel' => [
       'mapel1' => 'Bhs. Indonesia',
       'mapel2' => 'Bhs. Inggris',
       'mapel3' => 'Bhs. Spanyol',
    ]
   ],
];
return view('siswa', compact('siswas'));
});

Route::get('hobi', function() {
    $hobies = [
       ['nis' => 1001,
       'nama' => 'Adzura',
       'kelas' => '12 RPL 1',
       'hobi' => [
           'hobi1' => 'Pergi ke cc',
           'hobi2' => 'Tiktokan',
           'hobi3' => 'Makan banyak',
        ]
       ],
       ['nis' => 1002,
       'nama' => 'Ikbal',
       'kelas' => '12 RPL 1',
       'hobi' => [
           'hobi1' => 'Main bola',
           'hobi2' => 'Ngaji',
           'hobi3' => 'Memancing',
           'hobi4' => 'Selalu tersenyum',
        ]
       ],
    ];
    return view('hobi', compact('hobies'));
    });

Route::get('/testmodel', function() {
    $query = App\Models\Post::all();
    return $query;
});

Route::get('/test-post', function() {
$query = App\Models\Post::all();
return view('test-post', compact('query'));
});

Route::get('/bio', function() {
    $query = App\Models\Biodata::all();
    return $query;
});

Route::get('/test-bio', function() {
$query = App\Models\Biodata::all();
return view('test-bio', compact('query'));
});

// Route::get('/contoh', function() {
//     return view('sample');
// });
