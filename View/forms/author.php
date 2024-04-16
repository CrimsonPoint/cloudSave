<?
/**
 * @var $author_model Module_Bookshop_Model_Validation
 */

/*
Для предотвращения xss атак следует экранировать пользовательский ввод с помощью HTML::chars
Методы класса Kohana_Form делают это за нас
Т.е. если не использовать методы фреймворка, то пришлось бы писать тэги так:
<label class="control-label" for="title"><?= $author_model->title; ?></label>
<input type="text" name="title" value="<?= HTML::chars($author_model->title); ?>" class="form-control" autofocus="autofocus" >
<textarea name="about" cols="50" rows="10" class="form-control" ><?= HTML::chars($author_model->about); ?></textarea>
*/
?>

<div class="form-group">
    <div class="row">
        <div class="col-md-6">
            <?= Form::label( 'last_name', ___('LAST_NAME'), ['class' => 'control-label']); ?>
            <?= Form::input('last_name', $author_model->last_name, ['class' => 'form-control']); ?>
            <?= Form::label( 'first_name', ___('FIRST_NAME'), ['class' => 'control-label']); ?>
            <?= Form::input('first_name', $author_model->first_name, ['class' => 'form-control', 'autofocus' => 'autofocus']); ?>
            <?= Form::label( 'second_name', ___('SECOND_NAME'), ['class' => 'control-label']); ?>
            <?= Form::input('second_name', $author_model->second_name, ['class' => 'form-control']); ?>
        </div>
    </div>
</div>