$(function () {
    $(".form-horizontal").validate({
        rules: {
            uname: {
                required: true,
                minlength: 5,
                remote:{
                    url:"/mvc/index.php/admin/reg/checkName",
                    type:"post",
                    data:{
                        uname:function() {
                          return $("input[name=uname]").val()
                        }
                    }
                }
            },
            pass: {
                required: true,
                rangelength:"[5, 10]",
                equalTo: "#pass1",
            },
            pass1: {
                required: true,
                rangelength:"[5, 10]",
                equalTo: "#pass",
            }
        },
        message: {
            uname: {
                required: "用户名没有填写",
                minlength: "用户名在5位以上",
                remote: "用户名已存在",
            },
            pass: {
                required: "密码没有填写",
                rangelength: "密码在5-10之间",
                equalTo: "两次输入的密码要保持一致",
            },
            pass1: {
                required: "密码没有填写",
                rangelength: "密码在5-10之间",
                equalTo: "两次输入的密码要保持一致",
            },
        }
    })
})