<head>
    <title>SLM | {{ $title }}</title>
    <style>
        body {
            background: #ddd;
            min-height: 100vh;
            vertical-align: middle;
            display: flex;

        }

        .card {
            margin: auto;
            width: 600px;
            padding: 3rem 3.5rem;
            box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .mt-50 {
            margin-top: 50px
        }

        .mb-50 {
            margin-bottom: 50px
        }


        @media(max-width:767px) {
            .card {
                width: 90%;
                padding: 1.5rem;
            }
        }

        @media(height:1366px) {
            .card {
                width: 90%;
                padding: 8vh;
            }
        }

        .card-title {
            font-weight: 700;
            font-size: 2.5em;
        }

        .nav {
            display: flex;
        }

        .nav ul {
            list-style-type: none;
            display: flex;
            padding-inline-start: unset;
            margin-bottom: 6vh;
        }

        .nav li {
            padding: 1rem;
        }

        .nav li a {
            color: black;
            text-decoration: none;
        }

        .active {
            border-bottom: 2px solid black;
            font-weight: bold;
        }

        input {
            border: none;
            outline: none;
            font-size: 1rem;
            font-weight: 600;
            color: #000;
            width: 100%;
            min-width: unset;
            background-color: transparent;
            border-color: transparent;
            margin: 0;
        }

        form a {
            color: grey;
            text-decoration: none;
            font-size: 0.87rem;
            font-weight: bold;
        }

        form a:hover {
            color: grey;
            text-decoration: none;
        }

        form .row {
            margin: 0;
            overflow: hidden;
        }

        form .row-1 {
            border: 1px solid rgba(0, 0, 0, 0.137);
            padding: 0.5rem;
            outline: none;
            width: 100%;
            min-width: unset;
            border-radius: 5px;
            background-color: rgba(221, 228, 236, 0.301);
            border-color: rgba(221, 228, 236, 0.459);
            margin: 2vh 0;
            overflow: hidden;
        }

        form .row-2 {
            border: none;
            outline: none;
            background-color: transparent;
            margin: 0;
            padding: 0 0.8rem;
        }

        form .row .row-2 {
            border: none;
            outline: none;
            background-color: transparent;
            margin: 0;
            padding: 0 0.8rem;
        }

        form .row .col-2,
        .col-7,
        .col-3 {
            display: flex;
            align-items: center;
            text-align: center;
            padding: 0 1vh;
        }

        form .row .col-2 {
            padding-right: 0;
        }

        #card-header {
            font-weight: bold;
            font-size: 0.9rem;
        }

        #card-inner {
            font-size: 0.7rem;
            color: gray;
        }

        .three .col-7 {
            padding-left: 0;
        }

        .three {
            overflow: hidden;
            justify-content: space-between;
        }

        .three .col-2 {
            border: 1px solid rgba(0, 0, 0, 0.137);
            padding: 0.5rem;
            outline: none;
            width: 100%;
            min-width: unset;
            border-radius: 5px;
            background-color: rgba(221, 228, 236, 0.301);
            border-color: rgba(221, 228, 236, 0.459);
            margin: 2vh 0;
            width: fit-content;
            overflow: hidden;
        }

        .three .col-2 input {
            font-size: 0.7rem;
            margin-left: 1vh;
        }

        .btn {
            width: 100%;
            background-color: rgb(65, 202, 127);
            border-color: rgb(65, 202, 127);
            color: white;
            justify-content: center;
            padding: 2vh 0;
            margin-top: 3vh;
        }

        .btn:focus {
            box-shadow: none;
            outline: none;
            box-shadow: none;
            color: white;
            -webkit-box-shadow: none;
            -webkit-user-select: none;
            transition: none;
        }

        .btn:hover {
            color: white;
        }

        input:focus::-webkit-input-placeholder {
            color: transparent;
        }

        input:focus:-moz-placeholder {
            color: transparent;
        }

        input:focus::-moz-placeholder {
            color: transparent;
        }

        input:focus:-ms-input-placeholder {
            color: transparent;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="shortcut icon" href="../../assets/images/favicon.png" type="">
</head>
<div class="card mt-50 mb-50 p-5 bg-gray-800 rounded overflow-visible">
    <span>
        <i class="fa fa-arrow-left text-sm pr-2 " style="color: #ffbe33">
        </i>
        <a class="text-md  font-medium" href="/chart" style="color: #ffbe33">Kembali</a>
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
        <button class="h-12 w-full rounded focus:outline-none text-white mt-3" style="background-color: #ffbe33">Bayar Sekarang</button>
    </form>
</div>