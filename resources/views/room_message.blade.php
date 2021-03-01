<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>

        .chat-log {

            height: 400px;
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
</head>
<body>
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

    <div class="col col-md-10 col-lg-9 col-xl-8 mx-auto my-auto">
        <div class="card my-5 ">
            <div class="card-body">
                <div class="container-fluid">
                    <div id="messages_container" class="chat-log">
                        <div class="chat-baloncuk  float-right align-right mr-0.7rem" style=" background: #D5F4E7;  border-radius: 20px 0 20px 20px;">
                            <div class="row justify-content-end mx-1 d-flex">
                                <div class="col-auto px-0">
                <span class="text-black font-weight-bold">
                  @James
                </span>
                                </div>
                                <div class="col-auto px-0">
                                </div>
                            </div>
                            <hr class="my-1 py-0 col-8" style="opacity: 0.5">
                            <div class="chat-log_message">
                                <p>Lorem Ipsum is simply dummy text of the printing</p>
                            </div>
                            <hr class="my-1 py-0 col-8" style="opacity: 0.5">
                            <div class="row float-left m-0 p-0 justify-content-end" style="opacity: 0.5; font-weight: bold">
                                23:15
                            </div>
                        </div>

                        <div class="chat-baloncuk  p-10 float-left">
                            <div class="row justify-content-end mx-1 d-flex">
                                <div class="col-auto px-0">
                                    <span class="text-black font-weight-bold">
                                      @MJavadSF
                                    </span>
                                </div>
                                <div class="col-auto px-0">
                                </div>
                            </div>
                            <hr class="my-1 py-0 col-8" style="opacity: 0.5">
                            <div class="chat-log_message">
                                <p>MjavadSF is my user ID in all social network like Twitter, instagram, facebook and ...
                                    Follow me ❤asdsadasdasdasds
                                </p>
                            </div>
                            <hr class="my-1 py-0 col-8" style="opacity: 0.5">
                            <div class="row float-left m-0 p-0 justify-content-end " style="opacity: 0.5; font-weight: bold">
                                23:15
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer border-0 bottom-rounded " style="background-color: #97E3C2">
                <div class="row">
                    <div class="col col-md-10 col-lg-9 mx-auto">
                        <div class="row d-flex justify-content-center">
                            <div class="col-12 col-md-9 align-self-center my-0">
                                <div class="row d-flex align-self-center justify-content-center">
                                    <div class="col-12 d-flex">
                                        <div class="form-group col-12 my-0 mx-0">
                                            <textarea rows="2" id="content" name="message" placeholder="what's up bro!" class="form-control textarea resize-ta"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-3 d-flex align-self-center justify-content-center justify-content-md-end my-0">
                                <div class="md-form my-1">
                                    <button onClick="scrollDown()" type="button" class="btn btn-success">Send Message</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



 @endif

</body>
<script>
    function scrollDown() {
        $('#messages_container').animate({scrollTop:$('#messages_container').prop('scrollHeight')}, 1000);
    }
</script>
</html>
