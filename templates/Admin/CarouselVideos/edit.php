<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CarouselVideo $carouselVideo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $carouselVideo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $carouselVideo->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Carousel Videos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="carouselVideos form content">
            <?= $this->Form->create($carouselVideo) ?>
            <fieldset>
                <legend><?= __('Edit Carousel Video') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('caption_paragraph');
                    echo $this->Form->control('caption_url_title');
                    echo $this->Form->control('caption_url');
                    echo $this->Form->control('file');
                    echo $this->Form->control('length');
                    echo $this->Form->control('mobile_image');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
