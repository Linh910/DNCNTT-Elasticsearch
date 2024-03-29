<?php

    $page = $_GET["page"] ?? '';

    $menuitems = [
        'search' => 'Search',
        'about' => 'ABOUT US',
        'page' =>  'NEWS PAGE',
        'contact' => 'CONTACT US'
    ];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Portfolio Extended</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <!--[if lte IE 6]>
<link rel="stylesheet" type="text/css" href="ie.css" />
<script type="text/javascript" src="unitpngfix.js"></script>
<![endif]-->
</head>

<body>
    <!-- BEGIN wrapper -->
    <div id="wrapper">
        <!-- BEGIN header -->
        <div id="header">
        <h1><a href="index.html">Portfolio Extended</a></h1>
            <form action="#">
                <input type="text" name="s" id="s" value="" />
                <button type="submit">Search</button>
            </form>

            
            <ul>
                <li class="f"><a href="/">Home</a></li>

                <?php foreach ($menuitems as $url => $label): ?>
                    <?php
                        $class = '';
                        if ($page == $url) {
                            $class = 'active';
                        }
                    ?>
                    <li class="f <?= $class; ?>">
                        <a href="/?page=<?= urlencode($url); ?>"><?= htmlspecialchars($label); ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <!-- END header -->
        <!-- BEGIN body -->
        <div id="body">
        <?php
            if ($page != '') {
                include $page . ".php";
            } 
        ?>
            <!-- BEGIN content -->
            <div id="content">
                <!-- begin featured -->
                <div class="featured">
                    <h2>Featured News</h2>
                    <div class="thumb">
                        <a href="detail.html"><img src="images/_thumb01.jpg" alt="" /></a>
                        <div class="text">
                            <h3><a href="detail.html">Riot Concert At The Park </a></h3>
                            <p>Lorem ipsum dolor sit amet porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora in...</p>
                        </div>
                    </div>
                </div>
                <!-- end featured -->
                <!-- begin post -->
                <div class="f post">
                    <a href="detail.html"><img src="images/_thumb02.jpg" alt="" /></a>
                    <h3><a href="detail.html">Riot Concert At The Park </a></h3>
                    <p class="details"><a href="#">January 21, 2009</a> | <a href="#">Lifestyle</a> | <a href="#">23 Comments</a></p>
                    <p>Lorem ipsum dolor sit amet porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora in...</p>
                </div>
                <!-- end post -->
                <!-- begin post -->
                <div class="post">
                    <a href="detail.html"><img src="images/_thumb03.jpg" alt="" /></a>
                    <h3><a href="detail.html">Riot Concert At The Park </a></h3>
                    <p class="details"><a href="#">January 21, 2009</a> | <a href="#">Lifestyle</a> | <a href="#">23 Comments</a></p>
                    <p>Lorem ipsum dolor sit amet porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora in...</p>
                </div>
                <!-- end post -->
                <!-- begin post -->
                <div class="post">
                    <a href="detail.html"><img src="images/_thumb04.jpg" alt="" /></a>
                    <h3><a href="detail.html">Riot Concert At The Park </a></h3>
                    <p class="details"><a href="#">January 21, 2009</a> | <a href="#">Lifestyle</a> | <a href="#">23 Comments</a></p>
                    <p>Lorem ipsum dolor sit amet porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora in...</p>
                </div>
                <!-- end post -->
                <!-- begin post -->
                <div class="post">
                    <a href="detail.html"><img src="images/_thumb05.jpg" alt="" /></a>
                    <h3><a href="detail.html">Riot Concert At The Park </a></h3>
                    <p class="details"><a href="#">January 21, 2009</a> | <a href="#">Lifestyle</a> | <a href="#">23 Comments</a></p>
                    <p>Lorem ipsum dolor sit amet porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora in...</p>
                </div>
                <!-- end post -->
                <!-- begin post -->
                <div class="post">
                    <a href="detail.html"><img src="images/_thumb06.jpg" alt="" /></a>
                    <h3><a href="detail.html">Riot Concert At The Park </a></h3>
                    <p class="details"><a href="#">January 21, 2009</a> | <a href="#">Lifestyle</a> | <a href="#">23 Comments</a></p>
                    <p>Lorem ipsum dolor sit amet porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora in...</p>
                </div>
                <!-- end post -->
                <!-- begin post -->
                <div class="post">
                    <a href="detail.html"><img src="images/_thumb07.jpg" alt="" /></a>
                    <h3><a href="detail.html">Riot Concert At The Park </a></h3>
                    <p class="details"><a href="#">January 21, 2009</a> | <a href="#">Lifestyle</a> | <a href="#">23 Comments</a></p>
                    <p>Lorem ipsum dolor sit amet porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora in...</p>
                </div>
                <!-- end post -->
                <!-- begin post -->
                <div class="post">
                    <a href="#"><img src="images/_thumb08.jpg" alt="" /></a>
                    <h3><a href="#">Riot Concert At The Park </a></h3>
                    <p class="details"><a href="#">January 21, 2009</a> | <a href="#">Lifestyle</a> | <a href="#">23 Comments</a></p>
                    <p>Lorem ipsum dolor sit amet porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora in...</p>
                </div>
                <!-- end post -->
            </div>
            <!-- END content -->
            <!-- BEGIN left sidebar -->
            <div id="lsidebar">
                <!-- begin pages -->
                <h2>Pages</h2>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Links</a></li>
                    <li><a href="#">Archives</a></li>
                    <li><a href="#">Resources</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Sitemap</a></li>
                </ul>
                <!-- end pages -->
                <!-- begin categories -->
                <h2>Categories</h2>
                <ul>
                    <li><a href="#">Entertainment</a></li>
                    <li><a href="#">Fashion</a></li>
                    <li><a href="#">Food</a></li>
                    <li><a href="#">Marketing</a></li>
                    <li><a href="#">Lifestyle</a></li>
                    <li><a href="#">Pictures</a></li>
                    <li><a href="#">Videos</a></li>
                </ul>
                <!-- end categories -->
                <!-- begin archives -->
                <h2>Archives</h2>
                <ul>
                    <li><a href="#">December 2008</a></li>
                    <li><a href="#">November 2008</a></li>
                    <li><a href="#">October 2008</a></li>
                    <li><a href="#">Septemher 2008</a></li>
                    <li><a href="#">August 2008</a></li>
                </ul>
                <!-- end archives -->
                <!-- begin blogroll -->
                <h2>Blogroll</h2>
                <ul>
                    <li><a href="#">Documentation</a></li>
                    <li><a href="#">Suggest Ideas</a></li>
                    <li><a href="#">Support Forum</a></li>
                </ul>
                <!-- end blogroll -->
                <!-- begin meta -->
                <h2>Meta</h2>
                <ul>
                    <li><a href="#">Login</a></li>
                </ul>
                <!-- end meta -->
            </div>
            <!-- END left sidebar -->
            <!-- BEGIN right sidebar -->
            <div id="rsidebar">
                <!-- begin site sponsors -->
                <h2>Site Sponsors</h2>
                <div class="sponsors">
                    <a href="#"><img src="images/ad125x125.jpg" alt="" /></a>
                    <a href="#"><img src="images/ad125x125.jpg" alt="" /></a>
                    <a href="#"><img src="images/ad125x125.jpg" alt="" /></a>
                    <a href="#"><img src="images/ad125x125.jpg" alt="" /></a>
                </div>
                <!-- end site sponsors -->
                <!-- begin twitter updates -->
                <h2>Twitter Updates</h2>
                <div class="twitter"> Cleaning my garage at this hour.. can't sleep. </div>
                <!-- end twitter updates -->
                <!-- begin popular articles -->
                <h2>Popular Articles</h2>
                <ul>
                    <li><a href="#">VW Scirocco EVO R by Caractere</a></li>
                    <li><a href="#">Nitrous Oxide Tuning - NOS</a></li>
                    <li><a href="#">Premier4509 Bentley Continental GT</a></li>
                    <li><a href="#">Hennessey announces plans to modify the</a></li>
                    <li><a href="#">VW Scirocco EVO R by Caractere</a></li>
                    <li><a href="#">Nitrous Oxide Tuning - NOS</a></li>
                </ul>
                <!-- end popular articles -->
                <!-- begin featured video -->
                <h2>Featured Video</h2>
                <div class="video"> <img src="images/_video.jpg" alt="" /> </div>
                <!-- end featured video -->
                <!-- begin flickr gallery -->
                <h2>Flickr Gallery</h2>
                <div class="flickr">
                    <a href="#"><img src="images/_flickr1.jpg" alt="" /></a>
                    <a href="#"><img src="images/_flickr2.jpg" alt="" /></a>
                    <a href="#"><img src="images/_flickr3.jpg" alt="" /></a>
                    <a href="#"><img src="images/_flickr4.jpg" alt="" /></a>
                    <a href="#"><img src="images/_flickr5.jpg" alt="" /></a>
                    <a href="#"><img src="images/_flickr6.jpg" alt="" /></a>
                </div>
                <!-- end flickr gallery -->
            </div>
            <!-- END right sidebar -->
            <div class="break"></div>
        </div>
        <!-- END body -->
    </div>
    <!-- END wrapper -->
    <!-- BEGIN footer -->
    <div id="footer">
        <p>Copyright &copy; 2024 - <a href="#">Portfolio Extended</a>
    </div>
    <!-- END footer -->
</body>

</html>