<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #f7f7f7cc;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .bg{
                background-image: url("{{ asset('img/background-music-hero-image.jpg') }}");
                width: auto;
                background-position: bottom;
            }

            .title_lp {
                text-align: center;
                color: #f7f7f7cc;
            }

            .label_ticket{
                font-size: 1rem;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <script>
            window.print()
            // window.location.href = "/"
        </script>
        <div class="title_lp m-b-md">
            <div class="container">
                <div class="card bg">
                    <div class="card-body">
                        <div class="row justify-content-center">
                                <h1>Festival Musik Ticket</h1>
                        </div>
                        <hr>
                        <div class="row justify-content-center">
                                <h4>Ticket ID : {{$reservation ? $reservation->id : ""}}</h4>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-3 label_ticket">Name</div>
                            <div class="col-3 label_ticket">Email</div>
                            <div class="col-3 label_ticket">Date Registration</div>
                            <div class="col-3 label_ticket">Address</div>
                        </div>

                        <div class="row">
                            <div class="col-3 label_ticket"><h3>{{$reservation ? $reservation->name : ""}}</h3></div>
                            <div class="col-3 label_ticket"><h3>{{$reservation ? $reservation->email : ""}}</h3></div>
                            <div class="col-3 label_ticket"><h3>{{$reservation ? date('d-m-Y',strtotime($reservation->created_at)) : ""}}</h3></div>
                            <div class="col-3 label_ticket"><h3>{{$reservation ? $reservation->address : ""}}</h3></div>
                        </div>
                            &nbsp;
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
