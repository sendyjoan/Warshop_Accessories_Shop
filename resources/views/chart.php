<head>
    <title>SLM | {{ $title }}</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script>
        var x = 1;

document.getElementById('output-area').innerHTML = x;

function button1() {
  document.getElementById('output-area').innerHTML = ++x;
};

function button2() {
    if (x>=1) {

        document.getElementById('output-area').innerHTML = --x;
    }
};
    </script>
</head>

<div class="h-screen bg-gray-300">
    <div class="py-12">


        <div class="max-w-md mx-auto bg-gray-100 shadow-lg rounded-lg  md:max-w-5xl">
            <div class="md:flex ">
                <div class="w-full p-4 px-5 py-5">

                    <div class="md:grid md:grid-cols-3 gap-2 ">

                        <div class="col-span-2 p-5">

                            <h1 class="text-xl font-medium ">Shopping Cart</h1>

                            <div class="flex justify-between items-center mt-6 pt-6">
                                <div class="flex  items-center">
                                    <img src="https://i.imgur.com/EEguU02.jpg" width="60" class="rounded-full ">

                                    <div class="flex flex-col ml-3">
                                        <span class="md:text-md font-medium">Chicken momo</span>
                                        <span class="text-xs font-light text-gray-400">Rp10.000</span>

                                    </div>


                                </div>

                                <div class="flex justify-center items-center">

                                    <div class="pr-8 flex ">
                                        <input type=button value="-" onclick="button2()" />
                                        <span id="output-area"
                                            class="focus:outline-none bg-gray-100 border h-6 w-8 rounded text-sm px-2 mx-2">1</span>
                                        <input type=button value="+" onclick="button1()" />
                                    </div>

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
                                        <input type=button value="-" onclick="button2()" />
                                        <span id="output-area" class="focus:outline-none bg-gray-100 border h-6 w-8 rounded text-sm px-2 mx-2">1</span>
                                        <input type=button value="+" onclick="button1()" />
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
                                        <span id="output-area" class="focus:outline-none bg-gray-100 border h-6 w-8 rounded text-sm px-2 mx-2">1</span>
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
                                <div class="flex items-center">
                                    <i class="fa fa-arrow-left text-sm pr-2"></i>
                                    <a class="text-md  font-medium text-gray-800" href="/product">Continue Shopping</a>
                                </div>

                                <div class="flex justify-center items-end">
                                    <span class="text-sm font-medium text-gray-400 mr-1">Total:</span>
                                    <span class="text-lg font-bold text-gray-800 ">Rp95.000</span>

                                </div>

                            </div>
                        </div>
                        <div class=" p-5 bg-gray-800 rounded overflow-visible">

                            <span class="text-xl font-medium text-gray-100 block pb-3 pt-5">Pesanan</span>
                            
                            <div class="flex justify-center flex-col pt-3">
                                <label class="text-xs text-gray-400 ">Nama Penerima</label>
                                <input type="text"
                                    class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4"
                                    placeholder="Giga Tamarashvili">
                            </div>
                            <div class="flex justify-center flex-col pt-3">
                                <label class="text-xs text-gray-400 ">Alamat Penerima</label>
                                <input type="text"
                                    class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4"
                                    placeholder="Jalan ABCDE, Kota Baru">
                            </div>
                            <div class="flex justify-center flex-col pt-3">
                                <label class="text-xs text-gray-400">Jasa Kirim</label>
                                <select name="kurir" class="bg-gray-800 text-white py-2 text-sm border-b border-gray-600">
                                    <option selected class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" value="JNE Express">JNE Express</option>
                                    <option class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" value="J&T Express">J&T Express</option>
                                    <option class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" value="Ninja Express">Ninja Express</option>
                                </select>
                            </div>
                            <div class="flex justify-center flex-col pt-3">
                                <label class="text-xs text-gray-400">Metode Pembayaran</label>
                                <select name="kurir" class="bg-gray-800 text-white py-2 text-sm border-b border-gray-600">
                                    <option selected class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" value="Transfer Bank">Transfer Bank</option>
                                    <option class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" value="COD">Cash on Delivery (COD)</option>
                                </select>
                            </div>
                            {{--  If COD maka checkout langsung selesai  --}}
                            {{--  If Transfer bank ke halaman pembayaran  --}}
                            <div>.</div>
                            <button
                                class="h-12 w-full rounded focus:outline-none text-white" style="background-color: #ffbe33">
                                <a href="/payment">Check Out</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>