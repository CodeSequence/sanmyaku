<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=10" />
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic|Josefin+Sans:400,700,300' rel='stylesheet' type='text/css'>
  {asset name="Head"}
</head>
<body id="{$BodyID}" class="{$BodyClass}">

  <div class="off-canvas-wrap" data-offcanvas>
    <div class="inner-wrap">
      <nav class="tab-bar">

        <section class="left-small left-off-canvas-toggle">
          <img class="hamburger" src="/themes/sanmyaku/design/images/open-menu.svg" alt="">
        </section>

        <section class="middle tab-bar-section TitleBar">
          <h1 class="title">
            <div class="logo">{logo}</div>
          </h1>
        </section>


        {if $User.SignedIn}
        <div class="right-menu-signedin">
          <a href="#" class="right-off-canvas-toggle">
            <span class="UserName hide-for-small-only">{$User.Name}</span>
            <img class="ProfilePhoto" src="{$User.Photo}" alt="User Icon">
          </a>

          <section class="right-small right-off-canvas-toggle">
            <img class="hamburger" src="/themes/sanmyaku/design/images/open-menu.svg" alt="">
          </section>
        </div>

        {else}

        <div class="right-menu-signedout">
          {link class="header-login" path="signin" text="Login" target="current"}
          {register_link}

          <section class="right-small">
            <img class="avatar-placeholder" src="/themes/sanmyaku/design/images/avatar-placeholder.svg" alt="">
          </section>
        </div>
        {/if}

      </nav>

      <aside class="left-off-canvas-menu">
        <div class="menu-top-bar">
          <div class="menu-top-bar-title">Main Menu</div>
          <div class="menu-top-bar-close">
            <span class="exit-off-canvas">
              <svg version="1.1" id="close-x1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              	 viewBox="-296 388 18 18" enable-background="new -296 388 18 18" xml:space="preserve">
              <g id="cross">
              	<polygon points="-278,389.1 -279,388 -287,396 -295,388 -296,389.1 -288,397 -296,404.9 -295,406 -287,398 -279,406 -278,404.9
              		-286,397 	"/>
              </g>
              </svg>
            </span>
          </div>
        </div>

        <ul class="off-canvas-list">
          {if !$User.SignedIn}
            <li class="mobile-login">{link path="signin" text="Login" target="current"}</li>
            <li class="mobile-login">{register_link}</li>
          {/if}
          <li><a href="{link path="home"}">Forum Home</a></li>
          {categories_link}
          {discussions_link}
          {activity_link}
          {custom_menu}
        </ul>

        <hr class="menu-seperator" />

        {asset name="ForumStats"}

        <hr class="menu-seperator" />

        {theme_partial name="social"}
      </aside>


      <aside class="right-off-canvas-menu">
        <div class="menu-top-bar">
          <div class="menu-top-bar-title">User Menu</div>
          <div class="menu-top-bar-close">
            <span class="exit-off-canvas">
              <svg version="1.1" id="close-x2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              	 viewBox="-296 388 18 18" enable-background="new -296 388 18 18" xml:space="preserve">
                <g id="cross">
                	<polygon points="-278,389.1 -279,388 -287,396 -295,388 -296,389.1 -288,397 -296,404.9 -295,406 -287,398 -279,406 -278,404.9
                		-286,397 	"/>
                </g>
              </svg>
            </span>
          </div>
        </div>

        <ul class="off-canvas-list">
          {if $User.SignedIn}
          {profile_link text="Profile"}
          {inbox_link text="Inbox"}
          {bookmarks_link text="Bookmarks"}
          {drafts_link text="Drafts"}
          {dashboard_link}
          {signinout_link}
          {/if}
        </ul>
      </aside>



      <section class="sub-header hidden-xs">
        <div class="big-search">
          {searchbox}
        </div>
      </section>

      <div class="breadcrumb-container">
        {foundation_breadcrumbs}
      </div>



      <main class="row">

        <div class="page-content">
          <div class="is-content">
            {asset name="Content"}
          </div>
          <div class="is-content">
            {asset name="OnlineNow"}
          </div>
        </div>


        <div class="page-sidebar">
          {asset name="Panel"}
          <div class="is-content">
            {theme_partial name="ads"}
          </div>
        </div>
      </main>

      <div class="global-footer">
        <div class="footer-links">
          <ul>
            <li><a href="{link path="home"}">Forum Home</a></li>
            {if $User.SignedIn} {profile_link text="Profile"} {/if}
            {discussions_link}
            {activity_link}
          </ul>
        </div>

        <div class="footer-main">
          {theme_partial name="footer"}

          <a href="http://vanillaforums.org">
            <div class="footer-logo"></div>
          </a>

          {asset name="Foot"}
        </div>

        <div class="footer-copyright">
            &copy; {$smarty.now|date_format:"%Y"} Copyright. CodeSequence, All Rights Reserved.

            {theme_partial name="social"}
        </div>
      </div>

      <a class="exit-off-canvas"></a>

    </div>
  </div>

  {event name="AfterBody"}

  <!-- Initialize Foundation -->
  <script>jQuery(document).foundation();</script>


</body>
</html>
