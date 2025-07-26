  var cur =document.querySelector("#cursor");
  var curblr =document.querySelector("#cursor-blur")


document.addEventListener("mousemove",function(dets){
  
     cur.style.left = dets.x-4+"px"
     cur.style.top = dets.y-4+"px"

     curblr.style.left = dets.x-150+"px"
     curblr.style.top = dets.y-150 +"px"

    
})

gsap.to("#nav",{
    backgroundColor:"#000",
    durarion:0.2,
    height:"120px",
    scrollTrigger:{
        trigger:"#nav",
        scroller:"body",
        // markers:true, 
        start: "top -30%",
        end: "top -20%",
        scrub: 2
    }


})

gsap.to("#main",{
    backgroundColor:"#000",
    scrollTrigger:{
     trigger:"#main",
     scroller:"body",
    //  markers:true,
    start:"top -40%",
    end:"top -80%",
    scrub:3,
    }
    
})


gsap.from("#aboutus img,#aboutuspara",{

  y:80,
  opacity:0,
  duration:1.1,
stagger:0.1,
  scrollTrigger:{
    trigger:"#aboutus",
    scroller:"body",
    // markers: true,
    start:"top 60%",
    end:"top 55%",
   toggleActions: "play none none reset"

  }

})


gsap.from(".card",{

  scale:0.8,
  opacity:0,
  duration:1.2,

  scrollTrigger:{
    trigger:".card",
    scroller:"body",
    // markers: true,
    start:"top 60%",
    end:"top 55%",
   toggleActions: "play none none reset"

  }

})

gsap.from("#colon1",{
  y:-70,
  x:-70,
    scrollTrigger:{
      trigger:"#colon1",
      scroller:"body",
      start: "top 55%",
      end:"top 48%",
       toggleActions: "play none none reset"
    }
})

gsap.from("#colon2",{
  y:70,
  x:70,
    scrollTrigger:{
      trigger:"#colon2",
      scroller:"body",
      start: "top 49%",
      end:"top 55%",
       toggleActions: "play none none reset"
    }
})

gsap.from("#page4 h1",{
  y:50,
  scrollTrigger:{
    trigger:"#page4 h1",
    scroll:"body",
    start:"top 75%",
    end:"top 70%",
    scrub:3

  }
})