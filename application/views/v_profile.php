<?php 
  echo var_dump($personal_info);
?>

<div class='profile'>
  <div class='container'>
    <div class='span8'>
      <div class='personal_details'>
        <div class='details'>
          <div class='name'>
            <h2><?php echo($personal_info['first_name']." ".$personal_info['last_name']) ?></h2>
          </div>
          <div class='email'><?php echo($personal_info['email']) ?></div>
          <?php if(!empty($personal_info['adress'])) : ?>
            <div class='adress'><?php echo($personal_info['adress']) ?></div>   
          <?php endif ?>
          <?php if(!empty($personal_info['phone'])) : ?>
            <div class='phone'><?php echo($personal_info['phone']) ?></div>   
          <?php endif ?>
          <?php if(!empty($personal_info['gender'])) : ?>
            <div class='gender'><?php echo($personal_info['gender']) ?></div>   
          <?php endif ?>
          <div class='rating'>
            <?php if(!empty($personal_info['hire_score'])) : ?>
              <div class='seller'>דירוג משכיר: <?php echo($personal_info['hire_score']) ?> <br><!-- TODO number of voters -->
                <?php for ( $i = 1; $i <= floor($personal_info['hire_score']); $i += 1): ?>
                  <img src="<?php echo base_url(); ?>images/start_icon16.png" class='inline' width='16' height='auto' title='<?php echo($personal_info['hire_score']) ?>'/>
                <?php endfor ?>
              </div>
            <?php endif ?>
            <?php if(!empty($personal_info['renter_score'])) : ?>
            <div class='taker'>דירוג שוכר:  <?php echo($personal_info['renter_score']) ?> <br><!-- TODO number of voters -->
              <?php for ( $i = 1; $i <= floor($personal_info['renter_score']); $i += 1): ?>
                  <img src="<?php echo base_url(); ?>images/start_icon16.png" class='inline' width='16' height='auto' title='<?php echo($personal_info['renter_score']) ?>'/>
              <?php endfor ?>
            </div>
            <?php endif ?>
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
