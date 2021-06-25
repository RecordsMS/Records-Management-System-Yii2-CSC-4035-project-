<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lecturers */

$this->title = 'Create Lecturers';
$this->params['breadcrumbs'][] = ['label' => 'Lecturers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lecturers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
