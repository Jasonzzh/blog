/*---handIn_Sites---*/
$(function(){
    $(".openSubmitBolgs").on("click",function(){
        $(".cover").show();
        $(".handIn_Sites").addClass("handIn_Sites_cur");
    });
    $(".closeSubmitBolgs").on("click",function(){
        $(".cover").hide();
        $(".handIn_Sites").removeClass("handIn_Sites_cur");
    });
    $(".handInSite").click(function(){
        var reg = new RegExp("^[a-z0-9]+([._\\-]*[a-z0-9])*@([a-z0-9]+[-a-z0-9]*[a-z0-9]+.){1,63}[a-z0-9]+$");
        if($(".blog_name").val().length == ''){
            alert("请您输入博客名！");
            return false;
        }
        else if($(".blog_url").val().length == ''){
            alert("请您输入博客地址！");
            return false;
        }
        else if($(".blog_email").val().length == ''){
            alert("请您输入博主邮箱！");
            return false;
        }
        else if(!reg.test($(".blog_email").val())){
            alert("邮箱格式不正确！请重新输入！");
            return false;
        }
    })
});
/*---end_handIn_Sites---*/