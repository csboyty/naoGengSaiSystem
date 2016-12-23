<?php
$this->title = '新建/修改病患';

?>
    <form class="form-horizontal" id="myForm" action="patient/submit" method="post">
        <?php
        if($model->id){
            ?>
            <input type="hidden" name="isEdit" value="true">
            <?php
        }
        ?>
        <div class="form-group">
            <label for="name" class="control-label col-md-2">编号*</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="id" value="<?= $model->id; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label col-md-2">病种*</label>
            <div class="col-md-8">
                <select class="form-control" name="disease_type">
                    <?php
                    $diseaseTypeArray=array("脑出血","脑梗塞","蛛网膜下腔出血");
                    $diseaseType=$model->disease_type;
                    foreach($diseaseTypeArray as $dt){
                        $dtOptionSel="";
                        if($diseaseType==$dt){
                            $dtOptionSel=" selected ";
                        }
                        ?>

                        <option <?= $dtOptionSel; ?> value="<?= $dt; ?>"><?= $dt; ?></option>

                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label col-md-2">姓名*</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="fullname" value="<?= $model->fullname; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label col-md-2">医生*</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="doctor" value="<?= $model->doctor; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label col-md-2">建档日期*</label>
            <div class="col-md-8">
                <input type="date" class="form-control" name="date" value="<?= $model->date; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label col-md-2">发病日期*</label>
            <div class="col-md-8">
                <input type="date" class="form-control" name="disease_date" value="<?= $model->disease_date; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label col-md-2">门诊/住院号*</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="AD" value="<?= $model->AD; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label col-md-2">性别*</label>
            <div class="col-md-8">
                <?php

                $sexArray=array("男","女");
                $sex=$model->sex;
                foreach($sexArray as $sa){
                    $sexChecked="";
                    if($sa==$sex){
                        $sexChecked=" checked ";
                    }
                    ?>
                    <label class="radio-inline">
                        <input type="radio" <?= $sexChecked; ?> value="<?= $sa; ?>"
                               name="sex"><?= $sa; ?>
                    </label>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label col-md-2">年龄*</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="age" value="<?= $model->age; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label col-md-2">住址*</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="address" value="<?= $model->address; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label col-md-2">电话（2个）*</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="tel" value="<?= $model->tel; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label col-md-2">身高*</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="height" value="<?= $model->height; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label col-md-2">体重*</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="weight" value="<?= $model->weight; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label col-md-2">腰围*</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="waist" value="<?= $model->waist; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label col-md-2">臀围*</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="hip" value="<?= $model->hip; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label col-md-2">体重指数*</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="BMI" value="<?= $model->BMI; ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-2 col-md-8">
                <button type="submit" class="btn btn-success form-control">确定</button>
            </div>
        </div>
    </form>


<?php
$this->registerJsFile("@web/js/src/patientCreateOrUpdate.js",['depends' => [frontend\assets\AppAsset::className()]]);
?>