<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Exemplo do GetElement</title>
    <script>
        function mudaCor(novaCor){
            const elem = document.getElementById("paragrafo");
            elem.style.color = novaCor;
        }
    </script>
</head>
<body>
    <p id="paragrafo">ArtApolo</p>
    <button onclick="mudaCor('blue');">blue</button>
    <button onclick="mudaCor('red');">red</button>

</body>
</html>