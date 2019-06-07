var urlPrefix="http://localhost/A00/admin.php/"

function sendClothesData(){
    var productId=$("#clothesId").val();
    var productPrice=$("#clothesPrice").val();
    var productDescription=$("#clothesDescription").val();
    var productAlis=$("#clothesAlis").val();
    var productType=$("#clothesType").val();
    var sex=$('input:radio[name="sex"]:checked').val();
    var image=document.getElementById('clothesImage').files[0];
    var rurl=urlPrefix+"Clothes/add";
    var formData = new FormData()  //创建一个forData
    formData.append('img',image );
    formData.append("productId",productId);
    formData.append("productAlis",productAlis);
    formData.append("productPrice",productPrice);
    formData.append("productDescpription",productDescription);
    formData.append("productType",productType);
    formData.append("sex",sex);
    $.ajax({
        url:rurl,
        type:"post",
        processData:false,
        cache:false,
        contentType:false,
         dataType:"JSON",
        data:formData,
        success:function(data){
            if(data.status=="success"){
                layer.msg(data.message,{icon: 1,time:2000},function(index){
                    layer.close(index);
                    window.history.back();
                });
            }else{
                layer.msg(data.message,{icon: 2,time:2000},function(index){
                    layer.close(index);
                    window.location.reload();
                });
            }

          //  alert(data.status+" "+decodeURI(data.message));
        },
        error:function(e,x){
            console.log('nonono');
        }

    })
}

function searchProductExtraMessage(productId){
    var url=urlPrefix+"Clothes/getProductFullInformation"+"?product_id="+productId;
    layer.open({
        area:["1000px","600px"],
        type: 2,
        content: url//这里content是一个URL，如果你不想让iframe出现滚动条，你还可以content: ['http://sentsin.com', 'no']
    });
}


//今日click
function todayDate() {
    var today=document.getElementById("today")
    if(today.name==1){
        $("#today").css("color","#FF83FA")
        today.name=2;
    }else{
        today.name=1;
        $("#today").css("color","#FFFFFF");
    }
}

function addCategory() {
    layer.confirm('确定增加类别', {
        btn: ['yes', 'no'] //可以无限个按钮
    }, function(inde, layero){
        rurl=urlPrefix+"Category/addCategory"
        var categoryName=document.getElementById("categoryName").value
        var categoryDesc=document.getElementById("categoryDescription").value
        //yes 按钮的回调
        $.ajax({
            url:rurl,
            type:"post",
            dataType:"JSON",
            data:{
                "productName":categoryName,
                "productDescription":categoryDesc
             },
            success:function(data){
                if(data.status=="success"){
                    layer.msg(data.message,{icon: 1,time:2000},function(index){
                        layer.close(index);
                        window.location.reload();
                    });

                }else{
                    layer.msg(data.message,{icon: 2,time:2000},function(index){
                        layer.close(index);
                        window.location.reload();
                    });
                }
            },
            error:function(e,x){
                console.log('nonono');
            }

        })
        layer.close(inde);

    },function(index){
            //no 按钮
            layer.close(index)
        });
}

// 改变类别的信息
function changeCategory(product_id){
    var url=urlPrefix+"Category/changeCategory"+"?product_id="+product_id;
    layer.open({
        area:["800px","400px"],
        type: 2,
        scrollbar:false,
        content: url//这里content是一个URL，如果你不想让iframe出现滚动条，你还可以content: ['http://sentsin.com', 'no']
    });
}

function submitChangeCategory() {
    var today=document.getElementById("today");
    var flag=today.name;
    if(flag==1){
       layer.open(
           {
               title:"友情提示",
               type:1,
               content:"<span style=\"font-size: large;color: #006dcc\">尚未点击修改按钮,无法修改</span>",
               area:["240px","150px"]
           }
       )
    }
    if(flag==2){
       var desc=$("#category_desc").val();
       var category_id=$("#category_id").val();
       var name=$("#category_name").val();
       if(name==""){
           layer.msg('没有输入类别名',{time:2000},function(){
               window.location.reload();
           });
           return ;
       }

       var ru=urlPrefix+"Category/submitChangeCategory";
        $.ajax({
            url:ru,
            type:"post",
            dataType:"JSON",
            data:{
                "category_id":category_id,
                "category_name":name,
                "category_desc":desc
            },
            success:function(data){
                if(data.status=="success"){
                    layer.msg(data.message,{icon: 1,time:2000},function(index){
                        layer.close(index);
                        window.location.reload();
                    });

                }else{
                    layer.msg(data.message,{icon: 2,time:2000},function(index){
                        layer.close(index);
                        window.location.reload();
                    });

                }
            },
            error:function(e,x){
                console.log('nonono');
            }

        })
    }


}
