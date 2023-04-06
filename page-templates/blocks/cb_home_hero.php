<section class="home_hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <?php
        $c = count(get_field('slides'));
        $active = 'active';
        if ($c > 1) {
            ?>
        <div class="carousel-indicators">
            <?php
            for ($i = 0; $i < $c; $i++) {
                ?>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="<?=$i?>" class="<?=$active?>"></button>
                <?php
            }
            ?>
        </div>
            <?php
            $active = '';
        }
        ?>
        <div class="carousel-inner">
            <?php
            $active = 'active';
            while (have_rows('slides')) {
                the_row();
                $h = 1;
                ?>
            <div class="carousel-item <?=$active?>">
                <img src="<?=wp_get_attachment_image_url(get_sub_field('background'),'full')?>" class="d-block w-100" alt="<?=get_sub_field('title')?>">
                <div class="carousel__detail">
                    <div class="container-xl w-75">
                        <div class="row">
                            <div class="col-md-4">
                                <?php
                                echo '<div class="h1">' . get_sub_field('title') . '</div>';
                                ?>
                            </div>
                            <div class="col-md-8">
                                <p><?=get_sub_field('intro')?></p>
                                <a href="<?=get_sub_field('page')?>" class="btn btn-secondary me-2">Find out more</a>
                                <a href="/contact-us/" class="btn btn-primary">Request a quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <?php
                $active = '';
                $h = 2;
            }
            ?>
        </div>
    </div>
</section>