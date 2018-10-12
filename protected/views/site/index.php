<amp-story standalone
           title="<?=$story_meta['title']?>"
           publisher="<?=$story_meta['publisher']?>"
           publisher-logo-src="<?=$story_meta['publisher_logo']?>"
           poster-portrait-src="<?=$story_meta['publisher_portrait_logo']?>">

    <!--Cover page-->
    <amp-story-page id="cover">
        <amp-story-grid-layer template="fill">
            <amp-img src="<?=$cover['image']?>"
                     width="720" height="1280"
                     layout="responsive">
            </amp-img>
        </amp-story-grid-layer>
        <amp-story-grid-layer template="vertical">
            <h1><?=$cover['header']?></h1>
            <p>By <?=$cover['author']?></p>
        </amp-story-grid-layer>
    </amp-story-page>

    <!--Moon page-->
    <amp-story-page id="moon">
        <amp-story-grid-layer template="vertical">
            <h1><?=$pages['moon']['title']?></h1>
            <amp-img src="<?=$pages['moon']['image']?>"
                     width="720" height="1280"
                     layout="responsive">
            </amp-img>
            <q><?=$pages['moon']['description']?></q>
        </amp-story-grid-layer>
    </amp-story-page>

    <!--Mars page-->
    <amp-story-page id="mars">
        <amp-story-grid-layer template="fill">
            <amp-img src="<?=$pages['mars']['image']?>"
                     width="720" height="1280"
                     layout="responsive">
            </amp-img>
        </amp-story-grid-layer>
        <amp-story-grid-layer template="thirds">
            <h1><?=$pages['mars']['title']?></h1>
            <p grid-area="lower-third"><?=$pages['mars']['description']?></p>
        </amp-story-grid-layer>
    </amp-story-page>

    <!--Earth page-->
    <amp-story-page id="earth">
        <amp-story-grid-layer template="fill">
            <amp-img src="<?=$pages['earth']['image']?>"
                     width="720" height="1280"
                     layout="responsive">
            </amp-img>
        </amp-story-grid-layer>
        <amp-story-grid-layer template="vertical">
            <h1><?=$pages['earth']['title']?></h1>
        </amp-story-grid-layer>
        <amp-story-grid-layer template="vertical" class="bottom">
            <p animate-in="fly-in-bottom"
               animate-in-delay="0.3s"
               animate-in-duration="0.8s"><?=$pages['earth']['description']?></p>
        </amp-story-grid-layer>
    </amp-story-page>

    <!--Sun page-->
    <amp-story-page id="sun">
        <amp-story-grid-layer template="fill">
            <amp-img src="<?=$pages['sun']['image']?>"
                     width="720" height="1280"
                     layout="responsive">
            </amp-img>
        </amp-story-grid-layer>
        <amp-story-grid-layer template="vertical">
            <h1><?=$pages['sun']['title']?></h1>
        </amp-story-grid-layer>
        <amp-story-grid-layer template="vertical" class="bottom">
            <p animate-in="fly-in-bottom"
               animate-in-delay="0.3s"
               animate-in-duration="0.8s"><?=$pages['sun']['description']?></p>
        </amp-story-grid-layer>
    </amp-story-page>

    <!--Album-->
    <amp-story-page id="planets">
        <amp-story-grid-layer template="vertical" class="noedge">
            <div class="wrapper">
                <?php
                $delay = 0.2;
                foreach ($gallery['images'] as $img) {
                    $delay += 0.2; ?>
                    <amp-img src="<?=$img?>"
                             width="720" height="1280"
                             layout="responsive"
                             animate-in="fade-in"
                             animate-in-delay="<?=$delay?>s">
                    </amp-img>
                <?php } ?>
            </div>
        </amp-story-grid-layer>
        <amp-story-grid-layer template="vertical" class="center-text">
            <p class="banner-text"><?=$gallery['title']?></p>
        </amp-story-grid-layer>
    </amp-story-page>

    <!--Bookend-->
    <amp-story-bookend src="bookend.json" layout="nodisplay"></amp-story-bookend>
</amp-story>