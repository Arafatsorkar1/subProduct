<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css" rel="stylesheet">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="{{asset('/')}}assets/cs/main.d810cf0ae7f39f28f336.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/cs/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/cs/helper.css" rel="stylesheet">
    <style>
        body{
            font-family: 'Barlow Condensed', sans-serif;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand " style="color: white" href="{{route('home')}}">Hospital</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page"  style="color: white" href="{{route('deparments.create')}}">Department</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  style="color: white" href="{{route('categorys.index')}}">Manage Hospital</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

@yield('body')


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset('/')}}assets/scripts/main.d810cf0ae7f39f28f336.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script src="{{asset('assets/js/axios.min.js')}}"></script>

<script>
    function confirmDelete(userId) {
        var confirmation = confirm("Are you sure you want to delete this user?");
        if (confirmation) {
            document.getElementById('confirmDelete' + userId).submit();
        } else {

        }
    }
    function confirmArchive(userId) {
        var confirmation = confirm("Are you sure you want to Archive this user?");
        if (confirmation) {
            document.getElementById('confirmArchive' + userId).submit();
        } else {

        }
    }
    function confirmReturn(userId) {
        var confirmation = confirm("Are you sure you want to Restore this user?");
        if (confirmation) {
            document.getElementById('confirmReturn' + userId).submit();
        } else {

        }
    }
</script>
</body>
</html>
