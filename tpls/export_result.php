<?php
if (!defined('MAIL_IMPEXP_ON') || MAIL_IMPEXP_ON !== true)
    die();
if (empty($errors)) {?>
<p>Экспорт успешно завершен. В каталоге со скриптом создан файл <b><?=$filename?></b></p>
<?php
} else {?>
<p>При выполнении операции произошли следующие ошибки:</p>
<ul><li><?=implode('</li><li>', $errors)?></li></ul>
<?php
}?>
