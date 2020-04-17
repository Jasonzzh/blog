const httpUrl = 'https://www.zhangqinblog.com/'; // 线上
// const httpUrl = 'http://localhost/newBlog/'; // 本地
/*---lb_recommend_share---*/
//点赞功能实现
$(function(){
    function likeif(clickCount,id,e,data_table){
        if(e.hasClass("niceOn")){
            clickCount = parseInt(e.children("span").text(),10)-1;
            id =  parseInt(e.children("span").attr("data-id"),10);
            e.children("span").text(clickCount);
            e.children("img").attr("src",httpUrl+"templates/Images/giveLike.png");
            e.removeClass("niceOn");
        }
        else{
            clickCount = parseInt(e.children("span").text(),10)+1;
            id =  parseInt(e.children("span").attr("data-id"),10);
            e.children("span").text(clickCount);
            e.children("img").attr("src",httpUrl+"templates/Images/giveLike_On.png");
            e.addClass("niceOn");
        }
        giveLk(data_table,'ClickLike',clickCount,id);
    }
    $(".lb_recommend_share .giveLike").on('click',function(){
        var clickCount,id,e = $(this);
        likeif(clickCount,id,e,'life_dribs');
    });
    function giveLk(dataTable,key,clickCount,id){
        $.post(httpUrl+"index.php?controller=interactive&method=changeValue",{
                dataTable:dataTable,
                key:key,
                keyValue:clickCount,
                id:id
            },
            function(data,status){
                //alert("Data: " + data + "\nStatus: " + status);
                return status;
        });
    }
});
//热判断
$(function(){
    $(".lb_recommend_share>ul>li").each(function(){
        var a = $(this).children(".blog_content").find(".see span").text();
        a = parseInt(a,10);
        if(a < 50){
            $(this).children(".blog_title").find("b").remove();
        }
    })
});
//滚动插件实例化
$(function(){
    (function(){
        window.scrollReveal = new scrollReveal({ reset: true, move: '50px'});
    })();
});
/*---end_lb_recommend_share---*/