<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="{{asset('front/')}}/resources/style.css">
    <link rel="stylesheet" href="{{asset('front/')}}/resources/responsive.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <title>birnömrə</title>

</head>

<body onload="loadfun()">


    <!-- PRELOADER -->
    <div id="preloader-bg">
        <div id="loading"></div>
    </div>
    <!-- PRELOADER-END -->


    <!-- Header -->
    <div class="header">
        <div class="container">
            <div class="header-inner row">
                <div class="header-title">
                    <a href="{{route('index')}}"><img class="img-fluid" src="{{asset('front/')}}/resources/img/birnömrə logo.png" alt=""></a>
                </div>
                <div class="social ">
                    <h1>Bizi izləyin.</h1>
                    <a href="https://www.facebook.com/Deirvlon" target="_blank"><img class="img-fluid" src="{{asset('front/')}}/resources/img/Vector (1).svg" alt=""></a>
                    <a href="https://www.instagram.com/deirvlon" target="_blank"><img class="img-fluid" src="{{asset('front/')}}/resources/img/Group.svg" alt=""></a>
                    <a href="tel:+994515460341"><img class="img-fluid" src="{{asset('front/')}}/resources/img/Vector111.svg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <div class="top-line"></div>
    <!-- Header End -->

    {{-- REKLAM --}}
    <div class="container ">
        <div class="ad col-lg-12 mt-5">
            <a href=""><img class="img-fluid" src="{{asset('front/')}}/resources/img/de.png" alt=""></a>
        </div>
    </div>
    {{-- REKLAM END --}}

    <!-- NUMBER-ENTER-UNIT -->
    <form action="{{route('index')}}" method="GET" autocomplete="off">
        <div class="mt-5 container">
            <div class="enter-number row ">
                <div class=" col-lg-3 col-xl-3 col-md-12 col-sm-12 col-12 custom-select-wrapper prefix-selector">
                    <div class="select">
                        <select id="slct" selected placeholder="fff" name="prefix">
                            <option selected disabled hidden>Prefiks</option>
                            <optgroup label="Azercell">
                                <option value="50">50</option>
                                <option value="51">51</option>
                                <option value="10">10</option>
                            </optgroup>
                            <optgroup label="Bakcell">
                                <option value="55">55</option>
                                <option value="99">99</option>
                            </optgroup>
                            <optgroup label="Nar">
                                <option value="70">70</option>
                                <option value="77">77</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                <div class="col-lg-9 col-xl-9 col-md-12 col-sm-12 col-12 number-form">
                    <div class="row">
                        <div class=" col-lg-7 col-xl-7 col-md-12 col-sm-12 col-12 input-container">
                            <input class="numbers numberonly" type="text" maxlength="1" name="num1" placeholder="0">
                            <input class="numbers numberonly" type="text" maxlength="1" name="num2" placeholder="0">
                            <input class="numbers numberonly" type="text" maxlength="1" name="num3" placeholder="0">
                            <input class="numbers numberonly" type="text" maxlength="1" name="num4" placeholder="0">
                            <input class="numbers numberonly" type="text" maxlength="1" name="num5" placeholder="0">
                            <input class="numbers numberonly" type="text" maxlength="1" name="num6" placeholder="0">
                            <input class="numbers numberonly" type="text" maxlength="1" name="num7" placeholder="0">
                        </div>
                        <div class=" col-lg-5 col-xl-5 col-md-12 col-sm-12 col-12 button-container">
                            <button class="number-button1" class="search" type="submit"><img src="{{asset('front/')}}/resources/img/Vector.svg" alt="">
                                Axtar</button>
                            <button class="number-button2" type="reset"><img src="{{asset('front/')}}/resources/img/Group 263.svg" alt="">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- NUMBER-ENTER-UNIT-END  -->




    <!-- MAIN-PHOTO  -->
    <div class="container">
        <div class="mt-4 main row">
            <div class="main-img"><img class="img-fluid" src="{{asset('front/')}}/resources/img/delta.png" alt="">
                <div class="main-text">
                    <h1>Nömrə seçmək <b>bizimlə</b> daha <b>rahatdır !</b></h1>
                </div>

            </div>
        </div>
    </div>
    <!-- MAIN-PHOTO  -->


    <!-- SHIPPING -->
    {{-- <div class="container">
        <div class="mt-5 shipping">
            <img src="{{asset('front/')}}/resources/img/shipping.png" alt="">
    <h1>Bütün Azərbaycana çatdırılma</h1>
    </div>
    </div> --}}
    <!-- SHIPPING-END -->


    <!-- STEPPED PROGRESS BAR -->
    <form action="{{route('index')}}" method="GET" id=" ">
        <div class="container mt-5">
            <div class=" prog-bar row">
                <div tabindex="1" class="aaa"><input id="stepper" value="Sadə" type="submit" class="button sade" name="sade" style="@if(request()->GET('sade'))     outline: none;
                        background: linear-gradient(90.8deg, #7463F4 1.75%, #3A5BED 100%);
                        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
                        color: #fff; @endif" /> </div>
                <div tabindex="1" class="aaa"><input id="stepper1" value="Gümüş" type="submit" class="button" style="@if(request()->GET('gumus'))     outline: none;
                    background: linear-gradient(90.8deg, #7463F4 1.75%, #3A5BED 100%);
                    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
                    color: #fff; @endif" name="gumus" /> </div>
                <div tabindex="1" class="aaa"><input id="stepper2" value="Qızıl" type="submit" class="button" style="@if(request()->GET('qizil'))     outline: none;
                    background: linear-gradient(90.8deg, #7463F4 1.75%, #3A5BED 100%);
                    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
                    color: #fff; @endif" name="qizil" /> </div>
                <div tabindex="1" class="aaa"><input id="stepper3" value="Platinium" type="submit" style="@if(request()->GET('platinium'))     outline: none;
                    background: linear-gradient(90.8deg, #7463F4 1.75%, #3A5BED 100%);
                    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
                    color: #fff; @endif" class="button" name="platinium" />
                </div>
            </div>
    </form>

    <section class="checkout-progress-indicator mt-5">
        <div class="progress">
            <div class="step @if(request()->GET('sade')) current @endif" id="1">
                <span>0</span>
            </div>
            <div class="direction @if(request()->GET('sade')) current @endif" id="12"></div>
            <div class="step @if(request()->GET('sade')) current @endif" id="2">
                <span>10</span>
            </div>
            <div class="direction @if(request()->GET('sade')) current @endif" id="13"></div>
            <div class="step @if(request()->GET('sade') || request()->GET('gumus')) current @endif" id="3">
                <span>25</span>
            </div>
            <div class="direction @if(request()->GET('gumus')) current @endif" id="14"></div>
            <div class="step @if(request()->GET('gumus')) current @endif" id="4">
                <span>50</span>
            </div>
            <div class="direction @if(request()->GET('gumus')) current @endif" id="15"></div>
            <div class="step @if(request()->GET('gumus') || request()->GET('qizil')) current @endif" id="5">
                <span>100</span>
            </div>
            <div class="direction @if(request()->GET('qizil')) current @endif" id="16"></div>
            <div class="step @if(request()->GET('qizil')) current @endif" id="6">
                <span>150</span>
            </div>
            <div class="direction @if(request()->GET('qizil')) current @endif" id="17"></div>
            <div class="step @if(request()->GET('qizil')) current @endif" id="7">
                <span>250</span>
            </div>
            <div class="direction @if(request()->GET('qizil')) current @endif" id="18"></div>
            <div class="step @if(request()->GET('qizil') || request()->GET('platinium')) current @endif" id="8">
                <span>500</span>
            </div>
            <div class="direction @if(request()->GET('platinium')) current @endif" id="19"></div>
            <div class="step step-image @if(request()->GET('platinium')) current @endif" id="9">
                <span><img class="right-arrow" src="{{asset('front/')}}/resources/img/Vector.png" alt=""></span>
            </div>
        </div>
    </section>
    </div>
    <!-- STEPPED PROGRESS BAR END -->


    <!-- NUMBER INFORMATION -->
    <div class="container posts">
        <div class="mt-5 table-responsive unresponsive-number">
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th scope="col">Nömrə</th>
                        <th scope="col">Qiymət</th>
                        <th scope="col">Əlaqə nömrəsi</th>
                        <th scope="col">Əlaqəli şəxs</th>
                        <th scope="col">Mənbə</th>
                        <th scope="col">Sifariş</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($numbers as $number)
                    <tr class="text-center @if($loop->odd) bg-grad text-light @endif">
                        <td>{{$number->prefix}} {{$number->num1}}{{$number->num2}}{{$number->num3}}
                            {{$number->num4}}{{$number->num5}} {{$number->num6}}{{$number->num7}}
                        </td>
                        <td>{{$number->price}}</td>
                        <td>{{$number->contact}}</td>
                        <td>{{$number->seller}}</td>
                        <td>{{$number->operator}}</td>
                        <td>
                            <div class="dropdown">
                                <button class="table-button-white @if($loop->even) bg-white @endif" @if($loop->odd) style="background:#3C5CEE; color:#fff" @endif role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Sifariş et
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="tel:+994557632301">Zəng et</a>
                                    <a class="dropdown-item" href="https://wa.me/+994515460341" target="_blank">Whatsapp</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>



        </div>





        <!--RESPONSİVE NUMBER İNFORMATİON -->
        @foreach($numbers as $number)
        <div class="card text-white bg-primary mb-3 responsive-number" id="mmm">
            <div class="card-body">
                <h5 class="card-title txt-ag">{{$number->prefix}} {{$number->num1}}{{$number->num2}}{{$number->num3}}
                    {{$number->num4}}{{$number->num5}} {{$number->num6}}{{$number->num7}}
                </h5>
                <p class="card-text">{{$number->price}} AZN</p>
                <p class="card-text txt-ag">{{$number->seller}}<br> ({{$number->contact}})</p>
                <div class="btn-group dropright">
                    <button type="button" class="buy" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sifariş et
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="tel:+994557632301">Zəng et</a>
                        <a class="dropdown-item" href="https://wa.me/+994515460341" target="_blank">Whatsapp</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <!--RESPONSİVE NUMBER İNFORMATİON END-->

    </div>
    <!-- NUMBER INFORMATION-END -->
    <div class="container pss">
        <div class=" mt-4">
            {{$numbers->withQueryString()->onEachSide(1)->links()}}
        </div>
    </div>

    <!-- WHATSAPP ICON -->
    <div>
        <a class="whats-app" href="https://wa.me/+994515460341" target="_blank">
            <img class="img-fluid" src="{{asset('front/')}}/resources/img/Group 468.svg" alt="">
        </a>
    </div>
    <!-- WHATSAPP-ICON-END -->

    <div class="container ">
        <div class="ad col-lg-12 mt-5">
            <a href=""><img class="img-fluid" src="{{asset('front/')}}/resources/img/de.png" alt=""></a>
        </div>
    </div>



    <!-- FOOTER -->
    <div class="footer mt-5 container-fluid">
        <div class="footer-text">
            <h1>Birnömrə</h1>
            <p>Copyright © 2021 <a href="http://deirvlon.com/az" target="_blank"><b>Deirvlon Technologies.</b></a> All rights reserved.
            </p>
            <a href="https://www.facebook.com/Deirvlon" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/deirvlon" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="tel:+994515460341"><i class="fas fa-phone-alt"></i></a>
        </div>

    </div>
    <!-- FOOTER-END-->

    <!-- Modal -->
    @if($count < 1) <div class="modal fade animate__animated animate__tada " id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
        <div class="modal-dialog-centered modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close close-button" data-dismiss="modal" aria-label="Close">
                        <img src="{{asset('front/')}}/resources/img/Group 263.svg" alt="">
                    </button>
                </div>

                <div class="modal-body">
                    <p>Əfsuslar olsun , sorğunuza uyğun heç bir nömrə tapılmadı.</p>
                </div>

            </div>
        </div>
        </div>
        @endif
        <!-- MODAL-END -->

        <!-- SCRIPTS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            if (window.location.href !== 'http://localhost:8000/') {
                window.location.hash = " ";
            }

            // $(document).ready(function() {

            //     $(document).on('click', '.pagination a', function(event) {
            //         event.preventDefault();
            //         $('#preloader-bg').remove()
            //         var page = $(this).attr('href').split('page=')[1];
            //         fetch_data(page);
            //     });

            //     function fetch_data(page) {
            //         $.ajax({
            //             url: "?page=" + page,
            //             success: function(data) {
            //                 $('.posts').html(data);
            //             }
            //         });
            //     }
            // });
        </script>
        <script src="{{asset('front/')}}/script.js"></script>


        <!-- {{-- <script>
        $(document).ready(function()
        {

            $('.sade').click(function(e){
                    e.preventDefault();
                    $.ajax({
                    method: 'GET',
                    url : "{{route('search2')}}",
        success : function (data) {
        if(data)
        {
        $('.table tbody').append('<tr>
            <td>'+data.prefix+data.num1+data.num2+data.num3+data.num4+data.num5+data.num6+data.num7+'</td>
            <td>'+data.price+'</td>
            <td>'+data.contact+'</td>
            <td>'+data.seller+'</td>
            <td>'+data.operator+'</td>
        </tr>')
        }
        }
        });
        })
        })
        </script> --}} -->



</body>

</html>