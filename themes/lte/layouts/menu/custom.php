<?php

return [
                    ['label' => 'Geral', 'options' => ['class' => 'header']],
                    ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
                    ['label' => 'Login', 'url' => ['/user/security/login'], 'visible' => Yii::$app->user->isGuest],             
                    [
                        'label' => 'Usuários',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                                      
                                        ['label' => 'Administração', 'url' => ['/user/admin/index']],
                                        ['label' => 'Conta', 'url' => ['/user/settings/account']],
                                        
                                   
                                   ]
                         ],
                    [
                        'label' => 'Permissões',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                                      
                                        ['label' => 'Papéis', 'url' => ['/rbac/role']],
                                        ['label' => 'Permissões', 'url' => ['/rbac/permission']],
                                        ['label' => 'Atribuições', 'url' => ['/rbac/assignment']],
                                        
                                   
                                   ]
                         ],
            ];