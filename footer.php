
<script>
// hack to override the gist default formatting and strip some items
// I love github, but I think the extra stuff is ugly/distracting
$(".gist").before("<link>");
    css = $("link:last");
    css.attr({
      rel:  "stylesheet",
      type: "text/css",
      href: "http://wes.skeweredrook.com/mp-content/themes/wes.skeweredrook.com-theme/css/style.css"
    });
//$("span.update-time").each(function() { 
 // var updateTime = new Date(+$(this).text());
 // $(this).text(updateTime.toString());
//});
</script> 
</div>
</div>
