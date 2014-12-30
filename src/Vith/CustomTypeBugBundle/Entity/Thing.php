<?php

namespace Vith\CustomTypeBugBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Thing
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Thing
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="magicNumber", type="negative")
     */
    private $magicNumber;
}
