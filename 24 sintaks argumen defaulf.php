<?php
function namaFungsi($parameter = 'nilaiDefault') {
    // kode fungsi di sini
}
function sapa($nama = 'pengunjung') {
    echo "Halo, $nama!";
}

sapa(); // Output: Halo, pengunjung!
sapa('Dewi'); // Output: Halo, Dewi!
sapa(); // menggunakan nilai default yang didefinisikan dalam fungsi

