<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Lato', sans-serif;
    font-family: 'Oswald', sans-serif;
    margin: 0;
	padding: 0;
	list-style-type: none;
    color:white;
}
body{
	background: #1E1F25;
}
ul{
	display: flex;
	width: 100%;
	height: 10vh;
	margin: auto;
	max-width: 1000px;
	justify-content: space-between;
	text-align: center;
}
li {
    padding: 1rem 2rem 1.15rem;
    text-transform: uppercase;
    cursor: pointer;
    color: #ebebeb;
	min-width: 80px;
	margin: auto;
}
a{
    text-decoration: none;
    color:white;
}

li:hover {
    background-image: url('https://scottyzen.sirv.com/Images/v/button.png');
    background-size: 100% 100%;
    color: #27262c;
    animation: spring 300ms ease-out;
    text-shadow: 0 -1px 0 #ef816c;
    font-weight: bold;
}
li:active {
  transform: translateY(4px);
}
@keyframes spring {
  15% {
    -webkit-transform-origin: center center;
    -webkit-transform: scale(1.2, 1.1);
  }
  40% {
    -webkit-transform-origin: center center;
    -webkit-transform: scale(0.95, 0.95);
  }
  75% {
    -webkit-transform-origin: center center;
    -webkit-transform: scale(1.05, 1);
  }
  100% {
    -webkit-transform-origin: center center;
    -webkit-transform: scale(1, 1);
  }
}
.container-erica{
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    height:90vh;
}
img{
    clip-path: circle();
    margin-top: 5rem;
}
.container-erica > div > h1 {
    text-align : center;
}
td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

/* tr:nth-child(even) {
  background-color: #dddddd;
} */
</style>
<body>
    <nav>
    <ul>
        <li><a href="cv">Curriculum Vitae</a></li>
        <li><a href="resume">Resume</a></li>
        <li><a href="personaldata">Personal Data</a></li>
        <li><a href="contact">Contact us</a></li>
        <li><a href="lihatkrs">KRS</a></li>
    </ul>   
    </nav>
    <div class="container-erica">
        <div>
            <img src="foto.jpg" alt="" height="350px" width="220px">
        </div>
        <div>
            <h1>Nama : {{ $nama }} <h1>
            <h1>Student IDz : {{ $StudentID }} </h1>
            <h1>Term : {{ $kode_term }} </h1>
            <h1>Nilai: {{ $nilaihuruf -> nilaiHuruf }} </h1>
            <br/>
            <table border="1">
                <tr>
                    <th>No</th>
                    <th>Kode Matakuliah</th>
                    <th>Nama Matakuliah</th>
                    <th>SKS</th>

                </tr>
            @foreach ($matakuliah as $mk)
            <tr>
                <td> {{$mk -> id_matakuliah}} </td>
                <td> {{$mk -> kode_matakuliah}} </td>
                <td> {{$mk -> nama_matakuliah}} </td>
                <td> {{$mk -> sks}} </td>
            
            </tr>
            @endforeach
            {{-- <td> {{$nilaihuruf -> nilaiHuruf}} </td> --}}
            </table>
        </div>
    </div>

</body>
</html>