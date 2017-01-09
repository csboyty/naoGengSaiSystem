<?php


$this->title = '数据统计';
?>
    <div class="tableSearchContainer row">
        <div class="col-md-3">
            <select id="filterDiseaseType" class="form-control">
                <option value="">全部</option>
                <option value="脑出血">脑出血</option>
                <option value="脑梗塞">脑梗塞</option>
                <option value="蛛网膜下腔出血">蛛网膜下腔出血</option>
            </select>
        </div>
    </div>
    <div class="row statCounts">
        <div class="col-md-4"><b class="count text-primary" id="todayCount"></b><label class="label">今天新增</label></div>
        <div class="col-md-4"><b class="count text-primary" id="monthCount"></b><label class="label">本月新增</label></div>
        <div class="col-md-4"><b class="count text-primary" id="allCount"></b><label class="label">总计病例</label></div>
    </div>

    <br><br>
    <div id="sex" style="width: 600px;height:400px;"></div>
    <hr>
    <div id="age" style="width: 600px;height:400px;"></div>

<?php

$this->registerJsFile("@web/js/lib/echarts.common.min.js",['depends' => [frontend\assets\AppAsset::className()]]);
$this->registerJsFile("@web/js/src/stat.js",['depends' => [frontend\assets\AppAsset::className()]]);
?>