<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('bulma/css/bulma.css') }}" rel="stylesheet">
  </head>

<body class="layout-default">
<section class="hero is-medium has-text-centered">
  <div class="hero-head">
    <div class="container">
      <nav class="nav">
        <!--div class="nav-left"> <a class="nav-item is-brand" href="http://bulma.io"> <img src="http://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox">Crisis Response </a> </div-->
        <div class="nav-left">
          <a class="nav-item is-active" href="http://hiso.or.th/"> Crisis Response </a>
        </div>
        
        <div class="nav-center"> <a class="nav-item" href="https://github.com/jgthms/bulma"> <span class="icon"> <i class="fa fa-github"></i> </span> </a> <a class="nav-item" href="https://twitter.com/jgthms"> <span class="icon"> <i class="fa fa-twitter"></i> </span> </a> </div>
        <span id="nav-toggle" class="nav-toggle"> <span></span> <span></span> <span></span> </span>
        <div id="nav-menu" class="nav-right nav-menu"> <a class="nav-item is-active" href="http://bulma.io/"> User  </a> <!--a class="is-hidden nav-item  " href="http://bulma.io/templates/"> <span>Templates</span> <span class="tag is-small is-success">New!</span> </a--> <a class="nav-item  " href="/documentation/overview/start/"> Noppon </a> <a class="nav-item " href="http://bulma.io/blog/"> Kumpdetch </a>
          <div class="nav-item">
            <div class="field is-grouped">
              <p class="control"> <a id="twitter"
            class="button"
            data-social-network="Twitter"
            data-social-action="tweet"
            data-social-target="http://bulma.io"
            target="_blank"
            href="https://twitter.com/intent/tweet?text=Bulma: a modern CSS framework based on Flexbox&url=http://bulma.io&via=jgthms"> <!--span class="icon"> <i class="fa fa-twitter"></i> </span--> <span>100 case</span> </a> </p>
              <p class="control"> 
                <!--a class="button is-primary" href="https://github.com/jgthms/bulma/archive/0.4.2.zip"> <span class="icon"> <i class="fa fa-download"></i> </span> <span>Download</span> </a--> 
                <a class="button is-primary" href="https://github.com/jgthms/bulma/archive/0.4.2.zip">  <span>Logout</span> </a> 
              </p>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <div class="hero-body">
    <div class="container">
      <h1 id="bulma" class="title"> Crisis Response </h1>
      <h2 id="modern-framework" class="subtitle"> ระบบรับเรื่องร้องเรียนและการให้คำปรึกษาข้อมูลสิทธิด้านเอดส์ </h2>
      <!--pre id="npm"><code>npm install bulma</code></pre-->
      <p id="download" class="hero-buttons">
      <!--div id="carbon" class="box"></div-->
      </p>
      <p id="download" class="hero-buttons"> 
        <a id="btn_new1" class="button ft1" href="INPUT_STATE1.php">แจ้งเรื่อง</a> 
        <a id="btn_new1" class="button ft1" href="INPUT_STATE1.php">จัดการเหตุ</a> 
        <a id="btn_new1" class="button ft1" href="INPUT_STATE1.php">รายงาน</a> 
      </p>

    </div>
  </div>
</section>
<footer class="footer">
  <div class="container">
    <div class="columns">
      <div class="column is-3">
        <div id="about" class="content"> <strong xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/Text" property="dct:title" rel="dct:type">Crisis Response</strong> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://jgthms.com" property="cc:attributionName" rel="cc:attributionURL">Aidsrightsthailand</a>. </div>
      </div>
      <div class="column is-5">
        <div id="share" class="content">
          
        </div>
      </div>
      <div class="column is-4">
        <div id="sister">
          <p><small> <strong>ที่อยู่</strong> : </small></p>
          <p><small>133/235 หมู่บ้านรื่นฤดี3 ถนนหทัยราษฎร์ แขวงมีนบุรี เขตมีนบุรี กทม 10510 โทรศัพท์ 02-171-5135-6 โทรสาร 02-1715124
          </small></p>
        </div>
      </div>
    </div>
    <p id="tsp"> <small> Source code licensed <a href="http://opensource.org/licenses/mit-license.php">HISO</a>. <br>
      Website content licensed <a rel="license" href="http://www.hiso.or.th">www.hiso.or.th</a>. </small> </p>
  </div>
</footer>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.async = true;
  js.defer = true;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=310296819307942";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> 
<script async defer id="twitter-wjs" src="https://platform.twitter.com/widgets.js"></script> 
<script async defer type="text/javascript" src="https://s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script> 
<script src="http://bulma.io/javascript/jquery-2.2.0.min.js"></script> 
<script src="http://bulma.io/javascript/clipboard.min.js"></script> 
<script src="http://bulma.io/javascript/bulma.js"></script> 
<script type="text/javascript" src="http://bulma.io/javascript/index.js"></script> 
<script type="text/javascript">
  (function($) {
    window.fnames = new Array();
    window.ftypes = new Array();
    fnames[0]='EMAIL';
    ftypes[0]='email';
  }(jQuery));
  var $mcj = jQuery.noConflict(true);
</script> 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-82634666-2', 'auto');
  ga('send', 'pageview');
</script>
</body>
</html>
