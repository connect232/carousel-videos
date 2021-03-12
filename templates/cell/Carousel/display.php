<div class="carousel-inner h-100">
    <div id="carousel" class="carousel slide carousel-fade d-none d-md-block" data-ride="carousel" data-pause="false" data-interval="<?= $firstVideoLength ?>">
        <ul class="carousel-indicators">
            <?php for ($i = 0; $i < $count; $i++) : ?>
                <li data-target="#carousel" data-slide-to="<?= $i ?>" <?= $i == 0 ? 'class="active"' : '' ?>></li>
            <?php endfor; ?>
        </ul>
        <div class="carousel-inner h-100">
            <?php foreach ($carouselVideos as $key => $item) : ?>
                <div class="carousel-item <?= $key == 0 ? 'active' : '' ?> h-100" data-interval="<?= $item->length ?>">
                    <div class="video-overlay centre-elements flex-column">
                        <div class="mw-video px-3">
                            <h2 class="mb-3"><?= $item->name; ?></h2>
                            <hr>
                            <?php if ($item->caption_paragraph) : ?>
                                <p><?= $item->caption_paragraph ?></p>
                            <?php endif; ?>
                            <a href="<?= $item->caption_url ?>" title="<?= $item->name ?>">
                                <span><?= $item->caption_url_title ?></span>
                            </a>
                        </div>
                    </div>
                    <video class="carousel-video" muted>
                        <source src="/videos/<?= $item->file ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            <?php endforeach; ?>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="container-fluid d-md-none">
    <div class="row">
        <?php foreach ($carouselVideos as $key => $item) : ?>
            <div class="col-12 mb-3 p-0">
                <div class="video-overlay d-flex flex-column justify-content-center align-items-center">
                    <div class="mw-video px-4 text-center">
                        <h2 class="mb-3"><?= $item->name; ?></h2>
                        <hr>
                        <?php if ($item->caption_paragraph) : ?>
                            <p class="d-none d-md-block"><?= $item->caption_paragraph ?></p>
                        <?php endif; ?>
                        <a href="<?= $item->caption_url ?>">
                            <span><?= $item->caption_url_title ?></span>
                        </a>
                    </div>
                </div>
                <?= $this->Html->image($item->mobile_image, ['class' => 'w-100 d-block d-md-none img-fluid', 'title' => $item->name, 'alt' => $item->name]); ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>
