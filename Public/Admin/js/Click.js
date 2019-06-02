var urlPrefix="http://localhost/A00/"

function sendClothesData(){
    var productId=$("#clothesId").val();
    var productPrice=$("#clothesPrice").val();
    var productDescription=$("#clothesDescription").val();
    var productAlis=$("#clothesAlis").val();
    var productType=$("#clothesType").val();
    var sex=$('input:radio[name="sex"]:checked').val();
    var image=document.getElementById('clothesImage').files[0];
    var rurl=urlPrefix+"admin.php/Clothes/add";
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
      //  dataType:"JSON",
        data:formData,
        success:function(data){
            alert(data);
        },
        error:function(e,x){
            console.log('nonono');
        }

    })


}