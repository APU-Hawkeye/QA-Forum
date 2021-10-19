<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Question Entity
 *
 * @property string $id
 * @property string $category_id
 * @property string $visitor_id
 * @property string $title
 * @property string|null $description
 * @property \Cake\I18n\FrozenTime|null $disabled
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Visitor $visitor
 * @property \App\Model\Entity\Answer[] $answers
 */
class Question extends Entity
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
        'category_id' => true,
        'visitor_id' => true,
        'title' => true,
        'description' => true,
        'disabled' => true,
        'created' => true,
        'modified' => true,
        'category' => true,
        'visitor' => true,
        'answers' => true,
    ];
}
