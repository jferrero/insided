<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Q&A';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Here you may find the answers to the questions made on the PDF.
    </p>


    <div class="body-content">

        <div class="row">
            <div class="col-lg-10">
                <h2>1) Regarding Profesional Challenges</h2>

                <p>Well, during the years I found myself in several challenges, I would name 3.</p>

                <p style="margin: 20px">
					<h4>Design Challenge:</h4>

					In Mexico, had only a week to make a design of a medium size application of which the domain was completly unknown to me since I've just arrived into the country and was a legal/gov related software.
					
                    <h5>How I solve It:</h5>

					I applied some intense domain transfer techniques with UML (always my weapon of choice) that allowed me (altough barely sleeping for the whole week) make a strong foundation for the rest of the software lifecycle, who still runs today.

				</p>
				<p style="margin: 20px">
					<h4>Architectural Challenge:</h4>

					My first job at Spain put me in charge of a Linux DevOps Application, altough I did not had at the time ANY Linux knowledge I took the challenge. Was proffesionally speaking the hardest year of my life indeed. The project was a success and was replaced by Azzure last year. Javier Fernandez role in the project was provide technical support, that is how we met and eventually became friends.

                    <h5>How I solve It:</h5>

                    Work, learn, ask, eat, work, eat, sleep and all over again. This project brough me a big technical gain. After the project succeded I was entrusted with 4 teams to run all IT Operations.

				</p>

                <p style="margin: 20px">
                    <h4>Overall Challenge:</h4>

                    In my current work at TUI, when I began I was entrusted as a Technical Leader. The team was desintegrated, a collegue just left and they barely spoke to eachother, or not at all. To get things more complicated they decide not to make official enough my role, my objetive was to make a team otherwise the company will close that near-shore team. They were under-emplyed (20-30%), undermined and overall undermanaged.

                    <h5>How I solve It:</h5>

                    First I prove that technically I was capable to work toe to toe in Zend (which I did not knew at the time). Then the role of technical leader went step by step organically being set in place. After that we focused in human aspects and to get more interesting projects from Belgium. In this yearly evaluations we've received praises from the managment, internall clients, HR and also personnaly I received the maximum score any all evaluations, both technical and personal, from all my collegueas and from my responsable.

                </p>
            </div>
            <div class="col-lg-10">
                <h2>2) Regarding Design Patterns</h2>

                <p>I will focus on those I've use the most. Sadly PHP is not the greatest environment to apply most of the Design Patters, specially behaviorals, since the objects normally live for a few milliseconds.
</p>

                <p style="margin: 20px">
                    <h4>Singleton:</h4>

                    For the me this is by far the most important, without this pattern there is no standard for DB connections, collections and a multitude of other funcionalities. Has also two inmense advantages, is extremely simple to deeply understand it of you are aware of OOP and almost everybody knows it, which can be a problem with Design Patterns.
                </p>
                <p style="margin: 20px">
                    <h4>State:</h4>

                    My personal favourite, I extensebly use this use one in every medium-ish application. Flexible, simple to implement and to explain. Easy to provide an interface and allow multiple programmers to work very close to eachother without touching eachothers code. Beuty in ellegance.

                </p>

                <p style="margin: 20px">
                    <h4>Adapter:</h4>

                    Also quite simple, but in my opinion heavly undermined. Adapter allowed me to attach code from previous software and other modules into a new structure in a simple-standarized way.

                </p>
            </div>

            <div class="col-lg-10">
                <h2>3) Regarding avoiding crappy code</h2>

                <p>Got a few habits.</p>

                <p style="margin: 20px">

                    <ul>
                        <li>Before I commit something, I always check line by line. Checking every single line to be commited. This avoid both errors, forgetting stuff like PHP Doc and of course comments and crappy code.</li>
                        <li>Git hooks, cool if you want to apply some quick format checks, they provide quite a few triggers.</li>
                        <li>And the most important thing of all, create mechanisms to avoid coding stuff that you will have to delete afterwards, whatever the reason. If it becouse specs changes, speak to the stakeholders and avoid the situation in the future. If becouse your code is not good enough, design more and code less and so on. This is vital to avoid monolithic disfunctional structures.</li>
                    </ul>
                </p>

            </div>

            <div class="col-lg-10">
                <h2>4) Regarding Agile Principles</h2>

                <p style="margin: 20px">
                    <h4>Standups:</h4>

                    My favourite thing in the WORLD!, what you've done yesterday and today. Mechanical, standarized, effortless and promote sinergy. The most productive part of my day for the last year and a half.
                </p>
                <p style="margin: 20px">
                    <h4>No estimations:</h4>

                    Altough not an intrisencal a forbidden part in the Agile world. Short term planifications out-of-the-blue just dont work. There is however a need in medium and high managment for obvious reason to have some degree of control and be able to forsee what will happen in the incoming months. The trick is to find the sweet spot.

                </p>

                <p style="margin: 20px">
                    <h4>Get business closer to IT:</h4>

                    this is for me extremelly valuable, so much that I sustain this is a must regardeless you go agile or not.

                </p>

            </div>

            <div class="col-lg-10">
                <h2>5) Regarding Personal conflicts within the team</h2>

                <p>Specially during my last years I find myself solving similars situations from time to time, specially in the last job. Empathy, like pretty it does in everything, work wonders and was the key for me to solve issues. </p>

                <p>Generally what I do is talk with one of the involved and try to contextualize the "other side" situation. Generaly the problem is found on Managment or lack of motivation or resources, which finally also points directly to managment, and not to the person who's creating the issue.</p>

            </div>

            <div class="col-lg-10">
                <h2>6) Regarding training and knowledge increase</h2>

                <p>Regarding last year I can mention:</p>

                <p style="margin: 20px">
                    <ul>
                        <li>PHP Zend 5.6 Certification: I have been preparing a PHP certification since late November, the exam should be somewhere around early march.</li>
                        <li>+30 hours, 1 hour a week of internal tech training at the company, from 3D game engines, OOP, AWS, CSS preprocessor, B2C Company Websites, UML, Enterprise Architect, Networking, TCP/IP...., around a third of those were given by me, the rest for the rest of the team.</li>
                        <li>A couple of Coursera Courses:
                            <ul>
                                <li>Learning How to Learn: Very interesting course, explain how the brain processe and remember information, and based on that behaviour how we should behave to improve our learning. Some tricks became a part of my daily rutine. Around 8 hours.</li>
                                <li>Tries to rethink from the very basis what is and what could be the role of the companies in the society, how should broaden up the stakeholders view, partipicate in charity, how to go green and increase happiness of those around you. Around 8 hours.</li>

                            </ul>
                        <li>And the most important thing of all, create mechanisms to avoid coding stuff that you will have to delete afterwards, whatever the reason. If it becouse specs changes, speak to the stakeholders and avoid the situation in the future. If becouse your code is not good enough, design more and code less and so on. This is vital to avoid monolithic disfunctional structures.</li>
                        <li>A couple of PLuralsight Courses: Around 5-6 very short courses of an avg of 2 hours each, contemplating from basic domain for non technical people, how states participate activebly in ciber attack and defense.</li>
                        <li>Arduino and Basic Electronis/Firmware: After a nice hackaton at Ostende about Arduino, a became an Arduino enthusisthic and did some funny stuff for a month or two. I promise myself to return to it</li>
                        <li>Additionally, assisted another Hackaton about SCRUM, assisted 1-2 Conferences in Malaga, and some organic stuff</li>
                    </ul>
                </p>

                <p> As for this year, well, I would like to broaden up in some technology aspects which were put in a second row this past year: including, but no limited to: caching, package balancing, more diagnose tools, I'm looking to a Design or Managment Degree, but financially could be problematic. Also some Arduino will be nice.

            </div>
        </div>

    </div>
</div>
