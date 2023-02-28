{{-- <p id='temp'></p>
<script>
    const temp = document.getElementById('temp');
    fetch('http://covid19.beltim.go.id/api/agregate')
    .then(response => response.json())
    .then(json => temp.innerHTML = json.kasus)

</script> --}}

<html>
  <h1 id="kasus"></h1>
  <p>TOTAL KASUS</p>
  
  <script>
      const kasus = document.getElementById('kasus');

      fetch('http://127.0.0.1:8000/api/paket', {
        method: 'post', // or 'PUT'
        headers: {
          'Content-Type': 'application/json',
          'Authorization': 'Bearer 3|92MxjdochHLsbujcjMd0fXVnNf25CpTdcnyvSXu4',
        },
      })
    .then(response => response.json())
    .then(console.log)
  </script>
  
</html>