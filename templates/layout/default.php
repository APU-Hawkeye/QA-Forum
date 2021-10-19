<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var string $titleForLayout
 */

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php echo $titleForLayout; ?>
    </title>
    <?php echo $this->Html->css([
        'bootstrap.min',
        'animate',
        'sidebar-menu',
        'app-style',
        'icons',
    ]); ?>
    <style>
        td {
            font-size: 13px;
        }
    </style>
    <?php echo $this->fetch('stylesheets'); ?>
</head>
<body>
    <nav class="top-nav">
        <div class="top-nav-title">

        </div>
        <div class="top-nav-links">

        </div>
    </nav>
    <main class="main">
        <div class="container">
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <?php echo $this->Html->script([
        'jquery.min',
        'popper.min',
        'bootstrap.min',
        'sidebar-menu',
        'app-script',
        'waves'
    ]); ?>
    <?php echo $this->fetch('js'); ?>
</body>
</html>
