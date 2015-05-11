<?php use yii\helpers\Html; ?>
 
<?php echo Html::a('Create New Source', array('site/create'), array('class' => 'btn btn-primary pull-right')); ?>
<div class="clearfix"></div>
<hr />
<table class="table table-striped table-hover">
    <tr>
        <td>#</td>
        <td>Title</td>
        <td>Created</td>
        <td>Updated</td>
        <td>Options</td>
    </tr>
    <?php foreach ($data as $source): ?>
        <tr>
            <td>
                <?php echo Html::a($source->id, array('site/read', 'id'=>$source->id)); ?>
            </td>
            <td><?php echo Html::a($source->title, array('site/read', 'id'=>$source->id)); ?></td>
            <td><?php echo $source->created; ?></td>
            <td><?php echo $source->updated; ?></td>
            <td>
                <?php echo Html::a(NULL, array('site/update', 'id'=>$source->id), array('class'=>'icon icon-edit')); ?>
                <?php echo Html::a(NULL, array('site/delete', 'id'=>$source->id), array('class'=>'icon icon-trash')); ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>