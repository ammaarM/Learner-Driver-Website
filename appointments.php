<?php
    if(!isset($_SESSION)) { // if session hasn't started yet, then start the session
        session_start();
    }
?>

<!-- Menu -->
<div>
    <ul>
        <li>
            <a class="nav-link" href="index.php">Home</a>
        </li>
        <li>
            <a class="nav-link" href="about.php">About</a>
        </li>
        <li>
            <a class="nav-link" href="login.php">Login/Register</a>
        </li>
        <li>
            <!-- If the user is logged in, then add a "Log out" link to the navbar menu -->
            <?php
            if (isset($_SESSION['username'])) {
                $_SESSION['logout'] = "<div><a href='php/logout.php'>Log Out</a></div>";
                echo $_SESSION['logout']; // add to DOM
            }
            //After you log out, it would throw a javascript error. See if you can fix it
            ?>
        </li>
    </ul>
</div>

<!-- Content -->
<div>
    <h1>This is an example</h1>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sagittis id consectetur purus ut faucibus pulvinar elementum integer enim. Turpis massa sed elementum tempus egestas sed sed risus pretium. Morbi tempus iaculis urna id volutpat lacus. Arcu non sodales neque sodales ut etiam sit amet nisl.
    </p>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sagittis id consectetur purus ut faucibus pulvinar elementum integer enim. Turpis massa sed elementum tempus egestas sed sed risus pretium. Morbi tempus iaculis urna id volutpat lacus. Arcu non sodales neque sodales ut etiam sit amet nisl.
    </p>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sagittis id consectetur purus ut faucibus pulvinar elementum integer enim. Turpis massa sed elementum tempus egestas sed sed risus pretium. Morbi tempus iaculis urna id volutpat lacus. Arcu non sodales neque sodales ut etiam sit amet nisl.
    </p>
</div>
