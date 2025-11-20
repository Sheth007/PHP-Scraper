<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <b>
        <div>Market Status : <span id="mstatus">Loading....</span></div>
    </b>
    <b>
        <div>Bank Nifty : <span id="current-price">Loading...</span></div>
    </b>

    <script>
        function fetchPrice() {
            fetch('https://etapi.indiatimes.com/et-screener/index-summary?indexId=1913')
                .then(response => response.json())  // Parse the response as JSON
                .then(data => {
                    // fetching the 'lastTradedPrice' is directly in the response object
                    const price = data.lastTradedPrice;

                    if (price) {
                        document.getElementById('current-price').innerText = price;
                        // console.log('Price updated:', price, 'at', new Date().toLocaleTimeString());
                    } else {
                        console.log('Price data not found!');
                    }
                })
                .catch(error => {
                    console.error('Error fetching price:', error);
                    document.getElementById('current-price').innerText = 'Error loading data';
                });
        }

        fetchPrice();

        // uncommnent this below line to fetch the price live
        // setInterval(fetchPrice, 1000);

        // MutationObserver for detecting changes in the price display (optional)
        // const b = document.getElementById('current-price');
        // const observer = new MutationObserver(() => {
        //     // console.log('Price changed to', b.innerText);
        // });

        // observer.observe(b, { childList: true });

        const now = new Date();
        const h = now.getHours();
        const m = now.getMinutes();
        if (h >= 9 && m < 15) {
            document.getElementById("mstatus").innerHTML = "Pre-Open<br><br>";
            setInterval(fetchPrice, 900);
        }

        if (h > 9 && m > 15) {
            document.getElementById("mstatus").innerHTML = "Open<br><br>";
            setInterval(fetchPrice, 900);
        }

        if (h > 15 && m > 30) {
            document.getElementById("mstatus").innerHTML = "Closed<br><br>";
        }

    </script>

</body>

</html>