/* MY DRAIN DR — main.js */
(function(){
  'use strict';
  document.addEventListener('DOMContentLoaded',function(){
    // Navbar scroll
    var nav=document.querySelector('.navbar');
    if(nav){window.addEventListener('scroll',function(){nav.classList.toggle('scrolled',window.scrollY>20)},{passive:true})}

    // Mobile menu
    var ham=document.getElementById('hamburger');
    var mob=document.getElementById('mobileMenu');
    if(ham&&mob){
      ham.addEventListener('click',function(){
        var open=mob.classList.toggle('open');
        ham.classList.toggle('open',open);
        ham.setAttribute('aria-expanded',open);
        document.body.style.overflow=open?'hidden':'';
      });
      mob.querySelectorAll('a').forEach(function(a){
        a.addEventListener('click',function(){
          mob.classList.remove('open');ham.classList.remove('open');
          ham.setAttribute('aria-expanded','false');document.body.style.overflow='';
        });
      });
    }

    // Active link
    var page=location.pathname.split('/').pop()||'index.html';
    document.querySelectorAll('.nav-link[href]').forEach(function(l){
      var href=l.getAttribute('href').split('/').pop().split('#')[0];
      if(href===page||(page===''&&href==='index.html'))l.classList.add('active');
    });

    // Scroll reveal
    var revEls=document.querySelectorAll('.reveal');
    if(revEls.length){
      var revObs=new IntersectionObserver(function(entries){
        entries.forEach(function(e){
          if(!e.isIntersecting)return;
          var siblings=[].slice.call(e.target.parentElement.querySelectorAll('.reveal:not(.in)'));
          var idx=siblings.indexOf(e.target);
          setTimeout(function(){e.target.classList.add('in')},Math.min(idx,5)*90);
          revObs.unobserve(e.target);
        });
      },{threshold:0.1,rootMargin:'0px 0px -40px 0px'});
      revEls.forEach(function(el){revObs.observe(el)});
    }

    // Counters
    document.querySelectorAll('[data-count]').forEach(function(el){
      var obs=new IntersectionObserver(function(entries){
        entries.forEach(function(e){
          if(!e.isIntersecting)return;
          obs.unobserve(el);
          var target=parseFloat(el.dataset.count);
          var suffix=el.dataset.suffix||'';
          var start=performance.now();
          var dur=1600;
          (function frame(now){
            var p=Math.min((now-start)/dur,1);
            var ease=1-Math.pow(1-p,3);
            el.textContent=Math.floor(target*ease).toLocaleString()+suffix;
            if(p<1)requestAnimationFrame(frame);
            else el.textContent=target.toLocaleString()+suffix;
          })(start);
        });
      },{threshold:0.6});
      obs.observe(el);
    });

    // FAQ
    document.querySelectorAll('.faq-btn').forEach(function(btn){
      btn.addEventListener('click',function(){
        var item=btn.closest('.faq-item');
        var isOpen=item.classList.contains('open');
        document.querySelectorAll('.faq-item.open').forEach(function(i){i.classList.remove('open')});
        if(!isOpen)item.classList.add('open');
      });
    });

    // Forms
    function handleForm(id,successMsg){
      var form=document.getElementById(id);
      if(!form)return;
      var btn=form.querySelector('[type="submit"]');
      form.addEventListener('submit',function(e){
        e.preventDefault();
        if(!form.checkValidity()){form.reportValidity();return;}
        btn.disabled=true;
        btn.innerHTML='<i class="fa-solid fa-spinner fa-spin"></i> Sending…';
        setTimeout(function(){
          btn.innerHTML='<i class="fa-solid fa-circle-check"></i> '+successMsg;
          btn.style.background='var(--green)';btn.style.borderColor='var(--green)';
          form.reset();
          setTimeout(function(){
            btn.innerHTML=btn.dataset.original||'Submit';
            btn.disabled=false;btn.style.background='';btn.style.borderColor='';
          },4000);
        },1400);
      });
      if(btn)btn.dataset.original=btn.innerHTML;
    }
    handleForm('quoteForm','Request Received! We\'ll call you shortly.');
    handleForm('contactForm','Message Sent! We\'ll respond soon.');

    // Back to top
    var btt=document.getElementById('backTop');
    if(btt){
      window.addEventListener('scroll',function(){btt.classList.toggle('show',window.scrollY>500)},{passive:true});
      btt.addEventListener('click',function(){window.scrollTo({top:0,behavior:'smooth'})});
    }
  });
})();
