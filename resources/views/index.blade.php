<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel API Sederhana</title>
    <link rel="shortcut icon" href="/assets/img/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container my-3">
        <div class="col-12">
            <h1 class="text-center">API Sederhana oleh IGF</h1>
        </div>
        <div class="row my-3 g-3">
            <div class="col-md-4">
                <div class="card shadow text-bg-primary" style="height: 475px">
                    <div class="card-header">
                        Endpoint 1
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">GET seluruh data siswa</h5>
                        <p class="card-text">
                            HTTP Method GET, url https://*/api/siswa
                            <br> Hasil :
                            <br> {
                            <br> &nbsp;&nbsp; "message" : "Data Berhasil Didapatkan",
                            <br> &nbsp;&nbsp; "data" : [
                            <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {
                            <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"id":1,
                            <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"nama" :
                            "Ahlam",
                            <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"nis" :
                            "11222333",
                            <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"kelas" :
                            "TEK R-31\21",
                            <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"jurusan"
                            : "TEK",
                            <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"created_at" :
                            "2025-03-20T06:33:57.000000Z"
                            <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }
                            <br> &nbsp;&nbsp; ]
                            <br>
                            }
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow text-bg-info" style="height: 475px">
                    <div class="card-header">
                        Endpoint 2
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">GET data siswa berdasarkan id</h5>
                        <p class="card-text">
                            HTTP Method GET, url https://*/api/siswa/{id}
                            <br> Hasil :
                            <br> {
                            <br> &nbsp;&nbsp; "data" : {
                            <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "id" : 1,
                            <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "nama" :
                            "Ahlam",
                            <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "nis" : "11222333",
                            <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "kelas" : "TEK
                            R-31\21",
                            <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "jurusan" :
                            "TEK",
                            <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            "created_at" : "2025-03-20T07:07:03.000000Z"
                            <br> &nbsp;&nbsp; }
                            <br> }
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow text-bg-success" style="height: 475px">
                    <div class="card-header">
                        Endpoint 3
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">POST data siswa</h5>
                        <p class="card-text">
                            HTTP Method POST, url https://*/api/siswa
                            <br> Field yang dapat diisi yaitu nama, nis, kelas, dan jurusan.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow text-bg-warning" style="height: 475px">
                    <div class="card-header">
                        Endpoint 4
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">UPDATE data siswa berdasarkan id</h5>
                        <p class="card-text">
                            HTTP Method PUT, url https://*/api/siswa/{id}
                            <br> Field yang dapat diisi yaitu nama, nis, kelas, dan jurusan.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow text-bg-danger" style="height: 475px">
                    <div class="card-header">
                        Endpoint 5
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">DELETE data siswa berdasarkan id</h5>
                        <p class="card-text">
                            HTTP Method DELETE, url https://*/api/siswa/{id}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
