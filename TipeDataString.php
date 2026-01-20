<?php

// Single Quote
echo 'Nama : ';
echo 'Magnus Carlsen';

// Escape Sequence
// hanya bisa digunakan di Double Quote String
// \n : untuk ENTER
// \t : untuk tab
echo "\n";

// Double Quote
echo "Asal \t: ";
echo "Norwegia\n";
echo "Umur \t: ";
echo "35 tahun\n";

// Multiline String
// Heredoc
echo <<<TEXT
Selamat belajar PHP,
sekarang kita belajar Tipe Data String
Ini adalah cara ketiga String
bisa menggunakan heredoc
TEXT;

// Nowdoc
echo <<<'TEXT'
Nowdoc sama seperti Heredoc 
tapi tidak memiliki memampuan parsing 
seperti di Heredoc dan Double Quote
TEXT;