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
                    @if (auth()->user()->level == 1)
                        <li><a href="/" class="{{ $title === 'Home' ? 'active' : '' }}">
                                <span class="icon"><i class="fas fa-home"></i></span>
                                <span class="text">Dashboard</span>
                            </a></li>
                        <li><a href="/peminjaman" class="{{ $title === 'Peminjaman' ? 'active' : '' }}">
                                <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-collection-fill"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zM2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3zm2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1z" />
                                    </svg></i></span>
                                <span class="text">Peminjaman</span>
                            </a></li>
                        <li><a href="/pengembalian" class="{{ $title === 'Pengembalian' ? 'active' : '' }}">
                                <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-bookmark-check-fill"
                                        viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm8.854-9.646a.5.5 0 0 0-.708-.708L7.5 7.793 6.354 6.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                                    </svg></span>
                                <span class="text">Pengembalian</span>
                            </a></li>
                        <li><a href="/pengunjung" class="{{ $title === 'Data Pengunjung' ? 'active' : '' }}">
                                <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-people-fill"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                    </svg></i></span>
                                <span class="text">Data Pengunjung</span>
                            </a></li>
                        <li><a href="/buku" class="{{ $title === 'Data Buku' ? 'active' : '' }}">
                                <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-book-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                                    </svg></span>
                                <span class="text">Data Buku</span>
                            </a></li>
                        <li><a href="/user" class="{{ $title === 'Data User' ? 'active' : '' }}">
                                <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                                    </svg>
                                </span>
                                <span class="text">Daftar User</span>
                            </a></li>
                    @endif
                    @if (auth()->user()->level == 2)
                        <li><a href="/" class="{{ $title === 'Home' ? 'active' : '' }}">
                                <span class="icon"><i class="fas fa-home"></i></span>
                                <span class="text">Dashboard</span>
                            </a></li>
                        <li><a href="/peminjaman" class="{{ $title === 'Peminjaman' ? 'active' : '' }}">
                                <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-collection-fill"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zM2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3zm2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1z" />
                                    </svg></i></span>
                                <span class="text">Peminjaman</span>
                            </a></li>
                        <li><a href="/pengembalian" class="{{ $title === 'Pengembalian' ? 'active' : '' }}">
                                <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-bookmark-check-fill"
                                        viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm8.854-9.646a.5.5 0 0 0-.708-.708L7.5 7.793 6.354 6.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                                    </svg></span>
                                <span class="text">Pengembalian</span>
                            </a></li>
                        <li><a href="/pengunjung" class="{{ $title === 'Data Pengunjung' ? 'active' : '' }}">
                                <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-people-fill"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                    </svg></i></span>
                                <span class="text">Data Pengunjung</span>
                            </a></li>
                        <li><a href="/buku" class="{{ $title === 'Data Buku' ? 'active' : '' }}">
                                <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-book-fill"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                                    </svg></span>
                                <span class="text">Data Buku</span>
                            </a></li>
                    @endif
                </ul>


            </div>
        </div>
        <div class="main_container">
            <div class="top_bar">
                <div class="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="logo"> myLibrary | <span>{{ $title }}</span>
                </div>

                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown" style="width:70%;display:flex;justify-content: flex-end;">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            style="color: white" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end " style=" background-color: white"
                            aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-center"
                                style=" display:flex; justify-content: space-around; color: #425c5a;"
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                {{--
                <a class="dropdown-item" href="http://my-library.test/logout"
                    onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="http://my-library.test/logout" method="POST" class="d-none">
                    <input type="hidden" name="_token" value="SLthKmyqpoNsxtrq486RHTKbUQp0CPcQUsTSLG21">
                </form> --}}

            </div>
