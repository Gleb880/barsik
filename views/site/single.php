<?php

use yii\helpers\Url;
use yii\widgets\ActiveForm;

?>
<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="post">
                    <div class="post-thumb">
                        <a href="blog.html"><img src="<?= $article->getImage(); ?>" alt=""></a>
                    </div>
                    <div class="post-content">
                        <header class="entry-header text-center text-uppercase">
                            <h6><a href="<?= Url::toRoute(['site/category', 'id' => $article->category->id]) ?>"><?= $article->category->title ?></a></h6>

                            <h1 class="entry-title"><a href="<?= Url::toRoute(['site/view', 'id' => $article->id]) ?>"><?= $article->title ?></a></h1>


                        </header>
                        <div class="entry-content">
                            <?= $article->content ?>
                        </div>
                        <div class="decoration">
                            <a href="#" class="btn btn-default">Decoration</a>
                            <a href="#" class="btn btn-default">Decoration</a>
                        </div>

                        <div class="social-share">
							<span
                                class="social-share-title pull-left text-capitalize">Автор: <?= $article->author->name; ?>, Опубликовано: <?= $article->getDate(); ?></span>
                            <ul class="text-center pull-right">
                                <li><a class="s-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="s-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="s-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="s-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="s-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </article>
                <?php if(!empty($comments)): ?>
                    <?php foreach($comments as $comment): ?>
                        <div class="top-comment"><!--top comment-->
                            <img width="60" src="<?= $comment->user->image; ?>" class="pull-left img-circle" alt="">
                            <h4><?= $comment->user->name; ?></h4>

                            <p class="comment-date">
                                <?= $comment->getDate(); ?>
                            </p>

                            <p><?= $comment->text; ?></p>
                        </div><!--top comment end-->
                    <?php endforeach; ?>
                <?php endif; ?>
                <div class="row"><!--blog next previous-->
                    <div class="col-md-6">
                        <div class="single-blog-box">
                            <a href="#">
                                <img src="/public/images/blog-next.jpg" alt="">

                                <div class="overlay">

                                    <div class="promo-text">
                                        <p><i class=" pull-left fa fa-angle-left"></i></p>
                                        <h5>Rubel is doing Cherry theme</h5>
                                    </div>
                                </div>


                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-blog-box">
                            <a href="#">
                                <img src="/public/images/blog-next.jpg" alt="">

                                <div class="overlay">
                                    <div class="promo-text">
                                        <p><i class=" pull-right fa fa-angle-right"></i></p>
                                        <h5>Rubel is doing Cherry theme</h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!--blog next previous end-->
                <div class="related-post-carousel"><!--related post carousel-->
                    <div class="related-heading">
                        <h4>You might also like</h4>
                    </div>
                    <div class="items">
                        <div class="single-item">
                            <a href="#">
                                <img src="/public/images/related-post-1.jpg" alt="">

                                <p>Just Wondering at Beach</p>
                            </a>
                        </div>


                        <div class="single-item">
                            <a href="#">
                                <img src="/public/images/related-post-2.jpg" alt="">

                                <p>Just Wondering at Beach</p>
                            </a>
                        </div>


                        <div class="single-item">
                            <a href="#">
                                <img src="/public/images/related-post-3.jpg" alt="">

                                <p>Just Wondering at Beach</p>
                            </a>
                        </div>


                        <div class="single-item">
                            <a href="#">
                                <img src="/public/images/related-post-1.jpg" alt="">

                                <p>Just Wondering at Beach</p>
                            </a>
                        </div>

                        <div class="single-item">
                            <a href="#">
                                <img src="/public/images/related-post-2.jpg" alt="">

                                <p>Just Wondering at Beach</p>
                            </a>
                        </div>


                        <div class="single-item">
                            <a href="#">
                                <img src="/public/images/related-post-3.jpg" alt="">

                                <p>Just Wondering at Beach</p>
                            </a>
                        </div>
                    </div>
                </div><!--related post carousel-->
                <?= $this->render('/partials/comment', [
                    'article' => $article,
                    'comments' => $comments,
                    'commentForm' => $commentForm
                ]) ?>
            </div>
            <?= $this->render('/partials/sidebar', [
                'popular' => $popular,
                'recent' => $recent,
                'categories' => $categories,
            ]); ?>
        </div>
    </div>
</div>
<!-- end main content-->
