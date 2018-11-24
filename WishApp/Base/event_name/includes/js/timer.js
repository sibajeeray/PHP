
var x = setInterval(function() {
    var now = new Date(); //TODAY
    var year = now.getFullYear()

    //*** IMPORTANT -> Write required Date on 3rd parameter and month in 2nd parameter(-1 always) IMPORTANT 
    var countDownDate = new Date(year, 9, 24, 00, 00, 00, 0);
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
    var event_duration = 1000*60*24*3  // days In MiliSecond
    if (distance > -(1000 * 60 * 60 * 24) && distance < 0) {
        clearInterval(x);
        document.getElementById("timer").innerHTML = "Durga Puja is Started";
    }
    if(distance > 0 || distance < -(1000 * 60 * 60 * 24) ){ 
        if(distance < -(1000 * 60 * 60 * 24) ){
        countDownDate.setFullYear(year+1); 
        var distance = countDownDate-now;
        }
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        document.getElementById("timer").innerHTML = days + "<i> Days,</i> " + hours + " <i>Hrs,</i> "
        + minutes + "<i> Min,</i> " + seconds + "<i> Sec</i> "; 
    }
}, 1000);
