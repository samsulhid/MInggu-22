<?php
// Str_replace
// $a = "Zae";
// echo str_replace("a", "e", $a);

// date format
// $date = date_create("2024-02-06");
// date_modify($date, "+5 days");
// echo "Tanggal setelah ditambahkan  5 hari : ".date_format($date,"y-m-d")."\n";

// sum
// function sum($x, $y){
//     $z = $x + $y;
//     return $z;
// }
// echo "5 + 10 = ". sum(5, 10)."\n";
// echo "89 + 34 =". sum(89, 34). "\n";

// strpos
// $jiko = "Peduli dan berbaik hati, siapakah dia.... cristy";
// $jiko2 = "siapakah dia....";
// $jumlah = strpos($jiko, $jiko2);
// if($jumlah !== false){
//     echo "$jiko2  ditemukan di posisi ke-$jumlah \n";
// }else{
//     echo "$jiko2 tidak ditemukan \n";
// }

// rand
// $angka = rand(1, 48);
// echo " Angka acak antara 1 sampai 48 : ".$angka;

// strtoupper
// $kata = "Saya suka makan nasi goreng";
// echo "Kata Saya Suka Makan Nasi Goreng : ".strtoupper($kata)."\n";


// is_array
// $data = array('A', 'B', 'C');
// if (is_array($data)) {
//         echo "Data adalah array\n";  
//     }else{
//         echo "Data bukan array\n";
// }

// array_map
// $kenadraan = array('mobil', 'motor', 'sepeda');
// $upper = array_map(function($value) {
//     return strtoupper($value);
// }, $kenadraan);
// echo  print_r($upper);

// str_repeat
// $teks = "Oii";
// echo str_repeat($teks , 3)."\n";

// array_pop
// $asal = array('jeruk', 'pisang',  'durian');
// $buah = array_pop($asal);
// print_r($asal);

// strtolower
// $nama = "ZEE";
// echo  strtolower($nama). "\n";

// strlen
// $kata = "hello world";
// echo "Jumlah huruf pada kata hello world adalah : ".strlen($kata)."\n";

// sqrt
// $bilangan = 25;
// echo "Nilai dari bilangan 25 adalah :".sqrt($bilangan)."\n";

// rtrim
// $str = "Bersepeda berdua";
// echo $str .  "\n";
// echo rtrim($str, "berdua");

// strtr
// $arr = array("Ngabuburit" => "Bersepeda", "Motoran");
// echo strtr("Bersepeda Berdua", $arr);

// in_array
// $data = array("A","B","C","D");
// if (in_array("B", $data)) {
//     echo "Data B ada didalam data\n";
//     } else {
//         echo "Data B tidak ada di dalam data \n";
// }

// abs
// echo(abs(6.7). " ");
// echo(abs(-4.3). " ");
// echo(abs(-3). " ");
// echo(abs(93). " ");

// floor
// echo(floor(6.7). " ");
// echo(floor(-4.3). " ");
// echo(floor(-3). " ");
// echo(floor(93). " ");

// array_push
// $buah = array("jeruk", "pisang");
// array_push($buah, "semangka", "melon");
// print_r($buah);

// array_unshift
// $buah = array("jeruk", "pisang");
// array_unshift($buah, "semangka", "melon");
// print_r($buah);

// ceil
// echo ceil(0.7). "\n";
// echo ceil(1.2). "\n";
// echo ceil(3.6). "\n";
// echo ceil(4). "\n";
// echo ceil(5.6). "\n";

// sort()
// $angka = array(5,3,6,7,2,8,1,0);
// sort($ngka);
// print_r($angka);

// arsort
// $angka1 = ['1','4','5','10','2'];
// arsort ($angka);
// print_r($angka);

// // array_revers
// $rmbl = ['PPLG XI-5', 'PPLG XI-4', 'PPLG XI-3', 'PPLG XI-2', 'PPLG XI-1'];
// array_reverse($rmbl);
// print_r($rmbl);

// ucfirst
// $str = "wajib ngulik";
// echo "sebelum : ". $str ."\n";
// echo "sesudah : ". ucfirst($str);

// compact
// $namaDepan = "Samsul";
// $namaBelakang = "Hidayatulloh";
// $umur = 16;

// $hasil = compact(["namaDepan","namaBelakang","umur"]);
// print_r($hasil);

//gettype
// $kata = "JKT48";
// echo gettype($kata);

// array_unique
// $buah =  ["Apel", "Anggur", "Durian", "Mangga", "Apel", "Nanas"];
// $hsl = array_unique($buah);
// print_r($hsl);

// array_shift
// $buah1 = array("Jeruk", "Rambutan", "Pisang", "Guava");
// echo array_shift($buah1);
