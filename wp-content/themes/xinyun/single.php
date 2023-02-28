<?php get_header(); ?>
<main class="content ant-layout-content">
    <div class="main">
        <div class="banner"><img src="<?php bloginfo('template_url') ?>/images/banner2.jpg"></div>
        <div class="breadcrumb">
            您现在的位置：<a href="">首页</a> » <a href="">Blog</a>
        </div>
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABzMAAAAFCAYAAADBucEZAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyFpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo3NDkyMjRBODcyRkMxMUVEQThFQ0I0MDdBMzNBQTYzMCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo3NDkyMjRBOTcyRkMxMUVEQThFQ0I0MDdBMzNBQTYzMCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjc0OTIyNEE2NzJGQzExRURBOEVDQjQwN0EzM0FBNjMwIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjc0OTIyNEE3NzJGQzExRURBOEVDQjQwN0EzM0FBNjMwIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+QH4dsAAAAVtJREFUeNrs3UtOwzAQANBMBMcAiR0LxCU4EzdgzUl6Nbaw4FMS+snEcUoqVaJI70nuxx2747F36Sdurq+em6Z56NplAwCcREQUPevTzd3EsQPy3eGgJa/GogIsDh1NG7E4s2lo1J/F3HvVx8ei/ZzWJI6pQdT3Mg7MV8uh7I/JfsfseqOYo1avKBYYaW1RzWE9rKs4d/uYNLDNOVYOWe7Lwydr3qc4N66sQx+5nsanOWp70EYZH6OcojybOadJXsNcc3lHnj/nHr/UpMgzUh02847PyHRdaU1FTm3e2G3cri/a9B5FnX7ioswv1azdnYdhYBtlzLiWu9qN8t7GxzY+Px7qDQAAAPwjq4vu5q5r92oBAAAAAAAAnJHb/gPQr+oAAAAAAAAAnJm3/mLme9c+1QIAAAAAAAA4Ix/9z8w+du2p2fxnpouaAAAAAAAAwF/qv5D51bWXbwEGAKxQDz859FdvAAAAAElFTkSuQmCC" class="line">
        <div class="details">
            <div class="name"><?php the_title() ?></div>
            <div class="time"><?php the_time('Y-m-d H:i:s') ?></div>
            <div class="info">
                <?php
                while (have_posts()):the_post();
                    the_content();
                endwhile;
                ?>

                <div class="espcms_book">
                    <ul class="espcms_newslist_read unstyled">
                        <li style="color: #666666; font-size: 15px">
                            <?php previous_post_link('上一篇: %link') ?>
                        </li>
                        <li style="color: #666666; font-size: 15px">
                            <?php next_post_link('下一篇: %link') ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <img src="<?php bloginfo('template_url') ?>/images/readmore.png" class="readmore">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABzMAAAAFCAYAAADBucEZAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyFpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo3NDkyMjRBODcyRkMxMUVEQThFQ0I0MDdBMzNBQTYzMCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo3NDkyMjRBOTcyRkMxMUVEQThFQ0I0MDdBMzNBQTYzMCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjc0OTIyNEE2NzJGQzExRURBOEVDQjQwN0EzM0FBNjMwIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjc0OTIyNEE3NzJGQzExRURBOEVDQjQwN0EzM0FBNjMwIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+QH4dsAAAAVtJREFUeNrs3UtOwzAQANBMBMcAiR0LxCU4EzdgzUl6Nbaw4FMS+snEcUoqVaJI70nuxx2747F36Sdurq+em6Z56NplAwCcREQUPevTzd3EsQPy3eGgJa/GogIsDh1NG7E4s2lo1J/F3HvVx8ei/ZzWJI6pQdT3Mg7MV8uh7I/JfsfseqOYo1avKBYYaW1RzWE9rKs4d/uYNLDNOVYOWe7Lwydr3qc4N66sQx+5nsanOWp70EYZH6OcojybOadJXsNcc3lHnj/nHr/UpMgzUh02847PyHRdaU1FTm3e2G3cri/a9B5FnX7ioswv1azdnYdhYBtlzLiWu9qN8t7GxzY+Px7qDQAAAPwjq4vu5q5r92oBAAAAAAAAnJHb/gPQr+oAAAAAAAAAnJm3/mLme9c+1QIAAAAAAAA4Ix/9z8w+du2p2fxnpouaAAAAAAAAwF/qv5D51bWXbwEGAKxQDz859FdvAAAAAElFTkSuQmCC" class="line">
        <div class="morelist">
            <div class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-android">
                <div class="swiper-wrapper swiperlist" style="transform: translate3d(0px, 0px, 0px);">
                    <?php $args = ['category' => 4, 'numberposts' => 10, 'orderby' => 'id', 'order' => 'ASC']; ?>
                    <?php $posts = get_posts($args); ?>
                    <?php if ($posts): ?>
                        <?php foreach ($posts as $post):setup_postdata($post); ?>
                            <a href="<?php the_permalink() ?>" class="list-item swiper-slide swiper-slide-active" style="width: 477.333px; margin-right: 50px;">
                                <div class="imgbox">
                                    <img src="<?= get_the_post_thumbnail_url() ?>" alt="" srcset="">
                                </div>
                                <div class="name"><?php the_title() ?></div>
                                <div class="time"><?php the_time('Y-m-d H:i:s') ?></div>
                                <div class="read">Read More</div>
                            </a>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
            <div class="swiper-button-next swiper-button-disabled" tabindex="0" role="button" aria-label="Next slide" aria-disabled="true"></div>
            <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
        </div>
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABzMAAAAFCAYAAADBucEZAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyFpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo3NDkyMjRBODcyRkMxMUVEQThFQ0I0MDdBMzNBQTYzMCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo3NDkyMjRBOTcyRkMxMUVEQThFQ0I0MDdBMzNBQTYzMCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjc0OTIyNEE2NzJGQzExRURBOEVDQjQwN0EzM0FBNjMwIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjc0OTIyNEE3NzJGQzExRURBOEVDQjQwN0EzM0FBNjMwIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+QH4dsAAAAVtJREFUeNrs3UtOwzAQANBMBMcAiR0LxCU4EzdgzUl6Nbaw4FMS+snEcUoqVaJI70nuxx2747F36Sdurq+em6Z56NplAwCcREQUPevTzd3EsQPy3eGgJa/GogIsDh1NG7E4s2lo1J/F3HvVx8ei/ZzWJI6pQdT3Mg7MV8uh7I/JfsfseqOYo1avKBYYaW1RzWE9rKs4d/uYNLDNOVYOWe7Lwydr3qc4N66sQx+5nsanOWp70EYZH6OcojybOadJXsNcc3lHnj/nHr/UpMgzUh02847PyHRdaU1FTm3e2G3cri/a9B5FnX7ioswv1azdnYdhYBtlzLiWu9qN8t7GxzY+Px7qDQAAAPwjq4vu5q5r92oBAAAAAAAAnJHb/gPQr+oAAAAAAAAAnJm3/mLme9c+1QIAAAAAAAA4Ix/9z8w+du2p2fxnpouaAAAAAAAAwF/qv5D51bWXbwEGAKxQDz859FdvAAAAAElFTkSuQmCC" class="line">
        <div style="height: 1px"></div>
    </div>
</main>
<script src="<?php bloginfo('template_url') ?>/js/swiper.min.js"></script>
<script>
    if (document.body.clientWidth > 768) {
        var swiper = new Swiper(".swiper-container", {
            slidesPerView: 3,
            spaceBetween: 50,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            }
        });
    }
</script>
<?php get_footer(); ?>