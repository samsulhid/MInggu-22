<?php
// BUatlah fungsi untuk menghitung berapa banyak kata dan huruf (spasi tidak terhitung) 
// dalam satu kalimat

function length($kalimat){
    $jumKalimat = str_word_count($kalimat);
    $jumHuruf = strlen(str_replace(' ', '', $kalimat)); 
    return "Jumlah kata: " . $jumKalimat . "\n" . "Jumlah huruf: " . $jumHuruf;
}
echo length("Azizi Asadel");


?>
