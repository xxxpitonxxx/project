<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Авторизация</h1>
    <input type="text" placeholder="login" id="login"> <br>
    <input type="text" placeholder="password" id="pass"> <br>
    <button id="regBtn">Авторизация</button>

    <script>

        let btn = document.getElementById("regBtn")

        btn.addEventListener("click", ()=> {
            let login = document.getElementById("login").value;
            let pass = document.getElementById("pass").value;
            
            let resp = JSON.stringify({
                "login":login,
                "pass":pass,
            });


            fetch('http://proekt/api/auth', {
                method: 'POST',
                body: resp
            })
                .then(response => response.text())

                .then(data => {
                    console.log(data);
                })
                .catch(error => {
                    console.log(error);
                })
            })

    </script>


</body>
</html>