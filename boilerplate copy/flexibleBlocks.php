<?php

if( have_rows('flexible_content') ):

    while ( have_rows('flexible_content') ) : the_row();

        if( get_row_layout() == 'hero' ): ?>
            <?php include 'blocks/hero.php'; ?>
        <?php endif; 
        
        if( get_row_layout() == 'gallery' ): ?>
            <?php include 'blocks/gallery.php'; ?>
        <?php endif; 
       
        if( get_row_layout() == 'photo_section' ): ?>
            <?php include 'blocks/photo_section.php'; ?>
        <?php endif;

        if( get_row_layout() == 'paragraph_area' ): ?>
            <?php include 'blocks/paragraph_area.php'; ?>
        <?php endif;

        if( get_row_layout() == 'two_columns' ): ?>
            <?php include 'blocks/two_columns.php'; ?>
        <?php endif;

        if( get_row_layout() == 'photo_title' ): ?>
            <?php include 'blocks/photo_title.php'; ?>
        <?php endif;

        if( get_row_layout() == 'admission' ): ?>
            <?php include 'blocks/admission.php'; ?>
        <?php endif;

        if( get_row_layout() == 'services' ): ?>
            <?php include 'blocks/services.php'; ?>
        <?php endif;

        if( get_row_layout() == 'form_admission' ): ?>
            <?php include 'blocks/form_admission.php'; ?>
        <?php endif;

        if( get_row_layout() == 'photo_form' ): ?>
            <?php include 'blocks/photo_form.php'; ?>
        <?php endif;

        if( get_row_layout() == 'slider_link' ): ?>
            <?php include 'blocks/slider_link.php'; ?>
        <?php endif;

        if( get_row_layout() == 'team' ): ?>
            <?php include 'blocks/team.php'; ?>
        <?php endif;

        if( get_row_layout() == 'map_text' ): ?>
            <?php include 'blocks/map_text.php'; ?>
        <?php endif;

        if( get_row_layout() == 'legal' ): ?>
            <?php include 'blocks/legal.php'; ?>
        <?php endif;

        if( get_row_layout() == 'video' ): ?>
            <?php include 'blocks/video.php'; ?>
        <?php endif;

    endwhile;

endif;


?>