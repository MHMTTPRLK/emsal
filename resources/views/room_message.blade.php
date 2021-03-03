<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-notify@0.2.1/dist/simple-notify.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/simple-notify@0.2.1/dist/simple-notify.min.js"></script>
    <style>

        .notify {
            /* defaults */
            --notify-error: #eb5757;
            --notify-success: #6fcf97;
            --notify-warning: #f2c94c;
            --notify-gray: #333333;
            --notify-gray-2: #4d4d4d;
            --notify-gray-3: #828282;
            --notify-white: #fff;
            --notify-white-2: rgba(255, 255, 255, 0.8);
            --notify-padding: 0.75rem;
            --notify-icon-size: 32px;
            --notify-close-icon-size: 16px;
        }
        .chat-ekrani {

            overflow: auto;
            height: 450px;
        }
        .chat-baloncuk {
            margin: 0 auto 10px;
            max-width: 65%;
            min-width: 25%;
            font-size: 13px;
            border-radius: 0 20px 20px 20px;
            background: #eaeaea;
            clear: both;
        }

    </style>

    <script src="{{mix('js/app.js')}}"></script>


</head>
<body onload="scrollDown1()">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/logout')}}" class="btn btn-success  float-right mr-2">Çıkış</a>
               <a href="{{ route('welcome')}}" class="btn btn-success  float-right mr-2">Anasayfa</a>



            @endauth
        </div>
    @endif

</div>
@isset($room)


        <div class="float-left" style="margin-left:270px;">
            <a href="" class="btn btn-primary" onclick="document.location.reload(true)"><i class="fas fa-sync-alt"></i> Yenile</a>
        </div>
        <div class="col col-md-10 col-lg-9 col-xl-8 mx-auto my-auto">

            <div class="card my-5 ">
                <div class="card-body">
                    <div class="container-fluid">
                        <div id="mesaj_alani" class="chat-ekrani">
                            @foreach($messages as $message)

                                @if(auth()->user()->id==$message->user->id)
                                    <div class="chat-baloncuk  float-right align-right mr-0.7rem"
                                         style=" background: #D5F4E7;  border-radius: 20px 0 20px 20px;">
                                        <div class="row justify-content-end mx-1 d-flex">
                                            <div class="col-auto px-0">
                                            <span class="text-black font-weight-bold">
                                            {{$message->user->name}}
                                            </span>
                                            </div>
                                            <div class="col-auto px-0">
                                            </div>
                                        </div>
                                        <hr class="my-1 py-0 col-8" style="opacity: 0.5">
                                        <div class="">
                                            <p>{{$message->message}}</p>
                                        </div>
                                        <hr class="my-1 py-0 col-8" style="opacity: 0.5">
                                        <div class="row float-left m-0 p-0 justify-content-end" style="opacity: 0.5; font-weight: bold">
                                            {{ $message->created_at->diffForHumans()}}
                                        </div>
                                    </div>
                                @else
                                    <div class="chat-baloncuk  p-10 float-left">
                                        <div class="row justify-content-end mx-1 d-flex">
                                            <div class="col-auto px-0">
                                    <span class="text-black font-weight-bold">
                                  {{$message->user->name}}
                                    </span>
                                            </div>
                                            <div class="col-auto px-0">
                                            </div>
                                        </div>
                                        <hr class="my-1 py-0 col-8" style="opacity: 0.5">
                                        <div class="">
                                            <p>{{$message->message}}
                                            </p>
                                        </div>
                                        <hr class="my-1 py-0 col-8" style="opacity: 0.5">
                                        <div class="row float-left m-0 p-0 justify-content-end " style="opacity: 0.5; font-weight: bold">
                                            {{$message->created_at->diffForHumans()}}
                                        </div>
                                    </div>

                                @endif

                            @endforeach




                        </div>
                    </div>
                </div>
                <div class="card-footer border-0 bottom-rounded " style="background-color: #97E3C2">
                    <div class="row">

                        <div class="col col-md-10 col-lg-9 mx-auto">
                            <form id="frm"  method="POST" action="{{route('message.post')}}">
                                    @csrf
                            <div class="row d-flex justify-content-center">
                                <div class="col-12 col-md-9 align-self-center my-0">
                                    <div class="row d-flex align-self-center justify-content-center">

                                        <div class="col-12 d-flex">

                                            <div class="form-group col-12 my-0 mx-0">
                                                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                                                <input type="hidden" name="room_id" value="{{$room->id}}">
                                                <textarea  onkeyup="myFunction()"    rows="2" id="mesaj" name="message"
                                               class="form-control textarea resize-ta"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3 d-flex align-self-center
                                justify-content-center justify-content-md-end my-0">
                                    <div class="md-form my-1">

                                        <button onclick="yenile()" type="submit" class="btn btn-success save-data" id="btnGonder" disabled>Send Message</button>

                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>







 @endif

</body>
<script>
    var gonder=document.getElementById('btnGonder');
    var  msg=document.getElementById('mesaj');

    var myNotify;
    function pushNotify() {
        myNotify = new Notify({
            status: 'warning',
            title: 'Uyarı',
            text: 'Mesaj İçeriği 10 Veya Daha Fazla Olmalıdır',
            effect: 'fade',
            speed: 300,
            customClass: null,
            customIcon: null,
            isIcon: true,
            isCloseButton: true,
            autoclose: true,
            autotimeout: 1000,
            gap: 20,
            distance: 20,
            type: 1,
            position: 'right top'
        })
    }
    function close() {
        myNotify.close()
    }
    function myFunction()
    {

        var mValue=msg.value.length;
        console.log(mValue);
        if(mValue>=10)
        {
            gonder.disabled=false;
        }
        else if(mValue<10){
            gonder.disabled=true;
            pushNotify();

        }
    }

    function scrollDown1()
    {
        $('#mesaj_alani').animate({scrollTop:$('#mesaj_alani').prop('scrollHeight')}, 1000);
    }
    function yenile() {
        document.location.reload(true);
    }

</script>

<script>

</script>

</html>
