function countDown() {
  let christmasTime = new Date("12 24 2022").getTime();
  let nowTime = new Date().getTime();
  let timeRemaining = christmasTime - nowTime;

  const day = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
  const hour = Math.floor(timeRemaining / (1000 * 60 * 60));
  const min = Math.floor(timeRemaining / (1000 * 60));
  const sec = Math.floor(timeRemaining / 1000);

  let hourPos = hour - day * 24;
  let minPos = min - hour * 60;
  let secPos = sec - min * 60;

  if (hourPos < 10) {
    hourPos = "0" + hourPos;
  }
  if (minPos < 10) {
    minPos = "0" + minPos;
  }
  if (secPos < 10) {
    secPos = "0" + secPos;
  }

  document.getElementById("days").innerHTML = Math.floor(day);
  document.getElementById("hours").innerHTML = hourPos;
  document.getElementById("minutes").innerHTML = minPos;
  document.getElementById("seconds").innerHTML = secPos;

  if (Math.floor(day) == 0 && hourPos == 0 && minPos == 0 && secPos == 0) {
    document.getElementById("days").innerHTML = "Merry Christmas";
  }
}
setInterval(countDown, 100);
