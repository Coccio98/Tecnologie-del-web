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

if (path === slash) {
    let countDown = new Date('Apr 30, 2020 17:10:00').getTime(),
        x = setInterval(function () {

            let now = new Date().getTime(),
                distance = countDown - now;

            document.getElementById('days').innerText = Math.floor(distance / (day)),
                document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
                document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
                document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);

            //do something later when date is reached
            if (distance < 0) {
                document.getElementById('days').innerText = 0,
                    document.getElementById('hours').innerText = 0,
                    document.getElementById('minutes').innerText = 0,
                    document.getElementById('seconds').innerText = 0;
              clearInterval(x);
            }

        }, second)
}


$(document).ready(function() {

    $('.pippo').on('click', '.reviews-pagination a', function(event) {
        event.preventDefault();
        var page =$(this).attr('href');
        $.get(page, function (data) {
            $('.pippo').html(data.review);
        })
    });

});

