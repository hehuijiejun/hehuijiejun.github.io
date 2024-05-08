# hehuijiejun.github.io
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登录页面</title>
    <script>
        function handleLogin() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            
            // 这里应该添加验证逻辑和与后端服务的交互
            // 示例中，我们只是检查用户名和密码是否不为空
            if (username === '' || password === '') {
                alert('用户名和密码不能为空！');
                return;
            }
            
            // 这里应该是向后端发送请求的代码
            alert('登录成功！'); // 示例中的模拟登录成功提示
        }
    </script>
</head>
<body>
    <h1>登录</h1>
    <form onsubmit="event.preventDefault(); handleLogin();">
        <label for="username">用户名：</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">密码：</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" value="登录">
    </form>
</body>
<ml>

 
