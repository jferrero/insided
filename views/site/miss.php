<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'What\'s missing in the test';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Here you may find some context and what's missing in the test
    </p>


    <div class="body-content">

        <div class="row">
            <div class="col-lg-10">
                <p>
                    <h2> Some missing stuff</h2>

                    <ul>
                        <li> I18N: No translations where applied. </li>
                        <li> User Auth: Altought included, just a plugin which also include database, this has not been done</li>
                        <li> Url Beutification: Working on my local machine, sadly AWS is kicking. Pretty sure the problem will be at ModRewrite or another Apache Conf</li>
                        <li>More Cruds: More Cruds could be done for Forums and Threads, and not just for Posts, altough is not included in the test. Certanly is not a lot of work</li>
                        <li> Be able to answer a post directly intead of just adding a post to the end. Also be able to add a comment to a Post</li>
                        <li>A few pages miss the Breadcrumbs</li>
                        <li> Some styles were added on the go and so classes were incorrectly used </li>
                    </ul>
                </p>

                <p>
                    <h2> Some context </h2>

                    <ul>
                        <li> First time using Yii2 </li>
                        <li> Not developing actively for a while </li>
                        <li> Not using AWS for a while </li>
                        <li> Did not create some CRUDS on purpose to show some more code </li>
                        <li> Some of the comments and text were created on other devices, so could add more flavour there </li>
                        <li> Sorry for the delay, forza mayor </li>

                    </ul>
                </p>

            </div>
        </div>

    </div>
</div>
