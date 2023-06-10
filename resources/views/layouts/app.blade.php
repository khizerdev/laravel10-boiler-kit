<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
    @include('components.header')

    @yield(('content'))

    @include('components.footer')


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

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

  </body>
</html>