<?php

namespace App\Widgets;

use Uasoft\Badaso\Interfaces\WidgetInterface;

class xwidget implements WidgetInterface
{
    /**
     * Set permission for widget
     * set null to allow all role
     * multiple permission allowed, separate by comma.
     */
    public function getPermissions()
    {
        return 'browse_permissions';
    }

    public function run($params = null)
    {
        return [
            // 'label' => 'Label xx', /** Fill in the label as desired **/
            // 'value' => 20,       /** Fill in the value as desired **/
            // 'icon' => 'lock', /** Fill in the icon as desired from material icon **/
            // 'max' => 70, /** Fill in the value as desired (default value is 100) **/
            
            'label' => 'Label xx',
            'icon' => 'lock',
            'value' => 20,
            'prefix_value' => '',
            'delimiter' => '.',
        ];
    }
}