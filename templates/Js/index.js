/*---banner---*/
$(function(){
    var index = 1;
    var $li = $(".banner>ul>li");
    /*----js动态按钮创建----*/
    function creatButton(){
        for(var a=0;a<$li.length;a++){
            if(a==0){
                $(".page_list").append("<li class='page active'></li>");
            }
            else{
                $(".page_list").append("<li class='page'></li>");
            }
        }
    }
    creatButton();
    function perv(){
        $li.eq(index).fadeIn();
        $li.eq(index).siblings().fadeOut();
        $(".page_list>li").eq(index).addClass("active");
        $(".page_list>li").eq(index).siblings().removeClass("active");
        index++;
        if(index >= $li.length){
            index = 0;
        }
    }
    function next(){
        $li.eq(index).fadeIn();
        $li.eq(index).siblings().fadeOut();
        $(".page_list>li").eq(index).addClass("active");
        $(".page_list>li").eq(index).siblings().removeClass("active");
        index--;
        if(index < 0){
            index = $li.length-1;
        }
    }
    $(".page_prev").click(function(){
        perv();
    });
    $(".page_next").click(function(){
        next();
    });
    $(".page_list>li").on("click",function(){
        var tn = $(this).index();
        $(this).addClass("active");
        $(this).siblings().removeClass("active");
        $li.eq(tn).fadeIn();
        $li.eq(tn).siblings().fadeOut();
    });
    setInterval(perv,5000);
});
/*---end_banner---*/
/*---lb_hot_share//lb_recommend_share---*/
//点赞功能实现
$(function(){
    function likeif(clickCount,id,e,data_table){
        if(e.hasClass("niceOn")){
            clickCount = parseInt(e.children("span").text(),10)-1;
            id =  parseInt(e.children("span").attr("data-id"),10);
            e.children("span").text(clickCount);
            e.children("img").attr("src","http://localhost/newBlog/templates/Images/giveLike.png");
            e.removeClass("niceOn");
        }
        else{
            clickCount = parseInt(e.children("span").text(),10)+1;
            id =  parseInt(e.children("span").attr("data-id"),10);
            e.children("span").text(clickCount);
            e.children("img").attr("src","http://localhost/newBlog/templates/Images/giveLike_On.png");
            e.addClass("niceOn");
        }
        giveLk(data_table,'ClickLike',clickCount,id);
    }
    $(".lb_hot_share .giveLike").on('click',function(){
        var clickCount,id,e = $(this);
        likeif(clickCount,id,e,'learn_share');
    });
    $(".lb_recommend_share .giveLike").on('click',function(){
        var clickCount,id,e = $(this);
        likeif(clickCount,id,e,'life_dribs');
    });
    function giveLk(dataTable,key,clickCount,id){
        $.post("http://localhost/newBlog/index.php?controller=interactive&method=changeValue",{
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
/*---end_lb_hot_share//lb_recommend_share---*/
/*---lb_recommend_share---*/
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
/*rb_excellentBlogs*/
$(function () {
    //
})
/*end_rb_excellentBlogs*/
