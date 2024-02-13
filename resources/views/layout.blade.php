<!doctype html>
<html lang="en" class="h-100" style="font-family: montserrat !important">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adidas</title>
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="assets/app.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
  </head>
  <body class="h-100">
    <header class="p-3 border-bottom">
        <div class="p-2">
            <div class="d-flex align-items-center justify-content-between ">
                <div class="d-flex gap-4 align-items-center ">
                    <div class="logo cursor-pointer ">
                        <img src="assets/img/logo.png" height="40px" alt="">
                        <img src="assets/img/logo2.png" height="40px" alt="">
                    </div>
                    
                </div>
                <div class="profile d-flex gap-4 align-items-center">
                    
                    <div class="dropdown text-end">
                        <a class="d-block link-dark text-decoration-none">
                            <img src="assets/img/user.png" alt="mdo" width="32" height="32" class="rounded-circle">
                            Administrator
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="d-flex">
        <aside id="asideBar" class=" p-2 h-100">
            <div class="nav flex-column" >
                <a href="/"  class="nav-link rounded-1 fw-bold mt-2 p-3" >
                    <i class="bi bi-clipboard-fill"></i>
                    <span class="ml-2">Dashboard</span>
                </a>
                <a href="/Products"  class="nav-link rounded-1 fw-bold mt-2 p-3"  >
                    <i class="bi bi-box-seam"></i>
                    <span class="ml-2">Products</span>
                </a>
                <a href="/Categories"  class="nav-link rounded-1 fw-bold mt-2 p-3"  >
                    <i class="bi bi-copy"></i>
                    <span class="ml-2">Categories</span>
                </a>
                <a href="/Tags"  class="nav-link rounded-1 fw-bold mt-2 p-3"  >
                    <i class="bi bi-hash"></i>
                    <span class="ml-2">Tags List</span>
                </a>
            </div>
            <div class="menuCo" id="togl_menu">
                <i class="bi bi-caret-left-fill"></i>
            </div>
        </aside>
        <section class=" ml-2 p-2">
            @yield('content')
        </section>
    </main>
    <script src="/path/to/tinymce.min.js"></script>
   <script src="assets/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
    } );
</script>