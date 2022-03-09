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
                    <a href="{{ route('penilaian.index') }}" class="waves-effect">
                        <i class="mdi mdi-lead-pencil"></i>
                        <span>Hasil Ujian</span>
                    </a>
                </li>

                

                
               
            </ul>
        </div>
    </div>
</div>
