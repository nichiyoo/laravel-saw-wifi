<?php

return [
    'title' => 'Pusat Bantuan',
    'description' => 'Dapatkan bantuan dengan akun, aplikasi, atau topik lainnya.',

    'faq' => [
        'q1' => 'Untuk apa aplikasi ini?',
        'a1' => 'Ini adalah Sistem Pendukung Keputusan (DSS) yang memberi peringkat 14 kemantren di Yogyakarta berdasarkan prioritas untuk penempatan titik akses Wi-Fi gratis JSS baru. Sistem ini menggunakan metode Simple Additive Weighting (SAW) untuk menilai setiap kecamatan berdasarkan kriteria berbobot.',
        'q2' => 'Bagaimana peringkat dihitung?',
        'a2' => 'Setiap kandidat (kecamatan) dinilai dengan menormalkan nilai kriteria mentah ke skala 0–1, mengalikan masing-masing dengan bobot yang ditentukan, dan menjumlahkannya menjadi skor preferensi akhir. Kriteria benefit (semakin tinggi semakin baik) dibagi dengan maksimum kolom; kriteria cost (semakin rendah semakin baik) menggunakan minimum kolom dibagi dengan nilai. Kandidat dengan skor total tertinggi berada di peringkat pertama.',
        'q3' => 'Kriteria apa yang digunakan?',
        'a3' => 'Empat kriteria dievaluasi: kepadatan penduduk (benefit, 15%), jumlah pengguna Wi-Fi JSS (benefit, 25%), jumlah titik akses aktif (cost, 35%), dan dana mandiri masyarakat (cost, 25%). Bobot ini dapat disesuaikan dari halaman Metrik.',
        'q4' => 'Bisakah saya mengubah bobot kriteria?',
        'a4' => 'Ya. Buka halaman Metrik, ubah metrik apa pun, dan perbarui bobotnya. Setelah disimpan, jalankan ulang perhitungan di halaman Perhitungan DSS untuk melihat peringkat yang diperbarui.',
        'q5' => 'Bagaimana cara menambah atau memperbarui data kandidat?',
        'a5' => 'Data kandidat dapat dikelola dari halaman Kandidat. Anda dapat menambah kecamatan baru, mengubah yang sudah ada, atau menghapus entri yang tidak berlaku. Dataset juga dapat diunduh sebagai CSV dari halaman Tentang.',
        'q6' => 'Bagaimana cara memperbarui profil saya?',
        'a6' => 'Klik avatar anda di sudut kanan atas atau navigasi ke Profil dari sidebar. Anda dapat memperbarui nama, email, dan kata sandi di sana.',
    ],
];
