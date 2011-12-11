<script>
/* this is a workaround for the enqueue style not working */
$("head").append("<link>");
    css = $("head").children(":last");
    css.attr({
      rel:  "stylesheet",
      type: "text/css",
      href: "http://fonts.googleapis.com/css?family=Droid+Sans+Mono|Droid+Serif:400,400italic"
    });
</script>
<section>
<header id="main">
<div id="header">
  <div id="title">Commentary by Wes</div>
  <div id="subtitle">Ramblings about programming, chess, languages, etc.</div>
</div>
</header>
</section>
<div id="container">
<div id="articles">
