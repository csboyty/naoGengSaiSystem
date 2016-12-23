<?php
$this->title = $patient->fullname . "基本情况";

$info = isset($baseInfo->info) ? json_decode($baseInfo->info) : null;
$xueChangGui = isset($baseInfo->xueChangGui)?json_decode($baseInfo->xueChangGui):null;
$ganGongNeng = isset($baseInfo->ganGongNeng)?json_decode($baseInfo->ganGongNeng):null;
$shenGongNeng = isset($baseInfo->shenGongNeng)?json_decode($baseInfo->shenGongNeng):null;
$ningXueGongNeng = isset($baseInfo->ningXueGongNeng)?json_decode($baseInfo->ningXueGongNeng):null;
$xueZhi = isset($baseInfo->xueZhi)?json_decode($baseInfo->xueZhi):null;


?>
<script>
    var patientId = "<?= $patient->id;  ?>";
</script>

<a class="btn btn-primary" style="margin-bottom: 10px;" href="javascript:history.go(-1);">
    <span class="glyphicon glyphicon-arrow-left"></span> 返回
</a>

<div class="panel-group" id="accordion" aria-multiselectable="true">
<div class="panel panel-default">
<div class="panel-heading" id="headingOne">
    <h4 class="panel-title">
        <a data-toggle="collapse" href="#collapseOne" data-parent="#accordion"
           aria-expanded="true" aria-controls="collapseOne">
            普通信息
        </a>
    </h4>
</div>
<div id="collapseOne" class="panel-collapse collapse in" aria-labelledby="headingOne">
<div class="panel-body">
<form class="form-horizontal">
<div class="form-group">
    <label class="control-label col-md-2">饮酒史</label>

    <div class="col-md-8">
        <?php
        $jiuArray = array("白酒", "啤酒", "葡萄酒", "其他", "已戒（>=6月）", "否（每周<1）");
        $jiuSel = array();
        if ($info && isset($info->jiu)) {
            $jiuSel = $info->jiu;
        }
        foreach ($jiuArray as $ja) {
            $jiuChecked = "";
            if (in_array($ja, $jiuSel)) {
                $jiuChecked = " checked ";
            }
            ?>
            <label class="checkbox-inline">
                <input type="checkbox" <?= $jiuChecked ?> value="<?= $ja ?>"
                       data-name-parent="info" name="jiu"><?= $ja ?>
            </label>
        <?php
        }

        ?>

        <div class="innerPanel">
            <br>
            <span>酒量</span>

            <div>
                <?php

                $jiuLiangArray = array("100ml以下", "100-500ml", "500ml以上");
                $jiuLiang = "";
                if ($info && isset($info->jiuLiang)) {
                    $jiuLiang = $info->jiuLiang;
                }
                foreach ($jiuLiangArray as $jla) {
                    $jiuLiangChecked = "";
                    if ($jla == $jiuLiang) {
                        $jiuLiangChecked = " checked ";
                    }
                    ?>
                    <label class="radio-inline">
                        <input type="radio" <?= $jiuLiangChecked; ?> value="<?= $jla; ?>"
                               data-name-parent="info" name="jiuLiang"><?= $jla; ?>
                    </label>
                <?php
                }
                ?>

            </div>
        </div>

    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-2">吸烟史</label>

    <div class="col-md-8">
        <?php
        $xiYanArray = array("吸烟", "已戒（>=6月）", "长期被动吸烟", "否");
        $xiYanSel = array();
        if ($info && isset($info->xiYan)) {
            $xiYanSel = $info->xiYan;
        }
        foreach ($xiYanArray as $xya) {
            $xiYanChecked = "";
            if ($xya == $xiYanSel) {
                $xiYanChecked = " checked ";
            }
            ?>
            <label class="radio-inline">
                <input type="radio" <?= $xiYanChecked ?> value="<?= $xya ?>"
                       data-name-parent="info" name="xiYan"><?= $xya ?>
            </label>
        <?php
        }

        ?>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-2">体育锻炼</label>

    <div class="col-md-8">
        <?php
        $tiYuArray = array("是（每周3次 每次30分钟以上）", "否");
        $tiYuSel = array();
        if ($info && isset($info->tiYu)) {
            $tiYuSel = $info->tiYu;
        }
        foreach ($tiYuArray as $tya) {
            $tiYuChecked = "";
            if ($tya == $tiYuSel) {
                $tiYuChecked = " checked ";
            }
            ?>
            <label class="radio-inline">
                <input type="radio" <?= $tiYuChecked ?> value="<?= $tya ?>"
                       data-name-parent="info" name="tiYu"><?= $tya ?>
            </label>
        <?php
        }

        ?>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-2">高血压史</label>

    <div class="col-md-8">
        <?php
        $gaoXueYaArray = array("有且规律治疗", "有但未规律治疗", "无", "不知道");
        $gaoXueYaSel = array();
        if ($info && isset($info->gaoXueYa)) {
            $gaoXueYaSel = $info->gaoXueYa;
        }
        foreach ($gaoXueYaArray as $gxaa) {
            $gaoXueYaChecked = "";
            if ($gxaa == $gaoXueYaSel) {
                $gaoXueYaChecked = " checked ";
            }
            ?>
            <label class="radio-inline">
                <input type="radio" <?= $gaoXueYaChecked ?> value="<?= $gxaa ?>"
                       data-name-parent="info" name="gaoXueYa"><?= $gxaa ?>
            </label>
        <?php
        }

        ?>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-2">高血压分级</label>

    <div class="col-md-8">
        <?php
        $gaoXueYaFenJiArray = array("1", "2", "3", "4");
        $gaoXueYaFenJiSel = array();
        if ($info && isset($info->gaoXueYaFenJi)) {
            $gaoXueYaFenJiSel = $info->gaoXueYaFenJi;
        }
        foreach ($gaoXueYaFenJiArray as $gxyfj) {
            $gaoXueYaFenJiChecked = "";
            if ($gxyfj == $gaoXueYaFenJiSel) {
                $gaoXueYaChecked = " checked ";
            }
            ?>
            <label class="radio-inline">
                <input type="radio" <?= $gaoXueYaFenJiChecked ?> value="<?= $gxyfj ?>"
                       data-name-parent="info" name="gaoXueYaFenJi"><?= $gxyfj ?>
            </label>
        <?php
        }

        ?>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-2">高血压药物</label>

    <div class="col-md-8">
        <input type="text" class="form-control" name="gaoXueYaYaoWu" data-name-parent="info"
               value="<?= isset($info->gaoXueYaYaoWu) ? $info->gaoXueYaYaoWu : ""; ?>">
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-2">A型性格</label>

    <div class="col-md-8">
        <?php
        $xingGeArray = array("是", "否");
        $xingGeSel = array();
        if ($info && isset($info->xingGe)) {
            $xingGeSel = $info->xingGe;
        }
        foreach ($xingGeArray as $xga) {
            $xingGeChecked = "";
            if ($xga == $xingGeSel) {
                $gaoXueYaChecked = " checked ";
            }
            ?>
            <label class="radio-inline">
                <input type="radio" <?= $xingGeChecked ?> value="<?= $xga ?>"
                       data-name-parent="info" name="xingGe"><?= $xga ?>
            </label>
        <?php
        }

        ?>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-2">心脏病</label>

    <div class="col-md-8">
        <?php
        $xinZanBingArray = array("冠心病/心绞痛/心梗", "高心病", "无", "不知道");
        $xinZanBingSel = array();
        if ($info && isset($info->xinZanBing)) {
            $xinZanBingSel = $info->xinZanBing;
        }
        foreach ($xinZanBingArray as $xzba) {
            $xinZanBingChecked = "";
            if ($xzba == $xinZanBingSel) {
                $xinZanBingChecked = " checked ";
            }
            ?>
            <label class="radio-inline">
                <input type="radio" <?= $xinZanBingChecked ?> value="<?= $xzba ?>"
                       data-name-parent="info" name="xinZanBing"><?= $xzba ?>
            </label>
        <?php
        }

        ?>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-2">糖尿病</label>

    <div class="col-md-8">
        <?php
        $tangNiaoBingArray = array("有且规律治疗", "有但未规律治疗", "无", "不知道");
        $tangNiaoBingSel = array();
        if ($info && isset($info->tangNiaoBing)) {
            $tangNiaoBingSel = $info->tangNiaoBing;
        }
        foreach ($tangNiaoBingArray as $tnba) {
            $tangNiaoBingChecked = "";
            if ($tnba == $tangNiaoBingSel) {
                $tangNiaoBingChecked = " checked ";
            }
            ?>
            <label class="radio-inline">
                <input type="radio" <?= $tangNiaoBingChecked ?> value="<?= $tnba ?>"
                       data-name-parent="info" name="tangNiaoBing"><?= $tnba ?>
            </label>
        <?php
        }

        ?>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-2">血脂异常</label>

    <div class="col-md-8">
        <?php
        $xueZhiYiChangArray = array("有且规律治疗", "有但未规律治疗", "无", "不知道");
        $xueZhiYiChangSel = array();
        if ($info && isset($info->xueZhiYiChang)) {
            $xueZhiYiChangSel = $info->xueZhiYiChang;
        }
        foreach ($xueZhiYiChangArray as $tnba) {
            $xueZhiYiChangChecked = "";
            if ($tnba == $xueZhiYiChangSel) {
                $xueZhiYiChangChecked = " checked ";
            }
            ?>
            <label class="radio-inline">
                <input type="radio" <?= $xueZhiYiChangChecked ?> value="<?= $tnba ?>"
                       data-name-parent="info" name="xueZhiYiChang"><?= $tnba ?>
            </label>
        <?php
        }

        ?>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-2">既往脑血管病史</label>

    <div class="col-md-8">
        <?php
        $jiWangArray = array("有", "无");
        $jiWangSel = array();
        if ($info && isset($info->jiWang)) {
            $jiWangSel = $info->jiWang;
        }
        foreach ($jiWangArray as $jwa) {
            $jiWangChecked = "";
            if ($jwa == $jiWangSel) {
                $gaoXueYaChecked = " checked ";
            }
            ?>
            <label class="radio-inline">
                <input type="radio" <?= $jiWangChecked ?> value="<?= $jwa ?>"
                       data-name-parent="info" name="jiWang"><?= $jwa ?>
            </label>
        <?php
        }

        ?>
    </div>
</div>


<div class="form-group">
    <label class="control-label col-md-2">血压</label>

    <div class="col-md-4">
        <input type="text" class="form-control" name="xueYa" data-name-parent="info"
               value="<?= isset($info->xueYa) ? $info->xueYa : ""; ?>">
    </div>
    <div class="col-md-2 controlUnit">mmHg</div>
</div>

<div class="form-group">
    <label class="control-label col-md-2">心率</label>

    <div class="col-md-4">
        <input type="text" class="form-control" name="xinLv" data-name-parent="info"
               value="<?= isset($info->xueYa) ? $info->xinLv : ""; ?>">
    </div>
    <div class="col-md-2 controlUnit">次/分</div>
</div>

<div class="form-group">
    <label class="control-label col-md-2">空腹血糖</label>

    <div class="col-md-4">
        <input type="text" class="form-control" name="kongFuXueTang" data-name-parent="info"
               value="<?= isset($info->kongFuXueTang) ? $info->kongFuXueTang : ""; ?>">
    </div>
    <div class="col-md-2 controlUnit">mmol/l</div>
</div>

<div class="form-group">
    <label class="control-label col-md-2">糖化血红蛋白</label>

    <div class="col-md-4">
        <input type="text" class="form-control" name="tangHua" data-name-parent="info"
               value="<?= isset($info->tangHua) ? $info->tangHua : ""; ?>">
    </div>
    <div class="col-md-2 controlUnit">mmol/l</div>
</div>

<div class="form-group">
    <label class="control-label col-md-2">同型半胱氨酸</label>

    <div class="col-md-4">
        <input type="text" class="form-control" name="guangAnSuan" data-name-parent="info"
               value="<?= isset($info->guangAnSuan) ? $info->guangAnSuan : ""; ?>">
    </div>
    <div class="col-md-2 controlUnit">umol/l</div>
</div>
<div class="form-group">
    <label class="control-label col-md-2">CRP</label>

    <div class="col-md-4">
        <input type="text" class="form-control" name="CRP" data-name-parent="info"
               value="<?= isset($info->CRP) ? $info->CRP : ""; ?>">
    </div>
    <div class="col-md-2 controlUnit">mg/L</div>
</div>
<div class="form-group">
    <label class="control-label col-md-2">ESR</label>

    <div class="col-md-4">
        <input type="text" class="form-control" name="ESR" data-name-parent="info"
               value="<?= isset($info->ESR) ? $info->ESR : ""; ?>">
    </div>
    <div class="col-md-2 controlUnit">mm/h</div>
</div>

<div class="form-group">
    <div class="col-md-offset-2 col-md-2">
        <button type="submit" id="saveNormal" class="btn btn-success form-control">保存</button>
    </div>
</div>
</form>
</div>
</div>
</div>


<div class="panel panel-default">
    <div class="panel-heading" id="headingTwo">
        <h4 class="panel-title">
            <a data-toggle="collapse" href="#collapseTwo" data-parent="#accordion"
               aria-expanded="true" aria-controls="collapseTwo">
                血常规
            </a>
        </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse in" aria-labelledby="headingTwo">
        <div class="panel-body">
            <form class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-md-2">wbc</label>

                    <div class="col-md-4">
                        <input type="text" class="form-control" name="xueChangGuiwbc" data-name-parent="xueChangGui"
                               value="<?= isset($xueChangGui->xueChangGuiwbc) ? $xueChangGui->xueChangGuiwbc : ""; ?>">
                    </div>
                    <div class="col-md-2 controlUnit">*10^9/L</div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">N</label>

                    <div class="col-md-4">
                        <input type="text" class="form-control" name="xueChangGuiN" data-name-parent="xueChangGui"
                               value="<?= isset($xueChangGui->xueChangGuiN) ? $xueChangGui->xueChangGuiN : ""; ?>">
                    </div>
                    <div class="col-md-2 controlUnit">%</div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">pt</label>

                    <div class="col-md-4">
                        <input type="text" class="form-control" name="xueChangGuipt" data-name-parent="xueChangGui"
                               value="<?= isset($xueChangGui->xueChangGuipt) ? $xueChangGui->xueChangGuipt : ""; ?>">
                    </div>
                    <div class="col-md-2 controlUnit">%</div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">HB</label>

                    <div class="col-md-4">
                        <input type="text" class="form-control" name="xueChangGuiHB" data-name-parent="xueChangGui"
                               value="<?= isset($xueChangGui->xueChangGuiHB) ? $xueChangGui->xueChangGuiHB : ""; ?>">
                    </div>
                    <div class="col-md-2 controlUnit">%</div>
                </div>

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-2">
                        <button type="submit" id="saveXueChangGui" class="btn btn-success form-control">保存</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="panel panel-default">
    <div class="panel-heading" id="headingThree">
        <h4 class="panel-title">
            <a data-toggle="collapse" href="#collapseThree" data-parent="#accordion"
               aria-expanded="true" aria-controls="collapseThree">
                肝功能
            </a>
        </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse in" aria-labelledby="headingThree">
        <div class="panel-body">
            <form class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-md-2">ALT</label>

                    <div class="col-md-4">
                        <input type="text" class="form-control" name="ganGongNengALT" data-name-parent="ganGongNeng"
                               value="<?= isset($ganGongNeng->ganGongNengALT) ? $ganGongNeng->ganGongNengALT : ""; ?>">
                    </div>
                    <div class="col-md-2 controlUnit">U/L</div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">AST</label>

                    <div class="col-md-4">
                        <input type="text" class="form-control" name="ganGongNengAST" data-name-parent="ganGongNeng"
                               value="<?= isset($ganGongNeng->ganGongNengAST) ? $ganGongNeng->ganGongNengAST : ""; ?>">
                    </div>
                    <div class="col-md-2 controlUnit">U/L</div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">白蛋白</label>

                    <div class="col-md-4">
                        <input type="text" class="form-control" name="ganGongNengBaiDanBai" data-name-parent="ganGongNeng"
                               value="<?= isset($ganGongNeng->ganGongNengBaiDanBai) ? $ganGongNeng->ganGongNengBaiDanBai : ""; ?>">
                    </div>
                    <div class="col-md-2 controlUnit">g/l</div>
                </div>

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-2">
                        <button type="submit" id="saveGanGongNeng" class="btn btn-success form-control">保存</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading" id="headingFour">
        <h4 class="panel-title">
            <a data-toggle="collapse" href="#collapseFour" data-parent="#accordion"
               aria-expanded="true" aria-controls="collapseFour">
                肾功能
            </a>
        </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse in" aria-labelledby="headingFour">
        <div class="panel-body">
            <form class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-md-2">BUN</label>

                    <div class="col-md-4">
                        <input type="text" class="form-control" name="shenGongNengBUN" data-name-parent="shenGongNeng"
                               value="<?= isset($shenGongNeng->shenGongNengBUN) ? $shenGongNeng->shenGongNengBUN : ""; ?>">
                    </div>
                    <div class="col-md-2 controlUnit">mmol/L</div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Cr</label>

                    <div class="col-md-4">
                        <input type="text" class="form-control" name="shenGongNengCr" data-name-parent="shenGongNeng"
                               value="<?= isset($shenGongNeng->shenGongNengCr) ? $shenGongNeng->shenGongNengCr : ""; ?>">
                    </div>
                    <div class="col-md-2 controlUnit">umol/L</div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">UA</label>

                    <div class="col-md-4">
                        <input type="text" class="form-control" name="shenGongNengUA" data-name-parent="shenGongNeng"
                               value="<?= isset($shenGongNeng->shenGongNengUA) ? $shenGongNeng->shenGongNengUA : ""; ?>">
                    </div>
                    <div class="col-md-2 controlUnit">umol/L</div>
                </div>

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-2">
                        <button type="submit" id="saveShenGongNeng" class="btn btn-success form-control">保存</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading" id="headingFive">
        <h4 class="panel-title">
            <a data-toggle="collapse" href="#collapseFive" data-parent="#accordion"
               aria-expanded="true" aria-controls="collapseFive">
                血脂
            </a>
        </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse in" aria-labelledby="headingFive">
        <div class="panel-body">
            <form class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-md-2">LDL</label>

                    <div class="col-md-4">
                        <input type="text" class="form-control" name="xueZhiLDL" data-name-parent="xueZhi"
                               value="<?= isset($xueZhi->xueZhiLDL) ? $xueZhi->xueZhiLDL : ""; ?>">
                    </div>
                    <div class="col-md-2 controlUnit">IU/L</div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">HDL</label>

                    <div class="col-md-4">
                        <input type="text" class="form-control" name="xueZhiHDL" data-name-parent="xueZhi"
                               value="<?= isset($xueZhi->xueZhiHDL) ? $xueZhi->xueZhiHDL : ""; ?>">
                    </div>
                    <div class="col-md-2 controlUnit">IU/L</div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">TG</label>

                    <div class="col-md-4">
                        <input type="text" class="form-control" name="xueZhiTG" data-name-parent="xueZhi"
                               value="<?= isset($xueZhi->xueZhiTG) ? $xueZhi->xueZhiTG : ""; ?>">
                    </div>
                    <div class="col-md-2 controlUnit">mmol</div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">CHO</label>

                    <div class="col-md-4">
                        <input type="text" class="form-control" name="xueZhiCHO" data-name-parent="xueZhi"
                               value="<?= isset($xueZhi->xueZhiCHO) ? $xueZhi->xueZhiCHO : ""; ?>">
                    </div>
                    <div class="col-md-2 controlUnit">mmol</div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">HDL/CHO</label>

                    <div class="col-md-4">
                        <input type="text" class="form-control" name="xueZhiHDL" data-name-parent="xueZhi"
                               value="<?= isset($xueZhi->xueZhiHDL) ? $xueZhi->xueZhiHDL : ""; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">ApoA1</label>

                    <div class="col-md-4">
                        <input type="text" class="form-control" name="xueZhiApoA1" data-name-parent="xueZhi"
                               value="<?= isset($xueZhi->xueZhiApoA1) ? $xueZhi->xueZhiApoA1 : ""; ?>">
                    </div>
                    <div class="col-md-2 controlUnit">mmol</div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">ApoB</label>

                    <div class="col-md-4">
                        <input type="text" class="form-control" name="xueZhiApoB" data-name-parent="xueZhi"
                               value="<?= isset($xueZhi->xueZhiApoB) ? $xueZhi->xueZhiApoB : ""; ?>">
                    </div>
                    <div class="col-md-2 controlUnit">mmol</div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">lp-a</label>

                    <div class="col-md-4">
                        <input type="text" class="form-control" name="xueZhiLPA" data-name-parent="xueZhi"
                               value="<?= isset($xueZhi->xueZhiLPA) ? $xueZhi->xueZhiLPA : ""; ?>">
                    </div>
                    <div class="col-md-2 controlUnit">mmol</div>
                </div>

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-2">
                        <button type="submit" id="saveXueZhi" class="btn btn-success form-control">保存</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading" id="headingFour">
        <h4 class="panel-title">
            <a data-toggle="collapse" href="#collapseFour" data-parent="#accordion"
               aria-expanded="true" aria-controls="collapseFour">
                凝血功能
            </a>
        </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse in" aria-labelledby="headingFour">
        <div class="panel-body">
            <form class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-md-2">TT</label>

                    <div class="col-md-4">
                        <input type="text" class="form-control" name="TT" data-name-parent="ningXueGongNeng"
                               value="<?= isset($ningXueGongNeng->TT) ? $ningXueGongNeng->TT : ""; ?>">
                    </div>
                    <div class="col-md-2 controlUnit">s</div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">PT</label>

                    <div class="col-md-4">
                        <input type="text" class="form-control" name="PT" data-name-parent="ningXueGongNeng"
                               value="<?= isset($ningXueGongNeng->PT) ? $ningXueGongNeng->PT : ""; ?>">
                    </div>
                    <div class="col-md-2 controlUnit">s</div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">APTT</label>

                    <div class="col-md-4">
                        <input type="text" class="form-control" name="APTT" data-name-parent="ningXueGongNeng"
                               value="<?= isset($ningXueGongNeng->APTT) ? $ningXueGongNeng->APTT : ""; ?>">
                    </div>
                    <div class="col-md-2 controlUnit">s</div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">INT</label>

                    <div class="col-md-4">
                        <input type="text" class="form-control" name="INT" data-name-parent="ningXueGongNeng"
                               value="<?= isset($ningXueGongNeng->INT) ? $ningXueGongNeng->INT : ""; ?>">
                    </div>
                    <div class="col-md-2 controlUnit">s</div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Fbg</label>

                    <div class="col-md-4">
                        <input type="text" class="form-control" name="Fbg" data-name-parent="ningXueGongNeng"
                               value="<?= isset($ningXueGongNeng->Fbg) ? $ningXueGongNeng->Fbg : ""; ?>">
                    </div>
                    <div class="col-md-2 controlUnit">g/l</div>
                </div>

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-2">
                        <button type="submit" id="saveNingXueGongNeng" class="btn btn-success form-control">保存</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


</div>


<?php
$this->registerJsFile("@web/js/src/baseInfo.js", ['depends' => [frontend\assets\AppAsset::className()]]);
?>
