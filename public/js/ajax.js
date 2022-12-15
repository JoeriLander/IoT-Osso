$(".button").on("click", function() {
    var button = $(this).attr("id")
    var buttonVal = $(this).val();
    $.ajax({
        type: "POST",
        url: "ajax.php",
        data: button + "=" + buttonVal
    }).success(function(data) {
        // $("#" + button).val() === "true" ? $("#" + button).val("false") : $("#" + button).val("true");
        $.get("ajax.php", function(data, status){
            var jsonData = JSON.parse(data);
            if(button === "btn1"){
                $('#' + button).val((jsonData.led1));
            }else if(button === "btn2"){
                $('#' + button).val((jsonData.led2));
            }else if(button === "btn3"){
                $('#' + button).val((jsonData.led3));
            }
        });
    });
});

$(".slide").on("input", function(){
    var slider = $(this);
    var sliderID = $(this).attr("id");
    var sliderValue = slider.val();
    $.ajax({
        type: "POST",
        url: "ajax.php",
        data: sliderID + "=" + sliderValue
    }).success(function() {
        $.get("ajax.php", function(data, status){
            var jsonData = JSON.parse(data);
            // slider.val(jsonData.slider1);
        });
    });
});

$("#colorPickerBody").on("change", function(){
    const newVal = document.getElementById("colorPickerBody").value;
    document.body.style.background = newVal;
    console.log(document.body.style.background);
});

$("#colorPickerHeaderFooter").on("change", function() {
    document.getElementById("header").style.background = document.getElementById("colorPickerHeaderFooter").value;
    document.getElementById("footer").style.background = document.getElementById("colorPickerHeaderFooter").value;
});

function toggleMenu() {
    if(document.getElementById("box").style.visibility === "hidden"){
        document.getElementById("box").style.visibility = "visible";
        console.log("hallo");
    } else {
        document.getElementById("box").style.visibility = "hidden";
    }
}


