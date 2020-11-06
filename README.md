# Belajar PHP
File belajar PHP pada tahun 2018

## Perintah Memulai PHP
Memulai program php dapat dilakukan dengan syntax berikut.
```
 <?php
   .............
 ?>
```

## Print dalam PHP
Ada berbagai cara dalam menampilkan hasil dalam web menggunakan php. kita ambil dua yang umum yaitu echo dan print. dua perintah itu dapat digunakan dalam menampilkan hasil php.
```
    echo "Ini file kita "; 
    print "Ayo pakai produk dalam negeri ";
```

## Komentar dalam PHP
Komentar dalam php dapat menggunakan garis miring dua kali (//) untuk komentar satu baris atau dapat dengan menggunakan garis miring bintang (/*...*/) untuk komentar yang lebih dari satu baris.
```
   //komentar
    /*
    komentar dalam jumlah yang lebih dari satu baris
    adalah dengan menggunakan ini garing dan bintang
    */
```

## Variabel dalam PHP
Membuat variabel dalam PHP sangat mudah. kita dapat menggunakan ($) sebagai penanda variabel. ada beberapa aturan yang menjadi catatan dalam deklarasi variabel salah satunya yang terpenting adalah jangan menggunakan angka diawal penamaan, example: $1dev -> ini tidak dibolehkan.
```
$nama = "Devin Purnawansyah";
$profesi = 'Web Developer & UI/UX';
```

## Print Variabel
Menampilkan variabel dalam web cukup dengan menggunakan echo disertai dengan variabel yang akan ditampilkan. Jika kita kombinasikan dengan teks tambahan dapat melakukannya seperti contoh dibawah ini:
```
 //kita coba untuk print
    echo $nama; //kalau mau print variabel saja tanpa tambahan teks bisa dengan langsung menulis variabelnya saja
    echo " bekerja sebagai ". $profesi ."<br>" ;
    //atau kita bisa buat dalam satu echo saja
    echo $nama." Bekerja Sebagai ". $profesi;
```

## Tipe Data dan Variabel
Ada berbagai tipe data serta mendeklarasikannya dalam PHP, berikut penjelasannya dalam tabel.
| Tipe Data | Deklarasi dalam PHP |
| ----------- | ----------- |
| String | Ada 2 yaitu: "String" atau 'String' |
| Integer | langsung tulis angka: 1234 |
| Float | langsung tulis angka dan koma diganti titik: 12.02 |

Contoh program:
```
  $ribuan = 1000; //integer
  $pecahan = 105.55; //float , koma diganti titik di php
  $profesi = 'Web Developer & UI/UX'; //string dapat memakai (")
```

## Operator Aritmatika dalam PHP
Ada berbagai operator aritmatika di PHP, berikut penjelasannya dalam tabel.
| Operator | Syntax dalam PHP |
| ----------- | ----------- |
| Penjumlahan | + |
| Pengurangan | - |
| Perkalian | * |
| Pembagian | / |
| Modulo | % |
| Increment | ++ |
| Decrement | -- |

Contoh programnya adalah sebagai berikut:
```
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
```

## Fungsi Matematika dalam PHP
Fungsi matematika dalam PHP sangatlah banyak. Lebih lanjut teman-teman dapat lihat di [fungsi math PHP](https://www.phptpoint.com/php-math-functions/#:~:text=The%20PHP%20math%20function%20can%20basically%20handle%20the,that%20are%20used%20very%20frequently%20in%20the%20scripts.). Kita hanya bahas 4 yang umum yaitu round,rand(min,max), max, min. 
| Fungsi dalam PHP | Keterangan |
| ----------- | ----------- |
| round | membulatkan angka |
| rand | menampilkan angka random |
| max | menampilkan nilai terbesar |
| min | menampilkan nilai terkecil |

contoh programnya adalah sebagai berikut:
```
    //round: fungsi untuk menjadikan pecahan koma kedalam bilangan bulat yang mendekati
    echo round(12.6). "<br>";
    //ran: untuk melakukan random angka
    echo rand(1,10). "<br>";
    //max dan min, ini udah umum lah ya
    echo max(100, 1001, 10045). "<br>";
```

## Metode String
Ada berbagai metode dalam string tapi kita akan bahas yang umum saja. Berikut adalah berbagai metode tersebut.
| Metode | Keterangan |
| ----------- | ----------- |
| strlen | Menghitung panjang string |
| str_word_count | Menghitung jumlah kata dalam string |
| str_replace | Menggantikan nilai string|
| str_repeat | Mengulangi string sebanyak n kali |
| str_shuffle | Mengacak posisi string |

Contoh kodenya adalah:
```
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
```

## Array dalam PHP
Ada dua cara penulisan array dalam PHP, dibawah ini akan ditampilkan contohnya. Kemudian untuk print array dapat menggunakan print_r untuk menampilkan semuanya. atau $array[n] untuk menampilkan nilai salah satu array.
```
    //penulisan array ada 2:
    $sayur = array('Bayam','Paku','Sawi','Bayam');
    $juventus = ['Pirlo', 'Buffon', 'Ronaldo'];

    //print ada dua tipe:
    //print semua
    print_r($sayur);
    echo "<br>";
    //print satuan
    echo $juventus[0];
```

## Metode dalam Array
Berikut ini adalah metode umum dalam array yaitu:
| Metode | Keterangan |
| ----------- | ----------- |
| array_unique | Menampilkan nilai array yang unik tanpa duplikasi |
| array_reverse | Membalikkan posisi array dari yang besar ke terkecil |
| shuffle | Mengacak posisi array |
| count | Menghitung jumlah array|
| sort | Mengurutkan array dari abjad a-z |

Contoh programnya adalah sebagai berikut:
```
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
```

## Associative Array
Associative Array memiliki struktur yang sedikit beda yaitu terdapat tambahan key => value. Berikut kode programnya.
```
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

```

## Associative Array Method
Metode yang akan kita bahas ada 3 yaitu: array_values, array_keys, array_merge.
| Metode | Keterangan |
| ----------- | ----------- |
| array_values | Mengubah asosiatif array menjadi array biasa |
| array_keys | Menampilkan keys yang ada dalam array |
| array_merge| Menggabungkan 2 array |

Contoh programnya adalah sebagai berikut:
```
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

```

## Multi Dimensi Array
Multi dimensi array adalah memasukkan array dalam array. berikut adalah programnya.
```
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
```

## Loop dalam PHP
Loop atau perulangan digunakan untuk membuat fungsi perulangan yang banyak digunakan di dalam pemrograman. Misalnya kita ingin mencetak sebuah kalimat sebanyak sepuluh kali maka kita bisa membuatnya dengan loop tanpa membuat print/echo sebanyak sepuluh kali.
1. for loop
```
    for($i=0; $i < 5; $i++){
        echo "Mari Belajar <br>";
    }
```
2. while loop
```
    $kue = ['Donat', 'Bolu','Ultah','Odading'];
    //while
    $i=0;
    while($i<count($kue)){
        echo $kue[$i]."<br>";
        $i++;
    }
```
3. do while loop
```
    $j=0;
    $roti = ['Roma', 'Sariroti','Tawar','Kelapa'];
    do{
        echo $roti[$j]."<br>";
        $j++;
    }while($j<count($roti));
```

## Array & Loop
Loop dalam array dapat digunakan dengan berbagai versi. berikut adalah beberapa contohnya.
1. for loop untuk array
```
    $makanan = ['Ayam', 'Ikan', 'Tahu','Tempe'];

    for($i=0; $i < count($makanan); $i++){
        echo $makanan[$i]."<br>";
    }
```
2. foreach untuk array
```
    //ada cara lain juga untuk menampilkan semua isi array yaitu dengan foreach
    $nonton = ['Netflix', 'Diney+', 'Hulu', 'Prime Video'];
    foreach($nonton as $n){
        echo $n."<br>";
    }
    
```
3. Loop di Associative Array
```
    $mahasiswaub = array("nama"=>"Munaf Ali",
                        "nim"=>"UB23421",
                        "jurusan"=>"Agama Budha"
    );
    foreach($mahasiswaub as $key =>$value){
        echo $key. " = ". $value."<br>";
    }

```

## Pengkondisian dalam PHP
Pengkondisian sangat berguna dalam web serta banyak digunakan dalam pemrograman. secara umum kita dapat gunakan if dan else. berikut adalah contohnya:
```
    $punya = 'saya';
    if($punya == 'saya'){
        echo "betul sekali itu";
    }else{
        echo "salah, bukan itu";
    }
```
Ada berbagai operator yang dapat digunakan dalam pengkondisian. Berikut adalah operator tersebut.
| Operator | Keterangan |
| ----------- | ----------- |
| == | Sama dengan = membandingkan kesamaan nilai |
| != | Sama dengan = membandingkan kesamaan nilai |
| === | Membandingkan kesamaan nilai dan type datanya |
| > dan >= | Besar dari dan besar sama|
| < dan <= | Kecil dari dan kecil sama|
| && | Jika kita ingin kedua persyaratan benar |
| || | Jika kita ingin salah satunya benar|


Selanjutnya untuk persyaratannya lebih dari satu maka dapat menggunakan else if.
```
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
```
Pada dasarnya untuk if dan else mengambil prinsip true dan false, jadi jika true dia lakukan sesuatu dan false dia lakukan sesuatu.
```
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
```
Pengkondisian selanjutnya adalah nested if atau pengkondisian bercabang. yaitu terdapat if didalam if.
```
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
```
Cara lain selain if dan else adalah dengan switch dan case. berikut adalah contohnya:
```
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
```
## Fungsi pada PHP
Fungsi pada PHP dapat dilakukan dengan deklarasi function namafungsi(). berikut contoh penerapan programnya.
```
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
```
Kita juga dapat menambahkan parameter dalam fungsi. berikut adalah contohnya.
```
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

```

Kemudian ada syntax return yang berfungsi untuk mengembalikan nilai dari yang di return. Berikut contohnya:
```
    //return berfungsi untuk mengembalikan nilainya jadi fungsi tidak bisa langsung di print, mesti pakai echo untuk menampilkannnya
    function penjumlahan($x,$y){
        $z=$x + $y;
        return $z;
    }
    $hasil = penjumlahan(2,6);
    echo $hasil;

```
Selanjutnya ada scope yang menandakan variabel global dan variabel lokal. variabel global adalah variabel yang berada di luar fungsi yang dapat digunakan untuk banyak fungsi. variabel lokal adalah variabel yang hanya bisa digunakan di dalam fungsi. Berikut adalah contoh programnya.
```
    //scope adalah untuk menandakan variabel tersebut lokal atau global.
    $as = 20;
    $bs = 10;

    function hasil(){
        global $as, $bs;//ini penanda dia global karena berada di luar fungsi
        $zs = $as / $bs;
        return $zs;
    }
    echo hasil();
```
Ada fungsi yang tidak diketahui atau fungsi tanpa nama (anonymous function). 
```
    $giro = function($tulis){
        echo $tulis;
    };
    $giro('Ada-ada aja ya');

```
Terakhir adalah callback function yaitu memanggil fungsi dalam variabel atau fungsi lainnya. berikut contoh programnya.
```
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
```
