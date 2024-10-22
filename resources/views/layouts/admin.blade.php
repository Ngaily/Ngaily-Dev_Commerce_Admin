<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin')</title>
    {{-- Link --}}
    @include('components.admin-link')
</head>
<body>
    
    <header class="header bg-black text-center py-3 ">
        <div class="container">
            <span class="text-muted">ADMIN</span>
        </div>
    </header>
    <!-- Main Content -->
    <div class="container-fluid">
    
        <div class="row">
            <!-- Sidebar -->
            @include('components.admin-aside')
            

            <!-- Main Section -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer bg-black text-center py-3 ">
        <div class="container">
            <span class="text-muted">Footer</span>
        </div>
    </footer>
</body>
</html>
