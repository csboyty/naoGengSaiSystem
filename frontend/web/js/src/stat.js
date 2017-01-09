var stat=(function(config,functions){

    return {
        getCounts:function(){
            functions.showLoading();

            $.ajax({
                url:config.ajaxUrls.statGetCounts,
                type:"get",
                dataType:"json",
                data:{
                    filterDiseaseType:$("#filterDiseaseType").val()
                },
                success:function(data){
                    if(data.success){
                        functions.hideLoading();
                        $("#todayCount").text(data.counts.today);
                        $("#monthCount").text(data.counts.month);
                        $("#allCount").text(data.counts.all);
                    }else{
                        functions.ajaxReturnErrorHandler(data.error_code);
                    }
                },
                error:function(data){
                    functions.ajaxErrorHandler();
                }
            })
        },
        getData:function(url,type){
            functions.showLoading();
            var me=this;

            $.ajax({
                url:url,
                type:"get",
                dataType:"json",
                data:{
                    filterDiseaseType:$("#filterDiseaseType").val()
                },
                success:function(data){
                    if(data.success){
                        functions.hideLoading();
                        if(type=="sex"){
                            me.initSexChart(data);
                        }else{
                            me.initAgeChart(data);
                        }
                    }else{
                        functions.ajaxReturnErrorHandler(data.error_code);
                    }
                },
                error:function(data){
                    functions.ajaxErrorHandler();
                }
            })
        },
        initSexChart:function(data){
            var mySexChart = echarts.init(document.getElementById('sex'));
            var sexOption = {
                title : {
                    text: '性别',
                    subtext: '纯属虚构',
                    x:'center'
                },
                color: ['#66a4f9', '#eb6100', '#EC577B', '#32d6c5', '#4ac246'],
                tooltip: {
                    trigger: 'item',
                    formatter: "{a} <br/>{b}: {c} ({d}%)"
                },
                legend: {
                    orient: 'vertical',
                    x: 'right',
                    data:['男','女']
                },
                series: [
                    {
                        name:'性别',
                        type:'pie',
                        radius: ['50%', '70%'],
                        avoidLabelOverlap: false,
                        label: {
                            normal: {
                                show: false,
                                position: 'center'
                            },
                            emphasis: {
                                show: true,
                                textStyle: {
                                    fontSize: '30',
                                    fontWeight: 'bold'
                                }
                            }
                        },
                        labelLine: {
                            normal: {
                                show: false
                            }
                        },
                        data:data.data
                    }
                ]
            };
            mySexChart.setOption(sexOption);
        },
        initAgeChart:function(data){
            var myAgeChart = echarts.init(document.getElementById('age'));
            var ageOption = {
                title : {
                    text: '年龄',
                    subtext: '纯属虚构',
                    x:'center'
                },
                color: ['#66a4f9', '#eb6100', '#EC577B', '#32d6c5', '#4ac246'],
                tooltip : {
                    trigger: 'item',
                    formatter: "{a} <br/>{b} : {c} ({d}%)"
                },
                legend: {
                    orient: 'vertical',
                    left: 'right',
                    data: ['30-40','40-50','50-60','60-70','70-80']
                },
                series : [
                    {
                        name: '年龄',
                        type: 'pie',
                        radius : '55%',
                        center: ['50%', '60%'],
                        data:data.data,
                        itemStyle: {
                            emphasis: {
                                shadowBlur: 10,
                                shadowOffsetX: 0,
                                shadowColor: 'rgba(0, 0, 0, 0.5)'
                            }
                        }
                    }
                ]
            };
            myAgeChart.setOption(ageOption);
        },
        initPage:function(){

            stat.getCounts();
            stat.getData(config.ajaxUrls.statGetSexData,"sex");

            stat.getData(config.ajaxUrls.statGetAgeData,"age");
        }
    }
})(config,functions);
$(document).ready(function(){
    stat.initPage();
    $("#filterDiseaseType").change(function(){
        stat.initPage();
    });



});
