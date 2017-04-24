<?php get_header(); ?>

<div class="right_col" role="main">
    <?php get_template_part( 'template-parts/page-header' ); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                
                <?php get_template_part( 'template-parts/panel-header' ); ?>

                <div class="x_content">
                    <div id='calendar'></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>