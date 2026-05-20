
<html lang="en">
<head>
    <title>Tugas Web</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<!--referensi: https://www.its.ac.id/news/its-wacanakan-akselerasi-profesi-insinyur-bagi-sarjana-teknik -->
<body>
<!--bagian header atas-->
<div class="container mt-5 mb-4">
    <p class="mb-0  text-dark font-weight-bold">Flex Box</p>
    <p class="mb-0 font-weight-light text-secondary">Nama: Fabio Andrea Liui <br> NRP: 5026241146 </p>
    <div class="d-flex p-3 mb-1">
        <!--menggunakan Auto Margin,mr-auto membuat item mengisi bagian kanan dari teks "ITS News"-->
        <div class="p-2 mr-auto text-white rounded" style="background-color: #013880;">ITS News</div>
        <div class="p-2 text-white rounded mr-2"  style="background-color: #013880;">Tentang</div>
        <div class="p-2 text-white rounded" style="background-color: #013880;">Pendaftaran</div>
    </div>
    <!-- menggunakan flex-column untuk menyusun konten secara vertikal -->
    <div class="d-flex flex-column mb-4 shadow rounded overflow-hidden">
        <div class="p-3" style="background-color: #bad3eb; color: #013880; font-size: 18px; font-weight: bold;">
            <h3>ITS Wacanakan Akselerasi Profesi Insinyur bagi Sarjana Teknik</h3>
        </div>
        <div class="p-2" style="background-color: #013880; color: #e9e5e5; font-size: 12px;">
            Sabtu, 14 Maret 2026 | Ditulis oleh: <strong>indahts</strong> (indah_ts@its.ac.id)
        </div>
    </div>
    <!--bagian isi dari artikel-->
    <!--membagi website menjadi 2 bagian dan membuatnya responsif dan fleksibel, flex-md-row memungkinkan layout berubah sesuai ukuran layar(md = medium)-->
    <div class="d-flex flex-column flex-md-row p-0 shadow rounded">
        <!--bagian kiri artikel-->
        <!--menggunakan flex-column untuk menusun konten secara vertikal-->
        <div class="d-flex flex-column small mt-2 mr-5 ml-4">
            <div class="p-3" style=" color: #a4a4a4; font-size: 14px;">
                By<br>
                <b>indahts</b><br>
                indah_ts@its.ac.id<br>
            </div>
            <!--svg Copy dari web its-->
            <div class="p-3" style="color: #a4a4a4; font-size: 14px;"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M1.03125 6.174C0.989582 6.06174 0.989582 5.93825 1.03125 5.826C1.4371 4.84192 2.12601 4.00052 3.01064 3.40845C3.89527 2.81638 4.93577 2.50031 6.00025 2.50031C7.06473 2.50031 8.10524 2.81638 8.98987 3.40845C9.87449 4.00052 10.5634 4.84192 10.9693 5.826C11.0109 5.93825 11.0109 6.06174 10.9693 6.174C10.5634 7.15807 9.87449 7.99948 8.98987 8.59155C8.10524 9.18362 7.06473 9.49969 6.00025 9.49969C4.93577 9.49969 3.89527 9.18362 3.01064 8.59155C2.12601 7.99948 1.4371 7.15807 1.03125 6.174Z" stroke="#7D899B" stroke-linecap="round" stroke-linejoin="round"></path><path d="M6 7.5C6.82843 7.5 7.5 6.82843 7.5 6C7.5 5.17157 6.82843 4.5 6 4.5C5.17157 4.5 4.5 5.17157 4.5 6C4.5 6.82843 5.17157 7.5 6 7.5Z" stroke="#7D899B" stroke-linecap="round" stroke-linejoin="round"></path></svg> 150</div>
            <!--menggunakan flex-wrap agar item dapat pindah ke baris berikutnya jika tidak cukup ruang -->
            <div class="d-flex flex-wrap">
                <div class="p-2 m-1 rounded font-weight-bold" style="background-color: #ebf5fb; color: #2e86de; font-size: 14px;">
                    Berita Terkini
                </div>
                <div class="p-2 m-1 rounded font-weight-bold" style="background-color: #ebf5fb; color: #2e86de; font-size: 14px;">
                    Berita Utama
                </div>
                <div class="p-2 m-1 rounded font-weight-bold" style="background-color: #ebf5fb; color: #2e86de; font-size: 14px;">
                    Headline
                </div>
                <div class="p-2 m-1 rounded font-weight-bold" style="background-color: #ebf5fb; color: #2e86de; font-size: 14px;">
                    Industry
                </div>
                <div class="p-2 m-1 rounded font-weight-bold" style="background-color: #ebf5fb; color: #2e86de; font-size: 14px;">
                    Innovation and Infrastructure
                </div>
                <div class="p-2 m-1 rounded font-weight-bold" style="background-color: #ebf5fb; color: #2e86de; font-size: 14px;">
                    Partnerships for SDGs
                </div>
                <div class="p-2 m-1 rounded font-weight-bold" style="background-color: #ebf5fb; color: #2e86de; font-size: 14px;">
                    Quality Education
                </div>
            </div>
        </div>
        <!--bagian kanan artikel-->
        <!--menggunakan flex-column untuk menyusun konten secara vertikal-->
        <div class="d-flex flex-column ml-3 mr-4 mt-3 mb-4 ">
            <div class="p-2 shadow"><img src="https://www.its.ac.id/news/wp-content/uploads/sites/2/2026/03/Rektor-ITS-Prof-Dr-HC-Ir-Bambang-Pramujati-ST-MSc-Eng-PhD-IPU-ASEAN-Eng-saat-memaparkan-peran-strategis-institusi-di-acara-Dialog-Keinsinyuran-2026-di-Gedung-Rektorat-ITS.jpeg" style="width: 100%;" class="img-fluid"></div>
            <div class="p-2 font-weight-light" style="font-size: 11px;">Rektor ITS Prof Dr (HC) Ir Bambang Pramujati ST MSc Eng PhD IPU ASEAN Eng saat memaparkan peran strategis institusi di acara Dialog Keinsinyuran 2026 di Gedung Rektorat ITS</div>
            <div class="p-2 pl-5 bg-white mr-5" ><b>Kampus ITS, ITS News — </b> <a href="https://www.its.ac.id/" target="_blank">Institut Teknologi Sepuluh Nopember (ITS)</a> terus berkomitmen memperkuat peran strategis insinyur dalam mendukung pembangunan nasional. Komitmen tersebut tercermin dalam kegiatan Dialog Keinsinyuran yang diselenggarakan oleh Program Studi Program Profesi Insinyur (PSPPI) ITS bersama Persatuan Insinyur Indonesia (PII) di Gedung Rektorat ITS, Jumat (13/3) sore.</div>
            <div class="p-2 ">Dalam kesempatan tersebut, Rektor ITS Prof Dr (HC) Ir Bambang Pramujati ST MSc Eng PhD IPU ASEAN Eng menyampaikan wacana percepatan jalur pendidikan profesi insinyur bagi lulusan sarjana teknik. ITS tengah mengkaji skema yang memungkinkan lulusan S1 teknik langsung melanjutkan pendidikan profesi insinyur selama satu tahun. “Lulusan sarjana teknik sebenarnya cukup banyak, tetapi yang melanjutkan hingga menjadi insinyur masih relatif sedikit,” ungkapnya.<br><br>
            Melalui skema tersebut, mahasiswa diharapkan dapat menyelesaikan pendidikan sarjana dan profesi insinyur dalam waktu sekitar lima tahun. Bambang menilai langkah ini menjadi bagian dari upaya meningkatkan jumlah insinyur profesional di Indonesia. “Program ini juga diharapkan bisa meningkatkan Engineering Index pemerintah hingga 28 persen,” tegasnya optimistis.</div>
            <div class="p-2 shadow "><img src="https://www.its.ac.id/news/wp-content/uploads/sites/2/2026/03/Wakil-Ketua-Umum-PII-Prof-Dr-Ir-Agus-Taufik-Mulyono-MT-IPU-ASEAN-Eng-saat-menjelaskan-materi-pada-acara-Dialog-Keinsinyuran-2026-di-Gedung-Rektorat-ITS-1536x864.jpeg" style="width: 100%;" class="img-fluid"></div>
            <div class="p-2 font-weight-light" style="font-size: 11px;">Wakil Ketua Umum PII Prof Dr Ir Agus Taufik Mulyono MT IPU ASEAN Eng saat menjelaskan materi pada acara Dialog Keinsinyuran 2026 di Gedung Rektorat ITS</div>
            <div class="p-2">Bambang menyoroti transisi praktik keinsinyuran yang kini menuntut paradigma baru. Insinyur ke depan diharapkan menguasai STEM, efisiensi energi, dan teknologi cerdas, sekaligus mampu memastikan praktik keinsinyuran yang ramah gender dan disabilitas. Ia menambahkan bahwa program ini bukan hanya sertifikasi, tetapi menjadi gawang dalam praktik profesional. “Akselerasi perlu dilakukan agar Indonesia mampu menyiapkan insinyur paripurna yang mendukung visi Indonesia Emas,” ujar Guru Besar Teknik Mesin ITS ini mengingatkan.
            <br><br>
            Selain itu, ia juga menggarisbawahi sejumlah isu strategis dalam dunia keinsinyuran, seperti kesenjangan antara inovasi akademik dan kebutuhan industri, pentingnya menjaga integritas serta etika profesi, hingga pesatnya perkembangan teknologi yang perlu dikelola secara bijak oleh para insinyur. “Kami berharap para insinyur dapat mengantisipasi tantangan ini dengan profesionalisme dan inovasi,” harap Rektor ke-13 ITS tersebut.
            <br><br>
            Sejalan dengan itu, ITS berencana membahas lebih lanjut penerapan World Engineering Forum Government Engineering Index tahun ini. Indeks tersebut akan mengukur praktik keinsinyuran dalam pembangunan daerah, sekaligus meningkatkan kolaborasi antara perguruan tinggi dan pemerintah dalam memperkuat kualitas dan profesionalisme insinyur.</div>
            <div class="p-2 shadow "><img src="https://www.its.ac.id/news/wp-content/uploads/sites/2/2026/03/Suasana-Dialog-Keinsinyuran-2026-yang-digelar-di-Ruang-Sidang-Senat-Gedung-Rektorat-ITS-1536x864.jpeg" style="width: 100%;" class="img-fluid"></div>
            <div class="p-2 font-weight-light" style="font-size: 11px;">Suasana Dialog Keinsinyuran 2026 yang digelar di Ruang Sidang Senat Gedung Rektorat ITS</div>
            <div class="p-2 ">Senada dengan hal tersebut, Wakil Ketua Umum Persatuan Insinyur Indonesia (PII) Prof Dr Ir Agus Taufik Mulyono MT IPU ASEAN Eng menekankan bahwa profesi insinyur memiliki tanggung jawab besar dalam memastikan keselamatan, kesehatan, serta keberlanjutan pembangunan bagi masyarakat. “Praktik keinsinyuran harus dijalankan oleh tenaga profesional yang memiliki kompetensi serta mematuhi kode etik profesi,” tegas lelaki yang kerap disapa ATM tersebut.
            <br><br>
            Upaya ini sejalan dengan komitmen ITS dalam mendukung Sustainable Development Goals (SDGs). Khususnya pada poin ke-4 tentang Pendidikan Berkualitas, poin ke-9 mengenai Industri, Inovasi, dan Infrastruktur, serta poin ke-17 tentang Kemitraan untuk Mencapai Tujuan pembangunan berkelanjutan. <b>(HUMAS ITS)</b></div>
            <br>
            <br>
            <br>
            <br>
            <div class="p-1 ">Reporter: Naila Zalfa Hamidah</div>
        </div>
    </div>
</div>
</body>
</html>
