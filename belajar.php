<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <?php
    echo "<h1> Mari Belajar PHP </h1>";//membungkus html di dalam php.
    echo "Ini punya devin "; //outputnya sama dengan print, oh iya kita bisa gunakan print juga
    print "Ayo pakai masker ";
    echo "Ini punya devin     ";//seberapa banyakpun spasi dia hanya dihitung satu spasi
    echo "yang baru <br>";
    ?>
     Belajar PHP yuk
    <?php
    //komentar
    /*
    komentar dalam jumlah yang lebih dari satu baris
    adalah dengan menggunakan ini garing dan bintang
    */

    //variabel dalam PHP
    //gunakan dollar, aturan penamaan: tidak boleh pakai angka diawal ex:$1dev
    //penamaan variabel yang bisa: $dev, $_1dev
    $devin = "Devin Purnawansyah";
    //contoh menampilkan variabel
    echo "<h1>$devin</h1>";
    echo "masuk pak $devin ";
    echo "Halo, ". $devin ."<br>";
    ?>

    <?php
    //variabel tipe data string
    //kita bisa gunakan " dan ' untuk variabel dengan tipe data adalah string.
    $nama = "Devin Purnawansyah";
    $profesi = 'Web Developer';

    //kita coba untuk print
    echo $nama; //kalau mau print variabel saja tanpa tambahan teks bisa dengan langsung menulis variabelnya saja
    echo " bekerja sebagai ". $profesi ."<br>" ;
    //atau kita bisa buat dalam satu echo saja
    echo $nama." Bekerja Sebagai ". $profesi;

    echo "<br>";//kita kasih jarak output biar kelihatan
    echo "<p>====Variabel angka===</p>";

    //variabel dengan tipe data integer dan float
    $ribuan = 1000; //integer
    $pecahan = 105.55; //float , koma diganti titik di php

    echo $ribuan + $pecahan ;

    echo "<br>";//kita kasih jarak output biar kelihatan
    echo "<p>====Operator Aritmatika===</p>";

    //kita dapat gunakan: +, -, /, *, %, ++, --

    //deklarasi variabel
    $angka1 = 20;
    $angka2 = 30;
    $angka3 = 2;
    //pengurangan
    $hasil1 = $angka2 - $angka1;
    echo $hasil1. "<br>";
    //penjumlahan
    $hasil2 = $angka1 + $angka2 + $angka3;
    echo $hasil2. "<br>";
    //perkalian
    //kita gunakan struktur lain ya
    $angka1 *= $angka3;
    echo $angka1. "<br>";
    //pembagian caranya sama ya
    //kita coba modulo
    $modulo = $angka2 % $angka3;
    echo $modulo. "<br>"; //hasilnya pasti 0 karena 30 modulo 2 tidak ada sisa/habis dibagi 2.
    //kita coba increment ++
    $angka3++;
    echo $angka3. "<br>";// program akan menambah 2+1=3

    echo "<br>";//kita kasih jarak output biar kelihatan
    echo "<p>====Fungsi Matematika pada PHP===</p>";
    //ada banyak fungsi matematika di php, dapat dilihat di:
    // https://www.phptpoint.com/php-math-functions/#:~:text=The%20PHP%20math%20function%20can%20basically%20handle%20the,that%20are%20used%20very%20frequently%20in%20the%20scripts.
    //kita hanya bahas 4 saja ya, yaitu round,rand(min,max), max, min;
    //round: fungsi untuk menjadikan pecahan koma kedalam bilangan bulat yang mendekati
    echo round(12.6). "<br>";
    //ran: untuk melakukan random angka
    echo rand(1,10). "<br>";
    //max dan min, ini udah umum lah ya
    echo max(100, 1001, 10045). "<br>";

    echo "<br>";//kita kasih jarak output biar kelihatan
    echo "<p>====Metode String===</p>";

    // ada banyak metode dalam string sebenarnya, kita akan bahas yang umum dipakai aja
    $kalimat = 'Saya adalah manusia';
    // strlen : menghitung panjang string
    echo strlen($kalimat). "<br>";
    //str_word_count : menghitung kata yang ada
    echo str_word_count($kalimat). "<br>";
    //str_replace(find,replace,string) : fungsinya untuk menggantikan string dengan string yang baru
    echo str_replace('Saya','Aku',$kalimat). "<br>";
    //str_repeat(text, times) : fungsinya untuk mencetak string dengan jumlah banyak
    echo str_repeat('Saya',10). "<br>";
    //str_shuffle(text) : fungsinya untuk mengacak string
    echo str_shuffle($kalimat). "<br>";

    echo "<br>";//kita kasih jarak output biar kelihatan
    echo "<p>====Array dalam PHP===</p>";

    //penulisan array ada 2:
    $sayur = array('Bayam','Paku','Sawi','Bayam');
    $juventus = ['Pirlo', 'Buffon', 'Ronaldo'];

    //print ada dua tipe:
    //print semua
    print_r($sayur);
    echo "<br>";
    //print satuan
    echo $juventus[0];

    echo "<br>";//kita kasih jarak output biar kelihatan
    echo "<p>====Metode Dalam Array===</p>";

    //metode yang akan dicoba adalah: array_unique,_reverse, shuffle, count, sort
    //array_unique: menampilkan isi array yang unik saja
    print_r(array_unique($sayur));
    echo "<br>";
    //array_reverse : membalikkan posisi array
    print_r(array_reverse($sayur));
    echo "<br>";
    //shuffle: mengacak array
    shuffle($juventus);
    print_r($juventus);
    echo "<br>";
    //count: menghitung jumlah array
    echo count($sayur);
    echo "<br>";
    //sort: mengurutkan sesuai abjad dari a-z
    sort($juventus);
    print_r($juventus);

    echo "<br>";//kita kasih jarak output biar kelihatan
    echo "<p>====Associative Array===</p>";
    
    //key => nilainya
    $mahasiswa = array("nama"=>"Devin",
                        "nim"=>"G64169999",
                        "jurusan"=>"ilmu komputer"
                );
    //print array
    print_r($mahasiswa);
    echo "<br>";

    //kita juga dapat mengganti nilai Array
    $mahasiswa['nama'] = "Devin Purnawansyah";

    //print salah satunya:
    echo "Namanya adalah: ". $mahasiswa['nama'];
    echo "<br>";
    echo "Dia memiliki NIM: ". $mahasiswa['nim'] . " dan Jurusannya adalah: ". $mahasiswa['jurusan'];

    echo "<br>";//kita kasih jarak output biar kelihatan
    echo "<p>====Associative Array Method===</p>";
    
    //ada 3 yang akan kita pelajari yaitu: array_values, array_keys, array_merge;
    $mahasiswaipb = array("nama"=>"Abdul Alif",
                        "nim"=>"G64169999",
                        "jurusan"=>"Statistika"
                );
    $beasiswa = array("penyedia"=>"Kemendikbud",
                "jumlah"=>"3 juta"
                );
    //array_values: Dia mengubah asosiatif array menjadi array biasa
    print_r(array_values($mahasiswaipb));
    echo "<br>";

    //array_keys: menampilkan keys yang ada dalam array
    print_r(array_keys($mahasiswaipb));
    echo "<br>";

    //array_merge: menggabungkan 2 array
    print_r(array_merge($mahasiswaipb, $beasiswa));

    echo "<br>";//kita kasih jarak output biar kelihatan
    echo "<p>====Multi dimensi array===</p>";

    //dalam satu array kita dapat memasukkan banyak array
    $tipe = array(
        array("Mahasiswa","Rajin","Suka Demo"),
        array("Dosen", "Galak", "Suka Libur"),
        array("Rektor", "Tegas", "Suka Nyanyi")
    );

    //posisi array:
    //00 01 02
    //10 11 12
    //20 21 22

    //kita coba print keseluruhan
    print_r($tipe);
    echo "<br>";
    //kita coba ambil satu nilai:
    echo $tipe[2][2];

    echo "<br>";//kita kasih jarak output biar kelihatan
    echo "<p>====Loop===</p>";
    //kita masuk ke perulangan di php
    for($i=0; $i < 5; $i++){
        echo "Mari Belajar <br>";
    }
    
    echo "<br>";//kita kasih jarak output biar kelihatan
    echo "<p>====Array dan loop===</p>";
    $makanan = ['Ayam', 'Ikan', 'Tahu','Tempe'];

    for($i=0; $i < count($makanan); $i++){
        echo $makanan[$i]."<br>";
    }
    
    echo "<p>====Foreach===</p>";
    //ada cara lain juga untuk menampilkan semua isi array yaitu dengan foreach
    $nonton = ['Netflix', 'Diney+', 'Hulu', 'Prime Video'];
    foreach($nonton as $n){
        echo $n."<br>";
    }
    
    echo "<p>====Loop di Associative Array===</p>";
    $mahasiswaub = array("nama"=>"Munaf Ali",
                        "nim"=>"UB23421",
                        "jurusan"=>"Agama Budha"
    );
    foreach($mahasiswaub as $key =>$value){
        echo $key. " = ". $value."<br>";
    }

    echo "<p>====While===</p>";
    $kue = ['Donat', 'Bolu','Ultah','Odading'];
    //while
    $i=0;
    while($i<count($kue)){
        echo $kue[$i]."<br>";
        $i++;
    }
    
    echo "<p>====Do While===</p>";
    //Do While
    $j=0;
    $roti = ['Roma', 'Sariroti','Tawar','Kelapa'];
    do{
        echo $roti[$j]."<br>";
        $j++;
    }while($j<count($roti));

    echo "<p>====IF dan ELSE===</p>";
    // ada juga tipe data boolean nilainya adalah true dan false
    //kita akan mencoba pengkondisian di PHP
    $punya = 'saya';
    if($punya == 'saya'){
        echo "betul sekali itu";
    }else{
        echo "salah, bukan itu";
    }
    //operator dalam if else ada banyak, diantaranya
    //== ini artinya sama dengan
    //=== ini artinya yang sama tidak hanya isinya tapi juga tipe datanya
    //> lebih besar dari dan >= lebih besar sama dengan
    //< lebih kecil dari dan <= lebih kecil sama dengan
    echo "<p>====Else IF===</p>";
    //lebih dari satu syarat
    $anto = 2000;
    $permen = 4000;
    $andi = 5000;

    if($anto > $permen){
        echo "boleh beli";
    }else if($andi > $permen){
        echo "boleh beli pakai uang andi";
    }else{
        echo "Uang tidak cukup bos";
    }

    echo "<p>====Nested IF===</p>";
    //if bercabang yaitu if didalam if
    $istri = 12000;
    $tempe = 6000;
    $suami = 5000;
    if($suami>$tempe){
        echo "Suami beli tempe";
    }else if($istri>$tempe){
        echo "Istri membeli tempe, ";
        if($istri >= $tempe*2){
            echo "Istri beli 2 tempe";
        }
    }else{
        echo "tidak bisa beli";
    }
    //pada dasarnya hasil dari if dan else itu adalah true dan false
    echo "<p>====&& dan ||===</p>";
    //&& digunakan jika kita ingin kedua persyaratan benar
    //|| digunakan jika kita ingin salah satunya benar
    $bayu = 12000;
    $jaket = 6000;
    $ani = 5000;
    if($ani > $jaket && $bayu > $jaket){//hasilnya tidak bisa beli karena keduanya harus terpenuhi
        echo "boleh beli";
    }else{
        echo "tidak bisa beli";
    }
    echo "<p>====Switch case pada PHP===</p>";
    //ini cara sederhana dalam membentuk if dan else
    $nim = 12345;
    switch($nim){
        case 123:
            echo "ini nimnya benar 123";
        break;
        case 1234:
            echo "ini nimnya benar  1234";
        break;
        case 12345:
            echo "ini nimnya benar 12345";
        break;
        default:
            echo "tidak ada yang benar";//default alternatif terakhir untuk melihat syaratnya
        break;
    }
    echo "<p>====Fungsi Pada PHP===</p>";
    //fungsi pada php dapat memakai function namafungsi(){}
    function tampilkan(){
        echo "------------";
        echo "Devin Purnawansyah";
        echo "------------";
    }
    function jarak(){
        echo "<br>";
    }
    //print
    tampilkan();
    jarak();
    tampilkan();
    jarak();

    echo "<p>====Parameter Fungsi Pada PHP===</p>";
    function rumah( $text ){//parameter
        $text = "Rumah ". $text;
        echo "------------";
        echo $text;
        echo "------------";
    }
    function rumah2( $text2, $jalan ){// boleh dua atau lebih parameter
        $text2 = "Rumah ". $text2. " ". $jalan;
        echo "------------";
        echo $text2;
        echo "------------";
    }
    //print
    rumah('Devin');
    jarak();
    rumah2('Anggi', 'jln raya sosoklu');
    jarak();

    echo "<p>====Return Fungsi Pada PHP===</p>";
    //return berfungsi untuk mengembalikan nilainya jadi fungsi tidak bisa langsung di print, mesti pakai echo untuk menampilkannnya
    function penjumlahan($x,$y){
        $z=$x + $y;
        return $z;
    }
    $hasil = penjumlahan(2,6);
    echo $hasil;

    echo "<p>====Scope===</p>";
    //scope adalah untuk menandakan variabel tersebut lokal atau global.
    $as = 20;
    $bs = 10;

    function hasil(){
        global $as, $bs;//ini penanda dia global karena berada di luar fungsi
        $zs = $as / $bs;
        return $zs;
    }
    echo hasil();

    echo "<p>====Anonymous Function ===</p>";
    $giro = function($tulis){
        echo $tulis;
    };
    $giro('Ada-ada aja ya');

    echo "<p>==== Callback Function ===</p>";
    //callback function adalah memanggil fungsi dalam variabel atau fungsi lainnya

    function kaget($ndak){
        echo 'AAAAAnjay kaget <br>';
        $ndak();
    }

    $ndak = function(){
        echo 'saya tidak bernama';
    };

    kaget($ndak);
    //sebagai tambahan aja ada namanya call_user_function($fungsi, 'isinya apa') = $fungsi('isinya')
    // ada namanya if (is_callable($fungsi)){} //tugasnya menguji apakah $fungsi adalah fungsi.

    echo "<p>==== Var_dump dan die ===</p>";
    $con = 'Asli';
    echo $con;//print biasa
    echo "<br>";
    var_dump($con);// melihat variabel lebih lengkap.
    echo "<br>";
    die();//untuk menghentikan program di baris tersebut jadi baris bawahnya tidak akan jalan.


    ?>
</body>
</html>