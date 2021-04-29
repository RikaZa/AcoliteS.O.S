const form = document.getElementById('login');
form.addEventListener('submit', function (e) {
    e.preventDefault();
    var http = new XMLHttpRequest();
    var url = 'validar.php';
    var params = new FormData(form);
    http.open('POST', url, true);
    http.onreadystatechange = function () {
        if (http.readyState == 4 && http.status == 200) {
            let resp = JSON.parse(http.responseText);
            if (resp.response == 'true') {
                document.getElementById('resp').innerHTML = "Correcto, redireccionando";
                setTimeout(function () {
                    window.location.href = "Perfiles/perfil_acc.php";
                }, 2000);
            } else {
                alert("Error intenta devuelta");
            }
        }
    }
    http.send(params);
});