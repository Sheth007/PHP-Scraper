<!DOCTYPE html>
<html lang="en">

</html>
<script>
    // const now = new Date();

    const eprestart = new Date(now);
    const epreend = new Date(now);
    eprestart.setHours(9, 0, 0, 0);
    epreend.setHours(9, 15, 0, 0);

    const eopen = new Date(now);
    const eclose = new Date(now);
    eopen.setHours(9, 15, 0, 0);
    eclose.setHours(15, 30, 0, 0);

    const marketeclose = new Date(now);
    marketeclose.setHours(15, 30, 0, 0);

    if (now >= eprestart && now < epreend) {
        setInterval(hul, 2000);
        setInterval(bgv, 2000);
        setInterval(iil, 2000);
    }
    if (now >= open && now < eclose) {
        setInterval(hul, 2000);
        setInterval(bgv, 2000);
        setInterval(iil, 2000);
    }
</script>