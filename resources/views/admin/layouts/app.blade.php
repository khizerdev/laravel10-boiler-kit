<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      
      <title>@yield('title') - Admin</title>
      
      <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
      <meta name="title" content="Sign in page">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="theme-color" content="#ffffff">

      <link rel="icon" type="image/png" sizes="16x16" href="https://themesberg.com/favicon-16x16.png">
      
      <link type="text/css" href="{{asset('admin/css/style.css')}}" rel="stylesheet">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
   </head>
   <body>

    <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
        <a class="navbar-brand me-lg-5" href="https://demo.themesberg.com/volt/index.html"><img class="navbar-brand-dark" src="https://demo.themesberg.com/volt/assets/img/brand/light.svg" alt="Volt logo"> 
          <img class="navbar-brand-light" src="https://demo.themesberg.com/volt/assets/img/brand/dark.svg" alt="Volt logo">
        </a>
        <div class="d-flex align-items-center">
          <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
     </nav>

     <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    
        @include('admin.components.sidebar')
     </nav>

     <main class="content">
        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0 mb-3">
        <div class="container-fluid px-0">
            <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                <div class="d-flex align-items-center">

                    <p class="mb-0">
                        <b>
                            Welcome to Admin Dashboard
                        </b>
                    </p>
                        
                </div>
                <ul class="navbar-nav align-items-center">

                    <li class="nav-item dropdown">
                    <a class="nav-link text-dark notification-bell unread dropdown-toggle" data-unread-notifications="true" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                        <svg class="icon icon-sm text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path>
                        </svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-center mt-2 py-0">
                        <div class="list-group list-group-flush">
                            <a href="#" class="text-center text-primary fw-bold border-bottom border-light py-3">Notifications</a> 
                            <a href="#" class="list-group-item list-group-item-action border-bottom">
                                <div class="row align-items-center">
                                <div class="col-auto"> <img alt="Image placeholder" src="https://demo.themesberg.com/volt/assets/img/team/profile-picture-1.jpg" class="avatar-md rounded"></div>
                                <div class="col ps-0 ms-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h4 class="h6 mb-0 text-small">Jose Leos</h4>
                                        </div>
                                        <div class="text-end"><small class="text-danger">a few moments ago</small></div>
                                    </div>
                                    <p class="font-small mt-1 mb-0">Added you to an event "Project stand-up" tomorrow at 12:30 AM.</p>
                                </div>
                                </div>
                            </a>
                        
                            <a href="#" class="dropdown-item text-center fw-bold rounded-bottom py-3">
                                <svg class="icon icon-xxs text-gray-400 me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                </svg>
                                View all
                            </a>
                        </div>
                    </div>
                    </li>

                    <li class="nav-item dropdown ms-lg-3">
                    <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="media d-flex align-items-center">
                            <img class="avatar rounded-circle" alt="Image placeholder" src="https://demo.themesberg.com/volt/assets/img/team/profile-picture-3.jpg">
                            <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block"><span class="mb-0 font-small fw-bold text-gray-900">{{ucfirst(auth()->user()->name)}}</span></div>
                        </div>
                    </a>
                    <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
                        <a class="dropdown-item d-flex align-items-center" href="{{route('admin.profile')}}">
                            <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
                            </svg>
                            My Profile 
                        </a>
                        <div role="separator" class="dropdown-divider my-1"></div>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();" class="dropdown-item d-flex align-items-center">
                            <svg class="dropdown-icon text-danger me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                            </svg>
                            Logout
                        </a>
                    </div>
                    </li>
                </ul>
            </div>
        </div>
        </nav>

        @yield('content')

        <footer class="bg-white rounded shadow p-4 my-4">
            <div class="d-flex flex-column flex-sm-row justify-content-between">
            <p class="mb-0">© 2023 Kreatix, Inc. All rights reserved.</p>
        
        </div>
        </footer>
    </main>

    <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
      
   
    <script src="{{asset('admin/js/script.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.min.js" integrity="sha512-b6lGn9+1aD2DgwZXuSY4BhhdrDURVzu7f/PASu4H1i5+CRpEalOOz/HNhgmxZTK9lObM1Q7ZG9jONPYz8klIMg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src="{{asset('admin/js/simplebar.min.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"
    integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
        @if(Session::has('success'))
        iziToast.success({timeout: 5000, position: 'topRight',icon: 'fa fa-check', message: "{{ session('success') }}"});

        @endif

        @if(Session::has('error'))
        iziToast.error({timeout: 5000, position: 'topRight',icon: 'fas fa-exclamation', message: "{{ session('error') }}"});

        @endif
        @if(Session::has('info'))
        iziToast.info({timeout: 5000, position: 'topRight',icon: 'fas fa-dot-circle', message: "{{ session('info') }}"});
        @endif
        @if(Session::has('warning'))
        iziToast.warning({timeout: 5000, position: 'topRight',icon: 'fas fa-exclamation', message: "{{ session('warning') }}"});
        @endif
    </script>

    <script>
        @foreach ($errors->all() as $error)
        iziToast.error({timeout: 5000, position: 'topRight',icon: 'fas fa-exclamation', message: "{{$error}}"})
        @endforeach
    </script>

    @yield('js')

   
   </body>
</html>