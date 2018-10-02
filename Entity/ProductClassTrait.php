<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Customize\Entity;

use Eccube\Annotation\EntityExtension;
use Eccube\Annotation\FormAppend;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @EntityExtension("Eccube\Entity\ProductClass")
 */
trait ProductClassTrait
{
    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\NotBlank()
     * @FormAppend(
     *  auto_render=true,
     *  options={
     *     "label": "test.admin.product_class.clm",
     *  }),
     */
    private $clm;

    /**
     * @return mixed
     */
    public function getClm()
    {
        return $this->clm;
    }

    /**
     * @param mixed $clm
     *
     * @return ProductClassTrait
     */
    public function setClm($clm)
    {
        $this->clm = $clm;

        return $this;
    }
}
