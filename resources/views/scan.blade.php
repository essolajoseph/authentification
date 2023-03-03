@extends('bienvenu')


@section('acceuil')

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Authentification des documents</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media-queries.css">
</head>

<body>

    <div class="container col-lg-4 py-5">
        <div>
            @if (session()->has('gagal'))
                <div class="alert alert-success d-flex align-items-center" role="alert">

                    <i class="bi bi-check-circle red-color" style="color:green;margin-right:20px"></i>

                    <div>
                        {{-- {{session()->get('gagal')}} --}}
                        @if (session()->get('gagal') == 'Mbiada')
                            <p>Document Authentique</p>
                            <a class="btn btn-success" style="margin-left:20px" href="{{ route('releve1') }}">Voir le
                                document Authentique</a>
                        @endif
                        @if (session()->get('gagal') == '19G2521')
                            <p>Document Authentique</p>
                            <a class="btn btn-success" style="margin-left:20px" href="{{ route('mapping3') }}">Voir le
                                document Authentique</a>
                        @endif
                        @if (session()->get('gagal') == '20U4660')
                        <p>Document Authentique</p>
                        <a class="btn btn-success" style="margin-left:20px" href="{{ route('mapping') }}">Voir le
                            document Authentique</a>
                    @endif
                    </div>

                </div>

            @endif
            @if (session()->has('sucess'))
                <div class="alert alert-warning d-flex align-items-center" role="alert">
                    <i class="bi bi-x-circle red-color" style="color:red ;margin-right:20px"></i>
                    <div>
                        {{ session()->get('sucess') }}
                    </div>
                </div>
            @endif
        </div>
        <div class="card bg-white shadow rounded-3 p-3 border-0">
         
            <div id="reader" width="100%"></div>
            <form action="{{ route('store') }}" method="post" id="form">
                @csrf
                <input type="hidden" name="id_siswa" id="id_siswa">
            </form>
        </div>

    </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> 

  <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script>
        function onScanSuccess(decodedText, decodedResult) {
            console.log(`Code matched = ${decodedText}`, decodedResult);
            document.getElementById('id_siswa').value=decodedText; 
            document.getElementById('form').submit();
            alert(decodedText) ;    
        }
         
        function onScanFailure(error) {

            console.warn(`Code scan error = ${error}`);
        }

        let html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", {
                fps: 10,
                qrbox: {
                    width: 250,
                    height: 250
                }
            },
            false);
        html5QrcodeScanner.render(onScanSuccess, onScanFailure);
    </script>
</body>

</html>
@endsection