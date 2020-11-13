<?php

$table_name = "tl_namensliste";

$GLOBALS['TL_DCA'][$table_name] = array
(

    // Config
    'config' => array
    (
        'dataContainer'               => 'Table',
        'enableVersioning'            => true,
        'sql' => array
        (
            'keys' => array
            (
                'id' => 'primary'
            )
        )
    ),

    // Datensätze auflisten
    'list' => array
    (
        'sorting' => array
        (
            'mode'      => 2,
            'fields'    => array('vorname', 'name'),
            'flag'      => 1,
            'panelLayout' => 'filter;sort;search,limit',
        ),
        'label' => array
        (
            'fields'        => array('vorname', 'name', 'email'),
            'showColumns'   => true,
            'format'        => '%s'
        ),
        'operations'    => array
        (
            'edit' => array
            (
                'label'             => &$GLOBALS['TL_LANG'][$table_name]['edit'],
                'href'              => 'act=edit',
                'icon'              => 'edit.svg'
            ),
            'delete' => array
            (
                'label'             => &$GLOBALS['TL_LANG'][$table_name]['delete'],
                'href'              => 'act=delete',
                'icon'              => 'delete.svg',
            ),
            'show' => array
            (
                'label'             => &$GLOBALS['TL_LANG'][$table_name]['show'],
                'href'              => 'act=show',
                'icon'              => 'show.svg'
            )
        )
    ),

    // Palettes
    'palettes'  => array
    (
        'default'                   => '{person_legende}, vorname, name, email'
    ),

    // Fields
    'fields' => array
    (
        'id' => array
        (
            'sql'                   => "int(10) unsigned NOT NULL auto_increment"
        ),
        'tstamp' => array
        (
            'sql'                   => "int(10) unsigned NOT NULL default '0'"
        ),
        'vorname' => array
        (
            'label'                 => &$GLOBALS['TL_LANG'][$table_name]['vorname'],
            'exclude'               => true,
            'sorting'               => true,
            'inputType'             => 'text',
            'eval'                  => ['maxlength'=>255, 'tl_class'=>'w50'],
            'sql'                   => "varchar(255) NOT NULL default ''"
        ),
        'name' => array
        (
            'label'                 => &$GLOBALS['TL_LANG'][$table_name]['name'],
            'exclude'               => true,
            'sorting'               => true,
            'inputType'             => 'text',
            'eval'                  => ['maxlength'=>255, 'tl_class'=>'w50'],
            'sql'                   => "varchar(255) NOT NULL default ''"
        ),
        'email' => array
        (
            'label'                 => &$GLOBALS['TL_LANG'][$strName]['email'],
            'exclude'               => true,
            'inputType'             => 'text',
            'eval'                  => ['mandatory'=>true, 'rgxp'=>'email', 'maxlength'=>255, 'decodeEntities'=>true, 'tl_class'=>'w50'],
            'sql'                   => "varchar(255) NOT NULL default ''"
        )
    )
);