
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="he" dir="ltr" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="he" dir="ltr"> <!--<![endif]-->

<head>
  <meta charset="utf-8" />
  <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
  <meta name="language" content="he">
  <title>weShare</title>

  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
  <link rel="stylesheet" href="css/weShare.css" />
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <!--[if lt IE 9]>
  <script>
  document.createElement('header');
  document.createElement('nav');
  document.createElement('section');
  document.createElement('article');
  document.createElement('aside');
  document.createElement('footer');
  document.createElement('hgroup');
  </script>
  <![endif]-->
</head>
<body>
  <header>
    <div class='header_container'>
      <div class='container'>
        <div class='logo'>
          <h2><a href="/">We Share</a></h2>
          <div class="seperator"></div>
        </div>
        <div class='main_nav'>
          <div class='menu'>
            <a class='nav_link' href="/logout">התנתק</a><div class="seperator right_sep"></div>
          </div>
          <div class='menu cssmenu'>
            <div class="seperator left_sep"></div>
            <ul>
               <li class='has-sub '><a href='#' class='nav_link'><span>פרופיל<span class='notification'> (יש לך שתי הודעות חדשות) </span></a>
                  <ul>
                     <li class='has-sub '><a href='#'><span>פרופיל</span></a>
                     </li>
                     <li class='has-sub '><a href='#'><span>הודעות</span></a>
                     </li>
                     <li class='has-sub '><a href='#'><span>2 הודעות חדשות</span></a>
                        <ul>
                           <li><a href='#'><span>משה קיבל את הטלפון שלך</span></a></li>
                           <li><a href='#'><span>חיים קיבל את הטלפון שלך</span></a></li>
                        </ul>
                     </li>
                     
                  </ul>
               </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class='clear'></div>
  <div class='profile'>
    <div class='container'>
      <div class='span8'>
        <div class='personal_details'>
          <div class='details'>
            <div class='name'>
              <h2>משה כהן</h2>
            </div>
            <div class='email'>moshe@gmail.com</div>
            <div class='adress'>פתח תקוויה ריטב הנסגר 23</div>
            <div class='phone'>05489712331</div>
            <div class='gender'>זכר</div>
            <div class='rating'>
              <div class='seller'>דירוג משכיר: 
                <img src="/images/start_icon16.png" class='inline' width='16' height='auto'/>
                <img src="/images/start_icon16.png" class='inline' width='16' height='auto'/>
                <img src="/images/start_icon16.png" class='inline' width='16' height='auto'/>
                <img src="/images/start_icon16.png" class='inline' width='16' height='auto'/>
              </div>
              <div class='taker'>דירוג שוכר: 
                <img src="/images/start_icon16.png" class='inline' width='16' height='auto'/>
                <img src="/images/start_icon16.png" class='inline' width='16' height='auto'/>
                <img src="/images/start_icon16.png" class='inline' width='16' height='auto'/>
                <img src="/images/start_icon16.png" class='inline' width='16' height='auto'/>
              </div>
            </div>
          </div>
          <div class='profile_image'>
            <img src="http://lorempixel.com/300/300/people" class='img-polaroid' />
          </div>
        </div>
        <div class='clear'></div>
        <div class='latest_msgs'>
          <div class='msg'>
            <div class='msg_header'>
              <i class='icon-remove'></i>
            </div>
            <div class='msg_body'>
              <div>
                שמולקים ביקש את הטלפון שלך בהודעה <a href="/post22">הזאת</a> 
                <br>
                האם היית בינכים עיסקה?
              </div>
            </div>
            <div class='msg_actions'>
              <button type="button" class='msg_accept msg_action btn btn-success'>כן</button>
              <button type="button" class='msg_deniey msg_action btn-danger btn'>לא</button>
              <button type="button" class='msg_later msg_action btn btn-warning'>לא יצר קשר עדיין</button>
              <div class='clear'></div>
            </div>
          </div>
          <div class='msg'>
            <div class='msg_header'>
              <i class='icon-remove'></i>
            </div>
            <div class='msg_body'>
              <div>
                שמולקים ביקש את הטלפון שלך בהודעה <a href="/post22">הזאת</a> 
                <br>
                האם היית בינכים עיסקה?
              </div>
            </div>
            <div class='msg_actions'>
              <button type="button" class='msg_accept msg_action btn btn-success'>כן</button>
              <button type="button" class='msg_deniey msg_action btn-danger btn'>לא</button>
              <button type="button" class='msg_later msg_action btn btn-warning'>לא יצר קשר עדיין</button>
              <div class='clear'></div>
            </div>
          </div>
          <div class='more_messages'>
            <a href='/messages'>לקראיית הודעות ישנות יותר לחץ כאן</a>
          </div>
        </div>
      </div>
      <div class='span3'>
        <div class='your_products side_menu'>
          <h2>מוצרים שלך</h2>
          <ul>
            <li>
              <h5><a href='/prod2354'>איפון 5</a></h5>          
            </li>
            <li>
              <h5><a href='/prod2354'>מברגה חשמלית</a></h5>
            </li>
            <li>
              <h5><a href='/prod2354'>ראוטר</a></h5>
            </li>
            <li>
              <h5><a href='/prod2354'>צמר גפן מתוק</a></h5>
            </li>
          </ul>
        </div>
        <div class='last_viewed side_menu'>
          <h2>המוצרים האחרונים שחיפשת</h2>
          <ul>
            <li>
              <h5><a href='/prod2354'>איפון 5</a></h5>          
            </li>
            <li>
              <h5><a href='/prod2354'>מברגה חשמלית</a></h5>
            </li>
            <li>
              <h5><a href='/prod2354'>ראוטר</a></h5>
            </li>
            <li>
              <h5><a href='/prod2354'>צמר גפן מתוק</a></h5>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class='container'>
      <div class='footer_nav'><h3>שאלות נפוצות</h3>
        <ul>
          <li><a href='takanon'>תקנון</a></li>
          <li><a href='takanon'>תקנון</a></li>
          <li><a href='takanon'>תקנון</a></li>
          <li><a href='takanon'>תקנון</a></li>
        </ul>
      </div>
      <div class='footer_nav'><h3>לינקים שימושיים</h3>
        <ul>
          <li><a href='takanon'>תקנון</a></li>
          <li><a href='takanon'>תקנון</a></li>
          <li><a href='takanon'>תקנון</a></li>
          <li><a href='takanon'>תקנון</a></li>
        </ul>
      </div>
      <div class='footer_nav'><h3>צור קשר</h3>
        <ul>
          <li><a href='takanon'>תקנון</a></li>
          <li><a href='takanon'>תקנון</a></li>
          <li><a href='takanon'>תקנון</a></li>
          <li><a href='takanon'>תקנון</a></li>
        </ul>
      </div>
    </div>
  </footer>
  <div class='clear'></div>
</body>
</html>
