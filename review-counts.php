// Displays the number of reviews on your website using shortcode [review_counts]
<?php
function listing_review_count() { 
$count = count( get_comments( array(
    'post_id' => get_the_ID(),
    'type' => 'job_listing'
) ) );
return $count; 
} 
add_shortcode('review_counts','listing_review_count'); 
