var baseInfo=(function(config,functions){
    return {

    }
})(config,functions);

$(document).ready(function(){
    $("#saveNormal").click(function () {
        var info=functions.getInfo("info");

        functions.saveInfo(config.ajaxUrls.baseInfoUpdate, {
            patientId: patientId,
            type:"info",
            col:"info",
            info: JSON.stringify(info)
        });
        return false;
    });
    $("#saveXueChangGui").click(function () {
        var info=functions.getInfo("xueChangGui");

        functions.saveInfo(config.ajaxUrls.baseInfoUpdate, {
            patientId: patientId,
            type:"xueChangGui",
            col:"info",
            xueChangGui: JSON.stringify(info)
        });
        return false;
    });
    $("#saveGanGongNeng").click(function () {
        var info=functions.getInfo("ganGongNeng");

        functions.saveInfo(config.ajaxUrls.baseInfoUpdate, {
            patientId: patientId,
            type:"ganGongNeng",
            col:"info",
            ganGongNeng: JSON.stringify(info)
        });
        return false;
    });
    $("#saveShenGongNeng").click(function () {
        var info=functions.getInfo("shenGongNeng");

        functions.saveInfo(config.ajaxUrls.baseInfoUpdate, {
            patientId: patientId,
            type:"shenGongNeng",
            col:"info",
            shenGongNeng: JSON.stringify(info)
        });
        return false;
    });
    $("#saveXueZhi").click(function () {
        var info=functions.getInfo("xueZhi");

        functions.saveInfo(config.ajaxUrls.baseInfoUpdate, {
            patientId: patientId,
            type:"xueZhi",
            col:"info",
            xueZhi: JSON.stringify(info)
        });
        return false;
    });
});
