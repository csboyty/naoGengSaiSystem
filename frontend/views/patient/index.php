<?php

$this->title = '病患管理';
?>



<div class="tableSearchContainer row">
    <div class="col-md-3">
        <input type="text" id="filter" class="form-control" placeholder="编号/姓名">
    </div>
    <div class="col-md-3">
        <select id="filterDiseaseType" class="form-control">
            <option value="">全部</option>
            <option value="脑出血">脑出血</option>
            <option value="脑梗塞">脑梗塞</option>
            <option value="蛛网膜下腔出血">蛛网膜下腔出血</option>
        </select>
    </div>
    <button id="searchBtn" class="btn btn-primary" type="button">搜索</button>
    <a class="btn btn-primary" href="patient/create" style="float: right">
        <span class="glyphicon glyphicon-plus"></span> 新建
    </a>
</div>
<table id="myTable" class="dataTable">
    <thead>
    <tr>
        <th>编号</th>
        <th>姓名</th>
        <th>病种</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
        <!--<tr>
            <td><a href="patient/detail">00001</a></td>
            <td>小李</td>
            <td>小李</td>
            <td><a href="patient/detail">详情</a></td>
        </tr>-->
    </tbody>
</table>

<?php
    $this->registerJsFile("@web/js/src/patientMgr.js",['depends' => [frontend\assets\AppAsset::className()]]);
?>