<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Answer Entity
 *
 * @property string $id
 * @property string $visitor_id
 * @property string $question_id
 * @property string $answer
 * @property string|null $description
 * @property \Cake\I18n\FrozenTime|null $disabled
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Visitor $visitor
 * @property \App\Model\Entity\Question $question
 */
class Answer extends Entity
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
        'visitor_id' => true,
        'question_id' => true,
        'answer' => true,
        'description' => true,
        'disabled' => true,
        'created' => true,
        'modified' => true,
        'visitor' => true,
        'question' => true,
    ];
}
