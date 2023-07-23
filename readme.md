# SIDINAS

Daftar _bug_:

- Tidak ada _entry point_ utama (1)
- Ketika login tidak masuk ke halaman masing-masing (5)
- Pengecekan session/apakah sudah login atau tidak (5)
- Menu admin:
    - Menu Sidebar aktif tidak sesuai halaman (5)
    - Link `Home` dan `Contact` pada Menu Navbar tidak mengarah ke halaman yang sesuai (3)
    - Tidak ada halaman logout (3)
    - Ketika menambahkan data admin `admin/tambah_data_admin.php` error: `Incorrect integer value: '' for column 'id_admin' at row 1` (3)
    - Setelah menambahkan data admin tidak langsung mengarah ke list admin (1)
    - Tanggal lahir pada halaman tambah pegawai menggunakan tipe text alih-alih date sehingga menimbulkan bug tidak bisa menambahkan user/pegawai baru (3)
    - Setelah menambahkan data pegawai tidak langsung mengarah ke list pegawai (1)
    - Jika ID Pegawai terdapat duplikasi secara tidak sengaja akan memunculkan error: `Duplicate entry '123' for key 'user.PRIMARY'` (3)
    - Ketika edit data pegawai jenis kelamin tidak terpilih sesuai data yang ada (3)
    - Tidak bisa mengedit data pegawai jika ID Pegawai bukan angka, error: `Unknown column 'asdas' in 'where clause' in ...` (3)
    - Bug tampilan footer halaman tambah kepala sekolah (1)
    - Jika Kode Gaji terdapat duplikasi secara tidak sengaja akan memunculkan error: `Duplicate entry 'kode-ngasal' for key 'instansi.PRIMARY'` (3)
    - Setelah menambahkan data kepala sekolah tidak langsung mengarah ke list kepala sekolah (1)
    - Tidak bisa mengupdate Kode Gaji pada data kepala sekolah (1)
    - Halaman tambah surat masuk input berupa text, bukan inputan tanggal (1)
    - Ketika menambahkan data surat masuk terdapat error: `Incorrect integer value: '' for column 'id_masuk' at row 1` (3)
    - Setelah menambahkan data surat masuk tidak langsung mengarah ke list surat masuk (1)
    - Ketika edit surat masuk, tidak menampilkan ID Surat Masuk/ Label ID Masuk masih terlihat (1)
    - Halaman edit surat masuk input berupa text, bukan inputan tanggal (1)
    - Ketika edit surat masuk kode terdapat beberapa field yang tidak terpilih/kosong atau tidak sesuai dengan data yang ada (3)
    - Bug tampilan footer halaman tambah surat keluar (1)
    - Tidak ada pengecekan jenis file lampiran surat keluar (3)
    - File lampiran surat keluar tidak tersimpan (5)
    - Setelah menambahkan data surat keluar tidak langsung mengarah ke list surat keluar (1)
    - Bug tampilan halaman edit surat keluar (1)
    - Ketika edit surat keluar, tidak menampilkan ID Surat keluar/ Label ID keluar masih terlihat (1)
    - Halaman edit surat keluar input berupa text, bukan inputan tanggal (1)
    - Ketika edit surat keluar kode terdapat beberapa field yang tidak terpilih/kosong atau tidak sesuai dengan data yang ada (3)
    - Ketika menambahkan data pengumuman terdapat error: `Incorrect integer value: '' for column 'id_pengumuman' at row 1` (3)
    - Halaman tambah pengumuman pada bagian tanggal berupa text, bukan inputan tanggal (1)
    - Setelah menambahkan data pengumuman tidak langsung mengarah ke list pengumuman (1)
- Menu User:
    - Menu Sidebar aktif tidak sesuai halaman (5)
    - Tidak ada halaman logout (3)
    - Bug tampilan daftar surat keluar pada kolom gambar (1)
    - Tombol `Diterima` pada surat keluar tidak bekerja (3)
    - Tombol `Cetak` pada surat keluar tidak bekerja (5)
- Menu Kasubag:
    - Menu Sidebar aktif tidak sesuai halaman (5)
    - Tidak ada halaman logout (3)
    - Tombol `Diperiksa` pada surat masuk tidak bekerja (3)
    - Bug tampilan daftar surat keluar pada kolom gambar (1)
    - Tombol `Diperiksa` pada surat keluar tidak bekerja (3)

