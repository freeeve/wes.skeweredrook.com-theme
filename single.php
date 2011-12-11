<?php
mp_get_header(); // Without this, the clouds will fall from the sky...
$object_format = array(
     'type' => false,
     'style' => 'single',
     'can_query' => true
);
get_template_part("header");
mp_content($object_format);
echo '<div id="disqus_thread"></div>';
echo '<script type="text/javascript">';
echo 'var disqus_shortname = "commentarybywes";';
echo '(function() {';
echo "var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;";
echo "dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';";
echo "(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);";
echo '})();';
echo '</script>';
echo '<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>';
get_template_part("footer");
mp_get_footer(); // Without this, the clouds will fall from the sky...
?>
