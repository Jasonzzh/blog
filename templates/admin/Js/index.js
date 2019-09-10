// const httpUrl = 'http://www.zhangqinblog.com/index.php?'; // 线上
const httpUrl = 'http://localhost/newBlog/index.php?'; // 本地
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
    $.post(httpUrl+"controller=admin&method=Delete",{
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
    $.post(httpUrl+"controller=interactive&method=changeValue",{
            dataTable:dataTable,
            key:key,
            keyValue:parseInt(keyValue),
            id:id
        },
        function(data,status){
            console.log("Data: " + data + "\nStatus: " + status);
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
//博客推荐删除
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
$(function(){
    $(".blogs_updata").on("click",function(){
        $(this).next(".editblogs").show();
        $(this).parent().find(".editblogs_center").addClass("editblogs_center_cur");
    });
    $(".close_editblogs").on("click",function(){
        $(this).parents(".editblogs").hide();
        $(this).parent().find(".editblogs_center").removeClass("editblogs_center_cur");
    });
    //博客推荐修改
    $(".editblogs_edit").on("click",function(){
        var id = $(this).parents(".editblogs").parent().attr('data-id');
        var Title = $(this).parents(".editblogs_center").find(".Title").val();
        var SiteUrl = $(this).parents(".editblogs_center").find(".SiteUrl").val();
        var SiteEmail = $(this).parents(".editblogs_center").find(".SiteEmail").val();
        if(confirm("是否确认修改此数据！")){
            $(this).parents(".editblogs").hide();
            $(this).parent().find(".editblogs_center").removeClass("editblogs_center_cur");
            $(this).parents(".editblogs").prevAll(".name").text(Title);
            alert("修改成功！");
            $.ajax({
                type:'post',
                url:httpUrl+'controller=admin&method=blogsEdit',
                data:{
                    id:id,
                    Title:Title,
                    SiteUrl:SiteUrl,
                    SiteEmail:SiteEmail
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
        }
    });
    //博客推荐添加
    $(".editblogs_add").on("click",function(){
        var Title = $(this).parents(".editblogs_center").find(".Title").val();
        var SiteUrl = $(this).parents(".editblogs_center").find(".SiteUrl").val();
        var SiteEmail = $(this).parents(".editblogs_center").find(".SiteEmail").val();
        if(confirm("是确认添加此数据！")){
            $(this).parents(".editblogs").hide();
            $(this).parent().find(".editblogs_center").removeClass("editblogs_center_cur");
            alert("添加成功！");
            $.ajax({
                type:'post',
                url:httpUrl+'controller=admin&method=InsetBlogSite',
                data:{
                    Title:Title,
                    SiteUrl:SiteUrl,
                    SiteEmail:SiteEmail
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
        }
    })
})
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
    //文章修改
    $(".submit_edit").on("click",function(){
        var dataTable = $(this).parents(".edit").parent().attr('data-table');
        var id = $(this).parents(".edit").parent().attr('data-id');
        var Title = $(this).parents(".edit_center").find(".Title").val();
        var SmallTitle = $(this).parents(".edit_center").find(".SmallTitle").val();
        var datatime = $(this).parents(".edit_center").find(".datatime").val();
        var Author = $(this).parents(".edit_center").find(".Author").val();
        var Content = $(this).parents(".edit_center").find(".Content").val();
        if(confirm("是否确认修改此数据！")){
            $(this).parents(".edit").prevAll(".blog_title").find("a>span").text(Title);
            $(this).parents(".edit").hide();
            $(this).parents(".edit").find(".edit_center").removeClass("edit_center_cur");
            alert("修改成功！");
            $.ajax({
                type:'post',
                url:httpUrl+'controller=admin&method=updata',
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
        }
    });
    $(".submit_add").on("click",function(){
        var dataTable = $(this).parents(".edit").parent().attr('data-table');
        var Title = $(this).parents(".edit_center").find(".Title").val();
        var SmallTitle = $(this).parents(".edit_center").find(".SmallTitle").val();
        var datatime = $(this).parents(".edit_center").find(".datatime").val();
        var Author = $(this).parents(".edit_center").find(".Author").val();
        var Content = $(this).parents(".edit_center").find(".Content").val();
        if(confirm("是否确认添加此数据！")){
            $(this).parents(".edit").hide();
            $(this).parents(".edit").find(".edit_center").removeClass("edit_center_cur");
            alert("添加成功！");
            $.ajax({
                type:'post',
                url:httpUrl+'controller=admin&method=Insert',
                data:{
                    dataTable:dataTable,
                    Title:Title,
                    SmallTitle:SmallTitle,
                    datatime:datatime,
                    Author:Author,
                    Content:Content
                },
                datatype:'Json',
                success:function(data,status){
                    alert("Data: " + data + "\nStatus: " + status);
                    return status;
                },
                error:function(status){
                    alert("操作失败！请重新操作！")
                    return status;
                }
            })
        }
    })
});
/*end_edit*/
/*blogBG_style*/
//皮肤更换操作
$(function(){
    var ele = $(".blogBG_style>ul>li");
    ele.on("click",function(){
        $(this).addClass("skin_cur");
        $(this).siblings().removeClass("skin_cur");
        var id = parseInt($(this).attr('data-id'),10);
        $("html").attr('class','skin'+id);
        $.ajax({
            type:'post',
            url:httpUrl+'controller=admin&method=skinChange',
            data:{
                id:id
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
        });
    });
})
/*end_blogBG_style*/
/*------end_admin_content------*/