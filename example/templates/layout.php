<?php
if (!defined('ABSPATH')) {
    exit('Cheating huh?');
}
 ?>
<html>
<head>
    <title><?=$this->e($title)?> | <?=$this->e($company)?></title>
</head>
<body>

<?=$this->section('content')?>

<?=$this->section('scripts')?>

</body>
</html>