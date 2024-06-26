<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="styles/style2.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
  </head>
  <body>
  <header class="header">
    <nav class="header__panel">
      <div class="header__logo">
        <a href="#!"><img src="images/Escape.svg" alt="Escape logo"></a>
      </div>
      <ul class="header__panel-navigation">
        <li class="header__panel-menu"><a href="#!" class="header__menu-link">HOME</a></li>
        <li class="header__panel-menu"><a href="#!" class="header__menu-link">CATEGORIES</a></li>
        <li class="header__panel-menu"><a href="#!" class="header__menu-link">ABOUT</a></li>
        <li class="header__panel-menu"><a href="#!" class="header__menu-link">CONTACT</a></li>
      </ul>
    </nav>
    <div class="header__cite-block">
      <h1 class="header__cite">Let's do it together.</h1>
      <div class="header__notion">
        <p>We travel the world in search of stories. Come along for the ride.</p>
      </div>
      <div class="header__button">
        <a href="#!" class="header__menu-link">View Latest Posts</a>
      </div>
    </div>
  </header>
  <main>
    <section class="main-menu">
      <nav class="main-menu__navigation">
        <ul>
          <li class="main-menu__selection"><a href="#!" class="main-menu__link">Nature</a></li>
          <li class="main-menu__selection"><a href="#!" class="main-menu__link">Photography</a></li>
          <li class="main-menu__selection"><a href="#!" class="main-menu__link">Relaxation</a></li>
          <li class="main-menu__selection"><a href="#!" class="main-menu__link">Vacation</a></li>
          <li class="main-menu__selection"><a href="#!" class="main-menu__link">Travel</a></li>
          <li class="main-menu__selection"><a href="#!" class="main-menu__link">Adventure</a></li>
        </ul>
      </nav>
    </section>
    <section class="declaration-section">
        <!--first block-->
        <div class="featured-posts">
          <div class="featured-posts__title">
            <h1 class="featured-posts__caption">Featured Posts</h1>
            <div class="line"></div>
          </div>
          <div class="featured-posts__block"> 
            <!--Two paths-->
            <div class="featured-posts__the-road-ahead"> <!--path 1-->
              <div class="featured-posts__post-block_left">
                <h1 class="featured-posts__post-head_left">The Road Ahead</h1>
                <div class="featured-posts__post-annotation_left"><p>The road ahead might be paved - it might not be.</p></div>
                <div class="featured-posts__profile">
                  <div class="featured-posts__person">
                    <div class="featured-posts__post-avatar_mat"></div>
                    <div class="featured-posts__post-person_mat"><p>Mat Vogels</p></div>
                  </div>
                  <div class="featured-posts__post-datestamp"><p>September 25, 2015</p></div>
                </div>
              </div>
            </div>
            <div class="featured-posts__from-top-down"> <!--path 2--> 
              <div class="featured-posts__post-button"><a href="#!" class="featured-posts__post-link">ADVENTURE</a></div>
              <div class="featured-posts__post-block_right">
                <h1 class="featured-posts__post-head_right">From Top Down</h1>
                <div class="featured-posts__post-annotation_right"><p>Once a year, go someplace you've never been before.</p></div>
                <div class="featured-posts__profile">
                  <div class="featured-posts__person">
                    <div class="featured-posts__post-avatar_william"></div>
                    <div class="featured-posts__post-person_william"><p>William Wong</p></div>
                  </div>
                  <div class="featured-posts__post-datestamp"><p>September 25, 2015</p></div>
                </div>
              </div>
            </div> 
          </div>
        </div>
        <!--second block-->
        
        <div class="recent-posts">
          <div class="recent-posts__title">
            <h1 class="recent-posts__caption">Most Recent</h1>
            <div class="line"></div>
          </div>
          <div class="recent-posts__block"> 
            <!--Six paths--> 
              <div class="recent-posts__post-block"> <!--1--> 
                <div class="recent-posts__post-wallpaper"><img src="images/Balloons.svg" alt="Balloons"></div> <!--image-->
                <div class="recent-posts__post-preface">
                  <div><h3 class="recent-posts__post-cite">Still Standing Tall</h3></div>
                  <div class="recent-posts__post-notion"><p>Life begins at the end of your comfort zone.</p></div>
                </div>
                <div class="longline"></div>
                <div class="recent-posts__post-profile">
                  <div class="recent-posts__profile-block">
                    <div class="recent-posts__post-avatar_william"></div>
                    <div class="recent-posts__post-person_william"><p>William Wong</p></div>
                  </div>
                  <div class="recent-posts__post-datestamp"><p>9/25/2015</p></div>
                </div>
              </div> 
              <div class="recent-posts__post-block"> <!--2-->
                <div class="recent-posts__post-wallpaper"><img src="images/Bridge.svg"></div> <!--image-->
                <div class="recent-posts__post-preface">
                  <div><h3 class="recent-posts__post-cite">Sunny Side Up</h3></div>
                  <div class="recent-posts__post-notion"><p>No place is ever as bad as they tell you it's going to be.</p></div>
                </div>
                <div class="longline"></div>
                <div class="recent-posts__post-profile">
                  <div class="recent-posts__profile-block">
                    <div class="recent-posts__post-avatar_mat"></div>
                    <div class="recent-posts__post-person_mat"><p>Mat Vogels</p></div>
                  </div>
                  <div class="recent-posts__post-datestamp"><p>9/25/2015</p></div>
                </div>
              </div>  
              <div class="recent-posts__post-block"> <!--3--> 
                <div class="recent-posts__post-wallpaper"><img src="images/Sunset.svg"></div> <!--image-->
                <div class="recent-posts__post-preface">
                  <div><h3 class="recent-posts__post-cite">Water Falls</h3></div>
                  <div class="recent-posts__post-notion"><p>We travel not to escape life, but for life not escape us.</p></div>
                </div>
                <div class="longline"></div>
                <div class="recent-posts__post-profile">
                  <div class="recent-posts__profile-block">
                    <div class="recent-posts__post-avatar_mat"></div>
                    <div class="recent-posts__post-person_mat"><p>Mat Vogels</p></div>
                  </div>
                  <div class="recent-posts__post-datestamp"><p>9/25/2015</p></div>
                </div>
              </div> 
              <div class="recent-posts__post-block"> <!--4-->
                <div class="recent-posts__post-wallpaper"><img src="images/Ocean.svg"></div> <!--image-->
                <div class="recent-posts__post-preface">
                  <h3 class="recent-posts__post-cite">Through the Mist</h3>
                  <div class="recent-posts__post-notion"><p>Travel makes you see what a tiny place you occupy the world.</p></div>
                </div>
                <div class="longline"></div>
                <div class="recent-posts__post-profile">
                  <div class="recent-posts__profile-block">
                    <div class="recent-posts__post-avatar_william"></div>
                    <div class="recent-posts__post-person_william"><p>William Wong</p></div>
                  </div>
                  <div class="recent-posts__post-datestamp"><p>9/25/2015</p></div>
                </div>
              </div>  
              <div class="recent-posts__post-block"> <!--5-->
                <div class="recent-posts__post-wallpaper"><img src="images/Haze.svg"></div> <!--image-->
                <div class="recent-posts__post-preface">
                  <div><h3 class="recent-posts__post-cite">Awaken Early</h3></div>
                  <div class="recent-posts__post-notion"><p>Not all those who wander are lost.</p></div>
                </div>
                <div class="longline"></div>
                <div class="recent-posts__post-profile">
                  <div class="recent-posts__profile-block">
                    <div class="recent-posts__post-avatar_mat"></div>
                    <div class="recent-posts__post-person_mat"><p>Mat Vogels</p></div>
                  </div>
                  <div class="recent-posts__post-datestamp"><p>9/25/2015</p></div>
                </div>
              </div>  
              <div class="recent-posts__post-block"> <!--6-->
                <div class="recent-posts__post-wallpaper"><img src="images/Waterfall.svg"></div> <!--image-->
                <div class="recent-posts__post-preface">
                  <div><h3 class="recent-posts__post-cite">Try it Always</h3></div>
                  <div class="recent-posts__post-notion"><p>The world is a book, and those who do not travel read only one page.</p></div>
                </div>
                <div class="longline"></div>
                <div class="recent-posts__post-profile">
                  <div class="recent-posts__profile-block">
                    <div class="recent-posts__post-avatar_mat"></div>
                    <div class="recent-posts__post-person_mat"><p>Mat Vogels</p></div>
                  </div>
                  <div class="recent-posts__post-datestamp"><p>9/25/2015</p></div>
                </div>
              </div>  
          </div>
        </div>

    </section>
  </main>
  <footer class="footer">
    <div class="footer__background-effect">
      <div class="footer__panel">
        <nav class="footer__panel-navigation">
          <a href="#!" class="footer__logo"><img src="images/Escape.svg" alt="Escape logo"></a>
          <ul class="footer__menu-navigation">
            <li class="footer__panel-menu"><a href="#!" class="footer__menu-link">HOME</a></li>
            <li class="footer__panel-menu"><a href="#!" class="footer__menu-link">CATEGORIES</a></li>
            <li class="footer__panel-menu"><a href="#!" class="footer__menu-link">ABOUT</a></li>
            <li class="footer__panel-menu"><a href="#!" class="footer__menu-link">CONTACT</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </footer>
  </body>
</html>