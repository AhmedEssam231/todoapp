</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
        .signup-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            width: 350px;
        }
        .signup-container h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .signup-container p {
            margin: 0;
            font-size: 14px;
            color: #606770;
        }
        .signup-container input, .signup-container select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .signup-container select {
            width: 32%;
            display: inline-block;
        }
        .gender-options {
            margin: 5px 0;
            display: flex;
            justify-content: space-between;
        }
        .gender-options label {
            margin-right: 10px;
        }
        .signup-container button {
            width: 100%;
            padding: 10px;
            background-color: #2ac71b;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        .signup-container button:hover {
            background-color: #38d41144;
        }
       
        .Sign-IN  {
            color: #1877f2;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <h1>Sign Up</h1>
        <p>Please register your data.</p>


        <form method="POST" action="{{route('register2')}}">
            @csrf
            <input type="text" name="name" placeholder="Name">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <button type="submit">Sign Up</button>

            
            <a href="{{route('login')}}" class="">Sign In</a>
        </form>
       
            
      
    </div>
     
</body>
</html>
