<p id='temp'></p>
<script>
    const temp = document.getElementById('temp');
    fetch('http://127.0.0.1:8000/api/posts', {
        headers:{
            'Authorization' : 'Bearer 1|MWl7UozmKZ9yPI5OAEGPOdYXPHXiC8Y3OMnoJ3ZT'
        }
    })
    .then(response => response.json())
    .then(json => console.log(json))

</script>