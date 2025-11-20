<!DOCTYPE html>
<html lang="en">

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
        setInterval(banknifty, 500);
        setInterval(nifty50, 500);
    }
    if (now >= open && now < close) {
        setInterval(banknifty, 500);
        setInterval(nifty50, 500);
    }
</script>