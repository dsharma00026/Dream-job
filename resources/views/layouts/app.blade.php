<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dream Job</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CDN or Tailwind (choose one) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</head>
<body>

    @include('partials.header')

    <main style="padding: 0; margin: 0;">
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>

<style>
    /* Common for all hover effects */
    .hover-lift {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .hover-lift:hover {
         transform: translateY(-5px); /* lift up slightly */
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2); /* shadow for depth */
       transform: translateY(-5px);
   
    }
</style>
