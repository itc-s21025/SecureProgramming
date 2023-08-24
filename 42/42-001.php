<?php
    $name = isset($_GET['name']) ? $_GET['name'] : '';
    if (! mb_check_encoding($name, 'Shift_JIS')) {
        die('文字エンコーディングが不正です');

    }
    $name = mb_convert_encoding($name, 'utf-8', 'sjis');
?>

<?php header("Content-type: text/html; charset=utf-8"); ?>
<body>
    名前は<?php echo htmlspecialchars($name, ENT_NOQUOTES, 'utf-8'); ?>です
</body>