@extends('layouts.fe.base')
@section('title', 'About')

@section('content')

    <!-- Section -->
    <section class="section-ticket">
        <div class="header">
            <img src="{{ asset('fe') }}/img/bg-news.jpg">
            <div class="overlay">
                <div class="desc">
                    <h3>Tentang Mimika</h3>
                    {{-- <span class="ion-ios-star checked"></span>
                    <span class="ion-ios-star checked"></span>
                    <span class="ion-ios-star checked"></span>
                    <span class="ion-ios-star checked"></span>
                    <span class="ion-ios-star checked"></span> --}}
                </div>
            </div>
        </div>
        <div class="body" style="margin-top:-44px;">
            <div class="panel" id="struktural">
                <div class="panel-header">
                    <span class="ion-ios-bookmarks"></span>&nbsp; Kepala Daerah - Masa Jabatan Masa Periode 2019-2024
                </div>
                <div class="panel-body">
                    <ul>
                        <p><b><u>Bupati</u></b> : Dr. Eltinus Omaleng S.E., M.H. <br> <b><u>Wakil Bupati</u></b> : Johannes Rettob, S.Sos, MM.</p>
                    </ul>
                </div>
            </div>
            <div class="panel" id="visi">
                <div class="panel-header">
                    <span class="ion-ios-bookmarks"></span>&nbsp; Visi
                </div>
                <div class="panel-body">
                    <p>" Terwujudnya Mimika Cerdas, Aman, Damai dan Sejahtera "</p>
                </div>
            </div>
            <div class="panel" id="misi">
                <div class="panel-header">
                    <span class="ion-ios-bookmarks"></span>&nbsp; Misi
                </div>
                <div class="panel-body">
                    <ul>
                        <li>Membangun Regulasi dan Sumber Daya Manusia yang Cerdas dan Memahami Teknologi Informasi.</li>
                        <li>Menciptakan Mimika yang Aman, Tertib dan Damai.</li>
                        <li>Mewujudkan Pemerataan Pembangunan Pelayanan Dasar, Ekonomi dan Infrastruktur di Wilayah
                            Pedalaman dan Pesisir.</li>
                        <li>Mewujudkan Pemerintahan yang Dinamis, Bersih, Berwibawa, Akuntabel, Profesional dan Inovatif.
                        </li>
                        <li>Membangun Sentra-Sentra Ekonomi Baru di Wilayah Mimika.</li>
                    </ul>
                </div>
            </div>
            <div class="panel" id="opd">
                <div class="panel-header">
                    <span class="ion-ios-bookmarks"></span>&nbsp; Organisasi Perangkat Daerah (OPD) / Badan / Dinas
                </div>
                <div class="panel-body">
                    <ol>
                        <li>Badan Kepegawaian dan Pengembangan Sumber Daya Manusia</li>
                        <li>Badan Kesatuan Bangsa dan Politik</li>
                        <li>Badan Penanggulangan Bencana Daerah</li>
                        <li>Badan Pendapatan Daerah</li>
                        <li>Badan Pengelolaan Keuangan dan Aset Daerah</li>
                        <li>Badan Perencanaan Pembangunan Daerah</li>
                        <li>Bagian Administrasi Perekonomian Dan Pembangunan</li>
                        <li>Bagian Administrasi Sumber Daya Manusia</li>
                        <li>Bagian Hukum</li>
                        <li>Bagian Humas dan Protokoler</li>
                        <li>Bagian Kesejahteraan Rakyat</li>
                        <li>Bagian Layanan Pengadaan Barang dan Jasa</li>
                        <li>Bagian Organisasi</li>
                        <li>Bagian Tata Pemerintahan</li>
                        <li>Bagian Umum dan Perlengkapan</li>
                        <li>Dinas Kependudukan dan Pencatatan Sipil</li>
                        <li>Dinas Kesehatan</li>
                        <li>Dinas Ketahanan Pangan</li>
                        <li>Dinas Komunikasi dan Informatika</li>
                        <li>Dinas Koperasi da Usaha Kecil Menengah</li>
                        <li>Dinas Lingkungan Hidup</li>
                        <li>Dinas Pariwisata, Kebudayaan, Pemuda dan Olahraga</li>
                        <li>Dinas Pekerjaan Umum dan Penataan Ruang</li>
                        <li>Dinas Pemberdayaan Masyarakat dan Kampung</li>
                        <li>Dinas Pemberdayaan Perempuan dan Perlindungan Anak, Pengendalian Penduduk dan Keluarga Berencana
                        </li>
                        <li>Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu</li>
                        <li>Dinas Pendidikan</li>
                        <li>Dinas Perhubungan</li>
                        <li>Dinas Perikanan</li>
                        <li>Dinas Perindustrian dan Perdagangan</li>
                        <li>Dinas Perpustakaan dan Arsip Daerah</li>
                        <li>Dinas Perumahan, Kawasan Pemukiman dan Pertanahan</li>
                        <li>Dinas Peternakan dan Kesehatan Hewan</li>
                        <li>Dinas Satuan Polisi Pamong Praja</li>
                        <li>Dinas Sosial</li>
                        <li>Dinas Tanaman Pangan, Hortikultura dan Perkebunan</li>
                        <li>Dinas Tenaga Kerja dan Transmigrasi</li>
                        <li>INSPEKTORAT</li>
                        <li>RSUD Kabupaten Mimika</li>
                        <li>Sekretariat Daerah</li>
                        <li>Sekretariat DPRD</li>
                    </ol>
                </div>
            </div>
            <div class="panel" id="deskripsi">
                <div class="panel-header">
                    <span class="ion-ios-bookmarks"></span>&nbsp; Deskripsi
                </div>
                <div class="panel-body">
                    <p style="text-align:justify;">
                        Pada awalnya Kabupaten Mimika adalah bagian dari Kabupaten Fakfak yaitu hanya terdiri dari tiga
                        Distrikamatan (Distrikamatan Agimuga, Distrikamatan Mimika Barat, dan Distrikamatan Mimika Timur).
                        Pada tahun 1996, berdasarkan Peraturan Pemerintah Nomor 54 Tahun 1996 tentang pembentukan Kabupaten
                        Mimika di wilayah provinsi daerah tingkat I Irian Jaya, pada saat itu disebut kabupaten
                        administratif, yang ditetapkan dan diundangkan pada tanggal 13 Agustus 1995. Pada saat dikeluarkan
                        peraturan pemerintah ini, belum ada penjabat bupati yang diangkat. Pada tanggal 8 Oktober 1996,
                        berdasarkan berita acara pengambilan janji jabatan bupati kabupaten Mimika, Provinsi Daerah Tingkat
                        I Irian Jaya terhadap Drs. Titus Potereyauw, telah dilaksanakan pengambilan janji jabatan bupati
                        Kabupaten Mimika oleh Menteri Dalam Negeri Moh.Yogie sesuai keputusan menteri dalam negeri, Titus
                        Potereyauw menjabat sebagai bupati Mimika pertama sampai tahun 2001.
                        <br><br>
                        Pada tahun 1999, berdasarkan UU Nor 45 tahun 1999 tentang pembentukan provinsi Irian Jaya Tengah,
                        Propinsi Irian Jaya Barat, Kabupaten Paniai, Kabupaten Mimika, Kabupaten Puncak Jaya, dan Kota
                        Sorong, maka Kabupaten Mimika sejak itu telah menjadi kabupaten defenitif. Tanggal 15 November 2010
                        pada masa kepemimpinan Bupati Mimika Klemen Tinal, telah diundangkan Perda No 12 tahun 2010 tentang
                        hari jadi Kabupaten Mimika yang ditetapkan pada tanggal 18 Maret 2001, hal ini berdasarkan peresmian
                        kabupaten Mimika oleh Gubernur Provinsi Papua, Drs. Jakobus Perviddya Salosa. M.Si
                        <br><br>
                        Pada tanggal 12 Maret 2016 telah diadakan rapat yang dipimpin oleh Bupati Mimika Eltinus Omaleng,
                        dihadiri Sekretaris Daerah Mimika, ketua dan anggota DPRD Mimika, tokoh masyarakat, ketua-ketua
                        kerukunan, pimpinan SKPD, serta dihadiri juga oleh bupati Mimika pertama Drs. Titus Potereyauw dan
                        Athanasius Allo Rafra, agenda rapatnya adalah pelurusan sejarah hari jadi kabupaten Mimika. Dalam
                        rapat itu, hari jadi kabupaten Mimika disepakati pada tanggal 8 oktober 1996, sesuai berita acara
                        pengambilan janji jabatan bupati kabupaten Mimika, provinsi daerah tingkat I Irian Jaya, Drs. Titus
                        Potereyauw dimana pada saat itu yang mengambil janji adalah menteri dalam negeri republik lndonesia
                        Moh. Yogie. Sesuai hasil kesepakatan oleh Ketua DPRD Kabupaten Mimika dan tokoh-tokoh masyarakat,
                        serta pelaku sejarah, maka Bupati Mimika Eltinus Omaleng telah mengusulkan perubahan Peraturan
                        Daerah Nomor 12 Tahun 2010 tentang hari jadi kabupaten Mimika kepada DPRD Kabupaten Mimika yang
                        semula ditetapkan pada tanggal 18 maret 2001.
                        <br><br>
                        Ibu kota Kabupaten Mimika terletak di Kota Timika, memiliki 18 Distrik yang terdiri dari 5 Distrik
                        dalam kota ( Distrik Mimika Baru, Distrik Kuala Kencana, Distrik Wania, Distrik Iwaka, dan Distrik
                        Kwamki Narama), 5 Distrik di pegunungan ( Distrik Tembagapura, Distrik Jila, Distrik Agimuga,
                        Distrik Alama, dan Distrik Hoya) , dan 8 Distrik di pesisir ( Distrik Mimika Timur, Distrik Mimika
                        Timur Tengah, Distrik Mimika Timur Jauh, Distrik Mimika Barat, Distrik Mimika Barat Tengah, Distrik
                        Mimika Barat Jauh, Distrik Jita, dan Distrik Amar). Di kabupaten ini terdapat tambang emas terbesar
                        di dunia milik PT. Freeport Indonesia yang terletak di Distrik Tembagapura, dan terdapat sebuah
                        bandar udara Internasional , yaitu Bandara Moses Kilangin yang terletak di Distrik Mimika Baru ,
                        serta Pelabuhan Nasional yaitu Pelabuhan Poumako di Distrik Mimika Timur.
                        <br><br>
                        Kabupaten Mimika mempunyai batas wilayah yaitu, di sebelah Utara Kabupaten Paniai, Kabupaten Nabire,
                        Kabupaten Tolikara, Kabupaten Dogiyai, Kabupaten Puncak, Kabupaten Puncak Jaya dan Kabupaten Deiyai
                        Selatan LauArafuru Barat Kabupaten Kaimana Timur Kabupaten Jayawijaya dan Kabupaten Yahukimo. Letak
                        geografis Kabupaten Mimika terletak antara 134o31’-138o31’ Bujur Timur dan 4o60’-5o18’ Lintang
                        Selatan. Memiliki luas wilayah 21.693,51 km2atau 4,75% dari luas wilayah Provinsi Papua.
                    </p>
                </div>
            </div>
            <div class="panel" id="lokasi">
                <div class="panel-header">
                    <span class="ion-map"></span>&nbsp; Lokasi
                </div>
                <div class="panel-body">
                    <div class="col-1">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1018062.7917491948!2d135.78066189610783!3d-4.628356682439664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6823f86aa45869eb%3A0xb08e127a57ad45b!2sMimika%20Regency%2C%20Papua!5e0!3m2!1sen!2sid!4v1671743646096!5m2!1sen!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        {{-- <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15788.424139256455!2d115.283967!3d-8.391231!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x165ad32430c70f14!2sElephant+Safari+Park+Lodge+Bali!5e0!3m2!1sen!2sid!4v1524497165802"
                            width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> --}}
                    </div>
                    <div class="col-2">
                        <h4><u>Pusat Pemerintahan Kabupaten Mimika</u></h4>
                        <p>
                            Jl. Cendrawasih SP. III Kuala Kencana - Timika - Papua
                            <br>
                            Telpon : 0811 4900 700
                            <br>
                            Email : info@mimikakab.go.id
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
