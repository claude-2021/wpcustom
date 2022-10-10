<?php
/*
Template Name: Quiz Page
*/
wp_head();

$quiz = get_all_quiz();

print_r($quiz->data);
?>
<div class="panel-start-quiz flex-center-column">
    <div>
        <img src="<?php echo get_template_directory_uri( )?>/img/find-action-for-you.png" />
    </div>
    <div><?php echo $post->post_title;?></div>
    <div><?php echo $post->post_content;?></div>
    <div class="btn-quiz btn-quiz-green pointer btn-startquiz">Start Quiz</div>
</div>

<div class="panel hidden">
    <div class="question">Where does the waste from your home go?</div>
    <div>Select at least one that applies to you to continue</div>
    <ul class="options">
        <li points="4">Recycling Facility</li>
        <li points="3">Landfill</li>
        <li points="4">Zero waste, I compost and produce minimal nonorganic waste</li>
        <li points="1">I don't know</li>
        <li points="1">None of these</li>
    </ul>
</div>
<div class="panel hidden">
    <div class="question">How aware are you of your carbon footprint?</div>
    <div>Select at least one that applies to you to continue</div>
    <ul class="options">
        <li points="4">I have clear understanding of the impact of the products I purchase on the environment and climate</li>
        <li points="3">I understand the basic principles around the impact of purchasing imported products and those manufactured without/minimal consideration of impacts</li>
        <li points="1">I am unsure how my choices impact the climate</li>
        <li points="1">I am not aware that my choices have any impact on the climate and environment</li>
    </ul>
</div>
<div class="panel hidden">
    <div class="question">Are you aware of the amount of energy 
utilized to bring water to your home?</div>
    <div>Select at least one that applies to you to continue</div>
    <ul class="options">
        <li points="2">Water to my home is pumped from a river/lake/groundwater nearby through an efficient national grid</li>
        <li points="1">Water to my home is pumped more than 100km from its source using fossil fuels</li>
        <li points="2">Water to my home is pumped from a local well using fossil fuels</li>
        <li points="4">Water to my home is pumped from a local well using renewable energy</li>
        <li points="3">I don’t have running water to my home and depend on trucks that utilise fossil fuels</li>
    </ul>
</div>


<div class="navig flex-raw-center hidden">
    <div class="prev-btn-quiz btn-quiz btn-quiz-white pointer">Back</div>
    <div class="next-btn-quiz btn-quiz btn-quiz-green pointer">Next</div>
</div>