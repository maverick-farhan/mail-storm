<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Dashboard
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
      @csrf
      <button type="submit" id="logoutBtn" style="background: none; border: none; color: #007bff; text-decoration: underline; cursor: pointer; padding: 0;">
        Logout
      </button>
    </form>

    <script>
    $(document).ready(function(){
        const token = localStorage.getItem('api_token',response.token);
        $('#logoutBtn').on('click',function(){
            $.ajax({
                url:'http://127.0.0.1:8000/api/logout',
                type:'POST',
                headers: {
                            "Authorization": `Bearer ${token}`
                        },
                contentType:'application/json',
                success:function(response){
                    window.location.href = 'http://127.0.0.1:8000/';
                }
            })
        })
    }) 
    </script>
</body>
</html>