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
          <?php if(!empty($personal_info['pic_url'])): ?>
            <img src="<?php echo(base_url().$personal_info['pic_url']);?>" class='img-polaroid' />
          <?php else: ?>
            <img src="<?php echo base_url()?>images/default_profile.jpg" class='img-polaroid' />
          <?php endif ?>
        </div>
      </div>
      <div class='clear'></div>
      <?php if(!empty($messages)): ?>
        <div class='latest_msgs'>
        <?php foreach ($messages as $message):?>  
          <div class='msg'>
            <div class='msg_header'>
              <i class='icon-remove'></i>
            </div>
            <div class='msg_body'>
              <div>
                <?php echo $message;?>
              </div>
            </div>
            <div class='msg_actions'>
              <button type="button" class='msg_accept msg_action btn btn-success'>כן</button>
              <button type="button" class='msg_deniey msg_action btn-danger btn'>לא</button>
              <button type="button" class='msg_later msg_action btn btn-warning'>לא יצר קשר עדיין</button>
              <div class='clear'></div>
            </div>
          </div>
        <?php endforeach ?>
        <div class='more_messages'>
          <a href='/messages'>לקראיית הודעות ישנות יותר לחץ כאן</a>
        </div>
        </div>
      <?php endif ?>
    </div>
    <div class='span3'>
      <div class='your_products side_menu'>
        <h2>מוצרים שלך</h2>
        <?php if (!empty($your_products)):?>
          <ul>
            <?php foreach ($your_products as $product):?> 
              <li>
                <h5><a href='<?php echo $product['link'];?>'><?php echo $product['name'];?></a></h5>          
              </li> 
            <?php endforeach ?>
          </ul>
        <?php else: ?>
          <div class='no_products'>אין לך עדיין מוצרים</div>
        <?php endif ?>
      </div>
      <div class='last_viewed side_menu'>
        <h2>המוצרים האחרונים שחיפשת</h2>
        <?php if (!empty($products_you_look_for)):?>
          <ul>
            <?php foreach ($products_you_look_for as $product):?> 
              <li>
                <h5><a href='<?php echo $product['link'];?>'><?php echo $product['name'];?></a></h5>          
              </li> 
            <?php endforeach ?>
          </ul>
        <?php else: ?>
          <div class='no_products'>עדיין לא ביקשת מוצר ספציפי</div>
        <?php endif ?>
      </div>
    </div>
  </div>
</div>
