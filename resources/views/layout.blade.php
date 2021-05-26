<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-block')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 text-white bg-dark border-bottom shadow-sm">
    <p class="h5 my-0 me-md-auto fw-normal">Gilded Rose</p>
    <nav class="my-2 my-md-0 me-md-3 ml-5">
        <a class="p-2 text-white" href="{{ route('create') }}">Create</a>
        <a class="p-2 text-white" href="{{ route('item-data') }}">Update</a>
    </nav>
</header>
<div class="container mt-5">
    @yield('main-content')
</div>

</body>
</html>
