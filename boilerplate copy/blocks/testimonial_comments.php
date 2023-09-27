<?php
$comments_per_page = 4;
$page = get_query_var('paged') ? get_query_var('paged') : 1; // Get the current page number

$paragraph = get_sub_field('paragraph');
$comments = get_sub_field('comments'); // Assuming 'comments' is the name of your repeater field

if ($comments) {
    // Calculate the offset based on the current page number
    $offset = ($page - 1) * $comments_per_page;
    $comments_slice = array_slice($comments, $offset, $comments_per_page);

    if (!empty($comments_slice)) :
?>

<div class="testimonial-comments">
    <p class="testimonial-comments__paragraph"><?php echo $paragraph; ?></p>

    <div class="testimonial-comments__container">
        <?php 
            $count = 0;
            $total_comments = count($comments_slice);
            foreach ($comments_slice as $comment) :
                $count++; 
                $admission = $comment['admission_day'];
                $dismissal = $comment['dismissal_day'];
                $author = $comment['author'];
                $comment_text = $comment['comment'];
        ?>

        <div class="testimonial-comments__content <?php if ($count % $comments_per_page === 0) echo 'last-of-page'; ?> <?php if ($count === 1 && count($comments_slice) === 1) echo 'single-comment'; ?> <?php if ($total_comments === 2 && $count === 2) echo 'two-comments'; ?> <?php if ($total_comments === 3 && $count === 3) echo 'three-comments'; ?>">

            <p class="author"><strong><?php echo $author; ?></strong>, <?php echo $admission; ?> - <?php echo $dismissal; ?></p>
            <p class="comment"><?php echo $comment_text; ?></p>
            <div class="line"></div>

        </div>

        <?php endforeach; ?>

        <div class="pagination">
            <div class="pagination__container">
                <?php
                // Add pagination links if needed
                echo paginate_links(array(
                    'total' => ceil(count($comments) / $comments_per_page),
                    'current' => $page,
                ));
                ?>
            </div>
        </div>

    </div>

<?php
    endif;
}
?>
</div>
