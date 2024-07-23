<!-- Header-->
<header id="header" class="header">
   <div class="top-left">
       <div class="navbar-header">
           <a class="navbar-brand" href="{{route('pegawai.index')}}"><b>Admin Page</b></a>
           <a class="navbar-brand hidden" href="{{route('pegawai.index')}}"><b>Admin Page</b></a>
           <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
       </div>
   </div>
   <div class="top-right">
       <div class="header-menu">

           <div class="user-area dropdown float-right">
               <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <img class="user-avatar rounded-circle" src="{{ asset('images/admin.jpg')}}" alt="User Avatar">
               </a>

               <div class="user-menu dropdown-menu">
                   <!-- Tombol Logout -->
<a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    <i class="fa fa-power-off"></i> Logout
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

               </div>
           </div>

       </div>
   </div>
</header>
<!-- /#header -->