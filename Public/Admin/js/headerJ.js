// 改变本身的密码：
function changeUserPwd() {
    var userId=$("#userNa").val();
    var url=urlPrefix+"User/showUserInfo"+"?userId="+userId;
    layer.open({
        area:["800px","400px"],
        type: 2,
        scrollbar:false,
        content: url//这里content是一个URL，如果你不想让iframe出现滚动条，你还可以content: ['http://sentsin.com', 'no']
    });
}
