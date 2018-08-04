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

namespace Customize;

use Eccube\Common\EccubeNav;

class CustomizeNav implements EccubeNav
{
    public static function getNav()
    {
        return [
            'product' => [
                'children' => [
                    'hoge' => [
                        'name' => '商品管理の子（追加）',
                        'url' => 'admin_homepage',
                    ],
                ],
            ],
            'piyo' => [
                'name' => '1階層メニュー（追加）',
                'icon' => 'fa-cube',
                'children' => [
                    'piyopiyo1' => [
                        'name' => '2階層メニュー（子なし）',
                        'url' => 'admin_homepage',
                    ],
                    'piyopiyo2' => [
                        'name' => '2階層メニュー（子あり）',
                        'children' => [
                            'piyopiyopiyo1' => [
                                'name' => '3階層メニュー1',
                                'url' => 'admin_homepage',
                            ],
                            'piyopiyopiyo2' => [
                                'name' => '3階層メニュー2',
                                'url' => 'admin_homepage',
                            ],
                        ],
                    ],
                ],
            ],
        ];
    }
}
