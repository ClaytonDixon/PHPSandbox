<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
    <script>
    function showSuggestion(str){
        if(str.length ==0){
            document.getElementByID('output').innerHTML = '';
        } else {
            // AJAX Request
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function(){
                if (this.readystate == 4 && this.status ==200) {
                    document.getElementById('output').innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET", "suggest.php?q="+str, true);
            xmlhttp.send();
        }
    }
    </script>
</head>
<body>
        <div class="container">
        <h1>Search Users</h1>
        <form>
        Search User: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
        </form>
        <p>Suggestions: <span id="output" style="font-weight:bold"></span></p>
        </div>
</body>
</html>