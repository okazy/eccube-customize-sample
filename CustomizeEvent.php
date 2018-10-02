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

use Eccube\Event\TemplateEvent;
use Eccube\Repository\BaseInfoRepository;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * イベントでtwigに変数を渡すサンプル
 * `Shopping/index.twig` 内で `{{ Hogehoge }}` でBaseInfoが参照が可能となる。
 *
 * Class CustomizeEvent
 */
class CustomizeEvent implements EventSubscriberInterface
{
    /**
     * @var BaseInfoRepository
     */
    private $baseInfoRepository; // クラス変数を定義

    // コンストラクタインジェクションでBaseInfoRepositoryを取得
    public function __construct(BaseInfoRepository $baseInfoRepository)
    {
        $this->baseInfoRepository = $baseInfoRepository; // クラス変数にセット
    }

    /**
     * リッスンしたいサブスクライバのイベント名の配列を返します。
     * 配列のキーはイベント名、値は以下のどれかをしてします。
     * - 呼び出すメソッド名
     * - 呼び出すメソッド名と優先度の配列
     * - 呼び出すメソッド名と優先度の配列の配列
     * 優先度を省略した場合は0
     *
     * 例：
     * - array('eventName' => 'methodName')
     * - array('eventName' => array('methodName', $priority))
     * - array('eventName' => array(array('methodName1', $priority), array('methodName2')))
     *
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            'Shopping/index.twig' => 'onShoppingIndexTwig', // イベントを追加
        ];
    }

    public function onShoppingIndexTwig(TemplateEvent $event)
    {
        $BaseInfo = $this->baseInfoRepository->find(1);
        $event->setParameter('Hogehoge', $BaseInfo); // パラメータに値をセット
    }
}
