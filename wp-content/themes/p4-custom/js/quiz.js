jQuery(document).ready(function($) {

    $.getJSON('http://time.jsontest.com', function(data) {

        var text = `Date: ${data.date}<br>
                    Time: ${data.time}<br>
                    Unix time: ${data.milliseconds_since_epoch}`


        $(".mypanel").html(text);
    });

    var selected = [];


    var step = 0 ;
    var totalSteps = $(".panelsWrapper").children().length;


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
            $(".panel").addClass('hidden');
            $(".panel:eq("+step+")").removeClass('hidden');
        }

    });

    $(".next-btn-quiz").click(function(){
        if( step < (totalSteps-1) ){
            step+=1;
            $(".panel").addClass('hidden');
            $(".panel:eq("+step+")").removeClass('hidden');
            console.log(calculatePoints());
        }
    });


$(".thebtn").click(function(){
    var stepClicked = $(this).closest('.panel').attr('step');
    $(this).toggleClass('selected');
    var points = $(this).attr('points');
})

function calculatePoints(){
    var cnt = 0;
    $('.thebtn').each(function(i, obj) {
        if($(obj).hasClass('selected')) {
            var points = parseInt($(obj).attr('points'));
            cnt += points;
        }
    });
    return cnt;
}

});