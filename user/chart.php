<?php
include_once("../config.php");

// ambil data di URL
$id = 1;
// $id = $_GET["id"];

// query data mahasiswa berdasarkan id
$result = mysqli_query($mysqli, "SELECT * FROM products");
$result = mysqli_fetch_array($result);

?>

<head>
    <title>Warshop | Keranjang</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<div class="h-screen bg-gray-300">
    <div class="py-12">
        <div class="max-w-md mx-auto bg-gray-100 shadow-lg rounded-lg  md:max-w-5xl">
            <div class="md:flex ">
                <div class="w-full p-4 px-5 py-5">
                    <div class="md:grid md:grid-cols-3 gap-2 ">
                        <div class="col-span-2 p-5">
                            <h1 class="text-xl font-medium ">Shopping Cart</h1>
                            <?php ?>
                            <div class="flex justify-between items-center mt-6 pt-6">
                                <div class="flex  items-center">
                                    <img src="https://i.imgur.com/EEguU02.jpg" width="60" class="rounded-full ">
                                    <div class="flex flex-col ml-3">
                                        <span class="md:text-md font-medium"><?php echo $result['namabarang'] ?></span>
                                        <span
                                            class="text-xs font-light text-gray-400">Rp<?php echo $result['harga'] ?>,-</span>
                                    </div>
                                </div>
                                <div class="flex justify-center items-center">
                                    <form action="#" method="post">
                                        <input type="number"
                                            class="focus:outline-none bg-primary border h-6 w-8 rounded text-sm">
                                    </form>
                                    <div class="pr-8 ">
                                        <span class="text-xs font-medium">Rp20.000</span>
                                    </div>
                                    <div>
                                        <i class="fa fa-close text-xs font-medium"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between items-center pt-6 mt-6 border-t">
                                <div class="flex  items-center">
                                    <img src="https://i.imgur.com/Uv2Yqzo.jpg" width="60" class="rounded-full ">
                                    <div class="flex flex-col ml-3 ">
                                        <span class="text-md font-medium w-auto">Spicy Mexican potatoes</span>
                                        <span class="text-xs font-light text-gray-400">Rp50.000</span>
                                    </div>
                                </div>
                                <div class="flex justify-center items-center">
                                    <div class="pr-8 flex ">
                                        <input type=button value="-" onclick="button4()" />
                                        <span id="output-area1"
                                            class="focus:outline-none bg-gray-100 border h-6 w-8 rounded text-sm px-2 mx-2">1</span>
                                        <input type=button value="+" onclick="button3()" />
                                    </div>
                                    <div class="pr-8">
                                        <span class="text-xs font-medium">Rp50.000</span>
                                    </div>
                                    <div>
                                        <i class="fa fa-close text-xs font-medium"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between items-center mt-6 pt-6 border-t">
                                <div class="flex  items-center">
                                    <img src="https://i.imgur.com/xbTAITF.jpg" width="60" class="rounded-full ">
                                    <div class="flex flex-col ml-3 ">
                                        <span class="text-md font-medium">Breakfast</span>
                                        <span class="text-xs font-light text-gray-400">Rp25.000</span>
                                    </div>
                                </div>
                                <div class="flex justify-center items-center">
                                    <div class="pr-8 flex ">
                                        <input type=button value="-" onclick="button2()" />
                                        <span id="output-area"
                                            class="focus:outline-none bg-gray-100 border h-6 w-8 rounded text-sm px-2 mx-2">1</span>
                                        <input type=button value="+" onclick="button1()" />
                                    </div>
                                    <div class="pr-8">
                                        <span class="text-xs font-medium">Rp25.000</span>
                                    </div>
                                    <div>
                                        <i class="fa fa-close text-xs font-medium"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between items-center mt-6 pt-6 border-t">
                                <button class="btn btn-dark"
                                    style="color: #ffbe33; background-color:#202c34; border-radius: 15px; padding:4 10 4 10;">
                                    <i class="fa fa-arrow-left text-sm pr-2"></i>
                                    <a class="text-md font-medium" style="color: #ffbe33;" href="../product/">Continue
                                        Shopping
                                    </a>
                                </button>
                            </div>
                        </div>
                        <div class=" p-5 bg-gray-800 rounded overflow-visible">
                            <span class="text-xl font-medium text-gray-100 block pb-3 pt-5 mt-5"
                                style="margin-top:20px;">Pesanan</span>
                            <div class="flex justify-center flex-col pt-3">
                                <label class="text-xs text-gray-400 mt-4 mb-1">Total Pembayaran</label>
                                <input type="text" style="color: #ffbe33;"
                                    class="focus:outline-none w-full h-6 bg-gray-800 placeholder-gray-300 text-sm border-b border-gray-600 py-4 font-bold"
                                    placeholder="Rp 50.000,-">
                            </div>
                            <div class="flex justify-center flex-col pt-3">
                                <label class="text-xs text-gray-400 mt-4 mb-1">Nama Penerima</label>
                                <input type="text"
                                    class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4"
                                    placeholder="Giga Tamarashvili">
                            </div>
                            <div class="flex justify-center flex-col pt-3">
                                <label class="text-xs text-gray-400 mt-4 mb-1">Alamat Penerima</label>
                                <input type="text"
                                    class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4"
                                    placeholder="Jalan ABCDE, Kota Baru">
                            </div>
                            <button class="h-12 font-bold w-full rounded focus:outline-none text-light"
                                style="background-color: #ffbe33; color:#202c34; margin-top:60px;">
                                <a href="payment.php">Check Out</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>