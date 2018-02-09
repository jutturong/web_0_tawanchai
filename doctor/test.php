<style>

a.tooltip {outline:none; }
a.tooltip strong {line-height:30px;}
a.tooltip:hover {text-decoration:none;}
a.tooltip span {
    z-index:10;display:none; padding:14px 20px;
    margin-top:60px; margin-left:-160px;
    width:300px; line-height:16px;
}
a.tooltip:hover span{
    display:inline; position:absolute;
    border:2px solid #FFF;  color:#EEE;
    background:#333 url(http://www.menucool.com/tooltip/cssttp/css-tooltip-gradient-bg.png) repeat-x 0 0;
}

.callout {z-index:20;position:absolute;border:0;top:-14px;left:120px;}

/*CSS3 extras*/
a.tooltip span
{
    border-radius:2px;
    box-shadow: 0px 0px 8px 4px #666;
    /*opacity: 0.8;*/
}

</style>




<a href="#" class="tooltip">
    <img src="http://www.menucool.com/tooltip/cssttp/css-tooltip-image.gif" />
    <span>
        <img class="callout" src="http://www.menucool.com/tooltip/cssttp/callout_black.gif" />
        <img src="http://www.menucool.com/tooltip/cssttp/css3-tooltip-image.png" style="float:right;" />
        <strong>CSS only Tooltip</strong><br />
        Pure CSS popup tooltips with clean semantic XHTML.
    </span>
</a>


<!--
<div class="fb-page" 
  data-href="https://www.facebook.com/facebook"
  data-width="380" 
  data-hide-cover="false"
  data-show-facepile="false"></div>
-->


<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your embedded comments code -->
<div class="fb-comment-embed"
   data-href="https://www.facebook.com/zuck/posts/10102735452532991?comment_id=1070233703036185"
   data-width="500"></div>


