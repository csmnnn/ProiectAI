<?php
require('requireLogin.php');
if (isset($_SESSION["id"])) {
    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/modal.css">
    <script src="../js/script.js" defer></script>
    <script src="../js/fetchUser.js" defer></script>
    <title>Profile | SocialMusic</title>
</head>

<body>

    <div class="modal-container" id="modalContainer">
        <div class="modal">
            <h1>Modal</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima vitae dolore eligendi non accusantium
                voluptatibus sit cumque, natus facilis magnam aperiam animi dicta consectetur debitis sunt aliquam iure
                nisi iusto.</p>
            <button id="close-modal">Close modal</button>
        </div>
    </div>

    <div class="flexbox-homepage-container">
        <?php include '../html/homepage-item-1.html'; ?>

        <div class="flexbox-homepage-item-2">
            <?php include '../html/music-player.html'; ?>
            <div class="profile">
                <div class="profile-banner">
                    <img class="banner-photo" src="../resources/img/banner.jpg" alt="">
                </div>
                <div class="profile-image">
                <!-- <input type="file" accept=".jpg, .png"> -->
                <img id="profile-img" class="profile-photo">
                </div>
                <div class="profile-details">
                    <div class="details">
                        <?php if (isset($user)) ?>
                        <p class="details-p">
                            <?= htmlspecialchars("{$user["first_name"]} {$user["last_name"]}") ?>
                        </p>
                        <p class="details-p" style="margin-bottom: 20px;">
                            <?= htmlspecialchars("@{$user["username"]}") ?>
                        </p>
                    </div>
                    <div class="profile-settings">
                        <button class="btn-edit profile-settings-button" title="Profile settings" id="btnEditProfile">
                            <img src="../resources/img/more.png" alt="Profile settings menu">
                        </button>
                    </div>
                </div>
                <hr>
                <div class="profile-favourites">
                    <h1 class="heading">Your favourites</h1>
                    <div class="favourites-section">
                        <div class="favourite-artists">
                            <div class="div-heading">
                                <h1 class="heading-favourites">ARTISTS</h1>
                                <div class="div-btn">
                                    <button id="btnEditArtists" class="btn-edit" title="Edit your favourite artists">
                                        <img src="../resources/img/pencil.png" alt="Edit button">
                                    </button>
                                </div>
                            </div>
                            <div class="favourite-artists-list">
                                <ol class="favourites-ol">
                                    <li class="favourites-li">
                                        <span class="favourite-image">
                                            <img class="fav-img" src="../resources/img/tisoki-avatar.jpg" alt="">
                                        </span>
                                        <a class="favourite-name" href="artist.php">Tisoki</a>
                                    </li>
                                    <li class="favourites-li">
                                        <span class="favourite-image">
                                            <img class="fav-img" src="../resources/img/ghost-voices-image.jpg" alt="">
                                        </span>
                                        <a class="favourite-name" href="artist.php">ARTIST NAME</a>
                                    </li>
                                    <li class="favourites-li">
                                        <span class="favourite-image">
                                            <img class="fav-img" src="../resources/img/ghost-voices-image.jpg" alt="">
                                        </span>
                                        <a class="favourite-name" href="artist.php">ARTIST NAME</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="favourite-songs">
                            <div class="div-heading">
                                <h1 class="heading-favourites">SONGS</h1>
                                <div class="div-btn">
                                    <button id="btnEditSongs" class="btn-edit" title="Edit your favourite songs">
                                        <img src="../resources/img/pencil.png" alt="Edit button">
                                    </button>
                                </div>
                            </div>
                            <div class="favourite-songs-list">
                                <ol class="favourites-ol">
                                    <li class="favourites-li">
                                        <span class="favourite-image">
                                            <img class="fav-img" src="../resources/img/ghost-voices-image.jpg" alt="">
                                        </span>
                                        <div class="about-fav flex flex-column justify-center">
                                            <a class="favourite-name" href="artist.php">Virtual Self</a>
                                            <p class="favourite-name">GHOST VOICES</p>
                                        </div>
                                    </li>
                                    <li class="favourites-li"><span class="favourite-image">
                                            <img class="fav-img" src="../resources/img/tisoki-miles-away.jpg" alt="">
                                        </span>
                                        <div class="about-fav flex flex-column justify-center">
                                            <div class="writers">
                                                <a class="song-writers favourite-name" href="artist.php">Tisoki<span style="margin: 0; color: black">&#44;</span>
                                                </a>
                                                <a class="song-writers favourite-name" href="artist.php">Leotrix</a>
                                            </div>
                                            <p class="favourite-name">Miles Away</p>
                                        </div>
                                    </li>
                                    <li class="favourites-li"><span class="favourite-image">
                                            <img class="fav-img" src="../resources/img/ghost-voices-image.jpg" alt="">
                                        </span>
                                        <div class="about-fav flex flex-column justify-center">
                                            <a class="favourite-name" href="artist.php">ARTIST NAME</a>
                                            <p class="favourite-name">SONG NAME</p>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="favourite-albums">
                            <div class="div-heading">
                                <h1 class="heading-favourites">ALBUMS</h1>
                                <div class="div-btn">
                                    <button id="btnEditAlbums" class="btn-edit" title="Edit your favourite albums">
                                        <img src="../resources/img/pencil.png" alt="Edit button">
                                    </button>
                                </div>
                            </div>
                            <div class="favourite-albums-list">
                                <ol class="favourites-ol">
                                    <li class="favourites-li">
                                        <span class="favourite-image">
                                            <img class="fav-img" src="../resources/img/tisoki-album.jpg" alt="">
                                        </span>
                                        <div class="about-fav flex flex-column justify-center fav-albums">
                                            <a class="favourite-name" href="artist.php">Tisoki</a>
                                            <a class="favourite-name" href="album.php" style="font-size: 24px;">01953</a>
                                        </div>
                                    </li>
                                    <li class="favourites-li"><span class="favourite-image">
                                            <img class="fav-img" src="../resources/img/ghost-voices-image.jpg" alt="">
                                        </span>
                                        <div class="about-fav flex flex-column justify-center fav-albums">
                                            <a class="favourite-name" href="artist.php">ARTIST NAME</a>
                                            <a class="favourite-name" href="album.php" style="font-size: 24px;">ALBUM NAME</a>
                                        </div>
                                    </li>
                                    <li class="favourites-li"><span class="favourite-image">
                                            <img class="fav-img" src="../resources/img/ghost-voices-image.jpg" alt="">
                                        </span>
                                        <div class="about-fav flex flex-column justify-center fav-albums">
                                            <a class="favourite-name" href="artist.php">ARTIST NAME</a>
                                            <a class="favourite-name" href="album.php" style="font-size: 24px;">ALBUM NAME</a>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include '../html/homepage-item-3.html'; ?>
    </div>
</body>

</html>