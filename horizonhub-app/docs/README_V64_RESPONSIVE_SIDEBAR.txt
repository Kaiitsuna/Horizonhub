HORIZON HUB v64 — RESPONSIVE SIDEBAR UPDATE

Basis: v63 Stabilization Update.

Perubahan:
1. Desktop View (> 900px):
   - Sidebar navigasi kiri otomatis tampil permanen di sebelah kiri tanpa perlu mengklik tombol 3 garis (hamburger).
   - Tombol hamburger (3 garis) di header desktop otomatis disembunyikan agar tampilan bersih dan profesional.
   - Tombol close (X), brand logo duplikat di drawer, dan overlay gelap disembunyikan pada desktop.
   - Layout menggunakan CSS Grid 2 kolom yang presisi (kolom navigasi 260px dan kolom konten utama yang fleksibel).
   - Sidebar diatur sticky di bawah header dengan scrollbar halus transparan saat konten panjang.

2. Mobile / Layar HP (<= 900px):
   - Tombol hamburger (3 garis) tetap tampil di header.
   - Sidebar navigasi kiri tersembunyi secara default.
   - Sidebar meluncur (off-canvas drawer) dari sisi kiri saat tombol 3 garis ditekan/ditap.
   - Dilengkapi overlay latar belakang redup (backdrop blur).
   - Sidebar otomatis tertutup saat pengguna memilih menu/tab, menekan tombol X, mengetuk area luar/overlay, atau menekan tombol Escape.
   - Ditambahkan listener otomatis menutup drawer saat ukuran layar berpindah dari mobile ke desktop.

3. Cache buster stylesheet diperbarui ke v64 (style.css?v=64).

