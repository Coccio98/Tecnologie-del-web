//Get the button:
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if(mybutton !== null){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
}

window.topFunction= function(){topFunction()};

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}


const second = 1000,
    minute = second * 60,
    hour = minute * 60,
    day = hour * 24;

var path= window.location.pathname;

var slash= String("/");
var hotDeal= String("/hotDeal-shop");

if (path === slash || path.includes(hotDeal)) {
    var date = $('input[id^="hot-deal-date"]');
    var countDown = [];
    for(var i=0; i<date.length; i++){
        countDown.push(new Date(date[i].value).getTime());
    }

    let  x = setInterval(function () {
        let now = new Date().getTime();
        for(var i=0; i<date.length; i++){
            let distance = countDown[i] - now;

            if (distance > 0) {
            document.getElementById('days-'.concat(i.toString())).innerText = Math.floor(distance / (day)),
                document.getElementById('hours-'.concat(i.toString())).innerText = Math.floor((distance % (day)) / (hour)),
                document.getElementById('minutes-'.concat(i.toString())).innerText = Math.floor((distance % (hour)) / (minute)),
                document.getElementById('seconds-'.concat(i.toString())).innerText = Math.floor((distance % (minute)) / second);
            } else {
                document.getElementById('days-'.concat(i.toString())).innerText = 0,
                    document.getElementById('hours-'.concat(i.toString())).innerText = 0,
                    document.getElementById('minutes-'.concat(i.toString())).innerText = 0,
                    document.getElementById('seconds-'.concat(i.toString())).innerText = 0;
            }
        }
    }, second)
}


$(document).ready(function() {

    $('.review-section').on('click', '.reviews-pagination a', function(event) {
        event.preventDefault();
        var page =$(this).attr('href');
        $.get(page, function (data) {
            $('.review-section').html(data.review);
        })
    });

    $('.question-section').on('click', '.reviews-pagination a', function(event) {
        event.preventDefault();
        var page =$(this).attr('href');
        $.get(page, function (data) {
            $('.question-section').html(data.question);
        })
    });

    $('.store-section').on('click', '.store-pagination a', function(event) {
        event.preventDefault();
        var page =$(this).attr('href');
        $.get(page, function (data) {
            $('.store-section').html(data.store);
        })
    });

    $('#aside').on('click', '.category', function() {
        var subcategory = $('input[name ="subcategory"]');
        for(var i =0; i<subcategory.length; i++){
            subcategory[i].checked=false;
        }
        $('#myForm').submit();
    });

    $('#aside').on('click', '.subcategory', function() {
        $('#myForm').submit();
    });

    $('#store').on('change', '.input-select', function() {
        $('#myForm').submit();
    });
});

function sizeColor(){
    $.ajax({
        url : "/sizeColor?s=".concat($('#size-select option:selected').val()).concat('&p=').concat($('#product_id').val()),
        success : function (data) {
            $("#color-select").html(data);
            availability();
        }
    });
}

window.sizeColor=function(){sizeColor()};

function sizeColorWishlist(id){
    $.ajax({
        url : "/sizeColor?s=".concat($('#'.concat(id).concat(' option:selected')).val())
            .concat('&p=').concat($('#product_id_'.concat(id)).val()),
        success : function (data) {
            $("#color-select-".concat(id)).html(data);
            availabilityWishlist(id);
        }
    });

}

window.sizeColorWishlist=function(id){sizeColorWishlist(id)};

window.uncheckCategory=function(){uncheckCategory()};

function uncheckCategory() {
    var category = $('input[name ="category"]');
    for(var i =0; i<category.length; i++){
        category[i].checked=false;
    }
    $('#myForm').submit();
}

window.uncheckBrand=function(){uncheckBrand()};

function uncheckBrand() {
    var brand = $('input[name ="brand"]');
    for(var i =0; i<brand.length; i++){
        brand[i].checked=false;
    }
    $('#myForm').submit();
}

function availability(){
    $.ajax({
        url : "/availability?s=".concat($('#size-select option:selected').val()).concat('&c=').concat($('#color-select option:selected').val()).concat('&p=').concat($('#product_id').val()),
        success : function (data) {
            if (data) {
                $("#product-available").html('In Stock');
                $("#add-btn").prop('disabled', false);
            } else {
                $("#product-available").html('Out of Stock');
                $("#add-btn").prop('disabled', true);
            }
        }
    });
}

window.availability=function(){availability()};

function availabilityWishlist(id){
    var key = id.replace('color-select-','');
    $.ajax({
        url : "/availability?s=".concat($('#'.concat(key).concat(' option:selected')).val())
            .concat('&c=').concat($('#color-select-'.concat(key).concat(' option:selected')).val())
            .concat('&p=').concat($('#product_id_'.concat(key)).val()),
        success : function (data) {
            if (data) {
                $("#product-available-".concat(key)).html('In Stock');
                $("#add-btn-".concat(key)).prop('disabled', false);
            } else {
                $("#product-available-".concat(key)).html('Out of Stock');
                $("#add-btn-".concat(key)).prop('disabled', true);
            }
        }
    });
}

window.availabilityWishlist=function(id){availabilityWishlist(id)};
