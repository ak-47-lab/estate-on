@extends('layouts.dashboard')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 dflx">
                    <h1 class="m-0">Show Property Details</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="add_pprty space">
        <div class="container-fluid">
        <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.id') }}
                        </th>
                        <td>
                            {{ $data['property']->id }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            Name
                        </th>
                        <td>
                            {{ $data['property']->name }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            Type
                        </th>
                        <td>
                            {{ ucfirst($data['property']->type) }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.description') }}
                        </th>
                        <td>
                            {{ $data['property']->description }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.address') }}
                        </th>
                        <td>
                            {{ $data['property']->address }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            Location
                        </th>
                        <td>
                            {{ $data['property']->location }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            Furnished
                        </th>
                        <td>
                            {{ ucfirst($data['property']->property_details['furnished']) }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.featured') }}
                        </th>
                        <td>
                            {{ $data['property']->featured==1 ? 'true': 'false' }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.hot') }}
                        </th>
                        <td>
                            {{ $data['property']->hot == 1 ? 'true': 'false' }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.amenities') }}
                        </th>
                        <td>
                            @foreach($data['property']->amenities as $amenity)
                            <span class="badge badge-info">{{$amenity['amenity_data']['name'] ?? ''}}</span>
                            @endforeach
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.vastu') }}
                        </th>
                        <td>
                            <span class="badge badge-info">{{ $data['property']->vastu['vastu_data']['name']  ?? ''}}</span>
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.preferences') }}
                        </th>
                        <td>
                            @foreach($data['property']->preferences as $preference)
                            <span class="badge badge-info">{{ $preference['preferences_data']['name']  ?? ''}}</span>
                            @endforeach
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.property_type') }}
                        </th>
                        <td>
                            {{ $data['property']->property_type['type_data']['name']  ?? '' }}
                        </td>
                    </tr>

                    <!-- <tr>
                        <th>
                            {{ trans('cruds.property.fields.bedroom') }}
                        </th>
                        <td>
                            {{ $data['property']['property_details']->bedroom }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.bathroom') }}
                        </th>
                        <td>
                            {{ $data['property']['property_details']->bathroom }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.balcony') }}
                        </th>
                        <td>
                            {{ $data['property']['property_details']->balcony }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.kitchen') }}
                        </th>
                        <td>
                            {{ $data['property']['property_details']->kitchen }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.living_room') }}
                        </th>
                        <td>
                            {{ $data['property']['property_details']->living_room == 1 ? 'true' :'false' }}
                        </td>
                    </tr> -->

                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.furnished') }}
                        </th>
                        <td>
                            @switch($data['property']['property_details']->furnished)
                            @case('unfurnished')
                            <span> Un frinished</span>
                            @break

                            @case('furnished')
                            <span>Furnished</span>
                            @break
                            @case('semi_furnished')
                            <span>Semi Furnished</span>
                            @break
                            @endswitch
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.price') }}
                        </th>
                        <td>
                            {{ $data['property']['property_details']->price }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            Size
                        </th>
                        <td>
                            {{ $data['property']['property_details']->size }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            Length
                        </th>
                        <td>
                            {{ $data['property']['property_details']->length }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            Width
                        </th>
                        <td>
                            {{ $data['property']['property_details']->length }}
                        </td>
                    </tr>
                    
                    <tr>
                        <th>
                        Property Category
                        </th>
                        <td>
                        {{ $data['property']['property_details']->property_category }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                        Property Feature
                        </th>
                        <td>
                        {{ $data['property']['property_details']->property_feature }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                        Govt Tax Include
                        </th>
                        <td>
                        @if($data['property']['property_details']->govt_tax_include == 1)
                            Included                            
                        @elseif($data['property']['property_details']->govt_tax_include == 0)
                            Not included                            
                        @endif
                        </td>
                    </tr>

                    <tr>
                        <th>
                        Extra Notes
                        </th>
                        <td>
                        {{$data['property']['property_details']->extra_notes}}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.likes') }}
                        </th>
                        <td>
                            {{ $data['property']->likes_count }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection
@section('scripts')
@parent

<!-- <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script> -->

<script type="text/javascript" async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxCC1NFlOCM9k9pI4paC8vhJytSY4t054&libraries=places&callback=initMap"></script>
        
        
<script type="text/javascript">

var latVal = parseFloat({{$data['property']->lat}});
var lngVal = parseFloat({{$data['property']->lng}});

    function initMap() {
      
        var map = new google.maps.Map(document.getElementById('address-map'), {
            zoom: 10,
          //center:{lat: 20.5937, lng: 78.9629},
          center:{lat: latVal, lng: lngVal},
            
        });

        var markersArray = [];

        var searchBox = new google.maps.places.SearchBox(document.getElementById('address-input'));
//  map.controls[google.maps.ControlPosition.TOP_CENTER].push(document.getElementById('location'));

  google.maps.event.addListener(searchBox, 'places_changed', function() {
      searchBox.set('address-map', null);


        var places = searchBox.getPlaces();
        console.log(places)

        

        var bounds = new google.maps.LatLngBounds();
        var i, place;
        for (i = 0; place = places[i]; i++) {
          (function(place) {

            $('#address-latitude').val(place.geometry.location.lat())
            $('#address-longitude').val(place.geometry.location.lng())

            // var marker = new google.maps.Marker({

            //   position: place.geometry.location
            // });
            // marker.bindTo('map', searchBox, 'map');
            // google.maps.event.addListener(marker, 'map_changed', function() {
            //   if (!this.getMap()) {
            //     this.unbindAll();
            //   }
            // });
            bounds.extend(place.geometry.location);


          }(place));

        }


        map.fitBounds(bounds);
        searchBox.set('address-map', map);
        map.setZoom(Math.min(map.getZoom(),12));

      });

      var myLatlng = new google.maps.LatLng(parseFloat(latVal),parseFloat(lngVal));

      var marker=new google.maps.Marker({
          position:myLatlng,
          //icon:'images/pin.png',
          //url: 'http://www.google.com/',
          animation:google.maps.Animation.DROP
      });
      marker.setMap(map);
      markersArray.push(marker);


      google.maps.event.addListener(map, "click", function (e) {

        //lat and lng is available in e object                
        var latLng = e.latLng;
        console.log(latLng)                

        $('#address-latitude').val(latLng.lat())
        $('#address-longitude').val(latLng.lng())

        var marker=new google.maps.Marker({
            position:latLng,
            //icon:'images/pin.png',
            //url: 'http://www.google.com/',
            animation:google.maps.Animation.DROP
        });
        marker.setMap(map);
        clearOverlays();
        markersArray.push(marker);


        });

        function clearOverlays() {
        for (var i = 0; i < markersArray.length; i++ ) {
        markersArray[i].setMap(null);
            }
        } 


    

    }


    // google.maps.event.addListener(map, "click", function (e) {

    //     //lat and lng is available in e object
    //     // console.log(e)
    //     // console.log(e.latLng.lat())
    //     // console.log(e.latLng.lng())
    //     var latLng = e.latLng;
    //     //alert(latLng)
    //     //$('body').find('#location').val(latLng)
    //     $('body').find('#address-latitude').val(e.latLng.lat())
    //     $('body').find('#address-longitude').val(e.latLng.lng())


    // });

</script>

<script src="/js/mapInput.js"></script>
<script>
    $('input[type=radio][name=type]').change(function() {
        if (this.value == 'rent') {
            console.log('Logic for entring rent duration (create and show input div)');
        } else if (this.value == 'sale') {
            console.log('Logic for removing rent duration (If created remove rent div)');
        }
    });

    $('#length').keyup(function() {        
        var width = $('#width').val();
        var length = $(this).val();
        var size = parseInt(width) * parseInt(length);
        $('#size').val(size);
    });

    $('#width').keyup(function() {        
        var width = $(this).val();
        var length = $('#length').val();
        var size = parseInt(width) * parseInt(length);
        $('#size').val(size);
    });

    $('#property_category').change(function() {   
        showPropertyType();        
    });
    showPropertyType();    
    function showPropertyType(){
        var val = $('#property_category').val();
        if(val == "commercial") {
            $('#property-type-commercial').removeClass('d-none')
            $('#property-type-residential').addClass('d-none')
        }
        if(val == "residential") {
            $('#property-type-residential').removeClass('d-none')
            $('#property-type-commercial').addClass('d-none')
        }
    }

    $('body').on('keydown','.only-numbers',function(e){
        allow_numbers_only(e)
    })

    function allow_numbers_only(e){
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
            // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
            // Allow: Ctrl+C
            (e.keyCode == 67 && e.ctrlKey === true) ||
            // Allow: Ctrl+X
            (e.keyCode == 88 && e.ctrlKey === true) ||
            // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
        }
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    }
        
</script>
@endsection