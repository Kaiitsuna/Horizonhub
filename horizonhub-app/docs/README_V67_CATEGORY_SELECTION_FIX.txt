===================================================================
HORIZON HUB - V67 INDIKATOR KARTU TERPILIH (PILIH FASILITAS / RUANGAN)
===================================================================

Masalah yang Dilaporkan:
- Pada wizard Peminjaman Langkah 1 ("Pilih jenis ruangan atau fasilitas"), ketika
  memilih salah satu dari 4 kartu (Ruang Kelas, Laboratorium, Aula, Ruang Rapat),
  tidak terlihat tanda atau penanda visual kartu mana yang sedang dipilih.

Penyebab Teknis:
1. Aturan CSS '#appPage .category-card' pada palet warna sebelumnya memiliki
   'border: 1px solid #ebd0d5 !important' dan 'background: #ffffff !important',
   sehingga mengesampingkan (menimpa) style '.category-card.selected'.
2. Tidak adanya badge penanda visual atau outline tegas pada kartu yang sedang aktif.

Solusi & Perubahan yang Diterapkan:
1. Penanda Visual yang Sangat Tegas & Kontras:
   - Border Tebal Maroon: 'border: 3px solid #8c122e !important;'
   - Glow & Outer Ring: 'box-shadow: 0 12px 28px rgba(140, 18, 46, 0.24), 0 0 0 2px rgba(140, 18, 46, 0.25) !important;'
   - Background Aktif Hangat: 'background: #fff3f5 !important;' (rose blush lembut selaras tema 3-tier)
   - Elevasi Kartu: 'transform: translateY(-4px) !important;' memberikan efek fisik terangkat saat dipilih.
   - Warna Judul Kartu: Teks 'b' berubah menjadi '#8c122e' bold 800.
   - Inner Border Overlay: '::before' dengan inset 0 border 2px maroon menyambung di atas foto tanpa terpotong.
2. Badge "✓ Terpilih" di Sudut Kanan Atas Foto:
   - Ditambahkan elemen badge '.category-selected-badge' di setiap kartu dengan ikon centang SVG dan teks "Terpilih".
   - Tampil dengan animasi 'badgePop' yang halus begitu kartu dipilih.
   - Latar belakang gradien maroon (#87102b ke #5d071a) dengan border putih dan shadow tajam.
   - Dilengkapi fallback '::after' untuk ketahanan ganda.
3. Aksesibilitas & Responsivitas:
   - Ditambahkan atribut 'aria-pressed="true/false"' yang otomatis diperbarui secara dinamis oleh JavaScript.
   - Penyesuaian ukuran badge pada layar mobile (<600px) agar proporsional dan tidak menutupi foto.
4. Peningkatan pada Langkah 2 (Pilih Ruangan):
   - Diperkuat juga penanda seleksi pada kartu '.room-option.selected' dengan border 2.5px maroon, background blush, dan elevasi halus.
5. Cache Buster:
   - 'style.css?v=67' dan 'script.js?v=67' pada index.html.

File yang Diubah:
- index.html (tambah badge terpilih, aria-pressed, type="button", cache buster v=67)
- style.css (tambah aturan seleksi kartu V67 dengan prioritas tinggi dan responsif)
- script.js (update logika setCategory untuk toggle aria-pressed dan refresh class)
===================================================================

