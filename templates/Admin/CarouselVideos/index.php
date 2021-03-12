<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CarouselVideo[]|\Cake\Collection\CollectionInterface $carouselVideos
 */
?>
<div class="carouselVideos index content">
    <?= $this->Html->link(__('New Carousel Video'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Carousel Videos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('caption_paragraph') ?></th>
                    <th><?= $this->Paginator->sort('caption_url_title') ?></th>
                    <th><?= $this->Paginator->sort('caption_url') ?></th>
                    <th><?= $this->Paginator->sort('file') ?></th>
                    <th><?= $this->Paginator->sort('length') ?></th>
                    <th><?= $this->Paginator->sort('mobile_image') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($carouselVideos as $carouselVideo): ?>
                <tr>
                    <td><?= $this->Number->format($carouselVideo->id) ?></td>
                    <td><?= h($carouselVideo->name) ?></td>
                    <td><?= h($carouselVideo->caption_paragraph) ?></td>
                    <td><?= h($carouselVideo->caption_url_title) ?></td>
                    <td><?= h($carouselVideo->caption_url) ?></td>
                    <td><?= h($carouselVideo->file) ?></td>
                    <td><?= $this->Number->format($carouselVideo->length) ?></td>
                    <td><?= h($carouselVideo->mobile_image) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $carouselVideo->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $carouselVideo->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $carouselVideo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carouselVideo->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
