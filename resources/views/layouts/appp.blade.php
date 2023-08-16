
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mi aplicacion @yield('title')</title>
</head>
<body>



@section('name')
    este es el mensje desde el layout
@endsection


<div class ="container">

@yield('content')

</div>

    
</body>
</html>
