<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@if($page == 'explore')
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATVGl-q2F19QoSxS-h1amZLEQ0hzTU3sQ"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="js/markerclusterer.js"></script>
<script src="js/map-icons.js"></script>
<script src="js/snazzy-info-window.min.js"></script>
<script>

    google.maps.event.addDomListener(window, 'load', init);
    var mapElement;
    var map;
    mapElement = document.getElementById('map');
    function mapResize() {
        mapElement.style.height = (window.innerHeight - $("#navContainer").outerHeight()) + "px";
        mapElement.style.marginTop = ($("#navContainer").outerHeight()) + "px";
        mapElement.style.width = $(window).width();
        /*mapElement.style.marginLeft =  $('#filterFromContainer').outerWidth() + "px";*/
        document.getElementById('mapFilter').style.height = mapElement.style.height;
    }
    var markers = [];
    var markerCluster;
    var largeInfoWindow

    function init() {


        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 3,
            minZoom: 3,
            maxZoom: 15,
            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(15, 30), // New York

            // How you would like to style the map.
            // This is where you would paste any style found on Snazzy Maps.
            styles: [
                {
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [{"color": "#444444"}]
                }, {
                    "featureType": "administrative.country",
                    "elementType": "labels.text",
                    "stylers": [{"saturation": "18"}, {"lightness": "-55"}, {"visibility": "simplified"}, {"color": "#4484a1"}]
                }, {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [{"color": "#f2f2f2"}, {"saturation": "28"}, {"lightness": "42"}, {"gamma": "2.01"}, {"weight": "1"}]
                }, {"featureType": "poi", "elementType": "all", "stylers": [{"visibility": "off"}]}, {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [{"saturation": -100}, {"lightness": 45}]
                }, {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [{"visibility": "simplified"}]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [{"visibility": "off"}]
                }, {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [{"visibility": "off"}]
                }, {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [{"color": "#aaced9"}, {"visibility": "on"}]
                }]
        };

        // Get the HTML DOM element that will contain your map
        // We are using a div with id="map" seen below in the <body>
        document.onload = mapResize();
        // Create the Google Map using our element and options defined above
        map = new google.maps.Map(mapElement, mapOptions);

        function populateInfoWindow(marker, infoWindow) {

            infoWindow = new SnazzyInfoWindow({
                marker:marker,
                position: 'top',
                offset: {
                    left: '0px'
                },
                content: "<div class='container' style=\"max-width: 350px; padding: 0;\">"+
                "<div class='col-sm-12' style=\"padding: 0; margin-bottom: 10px; height: 150px; overflow: hidden\"><img src='images/overview-of-the-restaurant.jpg' class='image-responstive' style='max-width: 100%; ' alt=''></div>"+
                "<div style='padding: 5px'>"+
                "<div class=\"col-sm-2\" style=\"padding: 0;\"><img src=\"assets\/images\/MKBHD.jpg\" alt=\"\" class=\"img-responsive img-circle\" style=\"max-width: 50px;\"><\/div>"+ "<div class=\"col-sm-10\" style=\"padding: 0;\">"+
                "<h2 style='margin: 0;'>"+ marker.title +"</h2>"+
                "<ul class='list-group'><li class='list-group-item' style='background: none; border: none;'><span class='fa fa-dollar'></span> 500K <p>earnings</p></li></ul>"+
                '<div class="postIcons">'+
                '<div class="col-sm-4 text-center">'+
                '<span class="fa fa-star-o"></span><p>153</p>'+
                '</div>'+
                '<div class="col-sm-4 text-center">'+
                '<span class="fa fa-share"></span><p>153</p>'+
                '</div>'+
                '<div class="col-sm-4 text-center">'+
                '<span class="fa fa-ellipsis-h"></span><p>153</p>'+
                '</div>'+
                "</div>"+
                "</div>"+
                "<a href='project.html' target='_blank'><button class='btn btn-primary btn-block'> Visit Now</button></a>"+
                "</div>",
                showCloseButton: true,
                closeOnMapClick: true,
                padding: '0',
                backgroundColor: 'rgba(0, 0, 0, 0.7)',
                border: false,
                borderRadius: '0px',
                shadow: false,
                fontColor: '#fff',
                fontSize: '15px'
            });
            console.log(marker.title)
            if (infoWindow.marker != marker) {
                infoWindow.marker = marker;
                infoWindow.open();
                infoWindow.addListener('closeclick', function () {
                    infoWindow.close();
                });
            }
        }

        $.ajax({
            type: 'GET',
            url: 'countries.json',
            dataType: 'json',
            success: function (data) {
                $.each(data, function(index, element) {

                    if(index > 220)
                        return;
                    if(element.region == 'Europe'){
                        var map_label = '<span class="fa fa-lightbulb-o"></span>'
                        var map_label_color = '#8ab71b'
                    }
                    if(element.region == 'Africa'){
                        var map_label = '<span class="fa fa-money"></span>'
                        var map_label_color = '#f3bc65'
                    }
                    if(element.region == 'Asia'){
                        var map_label = '<span class="fa fa-black-tie"></span>'
                        var map_label_color = '#009dcd'
                    }
                    var title = element.name.common
                    var location = {lat: element.latlng[0], lng: element.latlng[1]};
                    markers[index] = new Marker({
                        position: location,
                        title: title ,
                        region: element.region,
                        area: element.area,
                        icon: {
                            path: SQUARE_ROUNDED,
                            fillColor: map_label_color? map_label_color : '#d25743',
                            fillOpacity: 1,
                            strokeColor: '',
                            strokeWeight: 0,
                            scale:.4
                        },
                        map_icon_label: map_label ? map_label :'<span class="fa fa-rocket"></span>',
                        id: index
                    })
                    markers[index].addListener('click', function () {
                        populateInfoWindow(this, largeInfoWindow);
                    });

                });
                var options = {
                    imagePath: 'images/m',
                    ignoreHidden: true
                };

                markerCluster = new MarkerClusterer(map, markers, options);

            }
        });
        map.initialZoom = true;

    }

    filterMarkers = function (type, values) {
        if(type == 0) {
            for (i = 0; i < markers.length; i++) {
                marker = markers[i];
                // If is same category or category not picked
                if (marker.region == values || values.length === 0) {
                    marker.setVisible(true);
                }
                // Categories don't match
                else {
                    marker.setVisible(false);
                }
            }
        } else if (type == 1) {
            for (i = 0; i < markers.length; i++) {
                marker = markers[i];

                if(marker.area < values[1] && marker.area > values[0]){
                    marker.setVisible(true);
                }
                else {
                    marker.setVisible(false);
                }
            }

        }
        markerCluster.repaint();
    }
    window.onresize = function () {
        mapResize();
        init();
    }
    function animateFilterTitle() {
        if($('#filterTitle').css('borderRadius') == "50%"){
            $('#filterTitle').animate({
                borderRadius:"2",
                width: "310px"
            },"fast",function(){
                $('.filterForm').slideToggle();
                $('#filterTitle h5').fadeIn();
                $('#filterTitle h5').toggleClass('left');

            });
            $('#filterTitle span.fa').toggleClass('left')
        }else if ($('#filterTitle').css('borderRadius') == "2px") {
            $('.filterForm').slideToggle(function(){
                $('#filterTitle').animate({
                    borderRadius:"50%",
                    width: "50px"
                }, 'fast');
                $('#filterTitle span.fa').toggleClass('left');

            });
            $('#filterTitle h5').fadeOut();

        }
    }
    $('.filterForm').css({display: "none"});
    $('#filterTitle').click(animateFilterTitle);
    $(".filterForm input[type=checkbox]").click(function () {
        if($(this).attr("value") == 'startup'){
            $('.cbSection.startup').slideToggle();
        }
        if($(this).attr("value") == 'businessOwners'){
            $('.cbSection.businessOwners').slideToggle();
        }
        if($(this).attr("value") == 'employees'){
            $('.cbSection.employees').slideToggle();
        }
    });

    function kFormatter(num) {
        return num > 999 ? (num/1000).toFixed(1) + 'k' : num;
    }
    $( function() {
        $('#filterTitle h5').css('display', 'none');
        $('.cbSection').css('display', 'none');
        $( ".slider-range" ).slider({
            range: true,
            min: 1000,
            max: 500000,
            step: 1000,
            values: [ 0, 500000 ],
            slide: function( event, ui ) {
                $( ".amount" ).val( kFormatter(ui.values[ 0 ]) + " - " + kFormatter(ui.values[ 1 ]) );
            },
            change: function(event, ui) {
                filterMarkers(1, ui.values);
            }
        });
        $( ".amount" ).val($( ".slider-range" ).slider( "values", 0 ) +
                " - " + $( ".slider-range" ).slider( "values", 1 ) );
    } );
</script>
@elseif($page == 'home')
<script>

    document.getElementById("jumpotron").style.height = window.innerHeight + "px";
    function modal() {
        /* Get iframe src attribute value i.e. YouTube video url
         and store it in a variable */
        var url = $("#cartoonVideo").attr('src');

        /* Assign empty url value to the iframe src attribute when
         modal hide, which stop the video playing */
        $("#myModal").on('hide.bs.modal', function () {
            $("#cartoonVideo").attr('src', '');
        });

        $("#myModal").on('show.bs.modal', function () {
            $("#cartoonVideo").attr('src', url);
        });
        /* Assign the initially stored url back to the iframe src
         attribute when modal is displayed again */
        $("#myModal").on('show.bs.modal', function () {
            $("#cartoonVideo").attr('src', url);
        });
    }
    window.onload = function () {
        var bTab = document.getElementsByClassName("bTab");
        for (var i = 0; i < bTab.length; i++) {
            bTab[i].getElementsByTagName("p")[0].style.display = "none";
            bTab[i].onmouseover = function () {
                this.getElementsByTagName("p")[0].style.display = "block";
                this.getElementsByTagName("p")[0].top = "0";
            }
            bTab[i].onmouseout = function () {
                this.getElementsByTagName("p")[0].style.display = "none";
            }
        }
        modal();
    };
    $(".instruction").animate({"left":"50px"}, "slow");
</script>
@endif