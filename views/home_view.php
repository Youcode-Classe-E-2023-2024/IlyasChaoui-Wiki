<link rel="stylesheet" href="<?= PATH ?>assets/css/home.css">

<div class="container">

    <header>

        <section class="slider">
            <img src="assets/images/top-image.jpg" alt="Slider Image" loading="lazy">
            <div class="content">
                <h2>The Backpacker</h2>
                <p>Jobs fill your pockets, adventures fill your soul.</p>
            </div>
        </section>

    </header>

    <div class="services">

        <div class="service">
            <img src="assets/images/services/icon1.png" alt="Who I am Icon" loading="lazy">
            <h3>Who I am</h3>
            <p>
                Lorem ipsum dolor sit amet,
                cons ecte tur adipi scing elit,
                sed do eius mod tempor inci didunt
                ut labore et dolore magna aliqua.
            </p>
        </div>

        <div class="service">
            <img src="assets/images/services/icon2.png" alt="Why I Write Icon" loading="lazy">
            <h3>Why I Write</h3>
            <p>
                Lorem ipsum dolor sit amet,
                cons ecte tur adipi scing elit,
                sed do eius mod tempor inci didunt
                ut labore et dolore magna aliqua.
            </p>
        </div>

        <div class="service">
            <img src="assets/images/services/icon3.png" alt="What I Do Icon" loading="lazy">
            <h3>What I Do</h3>
            <p>
                Lorem ipsum dolor sit amet,
                cons ecte tur adipi scing elit,
                sed do eius mod tempor inci didunt
                ut labore et dolore magna aliqua.
            </p>
        </div>

    </div>

    <div class="main-content">

        <div class="blog" id="Blog">


                <article class="posts">
                    <?php foreach ($wikis as$wiki) { ?>
                    <a href="index.php?page=wiki&wiki_id=<?= $wiki["wiki_id"] ?>">
                        <div class="post">
                            <div class="post-image">
                                <img src="assets/images/posts/post-1.png" alt="How to Ace Your Life Image" loading="lazy">
                            </div>
                            <div class="post-content">
                                <a class="post-title"><?= $wiki["title"] ?></a>
                                <p class="post-info"><?= $wiki["category"] ?></p>
                                <?php
                                $tags = Tag::get_wiki_tag($wiki["wiki_id"]);
                                foreach ($tags as $tag) {
                                    ?>
                                    <p class="post-info"><?= $tag["tag"] ?></p>
                                <?php } ?>
                                <p class="post-summary">
                                    <?= $wiki["content"] ?>
                                </p>
                            </div>
                            <div class="post-read-more">
                                <span>+</span>
                            </div>
                        </div>
                    </a>
                    <?php } ?>

                </article>


            <div class="pagination-blog">
                <div class="active">1</div>
                <div>2</div>
                <div>NEXT</div>
            </div>

        </div>

        <div class="sidebar">

            <div class="popular-posts-side">
                <h2>POPULAR POSTS</h2>
                <div class="popular-posts">
                    <div class="popular-post">
                        <div class="popular-post-image">
                            <img src="assets/images/posts/post-1.png" alt="How to Ace Your Life Image" loading="lazy">
                        </div>
                        <div class="popular-post-content">
                            <a href="#" class="popular-post-title">How to Ace Your Life</a>
                            <p class="popular-post-desc">
                                Etiam placerat velit vitae dui blandit sollicitudin.
                            </p>
                        </div>
                    </div>
                    <div class="popular-post">
                        <div class="popular-post-image">
                            <img src="assets/images/posts/post-2.png" alt="The Joys Of Being A Morning Person Image"
                                 loading="lazy">
                        </div>
                        <div class="popular-post-content">
                            <a href="#" class="popular-post-title">The Joys Of Being A …</a>
                            <p class="popular-post-desc">
                                Etiam placerat velit vitae dui blandit sollicitudin.
                            </p>
                        </div>
                    </div>
                    <div class="popular-post">
                        <div class="popular-post-image">
                            <img src="assets/images/posts/post-3.png" alt="Travelling with Strangers Image"
                                 loading="lazy">
                        </div>
                        <div class="popular-post-content">
                            <a href="#" class="popular-post-title">Travelling with Stra…</a>
                            <p class="popular-post-desc">
                                Etiam placerat velit vitae dui blandit sollicitudin.
                            </p>
                        </div>
                    </div>
                    <div class="popular-post">
                        <div class="popular-post-image">
                            <img src="assets/images/posts/post-4.png" alt="What I’ve learned from road trips Image"
                                 loading="lazy">
                        </div>
                        <div class="popular-post-content">
                            <a href="#" class="popular-post-title">What I’ve learned fr…</a>
                            <p class="popular-post-desc">
                                Etiam placerat velit vitae dui blandit sollicitudin.
                            </p>
                        </div>
                    </div>
                    <div class="popular-post">
                        <div class="popular-post-image">
                            <img src="assets/images/posts/post-4.png" alt="Why Long Walks Will Change Your Life Image"
                                 loading="lazy">
                        </div>
                        <div class="popular-post-content">
                            <a href="#" class="popular-post-title">Why Long Walks Will …</a>
                            <p class="popular-post-desc">
                                Etiam placerat velit vitae dui blandit sollicitudin.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="archives-side">
                <h2>ARCHIVES</h2>
                <div class="archive-box"><a href="#">January 2020</a></div>
                <div class="archive-box"><a href="#">December 2019</a></div>
                <div class="archive-box"><a href="#">September 2019</a></div>
                <div class="archive-box"><a href="#">June 2019</a></div>
            </div>

            <div class="social-side">
                <h2>LETS GET SOCIAL!</h2>
                <div>
                    <a href="#"><img src="assets/images/social/twitter.png" alt="Twitter Logo" loading="lazy"></a>
                    <a href="#"><img src="assets/images/social/facebook.png" alt="Facebook Logo" loading="lazy"></a>
                    <a href="#"><img src="assets/images/social/pinterest.png" alt="Pinterest Logo" loading="lazy"></a>
                    <a href="#"><img src="assets/images/social/linkedin.png" alt="Linkedin Logo" loading="lazy"></a>
                </div>
            </div>

            <div class="advertisement-side">
                <h2>ADVERTISEMENT</h2>
                <div class="my-advertisement-box">
                    <p>Banner Ad 300x300</p>
                </div>
            </div>

        </div>

    </div>



</div>

<script src="<?= PATH ?>assets/js/home.js"></script>