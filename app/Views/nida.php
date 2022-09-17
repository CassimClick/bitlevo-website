<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nida</title>
</head>

<body>

    <input type="text" id="nidaId">
    <button onclick="getUserInfo()">GET</button>

    <script>
        function getUserInfo() {
            const data = {
                nationalId: '19940408231130000122'
            };
            // const nidaId = '19940408231130000122'

            fetch(`http://localhost:8080/getUserInfo`, {
                    method: 'POST',
                    
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(data),
                })
                .then((response) => response.json())
                .then((data) => {
                 
                    console.log(data.data.obj.result);
                })


        }
    </script>

</body>

</html>