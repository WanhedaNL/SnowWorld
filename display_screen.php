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
            <div class="ad-card"><img src="uploads/Test.jpeg" alt="Ad"></div>
            <div class="ad-card"><img src="uploads/Test.jpeg" alt="Ad"></div>
        </aside>
               
        <article class="midden_tekst">
            <img src="uploads/Test.jpeg" alt="Featured">
        </article>

        <aside class="rechts_nieuws">
            <section class="rechts_blok--ust">
                <img src="uploads/Test.jpeg" alt="News Top">
            </section>
            <section class="rechts_blok--alt">
                <img src="uploads/Test.jpeg" alt="News Bottom">
                <div class="news-caption">
                    <h3>Breaking News</h3>
                    <p>Important information is displayed here for the viewers.</p>
                </div>
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