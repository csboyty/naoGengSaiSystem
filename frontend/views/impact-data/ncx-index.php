<?php
$this->title = $patient->fullname . "影像资料";

$TCD = isset($impactData->TCD) ? json_decode($impactData->TCD) : null;
$caiChao = isset($impactData->caiChao) ? json_decode($impactData->caiChao) : null;
$MRA = isset($impactData->MRA) ? json_decode($impactData->MRA) : null;
$CT = isset($impactData->CT) ? json_decode($impactData->CT) : null;
$other = isset($impactData->other) ? json_decode($impactData->other) : null;

?>

<script>
    var patientId = "<?= $patient->id;  ?>";
</script>

<a class="btn btn-primary" style="margin-bottom: 10px;" href="javascript:history.go(-1);">
    <span class="glyphicon glyphicon-arrow-left"></span> 返回
</a>

<div class="panel-group" id="accordion" aria-multiselectable="true">
<div class="panel panel-default">
    <div class="panel-heading" id="heading1">
        <h4 class="panel-title">
            <a data-toggle="collapse" href="#collapse1" data-parent="#accordion"
               aria-expanded="true" aria-controls="collapse1">
                TCD（cm/s）
            </a>
        </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in" aria-labelledby="heading1">
        <div class="panel-body">
            <table class="dataTable" id="TCDTable">
                <thead>
                <tr>
                    <th></th>
                    <th>收缩期峰流速</th>
                    <th>舒张末期流速</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>LMCA</td>
                    <td><input type="text" class="form-control value" name="LMCA"
                               data-name-parent="TCD" value="<?= isset($TCD->LMCA[0]) ? $TCD->LMCA[0] : ""; ?>">
                    </td>
                    <td><input type="text" class="form-control value" name="LMCA"
                               data-name-parent="TCD" value="<?= isset($TCD->LMCA[1]) ? $TCD->LMCA[1] : ""; ?>">
                    </td>
                </tr>
                <tr>
                    <td>LACA</td>
                    <td><input type="text" class="form-control value" name="LACA"
                               data-name-parent="TCD" value="<?= isset($TCD->LACA[0]) ? $TCD->LACA[0] : ""; ?>">
                    </td>
                    <td><input type="text" class="form-control value" name="LACA"
                               data-name-parent="TCD" value="<?= isset($TCD->LACA[1]) ? $TCD->LACA[1] : ""; ?>">
                    </td>
                </tr>
                <tr>
                    <td>LPCA2</td>
                    <td><input type="text" class="form-control value" name="LPCA2"
                               data-name-parent="TCD" value="<?= isset($TCD->LPCA2[0]) ? $TCD->LPCA2[0] : ""; ?>">
                    </td>
                    <td><input type="text" class="form-control value" name="LPCA2"
                               data-name-parent="TCD" value="<?= isset($TCD->LPCA2[1]) ? $TCD->LPCA2[1] : ""; ?>">
                    </td>
                </tr>
                <tr>
                    <td>LVA</td>
                    <td><input type="text" class="form-control value" name="LVA"
                               data-name-parent="TCD" value="<?= isset($TCD->LVA[0]) ? $TCD->LVA[0] : ""; ?>">
                    </td>
                    <td><input type="text" class="form-control value" name="LVA"
                               data-name-parent="TCD" value="<?= isset($TCD->LVA[1]) ? $TCD->LVA[1] : ""; ?>">
                    </td>
                </tr>
                <tr>
                    <td>RMCA</td>
                    <td><input type="text" class="form-control value" name="RMCA"
                               data-name-parent="TCD" value="<?= isset($TCD->RMCA[0]) ? $TCD->RMCA[0] : ""; ?>">
                    </td>
                    <td><input type="text" class="form-control value" name="RMCA"
                               data-name-parent="TCD" value="<?= isset($TCD->RMCA[1]) ? $TCD->RMCA[1] : ""; ?>">
                    </td>
                </tr>
                <tr>
                    <td>RACA</td>
                    <td><input type="text" class="form-control value" name="RACA"
                               data-name-parent="TCD" value="<?= isset($TCD->RACA[0]) ? $TCD->RACA[0] : ""; ?>">
                    </td>
                    <td><input type="text" class="form-control value" name="RACA"
                               data-name-parent="TCD" value="<?= isset($TCD->RACA[1]) ? $TCD->RACA[1] : ""; ?>">
                    </td>
                </tr>
                <tr>
                    <td>RPCA2</td>
                    <td><input type="text" class="form-control value" name="RPCA2"
                               data-name-parent="TCD" value="<?= isset($TCD->RPCA2[0]) ? $TCD->RPCA2[0] : ""; ?>">
                    </td>
                    <td><input type="text" class="form-control value" name="RPCA2"
                               data-name-parent="TCD" value="<?= isset($TCD->RPCA2[1]) ? $TCD->RPCA2[1] : ""; ?>">
                    </td>
                </tr>
                <tr>
                    <td>RVA</td>
                    <td><input type="text" class="form-control value" name="RVA"
                               data-name-parent="TCD" value="<?= isset($TCD->RVA[0]) ? $TCD->RVA[0] : ""; ?>">
                    </td>
                    <td><input type="text" class="form-control value" name="RVA"
                               data-name-parent="TCD" value="<?= isset($TCD->RVA[1]) ? $TCD->RVA[1] : ""; ?>">
                    </td>
                </tr>
                <tr>
                    <td>BA</td>
                    <td><input type="text" class="form-control value" name="BA"
                               data-name-parent="TCD" value="<?= isset($TCD->BA[0]) ? $TCD->BA[0] : ""; ?>">
                    </td>
                    <td><input type="text" class="form-control value" name="BA"
                               data-name-parent="TCD" value="<?= isset($TCD->BA[1]) ? $TCD->BA[1] : ""; ?>">
                    </td>
                </tr>
                </tbody>
            </table>
            <br>
            <button class="btn btn-success col-md-2 col-md-offset-2" id="saveTCD">保存</button>
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading" id="heading2">
        <h4 class="panel-title">
            <a data-toggle="collapse" href="#collapse2" data-parent="#accordion"
               aria-expanded="true" aria-controls="collapse2">
                颈动脉彩超
            </a>
        </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse in" aria-labelledby="heading2">
        <div class="panel-body">
            <form class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-md-2">彩超号</label>

                    <div class="col-md-8">
                        <input type="text" class="form-control" name="number" data-name-parent="caiChao"
                               value="<?= isset($caiChao->number) ? $caiChao->number : ""; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">颈动脉内膜厚度（最大值）</label>

                    <div class="col-md-8">
                        <input type="text" class="form-control" name="neiMoHou" data-name-parent="caiChao"
                               value="<?= isset($caiChao->neiMoHou) ? $caiChao->neiMoHou : ""; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">斑块个数</label>

                    <div class="col-md-8">
                        <input type="text" class="form-control" name="banKuaiShu" data-name-parent="caiChao"
                               value="<?= isset($caiChao->banKuaiShu) ? $caiChao->banKuaiShu : ""; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">斑块性质</label>

                    <div class="col-md-8">
                        <?php
                        $banKuaiXingZhiArray = array("高", "低", "混合回声斑块", "都有", "无");
                        $banKuaiXingZhiSel = "";

                        if ($caiChao && $caiChao->banKuaiXingZhi) {
                            $banKuaiXingZhiSel = $caiChao->banKuaiXingZhi;
                        }

                        foreach ($banKuaiXingZhiArray as $bkxz) {
                            $banKuaiXingZhiChecked = "";
                            if ($banKuaiXingZhiSel == $bkxz) {
                                $banKuaiXingZhiChecked = " checked ";
                            }

                            ?>

                            <label class="radio-inline">
                                <input type="radio" <?= $banKuaiXingZhiChecked; ?> value="<?= $bkxz; ?>"
                                       data-name-parent="caiChao"
                                       name="banKuaiXingZhi"><?= $bkxz; ?>
                            </label>

                        <?php
                        }

                        ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-2">
                        <button type="submit" id="saveCaiChao" class="btn btn-success form-control">保存</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading" id="heading3">
        <h4 class="panel-title">
            <a data-toggle="collapse" href="#collapse3" data-parent="#accordion"
               aria-expanded="true" aria-controls="collapse3">
                MRA/CTA
            </a>
        </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse in" aria-labelledby="heading3">
        <div class="panel-body">
            <form class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-md-2">MRA/CTA号</label>

                    <div class="col-md-8">
                        <input type="text" class="form-control" name="number" data-name-parent="MRA"
                               value="<?= isset($MRA->number) ? $MRA->number : ""; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">willis环完整性</label>

                    <div class="col-md-8">
                        <?php
                        $willisArray = array("完整 willis环各个血管均存在", "前循环完整后循环不完整，后循环至少有一根血管不显影",
                            "前循环不完整后循环完整，前循环至少有一根血管不显影", "前后循环均不完整，前后循环均至少有一根血管不显影");
                        $willisSel = "";

                        if ($MRA && $MRA->willis) {
                            $willisSel = $MRA->willis;
                        }

                        foreach ($willisArray as $willise) {
                            $willisChecked = "";
                            if ($willisSel == $willise) {
                                $willisChecked = " checked ";
                            }

                            ?>

                            <label class="radio-inline">
                                <input type="radio" <?= $willisChecked; ?> value="<?= $willise; ?>"
                                       data-name-parent="MRA"
                                       name="willis"><?= $willise; ?>
                            </label>
                            <br>

                        <?php
                        }

                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">颅内动脉的狭窄</label>

                    <div class="col-md-8">
                        <?php
                        $luNeiDongMaiKuanZhaArray = array("1", "2", "3", "4", "5","6");
                        $luNeiDongMaiKuanZhaSel = "";

                        if ($MRA && $MRA->luNeiDongMaiKuanZha) {
                            $luNeiDongMaiKuanZhaSel = $MRA->luNeiDongMaiKuanZha;
                        }

                        foreach ($luNeiDongMaiKuanZhaArray as $lndmkz) {
                            $luNeiDongMaiKuanZhaChecked = "";
                            if ($luNeiDongMaiKuanZhaSel == $lndmkz) {
                                $luNeiDongMaiKuanZhaChecked = " checked ";
                            }

                            ?>

                            <label class="radio-inline">
                                <input type="radio" <?= $luNeiDongMaiKuanZhaChecked; ?> value="<?= $lndmkz; ?>"
                                       data-name-parent="MRA"
                                       name="luNeiDongMaiKuanZha"><?= $lndmkz; ?>
                            </label>

                        <?php
                        }

                        ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-2">
                        <button type="submit" id="saveMRA" class="btn btn-success form-control">保存</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="panel panel-default">
    <div class="panel-heading" id="heading4">
        <h4 class="panel-title">
            <a data-toggle="collapse" href="#collapse4" data-parent="#accordion"
               aria-expanded="true" aria-controls="collapse4">
                CT/MRI
            </a>
        </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse in" aria-labelledby="heading4">
        <div class="panel-body">
            <form class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-md-2">CT/MRI号</label>

                    <div class="col-md-8">
                        <input type="text" class="form-control" name="number" data-name-parent="CT"
                               value="<?= isset($CT->number) ? $CT->number : ""; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2">出血点</label>

                    <div class="col-md-8">
                        <?php
                        $chuXueDianArray = array("基底节出血","丘脑出血","皮层（脑叶）出血","小脑出血","脑干出血",
                            "原发性脑室出血");
                        $chuXueDianSel = "";

                        if ($CT && $CT->chuXueDian) {
                            $chuXueDianSel = $CT->chuXueDian;
                        }

                        foreach ($chuXueDianArray as $cxde) {
                            $chuXueDianChecked = "";
                            if ($chuXueDianSel == $cxde) {
                                $chuXueDianChecked = " checked ";
                            }

                            ?>

                            <label class="radio-inline">
                                <input type="radio" <?= $chuXueDianChecked; ?> value="<?= $cxde; ?>"
                                       data-name-parent="CT"
                                       name="chuXueDian"><?= $cxde; ?>
                            </label>

                        <?php
                        }

                        ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-2">
                        <button type="submit" id="saveCT" class="btn btn-success form-control">保存</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="panel panel-default">
    <div class="panel-heading" id="heading5">
        <h4 class="panel-title">
            <a data-toggle="collapse" href="#collapse5" data-parent="#accordion"
               aria-expanded="true" aria-controls="collapse5">
                其他
            </a>
        </h4>
    </div>
    <div id="collapse5" class="panel-collapse collapse in" aria-labelledby="heading5">
        <div class="panel-body">
            <form class="form-horizontal">

                <div class="form-group">
                    <label class="control-label col-md-2">眼动脉硬化</label>

                    <div class="col-md-8">
                        <?php
                        $yanDongMaiYingHuaArray = array("1级　小动脉光反射增宽，有轻度或无动静脉交叉压迫征。",
                            "2级　小动脉光反射增宽，动静脉交叉压迫较显著。",
                            "3级　小动脉铜丝状，动静脉交叉压迫征明显。",
                            "4级　动脉银丝状，动静脉交叉压迫征更严重。");
                        $yanDongMaiYingHuaSel = "";

                        if ($other && $other->yanDongMaiYingHua) {
                            $yanDongMaiYingHuaSel = $other->yanDongMaiYingHua;
                        }

                        foreach ($yanDongMaiYingHuaArray as $ydmyh) {
                            $yanDongMaiYingHuaChecked = "";
                            if ($yanDongMaiYingHuaSel == $ydmyh) {
                                $yanDongMaiYingHuaChecked = " checked ";
                            }

                            ?>

                            <label class="radio-inline">
                                <input type="radio" <?= $yanDongMaiYingHuaChecked; ?> value="<?= $ydmyh; ?>"
                                       data-name-parent="other"
                                       name="yanDongMaiYingHua"><?= $ydmyh; ?>
                            </label>
                            <br>
                        <?php
                        }

                        ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2">动脉硬化</label>

                    <div class="col-md-8">
                        <?php
                        $dongMaiYingHuaArray = array("大动脉","中动脉","小动脉","混合型");
                        $dongMaiYingHuaSel = "";

                        if ($other && $other->dongMaiYingHua) {
                            $dongMaiYingHuaSel = $other->dongMaiYingHua;
                        }

                        foreach ($dongMaiYingHuaArray as $dmyh) {
                            $dongMaiYingHuaChecked = "";
                            if ($dongMaiYingHuaSel == $dmyh) {
                                $dongMaiYingHuaChecked = " checked ";
                            }

                            ?>

                            <label class="radio-inline">
                                <input type="radio" <?= $dongMaiYingHuaChecked; ?> value="<?= $dmyh; ?>"
                                       data-name-parent="other"
                                       name="dongMaiYingHua"><?= $dmyh; ?>
                            </label>
                        <?php
                        }

                        ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2">脑出血病因分型</label>

                    <div class="col-md-8">
                        <?php
                        $bingYinFenXingArray = array("高血压脑出血","血管淀粉样变","颅内动脉瘤",
                            "动静脉畸形","静脉窦血栓继发出血","其他原因","原因不明");
                        $bingYinFenXingSel = "";

                        if ($other && $other->bingYinFenXing) {
                            $bingYinFenXingSel = $other->bingYinFenXing;
                        }

                        foreach ($bingYinFenXingArray as $byfx) {
                            $bingYinFenXingChecked = "";
                            if ($bingYinFenXingSel == $byfx) {
                                $bingYinFenXingChecked = " checked ";
                            }

                            ?>

                            <label class="radio-inline">
                                <input type="radio" <?= $bingYinFenXingChecked; ?> value="<?= $byfx; ?>"
                                       data-name-parent="other"
                                       name="bingYinFenXing"><?= $byfx; ?>
                            </label>
                        <?php
                        }

                        ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-2">
                        <button type="submit" id="saveOther" class="btn btn-success form-control">保存</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</div>

<?php
$this->registerJsFile("@web/js/src/impactData.js", ['depends' => [frontend\assets\AppAsset::className()]]);
?>
