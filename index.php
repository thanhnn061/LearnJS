<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
    </head>
    <body>
        <!-- <form method="POST" action="/"> -->
            <table border="0" cellpadding="10" cellspacing="0">
                <tr>
                    <td>Email</td>
                    <td><input type="email" id="email" name="email"/></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" id="name" name="name" /></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" id="pass" name="pass" /></td>
                </tr>               
                <tr>
                    <td></td>
                    <td>
                        <input type="button" name="submit" value="Register"/>                      
                    </td>
                </tr>
            </table>
        <!-- </form> -->
        <div id="showerror"></div>
        <!-- <script language="javascript">
            $('form').submit(function (){
                alert('Bạn đã click đăng ký');
                return false;
            });
        </script> -->
        <script>
        $('input[name="submit"]').on('click', function (){
            $('#showerror').html('');   
            var name = $('#name').val();
            var email = $('#email').val();  
            var pass = $('#pass').val();
            //Kiểm tra dữ liệu có null hay không
            if ($.trim(email) == ''){
                alert('Bạn chưa nhập email');
                return false;
            }

            if ($.trim(name) == ''){
                alert('Bạn chưa nhập name');
                return false;
            }     
            if ($.trim(pass) == ''){
                alert('Bạn chưa nhập pass');
                return false;
            }    

            $.ajax({
                url : 'bai12.php',
                type : 'post',
                dataType : 'json',
                data : {
                    name : name,
                    email : email,
                    pass : pass
                },
                success : function (result){                         
                    var html = '';    
                    // lấy thông tin lỗi email
                    if ($.trim(result.email) != ''){
                        html += result.email +'<br/>';
                    }        
                    if (html != ''){
                        $('#showerror').append(html);
                    }
                    else  {
                        $('#showerror').append('Thêm thành công');                 
                    }   
                    var html = '';
 


          
                }
            });   
            // return false;
        });
        </script>
    </body>
</html>