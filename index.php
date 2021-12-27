<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name = "viewport" content = "width=device-width, minimum-scale=1.0, maximum-scale = 1.0, user-scalable = no">
    <link rel="stylesheet" href="./styles/style.css?v0.1" media="screen" type="text/css"/>
    <script src="https://kit.fontawesome.com/ed342dc3ca.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/x-icon" href="/assets/Icon.svg"/>
    <title>PortfolioTracker</title>
</head>
<body>
    <!-- Affichage du formulaire de connexion et d'inscription -->

        <!-- Boutons connexion et inscription pour passer d'un affichage à un autre -->
        <form id="connexion" class="input-group" action="/backend/login_verification.php" method="POST">
          
        <h1>Bonjour!</h1>
        <p>Bienvenue sur le site<br>de gestion du programme</p>
        <?php
            if(isset($_GET['erreur'])){
                $err = $_GET['erreur'];
                if($err==1 || $err==2)
                    echo "<p style='color:red;'>⚠️Utilisateur ou mot de passe incorrect</p>";
            }
        ?>  
            <input type="text" class="input-field" placeholder="Identifiant" name="username" required>

            <input id="password" type="password" class="input-field" placeholder="Mot de passe" name="password">
            <div id="password-reveal" onclick="reveal_password()">
                <i id="eye" class="fas fa-eye"></i>
                <p id="password-reveal-text">Afficher le mot de passe</p>
            </div>
            <button type="submit" class="submit-btn">Connexion</button>
            
        </form>
        <svg class='skate' height='30vh' viewBox="0 0 390 291" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M321.411 240.527C321.411 240.527 306.603 245.969 299.626 258.646C292.649 271.322 296.144 286.433 296.144 286.433C296.144 286.433 310.952 280.991 317.929 268.315C324.906 255.638 321.411 240.527 321.411 240.527Z" fill="#3F3D56"/>
            <path d="M341.302 259.429C341.302 259.429 336.45 274.176 323.854 281.601C311.257 289.025 295.686 286.316 295.686 286.316C295.686 286.316 300.537 271.569 313.133 264.144C325.73 256.72 341.302 259.429 341.302 259.429Z" fill="#A5A6F6"/>
            <path d="M446 289.9H-57V291H446V289.9Z" fill="#2F2E41"/>
            <path d="M146.149 239.288C138.978 238.005 132.149 235.301 126.081 231.343L126.744 230.456C132.686 234.325 139.372 236.965 146.392 238.213C157.02 240.084 172.924 239.166 188.332 224.174C218.317 194.999 246.936 192.06 247.222 192.034L247.327 193.13C247.045 193.156 218.826 196.054 189.123 224.955C176.99 236.76 164.539 240.026 154.476 240.026C151.684 240.023 148.897 239.776 146.149 239.288Z" fill="#2F2E41"/>
            <path d="M232.199 216.203C235.919 216.203 238.935 213.248 238.935 209.603C238.935 205.958 235.919 203.004 232.199 203.004C228.478 203.004 225.462 205.958 225.462 209.603C225.462 213.248 228.478 216.203 232.199 216.203Z" fill="#2F2E41"/>
            <path d="M184.481 247.002C188.201 247.002 191.217 244.047 191.217 240.402C191.217 236.757 188.201 233.802 184.481 233.802C180.76 233.802 177.744 236.757 177.744 240.402C177.744 244.047 180.76 247.002 184.481 247.002Z" fill="#2F2E41"/>
            <path d="M326.706 290.45C326.706 290.45 316.903 287.473 297.367 284.487L297.795 278.626C301.163 245.627 278.708 196.129 278.708 196.129C287.286 220.722 291.366 246.606 290.76 272.589C287.764 267.468 281.975 261.943 270.848 258.551C270.848 258.551 285.319 270.709 289.463 283.356C270.464 280.891 251.347 279.383 232.19 278.838L237.165 267.626L227.622 276.976C227.622 276.976 223.692 248.927 215.271 247.827L221.447 275.326C221.447 275.326 214.149 269.826 212.464 270.376L216.617 278.513C188.65 278.229 155.379 279.467 116.822 283.436L121.52 272.851L111.977 282.2C111.977 282.2 108.047 254.152 99.6262 253.052L105.801 280.55C105.801 280.55 98.5035 275.051 96.8193 275.601L101.671 285.107C89.0714 286.575 75.9457 288.356 62.2942 290.45H326.706Z" fill="#3F3D56"/>
            <path d="M171.847 24.4691C165.728 30.9301 181.726 46.6109 181.726 46.6109C181.726 46.6109 149.33 51.9625 151.901 51.6382C154.471 51.3139 153.139 24.617 153.139 24.617C153.139 24.617 177.966 18.008 171.847 24.4691Z" fill="#A0616A"/>
            <path d="M194.395 93.6184L166.248 107.706L150.961 116.288C150.961 116.288 132.942 138.525 129.58 151.703C126.218 164.881 144.136 189.237 146.165 191.754C147.212 193.037 148.148 194.402 148.966 195.836C149.666 196.857 155.719 195.539 162.329 194.15C168.938 192.762 161.451 183.171 161.451 183.171C161.451 183.171 153.015 162.054 152.387 161.579C151.8 161.135 149.804 157.484 151.24 155.886C152.586 154.474 153.626 152.809 154.297 150.992C154.853 149.429 155.645 147.957 156.647 146.624C156.647 146.624 182.112 126.365 190.065 119.467C198.018 112.569 219.161 116.905 219.161 116.905C219.161 116.905 209.179 154.414 206.682 156.947C204.185 159.48 203.915 161.732 205.045 166.026C206.176 170.319 220.922 166.241 220.922 166.241L226.368 151.691C226.368 151.691 235.209 132.83 240.009 113.371C242.409 103.642 237.826 97.8428 232.643 94.4764C227.659 91.3098 221.627 90.1333 215.785 91.1889L189.766 95.6606L207.812 88.0439L194.395 93.6184Z" fill="#2F2E41"/>
            <path d="M90.5754 57.3649L56.9743 47.1869C56.9743 47.1869 43.4006 30.0458 49.7952 27.0209C56.1898 23.996 64.1957 41.8396 64.1957 41.8396L87.5975 43.3232L90.5754 57.3649Z" fill="#A0616A"/>
            <path d="M231.829 39.5432L261.701 21.3567C261.701 21.3567 270.399 1.40565 263.431 0.0667453C256.463 -1.27216 253.333 17.9764 253.333 17.9764L231.078 25.2204L231.829 39.5432Z" fill="#A0616A"/>
            <path d="M237.42 18.9814L237.989 40.5358L187.64 49.3492C195.046 64.872 193.164 82.5386 211.806 90.2818L148.973 120.39C151.773 96.7201 140.094 78.891 129.177 56.7254C115.881 52.0033 100.437 55.4655 84.0777 62.4155L81.1377 40.0512L150.681 35.1586L162.104 39.437L174.353 34.39C192.355 29.1501 218.202 19.188 237.42 18.9814Z" fill="#A5A6F6"/>
            <path d="M206.087 165.34C204.56 166.641 203.139 177.357 203.084 181.245C203.029 185.134 208.255 186.138 211.111 186.332C213.966 186.526 213.625 188.233 215.51 189.659C217.396 191.084 223.592 190.857 231.729 188.167C239.865 185.477 226.254 176.658 225.068 176.253C223.883 175.848 218.893 163.724 218.893 163.724C218.893 163.724 207.614 164.038 206.087 165.34Z" fill="#2F2E41"/>
            <path d="M161.585 189.808C163.399 190.688 167.545 200.701 168.604 204.449C169.662 208.197 164.866 210.466 162.154 211.363C159.442 212.259 160.214 213.825 158.759 215.673C157.303 217.52 151.25 218.838 142.684 218.255C134.117 217.673 145.004 205.763 146.045 205.077C147.087 204.391 148.779 191.424 148.779 191.424C148.779 191.424 159.771 188.928 161.585 189.808Z" fill="#2F2E41"/>
            <path d="M161.643 32.6823C169.082 32.6823 175.113 26.7738 175.113 19.4852C175.113 12.1966 169.082 6.28799 161.643 6.28799C154.203 6.28799 148.172 12.1966 148.172 19.4852C148.172 26.7738 154.203 32.6823 161.643 32.6823Z" fill="#A0616A"/>
            <path d="M146.072 18.1614C145.265 16.5848 144.806 14.8593 144.726 13.0975C144.645 11.3356 144.944 9.57682 145.604 7.93579C146.928 4.73751 149.866 1.52543 156.199 0.566102C170.017 -1.52696 177.37 7.95527 176.984 11.0566C176.598 14.158 174.742 21.655 174.742 21.655C174.742 21.655 175.571 14.5569 172.015 14.3062C168.458 14.0555 154.667 12.9981 151.175 16.5858C150.173 17.5602 149.452 18.7775 149.086 20.1136C148.72 21.4496 148.722 22.8568 149.092 24.1919L146.072 18.1614Z" fill="#2F2E41"/>
        </svg>
        <div class="area" >
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
    </div >
        <script>
        function reveal_password() {
            var text = document.getElementById('password-reveal-text')
            
            var x = document.getElementById("password");
            var y = document.getElementById("eye");
            if (x.type === "password") {
                x.type = "text";
                y.className = "fas fa-eye-slash";
                text.innerHTML = "Masquer le mot de passe"
            } else {
                x.type = "password";
                y.className = "fas fa-eye";
                text.innerHTML = "Afficher le mot de passe"
            }
        }

    </script>

</body>
</html>


