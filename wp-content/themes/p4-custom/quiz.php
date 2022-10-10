<?php
/*
Template Name: Quiz Page
*/
wp_head();
//$quiz = get_all_quiz();
//print_r($quiz->data);
$string = file_get_contents( get_template_directory_uri()."/quiz.json" );
$json = json_decode($string, true);
?>
<div class="panel-start-quiz flex-center-column">
    <div>
        <img src="<?php echo get_template_directory_uri( )?>/img/find-action-for-you.png" />
    </div>
    <div><?php echo $post->post_title;?></div>
    <div><?php echo $post->post_content;?></div>
    <div class="btn-quiz btn-quiz-green pointer btn-startquiz">Start Quiz</div>
</div>
<div class="panelsWrapper">
    <?php $i=0; foreach($json as $item){ $i++;?>
        <div class="panel hidden" step="<?php echo $i;?>">
            <div class="question"><?php echo $item['post_title']?></div>
            <div>Select at least one that applies to you to continue</div>
            <ul class="options">
                <?php foreach($item['answers'] as $answer){?>
                    <li class="thebtn" points="<?php echo $answer['point']?>"><?php echo $answer['answer']?></li>
                    <?php }?>
                </ul>
            </div>
            <?php }?>
        </div>

<div class="navig flex-raw-center hidden">
    <div class="prev-btn-quiz btn-quiz btn-quiz-white pointer">Back</div>
    <div class="next-btn-quiz btn-quiz btn-quiz-green pointer">Next</div>
</div>