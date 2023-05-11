<!doctype html>
<html>
<head>
    <title>CodeIgniter</title>
    <style>
    *{
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    vertical-align: baseline;
    }
    body {
        text-align: center;
        font-family: sans-serif;
        background-color: #101010;
    }
    .navh1 {
        color: #fff;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 20px;
        padding: 20px 20px;
    }
    .head {
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 63px;
        background: #171717;
        position: fixed;
        width: 100%;
        z-index: 100;
    }
    .navbar {
        display: flex;
        margin-right: 10px;
    }
    .navbar a {
        display: block;
        padding: 16px 16px;
        color: #fff;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 20px;
    }
    .navbar a:hover {
        background: #3f3f3f;
    }
    .header {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .header {
        height: 60vh !important;
        background: linear-gradient(rgb(156,39,176), rgb(86,39,176));
        background-size: cover;
    }
    .title {
        margin-bottom: 40px;
        font-size: 60px;
        font-weight: 600;
        text-transform: uppercase;
        color: #fff;
    }
    p {
        margin-bottom: 40px;
        font-size: 18px;
        color: #fff;
        padding: 0 100px;
    }
    .btn {
        display: inline-block;
        margin-top: 15px;
        padding: 10px 40px;
        border: 2px solid rgb(156,39,176);
        color: #fff;
        text-decoration: none;
        background: rgb(156,39,176);
    }
    .btn:hover {
        background: none;
    }
    .btn-home {
        display: flex;
    }
    .btn-home a {
        margin: 0 10px;
    }
    .content {
        height: 50vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .sau {
        padding: 30px;
        background: #1f1d1d;
    }
    .box-container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        text-align: center;
    }
    .box-container .box {
        height: 11rem;
        width: 17rem;
        background: #101010;
        text-align: center;
        border-radius: 1rem;
        box-shadow: 0 .3rem 5rem rgba(0, 0 , 0, .5);
        margin: 2rem;   
    }

    .box-container .box h3 {
        padding: 20px 20px;
        font-size: 20px;
        color: #9c27b0;
        align-items: center;
    }
    .box-container .box p {
        padding: 0 15px;
        font-size: 16px;
    }
    .about {
        background: #171717;
    }
    form {
    display: flex;
    flex-direction: column;
    max-width: 400px;
    margin: 0 auto;
    }
    label {
    font-weight: bold;
    margin-bottom: 5px;
    }
    input {
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    }
    input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
    }
    input[type="submit"]:hover {
    background-color: #0069d9;
    }
    .form-body {
    background: rgba(255, 255, 255, 0.15);
    width: 400;
    min-width: 450px;
    margin: 20px 0;
    align-items: center;
    justify-content: center;
    height: 100vh;
    font-family: Arial, Helvetica, sans-serif;
    background: linear-gradient(130deg, rgb(90,90,90), rgb(20,20,20));
}
.text{
    padding-top: 300px;
    text-transform: uppercase;
}
/* About me */
#about {
    padding-top: 100px;
    padding: 80px 0;
    background: rgb(00,00,00);
}
.container {
    margin: auto;
    max-width: 1300px;
    overflow: auto;
    padding: 0 20px;

}
.about-row{
    display: flex;
}

.about-row-experience,
.about-row-me{
    width: 50%;
    padding-left: 50px;
}

/* Contact me*/
#contact {
    padding: 80px 0;
}
.contact-row{
    display: flex;
}
.contact-row-icon{
    width: 33%;
    text-align: center;
}
.contact-row-icon img{
    height: 60px;
}
h2 {
    font-size: 1.8rem;
    text-align: center;
    text-transform: uppercase;
    font-weight: 500;
    padding-bottom: 50px;
    color: white;
}

h4 {
    font-size: 1.3rem;
    text-transform: uppercase;
    padding-bottom: 20px;
    font-weight: 500;
    color: white;
}
    
    </style>
</head>
    <body>
        <div class="head">
            <div class="logo">
                <h1 class="navh1">Valuyo
                </h1>
            </div>
            <nav class="navbar">
                <a href="home">Inicio</a>
                <a href="nosotros">Nosotros</a>
                <a href="#">Productos</a>
                <a href="login">Ingresar</a>
            </nav>
        </div>