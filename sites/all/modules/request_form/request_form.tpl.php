<div class="wrapper">

  <?php if($name): ?>
    <?php print render($name); ?>
  <?php endif; ?>
  
  <?php if($company): ?>
    <?php print render($company); ?>
  <?php endif; ?>
  
  <?php if($count_of_employees): ?>
    <?php print render($count_of_employees); ?>
  <?php endif; ?>
  
  <?php if($city): ?>
    <?php print render($city); ?>
  <?php endif; ?>
  
  <?php if($contact_information): ?>
    <?php print render($contact_information); ?>
  <?php endif; ?>
  
  <?php if($submit): ?>
    <?php print render($submit); ?>
  <?php endif; ?>
  
  <?php print drupal_render_children($form); ?>
  
</div>