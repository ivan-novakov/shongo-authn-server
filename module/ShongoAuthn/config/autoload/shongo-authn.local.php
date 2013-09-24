<?php

return array(
    
    'data_connectors' => array(
        'perun' => array(
            'class' => '\ShongoAuthn\User\DataConnector\PerunFake',
            'options' => array(
                'adapter' => array(
                    'driver' => 'Pdo_Mysql',
                    // 'driver' => 'Mysqli',
                    'host' => 'localhost',
                    'dbname' => 'shongo',
                    'username' => 'admin',
                    'password' => 'passwd',
                    'charset' => 'utf8'
                )
            )
        )
    )
);