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

