<!DOCTYPE html>

<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analog Clock</title>
    <link rel="stylesheet" href="css/clock.css">

    <?php include('includes/styles.php') ?>
</head>

<body>
    <?php include('includes/header.php') ?>

    <main>
        <div class="clock">
            <div class="center"></div>
            <label>Analog Clock</label>
            <div style="--clr: #ff3d58; --h: 120px" id="hour" class="hand">
                <span></span>
            </div>
            <div style="--clr: #00a6ff; --h: 160px" id="min" class="hand">
                <span></span>
            </div>
            <div style="--clr: #000; --h: 190px" id="sec" class="hand">
                <span></span>
            </div>
            <ul>
                <li style="--i:1"><span>1</span></li>
                <li style="--i:2"><span>2</span></li>
                <li style="--i:3"><span>3</span></li>
                <li style="--i:4"><span>4</span></li>
                <li style="--i:5"><span>5</span></li>
                <li style="--i:6"><span>6</span></li>
                <li style="--i:7"><span>7</span></li>
                <li style="--i:8"><span>8</span></li>
                <li style="--i:9"><span>9</span></li>
                <li style="--i:10"><span>10</span></li>
                <li style="--i:11"><span>11</span></li>
                <li style="--i:12"><span>12</span></li>
            </ul>
        </div>
    </main>

    <?php include('includes/footer.php') ?>

    <script>
            let hr = document.getElementById('hour');
            let min = document.getElementById('min');
            let sec = document.getElementById('sec');

            function displayTime(){
                let date = new Date();

                let hh = date.getHours();
                let mm = date.getMinutes();
                let ss = date.getSeconds();

                let hRotation = 30*hh + mm/2;
                let mRotation = 6*mm;
                let sRotation = 6*ss;

                hr.style.transform = `rotate(${hRotation}deg)`;
                min.style.transform = `rotate(${mRotation}deg)`;
                sec.style.transform = `rotate(${sRotation}deg)`;

            }

            setInterval(displayTime, 1000);
        </script>
</body>

</html>