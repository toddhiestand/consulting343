<?php $i = 0; ?><!-- add a number to each section to make calling them easier --> 

<?php while(the_flexible_field("page_content")): ?>
  
<?php $i++; ?>

 <?php if(get_row_layout() == "multi-column_content"): // layout: Main Content with custom columns and widths ?> 
    <div id="<?php echo "scrollsection{$i}";?>" class="wide-container content-section <?php the_sub_field('background_color'); ?> <?php the_sub_field('padding_setting'); ?>">
      <div class="container <?php the_sub_field('container_width');?>">
      
        <?php if ('yes' == get_sub_field('add_title')) { ?>   
              <div class="row title">
                <h3 class="<?php the_sub_field('heading_type'); ?>"><?php the_sub_field('the_title'); ?></h3>
              </div>
        <?php } ?>

        <?php if ('yes' == get_sub_field('add_intro')) { ?>   
              <div class="row intro">
           <p><?php the_sub_field('intro'); ?></p>
              </div>
        <?php } ?>

        <?php if(get_sub_field('columns') == "2") { ?>
          <div class="row gutters">
            <?php if(get_sub_field('layout_type_2_columns') == "fiftyfifty") { ?>
              <div class="col span_12">
                <p><?php the_sub_field('column_1'); ?></p>
              </div>
              <div class="col span_12">
                <p><?php the_sub_field('column_2'); ?></p>
              </div>
            <?php } ?>

            <?php if(get_sub_field('layout_type_2_columns') == "fourtysixty") { ?>
              <div class="col span_10">
                <p><?php the_sub_field('column_1'); ?></p>
              </div>
              <div class="col span_14">
                <p><?php the_sub_field('column_2'); ?></p>
              </div>
            <?php } ?>

            <?php if(get_sub_field('layout_type_2_columns') == "sixtyfourty") { ?>
              <div class="col span_14">
                <p><?php the_sub_field('column_1'); ?></p>
              </div>
              <div class="col span_10">
                <p><?php the_sub_field('column_2'); ?></p>
              </div>
            <?php } ?>

             <?php if(get_sub_field('layout_type_2_columns') == "thirtyseventy") { ?>
              <div class="col span_8">
                <p><?php the_sub_field('column_1'); ?></p>
              </div>
              <div class="col span_16">
                <p><?php the_sub_field('column_2'); ?></p>
              </div>
            <?php } ?>

             <?php if(get_sub_field('layout_type_2_columns') == "seventythirty") { ?>
              <div class="col span_18">
                <p><?php the_sub_field('column_1'); ?></p>
              </div>
              <div class="col span_6">
                <p><?php the_sub_field('column_2'); ?></p>
              </div>
            <?php } ?>
          </div>

        <?php } ?>

        <?php if(get_sub_field('columns') == "3") { ?>
          <div class="row gutters">
            <?php if(get_sub_field('layout_type_3_columns') == "even") { ?>  
              <div class="col span_8">
                <p><?php the_sub_field('column_1'); ?></p>
              </div>
              <div class="col span_8">
                <p><?php the_sub_field('column_2'); ?></p>
              </div>
              <div class="col span_8">
                <p><?php the_sub_field('column_3'); ?></p>
              </div>
            <?php } ?>

            <?php if(get_sub_field('layout_type_3_columns') == "bigfirst") { ?>  
              <div class="col span_12">
                <p><?php the_sub_field('column_1'); ?></p>
              </div>
              <div class="col span_6">
                <p><?php the_sub_field('column_2'); ?></p>
              </div>
              <div class="col span_6">
                <p><?php the_sub_field('column_3'); ?></p>
              </div>
            <?php } ?>

            <?php if(get_sub_field('layout_type_3_columns') == "bigmiddle") { ?>  
              <div class="col span_6">
                <p><?php the_sub_field('column_1'); ?></p>
              </div>
              <div class="col span_12">
                <p><?php the_sub_field('column_2'); ?></p>
              </div>
              <div class="col span_6">
                <p><?php the_sub_field('column_3'); ?></p>
              </div>
            <?php } ?>

            <?php if(get_sub_field('layout_type_3_columns') == "biglast") { ?>  
              <div class="col span_6">
                <p><?php the_sub_field('column_1'); ?></p>
              </div>
              <div class="col span_6">
                <p><?php the_sub_field('column_2'); ?></p>
              </div>
              <div class="col span_12">
                <p><?php the_sub_field('column_3'); ?></p>
              </div>
            <?php } ?>
          </div>
        <?php } ?>

        <?php if(get_sub_field('columns') == "4") { ?>
          <div class="row gutters">
            <div class="col span_6">
              <p><?php the_sub_field('column_1'); ?></p>
            </div>
            <div class="col span_6">
              <p><?php the_sub_field('column_2'); ?></p>
            </div>
            <div class="col span_6">
              <p><?php the_sub_field('column_3'); ?></p>
            </div>
            <div class="col span_6">
              <p><?php the_sub_field('column_4'); ?></p>
            </div>
          </div>
        <?php } ?>    
      </div>
    </div>

    <?php elseif(get_row_layout() == "single_column_content"): // layout: Large Quote with Background Image ?>

    <div id="<?php echo "scrollsection{$i}";?>" class="wide-container content-section <?php the_sub_field('padding_setting'); ?> <?php the_sub_field('background_color'); ?>">
      <div class="container <?php the_sub_field('container_width');?>">
      
        <?php if ('yes' == get_sub_field('add_title')) { ?>   
              <div class="row title">
                <h3 class="<?php the_sub_field('heading_type'); ?>"><?php the_sub_field('the_title'); ?></h3>
              </div>
        <?php } ?>

        <?php if ('yes' == get_sub_field('add_intro')) { ?>   
            
              <div class="row intro">
           <p><?php the_sub_field('intro'); ?></p>
              </div>
          
        <?php } ?>
        
          <div class="row">
            <div class="col span_24">
              <p><?php the_sub_field('content'); ?></p>
            </div>
          </div>

      </div>
    </div>

  <?php endif; ?><!-- end flexible sections -->
<?php endwhile; ?><!-- end flexible fields -->