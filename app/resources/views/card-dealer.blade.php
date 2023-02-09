<!DOCTYPE html>
    <head>
        <meta name="_token" content="{{csrf_token()}}" />
        <title>Card Dealer</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
        <script src="{{asset('js/card-dealer.js')}}"></script> 
    </head>
    <body>
        <div class="container p-5">
                <h3 class="jumbotron">Card Dealer</h3>
            <form id="cardDealer">
                <div class="form-group row p-1">
                    <div class="col-md-6 minh-100">
                        <label>Number of people</label>
                        <input type="number" name="numberofppl" class="form-control" placeholder="Enter Number of People" id="numberofppl">
                    </div>
                </div>
                <div class="form-group row p-1">
                    <div class="col-md-6">
                        <input type="submit" class="btn btn-primary float-end" value="Deal">
                        <!-- <button type="submit" class="form-control btn btn-primary float-end" id="submit">Deal</button> -->
                    </div>
                </div>
                <div class="form-group row mt-3"  style="display:none;">
                    <h2>Card Distributed</h2>
                    <div id="cardResult"></div>
                </div>
            </form>
        </div>
    </body>
</html>