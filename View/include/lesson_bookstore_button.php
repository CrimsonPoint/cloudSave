<?
/**
 * @var $url_to_add_author string
 * @var $url_to_add_book string
 */
?>

<div class="btn-group">
    <a href="#" class="btn btn-outline blue dropdown-toggle md-shadow-none"
       data-toggle="dropdown"><?= ___('TASK_ADD') ?>
    </a>
    <ul class="dropdown-menu pull-right">
        <li>
            <!--Ссылка добавить автора будет открываться в "Боковой панели"-->
            <!--Если добавить атрибут href="",-->
            <!--то ссылку можно будет открыть через ПКМ, например, в новом окне-->
            <a data-toggle="sidepanel" data-toggle-width="md" data-href="<?= $url_to_add_author; ?>">
                <i class="material-icons md-18 md-dark margin-right-10">account_circle</i>
                Автора
            </a>
        </li>
        <li>
            <!--Ссылка добавить книгу будет открываться в "Боковой панели"-->
            <!--Если добавить атрибут href="",-->
            <!--то ссылку можно будет открыть через ПКМ, например, в новом окне-->
            <a data-toggle="sidepanel" data-toggle-width="md" data-href="<?= $url_to_add_book; ?>">
                <i class="material-icons md-18 md-dark margin-right-10">bookmark_border</i>
                Книгу
            </a>
        </li>
    </ul>
</div>