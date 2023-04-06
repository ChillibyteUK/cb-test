<section class="title_content">
    <div class="container-xl py-5">
        <div class="row">
            <div class="col-md-4">
                <h1 class="h2"><?=get_field('title')?></h1>
                <?php
                if (have_rows('links')) {
                    echo '<div class="d-flex justify-content-center mb-4">';
                    while (have_rows('links')) {
                        the_row();
                        if (get_sub_field('page')) {
                            echo '<a href="' . get_sub_field('page') . '">';
                        }
                        ?>
                        <img src="<?=get_sub_field('icon')?>" alt="" width=90 height=80>
                        <?php
                        if (get_sub_field('page')) {
                            echo '</a>';
                        }
                    }
                    echo '</div>';
                }
                ?>
            </div>
            <div class="col-md-8">
                <?=get_field('content')?>
            </div>
        </div>
    </div>
</section>