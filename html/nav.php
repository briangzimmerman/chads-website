<?php
switch($_SERVER['REQUEST_URI']) {
    case '/':
    case '/index.php':
        $title = 'About Me';
        break;
    case '/skills.php':
        $title = 'Skills';
        break;
    case '/projects.php':
        $title = 'Projects';
        break;
    case '/contact.php':
        $title = 'Contact';
        break;
    default:
        $title = '';
}
?>

<header>
    <div class='overlay'></div>
    <ul class='expanded_links nav_links'>
        <li>
            <a href='/' class='about_me'>About Me</a>
        </li>
        <li>
            <a href='/skills.php' class='skills'>Skills</a>
        </li>
        <li>
            <a href='/projects.php' class='projects'>Projects</a>
        </li>
        <li>
            <a href='/contact.php' class='contact'>Contact</a>
        </li>
    </ul>

    <div class='hamburger'>
        <div></div>
        <div></div>
        <div></div>
    </div>

    <span id='title'><?=$title;?></span>

    <div class='slidein_links'>
        <div class='profile'>
            <img src='/images/chad.jpeg' class='headshot'>
            <p>Chad Weaver</p>
            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 24 24" id='close'>
                <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
                <path d="M0 0h24v24H0z" fill="none"/>
            </svg>
        </div>
        <ul class='nav_links'>
            <li>
                <a href='/' class='about_me'>About Me</a>
            </li>
            <li>
                <a href='/skills.php' class='skills'>Skills</a>
            </li>
            <li>
                <a href='/projects.php' class='projects'>Projects</a>
            </li>
            <li>
                <a href='/contact.php' class='contact'>Contact</a>
            </li>
        </ul>
    </div>

    <img src='/images/chad.jpeg' class='headshot'>
</header>