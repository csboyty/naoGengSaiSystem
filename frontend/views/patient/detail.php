<?php
$this->title = $model->fullname.'的信息';

?>

        <div class="row">
            <label class="col-md-2 text-right">编号</label>
            <p class="col-md-8"><?= $model->id;?></p>
        </div>
        <div class="row">
            <label class="col-md-2 text-right">姓名</label>
            <div class="col-md-8"><?= $model->fullname;?></div>
        </div>
        <div class="row">
            <label class="col-md-2 text-right">病种</label>
            <p class="col-md-8"><?= $model->disease_type;?></p>
        </div>
        <div class="row">
            <label class="col-md-2 text-right">医生</label>
            <p class="col-md-8"><?= $model->doctor;?></p>
        </div>
        <div class="row">
            <label class="col-md-2 text-right">住院号</label>
            <p class="col-md-8"><?= $model->AD;?></p>
        </div>
        <div class="row">
            <label class="col-md-2 text-right">发病日期</label>
            <div class="col-md-8"><?= $model->disease_date;?></div>
        </div>

        <div class="row">
            <label class="col-md-2 text-right">建档日期</label>
            <div class="col-md-8"><?= $model->date;?></div>
        </div>
        <div class="row">
            <label class="col-md-2 text-right">性别</label>
            <div class="col-md-8"><?= $model->sex;?></div>
        </div>
        <div class="row">
            <label class="col-md-2 text-right">年龄</label>
            <div class="col-md-8"><?= $model->age;?></div>
        </div>
        <div class="row">
            <label class=" col-md-2 text-right">住址</label>
            <div class="col-md-8"><?= $model->address;?></div>
        </div>
        <div class="row">
            <label class="col-md-2 text-right">联系电话</label>
            <div class="col-md-8"><?= $model->tel;?></div>
        </div>
        <div class="row">
            <label class="col-md-2 text-right">身高</label>
            <div class="col-md-8"><?= $model->height;?></div>
        </div>
        <div class="row">
            <label class="col-md-2 text-right">体重</label>
            <div class="col-md-8"><?= $model->weight;?></div>
        </div>
        <div class="row">
            <label class="col-md-2 text-right">胸围</label>
            <div class="col-md-8"><?= $model->waist;?></div>
        </div>
        <div class="row">
            <label class="col-md-2 text-right">腰围</label>
            <div class="col-md-8"><?= $model->hip;?></div>
        </div>
        <div class="row">
            <label class="col-md-2 text-right">体重指数</label>
            <div class="col-md-8"><?= $model->BMI;?></div>
        </div>
        <br>
        <div class="row">
            <a class="col-md-offset-2 btn btn-primary" href="base-info/<?= $model->id; ?>">基本情况</a>
            <a class="col-xs-offset-1 btn btn-primary" href="impact-data/<?= $model->id; ?>">影像资料</a>
        </div>
