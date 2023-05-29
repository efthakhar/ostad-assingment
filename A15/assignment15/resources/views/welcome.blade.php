<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="styles.css"> <!-- Replace with your CSS file path -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo&family=Varta:wght@700&display=swap" rel="stylesheet">
    <style>
        * {
        box-sizing: border-box;
        margin: 0;
        font-family: Trebuchet MS;
        } 
        

        .hero-section {
        height: 100vh;  
        color: white;
        background-color: black;
        }

        .hero-text {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100%;
        
        
        font-size: 1.4em;
        
        letter-spacing: 9px;
        }

        h1 {
        margin: 0 0 3rem 0;
        font-family: 'Varta', sans-serif;
        text-shadow: 2px 2px black;
        }

        p {
        font-family: 'Archivo', sans-serif;
        text-shadow: 2px 2px black;
        letter-spacing: 3px;
        color: white;
        }

        nav {
        padding: 1em 1em;
        transition: all .3s;
        }

        nav:hover {
        background-color: rgba(0, 0, 0, 0.3);
        }

        ul {
        display: flex;
        list-style-type: none;
        justify-content: space-around;
        }

        .logo {
        flex: 1 0 auto; 
        font-weight: 600;
        letter-spacing: 2px;
        }

        .logo:hover {
        text-decoration: none;
        cursor: default;
        }

        li {
        margin-right: 25px;
        }

        li:hover {
        text-decoration: underline;
        cursor: pointer;
        }

        .nav-link:hover {
        transform: scale(1.1);
        color: #ff9800;
        }

        .nav-link:active {
        transform: scale(1);
        }
    </style>
</head>
<body>


    <div class="hero-section">
        <nav>
            <ul>
            <li class="logo">LOGO</li>
            <li class="nav-link">Home</li>
            <li class="nav-link">About</li>
            <li class="nav-link">Contact</li>
            </ul>
        </nav>
        <div class="hero-text">
            <h1 class="header-text">Welcome to Laravel!</h1>
        </div>
    </div>
    
    
</body>
</html>
