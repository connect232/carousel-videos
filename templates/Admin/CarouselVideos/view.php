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
            <?= $this->Html->link(__('Edit Carousel Video'), ['action' => 'edit', $carouselVideo->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Carousel Video'), ['action' => 'delete', $carouselVideo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carouselVideo->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Carousel Videos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Carousel Video'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="carouselVideos view content">
            <h3><?= h($carouselVideo->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($carouselVideo->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Caption Paragraph') ?></th>
                    <td><?= h($carouselVideo->caption_paragraph) ?></td>
                </tr>
                <tr>
                    <th><?= __('Caption Url Title') ?></th>
                    <td><?= h($carouselVideo->caption_url_title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Caption Url') ?></th>
                    <td><?= h($carouselVideo->caption_url) ?></td>
                </tr>
                <tr>
                    <th><?= __('File') ?></th>
                    <td><?= h($carouselVideo->file) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mobile Image') ?></th>
                    <td><?= h($carouselVideo->mobile_image) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($carouselVideo->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Length') ?></th>
                    <td><?= $this->Number->format($carouselVideo->length) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
