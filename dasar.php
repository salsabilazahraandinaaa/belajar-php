<?php
      // Variable
      // $1nama; Contoh Salah (Karena diawali angka)
      // $#nama; Contoh salah (Ada simbol ditengah)
      // nama; Contoh salah (Tidak ada simbol $)
      $nama = "Salsabilla Zahra Andina";
      $usia = 16;
      echo "Nama saya $nama <br>";
      echo "Usia saya $usia tahun <br>";
      
      // Tipe data (Integer, Float, String)
      // (Boolean, Array)
      $namalengkap = "Salsabilla Zahra Andina"; // String
      $umur = 16; // Integer
      $nilai = 99.99; // Float
      $jomblo = FALSE; // Boolean (TRUE/FALSE)
      // Array String
      $namarpl2 = array("Adnan", "Agil", "Agung");
      
      echo "Nama Lengkap : $namalengkap <br>";
      echo "Umur : $umur <br>";
      echo "Nilai : $nilai <br>";
      echo "Jomblo : $jomblo <br>";
      echo "<hr>";
      echo "Array 0 : $namarpl2[0] <br>"; // Adnan
      echo "Array 2 : $namarpl2[2] <br>"; // Agung
      echo "<hr>";
      
      // Aritmatika(+ - / * %)
      echo "Angka1: " . $angka1 = 10; echo "<br>";
      echo "Angka2: " . $angka2 = 5; echo "<hr>";

      echo "Tambah :" . $tambah = $angka1 + $angka2 . "<br>";
      echo "Kurang :" . $kurang = $angka1 - $angka2 . "<br>";
      echo "Bagi :" . $bagi = $angka1 / $angka2 . "<br>";
      echo "Kali :" . $kali = $angka1 * $angka2 . "<br>";
      echo "Sisa Bagi :" . $sisabagi = $angka1 % $angka2 . "<br>";
      echo "<hr>";

      // Operator Perbandingan (>, <, !=, ==, ===)
      // Return TRUE(1), FALSE(NULL / KOSONG)
      $a = 10;
      $b = 5;
      $c = "10";

      echo "== :"; echo $a == $c; echo "<br>";
      echo "> :"; echo $a > $b; echo "<br>";
      echo "< :"; echo $a < $b; echo "<br>";
      echo "!= :"; echo $a != $b; echo "<br>";
      echo "=== :"; echo $a === $c; echo "<br>";
      echo "<hr>";
      // Operator Logika (AND, OR, &&, ||)
      // IF 

      $x = 10;
      $y = 20;

      if ($x == 10 AND $y == 20){ echo "Terpenuhi 2 Variable <hr>"; }
      if ($x == 5 OR $y == 20){ echo "Salah satu Variable Terpenuhi <hr>"; }