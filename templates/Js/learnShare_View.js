/*---lb_view---*/
$(function(){
    var Readbox = $(".ReadCount");
    var ReadCount = parseInt(Readbox.children("span").text(),10)+1;
    var id = parseInt(Readbox.children("span").attr('data-id'),10);
    Readbox.children("span").text(ReadCount);
    function Read(dataTable,key,ReadCount,id){
        $.post("http://localhost/newBlog/index.php?controller=interactive&method=changeValue",{
                dataTable:dataTable,
                key:key,
                keyValue:ReadCount,
                id:id
            },
            function(data,status){
                //alert("Data: " + data + "\nStatus: " + status);
                return status;
        });
    }
    Read('learn_share','ReadCount',ReadCount,id);
});
/*---end_lb_view---*/