<div class="wrapper">
    <div class="wrapper_inner">
        <div class="vertical_wrap">
            <div class="backdrop"></div>
            <div class="vertical_bar">
                <div class="profile_info">
                    {{-- <div class="img_holder">
                        <img src="pic.png" alt="profile_pic" />
                    </div> --}}
                    <p class="title">myLibrary</p>
                    {{-- <p class="sub_title">aniabukstein@gmail.com</p> --}}
                </div>
                <ul class="menu">
                    <li><a href="/peminjaman" class="{{ $title === 'Peminjaman' ? 'active' : '' }}">
                            <span class="icon"><i class="fas fa-home"></i></span>
                            <span class="text">Peminjaman</span>
                        </a></li>
                    <li><a href="/pengembalian" class="{{ $title === 'Pengembalian' ? 'active' : '' }}">
                            <span class="icon"><i class="fas fa-file-alt"></i></span>
                            <span class="text">Pengembalian</span>
                        </a></li>
                    <li><a href="/pengunjung" class="{{ $title === 'Data Pengunjung' ? 'active' : '' }}">
                            <span class="icon"><i class="fas fa-chart-pie"></i></span>
                            <span class="text">Data Pengunjung</span>
                        </a></li>
                    <li><a href="/buku" class="{{ $title === 'Data Buku' ? 'active' : '' }}">
                            <span class="icon"><i class="fas fa-user"></i></span>
                            <span class="text">Data Buku</span>
                        </a></li>
                </ul>


            </div>
        </div>
        <div class="main_container">
            <div class="top_bar">
                <div class="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="logo"> myLibrary | <span>{{ $title }}</span> </div>
            </div>
