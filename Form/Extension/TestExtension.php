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

namespace Customize\Form\Extension;

use Eccube\Form\Type\Front\ContactType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class TestExtension extends AbstractTypeExtension
{
    /**
     * Returns the name of the type being extended.
     *
     * @return string The name of the type being extended
     */
    public function getExtendedType()
    {
        return ContactType::class;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('hoge', ChoiceType::class, [
            'choices' => ['a' => true, 'b' => true],
            'multiple' => true,
            'expanded' => true,
            'eccube_form_options' => [
                'auto_render' => true,
                'style_class' => 'ec-checkbox',
            ],
        ]);
    }
}
