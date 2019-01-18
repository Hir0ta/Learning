var datepicker, config;
config = {
    locale: 'hu-hu',
    format: 'yyyy-dd-mm',
    uiLibrary: 'bootstrap4', 
};
$(document).ready(function(){
    datepicker = $('#datepicker').datepicker(config);
        
    $('#ddlLanguage').on('change', function () {
        var date = document.getElementById('datepicker').value;
        console.log(date);
        var newLang = $(this).val();
        config.locale = newLang;
        datepicker.destroy();
        datepicker = $('#datepicker').datepicker(config);
        document.getElementById('datepicker').value = date;
    });

    $('#selectFormat').on('change', function () {
        var date = document.getElementById('datepicker').value;
        var newFormat = $(this).val();
        config.format = newFormat;
        datepicker.destroy();
        datepicker = $('#datepicker').datepicker(config);
        document.getElementById('datepicker').value = date;
        $("#datepicker").focus();
    });

    $('#selectColor').on('change', function () {
        var date = document.getElementById('datepicker').value; 
        var newColor = $(this).val();
        $(".gj-picker").removeClass("datepicker-blue");
        $(".gj-picker").removeClass("datepicker-red");
        $(".gj-picker").addClass(newColor);
        document.getElementById('datepicker').value = date;
    });
    /*Table*/
    $('tbody').scroll(function(e) { //detect a scroll event on the tbody
        /*
        Setting the thead left value to the negative valule of tbody.scrollLeft will make it track the movement
        of the tbody element. Setting an elements left value to that of the tbody.scrollLeft left makes it maintain 			it's relative position at the left of the table.    
        */
        $('thead').css("left", -$("tbody").scrollLeft()); //fix the thead relative to the body scrolling
        $('thead th:nth-child(1)').css("left", $("tbody").scrollLeft()); //fix the first cell of the header
        $('tbody td:nth-child(1)').css("left", $("tbody").scrollLeft()); //fix the first column of tdbody
    });
});