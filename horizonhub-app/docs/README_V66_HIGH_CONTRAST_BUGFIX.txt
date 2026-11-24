HORIZON HUB v66 — HIGH CONTRAST & BUGFIX RELEASE

Basis: v65 3-Tier Red Harmonious Color System.

Perbaikan Masalah & Bug:
1. Font & Ikon Sidebar:
   - Memperbaiki warna font navigasi sidebar yang sebelumnya gelap di atas latar belakang maroon.
   - Semua teks navigasi (#appPage .sidebar .nav-button) kini menggunakan warna putih murni (#ffffff) dengan kontras tinggi (>12:1).
   - Ikon navigasi menggunakan warna mawar terang (#ffccd6) yang kontras dan tajam.
   - Status menu aktif menggunakan latar putih bersih dengan teks merah maroon pekat (#6d0c23) dan indikator tebal.

2. Header & Dropdown:
   - Header dikembalikan ke permukaan terang berbingkai aksen merah (#8c122e 2.5px solid) sehingga logo resmi Horizon Hub tampil 100% jelas dan tidak tenggelam.
   - Input pencarian (global search) dibersihkan dari kotak ganda/background putih berlebih; teks dan placeholder terbaca jelas.
   - Teks dropdown profil dan notifikasi (#notificationPanel & #profileDropdown) memiliki kontras penuh (#2c050f), tidak ada lagi font yang samar.

3. Tautan Teks (.text-button):
   - Memulihkan semua tombol "Lihat semua →", "Lihat jadwal →", "Lihat detail →", dll. menjadi tautan teks murni tanpa kotak abu-abu/pink yang merusak layout.

4. Status Peminjaman & Semantic Colors:
   - Mengembalikan warna fungsional: Menunggu (Amber/Kuning), Disetujui (Hijau), Ditolak (Merah). Semua teks di dalamnya terbaca kontras.

5. Explore Campus & Overview Strip:
   - Ikon Denah Gedung, Direktori, Fasilitas, dan Dosen (.explore-icon) sekarang tampil tajam dengan garis merah maroon (#8c122e) dan teks hitam-maroon (#2c050f).
   - Kartu ringkasan aktivitas (Overview Strip) memiliki angka maroon tebal (#7a0f26) dan label jelas di atas kartu berbingkai mawar.

6. Penghilangan Warna Putih Menyilaukan Tetap Terjaga:
   - Latar belakang kanvas aplikasi tetap menggunakan Merah Terang (Soft Warm Rosy Cream: #f6eaed), memberikan kehangatan visual tanpa menyilaukan mata pengguna.

Cache Buster:
- index.html diperbarui ke style.css?v=66.

