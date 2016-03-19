$(function(){
    var options = {
        componentRestrictions: {country: 'fr'}
    };
    var input = document.getElementById('departure');
    autocomplete = new google.maps.places.Autocomplete(input, options);


    /******** DateTimePicker *********/
    $.datepicker.setDefaults($.datepicker.regional['fr']);
    $.timepicker.setDefaults($.datepicker.regional['fr']);
    $('.datepicker').datetimepicker({
        addSliderAccess: true,
        sliderAccessArgs: { touchonly: false },
        dateFormat: "dd/mm/yy",
        minDate: 0
    });
});