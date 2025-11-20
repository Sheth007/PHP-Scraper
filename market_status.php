<!DOCTYPE html>
<html lang="en">

<body>
    <center>
        <b>
            <div>Market Status : <span id="mstatus">Loading....</span></div>
        </b>
    </center>
</body>

</html>
<script>
    const now = new Date();

    const mprestart = new Date(now);
    const mpreend = new Date(now);
    mprestart.setHours(9, 0, 0, 0);
    mpreend.setHours(9, 15, 0, 0);

    const mopen = new Date(now);
    const mclose = new Date(now);
    mopen.setHours(9, 15, 0, 0);
    mclose.setHours(15, 30, 0, 0);

    const marketclosed = new Date(now);
    marketclosed.setHours(15, 30, 0, 0);

    if (now >= mprestart && now < mpreend) {

        document.getElementById("mstatus").innerHTML = "Pre-Open<br><br>";
        // setInterval(fetchPrice, 500);
    }
    if (now >= mopen && now < mclose) {

        document.getElementById("mstatus").innerHTML = "Open<br><br>";
        // setInterval(fetchPrice, 500);
    }
    if (now >= marketclosed) {

        document.getElementById("mstatus").innerHTML = "Open<br><br>";
    }
</script>