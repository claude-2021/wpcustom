<?php
/*
Template Name: Quiz Page

https://www.figma.com/file/waDWQvMBf42Q3yvxl8N223/Greenpeace?node-id=399%3A2206
*/
wp_head();
//$quiz = get_all_quiz();
//print_r($quiz->data);
$string = file_get_contents( get_template_directory_uri()."/quiz.json" );
$json = json_decode($string, true);
?>

<div class="panel-start-quiz flex-center-column">
    <div class="quiz_image">
        <img src="<?php echo get_template_directory_uri( )?>/img/find-action-for-you.png" />
    </div>
    <div class="quiz_title"><?php echo $post->post_title;?></div>
    <div class="quiz_content"><?php echo $post->post_content;?></div>
    <div class="btn-quiz btn-quiz-green pointer btn-startquiz"><span><?php pll_e('Start Quiz'); ?></span><img
            src="<?php echo get_template_directory_uri( )?>/img/arrow-right.png" /></div>
</div>

<div class="panelsWrapperOuter hidden">
    <div class="progressBar">
        <div class="progressBarInner"></div>
    </div>
    <div class="counterPer"><span class="stepNumber">1</span>/<span class="totalSteps">10</span></div>

    <div class="panelsWrapper">
        <?php $i=0; foreach($json as $item){ $i++;?>
        <div class="panel hidden" step="<?php echo $i;?>">
            <div class="question"><?php echo $item['post_title']?></div>
            <div class="instructions"><?php pll_e('Select at least one that applies to you to continue'); ?></div>
            <div class="options <?php echo trim($item['has_long_title']);?>">
                <?php foreach($item['answers'] as $answer){?>
                    
                    
               <label class="thebtn" points="<?php echo $answer['point']?>">
               <div class="thebtnInner">

                   <?php if( strlen($item['has_long_title']) > 4 ){?>
                    <img class="not-selected" src="<?php echo get_template_directory_uri( )?>/img/checkbox-not-selected.png" />
                    <img class="selected hidden" src="<?php echo get_template_directory_uri( )?>/img/checkbox-selected.png" />
                    <?php }?>
                    
                    <input name="<?php echo str_replace("-" , "_" , $item['slug']);?>" type="checkbox" class="hidecheck" value="<?php echo $answer['answer']?>">
                    <span><?php echo $answer['answer']?></span>
                </div>   
                </label>



                <?php }?>
            </div>
        </div>
        <?php }?>
    </div>
</div>

<div class="navig flex-raw-center hidden">
    <div class="btn-quiz prev-btn-quiz btn-quiz-white pointer"><span><?php pll_e('Back'); ?></span><img
            src="<?php echo get_template_directory_uri( )?>/img/arrow-left.png" /></div>
    <div class="btn-quiz next-btn-quiz btn-quiz-green pointer disabled"><span><?php pll_e('Next'); ?></span><img
            src="<?php echo get_template_directory_uri( )?>/img/arrow-right.png" /></div>
</div>