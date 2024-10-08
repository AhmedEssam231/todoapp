@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f2f5;
        }
        .login-container {
            background-color: #fffeff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .login-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #e6dcdc;
            border-radius: 5px;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #0b4494;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-container button:hover {
            background-color: #1d241d;
        }
        .login-container a {
            display: block;
            margin: 10px 0;
            color: #2d4735;
            text-decoration: none;
        }
        .login-container .create-account {
            background-color: #30b337;
            margin-top: 15px;
        }
    </style>
    </head>
    <body>
        <div class="login-container">
        <div class="signup-container">
        <h1>Sign IN</h1>
        <p>Please register your data.</p>

    <form method="POST" action="{{route('login')}}">
     @csrf  
    
        <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">log in</button>
       </form> 

       <form action="{{route('register')}}" method="get">
        <button type="submit" class="create-account">Create new account</button>
    </form>
     
    </div>
</body>
</html>