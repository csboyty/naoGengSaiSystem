<?php
$this->title = $patient->fullname . "基本情况";

$info = isset($baseInfo->info) ? json_decode($baseInfo->info) : null;

?>
<script>
    var patientId = "<?= $patient->id;  ?>";
</script>

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
                                   data-name-parent="other" name="jiuLiang"><?= $jla; ?>
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
                if ($xya==$xiYanSel) {
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
                if ($tya==$tiYuSel) {
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
            $gaoXueYaArray = array("有且规律治疗", "有但未规律治疗","无","不知道");
            $gaoXueYaSel = array();
            if ($info && isset($info->gaoXueYa)) {
                $gaoXueYaSel = $info->gaoXueYa;
            }
            foreach ($gaoXueYaArray as $gxaa) {
                $gaoXueYaChecked = "";
                if ($gxaa==$gaoXueYaSel) {
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
        <label class="control-label col-md-2">心脏病</label>

        <div class="col-md-8">
            <?php
            $xinZanBingArray = array("冠心病/心绞痛/心梗", "有但未规律治疗","无","不知道");
            $xinZanBingSel = array();
            if ($info && isset($info->xinZanBing)) {
                $xinZanBingSel = $info->xinZanBing;
            }
            foreach ($xinZanBingArray as $xzba) {
                $xinZanBingChecked = "";
                if ($xzba==$xinZanBingSel) {
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
            $tangNiaoBingArray = array("有且规律治疗", "有但未规律治疗","无","不知道");
            $tangNiaoBingSel = array();
            if ($info && isset($info->tangNiaoBing)) {
                $tangNiaoBingSel = $info->tangNiaoBing;
            }
            foreach ($tangNiaoBingArray as $tnba) {
                $tangNiaoBingChecked = "";
                if ($tnba==$tangNiaoBingSel) {
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
            $xueZhiYiChangArray = array("有且规律治疗", "有但未规律治疗","无","不知道");
            $xueZhiYiChangSel = array();
            if ($info && isset($info->xueZhiYiChang)) {
                $xueZhiYiChangSel = $info->xueZhiYiChang;
            }
            foreach ($xueZhiYiChangArray as $tnba) {
                $xueZhiYiChangChecked = "";
                if ($tnba==$xueZhiYiChangSel) {
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
        <label class="control-label col-md-2">短暂性脑缺血发作</label>

        <div class="col-md-8">
            <?php
            $naoQueXueArray = array("有且规律治疗", "有但未规律治疗","无","不知道");
            $naoQueXueSel = array();
            if ($info && isset($info->naoQueXue)) {
                $naoQueXueSel = $info->naoQueXue;
            }
            foreach ($naoQueXueArray as $nqxa) {
                $naoQueXueChecked = "";
                if ($nqxa==$naoQueXueSel) {
                    $naoQueXueChecked = " checked ";
                }
                ?>
                <label class="radio-inline">
                    <input type="radio" <?= $naoQueXueChecked ?> value="<?= $nqxa ?>"
                           data-name-parent="info" name="naoQueXue"><?= $nqxa ?>
                </label>
            <?php
            }

            ?>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-2">血压</label>

        <div class="col-md-4">
            <input type="text" class="form-control" name="xueYa"
                   value="<?= isset($info->xueYa)?$info->xueYa:""; ?>">
        </div>
        <div class="col-md-2 inputUnit">mmHg</div>
    </div>

    <hr>
    <div class="row">
        <h3 class="col-md-2" style="text-align: right;">血常规</h3>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2">wbc</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="xueChangGuiwbc"
                   value="<?= isset($info->xueChangGuiwbc)?$info->xueChangGuiwbc:""; ?>">
        </div>
        <div class="col-md-2 inputUnit">*10^9/L</div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2">N</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="xueChangGuiN"
                   value="<?= isset($info->xueChangGuiN)?$info->xueChangGuiN:""; ?>">
        </div>
        <div class="col-md-2 inputUnit">%</div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2">pt</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="xueChangGuipt"
                   value="<?= isset($info->xueChangGuipt)?$info->xueChangGuipt:""; ?>">
        </div>
        <div class="col-md-2 inputUnit">%</div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2">HB</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="xueChangGuiHB"
                   value="<?= isset($info->xueChangGuiHB)?$info->xueChangGuiHB:""; ?>">
        </div>
        <div class="col-md-2 inputUnit">%</div>
    </div>
    <hr>

    <div class="row">
        <h3 class="col-md-2" style="text-align: right;">肝功能</h3>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2">ALT</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="ganGongNengALT"
                   value="<?= isset($info->ganGongNengALT)?$info->ganGongNengALT:""; ?>">
        </div>
        <div class="col-md-2 inputUnit">U/L</div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2">AST</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="ganGongNengAST"
                   value="<?= isset($info->ganGongNengAST)?$info->ganGongNengAST:""; ?>">
        </div>
        <div class="col-md-2 inputUnit">U/L</div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2">白蛋白</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="ganGongNengBaiDanBai"
                   value="<?= isset($info->ganGongNengBaiDanBai)?$info->ganGongNengBaiDanBai:""; ?>">
        </div>
        <div class="col-md-2 inputUnit">g/l</div>
    </div>
    <hr>

    <div class="row">
        <h3 class="col-md-2" style="text-align: right;">肾功能</h3>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2">BUN</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="shenGongNengBUN"
                   value="<?= isset($info->shenGongNengBUN)?$info->shenGongNengBUN:""; ?>">
        </div>
        <div class="col-md-2 inputUnit">mmol/L</div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2">Cr</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="shenGongNengCr"
                   value="<?= isset($info->shenGongNengCr)?$info->shenGongNengCr:""; ?>">
        </div>
        <div class="col-md-2 inputUnit">umol/L</div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2">UA</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="shenGongNengUA"
                   value="<?= isset($info->shenGongNengUA)?$info->shenGongNengUA:""; ?>">
        </div>
        <div class="col-md-2 inputUnit">umol/L</div>
    </div>
    <hr>

    <div class="row">
        <h3 class="col-md-2" style="text-align: right;">血脂</h3>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2">LDL</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="xueZhiLDL"
                   value="<?= isset($info->xueZhiLDL)?$info->xueZhiLDL:""; ?>">
        </div>
        <div class="col-md-2 inputUnit">IU/L</div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2">HDL</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="xueZhiHDL"
                   value="<?= isset($info->xueZhiHDL)?$info->xueZhiHDL:""; ?>">
        </div>
        <div class="col-md-2 inputUnit">IU/L</div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2">TG</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="xueZhiTG"
                   value="<?= isset($info->xueZhiTG)?$info->xueZhiTG:""; ?>">
        </div>
        <div class="col-md-2 inputUnit">mmol</div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2">CHO</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="xueZhiCHO"
                   value="<?= isset($info->xueZhiCHO)?$info->xueZhiCHO:""; ?>">
        </div>
        <div class="col-md-2 inputUnit">mmol</div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2">HDL/CHO</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="xueZhiHDL"
                   value="<?= isset($info->xueZhiHDL)?$info->xueZhiHDL:""; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2">ApoA1</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="xueZhiApoA1"
                   value="<?= isset($info->xueZhiApoA1)?$info->xueZhiApoA1:""; ?>">
        </div>
        <div class="col-md-2 inputUnit">mmol</div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2">ApoB</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="xueZhiApoB"
                   value="<?= isset($info->xueZhiApoB)?$info->xueZhiApoB:""; ?>">
        </div>
        <div class="col-md-2 inputUnit">mmol</div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2">lp-a</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="xueZhiLPA"
                   value="<?= isset($info->xueZhiLPA)?$info->xueZhiLPA:""; ?>">
        </div>
        <div class="col-md-2 inputUnit">mmol</div>
    </div>
    <hr>

    <div class="form-group">
        <label class="control-label col-md-2">空腹血糖</label>

        <div class="col-md-4">
            <input type="text" class="form-control" name="kongFuXueTang"
                   value="<?= isset($info->kongFuXueTang)?$info->kongFuXueTang:""; ?>">
        </div>
        <div class="col-md-2 inputUnit">mmol/l</div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-2">糖化血红蛋白</label>

        <div class="col-md-4">
            <input type="text" class="form-control" name="tangHua"
                   value="<?= isset($info->tangHua)?$info->tangHua:""; ?>">
        </div>
        <div class="col-md-2 inputUnit">mmol/l</div>
    </div>

    <div class="form-group">
        <div class="col-md-offset-2 col-md-2">
            <button type="submit" id="saveNormal" class="btn btn-success form-control">保存</button>
        </div>
    </div>
</form>