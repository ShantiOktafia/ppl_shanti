<?php
// File: test_name.php
require_once "Validator.php";

// Test Case 1: Nama valid (nama lengkap Anda)
try {
    $result = validateName("Shanti Oktafia"); // ganti dengan nama lengkapmu
    echo "PASS: Nama 'Shanti Oktafia' diterima\n";
} catch (Exception $e) {
    echo "FAIL: Nama 'Shanti Oktafia' tidak diterima. Error: " . $e->getMessage() . "\n";
}

// Test Case 2: Nama berisi angka
try {
    $result = validateName("Shanti1212");
    echo "FAIL: Nama 'Shanti1212' seharusnya ditolak\n";
} catch (Exception $e) {
    echo "PASS: Nama 'Shanti1212' ditolak. Error: " . $e->getMessage() . "\n";
}

// Test Case 3: Nama kosong
try {
    $result = validateName("");
    echo "FAIL: Nama kosong seharusnya ditolak\n";
} catch (Exception $e) {
    echo "PASS: Nama kosong ditolak. Error: " . $e->getMessage() . "\n";
}