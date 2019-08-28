/*------admin_nav------*/
$(function(){
    var navLi = $(".admin_nav>ul>li");
    var centerLi = $(".admin_content>ul>li");
    centerLi.first().siblings().hide();
    navLi.click(function(){
        var index =$(this).index();
        $(this).addClass('li_cur');
        $(this).siblings().removeClass('li_cur');
        centerLi.eq(index).show();
        centerLi.eq(index).siblings().hide();
    })
});
/*------end_admin_nav------*/
/*------admin_content------*/
/*public  ajax请求方法封装 */
//ajax删除请求
function DeleteData(dataTable,keywords,id){
    $.post("http://localhost/newBlog/index.php?controller=admin&method=Delete",{
            dataTable:dataTable,
            keywords:keywords,
            id:id
        },
        function(data,status){
            //alert("Data: " + data + "\nStatus: " + status);
            return status;
    });
}
//发送ajax请求更改后台控制显示关闭字段值
function showHide(dataTable,key,keyValue,id){
    $.post("http://localhost/newBlog/index.php?controller=interactive&method=changeValue",{
            dataTable:dataTable,
            key:key,
            keyValue:keyValue,
            id:id
        },
        function(data,status){
            //alert("Data: " + data + "\nStatus: " + status);
            return status;
    });
}
/*end_public*/
/*lb_recommend_share*/
$(function(){
    var li = $(".lb_recommend_share>ul>li");
    //学习分享删除  生活点滴删除
    li.children(".delete,.ls_delete").on("click",function(){
        var con = confirm("是否确认删除此行数据，删除后无法恢复！请谨慎操作！");
        var id = parseInt($(this).parent().attr('data-id'),10);
        var dataTable = $(this).parent().attr('data-table');
        if(con){
            $(this).parent().remove();
            DeleteData(dataTable,'id',id);
        } else {
            return false;
        }
    });
    //隐藏显示
    $(".ls_controll").on("click",function(){
        var a;
        var id = parseInt($(this).parent().attr('data-id'),10);
        var dataTable = $(this).parent().attr('data-table');
        if($(this).hasClass('show')){
            $(this).removeClass('show');
            a = 1;
        } else{
            $(this).addClass("show");
            a = 0;
        }
        showHide(dataTable,'ControllShow',a,id);
    });
});
/*end_lb_recommend_share*/
/*excellentBlogs*/
$(function(){
    $(".controll").on("click",function(){
        var id = parseInt($(this).parent().attr('data-id'),10);
        if($(this).hasClass('show')){
            $(this).removeClass('show');
            showHide('excellent_blogs','ControllShow',0,id);
        } else{
            $(this).addClass("show");
            showHide('excellent_blogs','ControllShow',1,id);
        }
    });
    $(".blogs_delete").on("click",function(){
        var con = confirm("是否确认删除此行数据，删除后无法恢复！请谨慎操作！");
        if(con){
            $(this).parent().remove();
            var id = parseInt($(this).parent().attr('data-id'),10);
            DeleteData('excellent_blogs','id',id);
        } else{
            return false;
        }
    })
});
/*end_excellentBlogs*/
/*edit*/
$(function(){
    $(".ls_updata").on("click",function(){
        $(this).next(".edit").show();
        $(this).parent().find(".edit_center").addClass("edit_center_cur");
    });
    $(".close_edit").on("click",function(){
        $(this).parents(".edit").hide();
        $(this).parent().find(".edit_center").removeClass("edit_center_cur");
    });
    $(".submit_edit").on("click",function(){
        var dataTable = $(this).parents(".edit").parent().attr('data-table');
        var id = $(this).parents(".edit").parent().attr('data-id');
        var Title = $(this).parents(".edit_center").find(".Title").val();
        var SmallTitle = $(this).parents(".edit_center").find(".SmallTitle").val();
        var datatime = $(this).parents(".edit_center").find(".datatime").val();
        var Author = $(this).parents(".edit_center").find(".Author").val();
        var Content = $(this).parents(".edit_center").find(".Content").val();
        $(this).parents(".edit").prevAll(".blog_title").find("a>span").text(Title);
        $(this).parents(".edit").hide();
        $(this).parents(".edit").find(".edit_center").removeClass("edit_center_cur");
        alert("修改成功！");
        $.ajax({
            type:'post',
            url:'http://localhost/newBlog/index.php?controller=admin&method=updata',
            data:{
                dataTable:dataTable,
                id:id,
                Title:Title,
                SmallTitle:SmallTitle,
                datatime:datatime,
                Author:Author,
                Content:Content
            },
            datatype:'Json',
            success:function(data,status){
                //alert("Data: " + data + "\nStatus: " + status);
                return status;
            },
            error:function(status){
                alert("操作失败！请重新操作！")
                return status;
            }
        })
    })
});
/*end_edit*/
/*------end_admin_content------*/