<aside class="main-sidebar">

    <section class="sidebar">

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    ['label' => 'Project', 'icon' => 'book', 'url' => ['/project']],
                    ['label' => 'Task', 'icon' => 'tasks', 'url' => ['/task']],
                    ['label' => 'User', 'icon' => 'user-circle', 'url' => ['/user']],
//                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
//                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    ['label' => 'Login', 'icon' => 'check-square-o', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'SignUp', 'icon' => 'plus-square-o', 'url' => ['site/signup'], 'visible' => Yii::$app->user->isGuest],
                ],
            ]
        ) ?>

    </section>

</aside>
