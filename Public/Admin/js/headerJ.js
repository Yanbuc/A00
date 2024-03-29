// 改变用户信息：
function changeUserInfo() {
    var userId=$("#userNa").val();
    var url=urlPrefix+"User/showUserInfo"+"?userId="+userId;
    layer.open({
        area:["800px","400px"],
        type: 2,
        scrollbar:false,
        content: url//这里content是一个URL，如果你不想让iframe出现滚动条，你还可以content: ['http://sentsin.com', 'no']
    });
}
// 查询用户信息
function searchUserInfo(userId) {
    var url=urlPrefix+"User/showUserInfo"+"?userId="+userId;
    layer.open({
        area:["800px","400px"],
        type: 2,
        scrollbar:false,
        content: url//这里content是一个URL，如果你不想让iframe出现滚动条，你还可以content: ['http://sentsin.com', 'no']
    });
}
// 查询用户权限
function searchUserPrevelidge(userId) {
    var url=urlPrefix+"User/showUserPrevelidge"+"?userId="+userId;
    layer.open({
        area:["800px","400px"],
        type: 2,
        scrollbar:false,
        content: url//这里content是一个URL，如果你不想让iframe出现滚动条，你还可以content: ['http://sentsin.com', 'no']
    });
}

// 删除指定用户
function deleteUser(userId) {
    layer.confirm('确定是否删除用户', {
        btn: ['确定删除', '我再想想'] //可以无限个按钮
    }, function(inde, layero){
        rurl=urlPrefix+"User/deleteUser"
        //yes 按钮的回调
        $.ajax({
            url:rurl,
            type:"post",
            dataType:"JSON",
            data:{
                "userId":userId
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

// 提交用户权限修改
function submitUserPrevelidgeChange(userId) {
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
        var check = document.getElementsByName("chks");
        var check2= document.getElementsByName("chk2");
        var userHas="";
        var userNotHas="";
        for (var i = 0; i < check.length; i++) {
            if (check[i].checked) {
                userHas += (check[i].value + ",");
            }else{
                userNotHas+=(check[i].value + ",");
            }
        }
        for (var i = 0; i < check2.length; i++) {
            if (check2[i].checked) {
                userHas += (check2[i].value + ",");
            }else{
                userNotHas+=(check2[i].value + ",");
            }
        }
        var ru=urlPrefix+"User/changeUserPrevelidge";
        $.ajax({
            url:ru,
            type:"post",
            dataType:"JSON",
            data:{
                "user_id":userId,
                "userHas":userHas,
                "userNotHas":userNotHas
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

function changeUserPwd() {
    var userId=$("#userNa").val();
    var url=urlPrefix+"User/showChangePwdInfo"+"?userId="+userId;
    layer.open({
        area:["800px","400px"],
        type: 2,
        scrollbar:false,
        content: url//这里content是一个URL，如果你不想让iframe出现滚动条，你还可以content: ['http://sentsin.com', 'no']
    });
}

function submitUserChange() {
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
        var name=$("#userName").val();
        var realName=$("#userRealName").val();
        var userId=$("#user_id").val();
        if(name==""){
            layer.msg('没有输入用户名',{time:2000},function(){
                window.location.reload();
            });
            return ;
        }
        if(realName==""){
            layer.msg('没有输入真实姓名',{time:2000},function(){
                window.location.reload();
            });
            return ;
        }

        var ru=urlPrefix+"User/changeUserName";
        $.ajax({
            url:ru,
            type:"post",
            dataType:"JSON",
            data:{
               "user_id":userId,
                "username":name,
                "real_name":realName
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

// 修改用户密码
function submitUserPwd() {

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
        var password=$("#password").val();
        var newPassword=$("#newpassword").val();
        var confirmPassword=$("#confirmPassword").val();
        var userId=$("#userId").val();

        var ru=urlPrefix+"User/changeUserPwd";
        $.ajax({
            url:ru,
            type:"post",
            dataType:"JSON",
            data:{
                "userId":userId,
                "password":password,
                "newPassword":newPassword,
                "confirmPassword":confirmPassword
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

// 查询权限
function searchPrevelidgeInfo(prevelidgeid) {
    var url=urlPrefix+"Priviledges/showSinglePriviledge"+"?prevelidgeId="+prevelidgeid;
    layer.open({
        area:["800px","400px"],
        type: 2,
        scrollbar:false,
        content: url//这里content是一个URL，如果你不想让iframe出现滚动条，你还可以content: ['http://sentsin.com', 'no']
    });
}

//更新权限
function updateSinglePrevelidge() {
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
        var desc=$("#desc1").val();
        if(desc==null){
            desc=$("#desc2").val();
        }
        var prevelidgeId=$("#prevelidge_id").val();
        if(prevelidgeId<=5){
            layer.msg("固定权限无法更改",{time:2000},function(index){
                layer.close(index);
                window.location.reload();
            });
            return ;
        }
        var ru=urlPrefix+"Priviledges/changePrevelidgeDesc";
        $.ajax({
            url:ru,
            type:"post",
            dataType:"JSON",
            data:{
                "prevelidgeId":prevelidgeId,
                "prevelidgeDesc":desc,
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

// 增加用户

function addUser(){

   var name= document.getElementsByName("ckj");
   var userHas="";
   for(var i=0;i<name.length;i++){
       if(name[i].checked) {
           userHas += name[i].value + ",";
       }
   }
   var username=$("#username").val();
   var useraccount=$("#useraccount").val();
   var userRealName=$("#user_real_name").val();
    var ru=urlPrefix+"User/addUser";
    $.ajax({
        url:ru,
        type:"post",
       // dataType:"JSON",
        data:{
            "username":username,
            "useraccount":useraccount,
            "userRealName":userRealName,
            "userHas":userHas
        },
        success:function(data){
            alert(data);
            return ;
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

