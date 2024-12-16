<?php
// Mendefinisikan variabel
$name = "Raffi";
$age = 18;

// Fungsi untuk menyapa
function greet($name) {
    return "Hello, " . $name . "!";
}

// Fungsi untuk memeriksa usia
function checkAge($age) {
    if ($age < 18) {
        return "You are underage.";
    } elseif ($age >= 18 && $age < 65) {
        return "You are an adult.";
    } else {
        return "You are a senior.";
    }
}

// Menampilkan hasil
echo greet($name) . "\n";
echo "You are " . $age . " years old.\n";
echo checkAge($age);
?>
