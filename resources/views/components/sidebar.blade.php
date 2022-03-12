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
                {{-- content menu --}}
                <li class="menu-title">Menu</li>
                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="mdi mdi-airplay"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('penilaian.index') }}" class="waves-effect">
                        <i class="mdi mdi-lead-pencil"></i>
                        <span>Hasil Ujian</span>
                    </a>
                </li>

                {{-- content manajemen --}}
                <li class="menu-title">Manajemen</li>
                <li>
                    <a href="#" class="has-arrow waves-effect">
                        <i class="mdi mdi-database"></i>
                        <span>Master</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        @can('viewAny', App\Models\Admin::class)
                        <li>
                            <a href="{{ route('admin.index') }}">
                                <i class="mdi mdi-account-star"></i>
                                <span>Data Admin</span>
                            </a>
                        </li>
                        @endcan
                        @can('viewAny', App\Models\Guru::class)
                        <li>
                            <a href="{{ route('guru.index') }}"
                                class="waves-effect @if(Request::is('guru') || Request::is('guru/*')) mm-active @endif">
                                <i class="mdi mdi-account-tie"></i>
                                <span>Data Guru</span>
                            </a>
                        </li>
                        @endcan
                        @can('viewAny', App\Models\Murid::class)
                        <li>
                            <a href="{{ route('murid.index') }}"
                                class="waves-effect @if(Request::is('murid') || Request::is('murid/*')) mm-active @endif">
                                <i class="mdi mdi-account-supervisor"></i>
                                <span>Data Murid</span>
                            </a>
                        </li>
                        @endcan
                        @can('viewAny', App\Models\Kelas::class)
                        <li>
                            <a href="{{ route('class.index') }}" class="waves-effect @if(Request::is('class') || Request::is('class/*')) mm-active @endif">
                                <i class="mdi mdi-google-classroom"></i>
                                <span>Data Kelas</span>
                            </a>
                        </li>
                        @endcan
                        @can('viewAny', App\Models\Level::class)
                        <li>
                            <a href="{{ route('level.index') }}" class="waves-effect @if(Request::is('level') || Request::is('level/*')) mm-active @endif">
                                <i class="mdi mdi-file-tree"></i>
                                <span>Data Level</span>
                            </a>
                        </li>
                        @endcan
                        @can('viewAny', App\Models\Matapelajaran::class)
                        <li>
                            <a href="{{ route('matapelajaran.index') }}" class="waves-effect @if(Request::is('matapelajaran') || Request::is('matapelajaran/*')) mm-active @endif">
                                <i class="mdi mdi-notebook"></i>
                                <span>Matapelajaran</span>
                            </a>  
                        </li>
                        @endcan
                        @can('viewAny', App\Models\Jadwal::class)
                        <li>
                            <a href="{{ route('jadwal.index') }}" class="waves-effect @if(Request::is('jadwal') || Request::is('jadwal/*')) mm-active @endif">
                                <i class="mdi mdi-clipboard-list-outline"></i>
                                <span>Data Jadwal</span>
                            </a>
                        </li>
                        @endcan
                        @if(Auth::guard('admin')->check())
                        <li>    
                            <a href="{{ route('jenisujian.index') }}" class="waves-effect @if(Request::is('jenisujian') || Request::is('jenisujian/*')) mm-active @endif">
                                <i class="mdi mdi-format-list-checkbox"></i>
                                <span>Data Jenis Ujian</span>
                            </a>  
                        </li>
                        @endif
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
