<?php
declare(strict_types=1);

namespace CarouselVideos\Model\Entity;

use Cake\ORM\Entity;

/**
 * CarouselVideo Entity
 *
 * @property int $id
 * @property string $name
 * @property string|null $caption_paragraph
 * @property string $caption_url_title
 * @property string $caption_url
 * @property string $file
 * @property int $length
 * @property string $mobile_image
 */
class CarouselVideo extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'caption_paragraph' => true,
        'caption_url_title' => true,
        'caption_url' => true,
        'file' => true,
        'length' => true,
        'mobile_image' => true,
    ];
}
