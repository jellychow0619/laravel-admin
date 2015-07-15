<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="csrf-token" content="{{ csrf_token() }}" />
<title><?php echo $title ;?></title>
<meta name="keywords" content="<?php echo $keywords ;?>" />
<meta name="description" content="<?php echo $description ;?>" />
<link rel="stylesheet" href="/toastr/toastr.css"/>
<link type="text/css" href="/site/css/index.css" rel="stylesheet" />
<script type="text/javascript" src="/site/js/jquery.min.js"></script>
<script type="text/javascript" src="/site/js/core.js"></script>
<script>
    var logout_url = '<?php echo action("Home\UserController@getLogout") ;?>';
    var get_search = '<?php echo action("Home\SearchController@postSearchInfo") ;?>';
</script>