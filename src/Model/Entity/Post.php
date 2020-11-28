<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Post Entity
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $url
 * @property $photo
 * @property string $photo_dir
 * @property int $photo_size
 * @property int $photo_type
 * @property int $created_by
 * @property int $category_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Tag[] $tags
 */
class Post extends Entity
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
        'title' => true,
        'content' => true,
        'url' => true,
        'photo' => true,
        'photo_dir' => true,
        'photo_size' => true,
        'photo_type' => true,
        'created_by' => true,
        'category_id' => true,
        'created' => true,
        'modified' => true,
        'category' => true,
        'tags' => true
    ];
}
