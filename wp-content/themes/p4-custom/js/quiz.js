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
        $('.panel-start-quiz').addClass("hidden");
        $(".navig").removeClass("hidden");
        $(".panelsWrapperOuter").removeClass("hidden");
        $(".panel:eq(0)").removeClass('hidden');
    });
    
    $(".prev-btn-quiz").click(function(){
        if(step==0){
            $('.panel-start-quiz').removeClass("hidden")
            $(".navig").addClass("hidden")
            $(".panelsWrapperOuter").addClass("hidden");
            $(".panel:eq(0)").addClass('hidden');

        }
        else{
            step-=1;
            $(".panel").addClass('hidden');
            $(".panel:eq("+step+")").removeClass('hidden');
            $(".stepNumber").html(step+1);
            $(".progressBarInner").css('width', ((step+1)*10) + '%' );
            $(".next-btn-quiz").removeClass('disabled');
        }
        
    });
    
    $(".next-btn-quiz").click(function(){
        if($(this).hasClass('disabled')) return;
        if( step < (totalSteps-1) ){
            step+=1;
            $(".panel").addClass('hidden');
            $(".panel:eq("+step+")").removeClass('hidden');
            $(".stepNumber").html(step+1);
            $(".progressBarInner").css('width', ((step+1)*10) + '%' );
            
            if($(".panel:eq("+step+") .options").find('.thebtn.selected').length == 0 ){
                $(".next-btn-quiz").addClass('disabled');
            }else{        
                $(".next-btn-quiz").removeClass('disabled');
            } 
            

            console.log(calculatePoints());
        }
    });


$(".thebtn").click(function(e){
    e.preventDefault();
    var stepClicked = $(this).closest('.panel').attr('step');
    $(this).toggleClass('selected');

    if($(this).hasClass('selected')){
        $(this).find('img.selected').removeClass('hidden')
        $(this).find('img.not-selected').addClass('hidden')
    }else{
        $(this).find('img.selected').addClass('hidden')
        $(this).find('img.not-selected').removeClass('hidden')
    }

    if($(this).closest('.options').find('.thebtn.selected').length == 0 ){
        $(".next-btn-quiz").addClass('disabled');
    }else{        
        $(".next-btn-quiz").removeClass('disabled');
    } 


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