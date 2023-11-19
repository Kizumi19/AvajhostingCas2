<script>
document.getElementById("submitBtn").addEventListener("click", function() {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "createDoctor.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    // Aquí capturas los datos del formulario para enviarlos
    var formData = new FormData(document.querySelector("form"));
    
    xhr.send(new URLSearchParams(formData).toString());
    
    xhr.onload = function() {
        if (xhr.status == 200) {
            // Redirigir a index.php si deseas
            window.location.href = "index.php";
        }
    };
});
</script>
