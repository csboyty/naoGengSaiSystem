var impactData=(function(config,functions){
    return {
        getTableTrValues:function(trs){
            var obj={},arr=[],name;
            trs.each(function(index,el){
                el=$(el);
                name=el.find("td:eq(0)").text();
                arr=[];
                el.find("input.value").each(function(index,el){
                    arr.push($(el).val());
                });
                obj[name]=arr;
            });

            return obj;
        }
    }
})(config,functions);

$(document).ready(function(){
    $("#saveTCD").click(function () {
        var info=impactData.getTableTrValues($("#TCDTable tbody tr"));

        functions.saveInfo(config.ajaxUrls.impactDataUpdate, {
            patientId: patientId,
            type:"TCD",
            col:"info",
            TCD: JSON.stringify(info)
        });
        return false;
    });
    $("#saveCaiChao").click(function () {
        var info=functions.getInfo("caiChao");

        functions.saveInfo(config.ajaxUrls.impactDataUpdate, {
            patientId: patientId,
            type:"caiChao",
            col:"info",
            caiChao: JSON.stringify(info)
        });
        return false;
    });
    $("#saveMRA").click(function () {
        var info=functions.getInfo("MRA");

        functions.saveInfo(config.ajaxUrls.impactDataUpdate, {
            patientId: patientId,
            type:"MRA",
            col:"info",
            MRA: JSON.stringify(info)
        });
        return false;
    });
    $("#saveCT").click(function () {
        var info=functions.getInfo("CT");

        functions.saveInfo(config.ajaxUrls.impactDataUpdate, {
            patientId: patientId,
            type:"CT",
            col:"info",
            CT: JSON.stringify(info)
        });
        return false;
    });
    $("#saveOther").click(function () {
        var info=functions.getInfo("other");

        functions.saveInfo(config.ajaxUrls.impactDataUpdate, {
            patientId: patientId,
            type:"other",
            col:"info",
            other: JSON.stringify(info)
        });
        return false;
    });
});
