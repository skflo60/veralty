<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Game Entity
 *
 * @property int $Id
 * @property string $FileImage
 * @property string $Description
 * @property string $UrlTrailer
 * @property bool $PublicVisibility
 */
class Game extends Entity
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
        'FileImage' => true,
        'Description' => true,
        'UrlTrailer' => true,
        'PublicVisibility' => true
    ];
}
