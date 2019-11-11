<?php
get_header();
?>
<div class="page-content">
    <div class="container">
        <div class="contact-us-img">
            <div class="text">
                <div class="value-prop">
                    <h1>Ask & Answer</h1>
                    <h5>Whether you need visa service support, we're here to answer your questions.</h5>
                </div>
            </div>
        </div>
        <div class="list-question">
            <div class="row">
                <div class="col-9"><?php echo do_shortcode( '[dwqa-list-questions]' ); ?></div>
                <div class="col-3">
                    <div class="tags-question">
                        <div class="panel-body">
                            <h4 class="widget-title">Tags</h4>
                            <div class="tag-cloud">
                                <a href="<?php echo get_tag_link(25); ?>">visa vietnam</a>
                                <a href="<?php echo get_tag_link(26); ?>">apply visa</a>
                                <a href="<?php echo get_tag_link(27); ?>">visa online</a>
                                <a href="<?php echo get_tag_link(28); ?>">visa online</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>