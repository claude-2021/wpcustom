

jQuery(document).ready(function($) {



    $.getJSON('http://time.jsontest.com', function(data) {

        var text = `Date: ${data.date}<br>
                    Time: ${data.time}<br>
                    Unix time: ${data.milliseconds_since_epoch}`


        $(".mypanel").html(text);
    });



    var step = 0 ;



    $(".btn-startquiz").click(function(){
        $('.panel-start-quiz').addClass("hidden")
        $(".btn-startquiz").addClass("hidden")
        $(".navig").removeClass("hidden")
        $(".panel:eq(0)").removeClass('hidden');
    });
    
    $(".prev-btn-quiz").click(function(){
        if(step==0){
            $('.panel-start-quiz').removeClass("hidden")
            $(".btn-startquiz").removeClass("hidden")
            $(".navig").addClass("hidden")
            $(".panel:eq(0)").addClass('hidden');
        }
        else{
            step-=1;
        }

    });
    $(".next-btn-quiz").click(function(){
        if(validated){
            step+=1;
            $(".panel:eq("+step+")").removeClass('hidden');
        }
    });


function validated( answers , step ){
    return true
}

});