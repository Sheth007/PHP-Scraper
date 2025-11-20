<!DOCTYPE html>
<html lang="en">

<!-- <body>
    <center>
        <b>
            <div>Market Status : <span id="mstatus">Loading....</span></div>
        </b>
    </center>
</body> -->

</html>
<script>
    // const now = new Date();

    const prestart = new Date(now);
    const preend = new Date(now);
    prestart.setHours(9, 0, 0, 0);
    preend.setHours(9, 15, 0, 0);

    const open = new Date(now);
    const close = new Date(now);
    open.setHours(9, 15, 0, 0);
    close.setHours(15, 30, 0, 0);

    const marketclose = new Date(now);
    marketclose.setHours(15, 30, 0, 0);

    if (now >= prestart && now < preend) {

        // document.getElementById("mstatus").innerHTML = "Pre-Open<br><br>";
        setInterval(fetchPrice, 500);
    }
    if (now >= open && now < close) {

        // document.getElementById("mstatus").innerHTML = "Open<br><br>";
        setInterval(fetchPrice, 500);
    }
    // if (now >= marketclose) {

    //     // document.getElementById("mstatus").innerHTML = "Open<br><br>";
    // }
</script>