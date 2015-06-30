<html>

<head>
    <title>Simple test</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">




    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <style>
        .rating-box{
            min-height: 125px;
            padding: 10px;
        }

        .rating-box .rating-box-content {
            padding: 10px;
            border: 1px #dfdfdf solid;
            min-height: 125px;
            -webkit-box-shadow: 4px 4px 4px 0px rgba(204,204,204,1);
            -moz-box-shadow: 4px 4px 4px 0px rgba(204,204,204,1);
            box-shadow: 4px 4px 4px 0px rgba(204,204,204,1);
        }
        
        .rating-box .rating-box-content .rating-box-content-img{
            width: 50px;
        }
        
        .rating-box .rating-box-content .star-element{
            position: absolute;
            top: 20;
            left: 25px;
        }

        .rating-box .rating-box-content .star-img{
            z-index: 10;
            width: 115px;
        }

        .rating-box .rating-box-content .star-void{
            height: 25px;
            width: 115px;
            max-width: 115px;
            background-color: #ccc;
            z-index: 0;
        }

        .rating-box .rating-box-content .star-bar{
            height: 25px;
            width: 0px;
            max-width: 115px;
            background-color: #E8CC06;
            z-index: 1;
        }

        .dataTables_filter label {
            margin-right: 5px;

        }
    </style>

</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <span style="color: #DFE4ED;">
                                <h2 style="font-size:1.6em;">James Bob Dental</h2>
                                <span class="clear"> <span class="block m-t-xs">
                                <strong class="font-bold">509 Olive Way<br>Seattle, Washington 98010</strong>
                                <span class="text-muted text-xs block">(206) 682-3458</span> 
                            </span>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg">
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-xs-12">
                    <div style="width: 350px; height:75px;">
                        <div style="position: absolute; z-index: 0;top: 10px;left:25px;">
                            <h1><strong id="header-rating">0.00</strong></h1>
                        </div>
                        <div id="header-bar" style="height: 75px; width: 0px; max-width:350px; background-color: #E8CC06; position: absolute; z-index: 0;top: 6px; left:100px;">
                        </div>
                        <img style="position:absolute;z-index: 1;top: 6px; left:100px;" src="data:image/png;base64,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"/>
                    </div>
                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row ibox">
                    <div class="col-lg-12 ibox-content">
                        <div class="">
                            <div class="">
                                <div class="clear"></div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span class="col-lg-2">
                                            <select name="perPage" id="DataTables_length" class="col-lg-1 form-control">
                                                <option value="6" >6</option>
                                                <option value="12">12</option>
                                                <option value="18">18</option>
                                                <option value="24">24</option>
                                            </select>
                                        </span>
                                        <label for="DataTables_length" class="col-lg-10">records per page</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div id="TableData">
                                        <div class="col-xs-4 rating-box" >
                                            <div class="rating-box-content">
                                                <span>
                                                    <img class="img-circle rating-box-content-img" src="img/r0.png">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-xs-4 rating-box" >
                                            <div class="rating-box-content">
                                                <span>
                                                    <img class="img-circle rating-box-content-img" src="img/r1.png">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-xs-4 rating-box" >
                                            <div class="rating-box-content">
                                                <span>
                                                    <img class="img-circle rating-box-content-img" src="img/r2.png">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <ul id="paginator" class="pagination-sm"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div>
                    <strong>Copyright</strong> Simple test to Reputation Loop &copy; 2014-2015
                </div>
            </div>

        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/jquery.twbsPagination.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <script type="text/javascript">
        var total_reviews;
        $(document).ready(function() {
            getData(1, true);

            $('#DataTables_length').change(function() {
                getData(1, true);
            });
        });

        function getData (page, perpageChange) {
            var perpage = $( "#DataTables_length option:selected" ).val();
            var parametros = {
                "reviews" : perpage,
                "offset" : page * $( "#DataTables_length option:selected" ).val() - perpage
            };


            $.post('getData.php', parametros, function(response){
                var html = "";
                if(perpageChange){
                    if($('#paginator.pagination').length > 0)
                        $('#paginator').twbsPagination('destroy');

                    $('#paginator').twbsPagination({
                        totalPages: parseInt(response.business_info.total_rating.total_no_of_reviews/perpage),
                        visiblePages: 10,
                        onPageClick: function (event, page) {
                            getData(page);
                        }
                    });
                }

                var rating = getRatingRatio(response.business_info.total_rating.total_avg_rating, 350);
                $('#header-rating').html(response.business_info.total_rating.total_avg_rating);
                $('#header-bar').css({
                    width: rating+'px'
                });
                for (var counter = 0; counter < response.reviews.length; counter++){

                    var ratingRatio = getRatingRatio(response.reviews[counter].rating, 115);
                    date = new Date(response.reviews[counter].date_of_submission);
                    html += "<div class='col-lg-4 col-md-6 col-xs-12 rating-box' >";
                        html += "<div class='rating-box-content'>";
                            html += "<span class='col-xs-2'><img class='img-circle rating-box-content-img' src='img/r"+response.reviews[counter].review_from+".png'></span>";
                            html += "<div class='col-xs-10'>";
                                html += "<span class='col-xs-12'><strong>"+response.reviews[counter].customer_name + " " + response.reviews[counter].customer_last_name+"</strong>";
                                html += "<span style='float:right;'>"+date.getMonth()+"-"+date.getDate()+"-"+date.getFullYear()+"</span></span>";
                                html += '<div style="width: 350px; height:40px;">';
                                    html += '<div class="star-element star-void"></div><div class="star-element star-bar" style="width: '+ratingRatio+'px !important;"></div>';
                                    html += '<img class="star-element star-img" src="data:image/png;base64,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"/>';
                                html += '</div>';
                                html += "<span class='col-xs-12' style='margin-top: 5px;max-height: 56px;text-overflow: ellipsis;overflow : auto;'><i>"+response.reviews[counter].description+"</i></span>";
                            html += "</div>";
                        html += "</div>";
                    html += "</div>";

                }
                $('#TableData').html(html);
            },'json');
        };

        function getRatingRatio(rating, base){
            return (rating * base / 5)
        };

        function getReviewFrom(review){
            if (review == 0){
                return "Internal";
            }
            else if(review == 1){
                return "Yelp";
            }
            else{
                return "Google";
            }
        };

        function jsonpCallback(data){
            
        }
    </script>

</body>
</html>
