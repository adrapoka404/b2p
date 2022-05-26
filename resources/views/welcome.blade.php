<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles
    <style>
        .circulo {
            position: relative;
            width: 60vh;
            height: 60vh;
            background: linear-gradient(#e90000, #5c7bff, #44b5e3);
            border-radius: 50%;
            animation: animate 5s linear infinite;
        }

        @keyframes animate{
            from{
                transform: rotate(0deg);
            }

            to{
                transform: rotate(360deg);
            }
        }

        .circulo::after {
            content: '';
            position: absolute;
            top: 35px;
            right: 35px;
            bottom: 35px;
            left: 35px;
            border-radius: 50%;
            background-color: #fff;
        }

        .circulo span{
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(#e90000, #5c7bff, #44b5e3);
            border-radius: 50%;
        }

        .circulo span:nth-child(1){
            filter: blur(15px)
        }
        .circulo span:nth-child(2){
            filter: blur(15px)
        }
        .circulo span:nth-child(3){
            filter: blur(15px)
        }
        .circulo span:nth-child(4){
            filter: blur(15px)
        }
    </style>
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

</head>

<body class="antialiased">
    <div class="min-h-screen bg-gray-100">
        @livewire('header');
        @livewire('funciones');
        <div class=" max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8  mt-20 ">
            <div class="text-purple-200 font-semibold text-center text-3xl w-full" id="proyectos">Interconectamos</div>
            <div>
                Alocandonos
                <div class="circulo">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

            </div>
            <div class="w-full md:flex ">
                <x-funcion>
                    <x-slot name="ancho">48</x-slot>
                    <x-slot name="alto">48</x-slot>
                    <x-slot name="img">{{ asset('img/negocios.png') }}</x-slot>
                    <x-slot name="title">{{ __('Negocios exitosos') }}</x-slot>
                </x-funcion>
                <x-funcion>
                    <x-slot name="ancho">48</x-slot>
                    <x-slot name="alto">48</x-slot>
                    <x-slot name="img">{{ asset('img/inversionistas.png') }}</x-slot>
                    <x-slot name="title">{{ __('Inversionistas inteligentes') }}</x-slot>
                </x-funcion>
            </div>
        </div>
        <x-no-solo-ladrillos />
        <div class=" text-center text-blue-300 font-semibold text-xl my-16" id="enqueinvierte">
            Conoce los negocios en los que puedes invertir

            <div class="md:flex md:justify-center my-16 ">
                <div class=" h-52 w-96   bg-blue-300 rounded-3xl my-10 md:my-auto grid mx-auto md:mx-5">
                    <div class="font-extralight text-2xl w-32 mx-auto my-auto right-0 h-20">

                    </div>
                </div>
                <div class=" h-52 w-96 bg-blue-300 rounded-3xl my-10 md:my-auto grid mx-auto md:mx-0">
                    <div class="font-extralight text-2xl w-32 mx-auto my-auto right-0 h-20">

                    </div>
                </div>
            </div>
            <div class=" max-w-screen-xl mx-auto">
                <div class=" text-left text-purple-200 my-20">
                    Invertir es muy sencillo
                </div>
                <div class="grid grid-cols-2 grid-rows-2">
                    <div class="w-full">
                        <div class="my-10 bg-fondo-home-registrate  w-11/12 h-96 bg-contain bg-no-repeat mx-auto"></div>
                    </div>
                    <div class="w-full">
                        <div class="my-10 bg-fondo-home-elegir  w-11/12 h-96 bg-contain bg-no-repeat mx-auto"></div>
                    </div>
                    <div class="w-full">
                        <div class="my-10 bg-fondo-home-invierte w-11/12  h-96 bg-contain bg-no-repeat mx-auto"></div>
                    </div>
                    <div class="w-full mt-10">
                        <div class="my-14 bg-fondo-home-gana w-11/12 h-96 bg-contain bg-no-repeat mx-auto"></div>
                    </div>
                </div>
            </div>
            <div class=" max-w-screen-xl mx-auto">
                <div class=" text-left text-purple-200 my-20">
                    Invertir es muy sencillo
                </div>
                <div class="grid grid-cols-2 grid-rows-2">
                    <div class="w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 1493" width="1440" height="1493" preserveAspectRatio="xMidYMid meet" style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px);">
                            <defs>
                                <clipPath id="__lottie_element_2">
                                    <rect width="1440" height="1493" x="0" y="0"></rect>
                                </clipPath>
                                <image xlink:href="{{asset('img/register/registrate_base.png')}}"></image>
                                <image xlink:href="{{asset('img/register/registrate_boton.png')}}"></image>
                                <image xlink:href="{{asset('img/register/registrate_push.png')}}"></image>
                                
                                <clipPath id="__lottie_element_85">
                                    <path d="M0,0 L1702,0 L1702,1661 L0,1661z"></path>
                                </clipPath>
                                <clipPath id="__lottie_element_90">
                                    <path d="M0,0 L1702,0 L1702,1661 L0,1661z"></path>
                                </clipPath>
                            </defs>
                            <g clip-path="url(#__lottie_element_2)">
                                <g transform="matrix(0.9434400200843811,0,0,0.9434400200843811,700.18798828125,750.6619873046875)" opacity="0.3" style="display: block;">
                                    <g opacity="1" transform="matrix(-0.7132084369659424,0.7009520530700684,-0.7009520530700684,-0.7132084369659424,-333.620849609375,-173.63003540039062)">
                                        <path fill="rgb(255,255,255)" fill-opacity="1" d=" M0,-370.57000732421875 C204.51759338378906,-370.57000732421875 370.57000732421875,-204.51759338378906 370.57000732421875,0 C370.57000732421875,204.51759338378906 204.51759338378906,370.57000732421875 0,370.57000732421875 C-204.51759338378906,370.57000732421875 -370.57000732421875,204.51759338378906 -370.57000732421875,0 C-370.57000732421875,-204.51759338378906 -204.51759338378906,-370.57000732421875 0,-370.57000732421875z"></path>
                                    </g>
                                    <g opacity="1" transform="matrix(-0.7132084369659424,-0.7009520530700684,0.7009520530700684,-0.7132084369659424,602.89453125,281.8996276855469)">
                                        <path fill="rgb(255,255,255)" fill-opacity="1" d=" M0,-157.53750610351562 C86.9449462890625,-157.53750610351562 157.53750610351562,-86.9449462890625 157.53750610351562,0 C157.53750610351562,86.9449462890625 86.9449462890625,157.53750610351562 0,157.53750610351562 C-86.9449462890625,157.53750610351562 -157.53750610351562,86.9449462890625 -157.53750610351562,0 C-157.53750610351562,-86.9449462890625 -86.9449462890625,-157.53750610351562 0,-157.53750610351562z">
                                            </path>
                                        </g>
                                    </g>
                                    <g transform="matrix(0.9434400200843811,0,0,0.9434400200843811,767.6439819335938,761.9829711914062)" opacity="1" style="display: block;">
                                        <g opacity="1" transform="matrix(1,0,0,1,-379.71099853515625,-458.9750061035156)">
                                            <path fill="rgb(255,255,255)" fill-opacity="1" d=" M0,-8.213000297546387 C4.395883560180664,-8.213000297546387 7.965000152587891,-4.532754898071289 7.965000152587891,0 C7.965000152587891,4.532754898071289 4.395883560180664,8.213000297546387 0,8.213000297546387 C-4.395883560180664,8.213000297546387 -7.965000152587891,4.532754898071289 -7.965000152587891,0 C-7.965000152587891,-4.532754898071289 -4.395883560180664,-8.213000297546387 0,-8.213000297546387z"></path>
                                        </g>
                                        <g opacity="1" transform="matrix(1,0,0,1,-296.80999755859375,-475.281005859375)">
                                            <path fill="rgb(255,255,255)" fill-opacity="1" d=" M0,-3.739000082015991 C2.1932506561279297,-3.739000082015991 3.9739999771118164,-2.063554048538208 3.9739999771118164,0 C3.9739999771118164,2.063554048538208 2.1932506561279297,3.739000082015991 0,3.739000082015991 C-2.1932506561279297,3.739000082015991 -3.9739999771118164,2.063554048538208 -3.9739999771118164,0 C-3.9739999771118164,-2.063554048538208 -2.1932506561279297,-3.739000082015991 0,-3.739000082015991z"></path>
                                        </g>
                                        <g opacity="1" transform="matrix(1,0,0,1,41.61600112915039,-575.8720092773438)">
                                            <path fill="rgb(255,255,255)" fill-opacity="1" d=" M0,-5.36299991607666 C3.3125038146972656,-5.36299991607666 6.001999855041504,-2.9598395824432373 6.001999855041504,0 C6.001999855041504,2.9598395824432373 3.3125038146972656,5.36299991607666 0,5.36299991607666 C-3.3125038146972656,5.36299991607666 -6.001999855041504,2.9598395824432373 -6.001999855041504,0 C-6.001999855041504,-2.9598395824432373 -3.3125038146972656,-5.36299991607666 0,-5.36299991607666z"></path>
                                        </g>
                                        <g opacity="1" transform="matrix(1,0,0,1,-454.9179992675781,-378.99700927734375)">
                                            <path fill="rgb(255,255,255)" fill-opacity="1" d=" M0,-5.253499984741211 C3.630674123764038,-5.253499984741211 6.578499794006348,-2.899406671524048 6.578499794006348,0 C6.578499794006348,2.899406671524048 3.630674123764038,5.253499984741211 0,5.253499984741211 C-3.630674123764038,5.253499984741211 -6.578499794006348,2.899406671524048 -6.578499794006348,0 C-6.578499794006348,-2.899406671524048 -3.630674123764038,-5.253499984741211 0,-5.253499984741211z"></path>
                                        </g>
                                        <g opacity="1" transform="matrix(1,0,0,1,105.01899719238281,-218.9290008544922)">
                                            <path fill="rgb(255,255,255)" fill-opacity="1" d=" M0,-3.940999984741211 C2.417046070098877,-3.940999984741211 4.379499912261963,-2.1750378608703613 4.379499912261963,0 C4.379499912261963,2.1750378608703613 2.417046070098877,3.940999984741211 0,3.940999984741211 C-2.417046070098877,3.940999984741211 -4.379499912261963,2.1750378608703613 -4.379499912261963,0 C-4.379499912261963,-2.1750378608703613 -2.417046070098877,-3.940999984741211 0,-3.940999984741211z"></path>
                                        </g>
                                        <g opacity="1" transform="matrix(1,0,0,1,133.63900756835938,-255.1269989013672)">
                                            <path fill="rgb(255,255,255)" fill-opacity="1" d=" M0,-1.1679999828338623 C1.342496633529663,-1.1679999828338623 2.432499885559082,-0.6446191668510437 2.432499885559082,0 C2.432499885559082,0.6446191668510437 1.342496633529663,1.1679999828338623 0,1.1679999828338623 C-1.342496633529663,1.1679999828338623 -2.432499885559082,0.6446191668510437 -2.432499885559082,0 C-2.432499885559082,-0.6446191668510437 -1.342496633529663,-1.1679999828338623 0,-1.1679999828338623z"></path>
                                        </g>
                                        <g opacity="1" transform="matrix(1,0,0,1,369.11199951171875,-157.0030059814453)">
                                            <path fill="rgb(255,255,255)" fill-opacity="1" d=" M0,-6.011000156402588 C3.452686309814453,-6.011000156402588 6.25600004196167,-3.3174710273742676 6.25600004196167,0 C6.25600004196167,3.3174710273742676 3.452686309814453,6.011000156402588 0,6.011000156402588 C-3.452686309814453,6.011000156402588 -6.25600004196167,3.3174710273742676 -6.25600004196167,0 C-6.25600004196167,-3.3174710273742676 -3.452686309814453,-6.011000156402588 0,-6.011000156402588z"></path>
                                        </g><g opacity="1" transform="matrix(1,0,0,1,265.4440002441406,-68.22799682617188)">
                                            <path fill="rgb(255,255,255)" fill-opacity="1" d=" M0,-10.093500137329102 C5.453323841094971,-10.093500137329102 9.880999565124512,-5.570602893829346 9.880999565124512,0 C9.880999565124512,5.570602893829346 5.453323841094971,10.093500137329102 0,10.093500137329102 C-5.453323841094971,10.093500137329102 -9.880999565124512,5.570602893829346 -9.880999565124512,0 C-9.880999565124512,-5.570602893829346 -5.453323841094971,-10.093500137329102 0,-10.093500137329102z"></path></g>
                                        <g opacity="1" transform="matrix(1,0,0,1,518.9669799804688,-199.85699462890625)">
                                            <path fill="rgb(255,255,255)" fill-opacity="1" d=" M0,-2.2855000495910645 C1.5105502605438232,-2.2855000495910645 2.736999988555908,-1.2613674402236938 2.736999988555908,0 C2.736999988555908,1.2613674402236938 1.5105502605438232,2.2855000495910645 0,2.2855000495910645 C-1.5105502605438232,2.2855000495910645 -2.736999988555908,1.2613674402236938 -2.736999988555908,0 C-2.736999988555908,-1.2613674402236938 -1.5105502605438232,-2.2855000495910645 0,-2.2855000495910645z"></path></g>
                                        <g opacity="1" transform="matrix(1,0,0,1,473.9649963378906,-179.02200317382812)">
                                            <path fill="rgb(255,255,255)" fill-opacity="1" d=" M0,-1.9754999876022339 C1.1520912647247314,-1.9754999876022339 2.0875000953674316,-1.0902783870697021 2.0875000953674316,0 C2.0875000953674316,1.0902783870697021 1.1520912647247314,1.9754999876022339 0,1.9754999876022339 C-1.1520912647247314,1.9754999876022339 -2.0875000953674316,1.0902783870697021 -2.0875000953674316,0 C-2.0875000953674316,-1.0902783870697021 -1.1520912647247314,-1.9754999876022339 0,-1.9754999876022339z"></path></g>
                                        <g opacity="1" transform="matrix(1,0,0,1,-390.7179870605469,-31.054000854492188)">
                                            <path fill="rgb(255,255,255)" fill-opacity="1" d=" M0,-3.9704999923706055 C2.048928737640381,-3.9704999923706055 3.7125000953674316,-2.191318988800049 3.7125000953674316,0 C3.7125000953674316,2.191318988800049 2.048928737640381,3.9704999923706055 0,3.9704999923706055 C-2.048928737640381,3.9704999923706055 -3.7125000953674316,2.191318988800049 -3.7125000953674316,0 C-3.7125000953674316,-2.191318988800049 -2.048928737640381,-3.9704999923706055 0,-3.9704999923706055z"></path></g>
                                        <g opacity="1" transform="matrix(1,0,0,1,-628.239013671875,189.2010040283203)">
                                            <path fill="rgb(255,255,255)" fill-opacity="1" d=" M0,-3.3519999980926514 C2.170346736907959,-3.3519999980926514 3.932499885559082,-1.8499687910079956 3.932499885559082,0 C3.932499885559082,1.8499687910079956 2.170346736907959,3.3519999980926514 0,3.3519999980926514 C-2.170346736907959,3.3519999980926514 -3.932499885559082,1.8499687910079956 -3.932499885559082,0 C-3.932499885559082,-1.8499687910079956 -2.170346736907959,-3.3519999980926514 0,-3.3519999980926514z"></path></g>
                                        <g opacity="1" transform="matrix(1,0,0,1,-573.4210205078125,192.6739959716797)">
                                            <path fill="rgb(255,255,255)" fill-opacity="1" d=" M0,-9.203499794006348 C4.43010139465332,-9.203499794006348 8.027000427246094,-5.079411506652832 8.027000427246094,0 C8.027000427246094,5.079411506652832 4.43010139465332,9.203499794006348 0,9.203499794006348 C-4.43010139465332,9.203499794006348 -8.027000427246094,5.079411506652832 -8.027000427246094,0 C-8.027000427246094,-5.079411506652832 -4.43010139465332,-9.203499794006348 0,-9.203499794006348z"></path></g>
                                        <g opacity="1" transform="matrix(1,0,0,1,-767.2730102539062,362.91400146484375)">
                                            <path fill="rgb(255,255,255)" fill-opacity="1" d=" M0,-5.19350004196167 C2.6739554405212402,-5.19350004196167 4.84499979019165,-2.866292715072632 4.84499979019165,0 C4.84499979019165,2.866292715072632 2.6739554405212402,5.19350004196167 0,5.19350004196167 C-2.6739554405212402,5.19350004196167 -4.84499979019165,2.866292715072632 -4.84499979019165,0 C-4.84499979019165,-2.866292715072632 -2.6739554405212402,-5.19350004196167 0,-5.19350004196167z"></path></g>
                                        <g opacity="1" transform="matrix(1,0,0,1,498.7179870605469,346.9700012207031)">
                                            <path fill="rgb(255,255,255)" fill-opacity="1" d=" M0,-4.082499980926514 C2.836766004562378,-4.082499980926514 5.139999866485596,-2.253131628036499 5.139999866485596,0 C5.139999866485596,2.253131628036499 2.836766004562378,4.082499980926514 0,4.082499980926514 C-2.836766004562378,4.082499980926514 -5.139999866485596,2.253131628036499 -5.139999866485596,0 C-5.139999866485596,-2.253131628036499 -2.836766004562378,-4.082499980926514 0,-4.082499980926514z"></path></g>
                                        <g opacity="1" transform="matrix(1,0,0,1,-648.6320190429688,-584.2239990234375)">
                                            <path fill="rgb(255,255,255)" fill-opacity="1" d=" M0,-4.894000053405762 C2.063554048538208,-4.894000053405762 3.739000082015991,-2.700998544692993 3.739000082015991,0 C3.739000082015991,2.700998544692993 2.063554048538208,4.894000053405762 0,4.894000053405762 C-2.063554048538208,4.894000053405762 -3.739000082015991,2.700998544692993 -3.739000082015991,0 C-3.739000082015991,-2.700998544692993 -2.063554048538208,-4.894000053405762 0,-4.894000053405762z"></path></g>
                                        <g opacity="1" transform="matrix(1,0,0,1,518.5980224609375,540.3200073242188)">
                                            <path fill="rgb(255,255,255)" fill-opacity="1" d=" M0,-5.926499843597412 C3.078498125076294,-5.926499843597412 5.578000068664551,-3.2708351612091064 5.578000068664551,0 C5.578000068664551,3.2708351612091064 3.078498125076294,5.926499843597412 0,5.926499843597412 C-3.078498125076294,5.926499843597412 -5.578000068664551,3.2708351612091064 -5.578000068664551,0 C-5.578000068664551,-3.2708351612091064 -3.078498125076294,-5.926499843597412 0,-5.926499843597412z"></path></g>
                                        <g opacity="1" transform="matrix(1,0,0,1,650.9580078125,193.5070037841797)">
                                            <path fill="rgb(255,255,255)" fill-opacity="1" d=" M0,-6.0304999351501465 C3.946084976196289,-6.0304999351501465 7.150000095367432,-3.328233003616333 7.150000095367432,0 C7.150000095367432,3.328233003616333 3.946084976196289,6.0304999351501465 0,6.0304999351501465 C-3.946084976196289,6.0304999351501465 -7.150000095367432,3.328233003616333 -7.150000095367432,0 C-7.150000095367432,-3.328233003616333 -3.946084976196289,-6.0304999351501465 0,-6.0304999351501465z"></path></g></g>
                                        <g clip-path="url(#__lottie_element_85)" transform="matrix(0.9434400200843811,0,0,0.9434400200843811,-45.6214599609375,-178.48992919921875)" opacity="1" style="display: block;"><g transform="matrix(1,0,0,1,142.76849365234375,901.9011840820312)" opacity="1" style="display: none;">
                                            <image width="59px" height="54px" preserveAspectRatio="xMidYMid slice" xlink:href="lottie/1/images/img_29.png"></image>
                                        </g>
                                        
                                        
                                        <g transform="matrix(0.9434400200843811,0,0,0.9434400200843811,1145.384521484375,823.413330078125)" opacity="1" style="display: block;"><image width="54px" height="72px" preserveAspectRatio="xMidYMid slice" xlink:href="lottie/1/images/img_13.png"></image></g><g transform="matrix(0.9434400200843811,0,0,0.9434400200843811,994.4341430664062,815.8657836914062)" opacity="1" style="display: block;"><image width="195px" height="195px" preserveAspectRatio="xMidYMid slice" xlink:href="lottie/1/images/img_12.png"></image></g><g transform="matrix(0.9434400200843811,0,0,0.9434400200843811,184.12588500976562,295.45172119140625)" opacity="1" style="display: block;"><image width="989px" height="1199px" preserveAspectRatio="xMidYMid slice" xlink:href="lottie/1/images/img_11.png"></image></g><g class="psd" transform="matrix(0.9434366822242737,0.002509939717128873,-0.002509939717128873,0.9434366822242737,633.265869140625,685.4021606445312)" opacity="1" style="display: block;"><image width="52px" height="47px" preserveAspectRatio="xMidYMid slice" xlink:href="lottie/1/images/img_10.png"></image></g><g class="psd" transform="matrix(0.9434366822242737,0.002509939717128873,-0.002509939717128873,0.9434366822242737,493.62969970703125,687.8610229492188)" opacity="1" style="display: block;"><image width="174px" height="64px" preserveAspectRatio="xMidYMid slice" xlink:href="lottie/1/images/img_9.png"></image></g><g class="psd" transform="matrix(0.9434400200843811,0,0,0.9434400200843811,619.9954223632812,674.7146606445312)" opacity="1" style="display: block;"><image width="230px" height="138px" preserveAspectRatio="xMidYMid slice" xlink:href="lottie/1/images/img_8.png"></image></g><g transform="matrix(0.9434400200843811,0,0,0.9434400200843811,726.6033935546875,494.5185852050781)" opacity="1" style="display: block;"><image width="105px" height="45px" preserveAspectRatio="xMidYMid slice" xlink:href="lottie/1/images/img_7.png"></image></g><g transform="matrix(0.9760859608650208,0,0,0.9760859608650208,724.4849243164062,491.91314697265625)" opacity="1" style="display: block;"><image width="72px" height="44px" preserveAspectRatio="xMidYMid slice" xlink:href="lottie/1/images/img_6.png"></image></g><g transform="matrix(0.9434400200843811,-0.0000378593394998461,0.0000378593394998461,0.9434400200843811,243.56175231933594,1007.7500610351562)" opacity="1" style="display: block;"><image width="53px" height="58px" preserveAspectRatio="xMidYMid slice" xlink:href="lottie/1/images/img_5.png"></image></g><g transform="matrix(0.9434400200843811,0,0,0.9434400200843811,318.56683349609375,1014.3519287109375)" opacity="1" style="display: block;"><image width="51px" height="52px" preserveAspectRatio="xMidYMid slice" xlink:href="lottie/1/images/img_4.png"></image></g><g transform="matrix(0.9434400200843811,0,0,0.9434400200843811,252.99783325195312,1028.50341796875)" opacity="1" style="display: block;">
                                            <image width="103px" height="112px" preserveAspectRatio="xMidYMid slice" xlink:href="lottie/1/images/img_3.png"></image></g><g transform="matrix(0.9434400200843811,0,0,0.9829060435295105,308.66070556640625,1267.6287841796875)" opacity="1" style="display: block;">
                                                <image width="524px" height="217px" preserveAspectRatio="xMidYMid slice" xlink:href="{{asset('img/register/registrate_push.png')}}"></image></g><g class="psd" transform="matrix(0.9434400200843811,0,0,0.9434400200843811,255.82806396484375,1247.38134765625)" opacity="1" style="display: block;">
                                                <image width="636px" height="269px" preserveAspectRatio="xMidYMid slice" xlink:href="{{asset('img/register/registrate_boton.png')}}"></image></g><g transform="matrix(0.6931787133216858,0,0,0.6501642465591431,377.83026123046875,1390.529052734375)" opacity="1" style="display: block;">
                                            <image width="25px" height="24px" preserveAspectRatio="xMidYMid slice" xlink:href="{{asset('img/register/registrate_base.png')}}">
                                            </image>
                                        </g>
                                    </g>
                                </svg>   
                    </div>
                    <div class="w-full">
                        <div class="my-10 bg-fondo-home-elegir-animate  w-11/12 h-96 bg-contain bg-no-repeat mx-auto"></div>
                    </div>
                    <div class="w-full">
                        <div class="my-10 bg-fondo-home-invierte-animate w-11/12  h-96 bg-contain bg-no-repeat mx-auto"></div>
                    </div>
                    <div class="w-full mt-10">
                        <div class="my-14 bg-fondo-home-gana-animate w-11/12 h-96 bg-contain bg-no-repeat mx-auto"></div>
                    </div>
                </div>
            </div>
        </div>
        @livewire('footer')

        @livewireScripts
</body>

</html>
