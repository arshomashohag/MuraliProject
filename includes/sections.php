<?php


function head($home, $about, $contact, $login, $subs){
  printf('
    <div class="header_area">
      <div class="logo floatleft"><a href="#"><img src="images/logo12.png" alt="" /></a></div>
      <div class="top_menu floatleft">
        <ul>
          <li><a href="%s">Home</a></li>
          <li><a href="%s">About</a></li>
          <li><a href="%s">Contact us</a></li>
          <li><a href="%s">Subscribe</a></li>
          <li><a href="%s">Login</a></li>
        </ul>
      </div>
      <div class="social_plus_search floatright">
        <div class="social">
          <ul>
            <li><a href="#" class="twitter"></a></li>
            <li><a href="#" class="facebook"></a></li>
            <li><a href="#" class="feed"></a></li>
          </ul>
        </div>
        <div class="search">
          <form action="#" method="post" id="search_form">
            <input type="text" value="Search news" id="s" />
            <input type="submit" id="searchform" value="search" />
            <input type="hidden" value="post" name="post_type" />
          </form>
        </div>
      </div>
    </div>', $home, $about, $contact, $subs, $login);
}


function foot(){


	printf('<div class="footer_bottom_area">
      <div class="footer_menu">
        <ul id="f_menu">
          <li><a href="#">world news</a></li>
          <li><a href="#">Blogs</a></li>
          <li><a href="#">Business</a></li>
          <li><a href="#">Technology</a></li>
          <li><a href="#">Political</a></li>
          <li><a href="#">Study</a></li>
          <li><a href="#">Entertainment</a></li>
          <li><a href="#">Sports</a></li>
          <li><a href="#">Life&style</a></li>
        </ul>
      </div>
      <div class="copyright_text">
        <p>Copyright &copy; 2017. All rights reserved </p>
        <p>Trade marks and images used in the design are the copyright of their respective owners and are used for demo purposes only.</p>
      </div>
    </div>');
    
}




?>