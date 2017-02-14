<?php

/* @var $this yii\web\View */
$this->title = 'Insided Test';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>There you go, an amazing single thread with images!</h1>

        <p class="lead">You may find Documentation inside.</p>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-5">
                <h2>Go to the Main Forum</h2>

                <p>This is where the app example is located. The code itself could be obtained from github. Specifically at <a href='https://github.com/jferrero/insided'> this page </a>. Also you may find other test made for an interview at the repo vwtests, which is also public.</p>
                <p><a class="btn btn-default" href="<?php echo Yii::$app->urlManager->createUrl('forum/index');?>">Go to the Forum &raquo;</a></p>
            </div>
            <div class="col-lg-5">
                <h2>Read the rest of the questions of the test</h2>

                <p>Included within the application you may find the answers to the questions made in the PDF. I don't have it .docx format, but I can make a Word Document pretty quick if requested</p>

                <p><a class="btn btn-default" href="<?php echo Yii::$app->urlManager->createUrl('site/questions');?>">Go to the Q&A &raquo;</a></p>
            </div>
            <div class="col-lg-5">
                <h2>Take a look at the Doc</h2>

                <p>There is an EAP File Contained within the documentation, but there is also an HTML file in case you dont have Enterprise Architect. The EAP file maybe be obtained <a href='Doc/index.htms'> at AWS S3 </a> and the HTML documentation may be seen <a href="doc/index.htm"> here </a></p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Get The EAP From AWS-S3 &raquo;</a></p>
            </div>
            <div class="col-lg-5">
                <h2>What will you miss?</h2>

                <p>Find out what I miss from the test, basically for lack of time. Also there is some context to ease the evalution valoration.</a></p>

                <p><a class="btn btn-default" href="<?php echo Yii::$app->urlManager->createUrl('site/miss');?>">See what's missing &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
