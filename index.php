<?php
mp_get_header(); // Without this, the clouds will fall from the sky...
$mp = mongopress_load_mp(); $mp_options = $mp->options();
$mp_perma = mongopress_load_perma(); 
get_template_part('header');
$object_format = array(
     'order_by' => 'created',
     'order' => 'desc',
     'style' => 'array'
);
$objects = mp_get_content($object_format);
foreach($objects as $object) {
  $this_objects_content = apply_filters('mp_shortcodes', $object['custom']['abstract']);
  $this_objects_slug = $mp->get_slug($object['slug_id']);
  $this_objects_type = $object['type'];
  $date = date_create();
  date_timestamp_set($date, $object['updated']);
  echo '<article data-updated="'.$object['updated'].'" class="object '.$this_objects_type.'">'."\n";
  echo '  <h3 class="header"><a href="'.$mp_options['root_url'].$this_objects_slug.'/">'.$object['title'].'</span></a></h3>'."\n";
  echo '  <div class="update-time">Posted at <span class="update-time">'.date_format($date, 'Y-m-d H:i:s').'</span> EST</div>';
  echo '  <div class="mp-content" data-slug="'.$this_objects_slug.'">'.$this_objects_content.'</div>'."\n";
  echo '  <a href="'.$mp_options['root_url'].$this_objects_slug.'/">Read more...</a>';
  echo '</article>'."\n";
}
get_template_part("footer");
mp_get_footer(); // Without this, the clouds will fall from the sky...
?>
