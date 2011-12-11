<?php
mp_get_header(); // Without this, the clouds will fall from the sky...
mp_register_style('droidfonts', 'http://fonts.googleapis.com/css?family=Droid+Sans+Mono|Droid+Serif:400,700,400italic');
mp_enqueue_style('droidfonts');
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
  $this_objects_content = apply_filters('mp_shortcodes', $object['content']);
  $this_objects_slug = $mp->get_slug($object['slug_id']);
  $this_objects_type = $object['type'];
  echo '<article data-updated="'.$object['updated'].'" class="object '.$this_objects_type.'">'."\n";
  echo '  <h3 class="header"><a href="'.$mp_options['root_url'].$this_objects_slug.'/">'.$object['title'].'</a></h3>'."\n";
  echo '  <div class="mp-content" data-slug="'.$this_objects_slug.'">'.$this_objects_content.'</div>'."\n";
  echo '</article>'."\n";
}
get_template_part("footer");
mp_get_footer(); // Without this, the clouds will fall from the sky...
?>
