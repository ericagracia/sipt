<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
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
    justify-content:flex-start;
    align-items:center;
    flex-direction: column;
    gap : 2rem;
    margin-top: 2rem;
}
.container-sekolah{
    border-left : 2px solid white;
    padding-left: 1rem;

}
.container-tahun{
    padding-right: 1rem;
}
.container-kiri-kanan { 
    display :flex;
}
.container-luar {
    display: flex;
    justify-content: center;
    gap : 10rem;
}
</style>
<body>
    <nav>
    <ul>
        <li><a href="cv">Curriculum Vitae</a></li>
        <li><a href="resume">Resume</a></li>
        <li><a href="personaldata">Personal Data</a></li>
        <li><a href="contact">Contact us</a></li>
    </ul>   
    </nav>
    <div class="container-luar">
        <div class="container-erica">
        <h1>Experience</h1>
            <div class="container-kiri-kanan">
                <div class="container-tahun">
                    <p>June 2019</p>
                    <p>June 2020</p>
                    <br/>
                    <p>August 2020</p>
                    <p>present</p>
                </div>
                <div class="container-sekolah">
                    <p>PT. Global Imoo Telekomunikasi: Visual Identity</p>
                    <br/>
                    <br/>
                    <p>PT. Musim Mas: Staff </p>
                </div>
            </div>
        </div>
        <div class="container-erica">
        <h1>Education</h1>
            <div class="container-kiri-kanan">
                <div class="container-tahun">
                    <p>2007</p>
                    <p>2011</p>
                    <br/>
                    <p>2011</p>
                    <p>2013</p>
                    <br/>
                    <p>2013</p>
                    <p>2016</p>
                    <br/>
                    <p>2016</p>
                    <p>2019</p>
                    <br/>
                    <p>2020</p>
                    <p>present</p>
                </div>
                <div class="container-sekolah">
                    <p>SD Methodist-4 Medan</p>
                    <br/>
                    <br/>
                    <p>SD Cinta Budaya Medan</p>
                    <br/>
                    <br/>
                    <p>SMP Cinta Budaya Medan</p>
                    <br/>
                    <br/>
                    <p>SMA Cinta Budaya Medan</p>
                    <br/>
                    <br/>
                    <p>Universitas Pelita Harapan</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>