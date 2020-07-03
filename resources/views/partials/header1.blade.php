<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="css/app.css">

    <script type="text/javascript">
    $('#header-search').on('keyup', function() {
        var search = $(this).serialize();
        if ($(this).find('.m-input').val() == '') {
            $('#search-suggest div').hide();
        } else {
            $.ajax({
                    url: '/search',
                    type: 'POST',
                    data: search,
                })
                .done(function(res) {
                    $('#search-suggest').html('');
                    $('#search-suggest').append(res)
                })
        };
    });
    </script>
</head>

<body>

    <div class="container">

        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-right: ;">

            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="images/aodaislide.png" alt="Los Angeles" style="width:800px;height: 400px;">
                </div>
                <div class="item">
                    <img src="images/hanfuslide.png" alt="Chicago" style="width:800px;height: 400px;">
                </div>

                <div class="item">
                    <img src="images/lolitaslide.png" alt="New york" style="width:800px;height: 400px;">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
    </div>
    </div>
    <hr>
    <br>
    <div style="display: flex; margin: auto; margin-left: 50px;">
        <ul class="list-tyle">
            <li><a class="" href="#"><i class="fas fa-align-left"></i>CAREGORIES</a></li>
            <li><a class="" href="#"></a></li>
            <li><a class="" href="#">LOLITA</a></li>
            <li><a class="" href="#">HANFU</a></li>
            <li><a class="" href="#">AO DAI</a></li>
            <li><a class="" href="#">COSPLAY</a></li>
            <li><a class="" href="#">ACCESSORIES</a></li>
        </ul>
</body>

</html