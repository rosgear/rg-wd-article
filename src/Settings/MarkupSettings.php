<?php
/**
 * Виджет веб-приложения RosGear.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

namespace Rg\Widget\Article\Settings;

use Ge;
use Ge\Panel\Widget\MarkupSettingsWindow;

/**
 * Интерфейс окна настроек разметки виджета.
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Rg\Widget\Article\Settings
 * @since 1.0
 */
class MarkupSettings extends MarkupSettingsWindow
{
    /**
     * {@inheritdoc}
     */
    protected function init(): void
    {
        parent::init();

        /** @var \Ge\Http\Request $request */
        $request = Ge::$app->request;

        $this->width = 720;
        $this->form->autoScroll = true;
        $this->form->defaults = [
            'labelWidth' => 360,
            'labelAlign' => 'right',
            'anchor'     => '100%'
        ];
        $this->form->items = [
            [
                'xtype'      => 'hidden',
                'name'       => 'id',
                'value'      => $request->post('id')
            ],
            [
                'xtype'      => 'textfield',
                'fieldLabel' => '#Template markup',
                'tooltip'    => '#In the specified template, the widget parameters are changed. You can make changes manually by opening the template for editing.',
                'name'       => 'calledFrom',
                'value'      => $request->post('calledFrom'),
                'maxLength'  => 50,
                'width'      => '100%',
                'readOnly'   => true,
                'allowBlank' => true
            ],
            [
                'xtype'      => 'checkbox',
                'ui'         => 'switch',
                'fieldLabel' => '#Show header',
                'name'       => 'showHeader',
                'value'      => $request->post('showHeader', false),
            ],
            [
                'xtype'      => 'checkbox',
                'ui'         => 'switch',
                'fieldLabel' => '#Show announcement image',
                'name'       => 'showImage',
                'value'      => $request->post('showImage', false),
            ],
            [
                'xtype'      => 'checkbox',
                'ui'         => 'switch',
                'fieldLabel' => '#Show content (components) before article text',
                'name'       => 'showTextBefore',
                'value'      => $request->post('showTextBefore', false),
            ],
            [
                'xtype'      => 'checkbox',
                'ui'         => 'switch',
                'fieldLabel' => '#Show content (components) after the article text',
                'name'       => 'showTextAfter',
                'value'      => $request->post('showTextAfter', false),
            ],
            [
                'xtype'      => 'checkbox',
                'ui'         => 'switch',
                'fieldLabel' => '#Show publication date',
                'name'       => 'showPublishedDate',
                'value'      => $request->post('showPublishedDate', false),
            ],
        ];
    }
}