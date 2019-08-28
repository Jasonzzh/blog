/*-----land-----*/
$(function(){
    var inputID = $("#adminID");
    var inputPW = $("#adminPW");
    inputID.focus(function(){
        $(this).attr('class','onInput');
    });
    inputID.blur(function(){
        $(this).attr('class','f_right');
    });
    inputPW.focus(function(){
        $(this).attr('class','onInput');
    });
    inputPW.blur(function(){
        $(this).attr('class','f_right');
    });
    $(".submit").click(function(){
        if(inputID.val().length == ''){
            alert("请输入用户名！");
            return false;
        }
        else if(inputPW.val().length == ''){
            alert("请输入密码！");
            return false;
        }
    })
});
/*-----end_land-----*/
