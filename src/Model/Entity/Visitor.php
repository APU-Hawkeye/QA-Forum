<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * Visitor Entity
 *
 * @property string $id
 * @property int $uin
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $password
 * @property int|null $mobile
 * @property \Cake\I18n\FrozenTime|null $disabled
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Answer[] $answers
 * @property \App\Model\Entity\Question[] $questions
 */
class Visitor extends Entity
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
        'uin' => true,
        'first_name' => true,
        'last_name' => true,
        'email' => true,
        'password' => true,
        'mobile' => true,
        'disabled' => true,
        'created' => true,
        'modified' => true,
        'answers' => true,
        'questions' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];

    protected function _setPassword($password)
    {
        return (new DefaultPasswordHasher())->hash($password);
    }
}
