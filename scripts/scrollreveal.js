ScrollReveal().reveal('.scroll-top', { 
  duration: 1800,  //完了するまでの時間
  origin: 'top', 
  distance: '20px', //移動する距離
  reset: false //繰り返しtrue
});

ScrollReveal().reveal('.scroll-main', { 
  duration: 1600,  //完了するまでの時間
  delay: 2300,
  origin: 'top', 
  // distance: '40px', //移動する距離
  reset: false //繰り返しtrue
});

ScrollReveal().reveal('.scroll-left', { 
  duration: 1600, 
  origin: 'left', 
  distance: '50px',
  reset: true   
});

ScrollReveal().reveal('.scroll-right', { 
  duration: 1600, 
  origin: 'right', 
  distance: '50px',
  reset: true
});

ScrollReveal().reveal('.scroll-scale', { 
  duration: 1600, 
  // scale: 1.8, //表示する前のサイズ
  reset: false
});

ScrollReveal().reveal('.scroll-image', { 
  duration: 1600,  //完了するまでの時間
  origin: 'top', 
  distance: '10px', //移動する距離
  reset: false //繰り返しtrue
});