<div class='product'>
  <div class='container'>
    <div class='prod_description span6'>
      <h2 class='prod_title'><?php echo $object_info['object_spacefic_data']['name']; ?></h5>
      <div class='details'>
        <dl class="dl-horizontal">
          <dt>אזור</dt>
          <dd><?php echo $object_info['object_spacefic_data']['area']; ?></dd>
          <dt>מקום איסוף</dt>
          <dd><?php echo $object_info['object_spacefic_data']['adress']; ?></dd>
          <dt>פקדון</dt>
          <dd><?php echo $object_info['object_spacefic_data']['deposit']; ?></dd>
          <dt>מחיר להיום</dt>
          <dd><?php echo $object_info['object_spacefic_data']['price']; ?></dd>
        </dl>
      </div>
      <div class='contact'>
        <div class='contact_details'>
          <span class='phone'><?php echo $object_info['object_spacefic_data']['phone']; ?></span>
          לבירור ולהזמנה תתקשר
        </div>
        <!-- <div class='availability'>כרגע זמין</div> -->
      </div>
      <div class='seller_details'>
        <div class='seller_name'>
          <a href='seller23'>TODO: seller photo, name and link to facebook</a>
          <?php if(!empty($user_info['renter_score'])) : ?>
              <div class='seller_rating'>דירוג משכיר: <?php echo($user_info['renter_score']) ?> <br><!-- TODO number of voters -->
                <?php for ( $i = 1; $i <= floor($user_info['renter_score']); $i += 1): ?>
                  <img src="<?php echo base_url(); ?>images/start_icon16.png" class='inline' width='16' height='auto' title='<?php echo($user_info['renter_score']) ?>'/>
                <?php endfor ?>
              </div>
            <?php endif ?>
        </div>
      </div>
    </div>
    <div class='prod_images offeset2 span5'>
      <?php if (!empty($object_images)): ?>
        <div class='main_images'>
          <img src="<?php echo $object_images['url'];?>" class='img-polaroid' />
        </div>
      <?php else: ?>
        <div class='main_images'>
          <img src="<?php echo base_url()?>images/default_product.jpg" class='img-polaroid' />
        </div>
      <?php endif ?>
      <?php if(count($object_images) > 1): ?>
        <div class='small_images'>
          <?php foreach ($object_images as $image): ?>
            <img src="<?php echo $image['url'];?>" />
          <?php endforeach ?>
        </div>
      <?php endif ?>

    </div>
    <div class='clear'></div>
    <?php if(!empty($object_info['object_spacefic_data']['extra_info'])): ?>
      <div class='prod_technical_details'>
        <h3> פרטים טכניים</h3>
        <div class='detail_group'>
          <dl class="dl-horizontal">
            <?php 
              $i = 0;
              //print only even extra info
              foreach ($object_info['object_spacefic_data']['extra_info'] as $key => $info):
            ?>
              <?php if(($i % 2) == 0): ?>
                <dt><?php echo $key;?></dt>
                <dd><?php echo $info; ?></dd>
              <?php endif ?>
              <?php $i++;/*increment i*/ ?>
            <?php endforeach ?>
          </dl> 
        </div>
        <div class='detail_group'>
          <dl class="dl-horizontal">
            <?php 
              $i = 0;
              //print only odd extra info
              foreach ($object_info['object_spacefic_data']['extra_info'] as $key => $info):
            ?>
              <?php if(($i % 2) == 1): ?>
                <dt><?php echo $key;?></dt>
                <dd><?php echo $info; ?></dd>
              <?php endif ?>
              <?php $i++;/*increment i*/ ?>
            <?php endforeach ?>
          </dl>
        </div>
        <div class='clear'></div>
      </div>
    <?php endif?>
    <?php if(!empty($object_info['object_spacefic_data']['description'])): ?>
      <div class='more_details'>
        <h3>פרטים נוספים</h3>
        <p>
          <?php echo $object_info['object_spacefic_data']['description'];?>
        </p>
      </div>
    <?php endif ?>
  </div>
</div>
