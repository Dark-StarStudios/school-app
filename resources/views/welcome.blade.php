<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wie</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-header text-center bg-success text-white">
                        <h3>Wie ben je?</h3>
                    </div>
                    <div class="card-body">
                       <button class="btn btn-success w-100 m-1" onclick="window.location.href='{{ route('kind.login') }}'">Kind</button>
                       <button class="btn btn-success w-100 m-1" onclick="window.location.href='{{ route('docent.login') }}'">Docent</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>