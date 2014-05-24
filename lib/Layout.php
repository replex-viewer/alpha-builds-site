<?php


class Layout
{

  static function since($since)
  {
    $since = time() - date("Z") - $since;
    $chunks = array(
		    array(60 * 60 * 24 * 365 , 'year'),
		    array(60 * 60 * 24 * 30 , 'month'),
		    array(60 * 60 * 24 * 7, 'week'),
		    array(60 * 60 * 24 , 'day'),
		    array(60 * 60 , 'hour'),
		    array(60 , 'minute'),
		    array(1 , 'second')
		    );

    for ($i = 0, $j = count($chunks); $i < $j; $i++) {
      $seconds = $chunks[$i][0];
      $name = $chunks[$i][1];
      if (($count = floor($since / $seconds)) != 0) {
	break;
      }
    }

    $print = ($count == 1) ? '1 '.$name : "$count {$name}s";
    return $print;
  }

  static function header()
  { ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="<?php print URL_ROOT ?>/buildsite.css"/>
    <link href="<?php print URL_ROOT ?>/feed.php" rel="alternate" title="Replex Automatic Development Builds" type="application/atom+xml" />
    <title>Replex Viewer Automated Build System</title>

	<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
	<link rel="icon" type="image/png" href="/favicon-196x196.png" sizes="196x196">
	<link rel="icon" type="image/png" href="/favicon-160x160.png" sizes="160x160">
	<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">

<script type="text/javascript">
//<![CDATA[
    function toggleChanges(id)
    {
      var change = document.getElementById("changes_" + id);
      var link = document.getElementById("toggle_link_" + id);

      if (change) {
	if (change.style.display == "") {
	  change.style.display = "none";
	  link.innerHTML = "Show changes &gt;&gt;";
	} else {
	  change.style.display = "";
	  link.innerHTML = "Hide changes &lt;&lt;";
	}
      }

      return false;
    }
	   
//]]>
</script>

  </head>
  <body>
      <div id="everything">
      <div id="page-wrapper">
      <div id="header"></div>
      <div class="container"><a href="<?php print URL_ROOT ?>" style="font-size: 20px;">Automated Build System</a><br/><br/>
  

<?php
  }

  static function footer()
  {
  { ?>
       </div><!-- container -->
       <div class="container bborder">
        <table style="width: 100%; border: none; padding: 0;"><tr>
         <td class="bottom-links"><a href="http://www.replex.org/">Replex Main Site</a></td>
         <td class="bottom-links"><a href="http://www.replex.org/wp/about">About</a></td>
         <td class="bottom-links"><a href="http://jira.openmetaverse.org/browse/REPLEX">Issue Tracker</a></td>
         <td class="bottom-links"><a href="https://github.com/replex-viewer/replex">Source Tracker</a></td>
      <td width="50%" style="text-align: right;">&copy; 2012-2014 Replex Viewer Project</td>
        </tr></table>
       </div> 
      </div><!-- everything -->
    </div><!-- page-wrapper -->
  </body>
</html>
  
<?php
  }
  }
}
