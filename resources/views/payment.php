<head>
    <title>SLM | {{ $title }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="shortcut icon" href="../../public/assets/images/favicon.png" type="">
    <link rel="stylesheet" href="../../public/assets/css/app.css" type="">
</head>
<div class="card mt-50 mb-50 p-5 bg-gray-800 rounded overflow-visible">
    <span>
        <i class="fa fa-arrow-left text-sm pr-2 " style="color: #ffbe33">
        </i>
        <a class="text-md  font-medium" href="chart.php" style="color: #ffbe33">Kembali</a>
    </span>
    <div class="card-title mx-auto text-gray-100">
        Pembayaran
    </div>
    <form>
        <span id="card-header" class="text-gray-100">Total Pembayaran</span>
        <div class="row row-1" style="color: #ffbe33">
            Rp95.000
        </div>
        <span id="card-header" class="text-gray-100">Nomor Rekening</span>
        <div class="row row-1" style="color: #ffbe33">
            9999 9999 9999 9999
        </div>
        <span id="card-header" class="text-gray-100">Upload Bukti Pembayaran</span>
        <div class="row row-1">
            <div class="col-7" style="color: #ffbe33">
                <input type="file">
            </div>
        </div>
        <button class="h-12 w-full rounded focus:outline-none text-white mt-3" style="background-color: #ffbe33">Bayar
            Sekarang</button>
    </form>
</div>