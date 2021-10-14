<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Laravel</title>
    @include('layout.style')
    @include('layout.script')
</head>

<body>
    <div class="wrapper">
        @include('layout.sidebar')
        <div class="content">
            <section class="content-wrapper">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>
        @include('layout.footer')
    </div>
</body>

</html>
