<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Session prefix name
    |--------------------------------------------------------------------------
    |
    | This will be used to prefix flash messages.
    |
    */
    'session_prefix'                        => 'notifications_',

    /*
    |--------------------------------------------------------------------------
    | Default container name
    |--------------------------------------------------------------------------
    |
    | This name will be used to name default container (when calling it with null value).
    |
    */
    'default_container'                     => 'default',

    /*
    |--------------------------------------------------------------------------
    | Default message format
    |--------------------------------------------------------------------------
    |
    | This format will be used when no format is specified.
    | Specify default format for each container.
    | Available place holders:
    |
    | :type - type of message (error, warning, info, success).
    | :message - message text.
    |
    */
    'default_format'                        => array(

        //'default'               => '<div class="alert alert-:type">:message</div>',
        'default'                 => '<div id="gritter-notice-wrapper"><div id="gritter-item-3" class="gritter-item-wrapper danger hover" style="" role="alert"><div class="gritter-top"></div><div class="gritter-item"><a class="gritter-close" href="#" tabindex="1" style="display: block;"></a><div class="gritter-without-image"><span class="gritter-title">错误提示</span><p>:message</p></div><div style="clear:both"></div></div><div class="gritter-bottom"></div></div></div>'

    ),

    /*
    |--------------------------------------------------------------------------
    | Default message formats for types and container types
    |--------------------------------------------------------------------------
    |
    | These formats can override default format for each type of message (error, warning, info, success).
    | You can set formats for each container by using this syntax:
    |
    | 'default_formats'         => array(
    |       'myContainer'   => array(
    |           'info'  => ':key - :message'
    |       )
    |   )
    |
    | Available place holders:
    |
    | :type - type of message (error, warning, info, success).
    | :message - message text.
    |
    */
    'default_formats'                       => array(

        'default'               => array(
            'error'   => '<div id="gritter-notice-wrapper"><div id="gritter-item-3" class="gritter-item-wrapper danger hover" style="" role="alert"><div class="gritter-top"></div><div class="gritter-item"><a class="gritter-close" href="#" tabindex="1" style="display: block;"></a><div class="gritter-without-image"><span class="gritter-title">错误提示</span><p>:message</p></div><div style="clear:both"></div></div><div class="gritter-bottom"></div></div></div>',
            'success' => '<div id="gritter-notice-wrapper"><div id="gritter-item-3" class="gritter-item-wrapper danger hover" style="" role="alert"><div class="gritter-top"></div><div class="gritter-item"><a class="gritter-close" href="#" tabindex="1" style="display: block;"></a><div class="gritter-without-image"><span class="gritter-title">操作成功</span><p>:message</p></div><div style="clear:both"></div></div><div class="gritter-bottom"></div></div></div>',
        ),

    ),
    /*
    |--------------------------------------------------------------------------
    | Default message types available in containers
    |--------------------------------------------------------------------------
    |
    | Specify available types for each container.
    |
    */
    'default_types'                         => array(

        'default'               => array('info', 'success', 'warning', 'error'),

    ),

);
