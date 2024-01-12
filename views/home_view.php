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

    <h1 class="text-6xl ml-40 mt-10 font-bold">Last wikis:</h1>
    <div class="services">
        <?php foreach ($lastWiki as $wiki) { ?>
            <div class="service">
                <img src="assets/images/services/icon1.png" alt="Who I am Icon" loading="lazy">
                <h3><?= $wiki["title"] ?></h3><br>
                <span class="bg-black  rounded-md text-white px-3 py-1 text-2lg uppercase font-medium"><?= $wiki["category"] ?></span><br><br>
                <?php
                $tags = Tag::get_wiki_tag($wiki["wiki_id"]);
                foreach ($tags as $tag) { ?>
                    <span class="bg-green-500 rounded-full mb-5 text-white px-3 py-1 text-2lg uppercase font-medium"><?= $tag["tag"] ?></span>

                <?php } ?>
                <p>
                    <?= $wiki["content"] ?>
                </p>
            </div>
        <?php } ?>
    </div>
    <h1 class="text-6xl ml-40 mt-10 font-bold">All wikis:</h1>
    <div class="main-content">

        <div class="blog" id="Blog">


            <article class="posts">
                <?php foreach ($wikis as $wiki) { ?>
                    <a href="index.php?page=wiki&wiki_id=<?= $wiki["wiki_id"] ?>">
                        <div class="post">
                            <div class="post-image">
                                <img src="assets/images/posts/post-1.png" alt="How to Ace Your Life Image"
                                     loading="lazy">
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
                <h2>Last categories:</h2>
                        <?php foreach ($lastCategories as $category) { ?>
                <div class="popular-posts">
                    <div class="popular-post">
                            <div class="popular-post-content">
                                <h1 class="text-2xl font-bold">Category <?= $category["category_id"] ?> </h1>
                                <a href="#" class="text-xl"><?= $category["category"] ?></a>
                            </div>
                    </div>
                </div>
                        <?php } ?>
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