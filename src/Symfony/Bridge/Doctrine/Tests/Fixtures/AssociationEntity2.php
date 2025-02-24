<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bridge\Doctrine\Tests\Fixtures;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
#[ORM\Entity]
class AssociationEntity2
{
    /**
     * @var int
     * @ORM\Id @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    #[ORM\Id, ORM\GeneratedValue, ORM\Column(type: 'integer')]
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="SingleIntIdNoToStringEntity")
     *
     * @var \Symfony\Bridge\Doctrine\Tests\Fixtures\SingleIntIdNoToStringEntity
     */
    #[ORM\ManyToOne(targetEntity: SingleIntIdNoToStringEntity::class)]
    public $single;

    /**
     * @ORM\ManyToOne(targetEntity="CompositeIntIdEntity")
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="composite_id1", referencedColumnName="id1"),
     *  @ORM\JoinColumn(name="composite_id2", referencedColumnName="id2")
     * })
     *
     * @var \Symfony\Bridge\Doctrine\Tests\Fixtures\CompositeIntIdEntity
     */
    #[ORM\ManyToOne(targetEntity: CompositeIntIdEntity::class)]
    #[ORM\JoinColumn(name: 'composite_id1', referencedColumnName: 'id1')]
    #[ORM\JoinColumn(name: 'composite_id2', referencedColumnName: 'id2')]
    public $composite;
}
