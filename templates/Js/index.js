// const httpUrl = 'http://www.zhangqinblog.com/'; // 线上
const httpUrl = 'http://localhost/newBlog/'; // 本地
/*---banner---*/
$(function(){
    var index = 0;
    var $li = $(".banner>ul>li");
    var banner = $('.banner').width();
    var angle = 90;
    var isClick = true;
    $('.banner>ul>li').eq(0).css({transform: 'translateZ(-'+banner/2+'px) rotateY(180deg)'});
    $('.banner>ul>li').eq(3).css({transform: 'translateZ('+banner/2+'px)'});
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
        isClick = false;
        angle += 90;
        index++;
        if(index >= $li.length){
            index = 0;
        }
        $('.banner>ul').css({'transform': 'rotateY('+angle+'deg)'});
        $(".page_list>li").eq(index).addClass("active");
        $(".page_list>li").eq(index).siblings().removeClass("active");
        setTimeout(function () {
            isClick = true;
        },800)
    }
    function next(){
        isClick = false;
        angle -= 90;
        index--;
        if(index < 0){
            index = $li.length-1;
        }
        $('.banner>ul').css({'transform': 'rotateY('+angle+'deg)'});
        $(".page_list>li").eq(index).addClass("active");
        $(".page_list>li").eq(index).siblings().removeClass("active");
        setTimeout(function () {
            isClick = true;
        },800)
    }
    $(".page_prev").click(function(){
        if(isClick) {
            perv();
        }
    });
    $(".page_next").click(function(){
        if(isClick) {
            next();
        }
    });
    $(".page_list>li").on("click",function(){
        var indexbefore = index;
        index = $(this).index();
        angle -= (index - indexbefore)*90;
        $('.banner>ul').css({'transform': 'rotateY('+angle+'deg)'});
        $(this).addClass("active");
        $(this).siblings().removeClass("active");
    });
    var timer = setInterval(next,3000);
    $('.banner').hover(function () {
        clearInterval(timer)
    },function () {
        timer = setInterval(next,3000);
    })
});
/*---end_banner---*/
/*---lb_hot_share//lb_recommend_share---*/
//点赞功能实现
$(function(){
    function likeif(clickCount,id,e,data_table){
        if(e.hasClass("niceOn")){
            clickCount = parseInt(e.children("span").text(),10)-1;
            id = parseInt(e.children("span").attr("data-id"),10);
            e.children("span").text(clickCount);
            e.children("img").attr("src",httpUrl+"templates/Images/giveLike.png");
            e.removeClass("niceOn");
        }
        else{
            clickCount = parseInt(e.children("span").text(),10)+1;
            id = parseInt(e.children("span").attr("data-id"),10);
            e.children("span").text(clickCount);
            e.children("img").attr("src",httpUrl+"templates/Images/giveLike_On.png");
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
