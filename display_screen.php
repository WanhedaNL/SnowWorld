<?php
require "db.php";

$result = $pdo->query("SELECT slot, filename FROM screen_images");
$rows = $result->fetchAll(PDO::FETCH_ASSOC);

$images = [];
foreach ($rows as $row) {
    $images[$row["slot"]] = $row["filename"];
}

function img($slot, $images) {
    $file = $images[$slot] ?? "default.png";
    return "uploads/" . $file . "?v=" . time();
}
?>


<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Narrowcasting Display</title>
    <link rel="stylesheet" href="css/display_screen.css">
</head>
<body>
    <main class="hele_page">
        <header class="header">
            <h1>LATEST UPDATES</h1>
            <div id="live-clock">00:00:00</div>
        </header>
        
        <aside class="links_reclam">
            <img src="<?= img('left_top', $images) ?>">
            <img src="<?= img('left_bottom', $images) ?>">        </aside>
               
        <article class="midden_tekst">
                <img src="<?= img('center', $images) ?>">     
        </article>

        <aside class="rechts_nieuws">
            <section class="rechts_blok--ust">
                <img src="<?= img('right_top', $images) ?>">
            </section>
            <section class="rechts_blok--alt">
                <img src="<?= img('right_bottom', $images) ?>">
                
            </section>
        </aside>

        <footer class="footer">
            <div class="ticker-wrap">
                <div class="ticker">
                    <span class="ticker-item">+++ Local weather: 22°C and Sunny +++</span>
                    <span class="ticker-item">+++ Train delays on Route A +++</span>
                    <span class="ticker-item">+++ Lunch starts at 12:00 +++</span>
                    <span class="ticker-item">+++ Welcome to our facility! +++</span>
                </div>
            </div>
        </footer>
    </main>

    <script>
        function updateClock() {
            const now = new Date();
            const timeStr = now.getHours().toString().padStart(2, '0') + ":" + 
                            now.getMinutes().toString().padStart(2, '0') + ":" + 
                            now.getSeconds().toString().padStart(2, '0');
            document.getElementById('live-clock').innerText = timeStr;
        }
        setInterval(updateClock, 1000);
        updateClock();
    </script>
</body>
</html>