<div class="vertical-menu z-50 overflow-auto">
    <div class="h-100">
        <div class="user-wid text-center py-4">
            <div class="user-img">
                <img src="{{ Auth::guard('admin')->user()->guru->foto !== null ? url('storage/guru/foto/' . Auth::guard('admin')->user()->guru->foto) : asset('/images/user.svg') }}" alt="" 
                class="avatar-lg mx-auto rounded-circle" style="object-fit: cover;">

            </div>
            <div class="mt-3">
                <a href="#"
                    class="text-dark font-weight-medium font-size-16">{{ Auth::guard('admin')->user()->nama }}</a>
                <p class="text-body mt-1 mb-0 font-size-13">
                    {{ Auth::guard('admin')->user()->superadmin ? 'Super Admin' : 'Guru' }}</p>
            </div>
        </div>
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="mdi mdi-airplay"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="" class="waves-effect">
                        <i class="mdi mdi-lead-pencil"></i>
                        <span>Hasil Ujian</span>
                    </a>
                </li>

                <li class="menu-title">Manajemen</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-database"></i>
                        <span>Master</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/dataadmin"> <i class="mdi mdi-account-star"></i>Data Admin</a></li>
                        <li><a href="/dataguru"> <i class="mdi mdi-account-tie"></i>Data Guru</a></li>
                        <li><a href="/datasiswa"> <i class="mdi mdi-account-supervisor"></i>Data Siswa</a></li>
                        <li><a href="/datakelas"> <i class="mdi mdi-google-classroom"></i>Data Kelas</a></li>
                        <li><a href="/datajadwal"> <i class="mdi mdi-clipboard-list-outline"></i>Data Jadwal</a></li>
                        <li><a href="/datalevel"> <i class="mdi mdi-file-tree"></i>Data Level</a></li>
                        {{-- <li><a href="ui-images.html"> <i class="mdi mdi-gift-outline"></i>Data Paket</a></li> --}}
                        <li><a href="/dataruangan"> <i class="mdi mdi-home-account"></i>Data Ruangan</a></li>
                        <li><a href="/matapelajaran"> <i class="mdi mdi-notebook"></i>Mata Pelajaran</a></li>
                        <li><a href="/banksoal"> <i class="mdi mdi-bank"></i>Bank Soal</a></li>
                    </ul>
                </li>
                {{-- <li>
                    <a href="calendar.html" class=" waves-effect">
                        <i class="mdi mdi-account-multiple-plus-outline"></i>
                        <span>Kelas Murid</span>
                    </a>
                </li> --}}

                <li class="menu-title">Ujian</li>
                <li>
                    <a href="calendar.html" class=" waves-effect">
                        <i class="mdi mdi-segment"></i>
                        <span>Pelaksanaan</span>
                    </a>
                </li>
                <li>
                    <a href="calendar.html" class=" waves-effect">
                        <i class="mdi mdi-lan-check"></i>
                        <span>Aktivasi Ujian</span>
                    </a>
                </li>
                
                <li class="menu-title">Data Manajemen</li>
                <li>
                    <a href="calendar.html" class=" waves-effect">
                        <i class="mdi mdi-cloud-upload-outline"></i>
                        <span>Import Data</span>
                    </a>
                </li>
                <li>
                    <a href="calendar.html" class=" waves-effect">
                        <i class="mdi mdi-cloud-print-outline"></i>
                        <span>Print Nilai</span>
                    </a>
                </li>
                <li>
            </ul>
        </div>
    </div>
</div>
