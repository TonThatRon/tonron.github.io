

// client section owl carousel
$(".client_owl-carousel").owlCarousel({
    loop: true,
    margin: 20,
    dots: false,
    nav: true,
    navText: [],
    autoplay: true,
    autoplayHoverPause: true,
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    responsive: {
        0: {
            items: 1
        },
        768: {
            items: 2
        }
    }
});




//   ------------Year-----------


function animateNumber(finalNumber, delay, startNumber = 0, callback) {
  let currentNumber = startNumber
  const interval = window.setInterval(updateNumber, delay)
  function updateNumber() {
    if (currentNumber >= finalNumber) {
      clearInterval(interval)
    } else {
      currentNumber++
      callback(currentNumber)
    }
  }
}


document.addEventListener('DOMContentLoaded', function () {
  animateNumber(2, 1, 0, function (number) {
    const formattedNumber = number.toLocaleString()
    document.getElementById('number1').innerText = formattedNumber
    
  })
  
  animateNumber(1500, 30, 0, function (number) {
    const formattedNumber = number.toLocaleString()
    document.getElementById('number2').innerText = formattedNumber
  })
  
  animateNumber(500, 2, 0, function (number) {
    const formattedNumber = number.toLocaleString()
    document.getElementById('number3').innerText = formattedNumber
  })
  animateNumber(1250, 2, 0, function (number) {
      const formattedNumber = number.toLocaleString()
      document.getElementById('number4').innerText = formattedNumber
    })
})
