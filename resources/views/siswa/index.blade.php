<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAKAD | SKOMDA</title>
    <link rel="shortcut icon" href="{{ asset('img/logots.png') }}" type="image/x-icon">
    <link href="{{ url('https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    {{-- <link rel="stylesheet" href="css/app.css"> --}}
</head>

<body>
    <div class="container">
        <nav class="sidebar">
            <div class="nav-bar">
            <div class="logo">
                <img class="img-large" src="{{ asset('img/Logo-TelkomWarna.svg') }}" alt="">
                <img class="img-medium" src="{{ asset('img/logots.png') }}" alt="">
            </div>
            <div class="nav-menu">
                <ul class="nav-list">
                    <li>
                        <a href="#beranda" class="active">
                            <i class="ri-home-fill"></i>
                            <h4>Beranda</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#absensi">
                            <i class="ri-pie-chart-2-line"></i>
                            <h4>Absensi</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#penilaian">
                            <i class="ri-file-text-fill"></i>
                            <h4>Penilaian</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#jurnal">
                            <i class="ri-folder-3-fill"></i>
                            <h4>Jurnal Harian</h4>
                        </a>
                    </li>
                    
                    <hr>

                    <li>
                        <a href="#pengaduan">
                            <i class="ri-phone-fill"></i>
                            <h4>Pengaduan Suara</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#peminjaman">
                            <i class="ri-map-pin-2-fill"></i>
                            <h4>Beranda</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#loker">
                            <i class="ri-briefcase-fill"></i>
                            <h4>Info Loker</h4>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        </nav>
        <header class="header">
            <div class="profil-section">
                <div class="profil">
                    <img src="{{ asset('/img/profil.svg') }}" alt="">
                    <div class="data">
                        <h5>Hi, Ryan!</h5>
                        <p>XI TJA 3</p>
                    </div>
                </div>
                <div class="navigasi">
                    <input type="search" name="" id="" placeholder="Search" rel="search">
                    <a href="" title="Notifikasi">
                        <i class="ri-notification-3-fill"></i>
                    </a>
                </div>
            </div>
        </header>
        <div class="content">
            <div class="presensi">
                <h5>Presensi</h5>
                <p>06.00-09.00 presensi dibuka</p>
            
                <form action="" method="post">
                    <div class="item">
                        <input type="radio" name="presensi" id="hadir" value="Hadir">
                        <label for="hadir">Hadir</label>
                    </div>

                    <div class="item">
                        <input type="radio" name="presensi" id="sakit" value="Sakit">
                        <label for="sakit">Sakit</label>
                    </div>

                    <div class="item">
                        <input type="radio" name="presensi" id="izin" value="Izin">
                        <label for="izin">Izin</label>
                    </div>

                    <div class="item">
                        <input type="radio" name="presensi" id="hadir" value="dispen">
                        <label for="dispen">Dispensasi</label>
                    </div>
                    <div class="button">
                        <label for="suratizin"><i class="ri-upload-2-fill"></i> Upload Surat Izin</label>
                        <input type="file" name="suratizin" id="suratizin" value="" style="display: none;">
                        <button type="submit">Simpan</button>
                    </div>
                </form>
            </div>
            <div class="kehadiran">
                <div class="sub-heading">
                    <h5>Presentase Kehadiran 90%</h5>
                    <p>
                        Berikut ini adalah presentase kehadiran kamu dalam 1 semester
                    </p>
                </div>        
                    <div class="content-kehadiran">
                        <div class="item">
                            <span>Sakit</span>
                            <p>1 Hari</p>
                        </div>
                        <div class="item">
                            <span>Izin</span>
                            <p>1 Hari</p>
                        </div>
                        <div class="item">
                            <span>Dispensasi</span>
                            <p>1 Hari</p>
                        </div>
                        <div class="item">
                            <span>Alpha</span>
                            <p>1 Hari</p>
                        </div>
                    </div>
            </div>
            
            <div class="jadwalpelajaran">
                <div class="sub-heading">
                    <h5>Jadwal Pelajaran hari ini</h5>
                    <a href="#">Lainnya</a>
                </div>
                <div class="content-list">
                    <div class="item">
                        <div class="mapel">
                            <h5>FTTH</h5>
                            <p>Novra Edi, S.ST</p>
                        </div>
                        <div class="jam">
                            <p>07.30-08.45</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mapel">
                            <h5>FTTH</h5>
                            <p>Novra Edi, S.ST</p>
                        </div>
                        <div class="jam">
                            <p>07.30-08.45</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mapel">
                            <h5>FTTH</h5>
                            <p>Novra Edi, S.ST</p>
                        </div>
                        <div class="jam">
                            <p>07.30-08.45</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mapel">
                            <h5>FTTH</h5>
                            <p>Novra Edi, S.ST</p>
                        </div>
                        <div class="jam">
                            <p>07.30-08.45</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mapel">
                            <h5>FTTH</h5>
                            <p>Novra Edi, S.ST</p>
                        </div>
                        <div class="jam">
                            <p>07.30-08.45</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mapel">
                            <h5>FTTH</h5>
                            <p>Novra Edi, S.ST</p>
                        </div>
                        <div class="jam">
                            <p>07.30-08.45</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="piket">
                <h5>Guru piket SIAKAD hari ini</h5>
                
                <div class="item">
                    <img src="{{ asset('img/profil.svg') }}" alt="">
                    <div class="nama">
                        <h5>Novra Edi, S.ST</h5>
                        <p>Sarana Prasarana</p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('img/profil.svg') }}" alt="">
                    <div class="nama">
                        <h5>Novra Edi, S.ST</h5>
                        <p>Sarana Prasarana</p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('img/profil.svg') }}" alt="">
                    <div class="nama">
                        <h5>Novra Edi, S.ST</h5>
                        <p>Sarana Prasarana</p>
                    </div>
                    
                </div>
                
                <div class="item">
                    <img src="{{ asset('img/profil.svg') }}" alt="">
                    <div class="nama">
                        <h5>Novra Edi, S.ST</h5>
                        <p>Sarana Prasarana</p>
                    </div>
                    
                </div>
                <div class="item">
                    <img src="{{ asset('img/profil.svg') }}" alt="">
                    <div class="nama">
                        <h5>Novra Edi, S.ST</h5>
                        <p>Sarana Prasarana</p>
                    </div>
                    
                </div>

            </div>
            <div class="top-kehadiran">
                <h5>10 Besar kehadiran pertama</h5>
                
                
                <div class="item">
                    <div class="profil">
                        <div class="img">
                            <img src="{{ asset('img/profil.svg') }}" alt="">
                        </div>
                        <div class="nama">
                            <h5>Rizky Novan A</h5>
                            <p>XI TJA 4 4</p>
                        </div>
                    </div>
                    <div class="jam">
                        <p>(06:00:01)</p>
                    </div>
                </div>
                <div class="item">
                    <div class="profil">
                        <div class="img">
                            <img src="{{ asset('img/profil.svg') }}" alt="">
                        </div>
                        <div class="nama">
                            <h5>Rizky Novan A</h5>
                            <p>XI TJA 4 4</p>
                        </div>
                    </div>
                    <div class="jam">
                        <p>(06:00:01)</p>
                    </div>
                </div>
                <div class="item">
                    <div class="profil">
                        <div class="img">
                            <img src="{{ asset('img/profil.svg') }}" alt="">
                        </div>
                        <div class="nama">
                            <h5>Rizky Novan A</h5>
                            <p>XI TJA 4 4</p>
                        </div>
                    </div>
                    <div class="jam">
                        <p>(06:00:01)</p>
                    </div>
                </div>
                <div class="item">
                    <div class="profil">
                        <div class="img">
                            <img src="{{ asset('img/profil.svg') }}" alt="">
                        </div>
                        <div class="nama">
                            <h5>Rizky Novan A</h5>
                            <p>XI TJA 4 4</p>
                        </div>
                    </div>
                    <div class="jam">
                        <p>(06:00:01)</p>
                    </div>
                </div>
                <div class="item">
                    <div class="profil">
                        <div class="img">
                            <img src="{{ asset('img/profil.svg') }}" alt="">
                        </div>
                        <div class="nama">
                            <h5>Rizky Novan A</h5>
                            <p>XI TJA 4 4</p>
                        </div>
                    </div>
                    <div class="jam">
                        <p>(06:00:01)</p>
                    </div>
                </div>
                <div class="item">
                    <div class="profil">
                        <div class="img">
                            <img src="{{ asset('img/profil.svg') }}" alt="">
                        </div>
                        <div class="nama">
                            <h5>Rizky Novan A</h5>
                            <p>XI TJA 4 4</p>
                        </div>
                    </div>
                    <div class="jam">
                        <p>(06:00:01)</p>
                    </div>
                </div>
                <div class="item">
                    <div class="profil">
                        <div class="img">
                            <img src="{{ asset('img/profil.svg') }}" alt="">
                        </div>
                        <div class="nama">
                            <h5>Rizky Novan A</h5>
                            <p>XI TJA 4 4</p>
                        </div>
                    </div>
                    <div class="jam">
                        <p>(06:00:01)</p>
                    </div>
                </div>
                <div class="item">
                    <div class="profil">
                        <div class="img">
                            <img src="{{ asset('img/profil.svg') }}" alt="">
                        </div>
                        <div class="nama">
                            <h5>Rizky Novan A</h5>
                            <p>XI TJA 4 4</p>
                        </div>
                    </div>
                    <div class="jam">
                        <p>(06:00:01)</p>
                    </div>
                </div>
                <div class="item">
                    <div class="profil">
                        <div class="img">
                            <img src="{{ asset('img/profil.svg') }}" alt="">
                        </div>
                        <div class="nama">
                            <h5>Rizky Novan A</h5>
                            <p>XI TJA 4 4</p>
                        </div>
                    </div>
                    <div class="jam">
                        <p>(06:00:01)</p>
                    </div>
                </div>
            </div>
           
        
      </div>     
</body>
</html>