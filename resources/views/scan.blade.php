@extends('bienvenu')


@section('acceuil')

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Authentification des documents</title>
    <style>
        .camera {
            width: 100%;
            height: 100%;
        }

        .card {
            align-items: center;
        }
    </style>
</head>

<body>

    <div class="container col-lg-4 py-5">
        <div>
            @if (session()->has('gagal'))
            <div class="alert alert-success d-flex align-items-center" role="alert">

                <i class="bi bi-check-circle red-color" style="color:green;margin-right:20px"></i>

                <div>
                    {{-- {{session()->get('gagal')}} --}}
                    @if (session()->get('gagal') !== 'biada')
                    <p>Document Authentique</p>
                    <a class="btn btn-success" style="margin-left:20px" href="{{ route('mapping1') }}">Voir le
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
            <!-- <div class="wrapper">
                <div class="scanner"></div>
                <video class="camera" id="preview"></video>
            </div> -->
            <div id="reader" width="600px"></div>
            <form action="{{ url('/store') }}" method="post" id="form">
                @csrf
                <input type="hidden" name="id_siswa" id="id_siswa">
            </form>
            <!-- <div class="btn-group btn-group-toggle mb-5 bbtn" data-toggle="buttons">
                <label class="btn btn-primary active">
                    <input type="radio" name="options" value="1" autocomplete="off" checked> Front Camera
                </label>
                <label class="btn btn-secondary btn-d">
                    <input type="radio" name="options" value="2" autocomplete="off"> Back Camera
                </label>
            </div> -->
        </div>

    </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <script type="text/javascript">
        var scanner = new Instascan.Scanner({
            video: document.getElementById('preview'),
            scanPeriod: 5,
            mirror: true
        });
        scanner.addListener('scan', function(content) {
            alert(content);
            // window.location.href=content;
        });
        Instascan.Camera.getCameras().then(function(cameras) {
            if (cameras.length > 0) {
                scanner.start(cameras[0]);
                $('[name="options"]').on('change', function() {
                    if ($(this).val() == 1) {
                        if (cameras[0] != "") {
                            scanner.start(cameras[0]);
                        } else {
                            alert('No Front camera found!');
                        }
                    } else if ($(this).val() == 2) {
                        if (cameras[1] != "") {
                            scanner.start(cameras[1]);
                        } else {
                            alert('No Back camera found!');
                        }
                    }
                });
            } else {
                console.error('No cameras found.');
                alert('No cameras found.');
            }
        }).catch(function(e) {
            console.error(e);
            alert(e);
        });
        scanner.addListener('scan', function(c) {
            document.getElementById('id_siswa').value = c;
            document.getElementById('form').submit();

        });
    </script> -->
    {{-- <div class="btn-group btn-group-toggle mb-5" data-toggle="buttons">
  <label class="btn btn-primary active">
    <input type="radio" name="options" value="1" autocomplete="off" checked> Front Camera
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" value="2" autocomplete="off"> Back 
  </label>
</div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> --}}
  
  <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script>
        function onScanSuccess(decodedText, decodedResult) {
            console.log(`Code matched = ${decodedText}`, decodedResult);  
            alert(decodedText);
            document.getElementById('id_siswa').value=decodedText;
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