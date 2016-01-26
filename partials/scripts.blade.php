<script language="javascript">
    $(window).load(function() {


        /* ============================================
         *
         * Company info tab:
         * Website screenshot
         * Google maps
         * 
         * ========================================= */
        /*
         * Slugify
         */
        $('[name="title"]').slug({
            slug: 'title-slug', 
            hide: false
        });

        /*
         * Website screenshot
         */
        function makeScreenshot () {

            var url = $('#webshopUrl').val();

            if (url == '') {
                alert('Je moet eerst de webshop URL invullen om een screenshot te kunnen maken');
                return;
            }

            $('#screenshot-spinner').show();

            url = url.indexOf('http') < 0 ? 'http://' + url : url;

            if (url.length > 0) {

                $.ajax({
                    url: 'https://www.googleapis.com/pagespeedonline/v1/runPagespeed?url=' + url + '&screenshot=true',
                    context: this,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('#screenshot-spinner').hide();
                        data = data.screenshot.data.replace(/_/g, '/').replace(/-/g, '+');
                        $('#screenshot-img').attr('src', 'data:image/jpeg;base64,' + data);
                        $('#webshopScreenshot').val('data:image/jpeg;base64,' + data);
                    }
                });
            }
        }

        if ($('#webshopScreenshot').val() !== '') {
            $('#screenshot-img').attr('src', $('#webshopScreenshot').val());
        }

        $('#screenshot-refresh').click(function () {
            makeScreenshot();
            return false;
        });
        
        /*
         * Street view
         */
        
        function getLatLonFromAddress () {

            var address = $('input[name="companyAddress"]').val();

            var housenumber = $('input[name="companyAddress"]').val(); 
                housenumber = housenumber.replace(/\D/g, ''); 
                housenumber = parseInt(housenumber, 10); 
           
            var zipcode = $('input[name="companyZipcode"]').val();
            var city    = $('input[name="companyCity"]').val();

            if (address == '' || zipcode == '' || city == '') {
                alert('Je moet eerst het hele adres invullen voordat je een streetview kunt maken');
                return;
            }

            var Geocoder = new google.maps.Geocoder();

            Geocoder.geocode({'address':housenumber  + '' + address + '' + zipcode + ' ' + city}, function (results, status) {

                if (status == google.maps.GeocoderStatus.OK) {

                    var lat     = results[0].geometry.location.lat();
                    var lon     = results[0].geometry.location.lng();

                    $('#sv-lat').val(lat);
                    $('#sv-lon').val(lon);

                    makeStreetview();

                } else {
                    alert('Geocode was not successful for the following reason: ' + status);
                }
            });
        }

        function makeStreetview () {

            var lat     = parseFloat($('#sv-lat').val());
            var lon     = parseFloat($('#sv-lon').val());
            var heading = parseInt($('#sv-heading').val());
            var pitch   = parseInt($('#sv-pitch').val());

            var center          = new google.maps.LatLng(lat, lon);
            var povOptions      = {};

            povOptions.heading  = $('#sv-heading').val() !== '' ? heading : 0;
            povOptions.pitch    = $('#sv-pitch').val() !== '' ? pitch : 0;

            var svOptions = {
                position: center,
                pov: povOptions
            };

            var sv = new google.maps.StreetViewPanorama(document.getElementById('streetview-img'), svOptions);    
        }

        if ($('#sv-lat').val() !== '' && $('#sv-lon').val() !== '') {
            makeStreetview();
        }

        $('#streetview-refresh').click(function () {
            //makeStreetview();
            getLatLonFromAddress();
            return false;
        });

        $('#streetview-settings').click(function () {
            makeStreetview();
            //getLatLonFromAddress();
            return false;
        });

        /*
         * Editor
         */
        //$('#aboutUs').wysihtml5();
    
        /*      
        $('.slider').bootstrapSlider({
            formatter: function(value) {
                return 'Current value: ' + value;
            }
        });
        */      
        
        /* ============================================
         *
         * Don't know
         * 
         * ========================================= */
        $(document).keypressAction({
            actions: [
                { key: 'b', route: "<?= route('admin.webshop.webshop.index') ?>" }
            ]
        });
  


        /* ============================================
         *
         * Pretty checkboxes and radios
         * 
         * ========================================= */
        $('input[type="checkbox"].flat-blue, input[type="radio"].flat-blue').iCheck({
            checkboxClass: 'icheckbox_flat-blue',
            radioClass: 'iradio_flat-blue'
        });

        $('input[type="checkbox"]').on('ifChecked', function(){
            $(this).parent().find('input[type=hidden]').remove();
        });

        $('input[type="checkbox"]').on('ifUnchecked', function(){
            var name = $(this).attr('name'),
                input = '<input type="hidden" name="' + name + '" value="0" />';
            $(this).parent().append(input);
        });
        
        /* ============================================
         *
         * Slider
         * 
         * ========================================= */
        $('.slider').slider().on('slideStop', function(ev){
            //var newVal = $(this).data('slider').getValue();
            makeStreetview();
        });
        
        /* ============================================
         *
         * Dates?
         * 
         * ========================================= */
        var today = new Date();
        var dd = today.getDate(); 
        var mm = today.getMonth()+1;
        var yyyy = today.getFullYear();

        
        if(mm<10){
            mm = "0" + mm;
        }

        if(dd<10){
            dd = "0" + dd;
        }
        
        var output = yyyy+"-" + mm + "-" + dd ;
        
        var elemInput = document.getElementById("currentDate");
        elemInput.value = output;

        var elemInput = document.getElementById("latestMeasurement");
        elemInput.value = output;


      
    });

</script>