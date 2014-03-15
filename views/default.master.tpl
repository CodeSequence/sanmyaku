<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {asset name="Head"}
  </head>
  <body id="{$BodyID}" class="{$BodyClass}">

    <div class="contain-to-grid">
      <nav class="top-bar" data-topbar>
        <ul class="title-area">
          <li class="name">
            <h1><a href="{link path="home"}">{logo}</a></h1>
          </li>
          <li class="toggle-topbar menu-icon"><a href="#">{t c="Menu"}</a></li>
        </ul>

        <section class="top-bar-section">
          <!-- Right Nav Section -->
          <ul class="right">
            {if $User.SignedIn}
              <li class="has-dropdown">
                <a href="#">{$User.Name}</a>
                <ul class="dropdown">
                  {profile_link text="Profile"}
                  {inbox_link text="Inbox"}
                  {bookmarks_link text="Bookmarks"}
                  {drafts_link text="Drafts"}
                  {dashboard_link}
                  {signinout_link}
                </ul>
              </li>
            {else}
              <li>{link path="register" text="Register"}</li>
              <li>{link path="signin" text="Sign In" target="current"}</li>
            {/if}
          </ul>

          <!-- Left Nav Section -->
          <ul class="left">
            {categories_link}
            {discussions_link}
            {activity_link}
            {custom_menu}
          </ul>
        </section>
      </nav>
    </div>

    <main class="row">
      <div class="page-content">
        {asset name="Content"}
      </div>

      <div class="page-sidebar">
        {asset name="Panel"}
      </div>
    </main>

    {event name="AfterBody"}

    <!-- Initialize Foundation -->
    <script>jQuery(document).foundation();</script>
  </body>
</html>
