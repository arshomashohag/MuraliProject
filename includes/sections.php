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


	
}




?>