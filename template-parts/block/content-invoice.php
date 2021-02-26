<?php/** * Block Name: Invoice * Category: layout * * @var array $block */$slug     = str_replace( 'acf/', '', $block['name'] );$block_id = $slug . '-' . $block['id'];$bg_color      = get_field( "invoice_background_color" );$section_style = '';if ( $bg_color ) {    $section_style .= "background-color:" . $bg_color;}?>  <section class="invoice" style="<?= $section_style; ?>">      <?php      $header = get_field( "invoice_header" );      if ( $header ) :?>        <div class="invoice__header"><?php echo $header; ?></div>      <?php endif; ?>      <?php      $invoice_id = get_field( "invoice_id" );      if ( $invoice_id ) :?>        <p class="invoice__id"><?php echo $invoice_id; ?></p>      <?php endif; ?>      <?php      $invoice_due_date = get_field( "invoice_due_date" );      if ( $invoice_due_date ) :?>        <p class="invoice__due_date"><?php echo $invoice_due_date; ?></p>      <?php endif; ?>      <?php      $invoice_prepared_for = get_field( "invoice_prepared_for" );      if ( $invoice_prepared_for ) :?>        <p class="invoice__prepared_for"><?php echo $invoice_prepared_for; ?></p>      <?php endif; ?>      <?php      $invoice_project = get_field( "invoice_project" );      if ( $invoice_project ) :?>        <p class="invoice__project"><?php echo $invoice_project; ?></p>      <?php endif; ?>      <?php if ( have_rows( 'invoice_tasks' ) ) : ?>          <?php while ( have_rows( 'invoice_tasks' ) ) : the_row(); ?>              <?php              $task_title= get_sub_field( "task_title" );              if ( $task_title) :?>                <h2 class="task__title"><?php echo $task_title; ?></h2>              <?php endif; ?>              <?php              $task_description= get_sub_field( "task_description" );              if ( $task_description) :?>                <div class="task__description"><?php echo $task_description; ?></div>              <?php endif; ?>              <?php              $hours= get_sub_field( "hours" );              if ( $hours) :?>                <span class="task__hours"><?php echo $hours; ?></span>              <?php endif; ?>              <?php              $rate_per_hour= get_sub_field( "rate_per_hour" );              if ( $rate_per_hour) :?>                <span class="task__rate_per_hour">$<?php echo $rate_per_hour; ?></span>              <?php endif; ?>          <?php endwhile; ?>      <?php endif; ?>      <?php      $invoice_signature= get_field( "invoice_signature" );      if ( $invoice_signature) :?>        <div class="invoice__signature"><?php echo $invoice_signature; ?></div>      <?php endif; ?>  </section><?php