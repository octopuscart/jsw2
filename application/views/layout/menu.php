<nav id="primary-menu">

    <ul>
        <li class="current">
            <a href="<?php echo site_url("about-us") ?>"><div>INSIGTS</div></a>
            <ul>
                <li><a href="#"><div>Customer Service</div></a></li>
                <li><a href="#"><div>Privacy Policy</div></a></li>

            </ul>
        </li>
        <!-- Mega Menu
        ============================================= -->
        <li class="mega-menu"><a href="#"><div>Our Products</div></a>
            <div class="mega-menu-content style-2 clearfix">
                <?php
                $categorylist = [[131, 133], [132], [134, 136], ['135']];
                foreach ($categorylist as $ckey => $cvalue) {
                    ?>
                    <ul class="mega-menu-column col-lg-3">
                        <?php
                        $this->db->where("parent_id", "0");
                          $this->db->where_in("id", $cvalue);
                        $query = $this->db->get("category");
                        $categoryp = $query->result_array();
                        foreach ($categoryp as $pkey => $pvalue) {
                            ?>
                            <li class="mega-menu-title"><a href="<?php echo site_url("product/productlist/1/" . $pvalue['id']); ?>"><div><?php echo $pvalue['category_name']; ?></div></a>
                                <ul>
                                    <?php
                                    $this->db->where("parent_id", $pvalue['id']);
                                    $query = $this->db->get("category");
                                    $category = $query->result_array();
                                    foreach ($category as $key => $value) {
                                        ?>
                                        <li><a href="<?php echo site_url("product/productlist/1/" . $value['id']); ?>"><div><?php echo $value['category_name']; ?></div></a></li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                    <?php
                }
                ?>


            </div>
        </li><!-- .mega-menu end -->
        <li><a href="<?php echo site_url("Shop/catalogs") ?>"><div>CATALOGS</div></a>

        </li><!-- .mega-menu end -->
        <li><a href="<?php echo site_url("Shop/blog"); ?>"><div>BLOG</div></a></li>
        <li><a href="<?php echo site_url("faqs"); ?>"><div>FAQ's</div></a></li>
        <li><a href="#"><div>CUSTOMER SUPPORT</div></a></li>
        <li><a href="<?php echo site_url("contact"); ?>"><div>Contact</div></a></li>
    </ul>


    <!-- Top Search
    ============================================= -->
<!--    <div id="top-search">
        <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
        <form action="search.html" method="get">
            <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." style="font-size: 13px;">
        </form>
    </div> #top-search end -->

</nav><!-- #primary-menu end -->