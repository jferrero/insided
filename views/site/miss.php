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
                    <h2>6) Regarding training and knowledge increase</h2>
                     
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

            </div>
        </div>

    </div>
</div>
