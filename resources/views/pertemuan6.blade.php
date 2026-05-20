
<!DOCTYPE html>
<html lang="en">

<head>
    <title>PKM ITS 2026 | Instagram | Linktree</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&family=Space+Mono:wght@400&display=swap"
        rel="stylesheet">

    <script>
        function showme() {
            //alert("Halo Selamat Siang");
            Swal.fire({
                title: "Hallo!",
                text: "selamat siang",
                icon: "success"
            });
            console.log("Ini baris 18, sudah sampai sini");
            a = 18 + 10;
            console.log("Hasil penjumlahan:" + a);
            c = 1 * 2 * 3;
            console.log("Hasil perkalian:" + c);
        }

        function changeText() {
            const element = document.getElementById("intro");
            element.innerHTML = "Sistem Informasi ITS";
        }

        function changeButtonColor() {
            const element = document.getElementById("tombol");
            element.style.color = "red";
            element.style.backgroundColor = "yellow";
        }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            background-color: #b3a89df2;
            font-family: 'Space Mono', monospace;
        }

        /*pengaturan kotak dalam pada bagian linktree*/
        .linktree-container {
            max-width: 580px;
            margin: 40px auto 0 auto;
            text-align: center;
            padding: 40px 20px;
            background-color: #fbefe3;
            border-radius: 24px;
            box-shadow: 0 24px 32px 0 rgba(0, 0, 0, 0.15);
            min-height: 100vh;
        }

        /*pengaturan pada bagia background menu linktree dan share*/
        .linktr-menu {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-top: -10px;
            margin-left: 8px;
            background-color: white;
            border: none;
        }

        /* gambar linktree atas*/
        .linktr-menu svg {
            width: 50px;
            margin-left: -10px;
        }

        /*pengaturan background pada menu share*/
        .linktr-share {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-top: -10px;
            margin-right: 8px;
            background-color: white;
            border: none;
        }

        /*mengatur gambar share*/
        .linktr-share svg {
            width: 20px;
            margin-left: 5px;
        }

        /*pengaturan pada bagian foto profil*/
        .foto-profil img {
            margin-top: 20px;
            width: 96px;
            height: 96px;
            border-radius: 50%;
            margin-bottom: 16px;
        }

        /*style untuk judul linktree*/
        .judul-linktree {
            font-size: 24px;
            font-weight: 400;
            margin-bottom: 16px;
        }

        /*logo instagram*/
        .link-insta {
            margin-bottom: 32px;
        }

        /*pengaturan gambar instagram*/
        .link-insta svg {
            width: 32px;
            height: 32px;
        }

        .link-insta a:hover svg {
            transform: scale(1.1);
        }

        /*pengaturan tombol*/
        .btn-utama {
            position: relative;
            padding: 20px;
            margin-bottom: 14px;
            border: 1px solid lightgrey;
            display: flex;
            justify-content: center;
            width: 100%;
            align-items: center;
            background-color: transparent;
            font-weight: 400;
            font-size: medium;
        }

        .btn-utama:hover {
            background-color: rgba(90, 84, 80, 0.2);
            text-decoration: none;
        }

        /*pengaturan titik 3 di sebelah kanan tombol*/
        .btn-titik {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            width: 24px;
            height: 24px;
            border: none;
            background: transparent;
            border-radius: 8px;
            opacity: 0.5;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-titik:hover {
            background-color: rgba(0, 0, 0, 0.1);
            opacity: 1;
        }

        /*pengaturan tombol join kesatria2026*/
        .join-kesatria-btn {
            font-family: "Inter", sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            width: fit-content;
            margin: 80px auto 30px;
            padding: 10px 15px;
            background-color: #ffffff;
            font-weight: bold;
            font-size: medium;
            box-shadow: 0px 4px 8px rgb(185, 179, 179);
            transition: all 0.2s ease-in-out;
        }

        .join-kesatria-btn:hover {
            text-decoration: none
        }

        /*pengaturan pada bagian footer*/
        .footer {
            font-size: 12px;
            font-family: 'Inter', sans-serif;
        }

        .footer a {
            color: black;
        }
    </style>
</head>

<body>
    <div class="linktree-container">
        <div class="row">
            <div class="col-6 text-left">
                <button class="linktr-menu">
                    <svg fill="none" height="18px" width="18px" viewBox="0 0 28 28">
                        <path
                            d="m15.7603 6.829 4.6725-4.80317 2.712 2.77734-4.9012 4.67248h6.8944v3.85565h-6.9271l4.9339 4.7922-2.712 2.7229-6.6983-6.731-6.69829 6.731-2.712-2.712 4.93387-4.7923h-6.92703v-3.86645h6.89436l-4.9012-4.67248 2.712-2.77734 4.67249 4.80317v-6.829h4.0516zm-4.0516 12.0243h4.0516v9.1489h-4.0516z"
                            fill="currentColor"></path>
                    </svg>
                </button>
            </div>
            <div class="col-6 text-right">
                <button class="linktr-share">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        viewBox="0 0 256 256">
                        <path
                            d="M216,112v96a16,16,0,0,1-16,16H56a16,16,0,0,1-16-16V112A16,16,0,0,1,56,96H80a8,8,0,0,1,0,16H56v96H200V112H176a8,8,0,0,1,0-16h24A16,16,0,0,1,216,112ZM93.66,69.66,120,43.31V136a8,8,0,0,0,16,0V43.31l26.34,26.35a8,8,0,0,0,11.32-11.32l-40-40a8,8,0,0,0-11.32,0l-40,40A8,8,0,0,0,93.66,69.66Z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>

        <div class="foto-profil">
            <img
                src="https://ugc.production.linktr.ee/896434f6-26f7-459b-a53c-395dfb7815e5_WhatsApp-Image-2026-01-08-at-8.26.38-AM.jpeg">
            <h1 id="intro" class="judul-linktree">PKM ITS 2026</h1>
        </div>

        <div class="link-insta">
            <a href="https://instagram.com/kesatria10nopember.its" target="_blank">
                <svg viewBox="0 0 24 24" width="32" height="32">
                    <path
                        d="M12 2C9.2912 2 8.94131 2 7.86907 2.05643C7.03985 2.07241 6.21934 2.22888 5.44244 2.51919C4.78781 2.77878 4.23476 3.11738 3.67043 3.68172C3.11738 4.23476 2.76749 4.78781 2.51919 5.45372C2.27088 6.08578 2.10158 6.80813 2.05643 7.88036C2.01129 8.94131 2 9.27991 2 12C2 14.7088 2 15.0474 2.05643 16.1196C2.10158 17.1919 2.28217 17.9255 2.51919 18.5576C2.77878 19.2122 3.11738 19.7652 3.67043 20.3296C4.23476 20.8826 4.78781 21.2325 5.44244 21.4808C6.08578 21.7291 6.80813 21.8984 7.86907 21.9436C8.94131 21.9887 9.27991 22 12 22C14.7088 22 15.0474 22 16.1196 21.9436C17.1806 21.8984 17.9142 21.7178 18.5463 21.4808C19.2137 21.2306 19.8184 20.8377 20.3183 20.3296C20.8826 19.7652 21.2212 19.2009 21.4695 18.5576C21.7178 17.9142 21.8871 17.1919 21.9436 16.1196C21.9887 15.0587 22 14.7201 22 12C22 9.2912 21.9887 8.9526 21.9436 7.88036C21.9225 7.05065 21.7622 6.23037 21.4695 5.45372C21.2189 4.78649 20.8261 4.18182 20.3183 3.68172C19.754 3.11738 19.2122 2.77878 18.5463 2.51919C17.7686 2.23315 16.9482 2.08051 16.1196 2.06772C15.0474 2.01129 14.7088 2 12 2ZM11.0971 3.80587H12C14.6637 3.80587 14.9797 3.80587 16.0406 3.8623C16.6724 3.8686 17.2985 3.98313 17.8916 4.2009C18.3657 4.38149 18.693 4.59594 19.0429 4.94582C19.3928 5.29571 19.6072 5.63431 19.7991 6.09706C19.9345 6.45824 20.0925 6.97743 20.1377 7.95937C20.1828 9.00903 20.1941 9.32506 20.1941 12C20.1941 14.6637 20.1941 14.9797 20.1377 16.0406C20.1314 16.6724 20.0169 17.2985 19.7991 17.8916C19.6185 18.3657 19.3928 18.693 19.0429 19.0429C18.7043 19.3928 18.3657 19.6072 17.8916 19.7878C17.2992 20.0094 16.6731 20.1278 16.0406 20.1377C14.9797 20.1828 14.6637 20.1941 12 20.1941C9.32506 20.1941 9.00903 20.1941 7.95937 20.1377C7.3238 20.1322 6.69388 20.0177 6.09706 19.7991C5.63431 19.6072 5.307 19.3928 4.94582 19.0429C4.60722 18.7043 4.38149 18.3657 4.2009 17.8916C3.98313 17.2985 3.8686 16.6724 3.8623 16.0406C3.80587 14.9797 3.79458 14.6637 3.79458 12C3.79458 9.32506 3.80587 9.00903 3.85102 7.95937C3.85602 7.32375 3.97057 6.69376 4.18962 6.09706C4.38149 5.63431 4.59594 5.307 4.94582 4.94582C5.29571 4.60722 5.62302 4.38149 6.09706 4.2009C6.69376 3.98185 7.32375 3.86731 7.95937 3.8623C8.87359 3.81716 9.23476 3.80587 11.0971 3.79458V3.80587ZM17.3386 5.46501C17.1815 5.46501 17.0259 5.49596 16.8808 5.55608C16.7356 5.6162 16.6037 5.70433 16.4926 5.81542C16.3815 5.92652 16.2934 6.05841 16.2333 6.20356C16.1732 6.34871 16.1422 6.50429 16.1422 6.6614C16.1422 6.81851 16.1732 6.97408 16.2333 7.11924C16.2934 7.26439 16.3815 7.39628 16.4926 7.50737C16.6037 7.61847 16.7356 7.70659 16.8808 7.76672C17.0259 7.82684 17.1815 7.85779 17.3386 7.85779C17.6559 7.85779 17.9602 7.73174 18.1846 7.50737C18.4089 7.28301 18.535 6.9787 18.535 6.6614C18.535 6.3441 18.4089 6.03979 18.1846 5.81542C17.9602 5.59106 17.6559 5.46501 17.3386 5.46501ZM12 6.86456C11.3256 6.86456 10.6578 6.99739 10.0348 7.25547C9.41169 7.51355 8.84556 7.89182 8.36869 8.36869C7.89182 8.84556 7.51355 9.41169 7.25547 10.0348C6.99739 10.6578 6.86456 11.3256 6.86456 12C6.86456 12.6744 6.99739 13.3422 7.25547 13.9652C7.51355 14.5883 7.89182 15.1544 8.36869 15.6313C8.84556 16.1082 9.41169 16.4864 10.0348 16.7445C10.6578 17.0026 11.3256 17.1354 12 17.1354C13.362 17.1354 14.6682 16.5944 15.6313 15.6313C16.5944 14.6682 17.1354 13.362 17.1354 12C17.1354 10.638 16.5944 9.33178 15.6313 8.36869C14.6682 7.40561 13.362 6.86456 12 6.86456ZM12 8.67043C12.4372 8.67043 12.8702 8.75655 13.2742 8.92388C13.6781 9.0912 14.0452 9.33646 14.3544 9.64564C14.6635 9.95482 14.9088 10.3219 15.0761 10.7258C15.2434 11.1298 15.3296 11.5628 15.3296 12C15.3296 12.4372 15.2434 12.8702 15.0761 13.2742C14.9088 13.6781 14.6635 14.0452 14.3544 14.3544C14.0452 14.6635 13.6781 14.9088 13.2742 15.0761C12.8702 15.2434 12.4372 15.3296 12 15.3296C11.1169 15.3296 10.2701 14.9788 9.64564 14.3544C9.02122 13.7299 8.67043 12.8831 8.67043 12C8.67043 11.1169 9.02122 10.2701 9.64564 9.64564C10.2701 9.02122 11.1169 8.67043 12 8.67043Z">
                    </path>
                </svg>
            </a>
        </div>

        <a id="tombol"
            href="https://docs.google.com/document/d/1cd8YOallKdWryhZfJceJUWEapTD9a-wtGi7J0MtGXac/edit?usp=sharing"
            class="btn-utama rounded-pill text-dark">
            <img src="https://ugc.production.linktr.ee/f0afed94-2adf-4911-b750-d6eb2b8bf9d8_AHkbwyK4XNfm88VUMrQ811yFtl-LWNLqSBZc6cZgbrTIjeDljdc5cgW3BYAJDQPpa9jwm29rbW9vIb9eJChZTBhr5Qkn6qI03WdM.png"
                class="rounded-circle position-absolute"
                style="left: 15px; width: 48px; height: 48px; object-fit: cover;">
            <span>PERINGATAN⚠️</span>
            <button class="btn-titik">
                <svg width="3" height="11" viewBox="0 0 3 11" fill="none">
                    <path fill="currentColor"
                        d="M1.33333 10.6667C0.966667 10.6667 0.652778 10.5361 0.391667 10.275C0.130556 10.0139 0 9.7 0 9.33333C0 8.96667 0.130556 8.65278 0.391667 8.39167C0.652778 8.13056 0.966667 8 1.33333 8C1.7 8 2.01389 8.13056 2.275 8.39167C2.53611 8.65278 2.66667 8.96667 2.66667 9.33333C2.66667 9.7 2.53611 10.0139 2.275 10.275C2.01389 10.5361 1.7 10.6667 1.33333 10.6667ZM1.33333 6.66667C0.966667 6.66667 0.652778 6.53611 0.391667 6.275C0.130556 6.01389 0 5.7 0 5.33333C0 4.96667 0.130556 4.65278 0.391667 4.39167C0.652778 4.13056 0.966667 4 1.33333 4C1.7 4 2.01389 4.13056 2.275 4.39167C2.53611 4.65278 2.66667 4.96667 2.66667 5.33333C2.66667 5.7 2.53611 6.01389 2.275 6.275C2.01389 6.53611 1.7 6.66667 1.33333 6.66667ZM1.33333 2.66667C0.966667 2.66667 0.652778 2.53611 0.391667 2.275C0.130556 2.01389 0 1.7 0 1.33333C0 0.966667 0.130556 0.652778 0.391667 0.391667C0.652778 0.130556 0.966667 0 1.33333 0C1.7 0 2.01389 0.130556 2.275 0.391667C2.53611 0.652778 2.66667 0.966667 2.66667 1.33333C2.66667 1.7 2.53611 2.01389 2.275 2.275C2.01389 2.53611 1.7 2.66667 1.33333 2.66667Z" />
                </svg>
            </button>
        </a>

        <button class="btn btn-primary" onclick="showme()">show me</button>
        <button class="btn btn-primary" onclick="changeText()">Change Text</button>
        <button class="btn btn-primary" onclick="changeButtonColor()">Change Button Color</button>

        <a href="https://itsacid.sharepoint.com/:f:/s/PKMITS2022/IgD_KcjeXQO3S4tGHNPIyy0pAdiSxWlE8XbTivMrZmsR2fw?e=BQv7t9"
            class="btn-utama rounded-pill text-dark">
            Database PIMNAS
            <button class="btn-titik">
                <svg width="3" height="11" viewBox="0 0 3 11" fill="none">
                    <path fill="currentColor"
                        d="M1.33333 10.6667C0.966667 10.6667 0.652778 10.5361 0.391667 10.275C0.130556 10.0139 0 9.7 0 9.33333C0 8.96667 0.130556 8.65278 0.391667 8.39167C0.652778 8.13056 0.966667 8 1.33333 8C1.7 8 2.01389 8.13056 2.275 8.39167C2.53611 8.65278 2.66667 8.96667 2.66667 9.33333C2.66667 9.7 2.53611 10.0139 2.275 10.275C2.01389 10.5361 1.7 10.6667 1.33333 10.6667ZM1.33333 6.66667C0.966667 6.66667 0.652778 6.53611 0.391667 6.275C0.130556 6.01389 0 5.7 0 5.33333C0 4.96667 0.130556 4.65278 0.391667 4.39167C0.652778 4.13056 0.966667 4 1.33333 4C1.7 4 2.01389 4.13056 2.275 4.39167C2.53611 4.65278 2.66667 4.96667 2.66667 5.33333C2.66667 5.7 2.53611 6.01389 2.275 6.275C2.01389 6.53611 1.7 6.66667 1.33333 6.66667ZM1.33333 2.66667C0.966667 2.66667 0.652778 2.53611 0.391667 2.275C0.130556 2.01389 0 1.7 0 1.33333C0 0.966667 0.130556 0.652778 0.391667 0.391667C0.652778 0.130556 0.966667 0 1.33333 0C1.7 0 2.01389 0.130556 2.275 0.391667C2.53611 0.652778 2.66667 0.966667 2.66667 1.33333C2.66667 1.7 2.53611 2.01389 2.275 2.275C2.01389 2.53611 1.7 2.66667 1.33333 2.66667Z" />
                </svg>
            </button>
        </a>
        <a href="https://itsacid.sharepoint.com/:f:/s/PKMITS2022/IgDJa70IS-g6T5P2UTujFiw9AelN0xItCssfkINelIEdsAw?e=duJRFR"
            class="btn-utama rounded-pill text-dark">
            Pedoman PKM 2026
            <button class="btn-titik">
                <svg width="3" height="11" viewBox="0 0 3 11" fill="none">
                    <path fill="currentColor"
                        d="M1.33333 10.6667C0.966667 10.6667 0.652778 10.5361 0.391667 10.275C0.130556 10.0139 0 9.7 0 9.33333C0 8.96667 0.130556 8.65278 0.391667 8.39167C0.652778 8.13056 0.966667 8 1.33333 8C1.7 8 2.01389 8.13056 2.275 8.39167C2.53611 8.65278 2.66667 8.96667 2.66667 9.33333C2.66667 9.7 2.53611 10.0139 2.275 10.275C2.01389 10.5361 1.7 10.6667 1.33333 10.6667ZM1.33333 6.66667C0.966667 6.66667 0.652778 6.53611 0.391667 6.275C0.130556 6.01389 0 5.7 0 5.33333C0 4.96667 0.130556 4.65278 0.391667 4.39167C0.652778 4.13056 0.966667 4 1.33333 4C1.7 4 2.01389 4.13056 2.275 4.39167C2.53611 4.65278 2.66667 4.96667 2.66667 5.33333C2.66667 5.7 2.53611 6.01389 2.275 6.275C2.01389 6.53611 1.7 6.66667 1.33333 6.66667ZM1.33333 2.66667C0.966667 2.66667 0.652778 2.53611 0.391667 2.275C0.130556 2.01389 0 1.7 0 1.33333C0 0.966667 0.130556 0.652778 0.391667 0.391667C0.652778 0.130556 0.966667 0 1.33333 0C1.7 0 2.01389 0.130556 2.275 0.391667C2.53611 0.652778 2.66667 0.966667 2.66667 1.33333C2.66667 1.7 2.53611 2.01389 2.275 2.275C2.01389 2.53611 1.7 2.66667 1.33333 2.66667Z" />
                </svg>
            </button>
        </a>
        <a href="https://itsacid.sharepoint.com/:f:/s/PKMITS2022/IgCcVxascPIEQ4xmbvifikyxAZzfHCthecyIcIH21ADDgZQ?e=S7nbK8"
            class="btn-utama rounded-pill text-dark">
            Template Proposal PKM 2026
            <button class="btn-titik">
                <svg width="3" height="11" viewBox="0 0 3 11" fill="none">
                    <path fill="currentColor"
                        d="M1.33333 10.6667C0.966667 10.6667 0.652778 10.5361 0.391667 10.275C0.130556 10.0139 0 9.7 0 9.33333C0 8.96667 0.130556 8.65278 0.391667 8.39167C0.652778 8.13056 0.966667 8 1.33333 8C1.7 8 2.01389 8.13056 2.275 8.39167C2.53611 8.65278 2.66667 8.96667 2.66667 9.33333C2.66667 9.7 2.53611 10.0139 2.275 10.275C2.01389 10.5361 1.7 10.6667 1.33333 10.6667ZM1.33333 6.66667C0.966667 6.66667 0.652778 6.53611 0.391667 6.275C0.130556 6.01389 0 5.7 0 5.33333C0 4.96667 0.130556 4.65278 0.391667 4.39167C0.652778 4.13056 0.966667 4 1.33333 4C1.7 4 2.01389 4.13056 2.275 4.39167C2.53611 4.65278 2.66667 4.96667 2.66667 5.33333C2.66667 5.7 2.53611 6.01389 2.275 6.275C2.01389 6.53611 1.7 6.66667 1.33333 6.66667ZM1.33333 2.66667C0.966667 2.66667 0.652778 2.53611 0.391667 2.275C0.130556 2.01389 0 1.7 0 1.33333C0 0.966667 0.130556 0.652778 0.391667 0.391667C0.652778 0.130556 0.966667 0 1.33333 0C1.7 0 2.01389 0.130556 2.275 0.391667C2.53611 0.652778 2.66667 0.966667 2.66667 1.33333C2.66667 1.7 2.53611 2.01389 2.275 2.275C2.01389 2.53611 1.7 2.66667 1.33333 2.66667Z" />
                </svg>
            </button>
        </a>
        <a href="https://drive.google.com/drive/folders/1I4FmacxAtUlM6oSP9BIZUC20kanBxx1z?usp=sharing"
            class="btn-utama rounded-pill text-dark">
            Materi ToT 2026
            <button class="btn-titik">
                <svg width="3" height="11" viewBox="0 0 3 11" fill="none">
                    <path fill="currentColor"
                        d="M1.33333 10.6667C0.966667 10.6667 0.652778 10.5361 0.391667 10.275C0.130556 10.0139 0 9.7 0 9.33333C0 8.96667 0.130556 8.65278 0.391667 8.39167C0.652778 8.13056 0.966667 8 1.33333 8C1.7 8 2.01389 8.13056 2.275 8.39167C2.53611 8.65278 2.66667 8.96667 2.66667 9.33333C2.66667 9.7 2.53611 10.0139 2.275 10.275C2.01389 10.5361 1.7 10.6667 1.33333 10.6667ZM1.33333 6.66667C0.966667 6.66667 0.652778 6.53611 0.391667 6.275C0.130556 6.01389 0 5.7 0 5.33333C0 4.96667 0.130556 4.65278 0.391667 4.39167C0.652778 4.13056 0.966667 4 1.33333 4C1.7 4 2.01389 4.13056 2.275 4.39167C2.53611 4.65278 2.66667 4.96667 2.66667 5.33333C2.66667 5.7 2.53611 6.01389 2.275 6.275C2.01389 6.53611 1.7 6.66667 1.33333 6.66667ZM1.33333 2.66667C0.966667 2.66667 0.652778 2.53611 0.391667 2.275C0.130556 2.01389 0 1.7 0 1.33333C0 0.966667 0.130556 0.652778 0.391667 0.391667C0.652778 0.130556 0.966667 0 1.33333 0C1.7 0 2.01389 0.130556 2.275 0.391667C2.53611 0.652778 2.66667 0.966667 2.66667 1.33333C2.66667 1.7 2.53611 2.01389 2.275 2.275C2.01389 2.53611 1.7 2.66667 1.33333 2.66667Z" />
                </svg>
            </button>
        </a>
        <a href="https://linktr.ee/?utm_source=linktree&utm_medium=profile&utm_campaign=footer_logo_cta&utm_content=kesatria2026"
            class="join-kesatria-btn rounded-pill text-dark">
            Join kesatria2026 on Linktree
        </a>
        <div class="footer">
            <a href="#"> Cookie Preferences </a><span>•</span>
            <a href="#"> Report </a><span>•</span>
            <a href="#"> Privacy </a><span>•</span>
            <a href="#"> Explore </a>
        </div>
    </div>
</body>

</html>
