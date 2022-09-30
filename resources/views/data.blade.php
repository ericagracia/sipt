<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Data</title>
</head>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    justify-content:center;
    align-items:flex-start;
    gap: 5rem;
    margin : 2rem;
    padding : 1rem;

}
.info-box{
    display:flex;
    justify-content:center;
    align-items:center;
    gap: 1rem;
    height : 5rem;
    width : 15rem;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 16px;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
}
.aboutme{
    margin-left : 15rem;
    display : flex;
    flex-direction: column;
}
.job-info{
    width : 55%;
    display: flex;
    flex-direction: column;
}
.detail {
    display :flex;
    gap : 1rem;
    align-items : center;
    width : 25rem;
}
.detail-container {
    margin-top : 2rem;
    display:flex;
    justify-content: space-evenly;
}
.container-info{
    display: flex;
    flex-direction: column;
    gap : 1rem;
}

.container-info > h1{
    text-align : center;
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
    <div class="aboutme">
        <p>ABOUT ME</p>
        <h2>Learn More About Me</h2>
    </div>
    <div class="container-erica">
        <div class="container-info">
        <h1>Skills</h1>
        <div class="info-box">
            <h3>Digital Analysis</h3>
        </div>
        <div class="info-box">
            <h3>SEO & SEM</h3>
        </div>
        <div class="info-box">
            <h3>Social Media Specialist</h3>
        </div>
        </div>

        <div class="job-info">
        <h2>Digital Marketing</h2>
        <p>
            Hello! My name is Erica Gracia, and I'm an undergraduate at the University of Pelita Harapan. 
            Currently, I'm pursuing toward my dream career as a professional digital marketer.
        </p>
        <div class="detail-container">
        <div class="detail">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
        </svg>
        <p><b>Birthday :</b></p>
        <p>19 December 2021</p>
        </div>
        <div class="detail">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
        </svg>
        <p><b>Phone :</b></p>
        <p>081362629840</p>
        </div>
        </div>
        <div class="detail-container">
        <div class="detail">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
        </svg>
        <p><b>Linkedin :</b></p>
        <p>Erica Gracia</p>
        </div>
        <div class="detail">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
        </svg>
        <p><b>Location :</b></p>
        <p>Medan, Indonesia</p>
        </div>
        </div>

        </div>
    </div>

</body>
</html>